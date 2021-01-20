<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="\js\tpyeChanged.js"></script>
        <script src="\js\validation.js"></script>
        <link rel="stylesheet" href="/css/main.css"/>
        <title>Product Add</title>
    </head>
    <body>
        <form action="/AddController/saveDVD" method="post" id="create">
            <header>
                <h1>Product Add</h1>
                <div class="buttons">
                    <button type="button" id="save">Save</button>
                    <button type="button">
                        <a href="/">Cancel</a>
                    </button>
                </div>
            </header>
            <hr>
            <label for="sku">SKU</label>
            <input name="sku" id="sku">
            <label for="sku" id="skuErr" class="error"></label>
            <br>
            <label for="name">Name</label>
            <input name="name" id="name">
            <label for="name" id="nameErr" class="error"></label>
            <br>
            <label for="price">Price ($)</label>
            <input name="price" id="price">
            <label for="price" id="priceErr" class="error"></label>
            <br>
            <label for="type">Type Switcher</label>
            <select id="type" name="type">
                <option value="DVD">DVD</option>
                <option value="Book">Book</option>
                <option value="Furniture">Furniture</option>
            </select>
            <label for="type" id="typeErr" class="error"></label>
            <div id="DVD">
                <label for="size">Size (MB)</label>
                <input name="size" id="size">
                <label for="size" id="sizeErr" class="error"></label>
                <p>Please, provide size</p>
            </div>
            <div id="Book">
                <label for="weight">Weight (KG)</label>
                <input name="weight" id="weight">
                <label for="weight" id="weightErr" class="error"></label>
                <p>Please, provide weight</p>
            </div>
            <div id="Furniture">
                <label for="height">Height (CM)</label>
                <input name="height" id="height">
                <label for="height" id="heightErr" class="error"></label>
                <br>
                <label for="width">Width (CM)</label>
                <input name="width" id="width">
                <label for="width" id="widthErr" class="error"></label>
                <br>
                <label for="length">Length (CM)</label>
                <input name="length" id="length">
                <label for="length" id="lengthErr" class="error"></label>
                <p>Please, provide dimensions</p>
            </div>
        </form>
    </body>
</html>