$(".deleteAlbumButton").on("click",function(){
    if(!confirm("Вы точно хотите совершить это действие?"))
    {
        return;
    }
    var albumId = $(this).attr("albumId"); 
    $.ajax({
        method: "POST",
        url: "scriptsPHP/deleteAlbum.php",
        data: {albumId:albumId},
        beforeSend : function(){
                $(".loader").css({"display":"flex"});
            },
        success : function(response) {
                $(".loader").css({"display":"none"});
                if(response==="true")
                {
                    alert("Альбом успешно удален");
                    location.href = "adminAlbums.php?categoryId=1";
                    return;
                }
                if(response==="false")
                {
                    alert("Ошибка обработки данных на сервере");
                    return;
                }
            }
    });
});

$(".deleteImageButton").on("click",function(){
    if(!confirm("Вы точно хотите совершить это действие?"))
    {
        return;
    }
    var photoId = $(this).attr("imageId"); 
    var albumId = $(this).attr("albumId");
    $.ajax({
        method: "POST",
        url: "scriptsPHP/deletePhoto.php",
        data: {photoId:photoId},
        beforeSend : function(){
                $(".loader").css({"display":"flex"});
            },
        success : function(response) {
                $(".loader").css({"display":"none"});
                if(response==="true")
                {
                    alert("Фотография успешно удалена");
                    location.href = "adminAlbum.php?albumId="+albumId;
                    return;
                }
                if(response==="false")
                {
                    alert("Ошибка обработки данных на сервере");
                    return;
                }
            }
    });
});

$(".newPhotosForm").on("submit",function(event){
    event.preventDefault();
    var data = new FormData(document.querySelector(".newPhotosForm"));
    $.ajax({
        method: "POST",
        url: "scriptsPHP/insertPhoto.php",
        data: data,
        cache: false,
        contentType: false,
        enctype: 'multipart/form-data',
        processData: false,
        beforeSend : function(){
                $(".loader").css({"display":"flex"});
            },
        success : function(response) {
                $(".loader").css({"display":"none"});
                if(response==="true")
                {
                    var albumId = data.get("albumId");
                    alert("Фотографии успешно добавлены");
                    location.href = "adminAlbum.php?albumId="+albumId;
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