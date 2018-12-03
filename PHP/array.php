<!DOCTYPE html>
<head>
  <title>Array</title>
</head>
<body>
  <?php
//Sample of an associative Array:
$customer['firstName'] = 'John';
$customer['lastName'] = 'Kay';
$customer['city'] = 'New York';
$customer['state'] = 'New York';

echo "My first name is" .$customer['firstName'];
echo '<br>';

//Sample of an indexed Array:
$cars[0] = 'Ferrari';
$cars[1] = 'Porshe';
$cars[2] = 'Mustang';
$cars[3] = 'Jaguar';
$cars[4] = 'Audi';

echo "My other car is a $cars[0]\n";
echo "My other car is a $cars[3]";
 echo '<br>';

//Creating associative array using shorthand:
$restaurant = [
  [
    'name' => 'Nobu',
    'type' => 'sushi',
    'price' => 'Expensive'
  ],

  [
    'name' => 'Burger King',
    'type' => 'Fast Food',
    'price' => 'Cheap'
  ]
];

echo $restaurant[0]['name'].' is very '.$restaurant[0]['price'];
echo '<br>';
echo $restaurant[0]['name'].' is very '.$restaurant[1]['price'];

   ?>
</body>
