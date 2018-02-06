$(function(){
  $("input[name='user'], input[name='pwd']").blur(
    function(){
      var re = /^\w{6,20}$/;
      if($(this).parent().hasClass("has-success")){
        $(this).parent().removeClass("has-success");
        $(this).next().removeClass("glyphicon-ok");
      }
      if($(this).parent().hasClass("has-error")){
        $(this).parent().removeClass("has-error");
        $(this).next().removeClass("glyphicon-remove");
      }
      if( re.test($(this).val())){
        $(this).parent().addClass("has-success");
        $(this).next().addClass("glyphicon-ok");
      }
      else{
        $(this).parent().addClass("has-error");
        $(this).next().addClass("glyphicon-remove");
      }
    }
  );
})
