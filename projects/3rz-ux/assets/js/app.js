var InitParticlesJs = function (configFile) {
    var div = document.createElement("DIV");
    div.setAttribute("id", "particles-js");
    document.body.appendChild(div);
    particlesJS.load("particles-js", configFile, function () {
        console.log("callback - particles.js config loaded");
    });
};
