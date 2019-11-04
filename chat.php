<!DOCTYPE html>

<html>

<head>

</head>

<body>
    <div>
        <h1>Chat bot</h1>
    </div>
    <div>
        <form action="handler.php" method="post">
            <p>Wat is je naam?</p>
            <input type="text" name="user" required autocomplete="off">
            <p>Je praat nu met de chatbot</p>
            <div class="chatbot">
                <textarea name="" id="" cols="30" rows="5"><?php
                    if (isset($_COOKIE["messageList"])) {
                        echo $_COOKIE["messageList"];
                    }
                    ?></textarea>
            </div>
            <p>Type een bericht</p>
            <input type="text" name="message" required autocomplete="off">
            <input type="submit" name="submit" value="Send">
        </form>
        
    </div>
</body>

</html>