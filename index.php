<?php
    error_reporting(0);
    ini_set('display_errors', '0');

    session_start();
    $email = $_SESSION["email"];
?>

<!DOCTYPE html>
<head>
    <title>CashTrash - Home Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/Logo TrashCash no scritta.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="container">
        <section class="main page">
            <div class = "hero">
                <header id="navbar">
                    <div class="Logo">
                        <img src="images/Logo TrashCash.png" class="logo">
                        <img src="images/Logo TrashCash no scritta.png" class="logonoscritta">
                    </div>
                    <div class="menu" id="menu">
                        <ul class="sidebar">
                            <li><a href="#" onclick="hideSidebar()"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#434343"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                            <li><a href="chisiamo.html" id="chisiamonoi">Chi siamo</a></li>
                            <li><a href="#" onclick="infoscroll()" id="informazioni">Informazioni</a></li>
                            <li class="hideonmobile"><a href="contactus.html" id="contattaci">Contattaci</a></li>
                            <li><a id="pulsantePagina2" href="login/login.php"><button class="loginbtn">Login</button></a></li>
                        </ul>
                        <ul class="flexbar">
                            <li class="hideonmobile"><a href="#" onclick="verificaChisiamo()" id="chisiamonoi">Chi siamo</a></li>
                            <li class="hideonmobile"><a href="#" onclick="infoscroll()" id="informazioni">Informazioni</a></li>
                            <li class="hideonmobile"><a href="contactus.html" id="contattaci">Contattaci</a></li>
                            <li class="hideonmobile"><a id="pulsantePagina2" href="login/login.php"><button class="loginbtn">Login</button></a></li>
                            <?php if($_SESSION["logged"] === 1){?>
                                <li class="hideonmobile">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#434343"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
                                    <ul class="dropdown">
                                        <li><?php echo $_SESSION["email"]; ?></li>
                                    </ul>
                                </li>
                            <?php } ?>
                            <li class="menuicon"><a href="#" onclick="showSidebar()"><svg xmlns="http://www.w3.org/2000/svg" height="26px" viewBox="0 -960 960 960" width="26px" fill="#434343"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
                        </ul>
                    </div>

                </header>
                <div class="content">
                    <h1>Una ricompensa<br>per il bene<br>che fai.</h1>
                    <button class="visualprod" href="#" id="pulsantello">Visualizza prodotto</button>
                </div>
                <div class="image">
                    <img src="images/side image 2.png">
                </div>
            </div>
        </section>
        <section class="product">
            <div class = "hero2">
                <div class="content2">
                    <div class="protodiv">
                        <img class="prototype" src="images/imgcestino.png">
                    </div>
                    <div class="text2">
                        <h1>Il nostro prodotto: TradeBin</h1>
                        <p>TradeBin è un cestino in legno che unisce design elegante e funzionalità avanzate. 
                            Dotato di sensori ad ultrasuoni e un servomotore integrato, offre un modo innovativo 
                            per rilevare e conteggiare i rifiuti inseriti, erogando ricompense dopo il corretto smaltimento 
                            di un certo numero di rifiuti. Con la sua combinazione di estetica e tecnologia, 
                            TradeBin è un'opzione ideale per promuovere comportamenti eco-sostenibili in vari ambienti.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="videopage">
            <div class="ytvideo">
                <iframe width="100%" height="100%"
                src="https://www.youtube.com/embed/GKawjcClAXI?si=9ifklyDfc4htwCzT"
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen>
                </iframe>
            </div>
            <div class="text3">
                <h1>Dai un occhiata a questo video!</h1>
                <p>Abbiamo preparato un piccolo video per dimostrarti il nostro impegno verso
                l'ambiente, e per metterti al corrente sul nostro progetto e sulla
                sua realizzazione. Dai un occhiata!
                </p>
            </div>
        </section>
        <section class="information">
            <div class="hero">
                <p class="infobar">
                    <div class="web">
                        <a class="infoTitle">Web Developer</a>
                        <a>
                        <br>Alberto D'addetta
                        <br>Marwan Belli
                        </a>
                    </div>
                    <div class="graphic">
                        <a class="infoTitle">Graphic Designer</a>
                        <a>
                        <br>Daniele Vinelli
                        <br>Alberto D'addetta
                        </a>
                    </div>
                    <div class="photographer">
                        <a class="infoTitle">Video Maker</a>
                            <a>
                                <br>Alberto D'Addetta
                                <br>Francesco Longo
                                <br>Emanuele Steduto<br>
                            </a>
                        <a class="infoTitle">CAD Developer</a>
                            <a>
                                <br>Francesco Ippolito
                                <br>Beatrice Patrone<br>
                            </a>
                    </div>
                    <div class="highrank">
                        <a class="infoTitle">Project Manager<br></a>
                            <a>Giuseppe Ziccardi</a>
                        <br>
                        <a class="infoTitle">Facilitator<br></a>
                            <a>Nicola Savino</a>
                    </div>
                    <div class="tech">
                        <a class="infoTitle">Technical Developer<br></a>
                            <a>Francesco Mangiacotti
                            <br>Giovanni Luca Ciavarella
                            </a>
                    </div>
                    <form class="infosoc" onsubmit="return verificalogin()">
                        <p class="email">cashtrash.pcto@gmail.com</p>
                        <input type="text" placeholder="Mandaci una mail">
                        <button class="emailbtn">Invia</button>
                        <p class="rights">CashTrash® All rights reserved</p>
                    </form>
                </p>
            </div>
        </section>
    </div>
    <script src="script.js"></script>
</body>