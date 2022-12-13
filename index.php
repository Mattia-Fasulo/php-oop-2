<?php
include __DIR__.'./Models/Category.php';
include __DIR__.'./Models/Product.php';
include __DIR__.'./Models/Toy.php';

$ballString = new Toy(new Category('Dog'),'Ball with String',22.99,'./img/palla-con-tirante.png','Rubber dog ball with tie rod, resistant to bites but delicate in case of collision with the furniture of the house. The tie rod makes the game ideal not only for throwing and fetching but also for back and forth.',4,'Ball Ø 6.5 cm - Tie rod 35 cm','Fantasy','Rubber',false);

var_dump($ballString);



include __DIR__ . './partials/header.php';
include __DIR__ . './partials/main.php';
include __DIR__ . './partials/footer.php';
?>





    



