//Navigation scripts to show header on scroll up
$(document).ready(function(){
   var MQL = 1170;

    //primary navigation slide up effect
    if($(window).width() > MQL){
      var headerHeight = $('.navbar-custom').height();
        $(window).on('scroll', {
            previousTop: 0
        },
        function(){
            var currentTop = $(window).scrollTop();

            //if user is scrolling up
            if(currentTop < this.previousTop){
                if (currentTop > 0 && $('.navbar-custom').hasClass('is-fixed')){
                    $('.navbar-custom').addClass('is-visible');
                } else {
                    $('.navbar-custom').removeClass('is-visible is-fixed');
                } //scolling down
            } else {
                $('.navbar-custom').removeClass('is-visible');
                if(currentTop > headerHeight && !$('.navbar-custom').hasClass('is-fixed')){
                    $('.navbar-custom').addClass('is-fixed');
                }
            }
            this.previousTop = currentTop;
        });
        //initialize tooltip
        $('[data-toggle="tooltip"]').tooltip();
    }
});