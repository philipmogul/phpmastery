<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tinder Clone</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Tinder Clone</h1>
        <div id="profile-card" class="card text-center">
            <div class="card-body">
                <h5 class="card-title" id="profile-name"></h5>
                <p class="card-text" id="profile-bio"></p>
                <button id="like-btn" class="btn btn-success mr-2">Like</button>
                <button id="dislike-btn" class="btn btn-danger">Dislike</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>
</body>
</html>


<script type="text/javascript">
    $(document).ready(function() {
    var profiles = [
        { name: "John", bio: "I love hiking and traveling." },
        { name: "Alice", bio: "Music enthusiast and coffee lover." },
        { name: "Emma", bio: "Looking for a serious relationship." },
        { name: "Michael", bio: "Software developer and movie buff." }
    ];

    var currentProfileIndex = 0;
    loadProfile();

    function loadProfile() {
        $("#profile-name").text(profiles[currentProfileIndex].name);
        $("#profile-bio").text(profiles[currentProfileIndex].bio);
    }

    $("#like-btn").click(function() {
        // Handle like action
        // You can implement your logic here, such as sending a request to the server
        console.log("Liked " + profiles[currentProfileIndex].name);
        currentProfileIndex++;
        if (currentProfileIndex < profiles.length) {
            loadProfile();
        } else {
            alert("No more profiles to show!");
        }
    });

    $("#dislike-btn").click(function() {
        // Handle dislike action
        // You can implement your logic here, such as sending a request to the server
        console.log("Disliked " + profiles[currentProfileIndex].name);
        currentProfileIndex++;
        if (currentProfileIndex < profiles.length) {
            loadProfile();
        } else {
            alert("No more profiles to show!");
        }
    });
});

</script>