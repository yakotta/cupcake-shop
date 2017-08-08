<!doctype html>
<?php
    function var_dump_pre($parametre) {
        print('<pre>');
        var_dump($parametre);
        print('</pre>');
    }
    
    // var_dump_pre($_GET); 
    // var_dump_pre($_POST); 
    // var_dump_pre(empty($_GET));
    
    $source = null;
    
    if(empty($_GET)) {
        $source = $_POST;
    } else {
        $source = $_GET;
    }
    
    /*Here's how an email WOULD be sent if PHP wasn't,
        and i quote "wank"
        
        here is the function you use to send an email
        http://php.net/manual/en/function.mail.php
    
        function sendEmail($to, $from, $subject, $message){
            $headers = implode("\n",[
                "From: <$from>",
                "Reply-To: <$from>",
            ]);
            
            return mail($to, $subject, $message, $headers);
        }
    
        $to = $source['customerinfo']['email'];
        $from = 'pinkhamjenna@gmail.com';
        $subject = 'Your Cadaverous Cupcakes Order';
        $body = 'hello, mortal';

        var_dump(sendEmail($to,$from,$subject,$body));
    */
?>

<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="resources/numberspinner.css" />
        <link rel="stylesheet" type="text/css" href="resources/stylesheet.css" />
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Cadaverous Cupcakes</h1>
            <div class="menu">
                <a href="index.html">Home</a>
                <a href="about.html">About Us</a>
                <a href="sendorder.php">Order Cupcakes</a>
                <a href="map.html">Map</a>
            </div>
        </header>
        <div class="content">
            <section class="info-title">
                <p class="panel-title">
                    Order Received
                </p>
            </section>
            <section class="info">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Customer Information</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    Name: <?=$source['customerinfo']['lastname']?>, <?=$source['customerinfo']['firstname']?>
                                </p>
                                <p>
                                    Phone: <?=$source['customerinfo']['phonenumber']?>
                                </p>
                                <p>
                                    Email: <?=$source['customerinfo']['email']?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" >
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Order Details</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    Pickup Date: <?=$source['pickupdate']?> 
                                </p>
                                <p>
                                    Payment Method: <?=$source['payment']?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Cupcake Quantities</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    <span class="badge">
                                        <?=$source['flavorquant']['vulture']?>
                                    </span> Vulture's Nest
                                </p>
                                <p>
                                    <span class="badge">
                                        <?=$source['flavorquant']['tooth']?>
                                    </span> Tooth Faeire
                                </p>
                                <p>
                                    <span class="badge">
                                        <?=$source['flavorquant']['snaildog']?>
                                    </span> Snips, Snails, and Puppy Dog Tails
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Special Instructions</h3>
                            </div>
                            <div class="panel-body">
                                <p>
                                    <?php
                                    if (empty($source['requests'])) {
                                        print("None");
                                    } else {
                                        print($source['requests']);
                                    }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>