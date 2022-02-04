<?php
$products = [
    [
        'nome' => 'Pollo Allo Spiedo',
        'prezzo' => '4,99',
        'immagine' => 'https://www.ricettedigusto.info/wp-content/uploads/2015/11/pollo-allo-spiedo-fatto-in-casa-1200x675.jpg',
        'tipologia' => 'Gastronomia'
    ],
    [
        'nome' => 'Pane',
        'prezzo' => '0,99',
        'immagine' => 'https://www.quellalucinanellacucina.it/wp-content/uploads/2021/01/pane-di-segale.jpg',
        'tipologia' => 'Panetteria'
    ],
    [
        'nome' => 'Salame',
        'prezzo' => '3,99',
        'immagine' => 'https://m.media-amazon.com/images/I/41fsD7Qe4gL._AC_.jpg',
        'tipologia' => 'Gastronomia'
    ],
    [
        'nome' => 'Pizza',
        'prezzo' => '2,99',
        'immagine' => 'https://d1e3z2jco40k3v.cloudfront.net/-/media/drog19/recipe-images/pizza-margherita-con-basilico_2000.jpg',
        'tipologia' => 'Panetteria'
    ],
    [
        'nome' => 'Rombo',
        'prezzo' => '6,99',
        'immagine' => 'https://www.melarossa.it/wp-content/uploads/2016/10/rombo-al-forno-1280x720.jpg',
        'tipologia' => 'Pescheria'
    ],
    [
        'nome' => 'Orata',
        'prezzo' => '8,99',
        'immagine' => 'https://wips.plug.it/cips/buonissimo.org/cms/2018/10/Orata-in-padella.jpg',
        'tipologia' => 'Pescheria'
    ],
    [
        'nome' => 'Gamberoni',
        'prezzo' => '8,99',
        'immagine' => 'https://www.pescheriamercatodelpesce.com/wp-content/uploads/2019/11/gambero-rosso.jpg',
        'tipologia' => 'Pescheria'
    ],
    [
        'nome' => 'Costolette di Agnello',
        'prezzo' => '5,99',
        'immagine' => 'https://thumbs.dreamstime.com/b/vista-superiore-delle-cotolette-crude-dell-agnello-con-i-rosmarini-ed-i-granelli-di-pepe-87814860.jpg',
        'tipologia' => 'Macelleria'
    ]
];


$productFiltered = $products;

// 'nome' => 'Pollo Allo Spiedo',
// 'prezzo' => '4,99',
// 'immagine' => 'https://www.ricettedigusto.info/wp-content/uploads/2015/11/pollo-allo-spiedo-fatto-in-casa-1200x675.jpg',
// 'tipologia' => 'Gastronomia'

if (isset($_GET['genre']) !== false) {
    $type = $_GET['genre'];
    
    if ($type === 'all') {
        $productFiltered = $products;
    } else {
        $productFiltered = [];
        foreach ($products as $product) {
            if ($product['tipologia'] === $type) {
                $productFiltered[] = $product;
            }
        }
    }
} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

</head>

<body>
    <form action="index.php" method="GET">
        <input type="text" name="titolo">
        <select name="genre" id="genre">
            <option value="all">All</option>
            <option value="Pescheria">Pescheria</option>
            <option value="Gastronomia">Gastronomia</option>
            <option value="Panetteria">Panetteria</option>
            <option value="Macelleria">Macelleria</option>
        </select>
        <button>Cerca</button>
    </form>
    
    <div class="d-flex">
        <?php foreach ($productFiltered as $product) { ?>
            <div class="container">
                <div class="image">
                    <img src="<?= $product['immagine'] ?>" alt="">
                </div>
                <div class="text-center">
                    <h1 class=""><?= $product['nome'] ?></h1>
                    <h4 class="red">&euro; <?= $product['prezzo'] ?></h4>
                    <h3 class=""><?= $product['tipologia'] ?></h3>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>