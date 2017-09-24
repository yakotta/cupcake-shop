<?php
$dataset = include("resources/dataset.php");
?>

<section class="info-title">
    <p class="panel-title">
        Learn more about our bakery!
    </p>
</section>
<section class="info">
    <p>
        Cadaverous Cupcakes was founded by sisters Gretchen 
        and Gertrude Greenwood. Our late grandmother, Gwendolyn, spoke 
        to us over our childhood ouija board, carefully spelling out her carefully-guarded
        recipe for her famous Blueberry Brainstem Bundt Cake. We have since
        mini-fied and refined Grandmother's recipes and have let our creativity
        run wild in creating our own, unique flavors.
    </p> 
    <p>
        We opened our first location in the shade of the Sierra Nevadas
        on Prospect Road, and people have been dying to come to us ever since.
        We moved to our current Desolation Wilderness location after
        an...incident, and we couldn't be happier in our new community!
    </p>
</section>
<section class="info-title">
    <p class="panel-title">
        Hear from some happy customers!
    </p>
</section>
<section class="info">
    <?php foreach($dataset["testimonials"] as $testimonial):?>
        <div class="panel panel-default panel-invisible clearfix testimonial-quote">
            <div class="floated">
                <img class="testimonial-img" src="resources/images/testimonial-<?=$testimonial["photo"]?>" />
            </div>
            <div class="testimonial-text">
                <p>
                <?=$testimonial["quote"]?> 
                </p>
                <p>
                    &mdash; <?=$testimonial["name"]?>, <?=$testimonial["location"]?>
                </p>
            </div>
        </div>
    <?php endforeach?>
</section>