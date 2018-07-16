
<html>
    <head>
        <meta charset="utf-8">
        <title>Cristolândia Masculina em Porto Seguro</title>
        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
    </head>
    <body>
        <header class="header">
            <?php include("includes/header.inc"); ?>
        </header>

        <section id="home">
            <div class="box back">
                <div class="one">
                    <h1>Cristolândia Masculina em Porto Seguro - Ba</h1>
                    <div class="line" id="line-title"></div>
                    <div class="countdown styled"></div>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="box">
                <div id="img-about">
                </div>
                <div class="description">
                    <h2>Sobre a Cristolândia</h2>
                    <p>
                        Desde sua fundação atendemos pessoas dependentes químicas e alcoólicas,
                        especialmente advindos de situação de rua, oferecendo-lhes banho, três refeições diárias,
                        roupas, corte de cabelo e acesso ao Evangelho, objetivo principal de tudo isso. Passamos a
                        acolher, dentre essas pessoas, as que se interessavam em transformação de vida e cuidamos
                        delas por um período de tratamento de dois anos, desintoxicando-as, ensinando-lhes a
                        Palavra de Deus, reparando laços familiares, dando suporte psicológico, social e
                        reinserindo-as na sociedade, prontas para o mercado de trabalho e para gerir suas próprias
                        famílias, completamente transformados e livres das drogas. Em nove anos, já são mais de
                        mil pessoas recuperadas conosco para a glória de Deus. <a href="about.php">+ Leia mais</a>
                    </p>
                </div>
            </div>
        </section>


        <section id="resume">
            <div class="back">
                <div class="box">
                    <div class="little-box" id="date">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <h3>4 meses</h3>
                    </div>
                    <div class="little-box" id="congressmen">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <h3>7 acolhidos</h3>
                    </div>
                    <div class="little-box" id="ic-speaker">
                        <i class="fa fa-child" aria-hidden="true"></i>
                        <h3>3 missionários</h3>
                    </div>
                    <div class="little-box" id="time">
                        <i class="fa fa-hand-holding-heart" aria-hidden="true"></i>
                        <h3>90% de parcerias fixas</h3>
                    </div>
                </div>
            </div>
        </section>

        <section id="pillars">
            <div class="box">
                <div class="box-child" id="inclusion">
                    <div class="box-i">
                        <i class="fas fa-book-open" aria-hidden="true"></i>
                    </div>
                    <h3>Centralidade da Bíblia</h3>
                    <p>Nós consideramos a Bíblia como Palavra de Deus, infalível, inerrante e autoritativa.
                      Somente sob a sua instrução é possível transformação real de vida.</p>
                </div>
                <div class="box-child" id="motivation">
                    <div class="box-i">
                        <i class="fas fa-hands-helping" aria-hidden="true"></i>
                    </div>
                    <h3>Cultura do Cuidado</h3>
                    <p>Uma transformação de vida radical acontecerá à medida que nos tornamos discípulos de Cristo.
                      Nosso interesse é formar imitadores do Senhor.</p>
                </div>
                    <div class="box-child" id="inovation">
                        <div class="box-i">
                            <i class="fas fa-lightbulb" aria-hidden="true"></i>
                        </div>
                        <h3>Inconformismo</h3>
                        <p>Desde que saímos de nossas casas e vimos ao campo não cessamos de fulgir do comodismo.
                        Nossa unidade busca a inovação e melhorar sempre, para a glória de Deus.</p>
                    </div>
                </div>
            </section>

        <!-- <section id="helpers">
            <h2>Parceiros</h2>
            <div class="box horizon-swiper">
                <div class="helper horizon-item">
                    <div class="helper-pic">
                        <img src="../assets/img/alda.jpg">
                    </div>
                </div>

                <div class="helper horizon-item">
                    <div class="helper-pic">
                        <img src="../assets/img/alda.jpg">
                    </div>
                </div>

                <div class="helper horizon-item">
                    <div class="helper-pic">
                        <img src="../assets/img/alda.jpg">
                    </div>
                </div>

                <div class="helper horizon-item">
                    <div class="helper-pic">
                        <img src="../assets/img/alda.jpg">
                    </div>
                </div>
            </div>
        </section> -->

        <section id="contact-us">
            <form action="../controllers/message.php" method="POST">
                <fieldset>
                    <legend>Contact us</legend>
                    <div class="input">
                        <label for="name">Name:</label>
                        <input name="name" type="text"  class="element" required>
                    </div>
                    <div class="input">
                        <label for="email">Email:</label>
                        <input name="email" type="email"  class="element" required>
                    </div>
                    <div class="input">
                        <label for="assunto">Assunto:</label>
                        <input name="assunto" type="assunto"  class="element" required>
                    </div>
                    <div class="input">
                        <label for="message">Message:</label>
                        <textarea  class="element" required></textarea>
                    </div>
                    <div class="input">
                        <input name="send" type="submit" value="Enviar" class="element" id="send">
                    </div>
                </fieldset>
            </form>
        </section>

        <footer class="footer">
            <?php include("includes/footer.inc"); ?>
        </footer>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://web.crea.acsta.net/rep_dif/Smart/Warner/BatmanVsSuperman/Arrobas-250/Contagem/dest/jquery.countdown.js"></script>
    <script src="../assets/js/javascript.js"></script>
    <script src="../assets/js/horizon-swiper.js">
        $('.horizon-swiper').horizonSwiper();
    </script>
</html>
