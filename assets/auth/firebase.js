// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-analytics.js";
import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword, signOut } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-auth.js";

// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyDht7eozD94slWyINw4xTUiJG6mIiBdAA0",
    authDomain: "errans-b09bc.firebaseapp.com",
    projectId: "errans-b09bc",
    storageBucket: "errans-b09bc.appspot.com",
    messagingSenderId: "856686887803",
    appId: "1:856686887803:web:51706353b79461be1673de",
    measurementId: "G-F7EX95DLF1"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
const auth = getAuth();
// Registration
$("#regBtn").click(function () {
    const email = document.getElementById("usrEmail").value;
    const password = document.getElementById("usrPwd").value;

    createUserWithEmailAndPassword(auth, email, password)
        .then((userCredential) => {
            const user = userCredential.user;
            console.log(user);

            // Send a unique identifier to the server

            var userData = {
                "uid": user.uid,
                "uemail": user.email,
            }

            $.ajax({
                url: "./auth.php",
                type: "POST",
                data: { userData: userData },
                success: function (response) {
                    console.log(response);
                    // Handle the response if needed
                    modal_message(1,'Registration Success','../../home.php');
                },
                error: function (xhr, status, error) {
                    console.log("An error soccurred:", error);
                }
            });
        })
        .catch((error) => {
            const errorMessage = error.message;
            console.log(errorMessage);
            alert(errorMessage);
        });
});

$("#logBtn").click(function () {
    const email = document.getElementById("usrEmail").value;
    const password = document.getElementById("usrPwd").value;
    signInWithEmailAndPassword(auth, email, password)
        .then((userCredential) => {
            const user = userCredential.user;
            console.log(user);
            // Send the user ID to the server
            var userData = {
                "uid": user.uid,
                "uemail": user.email,
            }

            $.ajax({
                url: "./auth.php",
                type: "POST",
                data: { userData: userData },
                success: function (response) {
                    console.log(response);
                    modal_message(1,'Login Success','../../home.php');
                    // location.href = "../../index.php";
                },
                error: function (xhr, status, error) {
                    console.log("An error soccurred:", error);
                }
            });
        })
        .catch((error) => {
            const errorMessage = error.message;
            console.log(errorMessage);
            alert(errorMessage);
        });
});

// Logout
$("#logoutBtn").click(function () {
    signOut(auth).then(() => {
        console.log('Sign-out successful.');
        $.ajax({
            url: "./pages/register/logout.php",
            type: "POST",
            success: function (response) {
                console.log(response);
                location.href = "./index.php";
            },
            error: function (xhr, status, error) {
                console.log("An error occurred:", error);
            }
        });
    }).catch((error) => {
        console.log('An error happened.');
    });
});
