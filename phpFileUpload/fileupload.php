<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File upload demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h2 class="text-center bg-info text-danger  p-1 rounded mx-2 my-2"> File upload Demo</h2>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-12">
                <form action="fileupload.php" method="POST" enctype="multipart/form-data">
                    <h4 class="p-2 bg-danger text-center rounded d-inline-block my-1">Single File Upload</h4>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="image" accept="image/*">
                    </div>
                    <h4 class="p-2 bg-danger text-center rounded d-inline-block my-1">Multiple Files Upload</h4>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="images[]" accept="image/*" Multiple required>
                    </div>
                    <button class="btn btn-danger" type="submit">Upload</button>
                </form>

            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>

<?php

print "<pre>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadBtn_clicked = true;
    if ($_FILES["image"]["name"] != "" && $uploadBtn_clicked) {
        // echo "file selected";
        // var_dump($_FILES["image"]);
        $image_name = $_FILES["image"]["name"];
        $image_type = $_FILES["image"]["type"];
        $image_tmpName = $_FILES["image"]["tmp_name"];
        $image_fullname = $_FILES["image"]["full_path"];
        $image_size = $_FILES["image"]["size"];
        $image_error = $_FILES["image"]["error"];
        $destination_path = __DIR__ . "/upload_images/" . $image_name;
        // echo "$destination_path";
        $uploaded = move_uploaded_file($image_tmpName, $destination_path);
        if ($uploaded) {
            echo "
                <div class='alert alert-info p-1 mx-5' role='alert'>
                    upload image is success!<br>
                </div>";
        } else {
            echo "
                <div class='alert alert-danger p-1 mx-5' role='alert'>
                    upload image is fail!:  $image_error <br>
                </div>";
        }
    } else {
        echo "PLZ file select! <br>";
    }
    // multiple_file_upload
    $files = $_FILES["images"];
    for ($i=0; $i < count($files["name"]);$i++) { 
        $files_name = $files["name"][$i];
        $soure_path = $files["tmp_name"][$i];
        $destination_path =__DIR__."/upload_images/".$files_name;
        $uploadFiles = move_uploaded_file($soure_path,$destination_path);
        if($uploadFiles){
            echo "Add FileName : $files_name"."<br>";
        }else{
            echo "Plz add files";
        }
    }

}

?>