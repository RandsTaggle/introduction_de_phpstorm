<html>
    <head>
        <title>title</title>
        <style>
            body{
                display: flex;
            }
        </style>
    </head>
    <body>
            <?php
            $students = [
                "Emmanuel" => 42,
                "Thierry" => 51,
                "Pascal" => 45,
                "Eric" => 48,
                "Nicolas" => 19
            ];
            $average = 0;
            foreach ($students as $name => $age) {
                $average += $age;
                echo $name . ' is ' . $age . ' years old<br/>';
            }
            echo '<br/>';
            $average /= count($students);
            echo "The average age of that class is $average years";
            ?>
    </body>
</html>

