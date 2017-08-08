var quantity = $(".quantity");
        
var total = 0;

var prices = {
    vulture: 3.5,
    tooth: 4.25,
    snaildog: 3.5,
};

quantity.map(function(){
    total = total + Number($(this).val()) * prices.val();
});

return(total)