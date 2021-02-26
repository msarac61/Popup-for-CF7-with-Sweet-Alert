(function($){
     $(".wpcf7-submit").click(function(event) {
         var messageOutput = $(this).closest("form").children(".wpcf7-response-output");
         var message = $(messageOutput).html();
     });
 });

 document.addEventListener('wpcf7submit', function(event) {

     if (event.detail.status == "validation_failed") {
         Swal.fire(
             '',
             event.detail.apiResponse.message,
             'error'
         );
     } else {
         Swal.fire(
             '',
             event.detail.apiResponse.message,
             'success'
         );
     }
 }, false);