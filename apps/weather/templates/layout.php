<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Weather Today</title>
        <?php include_stylesheets(); ?>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <?php if ($sf_user->hasFlash('notice')): ?>
                <div class="flash_notice">
                    <?php echo $sf_user->getFlash('notice') ?>
                </div>
            <?php endif ?>
            <?php if ($sf_user->hasFlash('error')): ?>
                <div class="flash_error">
                    <?php echo $sf_user->getFlash('error') ?>
                </div>
            <?php endif ?>

            <?php echo $sf_content ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <?php include_javascripts() ?>
    </body>
</html>