//Check Night Mode
var body = document.getElementsByTagName('body');
var content = document.getElementById('content');
var status = getCookie("night");
if (status != "") {
	body[0].style.background="#000";
	content.style.color="#fff";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function night(){
	if (status != "") {
		document.cookie = "night=;";
		body[0].style.background="#fff";
		content.style.color="#000";

	}else{
		document.cookie = "night=dark;";
		body[0].style.background="#000";
		content.style.color
	}
	location.reload();
}