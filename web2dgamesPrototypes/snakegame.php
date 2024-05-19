<!DOCTYPE html>
<html>
<head>
    <title>Snake Game</title>
    <style>
        #game-board {
            width: 400px;
            height: 400px;
            border: 1px solid #000;
            position: relative;
        }
        .snake-part {
            width: 20px;
            height: 20px;
            background-color: green;
            position: absolute;
        }
        #food {
            width: 20px;
            height: 20px;
            background-color: red;
            position: absolute;
        }
    </style>
</head>
<body>
    <h1>Snake Game</h1>
    <div id="game-board">
        <?php
            session_start();

            // Initialize game variables
            $gridSize = 20;
            $snake = isset($_SESSION['snake']) ? $_SESSION['snake'] : array(array(10, 10));
            $direction = isset($_SESSION['direction']) ? $_SESSION['direction'] : 'right';
            $food = isset($_SESSION['food']) ? $_SESSION['food'] : generateFood($gridSize, $snake);

            // Update snake position
            updateSnake($snake, $direction, $gridSize, $food);

            // Save game state
            $_SESSION['snake'] = $snake;
            $_SESSION['direction'] = $direction;
            $_SESSION['food'] = $food;

            // Display snake
            foreach ($snake as $part) {
                echo "<div class='snake-part' style='top: ".($part[0] * 20)."px; left: ".($part[1] * 20)."px;'></div>";
            }

            // Display food
            echo "<div id='food' style='top: ".($food[0] * 20)."px; left: ".($food[1] * 20)."px;'></div>";

            // Function to generate food
            function generateFood($gridSize, $snake) {
                $food = array(rand(0, $gridSize - 1), rand(0, $gridSize - 1));
                while (in_array($food, $snake)) {
                    $food = array(rand(0, $gridSize - 1), rand(0, $gridSize - 1));
                }
                return $food;
            }

            // Function to update snake position
            function updateSnake(&$snake, $direction, $gridSize, $food) {
                $head = $snake[0];
                switch ($direction) {
                    case 'up':
                        array_unshift($snake, array(($head[0] - 1 + $gridSize) % $gridSize, $head[1]));
                        break;
                    case 'down':
                        array_unshift($snake, array(($head[0] + 1) % $gridSize, $head[1]));
                        break;
                    case 'left':
                        array_unshift($snake, array($head[0], ($head[1] - 1 + $gridSize) % $gridSize));
                        break;
                    case 'right':
                        array_unshift($snake, array($head[0], ($head[1] + 1) % $gridSize));
                        break;
                }
                if ($snake[0] === $food) {
                    $food = generateFood($gridSize, $snake);
                } else {
                    array_pop($snake);
                }
            }
        ?>
    </div>
    <script>
        // Handle keyboard input
        document.addEventListener('keydown', function(event) {
            var direction = "<?php echo $direction; ?>";
            switch(event.key) {
                case 'ArrowUp':
                    if (direction !== 'down') {
                        direction = 'up';
                    }
                    break;
                case 'ArrowDown':
                    if (direction !== 'up') {
                        direction = 'down';
                    }
                    break;
                case 'ArrowLeft':
                    if (direction !== 'right') {
                        direction = 'left';
                    }
                    break;
                case 'ArrowRight':
                    if (direction !== 'left') {
                        direction = 'right';
                    }
                    break;
            }
            window.location.href = "game.php?direction=" + direction;
        });
    </script>
</body>
</html>
