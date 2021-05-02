<?php
  $campionato = [
    [
      'casa' => 'Grifondoro',
      'ospite' => 'Tassorosso',
      'puntiCasa' => 120,
      'puntiOspite' => 75,
    ],
    [
      'casa' => 'Serpeverde',
      'ospite' => 'Corvonero',
      'puntiCasa' => 65,
      'puntiOspite' => 90,
    ],
    [
      'casa' => 'Grifondoro',
      'ospite' => 'Serpeverde',
      'puntiCasa' => 100,
      'puntiOspite' => 35,
    ],

  ];

  var_dump($campionato);


   for ($i=0; $i < count($campionato); $i++) { ?>

    <div class="">
      <?= $campionato[$i]['casa'];  ?> -
      <?= $campionato[$i]['ospite'];  ?>
      <?= $campionato[$i]['puntiCasa'];  ?> |
      <?= $campionato[$i]['puntiOspite'];  ?>
    </div>

  <?php }

 ?>
