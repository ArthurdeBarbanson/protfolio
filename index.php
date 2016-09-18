<!DOCTYPE html>
<html lang="fr">
   <?php include_once('head.html')?>
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

        <?php
        include_once('competence.html');
        include_once('parcours.html');
        include_once('portfolio.html');
        include_once('contact.html');
        include_once('footer.html');
        ?>

      <?php include_once('script.html')?>
    </body>
</html>
