<!doctype html>
<section class="info-title">
    <p class="panel-title">
        Order Received
    </p>
</section>
<section class="info">
    <p>
        Thanks for your order! If our mindless minions don't deliver a confirmation message to your inbox
        soon, remember to check your spam folder! Sometimes they get lost along the way.
    </p>
    <p>
        Your order details are printed below:
    </p>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Customer Information</h3>
                </div>
                <div class="panel-body">
                    <p>
                        Name: <?=$_POST['customer_lastname'].", ".$_POST['customer_firstname']?>
                    </p>
                    <p>
                        Phone: <?=$_POST['customer_phone']?>
                    </p>
                    <p>
                        Email: <?=$_POST['customer_email']?>
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
                        Pickup Date: <?=date("n/j/Y", strtotime($_POST['pickup_date']))?> 
                    </p>
                    <p>
                        Order Total: <?=$_POST['order_total']?>
                    </p>
                    <p>
                        Payment Method: <?=$_POST['payment_method']?>
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
                            <?=$_POST['flavor_vulture']?>
                        </span> Vulture's Nest
                    </p>
                    <p>
                        <span class="badge">
                            <?=$_POST['flavor_tooth']?>
                        </span> Tooth Faeire
                    </p>
                    <p>
                        <span class="badge">
                            <?=$_POST['flavor_snaildog']?>
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
                        if (empty($_POST['requests'])) {
                            print("None");
                        } else {
                            print($_POST['requests']);
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>