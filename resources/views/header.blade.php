<header>
	<div class="header-top-wrap pt-2 pb-2">
		<div class="container">
			<div class="header-top">
				<div class="header-top-left">
					<i class="fab fa-facebook-f"></i>
					<i class="fab fa-twitter"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-linkedin-in"></i>
				</div>
				<div class="header-top-right">
					<div><span class="pr-5"><i class="fas fa-phone-volume text-primary"></i> 0225.397.9952 </span>
					
					<span> <i class="fas fa-envelope text-primary"></i>  hhppaper@gmail.com</span></div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="menu-all">
	<nav>
		<div class="menu-wrap">
			<div class="container">
				<div class="menu">
					<div class="menu-left">
						<a href="{{ url('home') }}"><img src="images/logo.jpg" class="img-thumbnail"></a>
					</div>
					<div class="menu-right">
						<div class="menu-mobile"><h2><i class="fas fa-bars"></i></h2></div>
						<ul class="menuu">
							<li class="nav-menu-item"><a class="nav-link-effect" href="{{ url('home') }}"><i class="fas fa-home"></i></a></li>
							<li class="nav-menu-item"><a class="nav-link-effect" href="{{ url('home') }}">Trang chủ</a></li>
							<li class="nav-menu-item"><a class="nav-link-effect" href="{{ route('gioithieu') }}">Giới thiệu<i class="fas fa-sort-down ml-2"></i></a>

								<ul class="sub-menu">
									<li><a href="{{ route('gioithieu') }}">Về chúng tôi</a></li>
									<li><a href="{{ route('gioithieu') }}">Cơ cấu tổ chức</a></li>
									<li><a href="{{ route('gioithieu') }}">Cơ cấu bộ máy quản lý</a></li>
									<li><a href="{{ route('gioithieu') }}">Danh sách cổ đông</a></li>
									<li><a href="{{ route('gioithieu') }}">Danh sách công ty</a></li>
								</ul>
							</li>
							<li class="nav-menu-item"><a class="nav-link-effect" href="{{ route('codong') }}">Quan hệ cổ đông</a></li>			
							<li class="menu-tier-2 nav-menu-item"><a class="nav-link-effect" href="{{ route('category') }}">Sản phẩm<i class="fas fa-sort-down ml-2"></i></a>
								<ul class="sub-menu">
									<li><a href="{{ route('category') }}">Giấy Testliner</a></li>
									<li><a href="{{ route('category') }}">Giấy Medium</a></li>
									<li><a href="{{ route('category') }}">Giấy bao gói</a></li>
									<li><a href="{{ route('category') }}">Tấm lợp sinh hợp</a></li>
									<li><a href="{{ route('category') }}">Tái chế vỏ hộp sữa</a></li>
									<li><a href="{{ route('category') }}">Vách trần sinh thái</a></li>
								</ul>
							</li>
							<li class="nav-menu-item"><a class="nav-link-effect" href="{{ route('tintuc') }}">Tin tức<i class="fas fa-sort-down ml-2"></i></a>
								<ul class="sub-menu">
									<li><a href="{{ route('tintuc') }}">Tin ngành</a></li>
									<li><a href="{{ route('tintuc') }}">Tin nội bộ</a></li>
								</ul>
							</li>
							<li class="nav-menu-item"><a class="nav-link-effect" href="{{ route('tuyendung') }}">Tuyển dụng</a></li>
							<li class="nav-menu-item"><a class="nav-link-effect" href="{{ route('lienhe') }}">Liên hệ</a></li>
						</ul>
					</div>
					<div class="menu-search">
						<div>
							<input type="text" placeholder="Nội dung tìm kiếm ...">
							<a href=""><i class="fas fa-search"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<div class="menu-mobile-detail">
		<div class="container">
			<ul class="p-2 text-center">
				<li><a href="{{ url('home') }}">Trang chủ</a></li>
				<li><a href="{{ route('codong') }}">Quan hệ cổ đông</a></li>
				<li class="menu-mobile-tier-1" style="cursor: pointer;">Giới thiệu
					<ul class="menu-mobile-tier-1-content">
						<li><a href="{{ route('category') }}"><i class="fas fa-angle-right"></i> Về chúng tôi</a></li>
						<li><a href="{{ route('category') }}"><i class="fas fa-angle-right"></i> Cơ cấu tổ chức</a></li>
						<li><a href="{{ route('category') }}"><i class="fas fa-angle-right"></i> Cơ cấu bộ máy quản lý</a></li>
						<li><a href="{{ route('category') }}"><i class="fas fa-angle-right"></i> Danh sách cổ công</a></li>
						<li><a href="{{ route('category') }}"><i class="fas fa-angle-right"></i> Danh sách công ty</a></li>
					</ul>
				</li>
				<li class="menu-mobile-tier-2" style="cursor: pointer;">Sản phẩm

					<ul class="menu-mobile-tier-2-content">
						<li><a href="{{ route('category') }}"><i class="fas fa-angle-right"></i> Giấy Testliner</a></li>
						<li><a href="{{ route('category') }}"><i class="fas fa-angle-right"></i> Giấy Medium</a></li>
						<li><a href="{{ route('category') }}"><i class="fas fa-angle-right"></i> Giấy bao gói</a></li>
						<li><a href="{{ route('category') }}"><i class="fas fa-angle-right"></i> Tấm lợp sinh hợp</a></li>
						<li><a href="{{ route('category') }}"><i class="fas fa-angle-right"></i> Tái chế vỏ hộp sữa</a></li>
						<li><a href="{{ route('category') }}"><i class="fas fa-angle-right"></i> Vách trần sinh thái</a></li>
					</ul>
				</li>
				<li class="menu-mobile-tier-3" style="cursor: pointer;">Tin tức
					<ul class="menu-mobile-tier-3-content">
						<li><a href="{{ route('category') }}"><i class="fas fa-angle-right"></i>Tin ngành</a></li>
						<li><a href="{{ route('category') }}"><i class="fas fa-angle-right"></i>Tin nội bộ</a></li>
					</ul>
				</li>
				<li><a href="{{ route('tuyendung') }}">Tuyển dụng</a></li>
				<li><a href="{{ route('lienhe') }}">Liên hệ</a></li>
			</ul>
		</div>
	</div>
</div>