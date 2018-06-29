console.log('from service workerdHhg');
var self = this;
var urlMain;
self.addEventListener("push", function(event) {
   event.waitUntil(
      fetch("https://guarded-hollows-96319.herokuapp.com/getnotification.php", {
      method: "get"
   })
  .then(function(response) {
     return response.json();
   })
  .then(function(result) {
   
   urlMain = result.data.url;
   const options = {
      body: result.data.msg,
      icon: result.data.logo,
      image: result.data.name,
      action: result.data.url
    };
   return self.registration.showNotification(result.data.title, options);
   })
   );
});

self.addEventListener("notificationclick", function(event) {
   event.notification.close();
   const promiseChain = clients.openWindow(urlMain);
    event.waitUntil(promiseChain);
});