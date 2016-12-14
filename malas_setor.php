<!DOCTYPE html>
<html lang = "pt-br">

<head>
   <link href="https://cdn.jotfor.ms/static/formCss.css?3.3.15456" rel="stylesheet" type="text/css" />
   <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/nova.css?3.3.15456" />
   <link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css?3.3.15456" />
   <link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/566a91c2977cdfcd478b4567.css?"/>
   <link rel="stylesheet" href="css/teste.css" type="text/css" />
   <link rel="stylesheet" href="css/quicksearch.css" type="text/css" />
</head>
<body>
<button id="sair" type="button" style="position: left top width:50px height:20px background: transparent">
  Sair
</button>
<form class="jotform-form" action="https://submit.jotformz.com/submit/63065086502654/" method="post" name="form_63065086502654" id="63065086502654" accept-charset="utf-8">
  <input type="hidden" name="formID" value="63065086502654" />
  <div class="form-all">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group">
          <div class="header-text httac htvam">
            <h1 id="header_1" class="form-header">
              SOS Bagagem
            </h1>
          </div>
        </div>
      </li>
      <div class="cont">

          <input type="text" class="input-search" alt="lista-clientes" placeholder="Buscar..." />

          <br style="clear:both">

      <table class="lista-clientes" width="100%">
          <thead>
              <tr>
                  <th align="center" width="5%">Codigo</th>
                  <th>Setor</th>
                  <th>Data/Hora</th>
              </tr>
          </thead>
          <tbody>
             <?php
             $servername = "localhost";
             $username = "root";
             $password = "";
             $dbname = "testetc";
             $cod_usr = $_REQUEST['usr'];

             // Create connection
             $conn = new mysqli($servername, $username, $password, $dbname);
             // Check connection
             if ($conn->connect_error) {
                 die("Conexão falhou: " . $conn->connect_error);
             }

             $sql = "SELECT
                        bag.cod_tag,
                        mst.hora,
                        str.nome
                      FROM
                        cadastro_bagagem AS bag
                      INNER JOIN
                        mala_setor AS mst ON bag.codigo_usuario = mst.codigo_usuario AND bag.codigo_mala = mst.codigo_mala
                      INNER JOIN
                        cadastro_setor AS str ON mst.codigo_setor = str.codigo
                      WHERE
                        bag.codigo_usuario = $cod_usr
					ORDER BY bag.codigo_mala";

             $result = $conn->query($sql);

             if (mysqli_num_rows($result)>0) {
                 // output data of each row
                 while($row = $result->fetch_assoc()) {
                     echo "<tr><td align='center'>" . $row["cod_tag"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["hora"] ."</td></tr>";
                 }
             }
             $conn->close();
             ?>
      </tbody>
  </table>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.quick.search.js"></script>
	<script src="js/mala_setor.js"></script>
</form>
</body>
</html>
