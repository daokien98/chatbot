<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHATBOT</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="chatbox">
            <div class="header">
                <h4>Chatbot - Made by HKH<span class="avail">Online</span></h4>
            </div>
            <div class="body" id="chatbody">
                <div class="scroller">
                    <div class="message-left">
                        <img src="img/avatar.png" alt="avatar" class="avatar-left" style="width: 30%; border: 1px solid #ccc; margin-left:8px;margin-bottom: 5px">
                        <p>Hi </p>
                        <span class="time-left">3:00 29/2/2012</span>
                    </div>
                    <div class="message-right">
                        <img src="img/avatar2.png" alt="avatar" class="avatar-right" style="width: 30%; border: 1px solid #ccc; margin-right:20px; margin-bottom: 5px">
                        <p>Hi again</p>
                        <span class="time-right">3:00 29/2/2012</span>

                    </div>
                </div>
            </div>
            <form class="chat" method="post" autocomplete="off">
                <div>
                    <input type="text" name="chat" id="chat" placeholder="Nhập tin nhắn">
                </div>
                <div>
                    <input type="submit" value="Gửi" id="btn">
                </div>
            </form>
        </div>
    </div>
    <script src="app.js"></script>
</body>

</html>