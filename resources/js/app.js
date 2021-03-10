window.$ = require('jquery');

$(document).ready(function() {

    require('ga-lite');
    require('cookieconsent');

    require('./components/analytics');
    require('./components/consent');
    require('./components/contact');
    require('./components/dragscroll');
    require('./components/board');
});
