<?php
function cekGanjilGenapPrima($bilangan) {
    $output = "Angka " . $bilangan . " adalah bilangan ";
    
    if ($bilangan % 2 == 0) {
        $output .= "genap";
    } else {
        $output .= "ganjil";
    }
    
    if ($bilangan < 2) {
        $output .= " dan bukan bilangan prima";
    } else {
        $prima = true;
        for ($i = 2; $i <= sqrt($bilangan); $i++) {
            if ($bilangan % $i == 0) {
                $prima = false;
                break;
            }
        }
        if ($prima) {
            $output .= " sekaligus bilangan prima";
        }
    }
    
    echo $output . "<br>";
}

for ($i = 1; $i <= 20; $i++) {
    cekGanjilGenapPrima($i);
}
?>