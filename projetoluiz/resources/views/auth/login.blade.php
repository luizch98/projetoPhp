<!DOCTYPE html>
<html lang="pt" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('lib/css/main.css') }}">
    <link href="{{ asset('lib/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <title>Login</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Sistema Financeiro</h1>
      </div>
      <div> 
		 <div class="alert alert-info alert-dismissable">
			  <a href="#" class="close" data-dismiss="alert" ><span aria-hidden="true">&times;</span></a>
			  <!--<div text="${param.message[0]}">message</div>-->
		 </div>					 
	  </div>
      <!-- <div if="${param.error}">
		 <div class="alert  alert-danger  alert-dismissible" role="alert" >
		     <button type="button" class="close" data-dismiss="alert" ><span aria-hidden="true">&times;</span></button>
		   	 <span>Usuário inválido ou senha errada.</span>
		 </div>
	 </div> -->
      <div class="login-box">
        <form class="login-form" method="POST" action="">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Acessar Sistema</h3>
          <div class="form-group">
            <label for="email" class="control-label">E-mail</label>
            <input class="form-control" type="text" id="email" name="email" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label for="password" class="control-label">Senha</label>
            <input class="form-control" type="password" id="password" name="password"  placeholder="Password">
          </div>
          <div class="form-group">
            <div class="utility">
              <p class="semibold-text mb-2"><a href="#" >Recuperar Senha ?</a></p>
              <p class="semibold-text mb-2"><a href="{{ route('registrar_usuario') }}" >Registrar-se ?</a></p>
            </div>
          </div>
          
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Acessar</button>
          </div>
        </form>
        <!-- <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Recuperar Senha ?</h3>
          <div class="form-group">
            <label class="control-label">E-mail</label>
            <input class="form-control" type="text" placeholder="E-mail">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Voltar a página de Login</a></p>
          </div>
        </form> -->
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    
    <script src="{{ asset('lib/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{ asset ('lib/js/popper.min.js')}}"></script>
	<script src="{{ asset('lib/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('lib/js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{ asset('lib/js/plugins/pace.min.js')}}"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>