<?php
 // affiche une exception avec un message 
?>
<p><?=$message?> </p>
<?php
if (isset ($exc)){
    ?> 
<p> <?= $exc?></p>
<?php
}
?> 
}