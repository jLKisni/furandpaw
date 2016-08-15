/**
 * Created by John on 7/17/2016.
 */

$(document).ready(function(){

    $('#profile-modal').click(function(){

        $('.profilemodal').fadeIn("slow");
    });

    $('#logout').click(function(){
        $('.profilemodal').fadeOut("medium");
    });

    $('#logout-button').click(function(){
        $('.profilemodal').fadeOut("medium");
    });

});
