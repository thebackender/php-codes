const requestURL = 'https://jsonplaceholder.typicode.com/users';

/*const xhr = new XMLHttpRequest();
	xhr.open('GET', requestURL); // get data by url
	xhr.responseType = 'json'; //get json type data
	xhr.onload = function(){
		if (xhr.status >= 400){
			console.error(xhr.response);//get log error
		}else{
			console.log(xhr.response);//show result
		}
		//console.log(JSON.parse(xhr.response)); //convert string to JSON
	}
	xhr.onerror = function(){
		console.log(xhr.response);//get error
	}
	xhr.send(); // send request
*/

function sendRequest(method, url, body = null){
	return new Promise((resolve, reject) => {
		const xhr = new XMLHttpRequest();
		xhr.open(method, url);
		xhr.responseType = 'json';
		xhr.setRequestHeader('Content-Type', 'application/json');
		xhr.onload = function(){
			if (xhr.status >= 400){
				reject(xhr.response);
			}else{
				resolve(xhr.response);
			}
			//console.log(JSON.parse(xhr.response)); 
		}
		xhr.onerror = function(){
			reject(xhr.response);
		}
		xhr.send(JSON.stringify(body));//convert json to string
	});
	
}

//sendRequest('GET', requestURL).then(data => console.log(data)).catch(err => console.log(err)); //for GET method

const body_val = {name: 'Vladilen', age: 26};

sendRequest('POST', requestURL, body_val).then(
	data => console.log(data)).catch(err => console.log(err));