<div class="product-card" id="productid_<?= $product['product_ID'] ?>">
    <a href="product?productid=<?= $product['product_ID'] ?>">
        <div class="card-inner">
            <div class="card-content">
                <div class="product-name">
                    <?= $product['p_type'].' '.$product['p_name'] ?>
                </div>
                <div class="product-info">
                    <div class="product-names">
                        <p>Naam:</p>
                        <p>Merk:</p>
                        <p>Type:</p>
                    </div>
                    <div class="product-values">
                        <p><?= $product['p_name'] ?></p>
                        <p><?= $product['p_brand'] ?></p>
                        <p><?= $product['p_type'] ?></p>
                    </div>
                </div>
            </div>
            <div class="card-bottom">
                <div class="product-stats">
                    <div class="product-views">
                        <p><i class="fa fa-eye" aria-hidden="true"></i>
    <?php //VIEW COUNT ?></p>
                    </div>
                </div>
                <div class="readmore button2">
                    <a href="product?productid=<?= $product['product_ID'] ?>">Lees meer</a>
                </div>
            </div>
        </div>
    </a>
</div>