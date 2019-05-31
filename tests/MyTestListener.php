<?php
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\TestListener;

class MyTestListener implements TestListener
{
    public function addError(PHPUnit\Framework\Test $test, \Throwable $e, float $time): void
    {
        
    }

    public function addWarning(PHPUnit\Framework\Test $test, PHPUnit\Framework\Warning $e, float $time): void
    {

    }

    public function addFailure(PHPUnit\Framework\Test $test, PHPUnit\Framework\AssertionFailedError $e, float $time): void
    {

    }

    public function addIncompleteTest(PHPUnit\Framework\Test $test, \Throwable $e, float $time): void
    {

    }

    public function addRiskyTest(PHPUnit\Framework\Test $test, \Throwable $e, float $time): void
    {

    }

    public function addSkippedTest(PHPUnit\Framework\Test $test, \Throwable $e, float $time): void
    {

    }

    public function startTest(PHPUnit\Framework\Test $test): void
    {

    }

    public function endTest(PHPUnit\Framework\Test $test, float $time): void
    {

    }

    public function startTestSuite(PHPUnit\Framework\TestSuite $suite): void
    {
        shell_exec('php artisan config:cache --env=testing');
    }

    public function endTestSuite(PHPUnit\Framework\TestSuite $suite): void
    {
        shell_exec('php artisan config:cache --env=dev');
    }
}
?>