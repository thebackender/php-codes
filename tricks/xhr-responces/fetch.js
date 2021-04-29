const requestURL = 'https://jsonplaceholder.typicode.com/users';

function sendRequest(method, url, body = null){
	/*return fetch(url).then(response => {
		return response.json();
	});*/ //For GET method

	const headers = {
		'Content-Type': 'application/json'
	};
	return fetch(url, {
		method: method,
		body: JSON.stringify(body),
		headers: headers
	}).then(response => {
		if (response.ok) {
			return response.json();
		}else{
			return response.json().then(error => {
				const e = new Error('Чтото Пошло не так');
			e.data = error;
			throw e;
			});
		}
	});

}

//sendRequest('GET', requestURL).then(data => console.log(data)).catch(err => console.log(err)); //for GET method

const body_val = {name: 'Vladilen', age: 26};

sendRequest('POST', requestURL, body_val).then(
	data => console.log(data)).catch(err => console.log(err));