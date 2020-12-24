<?php
require_once 'src/autoload.php';
$faker = Faker\Factory::create();
?>
<?xml version="1.0" encoding="UTF-8"?>
    <?php for ($i = 0; $i < 2; $i++): ?>
        <?php echo $faker->firstName ?></br>
        <?php echo $faker->lastName ?></br>
        <?php echo $faker->phoneNumber ?></br>
        <?php echo $faker->streetName ?></br>
        <?php echo $faker->buildingNumber ?></br>
        <?php echo $faker->city ?></br>
    <?php endfor; ?>