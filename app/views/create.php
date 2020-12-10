<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="\js\tpyeChanged.js"></script>
        <script src="\js\validation.js"></script>
        <title>Product Add</title>
    </head>
    <body>
        <form action="/AddController/saveDVD" method="post" id="create">
            <header>
                <h1>Product Add</h1>
                <button type="submit" id="submit">Save</button>
                <button type="button">
                    <a href="/">Cancel</a>
                </button>
            </header>
            <label for="sku">SKU</label>
            <input name="sku" id="sku">
            <br>
            <label for="name">Name</label>
            <input name="name" id="name">
            <br>
            <label for="price">Price ($)</label>
            <input name="price" id="price">
            <br>
            <label for="type">Type Switcher</label>
            <select id="type" name="type">
                <option value="DVD">DVD</option>
                <option value="Book">Book</option>
                <option value="Furniture">Furniture</option>
            </select>
            <div id="DVD">
                <label for="size">Size (MB)</label>
                <input name="size" id="size">
                <p>Please, provide size</p>
            </div>
            <div id="Book">
                <label for="weight">Weight (KG)</label>
                <input name="weight" id="weight">
                <p>Please, provide weight</p>
            </div>
            <div id="Furniture">
                <label for="height">Height (CM)</label>
                <input name="height" id="height">
                <br>
                <label for="width">Width (CM)</label>
                <input name="width" id="width">
                <br>
                <label for="length">Length (CM)</label>
                <input name="length" id="length">
                <p>Please, provide dimensions</p>
            </div>
        </form>
    </body>
</html>