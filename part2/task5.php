<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/styles.css">
    <title>Task 5</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        td {
            padding: 10px;
            text-align: center;
            font-size: 20px;
            width: 40px;
            height: 40px;
        }
    </style>
</head>
<body class="container">
    <div class="header-container">
        <h2 class="header-content">Task 5</h2>
    </div>

    <div class="instruction-container">
        <div class="instruction-content">
            <div class="tooltip-container">
                <span class="text">Instructions</span>
                <span class="tooltip">
                5.Using a PHP POST method, ask the user to input 2 numbers
                <br>
                ● Create a Grid using 2 inputs as the length and width.
                <br>
                ● Insert random CONSONANT letters into the grid
                <br>
                ● Display the grid in table
                </span>
            </div>
        </div>
    </div>

    <div class="card">
    <a href="../index.php" class="home"><img class="home-icon" src="../layout/home.png" alt=""></a>    
    <form class="lw-form" method="POST">
        <div class="lw-inp-container">
            <div class="length">
                <div class="pp-container">
                    <input class="pp-input smooth-type" type="number" name="length" id="length" placeholder="Enter a value" required>
                    <label class="pp-label">Enter Grid Length:</label>
                </div>
            </div>
            <div class="width">
                <div class="pp-container">
                    <input class="pp-input smooth-type" type="number" name="width" id="width" placeholder="Enter a value" required>
                    <label class="pp-label">Enter Grid Width:</label>
                </div> 
            </div>
        </div>
        <input class="comic-button" type="submit" value="Generate Grid">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $length = intval($_POST['length']);
        $width = intval($_POST['width']);

        // Array of consonants
        $consonants = array('B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 
                            'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z');

        echo "<h2>Generated Grid</h2>";
        echo "<table>";
        
        for ($i = 0; $i < $length; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $width; $j++) {
                $randomConsonant = $consonants[array_rand($consonants)];
                echo "<td>$randomConsonant</td>";
            }
            echo "</tr>";
        }
        
        echo "</table>";
    }
    ?>
    </div>

</body>
</html>
