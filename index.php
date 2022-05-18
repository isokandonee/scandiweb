
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    
    <link rel="stylesheet" href="styles/styles.css">
    <script src="scripts/script.js"></script>
    <title>Product List</title>
</head>
<body>
    <div class="container">

        <div class="header">
            <!-- <div class="div1"> -->
                <h2>Product List</h2>
            <!-- </div> -->

            <!-- <div class="div2"> -->
                <button id="add-product-btn"><a href="pages/add-product.php"> Add</a></button>
                <button id="delete-product-btn">Mass Delete</button>
            <!-- </div> -->
        </div>
        <hr>
        <div class="box">
            <div class="col-md-12">
                <a href="add.php" class="btn btn-primary">Add</a>
                <table class="table table-hover">
                    <tbody>
                        <?php
                        include 'config/model.php';
                            $model = new Model();
                            $rows = $model->fetch();
                            $index = 1;
                            foreach ($rows as $row) {
                                echo '<tr>';
                                echo '<td>'.$index++.'</td>';
                                echo '<td>'.$row['sku'].'</td>';
                                echo '<td>'.$row['name'].'</td>';
                                echo '<td>'.$row['price'].'</td>';
                                echo '<td>'.$row['size'].'</td>';
                                echo '<td>'.$row['weight'].'</td>';
                                echo '<td>'.$row['dimension'].'</td>';
                                echo '<td>';
                                echo '<a href="read.php?id='.$row['id'].'" class="btn btn-primary">Read</a>';
                                echo '<a href="edit.php?id='.$row['id'].'" class="btn btn-primary">Edit</a>';
                                echo '<a href="delete.php?id='.$row['id'].'" class="btn btn-danger">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                            }
                            // else {
                            //     echo '<tr>';
                            //     echo '<td colspan="6">No data found</td>';
                            //     echo '</tr>';
                            // }

                        ?>
                    </tbody>
                </table>
            </div>
            <div class="content">
                <input  class="delete-checkbox" type="checkbox" name="delete-checkbox" id="">
                <ul>
                    <li>sku</li>
                    <li>name</li>
                    <li>price</li>
                    <li>size,weight or dimension</li>
                </ul>  
            </div>
            <div class="content">
                <input  class="delete-checkbox" type="checkbox" name="delete-checkbox" id="">
                <ul>
                    <li>sku</li>
                    <li>name</li>
                    <li>type</li>
                    <li>date</li>
                    <li>done</li>
                </ul>  
            </div>
            <div class="content">
                <input  class="delete-checkbox" type="checkbox" name="delete-checkbox" id="">
                <ul>
                    <li>sku</li>
                    <li>name</li>
                    <li>type</li>
                    <li>date</li>
                    <li>done</li>
                </ul>  
            </div>
            <div class="content">
                <input  class="delete-checkbox" type="checkbox" name="delete-checkbox" id="">
                <ul>
                    <li>sku</li>
                    <li>name</li>
                    <li>type</li>
                    <li>date</li>
                    <li>done</li>
                </ul>  
            </div>
            <div class="content">
                <input  class="delete-checkbox" type="checkbox" name="delete-checkbox" id="">
                <ul>
                    <li>sku</li>
                    <li>name</li>
                    <li>type</li>
                    <li>date</li>
                    <li>done</li>
                </ul>  
            </div>
            <div class="content">
                <input  class="delete-checkbox" type="checkbox" name="delete-checkbox" id="">
                <ul>
                    <li>sku</li>
                    <li>name</li>
                    <li>type</li>
                    <li>date</li>
                    <li>done</li>
                </ul>  
            </div>
            <div class="content">
                <input  class="delete-checkbox" type="checkbox" name="delete-checkbox" id="">
                <ul>
                    <li>sku</li>
                    <li>name</li>
                    <li>type</li>
                    <li>date</li>
                    <li>done</li>
                </ul>  
            </div>
            <div class="content">
                <input  class="delete-checkbox" type="checkbox" name="delete-checkbox" id="">
                <ul>
                    <li>sku</li>
                    <li>name</li>
                    <li>type</li>
                    <li>date</li>
                    <li>done</li>
                </ul>  
            </div>
            <div class="content">
                <input  class="delete-checkbox" type="checkbox" name="delete-checkbox" id="">
                <ul>
                    <li>sku</li>
                    <li>name</li>
                    <li>type</li>
                    <li>date</li>
                    <li>done</li>
                </ul>  
            </div>
        </div>

    </div>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>