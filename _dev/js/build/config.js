requirejs.config({
	paths: {
		jquery : "../lib/jquery.min",
		main : "../app/main",
	},
	shim: {
		jquery : {
			exports : "$"
		},
		main : {
			deps : ["jquery"]
		}
		}
});

require(["main"]);