<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $day = include 'C:\xampp\htdocs\abc\task3\table.php'?>
    <table>
            <tr>
                <th>Номер</th>
                <th>День</th>
            </tr>
            <tr>
               <?php 
                    foreach ($day as $key => $value) {
                        $temp = '
                        <tr> <td> %s </td> <td> %s </td> </tr> 
                        ';
                        echo sprintf($temp, $key, $value);
                        
                    }
                ?>
            </tr>

    </table>
</body>
</html>