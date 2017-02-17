<?php
/*
$animais = array("Gato","Cachorro","coelho","jirafa" );

for ($i=0; $i < 4; $i++) {
  echo $animais[$i]."<br/>";
}
*/
?>


<ul>
    <?php
      for ($i=0; $i < 5 ; $i++) {
        echo '<li><a href="#'.$i.'">Home</a>';
      }
   ?>
</ul>


<ul>
    <?php for ($i=0; $i < 5; $i++): ?>
      <li><a href ="#<?php=$i;?>">Home</a>
    <?php endfor; ?>
</ul>
