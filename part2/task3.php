<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/styles.css">
    <title>Task 3</title>
    <style>




    </style>
</head>

<body class="container">
    <div class="header-container">
        <h2 class="header-content">Task 3</h2>
    </div>

    <div class="instruction-container">
        <div class="instruction-content">
            <div class="tooltip-container">
                <span class="text">Instructions</span>
                <span class="tooltip">
                3. Create a stack of integers using arrays( First in last out )
                <br>
                ● Create input fields and push a button to insert a new value
                <br>
                ● Create a pop button to remove the top value
                <br>
                ● Always display the existing stack content
                <br>
                ● Do not use pre-defined PHP array functions like array_pop
                </span>
            </div>
        </div>
    </div>

    <div class="card">
    <a href="../index.php" class="home"><img class="home-icon" src="../layout/home.png" alt=""></a>
        <?php
        session_start();

        if (!isset($_SESSION['stack'])) {
            $_SESSION['stack'] = [];
        }

        if (isset($_POST['push'])) {
            $value = $_POST['value'];
            if (is_numeric($value)) {
                $_SESSION['stack'][] = $value; // Add value to stack
            }
        }

        if (isset($_POST['pop'])) {
            if (count($_SESSION['stack']) > 0) {
                $new_stack = [];
                for ($i = 0; $i < count($_SESSION['stack']) - 1; $i++) {
                    $new_stack[] = $_SESSION['stack'][$i];
                }
                $_SESSION['stack'] = $new_stack;
            }
        }
        ?>

        <div class="task3-form">
            <!-- Form for push operation -->
            <form class="btn-inp" method="POST">
                <div class="pp-inp">
                    <div class="pp-container">
                        <input class="pp-input smooth-type" type="number" name="value" placeholder="Enter a value">
                        <label class="pp-label">Stack of Integer</label>
                    </div>                   
                </div>   
                <div class="pp-btn">
                    <button class="comic-button" type="submit" name="push">Push</button>
                    <button class="comic-button" type="submit" name="pop">Pop</button>
                </div>     
            </form>

            <!-- Display the current stack -->
            <div class="task3-stack">
                <h2>Stack Content</h2>
                <?php if (empty($_SESSION['stack'])): ?>
                    <p>The stack is empty.</p>
                <?php else: ?>
                    <?php foreach (array_reverse($_SESSION['stack']) as $item):  ?>
                        <div class="task3-stack-item"><?php echo $item; ?></div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>


</body>
</html>
