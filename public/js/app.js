// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/12.1.0/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/12.1.0/firebase-analytics.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyB2LH_tLpnUzkz8qtGAu5qey3h0_8CDYvA",
    authDomain: "old-school-forum.firebaseapp.com",
    projectId: "old-school-forum",
    storageBucket: "old-school-forum.firebasestorage.app",
    messagingSenderId: "536938030423",
    appId: "1:536938030423:web:a9fb65d403a332c5470a12",
    measurementId: "G-6F9T17X0CF"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
console.log(app);