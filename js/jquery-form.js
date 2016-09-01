/* testing code*/
$(function(){
  $("input.qfour").change(function(){
      limit=2;
      nb=$("input.qfour:checked").length;
      if(nb>limit){
        $(this).attr("checked", false);
      }
  });

});
/* for two responses code*/
$(function(){
  $("input.two-resp").change(function(){
      limit=2;
      nb=$("input.two-resp:checked").length;
      if(nb>limit){
        $(this).attr("checked", false);
      }
  });

});
