Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno
avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.

<?php
$class = [

    'Fabio Colombo' => [
        [
            'name' => 'Fabio',
            'surname' => 'Colombo',
            'vote' => [6, 5.5, 8, 4.5]
        ],
    ],
    'Davide Berretta' => [
        [
          'name' => 'Davide',
          'surname' => 'Berretta',
          'vote' => [7, 6.5, 9, 3.5]
        ],
    ],
    'Mauro Filippini' => [
        [
          'name' => 'Mauro',
          'surname' => 'Filippini',
          'vote' => [4, 9.5, 5, 6.5]
        ],
    ],

];
$classKeys = array_keys($class);
var_dump($classKeys);

for ($i=0; $i < count($classKeys); $i++) { ?>
  <?php $class_by_key = $class[$classKeys[$i]] ?>
  <?php for ($j=0; $j < count($class_by_key); $j++) { ?>
    <div class="">
      <?= $class_by_key[$j]['name'] ?>
      <?= $class_by_key[$j]['surname'] ?>
      <?= array_sum($class_by_key[$j]['vote'])/count($class_by_key[$j]['vote']); ?>
    </div>
<?php   } ?>
<?php }
?>
