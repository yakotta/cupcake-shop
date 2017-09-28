<!doctype html>
<?php
    $source = $_POST;
    
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
                        Name: <?=$source['customerinfo']['lastname'].", ".$source['customerinfo']['firstname']?>
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
                        Pickup Date: <?=date("n/j/Y", strtotime($source['pickupdate']))?> 
                    </p>
                    <p>
                        Order Total: <?=$source['ordertotal']?>
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