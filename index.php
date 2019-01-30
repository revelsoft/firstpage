<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Fisrt Page</title>

        <script src="template/js/jquery-2.2.0.min.js" type="text/javascript"></script>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" type="text/css" media="screen" href="template/bootstrap/css/bootstrap.min.css" />
        <script src="template/bootstrap/js/bootstrap.min.js"></script>

        <!-- slide -->
        <link rel="stylesheet" type="text/css" href="template/slick/slick.css">
        <script src="template/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>

        <!-- Custom Fonts & CSS -->
        <link rel="stylesheet" type="text/css" media="screen" href="template/css/style.css" />
    </head>
    <body>
        <?PHP require_once('view/header.inc.php'); ?>
        <?PHP require_once('view/slide.inc.php'); ?>
        <?PHP require_once('view/trending-product.inc.php'); ?>
        <?PHP require_once('view/popular-product.inc.php'); ?>
        <?PHP require_once('view/contact.inc.php'); ?>
        <?PHP require_once('view/footer.inc.php'); ?>
    </body>
</html>