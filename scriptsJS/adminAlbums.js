$("select").on("change",function(){
   location.href=$(this).val();
});

$(".newAlbumForm").on("submit",function(event){
    event.preventDefault();
    var data = new FormData(document.querySelector(".newAlbumForm"));
    $.ajax({
        method: "POST",
        url: "scriptsPHP/insertAlbum.php",
        data: data,
        processData: false,
        contentType: false,
        beforeSend : function(){
                $(".loader").css({"display":"flex"});
            },
        success : function(response) {
                $(".loader").css({"display":"none"});
                if(response==="true")
                {
                    var category = data.get("categoryId");
                    alert("Альбом успешно добавлен");
                    location.href = "adminAlbums.php?categoryId="+category;
                    return;
                }
                if(response==="false")
                {
                    alert("Ошибка обработки данных на сервере");
                    return;
                }
            }
    })
});