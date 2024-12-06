<?php

 $verificaExtensoes = $_FILES['files']['name'];




function verificarExtensoes($verificaExtensoes){

$arquivosEnviados = false;
$extensaoNecessaria =  ['dwg', 'xlsx', 'csv'];
//$verificaExtensoes = $_FILES['files']['name'];
if($verificaExtensoes){
  $retornoExtensao = [];
  foreach($verificaExtensoes as $nomesArquivos){
   $retornoExtensao[] = strtolower(pathinfo($nomesArquivos, PATHINFO_EXTENSION));
 }

 foreach($extensaoNecessaria as $ex ){
   if(!in_array("$ex" , $retornoExtensao)){
    $arquivosEnviados = false;
    break;

  }else{

   $arquivosEnviados = true;
 }

 if (!$arquivosEnviados) {
    $_SESSION['msgMapas'] = "<div class='alert alert-warning'> Precisa enviar todos os arquivos dwg, xlsx e csv.! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'>X</button></div>";
    header('Location: ../index.php');
    die();
  
  } 
  }
  }///final funcao verificarExtensoes
}
  ?>