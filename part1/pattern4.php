<?php
// Initialize an array to hold the pattern
$pattern = [];

// Generate the pattern
for ($i = 1; $i <= 6; $i++) {
    $row = [];
    for ($j = 0; $j < 5; $j++) {
        // For the first row, calculate the powers of 2
        if ($i == 1) {
            $row[] = pow(2, $j);
        } else {
            // For other rows, calculate based on the previous row
            if ($j == 0) {
                $row[] = $i; // The first column is the row number
            } else {
                $row[] = $row[$j - 1] * ($j + 1) * $i; // Adjusting the formula for other cells
            }
        }
    }
    $pattern[] = $row;
}
?>

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
        <h2 class="header-content">Pattern 4</h2>
    </div>
    <div class="card">
    <a href="../index.php" class="home"><img class="home-icon" src="../layout/home.png" alt=""></a>
        <table class="pattern4">
            <tbody>
                <?php foreach ($pattern as $row): ?>
                    <tr>
                        <?php foreach ($row as $cell): ?>
                            <td><?php echo $cell; ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
