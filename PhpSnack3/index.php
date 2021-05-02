<!-- Creare un array di array.
Ogni array figlio avrà come chiave una data in questo formato: DD/MM/YYYY
(ad es 31/01/2007) e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post.

Qui l’array di esempio:
https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

    '07/03/2019' => [
        [
            'title' => 'Compleanno',
            'author' => 'Stefano Fumagalli',
            'text' => 'Tanti Auguri'
        ],
        [
            'title' => 'Grigliata',
            'author' => 'Casa Colombo',
            'text' => 'Mangiamo tutti insieme'
        ],
    ],
    '23/02/2020' => [
        [
            'title' => 'Compleanno',
            'author' => 'Fabio Colombo',
            'text' => 'Super Auguri TRMN'
        ]
    ],
    '03/11/2019' => [
        [
            'title' => 'Partita',
            'author' => 'OSGB vs OSL',
            'text' => 'Derby Stagionale'
        ],
        [
            'title' => 'Compleanno',
            'author' => 'Mamma',
            'text' => 'Tantissimi auguri di Buon Compleanno'
        ],
        [
            'title' => 'Cinema',
            'author' => 'Maratona DarioMocciaTwitch',
            'text' => 'Tutta la notte in compagnia'
        ]
    ],
];

$posts_keys = array_keys($posts);
var_dump($posts_keys);


for ($i=0; $i < count($posts_keys) ; $i++) { ?>
  <h1> <?= $posts_keys[$i]; ?></h1>
  <?php $post_by_key = $posts[$posts_keys[$i]] ?>
  <ul>
  <?php for ($j=0; $j < count($post_by_key); $j++) { ?>
      <li> <?= $post_by_key[$j]['title'] ?></li>
      <li> <?= $post_by_key[$j]['author'] ?></li>
      <li> <?= $post_by_key[$j]['text'] ?></li>
<?php   } ?>
  </ul>

<?php } ?>
