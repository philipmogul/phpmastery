<!DOCTYPE html>
<html>
<head>
    <title>Aviator Game</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        #player {
            position: absolute;
            width: 50px;
            height: 50px;
            background-color: blue;
            left: 50px;
            bottom: 50px;
        }
        .obstacle {
            position: absolute;
            width: 50px;
            height: 100px;
            background-color: red;
        }
    </style>
</head>
<body>
    <div id="player"></div>
    <?php
        // Generate obstacles
        for ($i = 0; $i < 10; $i++) {
            $top = rand(0, 400);
            echo "<div class='obstacle' style='left: ".(500 + $i * 200)."px; top: ".$top."px;'></div>";
        }
    ?>
    <script>
        var player = document.getElementById('player');
        var obstacles = document.getElementsByClassName('obstacle');
        var speed = 5;
        var gravity = 0.5;
        var jumpForce = -10;
        var isJumping = false;

        function jump() {
            if (!isJumping) {
                isJumping = true;
                var jumpInterval = setInterval(function() {
                    var playerBottom = parseInt(window.getComputedStyle(player).bottom);
                    if (playerBottom < 300) {
                        player.style.bottom = (playerBottom + jumpForce) + 'px';
                    } else {
                        clearInterval(jumpInterval);
                        isJumping = false;
                    }
                }, 20);
            }
        }

        function gameLoop() {
            // Move obstacles
            for (var i = 0; i < obstacles.length; i++) {
                var obstacleLeft = parseInt(window.getComputedStyle(obstacles[i]).left);
                if (obstacleLeft < -50) {
                    obstacles[i].style.left = '950px';
                } else {
                    obstacles[i].style.left = (obstacleLeft - speed) + 'px';
                }

                // Collision detection
                var playerRect = player.getBoundingClientRect();
                var obstacleRect = obstacles[i].getBoundingClientRect();
                if (playerRect.bottom > obstacleRect.top && playerRect.top < obstacleRect.bottom && playerRect.right > obstacleRect.left && playerRect.left < obstacleRect.right) {
                    alert('Game Over!');
                    window.location.reload();
                    return;
                }
            }

            // Apply gravity to player
            var playerBottom = parseInt(window.getComputedStyle(player).bottom);
            if (playerBottom > 50) {
                player.style.bottom = (playerBottom - gravity) + 'px';
            }

            requestAnimationFrame(gameLoop);
        }

        gameLoop();

        document.addEventListener('keydown', function(event) {
            if (event.keyCode === 32) { // Space key
                jump();
            }
        });
    </script>
</body>
</html>
