<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Illuminate\Auth\Notifications\ResetPassword;

class LoginTest extends TestCase {

    use RefreshDatabase;

    /**
     * Test a user can view a login form
     * 
     * @return void
     */
    public function testUserCanViewALoginForm() {
        //
        $response = $this->get('/login');

        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    /**
     * Test a user can not view the login form if already authenticated
     * 
     * @return void
     */
    public function testUserCannotViewALoginFormWhenAuthenticated() {
        $user = factory(User::class)->make();
        //factory(User::class)->create(); // Creates a user and inserts him into the database
        //factory(User::class)->make(); // Creates a user object
        /* Alternate method:
            User::create([
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => bcrypt('secret'),
            ]);
        */

        $response = $this->actingAs($user)->get('/login');
        $response->assertRedirect('/recipes');
    }

    /**
     * Test a user can login with correct credentials
     * 
     * @return void
     */
    public function testUserCanLoginWithCorrectCredentials() {
        $user = factory(User::class)->create([
            'password' => bcrypt($password = 'i-love-laravel'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);

        $response->assertRedirect('/recipes');
        $this->assertAuthenticatedAs($user);
    }

    /**
     * Test a user can not login with incorrect password
     * 
     * @return void
     */
    public function testUserCannotLoginWithIncorrectPassword() {
        $user = factory(User::class)->create([
            'password' => bcrypt('i-love-laravel'),
        ]);
        
        $response = $this->from('login')->post('/login', [
            'email' => $user->email,
            'password'=> 'invalid-password',
        ]);

        $response->assertRedirect('login');
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

    /**
     * Test the remember me option
     * 
     * @return void
     */
    public function testRememberMeFunctionality() {
        $user = factory(User::class)->create([
            'id' => random_int(1,100),
            'password' => bcrypt($password = 'i-love-laravel'),
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
            'remember' => 'on',
        ]);

        $response->assertRedirect('/recipes');
        // Cookie Assertion
        $value = vsprintf('%s|%s|%s', [
            $user->id,
            $user->getRememberToken(),
            $user->password,
        ]);
        $response->assertCookie(Auth::guard()->getRecallerName(), vsprintf('%s|%s|%s', [
            $user->id,
            $user->getRememberToken(),
            $user->password,
        ]));

        $this->assertAuthenticatedAs($user);
    }

    /**
     * Test a user recieves the password reset email
     * 
     * @return void
     */
    public function testUserReceivesAnEmailWithAPasswordResetLink() {
        Notification::fake();

        $user = factory(User::class)->create();

        $response = $this->post('/password/email', [
            'email' => $user->email,
        ]);

        $token = DB::table('password_resets')->first();
        $this->assertNotNull($token);

        Notification::assertSentTo($user, ResetPassword::class, function ($notification, $channels) use ($token) {
            return Hash::check($notification->token, $token->token) === true;
        });
    }
}