<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitHub Profile Viewer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            max-width: 500px;
            margin: auto;
        }

        h1 {
            color: #0366d6; 
        }

        img {
            width: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .profile-container {
			margin-top:50px;
            background: linear-gradient(to right, lightblue , grey); 
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .error {
            color: #d73a49; 
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .profile-info {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .profile-info strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php 
    $githubUsername = "USERNAME";  //Enter the usernam here
    $apiUrl = "https://api.github.com/users/$githubUsername";

    $accessToken = "API_Key"; //Enter the API key with required permissions and access 
    $options = [
        "http" => [
            "header" => "Authorization: Bearer $accessToken\r\n" .
                        "User-Agent: My-GitHub-App\r\n",
        ],
    ];

    $response = file_get_contents($apiUrl, false, stream_context_create($options));
    $profileData = json_decode($response, true);
    if (isset($profileData['message']) && $profileData['message'] === 'Not Found') {
        echo "<div class='error'>User not found!</div>";
    } else {
        echo "<div class='profile-container'>";
        echo "<h1>{$profileData['name']}</h1>";
        echo "<img src='{$profileData['avatar_url']}' alt='Profile Picture'>";
        echo "<div class='profile-info'><strong>Bio:</strong> {$profileData['bio']}</div>";
        echo "<div class='profile-info'><strong>Followers:</strong> {$profileData['followers']}</div>";
        echo "<div class='profile-info'><strong>Following:</strong> {$profileData['following']}</div>";
        echo "<div class='profile-info'><strong>Public Repositories:</strong> {$profileData['public_repos']}</div>";
        echo "</div>";
    }
    ?>
</body>
</html>
