var InitParticlesJs = function () {
    var div = document.createElement("DIV");
    div.setAttribute("id", "particles-js");
    document.body.appendChild(div);
    particlesJS.load(
        "particles-js",
        "assets/vendors/particles.js-master/particlesjs-config.json",
        function () {
            console.log("callback - particles.js config loaded");
        }
    );
};
InitParticlesJs();
