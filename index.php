<?php 
    //! variable = a reusable container that holds data 
    //?            string, integer, float, boolean 

    //todo = strings 
    $name = "Linkx Mere";
    $food = "pizza";
    $email = "linkx123@gmail.com";

    //todo = integers
    $age = 21;
    $users = 2;
    $quantity = 4;

    //todo = floats
    $gpa = 1.25;
    $price = 4.99;
    $tax_rate = 5.1;

    //todo = booleans
    $employed = true;
    $online = false;
    $for_sale = true;

    echo "Hello {$name}<br>";
    echo "I like {$food}<br>";
    echo "My email is {$email}<br><br>";

    echo "I am {$age} years old<br>";
    echo "There are {$users} online<br>";
    echo "You would like to buy {$quantity} items<br><br>";

    echo "My gpa is: {$gpa}<br>";
    echo "My pizza is \${$price}<br>";
    echo "The sales tax rate is: {$tax_rate}%<br><br>";

    echo "Online status: {$online}<br><br><br>";

    $total = null;

    echo "You have ordered {$quantity} x {$food}s<br>";
    $total = $quantity * $price;
    echo "Your total is: \${$total}";
?>