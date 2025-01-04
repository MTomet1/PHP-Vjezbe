<?php
date_default_timezone_set('Europe/Zagreb');

$dan = date('l'); 
$sati = (int)date('H'); 
$trenutni_datum = date('Y-m-d'); 

$praznici = [
    '2024-01-01',
    '2024-06-25',
    '2024-08-05',
    '2024-12-25',
];

if (in_array($trenutni_datum, $praznici)) {
    echo "dućan je zatvoren na sve državne praznike i blagdane!";
} else {
    if ($dan === 'Sunday') {
        echo "dućan je zatvoren";
    } elseif ($dan === 'Saturday') {
        if ($sati >= 9 && $sati < 14) {
            echo "dućan radi od 9 – 14";
        } else {
            echo "dućan je zatvoren";
        }
    } else {
        if ($sati >= 8 && $sati < 20) {
            echo "dućan je ovog trena otvoren.";
        } else {
            echo "Dućan je zatvoren";
        }
    }
}
?>
