<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Document</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>

<!-- index.php er selve produkt siden -->

<?php
    $plakater = [
        ["Billede" => "images/ForsideBillede.png", "Titel"=> "Fisken", "Farve" => "Hvid og Sort", "Størrelse" => "A4", "Pris" => 129.00],
        ["Billede" => "images/ForsideBillede.png", "Titel"=> "Fisken", "Farve" => "Hvid og Sort", "Størrelse" => "A3", "Pris" => 149.00],
        ["Titel"=> "Fisken", "Farve" => "Hvid og Sort", "Størrelse" => "A2", "Pris" => 179.00],
        ["Titel"=> "Fisken", "Farve" => "Hvid og Sort", "Størrelse" => "A1", "Pris" => 249.00],

        ["Titel"=> "Fisken", "Farve" => "Grøn og Beige", "Størrelse" => "A4", "Pris" => 129.00],
        ["Titel"=> "Fisken", "Farve" => "Grøn og Beige", "Størrelse" => "A3", "Pris" => 149.00],
        ["Titel"=> "Fisken", "Farve" => "Grøn og Beige", "Størrelse" => "A2", "Pris" => 179.00],
        ["Titel"=> "Fisken", "Farve" => "Grøn og Beige", "Størrelse" => "A1", "Pris" => 249.00]
    ]
?>

<h1 class="virksomhedNavn">ZODIA STUDIO</h1>
<?php
include("includes/navbar.php");
?>

<h2 class="overskrift2">Dette er de udvalgte plakater:</h2>


<div class="container">
    <div class="row g-5 justify-content-center">

<?php foreach ($plakater as $plakat): ?>
    <div class="card card-body text-center m-3" style="width: 18rem;">
        <img src="<?=$plakat["Billede"]?>" class="card-img-top" alt="Billede af fiske plakat"/>
        <div class="card-body">
        <h4 class="card-title"><?=$plakat["Titel"]?></h4>
        <p class="card-text"><?=$plakat["Farve"]?></p>
        <p class="card-text">Størrelse: <?=$plakat["Størrelse"]?></p>
        <p class="card-text">Pris: <?=$plakat["Pris"]?> kr.</p>
            <a href="#" class="btn btn-primary">Tilføj til kurv</a>
    </div>
    </div>
<?php endforeach; ?>

    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>



