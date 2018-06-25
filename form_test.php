<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simula��o Oriens Energia</title>

    <!-- Matriz padr�o do Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Customizado atrav�s de uma p�gina encontrada no StartBT3 -->
    <link href="css/estiloORIENS.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand"><img src="img/logo.png"></div>
    <div class="address-bar">Rua Doutor Pereira Cabral N�150| Itajub�, MG |CEP 37500-013</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Simula��o</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">In�cio</a>
                    </li>
                    <li>
                        <a href="about.html">Equipe & Parceiros</a>
                    </li>
                    <li>
                        <a href="blog.html">Simula��o</a>
                    </li>
                    <li>
                        <a href="contact.html">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">A Oriens lhe mostra a economia e o retorno do seu investimento nos pain�is fotovoltaicos atrav�s da sua
                        <strong>conta de luz</strong>
                    </h2>
                    <hr>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<p>Digite o <strong>valor total</strong> pago na sua conta de luz e os <strong>KWh consumidos no m�s!</strong><br>Em caso de d�vida siga os campos vermelhos da imagem abaixo:</p>
                    <br>
                    <img class="img-responsive img-border img-left" src="img/conta_luz.png" alt=""> 
                    
                 <?php if(!isset($_POST['valor'])) ?>
                    <form role="form" action='form_test.php'>
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Valor pago R$ xx,xx:</label>
                                <input type="number" name='valor' class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>KWh no m�s da fatura:</label>
                                <input type="number" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Endere�o de Email:</label>
                                <input type="email" name='email' class="form-control">
                            </div>                            
                            <div class="form-group col-lg-4">
                                <input type="hidden" name="save" value="contact"><br>
                                <button type="submit" class="btn btn-default">Obter previs�o</button>
                            </div>
                        </div>
                    </form>
                 <?php
                    }
                    
                    else{
                        <!--                    C�digo tandy-->
                    <?php
                    
            if(isset($_POST['valor'])){


                $consumo = $_POST['valor'];


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

                    //retorno: economia em reais por m�s
                    $retorno = ($paineis*4.5*30*270)/1000;
                    echo "PAineis = " . $paineis . "   ";
                    echo "Retorno " . $retorno . "  -";

                    $payback = ($valor/$retorno)/12;

                    echo " Payback" . $payback . "   - ";

                    $fracPayBack = $payback % 2;

                    echo $fracPayBack . "   - ";

                    if($frac>1) $frac = $frac - 1;

                    echo $fracPayBack; 
                    ?>

                        <div class="col-md-9">
                            <span class="detalhes"><?php if($paineis <= 1){
                                echo $nome . ", ser� necess�rio " . floor($paineis) . " painel para sua residencia. O seu retorno ser� em " . $payback . " anos.";


                            }
                            else echo $nome . ", ser� necess�rio " . floor($paineis) . " pain�is para sua residencia." ?></span><br>
                            <span class="detalhes"><?php echo "Isso custar� 10x R$" . $valorp . ". O seu retorno ser� em " . (int)$payback . " anos."?></span><br><br>
                                                            <p>*Este � um calculo aproximado. Para mais informa��es entre em contato conosco pelo email </p>

                        </div>
            }
                else{
                    ?>
                    }
                 
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Oriens Energia 2017 &nbsp;&nbsp;&nbsp;  
                        <a href="https://www.facebook.com/oriensenergia/?fref=ts"><img class="img-right" src="img/facebook.png" alt=""></a>&nbsp;&nbsp;
                        <a href="mailto:oriensenergia@gmail.com"><img class="img-right" src="img/mail.png" alt=""></a>&nbsp;&nbsp;
                        <a href="http://www.oriensenergia.com.br/"><img class="img-right" src="img/return.png" alt=""></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
