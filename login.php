<?php
session_start();
if(isset($_POST['username'])) {
    $_SESSION['username'] = htmlspecialchars($_POST['username']);
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Portal | Rajitha Lakshan</title>
    <link rel="stylesheet" href="css/hacker-login.css">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="terminal-window">
            <div class="terminal-header">
                <div class="terminal-buttons">
                    <span class="terminal-btn red"></span>
                    <span class="terminal-btn yellow"></span>
                    <span class="terminal-btn green"></span>
                </div>
                <div class="terminal-title">system_access.exe</div>
            </div>
            <div class="terminal-body">
                <div class="typewriter">
                    <span class="prompt">></span> <span class="command">init_system</span><br>
                    <span class="output">Initializing security protocol...</span><br><br>
                    
                    <span class="prompt">></span> <span class="command">verify_user</span><br>
                    <span class="output">Identity verification required</span><br><br>
                    
                    <form method="POST" class="login-form">
                        <div class="input-group">
                            <span class="prompt">></span>
                            <input type="text" name="username" id="username" class="hacker-input" 
                                   placeholder="ENTER YOUR NAME" required autocomplete="off">
                        </div>
                        <button type="submit" class="hacker-btn">AUTHENTICATE</button>
                    </form>
                    
                    <div class="status-line">
                        <span class="prompt">></span> <span class="command blink">awaiting_input</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="matrix-rain"></div>
    </div>
    
    <script src="js/hacker-login.js"></script>
</body>
</html>