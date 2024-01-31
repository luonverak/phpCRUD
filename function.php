<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php

try {
    $connection = new mysqli('localhost', 'root', '', 'db_php12_1');
} catch (\Throwable $th) {
    //throw $th;
}
function insertData()
{
    global $connection;
    if (isset($_POST['btnSave'])) {
        $name = $_POST['name'];
        $qty = $_POST['qty'];
        $price = $_POST['price'];
        $thumbnail = rand(1, 100000) . '-' . $_FILES['thumbnail']['name'];
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'image/' . $thumbnail);
        if (!empty($name) && !empty($qty) && !empty($price) && !empty($thumbnail)) {
            try {
                $sql = "INSERT INTO `tbl_product`(`name`, `qty`, `price`, `thumbnail`)
                    VALUES ('$name','$qty','$price','$thumbnail')";
                $row = $connection->query($sql);
            } catch (\Throwable $th) {
                //throw $th;
            }
            if ($row) {
                echo '
                <script>
                    $(document).ready(function(){
                        swal({
                            title: "Good job!",
                            text: "You clicked the button!",
                            icon: "success",
                            button: "Aww yiss!",
                        });
                    })
                </script>
                ';
            }
        } else {
            echo 00;
        }
    }
}
insertData();