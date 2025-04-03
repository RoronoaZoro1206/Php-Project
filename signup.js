function showSignup() {
    document.getElementById("signupForm").style.display = "block";
    document.getElementById("loginForm").style.display = "none";

    document.getElementById("signupBtn").classList.add("active");
    document.getElementById("loginBtn").classList.remove("active");
}

function showLogin() {
    document.getElementById("signupForm").style.display = "none";
    document.getElementById("loginForm").style.display = "block";

    document.getElementById("signupBtn").classList.remove("active");
    document.getElementById("loginBtn").classList.add("active");
}

function registerUser() {
    let email = document.getElementById("signupEmail").value;
    let password = document.getElementById("signupPassword").value;
    let confirm = document.getElementById("signupConfirm").value;

    if (password !== confirm) {
        document.getElementById("signupMessage").innerHTML = "Passwords do not match!";
        return;
    }

    fetch("signup.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `email=${email}&password=${password}`
    })
    .then(response => response.text())
    .then(data => document.getElementById("signupMessage").innerHTML = data);
}

function loginUser() {
    let email = document.getElementById("loginEmail").value;
    let password = document.getElementById("loginPassword").value;

    fetch("login.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `email=${email}&password=${password}`
    })
    .then(response => response.text())
    .then(data => document.getElementById("loginMessage").innerHTML = data);
}

function togglePassword(id) {
    let input = document.getElementById(id);
    input.type = input.type === "password" ? "text" : "password";
}

document.getElementById("signupForm").addEventListener("submit", function(event) {
    event.preventDefault(); 

    let email = document.getElementById("signupEmail").value;
    let password = document.getElementById("signupPassword").value;
    let confirmPassword = document.getElementById("signupConfirm").value;
    let messageBox = document.getElementById("signupMessage");

    if (password !== confirmPassword) {
        messageBox.innerHTML = "Passwords do not match!";
        return;
    }

    fetch("signup.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded",
        },
        body: `email=${encodeURIComponent(email)}&password=${encodeURIComponent(password)}`,
    })
    .then(response => response.text())
    .then(data => {
        messageBox.innerHTML = data; // Display response message from signup.php
    })
    .catch(error => {
        console.error("Error:", error);
        messageBox.innerHTML = "Signup failed!";
    });
});
