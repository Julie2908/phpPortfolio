<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Kontakt</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>

<h1 class="virksomhedNavn"><a href="forside.php">ZODIA STUDIO</a></h1>
<?php
include("includes/navbar.php");
?>

<div class="container w-50">
<h1 class="overskrift1">Her har du mulighed for at kontakte os</h1>

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Indtast din email her</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Tilføj en besked</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>