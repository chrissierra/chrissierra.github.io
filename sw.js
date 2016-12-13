var cacheaguardar= "v9";
this.addEventListener('install', function(event) {
  event.waitUntil(
    caches.open(cacheaguardar).then(function(cache) {
      return cache.addAll([
        "jquery-1.3.2.min.js",
        "index.html",
        "https://www.youtube.com/watch?v=zuM0-hdfJeE",
        "youtube.html",
        "indexedDB.js",
        "peo.html"
        
        
       
      ]);
    })
  );
});


this.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request).then(function(resp) {
      return resp || fetch(event.request).then(function(response) {
        caches.open(cacheaguardar).then(function(cache) {
          cache.put(event.request, response.clone());
        });
        return response;
      });
    }).catch(function() {
      return caches.match('peo.html');
    })
  );
});

this.addEventListener('activate', function(event) {
  var cacheWhitelist = [cacheaguardar];

  event.waitUntil(
    caches.keys().then(function(keyList) {
      return Promise.all(keyList.map(function(key) {
        if (cacheWhitelist.indexOf(key) === -1) {
          return caches.delete(key);
        }
      }));
    })
  );
});

