<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/styles.css">
    <title>Task 2</title>
</head>
<body class="container">
    <div class="header-container">
        <h2 class="header-content">Task 2</h2>
    </div>

    <div class="instruction-container">
        <div class="instruction-content">
            <div class="tooltip-container">
                <span class="text">Instructions</span>
                <span class="tooltip">
                2. Manipulation of multidimensional array
                <br>
                ● Generate a random number from 1 - 100
                <br>
                ● The number generated should always be unique
                <br>
                ● Sum up the number per column and row
                </span>
            </div>
        </div>
    </div>
    
    <div class="card">
    <a href="../index.php" class="home"><img class="home-icon" src="../layout/home.png" alt=""></a>
        <?php
            function generateUniqueNumbers($min, $max, $count) {
                $numbers = range($min, $max);
                shuffle($numbers);
                return array_slice($numbers, 0, $count);
            }

            
            $randomNumbers = generateUniqueNumbers(1, 100, 16);

            
            $table = [];
            $index = 0;
            for ($i = 0; $i < 4; $i++) {
                for ($j = 0; $j < 4; $j++) {
                    $table[$i][$j] = $randomNumbers[$index++];
                }
            }

            
            $rowSums = [];
            $colSums = array_fill(0, 4, 0); 

            for ($i = 0; $i < 4; $i++) {
                $rowSums[$i] = array_sum($table[$i]); // Sum of each row
                for ($j = 0; $j < 4; $j++) {
                    $colSums[$j] += $table[$i][$j]; 
                }
            }
        ?>

    <!-- Output the table -->
        <table class="task2">
            <?php for ($i = 0; $i < 4; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 4; $j++): ?>
                        <td class="task2-td"><?php echo $table[$i][$j]; ?></td>
                    <?php endfor; ?>
                    <!-- Display row sums -->
                    <td class="task2-sum"><?php echo $rowSums[$i]; ?></td>
                </tr>
            <?php endfor; ?>
            <tr>
                <!-- Display column sums -->
                <?php for ($j = 0; $j < 4; $j++): ?>
                    <td class="task2-sum"><?php echo $colSums[$j]; ?></td>
                <?php endfor; ?>
                <!-- Empty cell for alignment -->
                <td class="task2-td"></td>
            </tr>
        </table>
    </div>
</body>
</html>
