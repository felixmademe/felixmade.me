particlesJS.load( 'particles-js', '/public/js/particles.json', function() {} );

new fullpage('#fullpage',
{
    licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
    navigation: false,
    autoScrolling: false,
    anchors: ['home', 'intro', 'about', 'jobs', 'contact', 'footer'],
    sectionsColor: ['#FFF', '#FFF', '#7BED9F', '#FFF', '#9C88FF', '#3E3E3E']
});

$("#changing-text").Morphext(
    {
    animation: "fadeInUp",
    separator: ",",
    speed: 3500
});

var mySwiper = new Swiper('.swiper-jobs',
{
    speed: 1500,
    spaceBetween: 10,
    loop: true,
    navigation:
    {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
    },

});
