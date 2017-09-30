importScripts('https://www.gstatic.com/firebasejs/4.4.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/4.4.0/firebase-messaging.js');
importScripts('https://www.gstatic.com/firebasejs/4.4.0/firebase.js');

 // Initialize Firebase
 var config = {
    apiKey: "AIzaSyAWIc20EP_h1ALQmNYiUmyn-SF5q30zm90",
    authDomain: "watchtower-48dac.firebaseapp.com",
    databaseURL: "https://watchtower-48dac.firebaseio.com",
    projectId: "watchtower-48dac",
    storageBucket: "watchtower-48dac.appspot.com",
    messagingSenderId: "880783848352"
  };
  firebase.initializeApp(config);