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
        $template = render_template(__DIR__."/templates/content_receiveorder.php");
        break;
        
    default:
        $template = render_template(__DIR__."/templates/error_404.php");
        break;
}

print(render_template(__DIR__."/templates/page_skeleton.php", ["content" => $template]));