$( function() {
   $("#input_2").click(function(){
      var nome = $("#nome").val();
      var rg = $("#rg").val();
      var cpf = $("#cpf").val();
      var telefone = "(" + $("#area").val() + ")" + $("#telefone").val();
      var email = $("#email").val();
      window.location.replace("insere_usuario.php?nome="+nome+"&rg="+rg+"&cpf="+cpf+"&telefone="+telefone+"&email="+email);
   });
   $("#input_menu").click(function(){
      window.location.replace("menu.html");
   });
   $("#sair").click(function(){
      window.location.replace("index.php");
   });
});
