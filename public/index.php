<html>
<head>
    <title>Lesson 1</title>
    <link rel="stylesheet" href="css/skeleton.css" />
</head>


<?php
    # This is all of the dynamic data
    $name = "Mike Bywater";
    $postcode = "TF3 2NS";
    $age = "33";
    $gender = "Male";
    $move = "Salsa Shuffle";
    $id = $_GET['id'];
?>

<body>

    <h1>Profile <?= $id ?></h1>

    <table class="u-full-width">
        <tbody>
        <tr>
            <th>Name</th>
            <td><?= $name ?></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><?= $age ?></td>
        </tr>
        <tr>
            <th>Gender</th>
            <td><?= $gender ?></td>
        </tr>
        <tr>
            <th>Postcode</th>
            <td><?= $postcode ?></td>
        </tr>
        <tr>
            <th>Special Move</th>
            <td><?= $move ?></td>
        </tr>
        </tbody>
    </table>

</body>



</html>










