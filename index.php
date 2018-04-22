<?php
include(__DIR__."/resources/library.php");

$url = $_GET["url"];

switch($url) {
    case "":
        $template = render_template(__DIR__."/templates/content_home.php");
        break;
    
    case "about-us": 
        $template = render_template(__DIR__."/templates/content_about.php");
        break;
        
    case "map":
        $template = render_template(__DIR__."/templates/content_map.php");
        break;
        
    case "order":
        $template = render_template(__DIR__."/templates/content_sendorder.php");
        break;
    
    case "order-received":
        $params = validate_parameters($_POST, [
            "customer_firstname" => ["required" => true, "type" => "string"],
            "customer_lastname" => ["required" => true, "type" => "string"],
            "customer_email" => ["required" => true, "type" => "email"],
            "customer_phone" => ["required" => true, "type" => "phone"],
            "pickup_date" => ["required" => true, "type" => "string"],
            "payment_method" => ["required" => true, "type" => "string"],
            "flavor_vulture" => ["required" => false, "type" => "string"],
            "flavor_tooth" => ["required" => false, "type" => "string"],
            "flavor_snaildog" => ["required" => false, "type" => "string"],
            "order_total" => ["required" => true, "type" => "string"],
            "requests" => ["required" => false, "type" => "string"]
        ]);

        if(empty($_POST["flavor_vulture"])) $_POST["flavor_vulture"] = "0";
        if(empty($_POST["flavor_tooth"])) $_POST["flavor_tooth"] = "0";
        if(empty($_POST["flavor_snaildog"])) $_POST["flavor_snaildog"] = "0";

        // TODO: check if all three flavors are zero
        
        if($params === true) {
            $template = render_template(__DIR__."/templates/content_receiveorder.php");
        
            $to = ["email" => $_POST['customer_email'], "name" => $_POST["customer_firstname"] . " " . $_POST["customer_lastname"]];
            $from = ['email' => 'info@cadaverouscupcakes.com', 'name' => 'Cadaverous Cupcakes'];
            $subject = 'Your Cadaverous Cupcakes Order';
            $body = render_template(__DIR__."/templates/email_orderconfirm.php");

            sendEmail($to, $from, $subject, $body);
        } else {
            var_dump_pre($params);
            $template = render_template(__DIR__."/templates/content_failedorder.php");
        }

        break;
        
    default:
        $template = render_template(__DIR__."/templates/error_404.php");
        break;
}

print(render_template(__DIR__."/templates/page_skeleton.php", ["content" => $template]));