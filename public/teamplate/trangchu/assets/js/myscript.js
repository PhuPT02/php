$(document).ready(function(){
    $('.panel-title,.font-alt').on('click',function(){
        alert('ádasd');
       a=($(this).offset().top)-60;
        $('body,html').animate( { scrollTop : a },500 );
    });
});