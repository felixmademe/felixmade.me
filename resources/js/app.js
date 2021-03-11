window.$ = require('jquery');

$(document).ready(function() {

    require('ga-lite');
    require('cookieconsent');

    require('./modules/analytics');
    require('./modules/consent');
    require('./modules/sw');

    require('./components/contact');
    require('./components/dragscroll');
    require('./components/board');

});
