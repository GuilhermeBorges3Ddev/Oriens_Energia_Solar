<?php
/*
 * Arredondar paineis segundo a quantidade da tabela de custo
 * Valor parcelado em 10x 
 */

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$consumo = $_POST['consumo'];
$emailUsuario = $_POST['email'];

//consumo em kwh consumokwh = consumo/0.8;
//ecm 

// 0.8 a conferir
$consumokwh = $consumo / 0.8;

$ecm = $consumokwh - 50;

$paineis = ($ecm *1000)/(270*4.5*30);

//Pegando apenas a parte fracionaria do numero para arredondar
$frac = (int) substr(strpbrk($paineis, '.,'), 1);

if($frac<0.5){
    $paineis = intval($paineis);
}
 else {
     $paineis = intval($paineis) + 1;
}


$valor;


if($paineis <= 6 ){
    $paineis = 6;
    $valor = 17000.00;
} elseif ( $paineis <= 7) {
    $paineis = 7;
    $valor = 20000.00;
}
elseif ( $paineis <= 10) {
    $paineis = 10;
    $valor = 22500.00;
}
elseif ( $paineis <= 12) {
    $paineis = 12;
    $valor = 25200.00;
}
elseif ( $paineis <= 15) {
    $paineis = 15;
    $valor = 31800.00;
}
elseif ( $paineis <= 22) {
    $paineis = 22;
    $valor = 41600.00;
}
elseif ( $paineis <= 48) {
    $paineis = 48;
    $valor = 41600.00;
}
elseif ( $paineis <= 60) {
    $paineis = 60;
    $valor = 100800.00;
}
elseif ( $paineis <= 180) {
    $paineis = 180;
    $valor = 280000.00;
}elseif ( $paineis <= 360) {
    $paineis = 360;
    $valor = 540000.00;
}
else{
    $valor = 'Para este calculo entre em contato pelo email: oriensenergia@gmail.com';
}

$valorp = $valor / 10;

//retorno: economia em reais por mês
$retorno = ($paineis*4.5*30*270)/1000;
echo "PAineis = " . $paineis . "   ";
echo "Retorno " . $retorno . "  -";

$payback = ($valor/$retorno)/12;

echo " Payback" . $payback . "   - ";

$fracPayBack = $payback % 2;

echo $fracPayBack . "   - ";

if($frac>1) $frac = $frac - 1;

echo $fracPayBack; 

//$assunto = 'Pesquisa de viabilidade';
//$emailOriens = 'tandypalomo@gmail.com';
//
//    $headers = "From: $emailOriens\r\n" .
//               "Reply-To: $emailUsuario\r\n" .
//               "X-Mailer: PHP/" . phpversion() . "\r\n";
//    $headers .= "MIME-Version: 1.0\r\n";
//    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//    
//    
// 
//
//?>

<?php include_once("header.php") ?>

    <div class="col-md-9">
	<span class="detalhes"><?php if($paineis <= 1){
            echo $nome . ", será necessário " . floor($paineis) . " painel para sua residencia. O seu retorno será em " . $payback . " anos.";
            
            
        }
        else echo $nome . ", será necessário " . floor($paineis) . " painéis para sua residencia." ?></span><br>
        <span class="detalhes"><?php echo "Isso custará 10x R$" . $valorp . ". O seu retorno será em " . (int)$payback . " anos."?></span><br><br>
                                        <p>*Este é um calculo aproximado. Para mais informações entre em contato conosco pelo email </p>
                                        
    </div>
<?php include_once("footer.php") ?>