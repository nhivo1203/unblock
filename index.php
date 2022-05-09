<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learning PHP</title>
</head>
<body>
    <?php
        $number = 1000;

        echo "<h1>Hello Github</h1>";

        switch ($number) {
            case 100:
                echo "so 100";
                break;
            case 10:
                echo "so 10";
                break;
            default:
                echo "khong co so de hien thi";
                break;
        }

        $count = 1;
        while ($count <= 10) {
            echo $count . "<br>";
            $count++;
        }

        ?>
</body>
</html>