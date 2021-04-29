var from = null, start = 0, url = 'http://localhost/chat-app-ajax/data.php';

$(document).ready(function() {
	from = prompt("Please enter your name"); 
	load();
		$('form').submit(function(e){
            $.post(url, {
                message: $('#message').val(),
                from: from
                });
                $('#message').val('');
            return false;
		});
});
function load(){
    $.get(url + '?start=' + start, function(result){
        if(result.items){
            result.items.forEach(item =>{
                start = item.id;
                $('#messages').append(renderMessage(item));
            })
        };
        load();
    });
}
function renderMessage(item){
	//let time = new Date(item.created);
	//time = `${time.getHours()}:${time.getMinutes()}`;
    return '<style>.'+from+'{margin-left:1000px;}</style><div class="msg '+item.from+'"><p>'+item.from+'</p>'+item.message+'</div>';
}