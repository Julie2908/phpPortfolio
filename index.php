<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>

<?php
    $plakater = [
        ["Titel"=> "Fisken", "Farve" => "Hvid og Sort", "Størrelse" => "A4", "Pris" => 129.00],
        ["Titel"=> "Fisken", "Farve" => "Hvid og Sort", "Størrelse" => "A3", "Pris" => 149.00],
        ["Titel"=> "Fisken", "Farve" => "Hvid og Sort", "Størrelse" => "A2", "Pris" => 179.00],
        ["Titel"=> "Fisken", "Farve" => "Hvid og Sort", "Størrelse" => "A1", "Pris" => 249.00],

        ["Titel"=> "Fisken", "Farve" => "Grøn og Beige", "Størrelse" => "A4", "Pris" => 129.00],
        ["Titel"=> "Fisken", "Farve" => "Grøn og Beige", "Størrelse" => "A3", "Pris" => 149.00],
        ["Titel"=> "Fisken", "Farve" => "Grøn og Beige", "Størrelse" => "A2", "Pris" => 179.00],
        ["Titel"=> "Fisken", "Farve" => "Grøn og Beige", "Størrelse" => "A1", "Pris" => 249.00]
    ]
?>


<h1>Dette er de udvalgte plakater:</h1>


<?php foreach ($plakater as $plakat): ?>
    <div class="product-card">
        <h1><?=$plakat["Titel"]?></h1>
        <p><?=$plakat["Farve"]?></p>
        <p>Størrelse: <?=$plakat["Størrelse"]?></p>
        <p>Pris: <?=$plakat["Pris"]?> kr.</p>
    </div>
<?php endforeach; ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



