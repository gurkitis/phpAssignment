<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    <body>
        <h1>Items</h1>
        <?php
            while($row = $data['items']->fetch())
            {
                echo "<div class='itemBox'><p>";
                echo "SKU: ".$row['SKU'].'<br>'.'Product name: '.$row['Product_Name'];
                echo "</p></div>";
            }
        ?>
    </body>
</html>