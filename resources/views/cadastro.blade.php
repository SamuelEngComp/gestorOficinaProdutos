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
      <h4 class="header center orange-text">Cadastrar Produto</h4>      
    </div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        
      @if(isset($errors) && count($errors) > 0)
        <div class ="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>
      @endif
        <form class="col s12" method="post" action="salvar">
            {!!csrf_field()!!}
        <div class="row">
            <div class="input-field col s12">
                <input id="descricao" type="text" class="validate" name="descricao" value="{{$produto->descricao or old('descricao')}}">
                <label for="descricao">Descrição</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s12">
                <input id="referencia" type="text" class="validate" name="referencia" value="{{$produto->referencia or old('referencia')}}">
                <label for="referencia">Referência</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s4">
                <input id="preco_custo" type="number" class="validate" name="preco_custo" value="{{$produto->preco_custo or old('preco_custo')}}">
                <label for="preco_custo">Preço de custo</label>
            </div>

            <div class="input-field col s4">
                <input id="preco_venda" type="number" class="validate" name="preco_venda" value="{{$produto->preco_venda or old('preco_venda')}}">
                <label for="preco_venda">Preço de venda</label>
            </div>

            <div class="input-field col s4">
                <select name="grupo">
                    <option value="" disabled selected>Selecione o grupo</option>
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria}}">{{$categoria}}</option>
                    @endforeach
                </select>
                <label>Grupo</label>
            </div>
        </div>

        
            <button class="btn waves-effect light-blue" type="submit">Enviar
                <i class="material-icons right">send</i>
            </button>

            <a class="waves-effect waves-teal btn-flat" href="index">Cancelar</a>
        
        </form>
    </div>

    </div>

    <div style="text-align:center">
        <strong>SA - Consultoria em Tecnologia da Informação</strong>
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
  </body>
</html>
