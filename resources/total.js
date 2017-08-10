/* global $*/
$(document).ready(function(){
    var product = $(".product");
    
    var totalfunction = function(){
        var total = 0;
    
        product.map(function(){
            var price = $(this).find(".price");
            price = Number(price.text().replace("$",""));
            
            var quantity = $(this).find(".quantity");
            quantity = Number(quantity.val());
            
            total = total + (quantity * price);
        });

        var finaltotal = "$" + total.toFixed(2);

        $(".total").html(finaltotal);
        
        $("input[name='ordertotal']").val(finaltotal);
    };

    product.find("button").on("click",totalfunction);
    
    product.find("input").on("keyup",totalfunction);
});