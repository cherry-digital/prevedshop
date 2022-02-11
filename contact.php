<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Převeď shop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="sub-hero-image">
        <div class="container">
            <?php include 'menu.php'; ?>
            <div class="row">
                <div class="col-md-12">
                    <h1>Kontakt</h1>
                    <div class="navigace"><a href="index.php">Domů</a> - <a href="#">Kontakt</a></div>
                </div>
            </div>
        </div>
    </div>

    <section class="map">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Fakturační údaje</h2>
                    <div class="subtitle">Microservices For Ecommerce s.r.o.</div> Jaurisova 515/4<br> 140 00 Praha 4<br> Česká republika<br> IČ: 06776906<br> Spisová značka: C288719 - Městský soud v Praze

                    <h2>Bankovní spojení</h2>
                    <strong>Číslo účtu:</strong> 201<br>
                    <strong>IBAN:</strong> 2015112345<br>
                    <strong>BIC/SWIFT:</strong> FIOBCZ

                    <h2>Kontaktní údaje</h2>
                    <div class="contact-box">
                        <p class="mail">info@prevedshopo.cz</p>
                        <p class="phone">+420 777 123 546</p>
                        <p class="icon"><a href="http://www.facebook.com">facebook/prevedshop</a></p>
                    </div>
                </div>
                <div class="col-md-7 hidden-lg col-md-offset-1 small-map">
                    <img src="img/small-map.jpg" class="img-responsive">
                </div>
            </div>
        </div>
    </section>


    <?php include 'footer-b.php'; ?>

</body>

</html>
