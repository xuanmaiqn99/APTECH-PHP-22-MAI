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
    
    border: 1px solid black;
  }
  </style>
</head>
<body>
  <?php
  $users = [
    [
      "name" => "Mason Drake",
      "email" => "Nullam.vitae.diam@lorem.org",
      "phone" => "(01254) 375712",
      "dob" => "20/05/2020",
      "country" => "Guyana",
      "city" => "Beauport"
    ],
    [
      "name" => "Chancellor Mcclure",
      "email" => "tellus@Donecconsectetuermauris.org",
      "phone" => "070 3535 2825",
      "dob" => "06/10/2018",
      "country" => "Philippines",
      "city" => "San Rafael"
    ],
    [
      "name" => "Jonah Benton",
      "email" => "mauris.rhoncus.id@nuncestmollis.edu",
      "phone" => "0845 46 46",
      "dob" => "16/04/2020",
      "country" => "Romania",
      "city" => "Casalbuono"
    ]
  ];
  ?>

  <table>
    <thead>
      <th>#</th>
      <th>Name</th>
      <th>Email</th>
    </thead>
    <tbody>
      <?php
      for ($i = 0; $i < count($users); $i++) {
        ?>
      <tr>
        <td>
          <?php
              echo $i + 1;
              ?>
        </td>
        <td>
          <?php
              echo $users[$i]["name"];
              ?>
        </td>
        <td>
          <?php
              echo $users[$i]["email"];
              ?>
        </td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</body>
</html>