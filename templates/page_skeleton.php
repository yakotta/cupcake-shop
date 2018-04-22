<?php
$dataset = include("resources/dataset.php");
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato" />
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="<?=rewrite_url("/resources/font-awesome-4.7.0/css/font-awesome.min.css")?>" />
        <link rel="stylesheet" type="text/css" href="<?=rewrite_url("/resources/bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker.min.css")?>" />
        <link rel="stylesheet" type="text/css" href="<?=rewrite_url("/resources/numberspinner.css")?>" />
        <link rel="stylesheet" type="text/css" href="<?=rewrite_url("/resources/stylesheet.css")?>" />
    </head>
    <body>
        <header>
            <h1>Cadaverous Cupcakes</h1>
            <div class="menu">
                <a href="<?=rewrite_url("/")?>">Home</a>
                <a href="<?=rewrite_url("/about-us")?>">About Us</a>
                <a href="<?=rewrite_url("/order")?>">Order Cupcakes</a>
                <a href="<?=rewrite_url("/map")?>">Map</a>
            </div>
            <div class="slinks">
                <?php foreach($dataset["slinks"] as $slink): ?>
                    <a href="<?=$slink["url"]?>" target="_blank">
                        <i class="fa <?=$slink["icon"]?> fa-lg" aria-hidden="true"></i>
                    </a>
                <?php endforeach ?>
            </div>
        </header>
        <div class="content">
            <?=$content?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="<?=rewrite_url("/resources/bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker.min.js")?>"></script>
        <script src="<?=rewrite_url("/resources/javascript/numberspinner.js")?>" type="text/javascript"></script>
        <script src="<?=rewrite_url("/resources/javascript/submit.js")?>" type="text/javascript"></script>
        <script src="<?=rewrite_url("/resources/javascript/total.js")?>" type="text/javascript"></script>
        <script src="<?=rewrite_url("/resources/javascript/datepicker.js")?>" type="text/javascript"></script>
    </body>
</html>