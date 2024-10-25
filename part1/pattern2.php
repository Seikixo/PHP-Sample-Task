<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/styles.css">
    <title>Pattern 2</title>
</head>

<body class="container">
    <div class="header-container">
        <h2 class="header-content">Pattern 2</h2>
    </div>
    <div class="card">
        <div class="x">
        <a href="../index.php" class="home"><img class="home-icon" src="../layout/home.png" alt=""></a>    
            <?php
                $rows = 11;  
                $cols = 11;  
                $middleRow = floor($rows / 2); 
                $middleCol = floor($cols / 2); 

                for ($i = 0; $i < $rows; $i++) {
                    for ($j = 0; $j < $cols; $j++) {
                        
                        if ($i == $middleRow && $j == $middleCol) {
                            echo "1"; 
                        } 
                        
                        else if (($j == 1 && ($i == 1 || $i == 9)) || ($j == 9 && ($i == 1 || $i == 9))) {
                            echo "5"; // Insert the number "5"
                        }
                        
                        else if (($j == 3 && ($i == 3 || $i == 7)) || ($j == 7 && ($i == 3 || $i == 7))) {
                            echo "3"; // Insert the number "3"
                        }

                        else if ($j == $i || $j == $cols - $i - 1) {
                            echo "*";
                        } else {
                            echo "&nbsp;&nbsp;&nbsp;"; 
                        }
                    }
                    echo "<br>";
                }
            ?>
        </div>
    </div>

</body>
</html>
