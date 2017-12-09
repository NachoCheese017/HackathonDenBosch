<div class="page_wrapper">
    <div class="filterbar">
    </div>
    <div class="productsfield">
        <div class="product-search">
            <div class="products-filter">
                <div class="searchbar">
                    <form action="" method="post">
                        <input type="text" placeholder="zoeken..." name="product_search_input">
                        <input type="submit" name="product_search_submit" value="zoek">
                    </form>
                </div>
                <div class="showamount">
                    <form action="" method="post">
                        <label for="changeTotalPages">Aantal artikelen per pagina</label>
                        <select name="changeTotalPages">
                            <option value="15" <?php if($_SESSION['totalPages'] == 15){echo 'selected';} ?>>15</option>
                            <option value="30" <?php if($_SESSION['totalPages'] == 30){echo 'selected';} ?>>30</option>
                            <option value="45" <?php if($_SESSION['totalPages'] == 45){echo 'selected';} ?>>45</option>
                        </select>
                        <input type="submit" name="changeTotalPagesBtn" value="Opslaan">
                    </form>
                </div>
            </div>
        </div>
        <div class="products-field">
            <div class="cards-field">
                <?php productDisplay($pdo, $addon); ?>
            </div>
        </div>
    </div>
</div>