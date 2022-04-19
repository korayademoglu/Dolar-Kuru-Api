<?php 
    $json = json_decode(file_get_contents('https://api.genelpara.com/embed/doviz.json'), true);
?>

<ul>
    <li>Dolar Satış: <?php echo $json["USD"]["satis"];?></li>
    <li>Dolar Alış: <?php echo $json["USD"]["alis"];?></li>
    <li>Dolar Değişim: <?php echo $json["USD"]["degisim"];?></li>
</ul>