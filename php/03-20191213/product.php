<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
  table{
    border-collapse: collapse;
  }
  td,
  th {
    padding: 10px;
    border: 1px solid black;
  }

  </style>
</head>
<body>
    <?php
    $products = [
    "apple" => [
        "name" => "iPhone X",
        "price" => 999,
    ],
    "samsung" => [
        "name" => "Galaxy S10",
        "price" => 888,
    ]
    ];
    $keys = array_keys($products);
    ?>
    <table>
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $tong=0;
        for ($i = 0; $i < count($keys); $i++) {
        ?>
        <tr>
        <td>
            <?php echo $i + 1; ?>
        </td>
        <td>
            <?php echo $products[$keys[$i]]["name"]; ?>
        </td>
        <td>
            <?php echo $products[$keys[$i]]["price"]; ?>
        </td>
        </tr>
        <?php
        $tong =$tong + $products[$keys[$i]]["price"];
        }
        ?>
        <tr>
        <th colspan="2">Tổng</th>
        <td>
            <?php echo $tong; ?>
        </td>
        </tr>
    </tbody>
    </table>
</body>
</html>