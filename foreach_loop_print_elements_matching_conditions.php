<?php
$elements = ['Fast.', 'Low','small', 'Big bad wolf.', 'Alexander.', 'Silver.', 'PHP', 'sofia.', 'Andrea.', 'squirrel'];
while (FALSE !== ($line = fgets(STDIN))) {
  $elements[] = trim($line);
}
foreach($elements as $item) {
    $lenght = strlen($item);
    $position = substr($item,-1); 
    $CapitalLetter = preg_match('~^\p{Lu}~u', $item);

    if (($lenght>=5)&&($position ==".")&&($CapitalLetter==TRUE)){
        print "<p>".$item."</p>";
    }
}
?>