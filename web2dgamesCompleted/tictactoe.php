
<!DOCTYPE html>
<html>
<head>
    <title>Tic Tac Toe</title>
    <style>
        .board {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            grid-gap: 5px;
        }
        .cell {
            width: 100px;
            height: 100px;
            border: 1px solid black;
            font-size: 24px;
            text-align: center;
            line-height: 100px;
        }
    </style>
</head>
<body>
    <h1>Tic Tac Toe</h1>
    <div class="board">
        <?php
            // Initialize the board
            $board = array_fill(0, 2, array_fill(0, 2, ''));
            
            // Loop through each cell
            for ($i = 0; $i < 3; $i++) {
                for ($j = 0; $j < 3; $j++) {
                    echo "<div class='cell' id='cell_$i$j' onclick='playMove($i, $j)'></div>";
                }
            }
        ?>
    </div>
    <script>
        let currentPlayer = 'X';
        let gameOver = false;

        function playMove(row, col) {
            if (gameOver) return;

            let cell = document.getElementById(`cell_${row}${col}`);
            if (cell.innerHTML === '') {
                cell.innerHTML = currentPlayer;
                checkWinner();
                currentPlayer = (currentPlayer === 'X') ? 'O' : 'X';
            }
        }

        function checkWinner() {
            let cells = document.getElementsByClassName('cell');
            let symbols = ['X', 'O'];
            for (let symbol of symbols) {
                // Check rows
                for (let i = 0; i < 3; i++) {
                    if (cells[i * 3].innerHTML === symbol && cells[i * 3 + 1].innerHTML === symbol && cells[i * 3 + 2].innerHTML === symbol) {
                        announceWinner(symbol);
                        return;
                    }
                }
                // Check columns
                for (let i = 0; i < 3; i++) {
                    if (cells[i].innerHTML === symbol && cells[i + 3].innerHTML === symbol && cells[i + 6].innerHTML === symbol) {
                        announceWinner(symbol);
                        return;
                    }
                }
                // Check diagonals
                if (cells[0].innerHTML === symbol && cells[4].innerHTML === symbol && cells[8].innerHTML === symbol) {
                    announceWinner(symbol);
                    return;
                }
                if (cells[2].innerHTML === symbol && cells[4].innerHTML === symbol && cells[6].innerHTML === symbol) {
                    announceWinner(symbol);
                    return;
                }
            }
            // Check for draw
            let draw = true;
            for (let cell of cells) {
                if (cell.innerHTML === '') {
                    draw = false;
                    break;
                }
            }
            if (draw) {
                announceWinner('Draw');
            }
        }

        function announceWinner(winner) {
            let message = '';
            if (winner === 'Draw') {
                message = 'It\'s a draw!';
            } else {
                message = `Player ${winner} wins!`;
            }
            alert(message);
            gameOver = true;
        }
    </script>
</body>
</html>
