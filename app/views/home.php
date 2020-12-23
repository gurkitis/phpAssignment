<!DOCTYPE html>
<html>
    <head>
        <title>Product List</title>
    </head>
    <body>
        <form action="/ListController/massDelete" method="POST">
            <header>
                <h1>Product List</h1>
                <button type="button">
                    <a href="/AddController/create">ADD</a>
                </button>
                <button type="submit">MASS DELETE</button>
            </header>
            <div class="catalog">
                <?php
                    foreach ($data['items'] as $item)
                    {
                        echo "<div class='itemBox'><p><input type='checkbox' name='".$item[0]."'/><br>".$item[1]."</p></div>";
                    }
                ?>
            </div>
        </form>
    </body>
</html>