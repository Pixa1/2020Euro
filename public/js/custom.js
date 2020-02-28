$('.menu-icon').on('click', function(){
    $(this).toggleClass('open');
    $('.left-side-bar').toggleClass('open');
});

var w = $(window).width();
$(document).on('touchstart click', function(e){
    if($(e.target).parents('.left-side-bar').length == 0 && !$(e.target).is('.menu-icon, .menu-icon span'))
    {
        $('.left-side-bar').removeClass('open');
        $('.menu-icon').removeClass('open');
    };
});
$(window).on('resize', function() {
    var w = $(window).width();
    if ($(window).width() > 1200) {
        $('.left-side-bar').removeClass('open');
        $('.menu-icon').removeClass('open');
    }
});


// sidebar menu Active Class
$('#accordion-menu').each(function(){
    var vars = window.location.href.split("/").pop();
    $(this).find('a[href="'+vars+'"]').addClass('active');
});
toastr.options = {
"closeButton": false,
"debug": false,
"newestOnTop": false,
"progressBar": true,
"positionClass": "toast-top-right",
"preventDuplicates": false,
"onclick": null,
"showDuration": "300",
"hideDuration": "1000",
"timeOut": "5000",
"extendedTimeOut": "1000",
"showEasing": "swing",
"hideEasing": "linear",
"showMethod": "fadeIn",
"hideMethod": "fadeOut"
}