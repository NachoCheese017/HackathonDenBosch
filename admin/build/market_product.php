<a href="product?productID=<?= $product['product_ID'] ?>">
<div class="product-card" id="productid_<?= $product['product_ID'] ?>">
    <div class="card-content">
        <div class="product-name">
            <?= $product['p_type'].' '.$product['p_name'] ?>
        </div>
        <div class="">
            <?= $product['p_brand'] ?>
        </div>
    </div>
    <div class="card-bottom">
        <div class="readmore button2">
            <a>Lees meer</a>
        </div>
    </div>
</div>
</a>