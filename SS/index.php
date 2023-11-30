<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Euphoria+Script&display=swap">
    <link rel="shortcut icon" href="Public/Assets/_31554896-b491-466e-b129-d77e088c3b0c-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="Public/Css/style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="Public/Js/script.js"></script>
    <link rel="stylesheet" href="Public/Css/style_index.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h2>Serene Library</h2>
        <div class="links">
            <a href="index.php">
                <ion-icon name="home-outline"></ion-icon>
                <span class="text">Home</span>
            </a>
            <a href="book.php">
                <ion-icon name="book-outline"></ion-icon>
                <span class="text">Acervo</span>
            </a>
        </div>
   
        <div class="user-icon" id="user-icon" onclick="showUserInfo()">
            <ion-icon name="person-circle-outline"></ion-icon>
        </div>
        <div class="user-info" id="user-info">
        <?php
            session_start();
            include '../Login/verifica_login.php'
        ?>
        <h2>Olá <?php echo $_SESSION['usuarioNomedeUsuario'] , "!"; ?> </h2><br>
        <button onclick="logout()"><ion-icon name="log-out-outline"></ion-icon></button></div>
    </header>
    <section>
        <div class="banner">
            <div class="lines"></div>
            <div class="lines2"></div>
            <img src="Public/Assets/Sob o luar sereno da noite sábia Na biblioteca silente, a luz inicia, Páginas sussurram segredos guardados O sereno dança nos livros encantados.png">
            <div class="lines"></div>
            <div class="lines2"></div>
        </div>
        <div class="bioP">
            <img src="Public/Assets/Pietro.jpeg" alt="Pietro">
            <div class="lineBio"></div>
            <div class="desc"><p>Pietro, nascido em uma pequena cidade costeira, é um escritor mestre que transforma pensamentos em prosa e sentimentos em poesia. 
            Sua jornada literária começou nos diários, evoluindo para uma fusão de estudo acadêmico e paixão desenfreada por palavras. 
            Graduado em Letras, tornou-se um colaborador destacado neste site, conquistando corações com suas palavras que capturam a essência da experiência humana.
            Além de sua escrita envolvente, Pietro é conhecido por sua abordagem colaborativa e pelo estímulo aos escritores emergentes. 
            Neste aniversário, celebramos sua contribuição única e aguardamos ansiosamente o que o futuro reserva sob sua pena magistral.</p></div>
        </div>
        <div class="bioO">
            <img src="Public/Assets/Oscar.jpeg" alt="Oscar">
            <div class="lineBio"></div>
            <div class="desc"><p>Oscar Osvaldo é um talentoso autor e programador cujo dom para contar histórias se funde elegantemente com sua habilidade em código. 
            Desde jovem, Oscar cativou leitores com narrativas envolventes, e ao abraçar a era digital, ele se tornou um mestre na programação, criando soluções inovadoras.
            Contribuindo significativamente para este site, Oscar é reconhecido por seus artigos informativos e por compartilhar seu conhecimento tanto em escrita quanto em programação.
            Sua paixão por inspirar outros é evidente, tornando-o uma figura respeitada na comunidade online. 
            Oscar Osvaldo continua a explorar os limites entre palavras e códigos, deixando um impacto duradouro como um pioneiro em ambos os campos.</p></div>
        </div>
        <div class="pub">
            <div class="cub"></div>
            <div class="pubtext"><p>Clique <a href="book.php">Aqui</a> para acessar nosso acervo digital!</p></div>
        </div>
    </section>
    <footer>
        <p>Todos os direitos reservados</p>
    </footer>
</body>
</html>