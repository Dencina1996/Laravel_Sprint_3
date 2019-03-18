$( document ).ready(function() {
    elementAttr();
});

function elementAttr() {
	$("input").attr('autocomplete', 'off');
}

function errorDisplay(text) {
	$("body").append($("<div>").attr('id', 'errorDiv')
	.append('<img src="/svg/error.jpg">')
	.append("<br>Se han presentado errores: ")
	.append("<br>· "+text));

	setTimeout(function() {
		$("div[id='errorDiv']").remove();
	}, 5000);
}