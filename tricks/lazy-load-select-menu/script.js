function loadMenu(){       
    $.ajax({
        type:'GET',
        url: "menu.php",   
        success:function(data){
            if(data != ""){
                $("#place-for-menu").html(data);
            }
        }
    });
}