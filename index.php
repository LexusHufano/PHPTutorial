<?php 

    // String 

    // echo 'Hello World. This is my first PHP file.'

    // Conditional statement

    // $price = 100;

    // if($price < 30){
    //     echo 'The price is less than 20';
    // } elseif($price < 100){
    //     echo 'The price is greater than 20 and less than 100.';
    // } else{
    //     echo 'The price is greater than 100';
    // }

    // Array 

    // $products = [
    //     ['name' => 'Lenovo', 'price' => 10000],
    //     ['name' => 'Acer', 'price' => 20000],
    //     ['name' => 'Asus', 'price' => 30000],
    //     ['name' => 'MSI', 'price' => 5000],
    // ];

    // foreach($products as $product){
        
    //     if($product['price'] > 15000) {
    //         echo $product['name'] . ' product is greater than 15000 pesos' . '</br>';
    //     } else {
            // echo $product['name'] . ' product is less than 15000 pesos' . '</br>';
    //     }
    // }

    // break and continue

    // foreach($products as $product) {
    //     if($product['price'] > 15000) {
    //         break;
    //     } // output Lenovo

    //     if($product['price'] > 15000) {
    //         continue;
    //     } // output Lenovo, MSI


    //     echo $product['name'] . '</br>';
    // }

    // function

    // function sayHello($name){
    //     echo "Hello $name";
    // }

    // sayHello('lexus');

    function fizzBuzz($numbers){
        for($i = 1; $i <= $numbers; $i++) {
            if(($i % 3 === 0) && ($i % 5 === 0)){
                echo 'FizzBuzz' . '</br>';
            } elseif($i % 5 === 0) {
                echo 'Buzz' . '</br>';
            } elseif($i % 3 === 0) {
                echo 'Fizz' . '</br>';
            } else {
                echo $i . '</br>';
            }
        }
    }

    fizzBuzz(30);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    
    <h1>This is the products that price is greater than PHP15,000</h1>

    <div>
        <ul>
            <?php foreach($products as $product){ ?>
                <?php if($product['price'] > 15000){ ?>
                    <li><?php echo $product['name'] . ' product is greater than PHP 15,000'; ?></li>
                <?php } else { ?>
                    <li><?php echo $product['name'] . ' product is less than PHP 15,000';?></li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
    
</body>
</html>