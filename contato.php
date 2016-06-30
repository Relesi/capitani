<!DOCTYPE html>

<html lang="pt-br">

<head>

    <!--meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--meta tags ends-->

    <link rel="shoortcut icon" href="images/logo.ico" />
    <title>Contato</title>

    <!--- Links to google fonts -->

    <!-- Links to fonts ends -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800%7cRoboto+Mono:400,700%7cMerriweather:300%7cAbril+Fatface'
          rel='stylesheet' >
    <!-- Bootstrap stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Popup Images -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

    <!-- css animation -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!-- custom stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
  


</head>

<body>

<!-- Start: Preloader section -->
<div id="loader-wrapper">
    <div id="loader"></div>
</div>
<!-- End: Preloader section -->

<!-- DOCUMENT WRAPPER STARTS -->
    <main>

        <!-- MAIN HEADER STARTS-->
        <?php
        include_once "template/header.php";

        ?>
        </header>
        
        <!-- main header ends-->
        <section id="address" class="address page-top">
            <div class="container">
                <div class="row">
                    
                        <div class="col-md-6">
                        <div class="address-wrapper wow fadeInUp" data-wow-delay="0.3s">
                        <h2>Contato</h2>
                        <table class="address-table">
                                <tbody>
                                    <tr>
                                        <td>Localização:</td>
                                        <td>Av. Fagundes Filho, 141 <br>São Paulo - SP - 04304-010</td>
                                    </tr>
                                    <tr>
                                        <td>Telefone:</td>
                                        <td>SP (11) 3522-1941
                                            </br> RJ (21) 3005-9176 </br>PR (41) 4062-0208 </br>DF (61) 2626-1003 </br>MG (31) 2626-4245</td>

                                    </tr>

                                    <tr>
                                        <td>Email:</td>
                                        <td>capitani@relesi.com.br</td>
                                    </tr>
                                </tbody>
                        </table>

                </div>
            </div>


                    <div class="col-md-4">
                        <div class="map-wrapper wow fadeInUp" data-wow-delay="0.6s">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.3760514481296!2d-46.64210148502095!3d-23.626700084650473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5af873c4e153%3A0x8abdec11044be3fe!2sAv.+Fagundes+Filho%2C+141+-+Vila+Monte+Alegre%2C+S%C3%A3o+Paulo+-+SP%2C+04304-001!5e0!3m2!1spt-BR!2sbr!4v1467145126836" width="500" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                    </div>
                    
                    
            </div>
            </div>
        </section>

        <section id="email-us" class="email-us page">
            <div class="container wow fadeInUp" data-wow-delay="0.3s">
                <div class="row">
                    
                    <div class="col-md-6">
                    <div class="email-wrapper">
                        <h1>Fale Conosco</h1>


                        <div class="section-snippet hidden-xs">


                        </div>
                     </div>  
                    </div><!--inc/send_mail.php-->
                    <div class="col-md-6">
                        <div class="form-wrapper">
                          <form method="post" id="contact-form" action="email.php">
                              <label for="name">Nome:</label>
                              <input type="text" name="name" id="name" placeholder="Nome">

                              <label for="email">E-mail:</label>
                              <input type="email" name="email" id="email" placeholder="E-mail">

                              <label for="assunto"><small></small>Assunto:</label>
                              <input type="assunto" name="assunto" id="assunto" placeholder="Assunto"/>

                              <label for="message">Mensagem:</label>
                              <textarea name="message" id="message" placeholder="Mensagem"></textarea>

                              <input class="custom-button" type="submit" name="submit" value="Enviar" onsubmit="return validarcontato();">

                          </form> 





                                        
                    </div>
                    </div>

                </div>
            </div>
        </section>



         <!-- footer section starts -->
        <?php include_once "template/footer.php" ?>
        <!-- footer section ends -->

    </main>
<!-- DOCUMENT WRAPPER ENDS -->



<!-- SCRIPTS -->

    <!-- jQuery (necessary for all the plugins) -->
    <script src="js/jquery-1.11.2.min.js"></script>

    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="js/gmaps.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

<!-- SCRIPTS ENDS -->
</body>

</html>

