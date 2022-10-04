<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=500, initial-scale=1.0">
    <link rel="stylesheet" href="SASS/styles.css">
    <title>TrackPlan Interview Question</title>
</head>

<body>
    <main>
        <div class="cont">
            <h1>Output</h1>
            <?php
            $input = $_POST["input"];

            //Easter Egg
            if ($input == "TrackPlan") {
                include "easterEgg.php";
            }


            echo "<table>"; // Initial Table
            if ($_POST["remSpace"]) {
                $input = str_replace(" ", '', $input);
            }

            echo "<tr>"; // First Column
            if ($_POST["numbers"]) { // Numbers Displayed
                echo "<th>#</th>"; // For Consecutive Nummbers
            }
            if ($_POST["topBar"]) { // Top Bar Display
                for ($i = 0; $i < strlen($input); $i++) { //Display All Leters in the first Column
                    echo "<th>";
                    echo $input[$i];
                    echo "</th>";
                }
                echo "</tr>";
            }

            for ($i = 0; $i < strlen($input); $i++) { //Main Functionality

                if ($_POST["numbers"]) {
                    echo "<tr><th>$i</th>";
                }
                for ($ii = -1; $ii < $i; $ii++) {
                    echo "<th>";
                }

                echo $input[$i];

                for ($ii = -1; $ii < $i; $ii++) {
                    echo "</th>";
                }
                echo "</tr>";
            }
            echo "</table>"; // Closing Table
            ?>
            <a href="index.php">
                <- Return </a>
        </div>
    </main>
</body>

</html>