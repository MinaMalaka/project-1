<?php
$num1 = -5 ;
$num2 = 8 ;
$num3 = 6 ;
$operand1 = $num1 + $num2 * $num3 ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project-1</title>
    <style>
        body {
            background-color : #804000;
        }
        h1 {
            text-align : center;
            color : #cc0;
            text-decoration :underline
        }
        p {
            font-size :25px;
            font-weight:bold;
            color:#cc0
        }
        table {
            border-collapse :collapse;
            width:100%
        }
        td, th {
            border:1px #cc0 solid;
            color:#0F9;
            font-weight : bold;
            font-size : 25px;
            padding :10px
        }
        th {
            color :#cc0
        }
        .salute {
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>php assignment-1</h1>
    <div class="salute">
        <p><?php echo"Hello <br>" ?></p>
        <p><?php echo "Mina Malaka <br>" ?></p>
    <table >
        <tr>
            <th>equation</th>
            <th>result</th>
        </tr>
        <tr>
            <td> -5 + 8 * 6</td>
            <td><?php echo $operand1 ?></td>
        </tr>
        <tr>
            <td>(55+9) % 9 </td>
            <td><?php echo (55+9)%9 ?></td>
        </tr>
        <tr>
            <td>20 + -3*5 / 8</td>
            <td><?php echo ceil(20 + -3*5 / 8) ?></td>
        </tr>
        <tr>
            <td>5 + 15 / 3 * 2 - 8 % 3</td>
            <td><?php echo 5 + 15 / 3 * 2 - 8 % 3 ?></td>
        </tr>
        <tr>
            <td>((25.5 * 3.5 - 3.5 * 3.5) / (40.5 - 4.5))</td>
            <td><?php echo ((25.5 * 3.5 - 3.5 * 3.5) / (40.5 - 4.5)) ?></td>
        </tr>
    </table>
</body>
</html>
