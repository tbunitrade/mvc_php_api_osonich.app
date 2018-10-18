$(document).ready( function(){
       console.log('load ok');

    $('#watch').on('click', function(e){
       console.log('i see click');
       e.preventDefault();

        var name = $('#name').val();
        var email = $('#email').val();
        var task = $('#task').val();
        var image = $('#preview_img').css('background','');

        console.log('client ' + name + email + task + image);
    });

});