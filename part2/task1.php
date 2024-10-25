<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/styles.css">
    <title>Task 1</title>
</head>

<body class="container">
    <div class="header-container">
        <h2 class="header-content">Task 1</h2>
    </div>

    <div class="instruction-container">
        <div class="instruction-content">
            <div class="tooltip-container">
                <span class="text">Instructions</span>
                <span class="tooltip">
                1. Generate a random character from a -k
                <br>
                ● Create a 4 x 5 table
                <br>
                ● Display all the random characters inside the table
                <br>
                ● Highlight all the character that belongs to the even column
                </span>
            </div>
        </div>
    </div>

    <div class="card">
    <a href="../index.php" class="home"><img class="home-icon" src="../layout/home.png" alt=""></a>
        <table class="task1">
            <?php
            function generateRandomCharacter() {
                return chr(rand(97, 107)); 
            }

            for ($row = 0; $row < 4; $row++) {
                echo "<tr>";  

                for ($col = 0; $col < 5; $col++) {
                    $randomChar = generateRandomCharacter(); 

                    if (($col + 1) % 2 == 0) {
                        echo "<td class='highlight'>$randomChar</td>";
                    } else {
                        echo "<td class='random'>$randomChar</td>";
                    }
                }

                echo "</tr>"; 
            }
            ?>
        </table>
    </div>
</body>
</html>
