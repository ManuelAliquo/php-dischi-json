<?php
$albumsString = file_get_contents("albums.json");
$albums = json_decode($albumsString, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./imgs/PHPfy.png">
    <title>PHPify</title>
</head>

<body class="bg-dark">
    <div class="container my-5">
        <header class="d-flex align-items-center gap-3 mb-5 bg-light rounded-5 ps-4">
            <div class="img-container"><img class="img-fluid" src="./imgs/phpfy.png" alt="logo"></div>
            <h1>PHPfy</h1>
        </header>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
            <?php foreach ($albums as $album) { ?>
                <div class="col">
                    <div class="card h-100 text-center border-0">
                        <img src="<?= $album["cover"] ?>" class="card-img-top" alt="<?= $album["title"] ?> cover">
                        <div class="card-body">
                            <h5 class="card-title"><?= $album["title"] ?></h5>
                            <div class="card-text my-2"><?= $album["artist"] ?></div>
                            <div class="card-text text-muted">
                                <small><?= $album["year"] ?> • <?= $album["genre"] ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <h1 class="text-white mt-4 mb-3 text-center border-top pt-3">Add an Album</h1>
        <form action="server.php" method="POST" class="bg-light rounded-4 p-4 w-75 mx-auto">
            <div class="input-group mb-3">
                <span class="input-group-text">Title</span>
                <input type="text" class="form-control" name="new-title" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Artist</span>
                <input type="text" class="form-control" name="new-artist" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Year</span>
                <input type="text" class="form-control" name="new-year" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Genre</span>
                <input type="text" class="form-control" name="new-genre" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Cover</span>
                <input type="text" class="form-control" name="new-cover" required>
            </div>
            <button class="btn btn-outline-success w-100">Add</button>
        </form>
    </div>
</body>

</html>