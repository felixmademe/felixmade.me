var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    '/',
    '/css/app.css',
    '/js/app.js',
    '/img/favi/android-chrome-192x192.png',
    '/img/favi/android-chrome-512x512.png',
    '/img/favi/apple-touch-icon.png',
    '/img/favi/favicon-16x16.png',
    '/img/favi/favicon-32x32.png',
];

// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
            .then(cache => {
                return cache.addAll(filesToCache);
            })
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                    .filter(cacheName => (cacheName.startsWith("pwa-")))
                    .filter(cacheName => (cacheName !== staticCacheName))
                    .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

// Serve from Cache
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
            .catch(() => {
                return caches.match('offline');
            })
    )
});
