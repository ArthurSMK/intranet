<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intranet</title>
    
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    html{
        margin: 0;
        height: 100%;
        width: 100%;
    }
    body{
        margin: 0;
        height: 100%;
        width: 100%;
        background-color: #FFF;
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        display: flex;
        flex: 1;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .login-page{
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        background-color: white;
    }

    .login-box{
        display: flex;
        flex-direction: column;
        justify-items: center;
        align-items: center;

        height: 64vh;
        width: 30vw; 
        margin: 15vh;
        padding-top: 5.2vh;

        /* 1920px 1% = 19,20vw
           512px 1% = 5,12vw
           554px 1% 5,54vh  */

        background: #EBEBEB;
        box-shadow: 2px 3px 20px 2px rgba(0, 0, 0, 0.05);
        border-radius: 10px;
    }

    .logo{
        
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 3vh;
    }
    .logo-intranet img{
        width:12.6vw;
    }

    .logo-seinfra img{
        margin-top: 3.5vh;
        width: 20.6vw;
    }

    .login form{
        display: flex;
        flex-direction: column;
        align-items: end;

        font-family: Roboto regular, sans-serif;
        font-weight: normal;
        margin-top:6vh;
        width: 100%;
        color: #514A4A;
    
    }
    .login form div{
        display: flex;
        flex-direction: column;
        align-items: start;
        width: 100%;
        color: #514A4A;
    
    }

    .login form input{
        width: 20vw;
        height: 5vh;
        margin-top:0.5vh;

        padding-left:.5vw;

        border: 1px solid rgb(0, 0, 0, 30%);;
        border-radius:5px;
        outline: none;
    }

    #username{
        margin-bottom:2vh;
    }

    .login form button{
        margin-top:2vh;
        height: 4.5vh;
        width: 7.5vw;

        background-color: #004992;

        color: #FFF;
        border:0;
        border-radius:5px;
        /* width: 20vw;
        height: 4.5vh; */
        outline: none;
    }

    .baseboard{
        bottom: 0;
        margin: 0;
        padding: 0;
    }
    
</style>

</head>
<body>

    <div class="login-page">

        <div class="login-box">
            <div class="logo">
                <div class="logo-intranet">
                    <img src="logos/INTRANET.svg" alt="LOGO">
                </div>

                <div class="logo-seinfra">
                    <img src="logos/Seinfra-logo.png" alt="seinfra-logo">
                </div>
            </div>

            <div class="login">
                <form action="">

                    <div>
                        <p>Usuário</p> 
                        <input type="text" name="username" id="username" placeholder="Usuário">
                        <p>Senha</p>
                        <input type="password" name="password" id="password" placeholder="Senha">
                    </div>

                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
        
    </div>
    
    <img class="baseboard" src="logos/rodape.png" alt="baseboard">
    
</body>
</html>