window.$ = require('jquery');

$(document).ready(function() {

    require('ga-lite');
    require('cookieconsent');

    require('./components/analytics');
    require('./components/consent');
    require('./components/sw');
    require('./components/contact');
    require('./components/dragscroll');
    require('./components/board');
});
