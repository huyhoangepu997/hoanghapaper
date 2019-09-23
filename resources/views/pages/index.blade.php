@extends('master-layout')
@section('title')
Trang chủ
@endsection
@section('content')
<div class="banner-warp">
	<div class="banner">

		<div class="banner-member owl-carousel owl-theme">
			<img src="images/banner.jpg" class="img-fluid" style="height: 600px !important">
			<!-- <div class="banner-member-texts">
				<div class="container text-center ">				
						<h2 class="font-bold banner-member-text-title">Lễ khai trương giao dịch cổ phiếu</h2>					
						<a href="{{ route('gioithieu') }}" class="btn btn-primary ook">Chi tiết</a>				
				</div>
			</div> -->
			<img src="images/slide-2.jpg" class="img-fluid" style="height: 600px !important">
			<img src="images/slide-3.jpg" class="img-fluid" style="height: 600px !important">
			<img src="images/slide-4.jpg" class="img-fluid" style="height: 600px !important">
			<img src="images/slide-5.jpg" class="img-fluid" style="height: 600px !important">
		</div>
	</div>
</div>

<div class="h-about-wrap all-wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="h-about-left">
					<div class="h-about-title mb-4 wow slideInLeft">
						<h2 class="font-bold text-center color-blue">Giới thiệu về công ty</h2>
					</div>
					<div class="text-justify wow slideInLeft">
						<p>Công ty Cổ phần Giấy Hoàng Hà Hải Phòng thành lập ngày 05 tháng 11 năm 2012 (theo giấy đăng ký kinh doanh số 0201282851 với tên gọi Công ty Cổ phần Giấy Hoàng Hà Hải Phòng). Trụ sở chính đặt tại Số 194 đường Kiều Hạ, phường Đông Hải 2, quận Hải An, thành phố Hải Phòng,Việt Nam.</p>
						<p>Công ty chuyên cung cấp những sản phẩm giấy Kraft sóng mang thương hiệu Hoàng Hà với chất lượng tốt nhất, phù hợp nhất, giá cả hợp lý nhất, cách thức phục vụ chuyên nghiệp nhất nhằm thỏa mãn và làm hài lòng cho các khách hàng, luôn đồng hành và phát triển cùng với khách hàng. Trong những năm qua, Hoàng Hà Hải Phòng đã không ngừng nỗ lực phát triển, tăng cường năng lực tài chính đảm bảo các hoạt động kinh doanh bền vững.</p>
						<p class="d-none d-lg-block">Sau 5 năm đi vào hoạt động, Công ty cổ phần Giấy Hoàng Hà Hải Phòng đã và đang khẳng định được vị thế, tạo dựng được thương hiệu, chiếm được lòng tin của khách hàng<span id="dots">...</span><span id="more"> trong lĩnh vực sản xuất giấy bao bì carton. Ngoài ra, Công ty cũng vừa hoàn tất quá trình đầu tư mở rộng quy mô, đa dạng hóa sản phẩm, cung cấp thêm dòng giấy Chipboard cho thị trường ống lõi, bìa...</span></p>
					</div>

					<div class="d-flex justify-content-between align-items-center">					
						<div class="h-about-detail wow slideInLeft">
							<a href="{{ route('gioithieu') }}" class="btn-detail">Chi tiết</a>
						</div>
						<div class="h-about-detail wow slideInLeft float-right">
							<button onclick="myFunction()" id="myBtn" class="btn-detail">Đọc thêm</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="h-about-slide owl-carousel owl-theme wow slideInRight">
					<div class="h-about-slide-member">
						<a href="{{ route('gioithieu') }}"><img src="images/h-about-slide-1.jpg" class="mx-auto d-block img-fluid" style="height: 450px !important"></a>
					</div>
					<div class="h-about-slide-member">
						<a href="{{ route('gioithieu') }}"><img src="images/slide-6.jpg" class="mx-auto d-block img-fluid" style="height: 450px !important"></a>
					</div>
					<div class="h-about-slide-member">
						<a href="{{ route('gioithieu') }}"><img src="images/slide-7.jpg" class="mx-auto d-block img-fluid" style="height: 450px !important"></a>
					</div>
					<div class="h-about-slide-member">
						<a href="{{ route('gioithieu') }}"><img src="images/slide-8.jpg" class="mx-auto d-block img-fluid" style="height: 450px !important"></a>
					</div>
					<div class="h-about-slide-member">
						<a href="{{ route('gioithieu') }}"><img src="images/slide-9.jpg" class="mx-auto d-block img-fluid" style="height: 450px !important"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="h-product-wrap all-wrap">
	<div class="container">
		<div class="h-product-title wow slideInLeft">
			<h2 class="text-center font-bold color-blue">Quan hệ cổ đông</h2>
		</div>
		<div class="h-product">
			<div class="tab-content" id="nav-tabContent">
			  <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
			  	<div class="row">
			  		<div class="h-news owl-carousel owl-theme" style="padding: 20px">
			<div class="h-news-member  "data-aos="fade-up" data-aos-delay="100" >
				<div class="box-image">
					<img src="http://hhppaper.com/image/cache/data/ni%C3%AAm%20y%E1%BA%BFt/images%20(1)-250x150.jpg">
				</div>
				<div class="ttt mt-2 mb-2 font-bold">
					<a href="">QĐ Chấp thuận niêm yết cổ phiếu</a>
				</div>
				<div>
					Ngày 01/08/2018, Sở giao dịch chứng khoán Hà Nội đã ký quyết định ...                    
				</div>
			</div>
			<div class="h-news-member" data-aos="fade-up" data-aos-delay="200">
				<div class="box-image">
					<img src="http://hhppaper.com/image/cache/data/ni%C3%AAm%20y%E1%BA%BFt/images%20(2)-250x150.jpg">
				</div>
				<div class="ttt mt-2 mb-2 font-bold">
					<a href="">TB về ngày GD đầu tiên của HHP</a>
				</div>
				<div>
					Trong 3 ngày 21, 22, 23/06 CBNV Văn phòng đã có...
				</div>
			</div>
				<div class="h-news-member" data-aos="fade-up" data-aos-delay="300">
				<div class="box-image">
					<img src="http://hhppaper.com/image/cache/data/ni%C3%AAm%20y%E1%BA%BFt/images%20(1)-250x150.jpg">
				</div>
				<div class="ttt mt-2 mb-2 font-bold">
					<a href="">QĐ Chấp thuận niêm yết cổ phiếu</a>
				</div>
				<div>
					Ngày 01/08/2018, Sở giao dịch chứng khoán Hà Nội đã ký quyết định ...                    
				</div>
			</div>
				<div class="h-news-member" data-aos="fade-up" data-aos-delay="400">
				<div class="box-image">
					<img src="http://hhppaper.com/image/cache/data/ni%C3%AAm%20y%E1%BA%BFt/images%20(1)-250x150.jpg">
				</div>
				<div class="ttt mt-2 mb-2 font-bold">
					<a href="">QĐ Chấp thuận niêm yết cổ phiếu</a>
				</div>
				<div>
					Ngày 01/08/2018, Sở giao dịch chứng khoán Hà Nội đã ký quyết định ...                    
				</div>
			</div>


		</div>
			  	
			  
			  	</div>


			  	
			  		<div class="text-center mt-4 mb-5">
			  		<a href="{{ route('codong') }}" class="btn btn-primary ook ">Xem tất cả</a>
			  	</div>
			  	
			  </div>
			  <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
			  <div class="row">
			  		<div class="h-news owl-carousel owl-theme" style="padding: 20px">
			<div class="h-news-member  " >
				<div class="box-image">
					<img src="http://hhppaper.com/image/cache/data/ni%C3%AAm%20y%E1%BA%BFt/images%20(1)-250x150.jpg">
				</div>
				<div class="h-news-member-title mt-2 mb-2 font-bold">
					<a href="">QĐ Chấp thuận niêm yết cổ phiếu</a>
				</div>
				<div>
					Ngày 01/08/2018, Sở giao dịch chứng khoán Hà Nội đã ký quyết định ...                    
				</div>
			</div>
			<div class="h-news-member">
				<div class="box-image">
					<img src="http://hhppaper.com/image/cache/data/ni%C3%AAm%20y%E1%BA%BFt/images%20(2)-250x150.jpg">
				</div>
				<div class="h-news-member-title mt-2 mb-2 font-bold">
					<a href="">TB về ngày GD đầu tiên của HHP</a>
				</div>
				<div>
					Trong 3 ngày 21, 22, 23/06 CBNV Văn phòng đã có ...                  
				</div>
			</div>
				<div class="h-news-member">
				<div class="box-image">
					<img src="http://hhppaper.com/image/cache/data/ni%C3%AAm%20y%E1%BA%BFt/images%20(1)-250x150.jpg">
				</div>
				<div class="h-news-member-title mt-2 mb-2 font-bold">
					<a href="">QĐ Chấp thuận niêm yết cổ phiếu</a>
				</div>
				<div>
					Ngày 01/08/2018, Sở giao dịch chứng khoán Hà Nội đã ký quyết định ...                    
				</div>
			</div>
				<div class="h-news-member">
				<div class="box-image">
					<img src="http://hhppaper.com/image/cache/data/ni%C3%AAm%20y%E1%BA%BFt/images%20(1)-250x150.jpg">
				</div>
				<div class="h-news-member-title mt-2 mb-2 font-bold">
					<a href="">QĐ Chấp thuận niêm yết cổ phiếu</a>
				</div>
				<div>
					Ngày 01/08/2018, Sở giao dịch chứng khoán Hà Nội đã ký quyết định ...                    
				</div>
			</div>


		</div>
			  	
			  
			  	</div>

			  </div>
			  <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab">
			  	<div class="row">
			  		<div class="col-md-4">
			  			<div class="h-product-member mb-5">
			  				<div>
			  					<img src="images/h-pro-5.jpg" class="img-fluid">
			  				</div>
			  				<div class="text-center m-3 mt-4">
			  					<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
			  				</div>
			  				<div class="text-center m-3">
			  					Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong ...
			  				</div>
			  				<div class="m-4">
			  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  </div>
			  <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab">
			  	<div class="row">
			  		<div class="col-md-4">
			  			<div class="h-product-member mb-5">
			  				<div>
			  					<img src="images/h-pro-5.jpg" class="img-fluid">
			  				</div>
			  				<div class="text-center m-3 mt-4">
			  					<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
			  				</div>
			  				<div class="text-center m-3">
			  					Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong ...
			  				</div>
			  				<div class="m-4">
			  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  </div>
			 
			 
			</div>
		</div>
	</div>
</div>

<div class="h-image-wrap all-wrap wow slideInLeft">
	<div class="container">
		<div class="h-image owl-carousel owl-theme">
			<div class="h-image-member">
				<a href="{{ route('gioithieu') }}">
					<div class="h-image-member-inner">
						<div class="text-center font-bold background-blue p-2">Sứ mệnh</div>
						<div><img src="images/jesu.jpg" style="width: 100%;"  height="207"></div>
					</div>
				</a>
			</div>
			<div class="h-image-member">
				<a href="{{ route('gioithieu') }}">
					<div class="h-image-member-inner">
						<div class="text-center font-bold background-blue p-2">Triết lí</div>
						<div><img src="images/trietly.jpg" height="207"></div>
					</div>
				</a>
			</div>
			<div class="h-image-member">
				<a href="{{ route('gioithieu') }}">
					<div class="h-image-member-inner">
						<div class="text-center font-bold background-blue p-2">Tầm nhìn</div>
						<div><img src="images/tamnhin.jpg" height="207"></div>
					</div>
				</a>
			</div>
			<div class="h-image-member">
				<a href="{{ route('gioithieu') }}">
					<div class="h-image-member-inner">
						<div class="text-center font-bold background-blue p-2">Ban điều hành</div>
						<div><img src="images/av.jpg" height="207"></div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="h-product-wrap all-wrap">
	<div class="container">
		<div class="h-product-title wow slideInLeft">
			<h2 class="text-center font-bold color-blue mb-4">Sản phẩm của chúng tôi</h2>
		</div>
		<div class="h-product">
			<div class="d-flex justify-content-center">
				<ul class="nav nav-pills h-product">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="pill" href="#sanpham">Sản phẩm</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#sanpham-1">Giấy Kraft Sóng</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#sanpham-2">Giấy Kraft Sóng Gia Keo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#sanpham-3">Giấy Chipboard</a>
					</li>
				</ul>
			</div>
			<div class="tab-content">
				<div id="sanpham" class="container tab-pane active"><br>
					<div class="row">
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay1.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
								</div>
								<div class="text-center m-3">
									Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay2.jpeg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay1.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
								</div>
								<div class="text-center m-3">
									Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay2.jpeg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/h-pro-6.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/h-pro-3.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="sanpham-1" class="container tab-pane fade"><br>
					<div class="row">
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay1.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
								</div>
								<div class="text-center m-3">
									Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay2.jpeg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay1.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
								</div>
								<div class="text-center m-3">
									Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay2.jpeg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/h-pro-6.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/h-pro-3.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="sanpham-2" class="container tab-pane fade"><br>
					<div class="row">
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay1.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
								</div>
								<div class="text-center m-3">
									Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay2.jpeg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay1.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
								</div>
								<div class="text-center m-3">
									Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay2.jpeg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/h-pro-6.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/h-pro-3.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="sanpham-3" class="container tab-pane fade"><br>
					<div class="row">
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay1.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
								</div>
								<div class="text-center m-3">
									Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay2.jpeg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay1.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
								</div>
								<div class="text-center m-3">
									Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay2.jpeg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/h-pro-6.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/h-pro-3.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="h-news-wrap all-wrap wow slideInLeft">
	<div class="container">
		<div class="h-news-title mb-4">
			<h2 class="text-center font-bold color-blue">Tin tức</h2>
		</div>	
		<div class="h-news owl-carousel owl-theme">
			<div class="h-news-member">
				<div class="box-image">
					<img src="images/news-1.jpg">
				</div>
				<div class="ttt mt-2 mb-2 font-bold">
					<a href="">Trung Quốc - thị trường chủ lực nhập khẩu giấy nửa đầu năm 2018</a>
				</div>
				<div>
					Chiếm 19% thị phần nhóm hàng và 18,1% tỷ trọng, Trung Quốc tiếp tục là thị trường chủ lực cung cấp giấy cho Việt Nam trong nửa đầu năm 2018.
				</div>
			</div>
			<div class="h-news-member">
				<div class="box-image">
					<img src="images/news-1.jpg">
				</div>
				<div class="ttt mt-2 mb-2 font-bold">
					<a href="">Thị trường giấy thế giới 6 tháng đầu năm 2018</a>
				</div>
				<div>
					Giá giấy và bột giấy thế giới tăng mạnh trong 6 tháng đầu năm 2018 do nhu cầu bột từ thị trường Trung Quốc tăng mạnh và giá năng lượng cũng như các vật liệu khác dùng trong sản xuất giấy đều tăng.                   
				</div>
			</div>
			<div class="h-news-member">
				<div class="box-image">
					<img src="images/news-1.jpg">
				</div>
				<div class="ttt mt-2 mb-2 font-bold">
					<a href="">Hội thảo doanh nghiệp Ngành Giấy về tình hình nhập khẩu giấy thu</a>
				</div>
				<div>
					Chiều 10 tháng 8 năm 2018, tại Khách sạn Phượng Hoàng thành phố Bắc Ninh, Ban Chấp hành Hiệp hội Giấy và Bột giấy Việt Nam đã tổ chức Hội thảo nhằm mục đích thông tin...                  
				</div>
			</div>
			<div class="h-news-member">
				<div class="box-image">
					<img src="images/news-1.jpg">
				</div>
				<div class="ttt mt-2 mb-2 font-bold">
					<a href="">Chào sản thành công cổ phiếu HHP</a>
				</div>
				<div>
					Với mục tiêu khẳng định thương hiệu, tăng vốn điều lệ để mở rộng kinh doanh, được sự chấp thuận đăng ký niêm yết cổ phiếu của Sở GDCK Hà Nội...                  
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <div class="news-block">
	<div class="container">
		<div class="slider-news">
			
		</div>
	</div>
</div> -->

@endsection