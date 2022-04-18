$(function() {
    changeNavbarStateOnScroll();

    /**
     * On scroll event
     * Raise changeNavbarStateOnScroll()
     */
    $(window).on('scroll', function() {
        changeNavbarStateOnScroll();
    });

    /**
     * Add active class on navbar when scrool reach 10px
     */
    function changeNavbarStateOnScroll() {
        if ($(window).scrollTop() > 10) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    }
});