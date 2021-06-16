<?php

// Includo le classi model e color
require_once __DIR__ . "/classes/color_product.php";
require_once __DIR__ . "/classes/model_product.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    try {
        // In caso di stringa al posto del numero mi restituisce un errore
        $generic = new Product("Prodotto", "Marca", 7);
        $phone = new ModelProduct("Smartphone", "Samsung", 600, "S20");
        $extra = new ColorProduct("Jeans", "Diesel", 200, "Blu");
    } catch (Exception $e) {

        echo $e->getMessage();
        die();
    };
  

    //  var_dump($generic);
    //  var_dump($phone);
    //  var_dump($extra);

    ?>

    <section>
        <h1>Prodotto generico</h1>
        <p>Tipo di prodotto: <strong><?php echo $generic->getType(); ?></strong></p>
        <p>Marca del prodotto: <strong><?php echo $generic->getBrand(); ?></strong></p>
        <p>Prezzo del prodotto: <strong><?php echo $generic->getPrice(); ?> €</strong></p>
        <p>Prezzo con sconto 20%: <strong><?php echo $generic->getDiscountPrice(20); ?> €</strong></p>
        <p>Nome completo: <strong><?php echo $generic->getFullName(); ?></strong></p>
    </section>

    <section>
        <h1>Prodotto Tech</h1>
        <p>Tipo di prodotto: <strong><?php echo $phone->getType(); ?></strong></p>
        <p>Marca del prodotto: <strong><?php echo $phone->getBrand(); ?></strong></p>
        <p>Modello del prodotto: <strong><?php echo $phone->model; ?></strong></p>
        <p>Prezzo del prodotto: <strong><?php echo $phone->getPrice(); ?> €</strong></p>
        <p>Prezzo con sconto 40% 50€ : <strong><?php echo $phone->getDiscountPrice(40); ?> €</strong></p>
        <p>Nome completo: <strong><?php echo $phone->getFullName(); ?></strong></p>
    </section>

    <section>
        <h1>Prodotto Extra</h1>
        <p>Tipo di prodotto: <strong><?php echo $extra->getType(); ?></strong></p>
        <p>Marca del prodotto: <strong><?php echo $extra->getBrand(); ?></strong></p>
        <p>Colore del prodotto: <strong><?php echo $extra->color; ?></strong></p>
        <p>Prezzo del prodotto: <strong><?php echo $extra->getPrice(); ?> €</strong></p>
        <p>Prezzo con sconto 30%: <strong><?php echo $extra->getDiscountPrice(30); ?> €</strong></p>
        <p>Nome completo: <strong><?php echo $extra->getFullName(); ?></strong></p>
    </section>

</body>

</html>