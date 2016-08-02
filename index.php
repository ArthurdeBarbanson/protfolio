<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Arthur de Barbanson">
        <link rel="icon" href="private/images/agt-web-icone-4367.ico" />

        <title>Arthur de Barbanson</title>

        <!-- Bootstrap Core CSS -->
        <link href="private/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="private/css/agency.css" rel="stylesheet">
        <link href="private/css/style.css" rel="stylesheet">
    </head>
    <body id="page-top" class="index">
        <!-- Navigation -->
        <?php include_once('menu.html');  ?>
        <!-- Header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1 id="intro">Développeur Web</h1>
                    </div>
                </div>
            </div>
        </header>

        <!-- Compétences -->
        <?php
        include_once('competence.html');


//         parcours
         include_once('parcours.html');

        include_once('portfolio.html');
        include_once('activite.html');

//        Contact
         include_once('contact.html');
         include_once('footer.html');
         include_once('modal.html'); ?>

        <!-- jQuery -->
        <script src="private/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="private/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

        <!-- Contact Form JavaScript -->
        <script src="private/js/jqBootstrapValidation.js"></script>
        <script src="private/js/contact_me.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="private/js/agency.js"></script>

<!--        svg3DTagCloud -->
        <script src="private/js/jquery.svg3dtagcloud.min.js"></script>
        <script src="private/js/script.js"></script>
    </body>
</html>
