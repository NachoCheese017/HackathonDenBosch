<div class="page_wrapper">
    <div class="filterbar">
    </div>
    <div class="productsfield">
        <div class="products-filter">
            <div class="searchbar">
                <form action="market">
                    <input type="text" placeholder="search..." name="product_search_input">
                    <input type="submit" name="product_search_submit">
                </form>
            </div>
        </div>
        <div class="products-field">
            <?php productDisplay($pdo); ?>
        </div>
    </div>
</div>
