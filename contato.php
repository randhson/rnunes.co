<?
$nome=$_POST['name'];
$email=$_POST['email'];
$titulo=$_POST['titulo'];
$texto=$_POST['text'];

$Destinatario=$email;
$Origem="randson.nunes@live.com";
$Titulo="Contato RNunes";

$mensagem1="
Uma mensagem vinda do site http://rnunes.net.br !
Voce entrou em contato a poucos instantes.
Nome: $nome
Email: $email
Mensagem: $texto";

mail("$Destinatario","$Titulo", "$mensagem1","From:$Origem");

header("Location: http://rnunes.net.br");

?>
