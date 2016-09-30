/* ABOUT NO MATERIAL ARTICLES 2 choices maximum*/
$(function(){
  $("input.limit-two").change(function(){
      limit=2;
      nb=$("input.limit-two:checked").length;
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
