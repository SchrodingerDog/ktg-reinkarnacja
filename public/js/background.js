$(document).ready(function() {
	var color = generateRandomColor({red:255, green:255, blue:255});
	var bg = 'rgb('+color['red']+','+color['green']+','+color['blue']+')';
	$('body').css('background-color', bg);
});
function randomBetween (min, max) {
	return Math.floor((Math.random()*max)+min);
}
function generateRandomColor(mix) {
    var _red = randomBetween(0,255);
    var _green = randomBetween(0,255);
    var _blue = randomBetween(0,255);

    // mix the color
    if (mix != null) {
        _red = (_red + mix['red']) / 2;
        _green = (_green + mix['green']) / 2;
        _blue = (_blue + mix['blue']) / 2;
    }

    var color = {red:Math.floor(_red), green:Math.floor(_green), blue:Math.floor(_blue)};
    return color;
}
