// start the background particles
var InitParticlesJs = function (configFile) {
    var div = document.createElement("DIV");
    div.setAttribute("id", "particles-js");
    document.body.appendChild(div);
    particlesJS.load("particles-js", configFile, function () {
        console.log("callback - particles.js config loaded");
    });
};

// open the lateral menu
var OpenLateralMenu = function() {
    document.querySelector('body').classList.add('lateral-menu-opened');
}

// close the lateral menu
var CloseLateralMenu = function() {
    document.querySelector('body').classList.remove('lateral-menu-opened');
}
