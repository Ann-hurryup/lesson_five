<!DOCTYPE html>
<html>
<head>
<title>Таблица данных</title>
<meta charset="utf-8" />
</head>
<body>
<?php
$array= [
    [
        'item' => "Товар1",
        'description' => "Описание товара 1",
        'price' => 100,
    ],
    [
        'item' => "Товар2",
        'description' => "Описание товара 2",
        'price' => 200,
    ],
    [
        'item' => "Товар3",
        'description' => "Описание товара 3",
        'price' => 300,
    ]
    ];
    ?>
<table>
  <tr>
  <?php foreach($array[0] as $key_one => $value) : ?>
    <th>
    <?=$key_one ?>
    </th>
    <?php endforeach; ?>
  </tr>
  <?php foreach($array as $value): ?>
  <tr>
    <?php foreach($value as $value): ?>
        <td>
            <?= $value ?>
        </td>
    <?php endforeach; ?>
  </tr>
  <?php endforeach; ?>
</table>
</body>
</html>