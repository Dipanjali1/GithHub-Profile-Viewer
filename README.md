# GitHub Profile Viewer

This is a simple HTML and PHP code that allows you to view a GitHub user's profile information. The code uses the GitHub API to fetch data for a specified GitHub username and displays it in a visually appealing container.

## Setup

Before using the code, you need to make a few modifications:

1. Replace `USERNAME` with the GitHub username of the profile you want to view.:
   ```php
   $githubUsername = "USERNAME";  //Enter the username here
2. Replace `API_Key` with the API Key :
   ```php
   $accessToken = "API_Key"; //Enter the API key with the required permissions and access

##How the Code Works

-The PHP code is embedded within the HTML file and executed on the server when the page is requested.
-The code fetches the GitHub profile data using the GitHub API by sending an HTTP request to the specified API URL with the provided access token for authentication.
-It checks if the profile data contains the message 'Not Found,' indicating that the user does not exist. If so, it displays an error message.
-If the profile data is successfully retrieved and does not indicate a user not found, it displays the user's profile information in the defined container.


##Note
-Ensure that your server supports PHP execution for the code to work properly.
-Remember to use a valid GitHub username and a valid API key with the appropriate permissions to access GitHub data.


