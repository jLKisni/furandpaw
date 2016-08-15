/**
 * Created by John on 7/30/2016.
 */
$(function(){

    $('#edit-schedule').click(function(){

        $('#save-schedule').show();
        $('#edit-clinic-schedule').show();
        $('#edit-clinic-title').attr('type','text');
        $('#clinic-title').hide();
        $('#clinic-schedule').hide();
        $(this).hide();
    });

    $('#save-schedule').click(function(){
        $(this).hide();
        $('#clinic-schedule').show();
        $('#edit-clinic-title').attr('type','hidden');
        $('#clinic-title').show();
        $('#edit-clinic-schedule').hide();
        $('#edit-schedule').show();
    });

    $('#edit-rates').click(function(){
        $(this).hide();
        $('#save-rates').show();
        $('#rate-title-header').attr('type','text');
        $('#rate-title').attr('type','text');
        $('#rate-desc1').attr('type','text');
        $('#rate-desc2').attr('type','text');
        $('#rate-desc3').attr('type','text');
        $('#rate-desc4').attr('type','text');

        $('.rate-title-header').hide();
        $('.rate-title').hide();
        $('.rate-desc').hide();

    });

    $('#save-rates').click(function(){
        $(this).hide();
        $('#edit-rates').show();
        $('#rate-title-header').attr('type','hidden');
        $('#rate-title').attr('type','hidden');
        $('#rate-desc1').attr('type','hidden');
        $('#rate-desc2').attr('type','hidden');
        $('#rate-desc3').attr('type','hidden');
        $('#rate-desc4').attr('type','hidden');

        $('.rate-title-header').show();
        $('.rate-title').show();
        $('.rate-desc').show();

    });

    $('#edit-service').click(function(){
        $(this).hide();
        $('#save-service').show();
        $('#service-title').attr('type','text');
        $('#service-desc').show();

        $('.service-title').hide();
        $('.service-desc').hide();
    });

    $('#save-service').click(function(){
        $(this).hide();
        $('#edit-service').show();
        $('#service-title').attr('type','hidden');
        $('#service-desc').hide();

        $('.service-title').show();
        $('.service-desc').show();
    });

    $('#edit-location').click(function(){
        $(this).hide();
        $('#save-location').show();
        $('#location').show();
    });

    $('#save-location').click(function(){
        $(this).hide();
        $('#edit-location').show();
        var str = $('#location-value').val();
        var location = str.split(" ");
        var i = 0;
        do{
            location[i] += "+";
            i++;
        } while(i < location.length - 1);


        var newlocation = location.join().replace(/,/g,'');
        $('#location-frame').attr('src','https://www.google.com/maps/embed/v1/place?q='+newlocation+'&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU');
        $('#location').hide();
    });



});