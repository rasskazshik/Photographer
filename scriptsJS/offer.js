$(document).on('submit','.offerForm',function(event){
   event.preventDefault();
   var name = $('.offerForm .name').val();
   var contacts = $('.offerForm .contacts').val();
   var message = $('.offerForm .message').val();
   $.post('scriptsPHP/addOffer.php',{name:name,contacts:contacts,message:message},function(responce){
       if(responce==="true"){
           alert("Заявка была отправлена, в ближайшее время с вами свяжутся.");
           event.target.reset();
       }
       else{
           Console.log(responce);
           alert("Во время выполнения процедуры возникли ошибки. Отправьте заявку по электронной почте указанной в разделе \"Контакты\" и попросите связаться с разработчиком ресурса.");
       }
   })
});