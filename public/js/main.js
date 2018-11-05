particlesJS.load( 'particles-js', '/public/js/particles.json', function() {} );

new fullpage('#fullpage', {
    licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
    navigation: false,
    anchors: ['home', 'intro', 'jobs', 'about', 'contact', 'footer'],
    sectionsColor: ['#FFF', '#FFF', '#FFF', '#7BED9F', '#FFF', '#3E3E3E']
});

$("#changing-text").Morphext({
    animation: "fadeInUp",
    separator: ",",
    speed: 3500
});
