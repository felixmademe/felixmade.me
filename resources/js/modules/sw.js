if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/serviceworker.js', {
        scope: '.'
    }).then(function (registration) {
        // Registration was successful
    }, function (err) {
        // registration failed :(
    });
}
