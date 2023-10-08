<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site.test</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <form action="../php/write.php" method="post">
        <div id="form">
            <div id="inpt">
                <!-- <div id="circle">
                    <div id="turn">
                    </div>
                    <p>connection...</p>
                </div> -->
                <div>
                    <input name="idd" type="text" id="id_enter" class="inp" placeholder="username" required>
                </div>
                <br>
                <div>
                    <input name="pwdd" type="password" id="pwd_enter" class="inp" placeholder="password" maxlength="30" required>
                </div>
                <br>
                <div>
                    <input id="enter" class="inp" type="submit" value="se connecter" name="vald">
                </div>
            </div>
        </div>
    </form>
    <a href="../html/inscription.php"  class="obj">sign in</a>
</body>
</html>