<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghoul High</title>
    <link rel="website icon" type="png" href="images/logoEtecRoxo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Courgette&family=Elsie+Swash+Caps:wght@400;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
        @font-face {font-family: 'Brice-RegularSemiExpanded'; /* Nome da fonte */
                    src:url('Brice-RegularSemiExpanded.woff2') format('woff2'),
                        url('Brice-RegularSemiExpanded.woff') format('woff');
                    font-weight: normal;
                    font-style: normal;
                    }
        body {
            font-family: 'Inter', 'Century Gothic', sans-serif;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            background-color: #e7e6d1;
        }
        .heroSection {
            position: relative;
            background-color: #e0e0e0;
            height: 550px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .heroSection h1{
            font-family: 'Brice-RegularSemiExpanded';
            width: 90%;
            left: -40%;
            font-size: 90px;
            justify-content:center;
            position: relative;
            z-index: 3;
        }
        .heroSection p {
            left: -40%;
            font-size: 20px;
        }
        .heroSection a{
            margin-left: 70px;
            display: inline-block;
            margin-top: 30px;
            padding: 10px 25px;
            color: #1c002e;
            background: #f1f1f1;
            font-weight: 500;
            font-size: 1.5em;
            letter-spacing: 1px;
            text-decoration: none;
            border-radius: 17px;
            transition: 0.3s ease-in-out;
        }
        .heroSection a:hover{
            transform: translateY(-10px);
            background-color: #1c002e;
            color: #f1f1f1;
        }
        .circle {
            position: absolute;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right,#5c2373,rgb(179, 40, 98));
            clip-path: polygon(45% 0%, 100% 0%, 100% 100%, 75% 100%);
            z-index: 0;
        }

        .heroSection img {
            position: relative;
            z-index: 1;
            width: 37%;
            max-height: 100%;
            object-fit: cover;
        }

        .h2Section1{
            text-align: center;
            font-weight: 700;
            font-size: 45px;
        }

        .wrapperS1-1 {
            width: 90%;
            height: 370px;
            margin-left: 5%;
            display: flex;
            flex-wrap: nowrap;
            gap: 2%;
        }

        .cards1 {
            width: 31%;
            background-color: #f1f1f1;
            border-radius: 15px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.4);
            transition: 0.7s ease-in-out;
            padding-bottom: 15px;
        }

        .cards1:hover {
            transform: translateY(-5px);
        }

        .divImgCards1 {
            background-color: inherit;
            width: 96%;
            height: 70%;
            margin: 2% auto;
            border-radius: 15px;
        }

        .imgMaVendidas {
            width: 100%;
            height: 100%;
            border-radius: 15px;
            object-fit:cover;
        }

        .txtMaVendidas {
            width: 90%;
            margin-left: 5%;
            margin: 10px auto;
            font-size: 22px;
            font-family: "Arial", poppins;
        }

        .precoCards1 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 90%;
            margin: 0 auto;
            position: relative;
            padding-top: 10px;
        }

        .precoMaVendidas {
            font-size: 23px;
            font-weight: 600;
            font-family:"Arial", poppins;
            letter-spacing: -1px;
        }

        .hrCard1 {
            position: absolute;
            top: -12px;
            width: 100%;
            left: 0;
            border: none;
            height: 2px;
            background-color:#222222;
        }

        .sla {
            background-color: #4f2168;
            border-radius: 9px;
            margin-top: -13px;
            width: 25%;
            height: 33px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            transition: 0.4s ease-in-out;
        }

        .sla:hover {
            transform: translateY(-5px);
        }

        .imgCarrinho{
            width: 70%;
            height: auto;
            object-fit: cover;
            border-radius: 15px;
        }

        .h2Section2{
            text-align: center;
            font-weight: 700;
            font-size: 45px;
        }
        
        .h4Section4{
            text-align: center;
            opacity: 80%;
        }

        #subContainer2 {
            height: auto;
            margin-left: 7%;
            margin-right: 7%;
            display: flex;
            gap: 10px;
        }

        .divBonecaG1 {
            border-radius: 15px;
            width: 55%;
            height: 350px;
            transition: 0.3s ease-in-out;
            object-fit: cover;
            box-shadow: 2px 7px 9px rgba(0, 0, 0, 0.59);
        }
        .divBonecaG1:hover{
            transform: translateY(-5px);
        }

        .imgMateriaG{
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
        }

        .divBonecasG23 {
            display: flex;
            flex-direction: column;
            gap: 8px;
            width: 50%;
        }

        .materiaP {
            border-radius: 15px;
            display: flex;
            background-color: whitesmoke;
            height: 50%;
            align-items: center;
            transition: 0.3s ease-in-out;
            box-shadow: 4px 3px 6px rgba(0, 0, 0, 0.4);
        }
        .materiaP:hover{
            transform: translateY(-5px);
        }

        .imgMateriaP{
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
        }
        .h2Section3{
            text-align: center;
            font-weight: 700;
            font-size: 45px;
        }
        .wrapperS3-1{
            width: 80%;
            height: 360px;
            margin-left: 10%;
            display: flex;
            flex-wrap: nowrap;
            gap: 2%;
        }

        .boxNoviLanca{
            width: 80%;
            height:150px;
            margin-left: 10%;
            display: flex;
            flex-wrap: nowrap;
            gap: 1%;
            border-radius: 20px;
            background: hsla(293, 53%, 29%, 1);
                background: linear-gradient(315deg, hsla(293, 53%, 29%, 1) 14%, hsla(321, 70%, 47%, 1) 76%);
                background: -moz-linear-gradient(315deg, hsla(293, 53%, 29%, 1) 14%, hsla(321, 70%, 47%, 1) 76%);
                background: -webkit-linear-gradient(315deg, hsla(293, 53%, 29%, 1) 14%, hsla(321, 70%, 47%, 1) 76%);
                filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#6A2373", endColorstr="#CC2492", GradientType=1 );
        }
        .tituloNoviLanca{
            width: 45%;
            color: white;
            text-align: center;
            font-size: 35px;
            padding:20px;
        }
        .boxEmail{
            width: 30%;
            height: 30%;
            border-radius: 10px;
            margin-top: 5%;
            border: none;
        }
        .botaoNoviLanca{
            background-color: #4f2168;
            color: white;
            width: 15%;
            height: 30%;
            margin-top: 5%;
            border-radius: 10px;
            border: none;
            font-weight: bold;
        }

        .wrapperS5-1{
            width: 85%;
            height: 200px;
            margin-left: 7.5%;
            display: flex;
            flex-wrap: nowrap;
            gap: 1.5%;
        }

        .wrapperS5-2{
            width: 85%;
            height: 200px;
            margin-left: 7.5%;
            display: flex;
            flex-wrap: nowrap;
            gap: 1.5%;
            justify-content: center;  /* Centraliza os itens horizontalmente */
        }

        .boxTotalAvali{
            width: 33%;
            height: auto;
            background-color:#dccfdf;
            border-radius: 15px;
            cursor: default;
            transition: 0.3s ease-in-out;
        }
        .boxTotalAvali:hover{
            transform: translateY(-4px);
        }


        .imgAvali{
            width: 45%;
            height: 65%;
            background-color: black;
            margin-left: 5%;
            margin-top: -15%;
            border-radius: 15px;
        }
        .nomeCliente{
            margin-left: 55%;
            margin-top: -15%;
            font-size: 20px;
            font-weight:  bold;
        }
        .comentarioCliente{
            padding: 20px;
        }
        .imgClientes{
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 15px;
        }
    </style>

<body>
    @include('partials.header')
    <!--@include('partials.footer')-->
    <br><br><br>
    <section class="heroSection">
    <div class="text">
        <h1>GHOUL<br><span style="text-align: center; margin-left: 70%;">HIGH</span></h1>
        <p>O lugar perfeito para sua coleção crescer!</p>
        <a href="https://www.vestibulinhoetec.com.br/home">Comprar Agora!</a>
    </div>
        <div class="circle"></div>
        <img src="{{ asset( 'img/bonecasHS.png') }}" alt="" class="imgMaVendidas">        
    </section>

    <section class="section-1">
        <h2 class="h2Section1">Nossas <span style="color: purple; font-style: italic;">Ghouls</span> mais vendidas!</h2>
        <br>
        <div class="wrapperS1-1">
            <div class="cards1">
                <div class="divImgCards1">
                    <img src="{{ asset(path: 'img/ghouliaDFDoll.jpeg') }}" alt="" class="imgMaVendidas"
                        style="object-fit:cover;">
                </div>
                <p class="txtMaVendidas">Ghoulia Dead Fast</p>
                <div class="precoCards1">
                    <hr class="hrCard1">
                    <p class="precoMaVendidas">R$1.552,98</p>
                    <div class="sla">
                        <img src="{{ asset( 'img/logoCarrinhoRoxo.png') }}" alt="" class="imgCarrinho">
                    </div>
                </div>
            </div>

            <div class="cards1">
                <div class="divImgCards1">
                    <img src="{{ asset( 'img/clawdeenDoll.jpeg') }}" alt="" class="imgMaVendidas">
                </div>
                <p class="txtMaVendidas">Clawdeen Clássica</p>
                <div class="precoCards1">
                    <hr class="hrCard1">
                    <p class="precoMaVendidas">R$1.490,00</p>
                    <div class="sla">
                        <img src="{{ asset('img/logoCarrinhoRoxo.png') }}" alt="" class="imgCarrinho">
                    </div>
                </div>
            </div>

            <div class="cards1">
                <div class="divImgCards1">
                    <img src="{{ asset( 'img/venusDoll.jpeg') }}" alt="" class="imgMaVendidas">
                </div>
                <p class="txtMaVendidas">Vênus G3</p>
                <div class="precoCards1">
                    <hr class="hrCard1">
                    <p class="precoMaVendidas">R$250,17,</p>
                    <div class="sla">
                        <img src="{{ asset( 'img/logoCarrinhoRoxo.png') }}" alt="" class="imgCarrinho">
                    </div>
                </div>
            </div>

            <div class="cards1">
                <div class="divImgCards1">
                    <img src="{{ asset( 'img/operettaDoll.jpeg') }}" alt="" class="imgMaVendidas">
                </div>
                <p class="txtMaVendidas">Operetta Clássica</p>
                <div class="precoCards1">
                    <hr class="hrCard1">
                    <p class="precoMaVendidas">R$150,40</p>
                    <div class="sla">
                        <img src="{{ asset( 'img/logoCarrinhoRoxo.png') }}" alt="" class="imgCarrinho">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br><br>

    <section class="section-2">
        <h2 class="h2Section2">Navegue pelas gerações</h2>
        <h4 class="h4Section4">Encontre as bonecas de cada época de Monster High</h4><br>
        <div id="subContainer2">
            <div class="divBonecaG1">
                <img src="{{ asset( 'img/imgBonecasG1.png') }}" alt="" class="imgMateriaG">
            </div>

            <div class="divBonecasG23">
                <div class="materiaP">
                    <img src="{{ asset( 'img/imgBonecasG2.png') }}" alt="" class="imgMateriaP">
                </div>
                <div class="materiaP">
                    <img src="{{ asset( 'img/imgBonecasG3.png') }}" alt="" class="imgMateriaP">
                </div>
            </div>
        </div>
    </section>

    <br><br><br><br>

    <section class="section-3">
        <h2 class="h2Section3">Recomendados</h2><br>
        <div class="wrapperS3-1">
            <div class="cards1">
                <div class="divImgCards1">
                    <img src="{{ asset( 'img/holtHydeDoll.jpeg') }}" alt="" class="imgMaVendidas"
                        style="object-fit:cover;">
                </div>
                <p class="txtMaVendidas">Holt Hyde</p>
                <div class="precoCards1">
                    <hr class="hrCard1">
                    <p class="precoMaVendidas">R$910,00</p>
                    <div class="sla">
                        <img src="{{ asset( 'img/logoCarrinhoRoxo.png') }}" alt="" class="imgCarrinho">
                    </div>
                </div>
            </div>

            <div class="cards1">
                <div class="divImgCards1">
                    <img src="{{ asset( 'img/clawdeenGhoulsRule.jpeg') }}" alt="" class="imgMaVendidas"
                        style="object-fit:cover;">
                </div>
                <p class="txtMaVendidas">Clawdeen Ghouls Rule</p>
                <div class="precoCards1">
                    <hr class="hrCard1">
                    <p class="precoMaVendidas">R$558,34</p>
                    <div class="sla">
                        <img src="{{ asset( 'img/logoCarrinhoRoxo.png') }}" alt="" class="imgCarrinho">
                    </div>
                </div>
            </div>

            <div class="cards1">
                <div class="divImgCards1">
                    <img src="{{ asset( 'img/jinafireDoll.jpeg') }}" alt="" class="imgMaVendidas"
                        style="object-fit:cover;">
                </div>
                <p class="txtMaVendidas">Jinafire Long</p>
                <div class="precoCards1">
                    <hr class="hrCard1">
                    <p class="precoMaVendidas">R$782,00</p>
                    <div class="sla">
                        <img src="{{ asset( 'img/logoCarrinhoRoxo.png') }}" alt="" class="imgCarrinho">
                    </div>
                </div>
            </div>

            <div class="cards1">
                <div class="divImgCards1">
                    <img src="{{ asset( 'img/robecaDoll.jpeg') }}" alt="" class="imgMaVendidas"
                        style="object-fit:cover;">
                </div>
                <p class="txtMaVendidas">Robeca Steam</p>
                <div class="precoCards1">
                    <hr class="hrCard1">
                    <p class="precoMaVendidas">R$299,99</p>
                    <div class="sla">
                        <img src="{{ asset( 'img/logoCarrinhoRoxo.png') }}" alt="" class="imgCarrinho">
                    </div>
                </div>
            </div>
        </div>
        <br><!--DIVISÃO DE WRAPPERS DIVISÃO DE WRAPPERS DIVISÃO DE WRAPPERS DIVISÃO DE WRAPPERS DIVISÃO DE WRAPPERS-->
        <div class="wrapperS3-1">
            <div class="cards1">
                <div class="divImgCards1">
                    <img src="{{ asset( 'img/draculauraBeachG3.jpeg') }}" alt="" class="imgMaVendidas"
                        style="object-fit:cover;">
                </div>
                <p class="txtMaVendidas">Draculaura Beach G3</p>
                <div class="precoCards1">
                    <hr class="hrCard1">
                    <p class="precoMaVendidas">R$1.552,98</p>
                    <div class="sla">
                        <img src="{{ asset( 'img/logoCarrinhoRoxo.png') }}" alt="" class="imgCarrinho">
                    </div>
                </div>
            </div>

            <div class="cards1">
                <div class="divImgCards1">
                    <img src="{{ asset( 'img/wydownaDoll.jpeg') }}" alt="" class="imgMaVendidas"
                        style="object-fit:cover;">
                </div>
                <p class="txtMaVendidas">Wydowna</p>
                <div class="precoCards1">
                    <hr class="hrCard1">
                    <p class="precoMaVendidas">R$1.489,99</p>
                    <div class="sla">
                        <img src="{{ asset( 'img/logoCarrinhoRoxo.png') }}" alt="" class="imgCarrinho">
                    </div>
                </div>
            </div>

            <div class="cards1">
                <div class="divImgCards1">
                    <img src="{{ asset( 'img/lagoonaDeadTired.jpeg') }}" alt="" class="imgMaVendidas"
                        style="object-fit:cover;">
                </div>
                <p class="txtMaVendidas">Lagoona:Dead Tired</p>
                <div class="precoCards1">
                    <hr class="hrCard1">
                    <p class="precoMaVendidas">R$492,23</p>
                    <div class="sla">
                        <img src="{{ asset( 'img/logoCarrinhoRoxo.png') }}" alt="" class="imgCarrinho">
                    </div>
                </div>
            </div>

            <div class="cards1">
                <div class="divImgCards1">
                    <img src="{{ asset( 'img/elissabatDoll.jpeg') }}" alt="" class="imgMaVendidas"
                        style="object-fit:cover;">
                </div>
                <p class="txtMaVendidas">Elissabat Clássica</p>
                <div class="precoCards1">
                    <hr class="hrCard1">
                    <p class="precoMaVendidas">R$753,00</p>
                    <div class="sla">
                        <img src="{{ asset( 'img/logoCarrinhoRoxo.png') }}" alt="" class="imgCarrinho">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>

    <section class="section4">
        <div class="boxNoviLanca">
            <p class="tituloNoviLanca">
                Receba Novidades sobre <br><span style="font-weight: bold;">Novos Lançamentos!</span>
            </p>
            <input type="text" placeholder="E-Mail" name="emailtxt" class="boxEmail">
            <button class="botaoNoviLanca">Enviar</button>
        </div>
    </section>

    <br><br><br>

    <section class="section5">
        <h2 class="h2Section1">Avaliações</h2><br><br><br>
        <div class="wrapperS5-1">
            <div class="boxTotalAvali">
                <div class="imgAvali">
                <img src="{{ asset( 'img/juninho.jpeg') }}" alt="" class="imgClientes"></div>
                <div class="comenAvali">
                    <p class="nomeCliente">Junior Santos</p>
                    <p class="comentarioCliente">"Sempre que quero aumentar minha coleção, compro aqui. Os produtos são
                        autênticos, bem embalados e o atendimento é impecável."</p>
                </div>
            </div>

            <div class="boxTotalAvali">
                <div class="imgAvali">
                <img src="{{ asset( 'img/stefani.jpeg') }}" alt="" class="imgClientes"></div>
                <div class="comenAvali">
                    <p class="nomeCliente">Stefani Joanne</p>
                    <p class="comentarioCliente">"As bonecas são originais e vieram muito bem protegidas. O suporte ao
                        cliente também é ótimo, tiraram todas as minhas dúvidas antes da compra."</p>
                </div>
            </div>

            <div class="boxTotalAvali">
                <div class="imgAvali">
                <img src="{{ asset( 'img/yasmin.jpeg') }}" alt="" class="imgClientes"></div>
                <div class="comenAvali">
                    <p class="nomeCliente">Yasmin Pinto</p>
                    <p class="comentarioCliente">"Comprei a Clawdeen da G1 e chegou perfeitamente embalada. O site tem
                        ótimas descrições e fotos detalhadas. Vou comprar mais com certeza!"</p>
                </div>
            </div>
        </div>
        <br><Br><br>
    </section>

    @include('partials.footer')

</body>

</html>