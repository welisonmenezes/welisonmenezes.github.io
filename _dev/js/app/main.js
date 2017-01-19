define(function(require){
	require("../plugins/scroll");
	require("../plugins/jquery.html5-placeholder-shim");

	var initPlugins = require("../app/initPlugins");
	var utilFuncs = require("../app/utilFuncs");

	$(document).ready(function(){

		initPlugins.init();
		utilFuncs.init();

		$("body").fadeTo(300, 1);
		$(window).scroll();
		$(window).resize();
	});
});