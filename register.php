<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Регистрация</title>
    </head>
    <body>
        <?php if(isset($_GET['exists']) && $_GET['exists']):?>
            Този имейл вече е зает
        <?php endif?>
        <form action="controllers/register.php" method="POST">
            <div>
                <input name="name" type="text" placeholder="Име" required />
            </div>
            <div>
                <input name="email" type="email" placeholder="Електронна поща" required />
            </div>
            <div>
                <input name="password" type="password" placeholder="Парола" required />
            </div>
            <div>
                <input type="reset" value="Изчисти" />
                <input type="submit" value="Регистрация" />
            </div>
        </form>
    </body>
</html>