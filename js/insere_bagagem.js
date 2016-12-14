$( function() {
   $("#input_2").click(function(){
      var usr = $("#usr").val();
      var tag = $("#tag").val();
      var peso = $("#peso").val();
      var voo = $("#voo").val();
      var email = $("#email").val();
      window.location.replace("insere_bagagem.php?usr="+usr+"&tag="+tag+"&peso="+peso+"&voo="+voo);
   });
   $("#input_tag").click(function(){
      $.post( "buscar_tag.php", function( data ) {
        $( "#tag" ).val( data.substring(data.indexOf("#")+1,4) );
      });
   });
   $("#input_menu").click(function(){
      window.location.replace("menu.html");
   });
   $("#sair").click(function(){
      window.location.replace("index.php");
   });
});
