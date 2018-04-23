<p>Dear <?=$_POST["customer_firstname"]?>,</p>
<p>
    Thanks for your order! We'll have your cupcakes freshly made for you to pickup
    at our Desolation Wilderness location on <?=date("n/j/Y", strtotime($_POST['pickup_date']))?>.
</p>
<?php
    if($_POST['payment_method'] == "Paypal"){
        print("Your order is prepaid. Just give your name to one of our staff when you arrive.");
    } else { 
        print("Just give your name to one of our staff and remember to bring " . strtolower($_POST['payment_method']) . " when you arrive.");
    }
?>
<p>
    Your order details are printed here for your reference.
</p>
<p>
    Customer Information
    <br /> 
    Name: <?=$_POST['customer_lastname'].", ".$_POST['customer_firstname']?>
    <br />
    Phone: <?=$_POST['customer_phone']?>
    <br />
    Email: <?=$_POST['customer_email']?>
</p>
<p>
    Order Details
    <br />
    Pickup Date: <?=date("n/j/Y", strtotime($_POST['pickup_date']))?> 
    <br />
    Order Total: <?=$_POST['order_total']?>
    <br />
    Payment Method: <?=$_POST['payment_method']?>
</p>
<p>
    Cupcake Quantities
    
    <?php
        if($_POST['flavor_vulture'] != "0"){
            print("<br />");
            print($_POST['flavor_vulture'] . " Vulture's Nest");
        }
        if($_POST['flavor_tooth'] != "0"){
            print("<br />");
            print($_POST['flavor_tooth'] . " Tooth Faerie");
        }
        if($_POST['flavor_snaildog'] != "0"){
            print("<br />");
            print($_POST['flavor_snaildog'] . " Snips, Snails, and Puppy Dog Tails");
        }
    ?>
</p>
<p>
    Special Instructions
    <br />
    <?php
    if (empty($_POST['requests'])) {
        print("None");
    } else {
        print($_POST['requests']);
    }
    ?>
</p>