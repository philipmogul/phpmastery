<!DOCTYPE html>
<html>
<head>
    <title>Tinder Clone</title>
    <style>
        .profile {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px;
            width: 300px;
            display: inline-block;
        }
        .swipe-buttons {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Tinder Clone</h1>
    <?php
        // User data (in real-world scenario, this would come from a database)
        $users = array(
            array('name' => 'John', 'age' => 28, 'bio' => 'I love hiking and traveling.'),
            array('name' => 'Alice', 'age' => 25, 'bio' => 'Music enthusiast and coffee lover.'),
            array('name' => 'Emma', 'age' => 30, 'bio' => 'Looking for a serious relationship.'),
            array('name' => 'Michael', 'age' => 26, 'bio' => 'Software developer and movie buff.'),
        );

        // Display user profiles
        foreach ($users as $user) {
            echo "<div class='profile'>";
            echo "<h2>{$user['name']}, {$user['age']}</h2>";
            echo "<p>{$user['bio']}</p>";
            echo "<div class='swipe-buttons'>";
            echo "<button onclick='like(\"{$user['name']}\")'>Like</button>";
            echo "<button onclick='dislike(\"{$user['name']}\")'>Dislike</button>";
            echo "</div>";
            echo "</div>";
        }
    ?>

    <script>
        function like(userName) {
            alert("You liked " + userName + "!");
            // Here you would handle the logic to save the like in the database or perform any other action
        }

        function dislike(userName) {
            alert("You disliked " + userName + "!");
            // Here you would handle the logic to save the dislike in the database or perform any other action
        }
    </script>
</body>
</html>
