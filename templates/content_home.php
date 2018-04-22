<?php
$dataset = include("resources/dataset.php");
?>

<section class="info-title">
    <p class="panel-title">
        Below is a selection of our delicious cupcakes!
    </p>
</section>
<?php foreach($dataset["cupcakes"] as $cupcake): ?>
    <section class="cupcake">
        <div class="productimage">
            <img src="<?=rewrite_url("/resources/images/{$cupcake["photo"]}")?>" />
        </div>
        <div class="productinfo">
            <h2><?=$cupcake["name"]?></h2>
            <?=$cupcake["info"]?>
            <span class="price">$<?=$cupcake["price"]?></span>
        </div>
    </section>
<?php endforeach?>