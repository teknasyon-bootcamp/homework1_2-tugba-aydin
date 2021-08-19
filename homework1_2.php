<?php

$gender = "female"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 167; // boy (cm)
$age = 26; // yaş (sene)
$guess = "1470"; // Tahmin edilen değer
$real = 0; // Hesaplanan gerçek değer, başlangıç olarak 0 aldı

    if($gender === "female") // $gender değişkeninin değeri female ise 447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age) bu formül uygulanacak ve $real değişkenine bu formül sonucunun değeri atılacaktır
        $real=447.593 + (9.247 * $weight) + (3.098 * $height) - (4.330 * $age); 
    elseif($gender === "male") // $gender değişkeninin değeri male ise 88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age) bu formül uygulanacak ve $real değişkenine bu formül sonucunun değeri atılacaktır
        $real=88.362 + (13.397 * $weight) + (4.799 * $height) - (5.677 * $age);
    else // $gender değeri male veya female değilse ekrana Geçersiz değer girişi yazacaktır
	    echo("Geçersiz değer girişi"."\n");

    echo("BMR:".$real."\n"); // ekrana $real değerini yazdırır
    
    if($real===(int)$guess) // $real değişkeni $guess değişkeniyle aynı değere sahipse ekrana Tahmin değerine eşit yazdırır
        echo("Tahmin değerine eşit");
    elseif ($real>(int)$guess) // $real değişkeni $guess değişkeninden büyükse ekrana Tahmin değerinden büyük yazdırır
        echo("Tahmin değerinden büyük");
    else // $real değişkeni $guess değişkeninden küçükse ekrana Tahmin değerinden küçük yazdırır
        echo("Tahmin değerinden küçük");

?>