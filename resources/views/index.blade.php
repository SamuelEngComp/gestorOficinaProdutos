<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>SA-Consultoria</title>

  <link rel="shortcut icon" href="../resources/views/img/reparation.jpg" />
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../resources/views/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../resources/views/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index" class="brand-logo">SA-Consultoria</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="dashboard">DashBoard</a></li>
        <li><a href="cadastro">Cadastro</a></li>
        <li><a href="pesquisa">Pesquisar</a></li>
        <li><a href="login">Login</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
      <li><a href="dashboard">DashBoard</a></li>
        <li><a href="cadastro">Cadastro</a></li>
        <li><a href="pesquisa">Pesquisar</a></li>
        <li><a href="login">Login</a></li>
      </ul>
      <a href="index" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Gestão Oficina</h1>
      <div class="row center">
        <h5 class="header col s12 light">Aplicação desenvolvida com o intuito de fixar os conhecimentos do 
            framework <strong>Laravel</strong> juntamente com a linguagem de programação <strong>PHP</strong>.
            Sabendo que o framework obedece o padrão <strong>MVC</strong>, foi criado um <strong>CRUD</strong>
            simples para gerenciar os produtos cadastrados em uma Oficina fictícia. A ideia da Oficina veio
            de uma entrevista de emprego, realizada pela empresa <strong>AR-Consultoria</strong>, na qual
            eu utilizei o <strong>JAVA</strong>, <strong>Spring Boot</strong> e o <strong>Thymeleaf</strong>.
        </h5>
      </div>
      
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Rápido desenvolvimento</h5>

            <p class="light">Nosso time de desenvolvedores é altamente capacitados para entregar o melhor produto
                no menor tempo possível.
            </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Foco no cliente</h5>

            <p class="light">Foco e comprometimento com o cliente, damos suporte 24h por dia e realizamos 
                customizações que o cliente sugerir.
            </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Manutenção</h5>

            <p class="light">Criamos seu sistema e você não precisa se preocupar com mais nada,
                a SA-Consultoria gerencia tudo pra você.
            </p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Sobre a SA-Consultoria</h5>
          <p class="grey-text text-lighten-4">
                A SA-Consultoria foi fundada em 2018, por Samuel Lima, formado em Engenharia de Computação
                pela UFRN e um grande entusiasta da programação web, atualmente desenvolve nas linguagens JAVA e PHP,
                tem experiência com Banco de dados MySql e Postgres. A empresa conta hoje com uma equipe 
                bastante qualificada.
            </p>


        </div>
        
        <div class="col l6 s12">
          <h5 class="white-text">Contatos</h5>
          <ul>
            <li>E-mail: samuellima810@gmail.com</li>
            <li>Celular: (84)9-9191-2186</li>
            <li>Github: <a class="white-text" href="https://github.com/SamuelEngComp">SamuelEngComp</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <strong>SA - Consultoria em Tecnologia da Informação</strong>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../resources/views/js/materialize.js"></script>
  <script src="../resources/views/js/init.js"></script>

  </body>
</html>
