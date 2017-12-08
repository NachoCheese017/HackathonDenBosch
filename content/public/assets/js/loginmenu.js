var login = document.getElementById("login");
var logintoggle = document.getElementById("logintoggle");

var loginistoggled = false;

logintoggle.addEventListener("click", function() {
    if(loginistoggled == false) {
        login.style.top = "45px";
        loginistoggled = true;
    }
    else {
        login.style.top = "-120px";
        loginistoggled = false;
    }
});