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

    // function fizzBuzz($numbers){
    //     for($i = 1; $i <= $numbers; $i++) {
    //         if(($i % 3 === 0) && ($i % 5 === 0)){
    //             echo 'FizzBuzz' . '</br>';
    //         } elseif($i % 5 === 0) {
    //             echo 'Buzz' . '</br>';
    //         } elseif($i % 3 === 0) {
    //             echo 'Fizz' . '</br>';
    //         } else {
    //             echo $i . '</br>';
    //         }
    //     }
    // }

    // fizzBuzz(30);

    // Variable Scope 

    // local vars

    // function sayHello(){
    //     $name = 'lexus';

    //     echo "Good morning $name";
    // }

    // sayHello();
    
    // Global vars

    // $name = 'lexus';

    // function sayHello(){
    //     global $name;
        
    //     echo "Hello $name welcome";
    // }

    // sayHello();

    // -------------------

    // $name = 'lexus';

    // function sayHi($name){

    //     $name = 'hufano';
    //     echo "Hi $name welcome.";
    // }


    // sayHi($name);
?>


<!DOCTYPE html>
<html lang="en">

    <!-- <h1>This is the products that price is greater than PHP15,000</h1>

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
    </div> -->
    
    <?php include('templates/header.php'); ?>

    <?php include('templates/footer.php'); ?>

</html>