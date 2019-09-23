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
					<div><span class="pr-5"><i class="fas fa-phone-volume text-primary"></i> 0388936388</span>
					
					<span> <i class="fas fa-envelope text-primary"></i>hhppaper@gmail.com</span></div>
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
							<!-- <li class="nav-menu-item"><a class="nav-link-effect" href="{{ url('home') }}"><i class="fas fa-home"></i></a></li> -->
							<li class="nav-menu-item"><a class="nav-link-effect" href="{{ url('home') }}">Trang chủ</a></li>
							<li class="nav-menu-item"><a class="nav-link-effect" href="{{ route('gioithieu') }}">Giới thiệu<i class="fas fa-sort-down ml-2"></i></a>

								<ul class="sub-menu">
									<li><a href="{{ route('gioithieu') }}">Lịch sử phát triển</a></li>
									<li><a href="{{ route('gioithieu') }}">Tầm nhìn, sứ mệnh</a></li>
									<li><a href="{{ route('gioithieu') }}">Văn hoá - giá trị cốt lõi</a></li>
									<li><a href="{{ route('gioithieu') }}">Cơ cấu tổ chức</a></li>
									<li><a href="{{ route('gioithieu') }}">Hình ảnh công ty</a></li>
									<li><a href="{{ route('gioithieu') }}">Công ty thành viên</a></li>
									<li><a href="{{ route('gioithieu') }}">Lời của chúa</a></li>
								</ul>
							</li>
							<li class="nav-menu-item"><a class="nav-link-effect" href="{{ route('codong') }}">Quan hệ cổ đông</a></li>			
							<li class="menu-tier-2 nav-menu-item"><a class="nav-link-effect" href="{{ route('category') }}">Sản phẩm<i class="fas fa-sort-down ml-2"></i></a>
								<ul class="sub-menu">
									<li><a href="{{ route('category') }}">Giấy Kraft Sóng</a></li>
									<li><a href="{{ route('category') }}">Giấy Kraft Sóng Gia Keo</a></li>
									<li><a href="{{ route('category') }}">Giấy Chipboard</a></li>
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
							<li class="nav-item-lang dropdown">
								<span class="nav-link-lang dropdown-toggle dropdown-lang"  id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<img id="selectedImg" src="image/en.png" alt="" width="25">
								</span>
								<div class="dropdown-menu dropdown-language" aria-labelledby="dropdown09">
									<span class="change-language translate-lang dropdown-item dropdown-lang-en" id="en">
										<img src="images/en.png" alt="" width="25">
									</span>
									<span class="change-language translate-lang dropdown-item dropdown-lang-vn" id="vn">
										<img src="images/vn.png" alt="" width="25">
									</span>
								</div>
							</li>
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
						<li><a href="{{ route('gioithieu') }}"><i class="fas fa-angle-right"></i> Về chúng tôi</a></li>
						<li><a href="{{ route('gioithieu') }}"><i class="fas fa-angle-right"></i> Cơ cấu tổ chức</a></li>
						<li><a href="{{ route('gioithieu') }}"><i class="fas fa-angle-right"></i> Cơ cấu bộ máy quản lý</a></li>
						<li><a href="{{ route('gioithieu') }}"><i class="fas fa-angle-right"></i> Danh sách cổ công</a></li>
						<li><a href="{{ route('gioithieu') }}"><i class="fas fa-angle-right"></i> Danh sách công ty</a></li>
					</ul>
				</li>
				<li class="menu-mobile-tier-2" style="cursor: pointer;">Sản phẩm

					<ul class="menu-mobile-tier-2-content">
						<li><a href="{{ route('category') }}"><i class="fas fa-angle-right"></i> Giấy Kraft Sóng</a></li>
						<li><a href="{{ route('category') }}"><i class="fas fa-angle-right"></i> Giấy Kraft Sóng Gia Keo</a></li>
						<li><a href="{{ route('category') }}"><i class="fas fa-angle-right"></i> Giấy Chipboard</a></li>
					</ul>
				</li>
				<li class="menu-mobile-tier-3" style="cursor: pointer;">Tin tức
					<ul class="menu-mobile-tier-3-content">
						<li><a href="{{ route('tintuc') }}"><i class="fas fa-angle-right"></i>Tin ngành</a></li>
						<li><a href="{{ route('tintuc') }}"><i class="fas fa-angle-right"></i>Tin nội bộ</a></li>
					</ul>
				</li>
				<li><a href="{{ route('tuyendung') }}">Tuyển dụng</a></li>
				<li><a href="{{ route('lienhe') }}">Liên hệ</a></li>
			</ul>
		</div>
	</div>
</div>