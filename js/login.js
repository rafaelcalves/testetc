$( function() {
   $("#input_2").click(function(){
      var codigo = $("#input_3").val();
      var senha = $("#input_4").val();
      //location.href("start.php?codigo="+codigo+"&senha="+senha)
      window.location.replace("php/start.php?codigo="+codigo+"&senha="+senha);
   });
});
