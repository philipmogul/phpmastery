<!DOCTYPE html>
<html>
<head>
    <title>Chess</title>
    <style>
        .board {
            display: grid;
            grid-template-columns: repeat(8, 50px);
            grid-gap: 2px;
        }
        .cell {
            width: 50px;
            height: 50px;
            background-color: #eee;
            border: 1px solid #000;
            text-align: center;
            line-height: 50px;
            font-size: 20px;
        }
        .cell.black {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Chess</h1>
    <div class="board">
        <?php
            $pieces = array(
                'R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R',
                'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P',
                '', '', '', '', '', '', '', '',
                '', '', '', '', '', '', '', '',
                '', '', '', '', '', '', '', '',
                '', '', '', '', '', '', '', '',
                'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p',
                'r', 'n', 'b', 'q', 'k', 'b', 'n', 'r'
            );

            $isBlack = false;
            foreach ($pieces as $piece) {
                $class = ($isBlack) ? 'black' : '';
                echo "<div class='cell $class'>$piece</div>";
                if ($piece !== '') {
                    $isBlack = !$isBlack;
                }
            }
        ?>
    </div>
</body>
</html>
