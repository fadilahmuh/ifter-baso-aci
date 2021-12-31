"use strict";

$(".pwstrength").pwstrength();

$(document).on("click", "#agree", function(e) {
    if (this.checked){
        $('#regis').prop( "disabled",false );
    } else {
        $('#regis').prop( "disabled", true );
    }
});