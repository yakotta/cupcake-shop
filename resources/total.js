/* global $*/
$(document).ready(function(){
    var product = $(".product");

    product.find("button").on("click",function(){
        var total = 0;
    
        product.map(function(){
            var price = $(this).find(".price");
            price = Number(price.text().replace("$",""));
            
            var quantity = $(this).find(".quantity");
            quantity = Number(quantity.val());
            
            total = total + (quantity * price);
        });

        $(".total").html("$" + total.toFixed(2));
    });
});