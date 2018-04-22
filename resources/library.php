<?php
error_reporting(-1);
ini_set("display_errors",true);

// Preformats the var dump function
function var_dump_pre ($input_variable)
{
    print("<pre>");
    var_dump($input_variable);
    print("</pre>");
}

// Creates a database connections
function connect()
{
    $hostname = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "c9";
    $dbport = 3306;
    
    // Create connection
    $db = new mysqli($hostname, $username, $password, $database, $dbport);
    
    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }  
    
    // return the connection to the calling script, so it can be used elsewhere
    return $db;
}

// Renders templates
function render_template($template_name, $template_parameters=[])
{
    if(!is_array($template_parameters)) {
        $template_parameters = [];
        error_log("Template parameters for template '$template_name' were invalid, but I fixed it :* ");
    }
    
    extract($template_parameters, EXTR_SKIP);
    
    ob_start();
    include($template_name);
    $template = ob_get_clean();
    
    return $template;
}

// Verifies if an input is a string
function validate_string($input) {
    if (!is_string($input) || empty($input)) return false;

    return true;
}

// Verifies if an input is a valid email address
function validate_email($input) {
    if (!filter_var($input, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    
    return true;
}

// Verifies if an input is a valid phone number
function validate_phone($input) {
    // Possible formats: (408) 375-2798, 408-375-2798, 408 375 2798, 4083752798, 408.375.2798

    if(preg_match("/^[(]?[0-9]{3}[)]?[.\s-]?[0-9]{3}[.\s-]?[0-9]{4}$/",$input)){
        return true;
    }
    
    return false;
}

// Validates input parameters
function validate_parameters (&$source, $parameters=[])
{
    foreach($parameters as $field => $rules)
    {
        if(!array_key_exists($field, $source) || empty($source[$field])){
            if($rules["required"] === true) {
                return $field;
            }
        }
        
        if($rules["type"] === "string") {
            if (validate_string($source[$field]) === false) {
                if($rules["required"] === true) {
                    return $field;
                }
                
                $source[$field] = "";
            }
        }
        
        if($rules["type"] === "email") {
            if (validate_email($source[$field]) === false) {
                if($rules["required"] === true) {
                    return $field;
                }
                
                $source[$field] = "";
            };
        }
        
        if($rules["type"] === "phone") {
            if (validate_phone($source[$field]) === false) {
                if($rules["required"] === true) {
                    return $field;
                }
                
                $source[$field] = "";
            };
        }
    }

    return true;
}

// Redirect function
function redirect($url) {
    header("Location: $url");
    die("Waiting to redirect to '$url'");
}

// Rewrites a requested url based on website location 
function rewrite_url($url) {
    $base = str_replace($_SERVER["DOCUMENT_ROOT"], "", __DIR__);
    $base = str_replace("/resources", "", $base);
    return $base.$url;
}

// Sends an email
function sendEmail($to, $from, $subject, $body){
    $from = "{$from["name"]} <{$from["email"]}>";

    $headers = implode("\r\n", [
        "To: {$to["name"]} <{$to["email"]}>",
        "From: $from",
        "Reply-To: $from",
        "MIME-Version: 1.0",
        "Content-Type: text/html; charset=UTF-8",
    ]);
        
    return mail($to["email"], $subject, $body, $headers);
}