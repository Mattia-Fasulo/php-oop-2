<?php
include __DIR__.'./Models/Category.php';
include __DIR__.'./Models/Product.php';
include __DIR__.'./Models/Toy.php';
include __DIR__.'./Models/Bed.php';
include __DIR__.'./Models/Food.php';

$products = [];


$ballString = new Toy(new Category('Dog','fa-solid fa-dog'),'Ball with String',22.99,'./img/palla-con-tirante.png','Rubber dog ball with tie rod, resistant to bites but delicate in case of collision with the furniture of the house. The tie rod makes the game ideal not only for throwing and fetching but also for back and forth.',3.5,'Ball Ø 6.5 cm - Tie rod 35 cm','Fantasy','Rubber',false, false);

$ballString->setBrand('CaneAmico');
// var_dump($ballString);
$products[] = $ballString;


$chicken = new Toy(new Category('Dog','fa-solid fa-dog'), 'Rubber Chicken',14.99,'./img/chicken.png','Chicken-shaped latex toy for dogs, if pressed, it reproduces the cry of the hen, stimulating the dog but without annoying humans.', 5, '23 cm', 'Fantasy', 'Rubber', false, true);

$chicken->setBrand('CaneAmico');
// var_dump($chicken);
$products[] = $chicken;

$outdoorKennel = new Bed(new Category('Dog','fa-solid fa-dog'), 'Outdoor Kennel',49.99,'./img/cuccia-da-esterno.png','Two-tone plastic doghouse in the shape of a house, with an entrance hole on the short side, perfect for outdoor use because it is waterproof and easy to sanitize.',4,'L - (96 x 78 x 73 cm)','Green','Rubber',true);

$outdoorKennel->setBrand('CaneAmico');
// var_dump($outdoorKennel);
$products[] = $outdoorKennel;

$batuffolo = new Bed(new Category('Cat', 'fa-solid fa-cat'), 'Batuffolo Kennel', 29.99,'./img/batuffolo.png','Kennel for cats, made of soft plush, is a soft nest for our animals to rest. The raised edge is perfect for dogs and cats who like to sleep curled up, feeling protected. A warm winter cuddle.', 4.5, 'M - (Ø70 x 25 cm)', 'Pink', 'Polyester', false);

$batuffolo->setBrand('GattoAmico');
// var_dump($batuffolo);
$products[] = $batuffolo;

$snackBones = new Food(new Category('Dog','fa-solid fa-dog'), 'Snack Bones',8.50,'./img/ossi-snack.png','Beef flavored bones. Practical open and close package.',4,'Beef','100 g','Beef');

$snackBones->setBrand('CaneAmico');
// var_dump($snackBones);
$products[] = $snackBones;

$tidbits = new Food(new Category('Cat','fa-solid fa-cat'), 'Tidbits', 5.99, './img/snack-gatto.png', 'Bites for cats with functional ingredients to keep the cat in perfect shape. In resealable jar which allows you to keep the fragrance and quality of the product unchanged.', 3.5, 'Salmon', '75 g', 'Salmon, Cheese, Bluberry');

$tidbits->setBrand('CaneAmico');
// var_dump($tidbits);
$products[] = $tidbits;

// var_dump($products);
// var_dump($tidbits->getProductDetails());
// var_dump($tidbits->getClassName());
// var_dump($batuffolo->getClassName());
// echo $batuffolo->getCategoryIcon();




include __DIR__ . './partials/header.php';
include __DIR__ . './partials/main.php';
include __DIR__ . './partials/footer.php';
?>





    



