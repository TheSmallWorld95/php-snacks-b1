<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi
che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
  $name = ($_GET['name']);
  $mail = ($_GET['mail']);
  $age = ($_GET['age']);
  $mail_at = strpos($mail, '@');
  $mail_dot = strpos($mail, '.');
  $isNaN = is_numeric($age);

  if (strlen($name) > 3 && !$mail_at === false && !$mail_dot === false && $isNaN === true ) {
    ?>
    <div class="">
      Accesso riuscito
    </div>
  <?php
  } else {
  ?>
    <div class="">
      Accesso negato
    </div>
  <?php
   }
  ?>
