<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/styles.css">
    <title>Pattern 1</title>
</head>
<body class="container">
    <div class="header-container">
        <h2 class="header-content">Pattern 1</h2>
    </div>
    <div  class="card">

    <a href="../index.php" class="home"><img class="home-icon" src="../layout/home.png" alt=""></a>

        <?php
        function generate_diamond($num_lines, $offset_x, $offset_y) {
            $coordinates = [];
            // Generate top part of the diamond
            for ($i = 0; $i < $num_lines; $i++) {
                $x = $offset_x - $i * 10;
                for ($j = 0; $j <= $i; $j++) {
                    
                    if ($j == 0 || $j == $i) {
                        $coordinates[] = [
                            'x' => $x + $j * 20, 
                            'y' => $offset_y + $i * 20
                        ];
                    }
                }
            }

            // Generate bottom part of the diamond
            for ($i = $num_lines - 2; $i >= 0; $i--) {
                $x = $offset_x - $i * 10;
                for ($j = 0; $j <= $i; $j++) {
                    
                    if ($j == 0 || $j == $i) {
                        $coordinates[] = [
                            'x' => $x + $j * 20, 
                            'y' => $offset_y + ($num_lines * 2 - 2 - $i) * 20
                        ];
                    }
                }
            }
            return $coordinates;
        }


        $num_lines = 4;

        $offset_x = 1050; 
        $offset_y1 = 400; 
        $offset_y2 = 520; 

 
        $diamond1 = generate_diamond($num_lines, $offset_x, $offset_y1);


        $diamond2 = generate_diamond($num_lines, $offset_x, $offset_y2);

        // Merge both diamonds
        $coordinates = array_merge($diamond1, $diamond2);

        // Loop through coordinates and display the asterisks in the HTML
        
        foreach ($coordinates as $coord) {
            echo '<span class="asterisk" style="left: ' . $coord['x'] . 'px; top: ' . $coord['y'] . 'px;">*</span>';
        }
        ?>
    </div>
</body>
</html>
