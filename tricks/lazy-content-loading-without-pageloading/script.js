window.onload = function(){
    document.querySelector(".preloader").style.display = "none";
    document.getElementById("body").style.overflowY="scroll";
};
setTimeout(function(){
	var i = 1
    while (i<5) {
    	document.getElementById("img"+i).src="images/"+i+".jpg";
    	i++;
    }
}, 2000);