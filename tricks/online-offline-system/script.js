setInterval(function(){ 
	const status = window.navigator.onLine;
	if(status) online()
	else offline()
	 
	 
	window.addEventListener('online', online);
	window.addEventListener('offline', offline);
	 
	 
	function online(){
	    document.getElementById('status').innerHTML = 'Online';
	    document.getElementById('sbar').classList.remove('offline');
	    document.getElementById('sbar').classList.add('online');
	}
	 
	function offline(){
	    document.getElementById('status').innerHTML = 'Offline';
	    document.getElementById('sbar').classList.remove('online');
	    document.getElementById('sbar').classList.add('offline');
	}
}, 500);
