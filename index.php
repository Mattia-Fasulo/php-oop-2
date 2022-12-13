<?php
include __DIR__.'./Models/Category.php';
include __DIR__.'./Models/Product.php';
include __DIR__.'./Models/Toy.php';
include __DIR__.'./Models/Bed.php';

$ballString = new Toy(new Category('Dog'),'Ball with String',22.99,'./img/palla-con-tirante.png','Rubber dog ball with tie rod, resistant to bites but delicate in case of collision with the furniture of the house. The tie rod makes the game ideal not only for throwing and fetching but also for back and forth.',3.5,'Ball Ø 6.5 cm - Tie rod 35 cm','Fantasy','Rubber',false, false);

var_dump($ballString);

$chicken = new Toy(new Category('Dog'), 'Rubber Chicken',14.99,'Chicken-shaped latex toy for dogs, if pressed, it reproduces the cry of the hen, stimulating the dog but without annoying humans.', './img/chicken.png', 5, '23 cm', 'Fantasy', 'Rubber', false, true);

var_dump($chicken);

$outdoorKennel = new Bed(new Category('Dog'), 'Outdoor Kennel',49.99,'Two-tone plastic doghouse in the shape of a house, with an entrance hole on the short side, perfect for outdoor use because it is waterproof and easy to sanitize.','./img/cuccia-da-esterno.png',4,'L - (96 x 78 x 73 cm)','Green','Rubber',true);

var_dump($outdoorKennel);




include __DIR__ . './partials/header.php';
include __DIR__ . './partials/main.php';
include __DIR__ . './partials/footer.php';
?>





    



