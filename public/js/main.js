
particlesJS.load('particles-js', '../particles.json', function() {
  console.log('callback - particles.js config loaded');
});

new fullpage('#fullpage', {
	//options here
    navigation: true,
    parallax: true,
    responsiveWidth: 700,
    anchors: ['home', 'intro', 'jobs', 'about', 'contact', 'footer'],
    sectionsColor: ['#FFF', '#FFF', '#FFF', '#7BED9F', '#FFF', '#3E3E3E'],
    parallax: true,
    onLeave: function(origin, destination, direction){
        console.log("Leaving section" + origin.index);
    },
});

$("#changing-text").Morphext({
    animation: "fadeInUp",
    separator: ",",
    speed: 3500,
    complete: function () {
    }
});
