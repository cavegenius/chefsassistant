// Expand text are on enter click
$(document)
    .one('focus.textarea', '.autogrow', function(){
        var savedValue = this.value;
        this.value = '';
        this.baseScrollHeight = this.scrollHeight;
        this.value = savedValue;
    })
    .on('input.textarea', '.autogrow', function(){
        var minRows = this.getAttribute('min-rows')|0, rows;
        var maxRows = this.getAttribute('max-rows')|5;
        rows = this.rows;

        $('.autogrow').on("keypress", function(e) {
            /* ENTER PRESSED*/
            if (e.keyCode == 13 && this.rows != maxRows) {
                rows += 1;
                //console.log(this.scrollHeight);
                this.rows = rows;
            }
        });
        
    });


// Add a new row to ingredients section of the form.
$(document).ready( function() {
    $( 'body' ).on( 'click', '#addIngredient', function(e) {
        e.preventDefault();
        
        let count = $( '#ingredientCount' ).val();
        count++;
        $( '#ingredientCount' ).val( count );
        var content = '<div class="form-row"><div class="col-2"><input class="form-control" placeholder="10" name="quantity'+count+'" type="text" value=""></div><div class="col-4"><input class="form-control unit" placeholder="Unit" name="unit'+count+'" type="text" value=""></div><div class="col-6"><input class="form-control" placeholder="Ingedient Name" name="itemName'+count+'" type="text" value=""></div></div>';
        $('#ingredients').append( content );
    });

    $( 'body' ).on( 'click', '#addStep', function(e) {
        e.preventDefault();
        
        let counts = $( '#stepCount' ).val();
        counts++;
        $( '#stepCount' ).val( counts );
        var contents = '<div class="form-row"><div class="col-12"><textarea class="form-control autogrow" min-rows="1" max-rows="5" rows="1" placeholder="Step Details" name="step'+counts+'" cols="50"></textarea></div></div>';
        $('#steps').append( contents );
    });
});
