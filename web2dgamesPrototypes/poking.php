<!DOCTYPE html>
<html>
<head>
    <title>Poke Game</title>
    <style>
        .player {
            display: inline-block;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <h1>Poke Game</h1>
    <div class="players">
        <div class="player">
            <h2>Player 1</h2>
            <form method="post">
                <input type="hidden" name="player" value="1">
                <button type="submit" name="poke">Poke</button>
            </form>
        </div>
        <div class="player">
            <h2>Player 2</h2>
            <form method="post">
                <input type="hidden" name="player" value="2">
                <button type="submit" name="poke">Poke</button>
            </form>
        </div>
    </div>
    <?php
        session_start();

        // Initialize pokes
        if (!isset($_SESSION['pokes'])) {
            $_SESSION['pokes'] = array(1 => 0, 2 => 0);
        }

        // Handle pokes
        if (isset($_POST['poke'])) {
            $player = $_POST['player'];
            $_SESSION['pokes'][$player]++;
            echo "<p>Player $player has received ".$_SESSION['pokes'][$player]." pokes!</p>";
        }
    ?>
</body>
</html>
