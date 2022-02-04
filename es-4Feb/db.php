<?php

$cars = [
    [
        'ID' => 1,
        'marca' => 'Ford',
        'modello' => 'Ranger Raptor',
        'cavalli' => null,
        'immatricolazione' => 2020,
        'cilindrata' => 1997,
        'accessori' => "Telecamera per parcheggio assistito, Chiusura centralizzata, Sistema di chiamata d'emergenza, Chiusura centralizzata senza chiave, Apple CarPlay, CD",
        'carburante' => 'Diesel',
        'intestatari' => '',
        'km' => '6600',
        'trasmissione' => 'Automatico',
        'carrozzeria' => 'SUV, Fuoristrada, Pick-up',
        'trazione' => 'integrale',
        'porte' => '4',
        'localita' => 'Lugano',
        'prezzo' => 48800.00,
        'targa' => '',
        'colore' => 'Blu, Azzurro',
        'immagine' => 'https://prod.pictures.autoscout24.net/listing-images/f6e64a03-0317-487e-9307-1f37ac774716_06532003-9abf-42dd-a4f7-b37d431b58df.jpg/640x480.jpg',
    ],
    [
        'ID' => 2,
        'marca' => 'Ford',
        'modello' => 'EcoSport',
        'cavalli' => null,
        'immatricolazione' => 2019,
        'cilindrata' => 998,
        'accessori' => "Cerchi in lega, Android Auto, Sistema di chiamata d'emergenza, Chiusura centralizzata senza chiave, Fari LED, Fendinebbia, Vivavoce, Volante in pelle",
        'carburante' => 'Benzina',
        'intestatari' => '',
        'km' => '65500',
        'trasmissione' => 'Manuale',
        'carrozzeria' => 'SUV',
        'trazione' => 'integrale',
        'porte' => '5',
        'localita' => 'Lugano',
        'prezzo' => 12900.00,
        'targa' => '',
        'colore' => 'Bianco',
        'immagine' => 'https://prod.pictures.autoscout24.net/listing-images/a8fe4dca-86a9-476e-912b-930123c11434_04dfea7f-402b-4832-a16d-7a6fbfbd71c5.jpg/640x480.jpg',
    ],
    [
        'ID' => 3,
        'marca' => 'Toyota',
        'modello' => 'Yaris',
        'cavalli' => null,
        'immatricolazione' => 2017,
        'cilindrata' => 1497,
        'accessori' => "Fendinebbia, Controllo automatico clima, Fari LED, Chiusura centralizzata senza chiave, Telecamera per parcheggio assistito, Vivavoce, Volante in pelle",
        'carburante' => 'Benzina, Elettrica',
        'intestatari' => '',
        'km' => '41631',
        'trasmissione' => 'Manuale',
        'carrozzeria' => 'Berlina',
        'trazione' => 'Anteriore',
        'porte' => '5',
        'localita' => 'Lugano',
        'prezzo' => 15220.00,
        'targa' => '',
        'colore' => 'Blue, Black',
        'immagine' => 'https://img1.stcrm.it/images/20463013/1400x/toyota-yaris-hybrid-2017.jpg',
    ],
    [
        'ID' => 4,
        'marca' => 'Toyota',
        'modello' => 'GT86',
        'cavalli' => null,
        'immatricolazione' => 2012,
        'cilindrata' => 1998,
        'accessori' => "Fendinebbia, Controllo automatico clima, Fari LED, Chiusura centralizzata senza chiave, Telecamera per parcheggio assistito, Vivavoce, Volante in pelle",
        'carburante' => 'Benzina, Elettrica',
        'intestatari' => '',
        'km' => '55415',
        'trasmissione' => 'Manuale',
        'carrozzeria' => 'Coupe',
        'trazione' => 'Posteriore',
        'porte' => '3',
        'localita' => 'Lugano',
        'prezzo' => 24900.00,
        'targa' => '',
        'colore' => 'Red',
        'immagine' => 'https://prod.pictures.autoscout24.net/listing-images/506ea2e0-b576-4112-80e7-d1712e53c17a_1eded1ed-be64-4017-bd75-cae936cb6503.jpg/640x480.jpg',
    ],
    [
        'ID' => 5,
        'marca' => 'Fiat',
        'modello' => '500',
        'cavalli' => null,
        'immatricolazione' => 2019,
        'cilindrata' => 1242,
        'accessori' => "Fendinebbia, Controllo automatico clima, Airbag testa, Specchietti laterali elettrici, Sensori di parcheggio assistito posteriori, Chiusura centralizzata senza chiave, Telecamera per parcheggio assistito, Vivavoce, Volante in pelle",
        'carburante' => 'Benzina',
        'intestatari' => '',
        'km' => '45843',
        'trasmissione' => 'Manuale',
        'carrozzeria' => 'Berlina',
        'trazione' => 'Anteriore',
        'porte' => '3',
        'localita' => 'Lugano',
        'prezzo' => 13950.00,
        'targa' => '',
        'colore' => 'Grigio Metallizzato',
        'immagine' => 'https://prod.pictures.autoscout24.net/listing-images/4d9843e5-774c-4ba1-90c4-64b6ea2593cc_6a050a1f-06e7-4180-8121-3ad72907cf8e.jpg/640x480.jpg',
    ],
];



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    foreach ($cars as $car) { ?>
        <div class="card" style="display: flex; flex-direction: column;">
        <?php
            foreach ($car as $key => $value) {
                if ($key == 'immagine') {
                    echo '<img style="order: -1" src="' . $value . '" />';
                } else {
                    echo '<h3>' . $value . '</h3>';               
                }
            }
        ?>

        </div>
    <?php } ?>
    <!-- // 'ID' => 1,
    // 'marca' => 'Ford',
    // 'modello' => 'Ranger Raptor',
    // 'cavalli' => null,
    // 'immatricolazione' => 2020,
    // 'cilindrata' => 1997,
    // 'accessori' => "Telecamera per parcheggio assistito, Chiusura centralizzata, Sistema di chiamata d'emergenza, Chiusura centralizzata senza chiave, Apple CarPlay, CD",
    // 'carburante' => 'Diesel',
    // 'intestatari' => '',
    // 'km' => '6600',
    // 'trasmissione' => 'Automatico',
    // 'carrozzeria' => 'SUV, Fuoristrada, Pick-up',
    // 'trazione' => 'integrale',
    // 'porte' => '4',
    // 'localita' => 'Lugano',
    // 'prezzo' => 48800.00,
    // 'targa' => '',
    // 'colore' => 'Blu, Azzurro',
    // 'immagine' => -->
</body>

</html>

<!-- 
    <img src="<?php echo $car['immagine']; ?>" />
    <div class="content">
    <h1><?php echo $car['marca'] ?></h1>
    <h2><?php echo $car['modello']; ?></h2>
    <h3><?php echo $car['cavalli']; ?></h3>
    <h3><?php echo $car['immatricolazione']; ?></h3>
    <h3><?php echo $car['cilindrata']; ?></h3>
    <h3><?php echo $car['accessori']; ?></h3>
    <h3><?php echo $car['carburante']; ?></h3>
    <h3><?php echo $car['intestatari']; ?></h3>
    <h3><?php echo $car['km']; ?></h3>
    <h3><?php echo $car['trasmissione']; ?></h3>
    <h3><?php echo $car['carrozzeria']; ?></h3>
    <h3><?php echo $car['trazione']; ?></h3>
    <h3><?php echo $car['porte']; ?></h3>
    <h3><?php echo $car['localita']; ?></h3>
    <h3><?php echo $car['prezzo']; ?></h3>
    <h3><?php echo $car['targa']; ?></h3>
    <h3><?php echo $car['colore']; ?></h3>
</div> -->