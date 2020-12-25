<!DOCTYPE html>
<html>
    <head>
        <title>Product List</title>
        <link rel="stylesheet" href="css/main.css"/>
    </head>
    <body>
        <form action="/ListController/massDelete" method="POST">
            <header>
                <h1>Product List</h1>
                <div class="buttons">
                    <button type="button">
                        <a href="/AddController/create">ADD</a>
                    </button>
                    <button type="submit">MASS DELETE</button>
                </div>
            </header>
            <hr>
            <div class="catalog">
                <?php
                    foreach ($data['items'] as $item)
                    {
                        echo "<div class='itemBox'>
                                <input type='checkbox' name='".$item[0]."'/>"
                                .$item[1].
                             "</div>";
                    }
                ?>
            </div>
        </form>
    </body>
</html>