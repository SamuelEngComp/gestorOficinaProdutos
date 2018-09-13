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
      <h1 class="header center orange-text">Gestão Oficina</h1>
      <h4 class="header center orange-text">Pesquisar Produto</h4>      
    </div>
  </div>

  <div class="container">
  <div class="section">
   <div class="row">
       <div class="col s8">
            <a class="waves-effect light-blue btn-small" href="cadastro">Novo</a> 
       </div>

      <div class="active-cyan-3 active-cyan-4 col s4">
            <input type="text" placeholder="Pesquisar..." id="myInput">
      </div>
   </div>
  <table class="striped centered">
        <thead>
          <tr>
              <th>ID</th>
              <th>Descrição</th>
              <th>Referência</th>
              <th>Preço de Custo</th>
              <th>Preço de Venda</th>
              <th>Grupo</th>
              <th>Ações</th>
          </tr>
        </thead>

        <tbody id="myTable">
          @foreach($produtos as $produto)
          <tr>
            <td>{{$produto->id}}</td>
            <td>{{$produto->descricao}}</td>
            <td>{{$produto->referencia}}</td>
            <td>R$ {{$produto->preco_custo}}</td>
            <td>R$ {{$produto->preco_venda}}</td> 
            <td>{{$produto->grupo}}</td>
            <td>
              <a class="waves-effect light-blue btn-small btn tooltipped" data-position="top" data-tooltip="Editar"
              	href="editar/{{{$produto->id}}}">
                <i class="material-icons">edit</i> 
              </a>
              <a class="waves-effect red accent-4 btn-small btn tooltipped" data-position="top" data-tooltip="Excluir">
                <i class="material-icons">remove</i> 
              </a>
            </td> 
          </tr>
          @endforeach
        </tbody>
      </table>

    <div style="text-align:center">
        <strong>SA - Consultoria em Tecnologia da Informação</strong>
    </div>
</div>
  </div>

  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../resources/views/js/materialize.js"></script>
  <script src="../resources/views/js/init.js"></script>

    <script>
        $(document).ready(function(){
          $('select').formSelect();
        });
    </script>

    <script>
      $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
          
              $("#myTable tr").filter(function() {
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
          });
      });
</script>

      <script>
            $(document).ready(function(){
              $('.tooltipped').tooltip();
            });
      </script>
  </body>
</html>
