
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
		{{-- <meta name="description" content="...">
		<meta name="keywords" content="...">
		<meta name="author" content="..."> --}}
		<title>{{ config('app.name', 'Market')}}</title>
		<link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css" />
	</head>
	<body>
		<div class="container wrapper" id="app">   
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#czsale-navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="czsale-navbar">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="">{{ env('APP_NAME', 'Market')}}</a></li>
                    </ul>
					<ul class="nav navbar-nav navbar-right">
                        <li><a href="">Deposer une annonce</a></li>
						<li><a href="help.html">Aide</a></li>
						 <!-- Authentication Links -->
						 @guest
						<li><a href="{{ route('register') }}">Inscription</a></li>
						<li><a href="{{ route('login') }}">Connexion</a></li>
						@else
						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->username }}  <b class="caret"></b></a>
								<ul class="dropdown-menu" style="padding: 15px;min-width: 150px;">
									<li><a href="">Mon compte</a></li>
									<li class="divider"></li>
									<li>
									<a href="{{ route('logout') }}"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
										Deconnexion
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
									</li>
									<li></li>
								</ul>
							</li> 					
						@endguest
						{{-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Connexion <b class="caret"></b></a>
							<ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
								<li>
									<div class="row">
										<div class="col-md-12">
											<form class="form" role="form" method="post" action="{{ route('login') }}"  accept-charset="UTF-8" id="login-nav">
												<div class="form-group">
													<label class="sr-only" for="exampleInputEmail2">E-mail : </label>
													<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
												</div>
												<div class="form-group">
													<label class="sr-only" for="exampleInputPassword2">Mot de passe : </label>                                                        </label>
													<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
												</div>
												<div class="checkbox">
													<label>
														<input type="checkbox"> Rester connecter
													</label>
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-success btn-block">Se connecter</button>
												</div>
											</form>
										</div>
									</div>
								</li>
								<li class="divider"></li>
								<li>
									<div class="form-group">
										<button onclick="location.href='#'" class="btn btn-default btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i> Sign in with Facebook</button>
										<button onclick="location.href='#'" class="btn btn-default btn-block btn-social btn-twitter"><i class="fa fa-twitter"></i> Sign in with Twitter</button>
										<button onclick="location.href='#'" class="btn btn-default btn-block btn-social btn-google-plus"><i class="fa fa-google-plus"></i> Sign in with Google</button>
									</div>
								</li>
							</ul>
						</li> --}}
					</ul>   
				</div>
			</nav>
			<div class="row content">
                @include('partials.sidebar')
                @yield('content')
			</div>
			<div class="footer">
				<div class="footer-content">
					<div class="row">
						<div class="col-xs-6">
							<img src="" alt="Market Logo" title="" style="width: 100px; height: 58px;" />
						</div>
						<div class="col-xs-6 text-right">
							<a href="help.html" class="btn btn-link">Aide</a>
							<span class="bar">|</span>
							<a href="contact.html" class="btn btn-link">Contact</a>
							<span class="bar">|</span>
							<a href="conditions.html" class="btn btn-link">Conditions d'utilisation</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- JavaScript -->
		{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
		@yield('script')
	</body>
</html>