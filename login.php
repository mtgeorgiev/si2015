<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Влизане</title>
		<script src="scripts/main.js" type="text/javascript"></script>
		<link href="styles/style.css" rel="stylesheet" />
    </head>
    <body>
        <form method="POST" action="controllers/login.php" id="login_form">
            <div>
                <input type="text" name="email" placeholder="Въведете емайл" />
            </div>
            
            <div>
                <input type="password" name="password" placeholder="Въведете парола" />
            </div>
            
            <input type="submit" value="Влез" />
        </form>
    </body>
</html>
