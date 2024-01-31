<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container-fluid bg-dark float-end p-3">
        <h1 class="text-light">Product Information</h1>
        <button id="openAdd" type="button" class="btn btn-primary float-end " data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            <i class="fa-solid fa-plus"></i> Add
        </button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" name="" id="" class="form-control" placeholder="Enter name">
                        <input type="text" name="" id="" class="form-control mt-3" placeholder="Enter qty">
                        <input type="text" name="" id="" class="form-control  mt-3" placeholder="Enter price">
                        <input type="file" name="" id="" class="form-control  mt-3" placeholder="Choose image">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button id="btnSave" type="button" class="btn btn-primary">Save</button>
                            <button id="btnUpdate" type="button" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Delete -->
    <div class="modal fade" id="exampleModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Are you sure?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                        <button id="btnDelete" type="button" class="btn btn-primary">Yes,Delete its.</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-dark table-hover align-middle" style="table-layout: fixed;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Thumbnail</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Coca</td>
                <td>4</td>
                <td>1.2</td>
                <td>
                    <img src="image/coca-cola-clouds.jpg" width="100" alt="">
                </td>
                <td>
                    <button id="openUpdate" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Update</button>
                    <button class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModalDelete">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
</body>
<script>
    $(document).ready(function () {
        $("#openAdd").click(function () {
            $("#title").text("Enter Product Information");
            $("#btnSave").show();
            $("#btnUpdate").hide();
        })
        $("body").on("click", "#openUpdate", function () {
            $("#title").text("Edit Product Information");
            $("#btnSave").hide();
            $("#btnUpdate").show();
        })
    });
</script>

</html>