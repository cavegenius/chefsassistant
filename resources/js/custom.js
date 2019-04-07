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
        //console.log( minRows );
        //    rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 16);
        //    console.log( this.scrollHeight );
        console.log(rows);
        $('.autogrow').on("keypress", function(e) {
            /* ENTER PRESSED*/
            if (e.keyCode == 13 && this.rows != maxRows) {
                rows += 1;
                console.log(rows);
                this.rows = rows;
            }
        });
        
    });