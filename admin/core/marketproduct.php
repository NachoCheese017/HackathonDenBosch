<?php
function marketProduct($product) {
    if(isset($product)) {
        echo '<a href="product?productid='.$product['product_ID'].'">';
        include(ABSPATH.'admin/build/market_product.php');
        echo '</a>';
    }
}