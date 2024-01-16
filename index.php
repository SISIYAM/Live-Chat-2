<!--
* Title: Live Chat-box
* Description: Simple Live Chat-Box Using Ajax
* Author: MD Saymum Islam Siyam (CodeSQL)
* Email: si31siyam@gmail.com
* Portfolio: https://siyam70.netlify.app/
* Date: 14/01/24
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat-box</title>
  <!-- Google Fonts Link For Icons -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <header>Live Chat</header>
    <div class="content">
      <div class="message" id=messageBox>
        <!-- add message from database here -->
      </div>
      <div class="input-form">
        <div class="input-field">
          <div class="input-area">
            <textarea id="textarea-message" placeholder="Type message"></textarea>
          </div>
        </div>
        <div class="send-btn">
          <span id="send-btn" class="material-symbols-rounded">send</span>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript Code -->
  <script src="script.js"></script>

</body>

</html>