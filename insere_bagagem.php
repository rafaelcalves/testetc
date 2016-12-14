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
      <li id="id_5">
        <label id="label_5" for="input_5">
           <?php
             $usr = $_REQUEST["usr"];
             $tag = $_REQUEST["tag"];
             $peso = $_REQUEST["peso"];
             $voo = $_REQUEST["voo"];
             $servername = "localhost";
             $username = "root";
             $password = "";
             $dbname = "testetc";

             $conn = new mysqli($servername, $username, $password, $dbname);
             if ($conn->connect_error) {
                 die("Conexão falhou: " . $conn->connect_error);
             }

             $sql = "INSERT INTO cadastro_bagagem(
                         codigo_usuario,
                         cod_tag,
                         peso_kg,
                         voo)
                   VALUES (
                         '$usr',
                         '$tag',
                         '$peso',
                         '$voo')";

             if ($conn->query($sql) === TRUE) {

                 $sql = "SELECT
                            codigo_mala
                         FROM cadastro_bagagem
                          WHERE
                            codigo_usuario = '$usr'
                            AND cod_tag = '$tag'
                            AND voo = '$voo'
                         ORDER BY codigo_mala DESC";
						 
                 $result = $conn->query($sql);

                   if (mysqli_num_rows($result)>0) {
					while($row = $result->fetch_assoc()) {
                     echo "Usuario criado com sucesso:<br>Codigo do usuario: " . $usr . "<br>Codigo da mala: " . $row["codigo_mala"] . "<br>Tag: " .$tag . "<br>";
					}
				}
             }

             $conn->close();
          ?>
        </label>
      </li>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.quick.search.js"></script>
</body>
</html>
