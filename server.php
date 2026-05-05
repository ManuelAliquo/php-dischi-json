<?php
$newTitle = "";
$newArtist = "";
$newYear = "";
$newGenre = "";
$newCover = "";

if (isset($_POST["new-title"])) {
    $newTitle = $_POST["new-title"];
    $newArtist = $_POST["new-artist"];
    $newYear = $_POST["new-year"];
    $newGenre = $_POST["new-genre"];
    $newCover = $_POST["new-cover"];

    $newAlbum = [
        "cover" => $newCover,
        "title" => $newTitle,
        "artist" => $newArtist,
        "year" => $newYear,
        "genre" => $newGenre
    ];

    $albumsString = file_get_contents("albums.json");
    $albums = json_decode($albumsString, true);

    $albums[] = $newAlbum;

    $jsonString = json_encode($albums);

    file_put_contents("albums.json", $jsonString);

    header("Location: index.php");
}
