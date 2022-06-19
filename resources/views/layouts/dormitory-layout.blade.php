<!DOCTYPE html>
<html>
<head>
	<title> @yield('title')</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="../../../assets/AT-pro-logo.png"/>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous"> --}}

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="../../../css/all.min.css">
	<!-- End import lib -->
	<link rel="stylesheet" type="text/css" href="../../../css/kkk.css">
	<link rel="stylesheet" href="../../../css/evo-calendar.css">
	<link rel="stylesheet" href="../../../css/evo-calendar.midnight-blue.min.css">
	<link rel="stylesheet" href="../../../css/evo-calendar.midnight-blue.css">
	<link rel="stylesheet" href="../../../css/evo-calendar.orange-coral.min.css">
    <link rel="stylesheet" href="../../../css/paginationn.css">
</head>
<body class="overlay-scrollbar">
	<!-- navbar -->
	<div class="navbar">
		<!-- nav left -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link">
					<i class="fas fa-bars" onclick="collapseSidebar()"></i>
				</a>
			</li>
			<li class="nav-item">
				<!-- <img src="assets/AT-pro-black.png" alt="ATPro logo" class="logo logo-light">
				<img src="assets/AT-pro-white.png" alt="ATPro logo" class="logo logo-dark"> -->
				<h1 >Hi! {{Auth::user()->name}}</h1>
			</li>
		</ul>
		<!-- end nav left -->
		<!-- form -->
		{{-- <form class="navbar-search">
			<input type="text" name="Search" class="navbar-search-input" placeholder="ຄົ້ນຫາທີ່ນີ້...">
			<i class="fas fa-search"></i>
		</form> --}}
		<!-- end form -->
		<!-- nav right -->
		<ul class="navbar-nav nav-right">
			<li class="nav-item mode">
				<a class="nav-link" href="#" onclick="switchTheme()">
					<i class="fas fa-moon dark-icon"></i>
					<i class="fas fa-sun light-icon"></i>
				</a>
			</li>

			{{-- <li class="nav-item dropdown">
				<a class="nav-link">
					<i class="fas fa-envelope-open-text dropdown-toggle" data-toggle="notification-menu"></i>
				</a>
				<ul id="notification-menu" class="dropdown-menu notification-menu">
					<div class="dropdown-menu-header">
						<span>
							ການຮ້ອງຂໍເພີ່ມຫ້ອງເເຖວ
						</span>
					</div>
					<div class="dropdown-menu-content overlay-scrollbar scrollbar-hover">
						<li class="dropdown-menu-item">
							<a href="{{route('dormitory.regist_dormit')}}" class="dropdown-menu-link">
								<div>
									<i class="fas fa-envelope-open-text"></i>
								</div>
								<span>
									ຮ້ອງຂໍລົງໂຄສະນາຫ້ອງເເຖວເພີ່ມ
								</span>
							</a>
						</li>
					</div>
					<div class="dropdown-menu-footer">

					</div>
				</ul>
			</li> --}}

			<li class="nav-item avt-wrapper">
				<div class="avt dropdown">
					<img src="https://www.shareicon.net/data/2017/02/15/878685_user_512x512.png" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
					<ul id="user-menu" class="dropdown-menu">
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>

						<li  class="dropdown-menu-item">
							<a class="dropdown-menu-link"  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
								<div>
									{{-- <i class="fas fa-sign-out-alt"></i> --}}
                                    <i class="fas fa-sign-out-alt"></i>
								</div>
								<span><span>ອອກຈາກລະບົບ</span></span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
		<!-- end nav right -->
	</div>
	<!-- end navbar -->
    @yield('content')
    <!-- import script -->
	<script src="../../../js/index.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
	<script src="../../../js/evo-calendar.js"></script>
	<script src="../../../js/evo-calendar.min.js"></script>
	<script src="../../../js/app.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> --}}
	<!-- end import script -->
</body>
</html>
