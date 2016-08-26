$(function(){
  $("input.qfour").change(function(){
      limit=2;
      nb=$("input.qfour:checked").length;
      if(nb>limit){
        $(this).attr("checked", false);
      }
  });

});
