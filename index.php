
<?php

    $number = $_POST["number"];

    if (empty($number)) {
        echo "Boş değer gönderilemez.";
    } else {
        if ($number % 3 == 0) {
            echo "$number sayısı 3'e tam olarak bölünebilir.";
        } else {
            $nextMultiple = ceil($number / 3) * 3;
            echo "$number sayısı 3'e bölünemez. En yakın 3'e bölünebilen sayı: $nextMultiple";
        }
    }

?>
