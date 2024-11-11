<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 4</title>
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .team-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 50px;
        }

        .team-member {
            width: 20%;
            margin: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .team-member:hover {
            transform: translateY(-5px);
        }

        .team-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .team-member img:hover {
            transform: scale(1.1);
        }

        .team-member h3 {
            margin-top: 20px;
            color: #4CAF50;
        }

        .team-member p {
            color: #666;
            margin-bottom: 10px;
        }

        .team-member a {
            display: block;
            color: #4CAF50;
            text-decoration: none;
            margin-top: 10px;
        }

        .team-member a:hover {
            color: #3e8e41;
        }

        #enlargedImageContainer {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        #enlargedImage {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
        }
    </style>
    <script>
        function enlargeImage(imageSrc) {
            var enlargedImageContainer = document.getElementById("enlargedImageContainer");
            var enlargedImage = document.getElementById("enlargedImage");
            enlargedImage.src = imageSrc;
            enlargedImageContainer.style.display = "flex";
        }

        function closeEnlargedImage() {
            document.getElementById("enlargedImageContainer").style.display = "none";
        }
    </script>
</head>
<body>
    <h1 style="text-align: center; color: #4CAF50; margin-top: 50px;">Group 4</h1>
    <div class="team-container">
        <?php
        $team_members = [
            [
                "name" => "Ricardo Flandez",
                "role" => "Software Engineer",
                "image" => "member1.jpg",
                "facebook" => "https://www.facebook.com/ihaveautism.crdo?mibextid=ZbWKwL"
            ],
            [
                "name" => "John Keith Guerrero",
                "role" => "Project Manager",
                "image" => "member2.jpg",
                "facebook" => "https://www.facebook.com/BossKILLAHBenteosto?mibextid=ZbWKwL"
            ],
            [
                "name" => "Kian Carlos Alvarez",
                "role" => "UI/UX Designer",
                "image" => "member3.jpg",
                "facebook" => "https://www.facebook.com/KianCarlosAlvarezzz?mibextid=ZbWKwL"
            ],
            [
                "name" => "Eilene Llamido",
                "role" => "Data Analyst",
                "image" => "member4.jpg",
                "facebook" => "https://www.facebook.com/profile.php?id=100079985477982&mibextid=ZbWKwL"
            ],
            [
                "name" => "Nicole Yambao",
                "role" => "Member Role",
                "image" => "member5.jpg",
                "facebook" => "https://www.facebook.com/nicoleyamba21?mibextid=ZbWKwL"
            ]
        ];

        foreach ($team_members as $member) {
            echo '<div class="team-member">';
            echo '<img src="' . $member['image'] . '" alt="' . $member['name'] . '" onclick="enlargeImage(\'' . $member['image'] . '\')">';
            echo '<h3>' . $member['name'] . '</h3>';
            echo '<p>' . $member['role'] . '</p>';
            echo '<a href="' . $member['facebook'] . '">Facebook Profile</a>';
            echo '</div>';
        }
        ?>
    </div>

    <div id="enlargedImageContainer" onclick="closeEnlargedImage()">
        <img id="enlargedImage" src="" alt="Enlarged Image">
    </div>
</body>
</html>