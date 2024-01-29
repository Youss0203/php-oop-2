<?php
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Category.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Kennel.php';
include_once __DIR__ . '/Models/Toy.php';

    $catsCategory = new Category('Gatti', 'Products for cats', 'https://cdn-icons-png.flaticon.com/512/3479/3479853.png');
    $dogsCategory = new Category('Dogs', 'Products for dogs', 'https://cdn2.iconfinder.com/data/icons/dog-activities-round/128/1545485_-_canine_dog_dogs_labrador_r-512.png');
    
    $leash = new Product('Guinzaglio', 'Guinzaglio per cani', 33.33, 'https://www.pupakiotti.com/cdn/shop/products/4422-BNY_500x.jpg?v=1650396278',true, 12, $dogsCategory);
    
    $littleBell = new Product('Campanellina', 'Piccola campanellina per sentire il gatto', 8.99, 'https://www.petsy.online/cdn/shop/products/Untitleddesign-2020-06-13T185635.426.png?v=1592054802', true, 36, $catsCategory);
    
    // var_dump($leash, $littleBell);
    
    $chickenBits = new Food('Croccantini', 'Croccantini di pollo', 6.99, 'https://shop-cdn-m.mediazs.com/bilder/trixie/premio/chicken/filet/bites/1/800/62415_pla_trixie_premio_chicken_filet_bites_50g_1.jpg', true, 111, $catsCategory, 6.6, 12.3, 22.73);
    
    $cowBone = new Food('Osso', 'Osso per cani', 15.99, 'https://m.media-amazon.com/images/I/81qqv7HrSeL._AC_SL1500_.jpg', true, 6, $dogsCategory, 5.2, 4.42, 15.73);
    
    $frisbee = new Toy('Frisbee', 'Frisbee giocattolo per annoiarsi', 22.02, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjsOQR7G7HpgO-vY57gVvykDW22Jw1l6fDZw&usqp=CAU', true, 10, $dogsCategory, 'Plastic full of petrol');
    
    $veganClew = new Toy('Gomitolo', 'Gomitolo per gatti', 3.99, 'https://c7.alamy.com/comp/BAR0P5/red-small-cat-and-big-clew-of-wool-isolated-on-white-BAR0P5.jpg', true, 70, $catsCategory, 'Vegan wool');
    
    $chiuauaKennel = new Kennel('Cuccia per Chiuaua ', 'Cuccia brutta', 80.99, 'https://www.tiendanimal.es/dw/image/v2/BDLQ_PRD/on/demandware.static/-/Sites-kiwoko-master-catalog/default/dw3b95d464/images/large/8d9cf403baaa43278961f35c6167f805.jpg?sw=780&sh=780&q=85', true, 2, $dogsCategory, 'small');
    
    $shepherdKennel = new Kennel('Cuccia meravigliosa', 'Cuccia', 199.99, 'https://i.etsystatic.com/7583922/r/il/7ef73f/1059263558/il_794xN.1059263558_qhur.jpg', true, 2, $dogsCategory, 'huge');
    
    $products = [
        $leash, $littleBell, $chickenBits, $cowBone, $frisbee, $veganClew, $chiuauaKennel, $shepherdKennel
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>OOP 1</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="container">
        <div class="row text-center mb-3 p-3">
            <div class="col-12">
                <h1>
                    PHP Object Oriented Programming
                </h1>
            </div>
        </div>
    </header>
    <main class="container">
        <section class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-3 mb-5 ">
                    <div class="card h-100">
                        <img src="<?php echo $product->imageUrl; ?>" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $product->description; ?>
                            </h5>
                            <h6 class="card-subtitle">
                                <?php echo $product->category->name; ?>
                            </h6>
                            <p class="card-text">
                                <?php echo $product->description; ?>
                            </p>
                            <p>
                                Tutte le caratteristiche:
                                <ul>
                                <?php  foreach ($product as $chiave => $valore) {
                                    // var_dump($valore);
                                    if (is_a($valore, 'Category')){ ?>
                                        <li>
                                            <?php echo $chiave; ?>: <?php echo $valore->name; ?>
                                        </li>
                                    <?php } else { ?>
                                        <li>
                                            <?php echo $chiave; ?>: <?php echo $valore; ?>
                                        </li>
                                <?php }} ?>
                                </ul>
                            </p>
                            <a href="#" class="btn btn-primary">
                                Acquista per soli <?php echo $product->price; ?>&euro;
                            </a>
                        </div>
                    </div>
                </div>
        <?php } ?>