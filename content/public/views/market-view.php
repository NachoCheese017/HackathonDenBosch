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


<!-- ////////////////////////// -->
<form action="" method="post">
        Total products displayed:
        <select name="changeTotalPages">
            <option value="15" <?php if($_SESSION['totalPages'] == 15){echo 'selected';} ?>>15</option>
            <option value="30" <?php if($_SESSION['totalPages'] == 30){echo 'selected';} ?>>30</option>
            <option value="45" <?php if($_SESSION['totalPages'] == 45){echo 'selected';} ?>>45</option>
        </select>
        <input type="submit" name="changeTotalPagesBtn" value="Apply">
    </form>