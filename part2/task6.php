<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/styles.css">
    <title>Task 6</title>
</head>

<body class="container">
    <div class="header-container">
        <h2 class="header-content">Task 6</h2>
    </div>
    
    <div class="instruction-container">
        <div class="instruction-content">
            <div class="tooltip-container">
                <span class="text">Instructions</span>
                <span class="tooltip">
                6. Fix the code function to output the correct result. Explain your answer
                </span>
            </div>
        </div>
    </div>

    <div class="card">
    <a href="../index.php" class="home"><img class="home-icon" src="../layout/home.png" alt=""></a>
        <p>Sample Output</p>
        <ul>
            <?php
            function bubbleSort($lists) {
                $length = count($lists);
                for ($parent = 0; $parent < $length; $parent++) {
                    for ($child = 0; $child < $length - $parent - 1; $child++) {
                        if ($lists[$child] > $lists[$child + 1]) {
                            $temp = $lists[$child];
                            $lists[$child] = $lists[$child + 1];
                            $lists[$child + 1] = $temp;
                        }
                    }
                }
                return $lists;
            }

            // Example array
            $numbers = [64, 34, 25, 12, 22, 11, 90];
            
            $sortedNumbers = bubbleSort($numbers);
            
            foreach ($sortedNumbers as $number) {
                echo "<li>$number</li>";
            }
            ?>
        </ul>
        <div>
            <p>The line "$temp = $lists[$child + 1];" contains incorrect assignment. So to correct</p>
            <p>it store $lists[$child] in a temporary variable "$temp = $lists[$child];" </p>
        </div>
    </div>
</body>
</html>
