/* global $*/
$(document).ready(function(){
    var product = $(".product");
    
    var totalfunction = function(){
        var total = 0;
        
        // hey babe
        // if ANY quantity is zero, abort calculation, say, you're a shithead
        // yes, exactly 
        // and, only add to the total, if the quantity is > 0 so put the total =... in an else{...}
        // you ONLY count their quantity value, if its above zero
        // well ok, you only hide the class when the final total is above zero maybe?
        // im looking now, I didnt see this code yet

        // so if(qunatity<0) results in if ANY quantity is less than zero
        // so is there an else if(ALL QUANTITIES >=0) that i can use to turn the 
        // hidden class back on?
        // because right now i can't hav quantity < or > 0 control hiding
        // the class because there re multiple quantity values that cancel out
        // how do i access each quantity individually?
        
        // but the total should only update, if the quantity is > 0
        
        var myMap = product.map(function(){
            var price = $(this).find(".price");
            price = Number(price.text().replace("$",""));
            
            var quantity = $(this).find(".quantity");
            quantity = Number(quantity.val());
            
            if(quantity<0){
                // if here, your quantity is not valid, dont recalculate total
                $(".quantity-danger").removeClass("hide");
            }else {
                // $(".quantity-danger").addClass("hide");
                total = total + (quantity * price);
            };
            
            // and put it here, since its after the final calculation is done, that you need to show/hide it
        });

        var finaltotal = "$" + total.toFixed(2);

        $(".total").html(finaltotal);
        
        $("input[name='order_total']").val(finaltotal);
    };

    product.find("button").on("click",totalfunction);
    
    product.find("input").on("keyup",totalfunction);
});