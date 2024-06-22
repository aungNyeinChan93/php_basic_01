<?php

$term_html = filter_input(INPUT_GET, "term", FILTER_SANITIZE_SPECIAL_CHARS);
$term_url = filter_input(INPUT_GET, "term", FILTER_SANITIZE_ENCODED);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Search Form</title>
</head>

<body>
    <div class="container mt-5">
        <form class="form-control   mx-auto px-4 shadow-lg" action="searchForm.php" method="get">
            <div class="input-group">
                <label class="me-3 btn btn-warning" for="term">SEARCH</label>
                <input class="form-control" type="search" name="term" id="term" value="<?php echo $term_html ?>">
                <input type="submit" class=" btn btn-info" value="Search">
            </div>

        </form>
    </div>
</body>

</html>

<?php
if (null !== $term_html) {
    echo "FILTER_SANITIZE_SPECIAL_CHARS flag-mode result : " . " $term_html" . "<br>";
    echo "FILTER_SANITIZE_ENCODED flag-mode result : " . "$term_url";
}
?>