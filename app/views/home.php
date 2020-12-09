<!DOCTYPE html>
<html>
    <head>
        <title>Product List</title>
    </head>
    <body>
        <header>
            <h1>Product List</h1>
            <button type="button">
                <a href="/ItemController/create">ADD</a>
            </button>
            <button type="button">
                <a href="/ItemController/massDelete">MASS DELETE</a>
            </button>
        </header>
        <div class="catalog">
            <?php
                foreach ($data['items'] as $item)
                {
                    echo "<div class='itemBox'>".$item[1]."</div>";
                }
            ?>
        </div>
    </body>
</html>