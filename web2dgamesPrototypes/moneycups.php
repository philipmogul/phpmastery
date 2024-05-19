<!DOCTYPE html>
<html>
<head>
    <title>Find the Money!</title>
    <style>
        .cup {
            width: 100px;
            height: 100px;
            background-color: #ccc;
            border: 2px solid #000;
            display: inline-block;
            margin: 10px;
            text-align: center;
            line-height: 100px;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Find the Money!</h1>
    <div id="message"></div>
    <div id="cups">
        <?php
            // Initialize game variables
            $cups = array('Empty', 'Empty', 'Empty');
            $moneyIndex = rand(0, 2);
            $cups[$moneyIndex] = 'Money';

            // Shuffle cups
            shuffle($cups);

            // Output cups
            foreach ($cups as $key => $cup) {
                echo "<div class='cup' onclick='reveal($key)'>Cup ".($key + 1)."</div>";
            }
        ?>
    </div>

    <script>
        var moneyIndex = <?php echo $moneyIndex; ?>;
        
        function reveal(index) {
            var message = document.getElementById('message');
            var cups = document.getElementsByClassName('cup');
            if (index === moneyIndex) {
                message.innerText = "Congratulations! You found the money!";
                message.style.color = "green";
            } else {
                message.innerText = "Sorry! Try again!";
                message.style.color = "red";
            }

            // Disable further clicks on cups
            for (var i = 0; i < cups.length; i++) {
                cups[i].onclick = null;
            }

            // Reveal the money cup
            cups[moneyIndex].style.backgroundColor = "yellow";
        }
    </script>
</body>
</html>
