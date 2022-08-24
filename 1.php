<?php

/**
 * Mencetak string
 * $teks nilai string
 * $bold adalah argumen opsional
 */
function print_teks($teks, $bold = true) {
    echo $bold ? '<br' .$teks. '</br>' : $teks;
    echo 
}

print_teks('Indonesiaku');
// Mencetak dengan huruf tebal
print_teks('Indonesiaku', false);
// Mencetak dengan huruf reguler
?>