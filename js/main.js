$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#start-change');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar-default").css('background-color', '#fff');
       } else {
          $('.navbar-default').css('background-color', 'transparent');
       }
   });
    }
});

$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#start-change');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar-default").css('border-bottom-color', '#E7E7E7');
       } else {
          $('.navbar-default').css('border-bottom-color', 'transparent');
       }
   });
    }
});