<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../styles/stylex.css">
    <script src="../scripts/script.js"></script>
    
    <title>Add Products</title>
</head>
<body>
    <div class="container">

        <div class="header">
            <!-- <div class="div1"> -->
                <h2>Add Products</h2>
            <!-- </div> -->

            <!-- <div class="div2"> -->
                <button id="save-product-btn">Save</button>
                <button id="cancel-btn">Cancel</button>
            <!-- </div> -->
        </div>
        <hr>
        <div class="box">
            <h3>Add Products Form</h3>
            <form action="" method="post">
                <span>
                    <label for="sku">SKU</label>
                    <input type="text" name="sku" id="sku">
                </span>
                <span>
                    <label for="name">NAME</label>
                    <input type="text" name="name" id="name">
                </span>
                    <label for="price">PRICE</label>
                    <input type="text" name="price" id="price">price
                    <label for="dimension"></label>
                    <option value="1">
                        <select name="size" id="size"></select>
                        <select name="weight" id="weight"></select>
                        <select name="dimension" id="dimension"></select>
                    </option>
            </form>
        </div>

    </div>
    
</body>
</html>