<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='./views/assets/css/stylelogin.css'>
    <title>Document</title>
</head>
<body>
    
    <form>
    <h2>Pagina de login</h2>
        <div class='inputBox'>
            <label for="emailvalue">E-mail:</label><br/>
            <input type="email" placeholder="E-mail" name="emailvalue" id="emailvalue" />
        </div>
        <div class='inputBox'>
            <label for="senhavalue">Senha:</label><br/>
            <input type="password" placeholder="password" name="senhavalue" id="senhavalue" />
        </div>
        <div class='inputBox'>
            <button type='button' id='login_btn'>
                Enviar
            </button>
        </div>
        <div id='spanAlert'>
        </div>
    </form>
    <script src='./views/assets/js/scriptethernet.js'>
    </script>
    <script src='./views/assets/js/scriptlogin.js'>
    </script>
</body>
</html>