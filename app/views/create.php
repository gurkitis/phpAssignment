<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="\js\tpyeChanged.js"></script>
        <script src="\js\validation.js"></script>
        <title>Product Add</title>
    </head>
    <body>
        <form action="/ItemController/saveDVD" method="post" id="create">
            <header>
                <h1>Product Add</h1>
                <button type="submit">Save</button>
                <button type="button">
                    <a href="/">Cancel</a>
                </button>
            </header>
            <label for="sku">SKU</label>
            <input required type="text" name="sku" id="sku">
            <br>
            <label for="name">Name</label>
            <input required type="text" name="name" id="name">
            <br>
            <label for="price">Price ($)</label>
            <input required type="number" step=".01" name="price" id="price">
            <br>
            <label for="type">Type Switcher</label>
            <select required id="type" name="type">
                <option value="DVD">DVD</option>
                <option value="Book">Book</option>
                <option value="Furniture">Furniture</option>
            </select>
            <div id="DVD">
                <label for="size">Size (MB)</label>
                <input required type="number" step="0.1" name="size" id="size">
                <p>Please, provide size</p>
            </div>
            <div id="Book">
                <label for="weight">Weight (KG)</label>
                <input type="number" step="0.001" name="weight" id="weight">
                <p>Please, provide weight</p>
            </div>
            <div id="Furniture">
                <label for="height">Height (CM)</label>
                <input type="number" step="0.01" name="height" id="height">
                <br>
                <label for="width">Width (CM)</label>
                <input type="number" step="0.01" name="width" id="width">
                <br>
                <label for="length">Length (CM)</label>
                <input type="number" step="0.01" name="length" id="length">
                <p>Please, provide dimensions</p>
            </div>
        </form>
    </body>
</html>