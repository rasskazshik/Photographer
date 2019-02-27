$(".pricesForm").on("submit",function(event){
    event.preventDefault();
    var data = new FormData(document.querySelector(".pricesForm"));
    $.ajax({
        method: "POST",
        url: "scriptsPHP/updatePrices.php",
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
                    alert("Цены успешно обновлены");
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