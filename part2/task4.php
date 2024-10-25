<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/styles.css">
    <title>Task 4</title>
</head>
<body class="container">
    <div class="header-container">
        <h2 class="header-content">Task 4</h2>
    </div>

    <div class="instruction-container">
        <div class="instruction-content">
            <div class="tooltip-container">
                <span class="text">Instructions</span>
                <span class="tooltip">
                4. Create a queue of integers using arrays (First in first out )
                <br>
                ● Create input fields and push a button to insert a new value
                <br>
                ● Create a pop button to remove the old value
                <br>
                ● Always display the existing queue content
                <br>
                ● Do not use pre-defined PHP array function like array_pop
                </span>
            </div>
        </div>
    </div>

    <div class="card">
    <a href="../index.php" class="home"><img class="home-icon" src="../layout/home.png" alt=""></a>
        <?php
        session_start();

        if (!isset($_SESSION['queue'])) {
            $_SESSION['queue'] = [];
        }

        
        if (isset($_POST['push'])) {
            $value = $_POST['value'];
            if (is_numeric($value)) {
                $_SESSION['queue'][] = $value; 
            }
        }

        
        if (isset($_POST['pop'])) {
            if (count($_SESSION['queue']) > 0) {
                
                $new_queue = [];
                for ($i = 1; $i < count($_SESSION['queue']); $i++) {
                    $new_queue[] = $_SESSION['queue'][$i];
                }
                $_SESSION['queue'] = $new_queue;
            }
        }
        ?>

        <div class="task4-form">
            <!-- Form for push operation -->
            <form class="btn-inp" method="POST">
                <div class="pp-inp">
                    <div class="pp-container">
                        <input class="pp-input smooth-type" type="number" name="value" placeholder="Enter a value">
                        <label class="pp-label">Queue of Integer</label>
                    </div>                   
                </div>
                <div class="pp-btn">
                    <button class="comic-button" type="submit" name="push">Push</button>
                    <button class="comic-button" type="submit" name="pop">Pop</button>
                </div>    
            </form>

            <!-- Display the current queue -->
            <div class="task4-queue">
                <h2>Queue Content</h2>
                <?php if (empty($_SESSION['queue'])): ?>
                    <p>The queue is empty.</p>
                <?php else: ?>
                    <?php foreach ($_SESSION['queue'] as $item):  ?>
                        <div class="task4-queue-item"><?php echo $item; ?></div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
