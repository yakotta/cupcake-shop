/* global $*/

/** 
 * This function "waits" for the "document" to be "ready" before executing it
 * When the browser opens the page, it loads all the resources, but some resources
 * are slower than others to load, so this function "waits" and "pauses" before
 * the browser says "I am ready!"
 */
 
 // $ = jQuery
 
$(document).ready(function(){
    /**
    // This is the broken down, step by step version of the below functionality
    var form = $("form");
    
    var submitHandler = function(){
        alert("hello world");
    };
    
    var event = "submit";
    
    form.on(event,submitHandler);
    */ 

    // What you put inside here, executes ONLY when the browser says its ready
    $("form").on("submit",function(){
        var quantity = $(".quantity");
        
        var count = 0;
        quantity.map(function(){
            count = count + Number($(this).val());
        });
        
        if(count < 1){
            $(".quantity-danger").removeClass("hide");
            return false;
        }else{
            $(".quantity-danger").addClass("hide");
        }
    });
});