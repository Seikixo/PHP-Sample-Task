<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/styles.css">
    <title>Number Pattern</title>
</head>

<body class="container">
    <div class="header-container">
            <h2 class="header-content">Pattern 3</h2>
        </div>
    <div class="card">
        <a href="../index.php" class="home"><img class="home-icon" src="../layout/home.png" alt=""></a>

        <?php
        $values = [
            [1, '', '', '', ''],
            [2, 4, '', '', ''],
            [3, 6, 9, '', ''],
            [4, 8, 16, '', ''],
            [5, 10, 20, 25, ''],
            [4, 8, 16, '', ''],
            [3, 6, 9, '', ''],
            [2, 4, '', '', ''],
            [1, '', '', '', '']
        ];

        // Generate the pattern
        foreach ($values as $row) {
            echo '<div class="row">';
            foreach ($row as $cell) {
                // Check if the cell is empty
                if ($cell !== '') {
                    echo '<span class="cell">' . $cell . '</span>';
                } else {
                    echo '<span class="cell"></span>'; 
                }
            }
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
