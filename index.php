<?php
$numero = 10;
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Taula de multiplicar</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px;
            margin: 20px auto;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        td {
            border: 1px solid #000000;
            padding: 5px;
        }
        .parell {
            background-color: #dddddd;
        }
        .imparell {
            background-color: #ffffff;
        }
        .error {
            color: red;
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<?php
if ($numero < 1 ||$numero > 12) {
    echo "<div class='error'> Error: El numero tiene que encontrarse entre el 1 y el 12</div>";
} else {
    echo "<table>";
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            $classe = "parell";
        } else {
            $classe = "imparell";
        }
        echo "<tr class='$classe'>";
        echo "<td>$numero x $i</td>";
        echo "<td>" . ($numero * $i) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
</body>
</html>