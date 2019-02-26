$(".chechPassword").on("submit",function(event){
    event.preventDefault();    
    $.post("scriptsPHP/auth.php",{password:$('[type="password"]').val()},function(responce){
        if(responce==="true")
        {
            location.href = "adminAlbums.php";
        }
        else
        {
            var password = document.querySelector('[type="password"]');
            password.setCustomValidity("Введен неверный пароль");    
            password.reportValidity();
        }
    });
});

$('[type="password"]').on("change",function(){
    var password = document.querySelector('[type="password"]');
    password.setCustomValidity("");
});