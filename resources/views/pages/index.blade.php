@extends('master-layout')
@section('title')
Trang chủ
@endsection
@section('content')
<div class="banner-warp">
	<div class="banner">
		<div class="banner-member">
			<img src="images/banner.jpg" class="img-fluid">
			<div class="banner-member-texts">
				<div class="container text-center ">
					
						<h2 class="font-bold banner-member-text-title">Lễ khai trương giao dịch cổ phiếu</h2>
					
					<!-- <div class="banner-member-text-content">
						Với mục tiêu khẳng định thương hiệu, tăng vốn điều lệ để mở rộng kinh doanh, <br> được sự chấp thuận đăng ký niêm yết cổ phiếu của ...
					</div> -->
					
						
						<a href="{{ route('gioithieu') }}" class="btn btn-primary ook">Chi tiết</a>
						
					
				</div>
			</div>
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
					<div class="h-about-content mb-4  text-justify wow slideInLeft">
						<p>Công ty Cổ phần Giấy Hoàng Hà Hải Phòng thành lập ngày 05 tháng 11 năm 2012 (theo giấy đăng ký kinh doanh số 0201282851 với tên gọi Công ty Cổ phần Giấy Hoàng Hà Hải Phòng). Trụ sở chính đặt tại Số 194 đường Kiều Hạ, phường Đông Hải 2, quận Hải An, thành phố Hải Phòng,Việt Nam.</p>
						<p>Công ty chuyên cung cấp những sản phẩm giấy Kraft sóng mang thương hiệu Hoàng Hà với chất lượng tốt nhất, phù hợp nhất, giá cả hợp lý nhất, cách thức phục vụ chuyên nghiệp nhất nhằm thỏa mãn và làm hài lòng cho các khách hàng, luôn đồng hành và phát triển cùng với khách hàng. Trong những năm qua, Hoàng Hà Hải Phòng đã không ngừng nỗ lực phát triển, tăng cường năng lực tài chính đảm bảo các hoạt động kinh doanh bền vững.</p>
						<p class="d-none d-lg-block">Sau 5 năm đi vào hoạt động, Công ty cổ phần Giấy Hoàng Hà Hải Phòng đã và đang khẳng định được vị thế,tạo dựng được thương hiệu, chiếm được lòng tin của khách hàng ...

 </p>
					</div>
					
					<div class="h-about-detail wow slideInLeft mb-4">
						<a href="{{ route('gioithieu') }}" class="btn-detail">Chi tiết</a>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="h-about-slide owl-carousel owl-theme wow slideInRight">
					<div class="h-about-slide-member">
						<a href="{{ route('gioithieu') }}"><img src="images/h-about-slide-1.jpg" class="mx-auto d-block img-fluid"></a>
					</div>
					<div class="h-about-slide-member">
						<a href="{{ route('gioithieu') }}"><img src="images/h-about-slide-1.jpg" class="mx-auto d-block img-fluid"></a>
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
			<nav class="mb-4">
				<div class="h-product-menu-mobile-wrap">
					<div class="h-product-menu-mobile background-blue">
						Quan hệ cổ đông
					</div>
					<div class="nav nav-tabs h-product-menu-mobile-content" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-1-tab" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">Công bố thông tin</a>
						<a class="nav-item nav-link" id="nav-2-tab" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">Nghị quyết, biên bản ĐHĐCĐ</a>
						<a class="nav-item nav-link" id="nav-3-tab" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">Báo cáo các văn bản có liên quan</a>
						<a class="nav-item nav-link" id="nav-4-tab" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false">Bản báo hạch</a>
						
					</div>
				</div>
			</nav>
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
					Trong 3 ngày 21, 22, 23/06 CBNV Văn phòng đã có ...                  
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
			<h2 class="text-center font-bold color-blue">Sản phẩm của chúng tôi</h2>
		</div>
		<div class="h-product">
			<nav class="mb-4">
				<div class="h-product-menu-mobile-wrap">
					<div class="h-product-menu-mobile background-blue">
						Danh mục sản phẩm
					</div>
					<div class="nav nav-tabs h-product-menu-mobile-content" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-1-tab" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">Sản phẩm</a>
						<a class="nav-item nav-link" id="nav-2-tab" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">Giấy Tesliner</a>
						<a class="nav-item nav-link" id="nav-3-tab" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">Giấy Medium</a>
						<a class="nav-item nav-link" id="nav-4-tab" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false">Giấy Bao gói</a>
						<a class="nav-item nav-link" id="nav-5-tab" data-toggle="tab" href="#nav-5" role="tab" aria-controls="nav-5" aria-selected="false">Tấm lợp sinh hợp</a>
						<a class="nav-item nav-link" id="nav-6-tab" data-toggle="tab" href="#nav-6" role="tab" aria-controls="nav-6" aria-selected="false">Tái chế vỏ hộp sữa</a>
						<a class="nav-item nav-link" id="nav-7-tab" data-toggle="tab" href="#nav-7" role="tab" aria-controls="nav-7" aria-selected="false">Vách trần sinh hợp</a>
					</div>
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
			  <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
			  	<div class="row">
			  		<div class="col-md-4">
			  			<div class="h-product-member mb-5">
			  				<div>
			  					<img src="images/h-pro-1.jpg" class="img-fluid">
			  				</div>
			  				<div class="text-center m-3 mt-4">
			  					<a href="" class="font-bold"><h4>Tấm lợp sinh thái</h4></a>
			  				</div>
			  				<div class="text-center m-3">
			  					Hoàng Hà là công ty duy nhất tại Việt Nam thực hiện sản xuất và tái chế ...
			  				</div>
			  				<div class="m-4">
			  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="col-md-4">
			  			<div class="h-product-member mb-5">
			  				<div>
			  					<img src="images/h-pro-2.jpg" class="img-fluid">
			  				</div>
			  				<div class="text-center m-3 mt-4">
			  					<a href="" class="font-bold"><h4>Giấy Testliner KNA, KQM</h4></a>
			  				</div>
			  				<div class="text-center m-3">
			  					Sản phẩm dùng làm lớp mặt cho thùng carton, được sản xuất trên hệ thống ...
			  				</div>
			  				<div class="m-4">
			  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="col-md-4">
			  			<div class="h-product-member mb-5">
			  				<div>
			  					<img src="images/h-pro-3.jpg" class="img-fluid">
			  				</div>
			  				<div class="text-center m-3 mt-4">
			  					<a href="" class="font-bold"><h4>Giấy Testliner KT1,K1Y,KS</h4></a>
			  				</div>
			  				<div class="text-center m-3">
			  					Sản phẩm dùng làm lớp mặt cho thùng carton, được sản xuất trên hệ thống ...
			  				</div>
			  				<div class="m-4">
			  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="col-md-4">
			  			<div class="h-product-member mb-5">
			  				<div>
			  					<img src="images/h-pro-4.jpg" class="img-fluid">
			  				</div>
			  				<div class="text-center m-3 mt-4">
			  					<a href="" class="font-bold"><h4>Giấy bao gói</h4></a>
			  				</div>
			  				<div class="text-center m-3">
			  					Dùng trong đóng gói bao bì. Định lượng : 58,60,70,75 g/m2 Dùng làm bao gói thương ...
			  				</div>
			  				<div class="m-4">
			  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
			  				</div>
			  			</div>
			  		</div>
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
			  		<div class="col-md-4">
			  			<div class="h-product-member mb-5">
			  				<div>
			  					<img src="images/h-pro-6.jpg" class="img-fluid">
			  				</div>
			  				<div class="text-center m-3 mt-4">
			  					<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
			  				</div>
			  				<div class="text-center m-3">
			  					Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống ...
			  				</div>
			  				<div class="m-4">
			  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  </div>
			  <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
			  	<div class="row">
			  		<div class="col-md-4">
			  			<div class="h-product-member mb-5">
			  				<div>
			  					<img src="images/h-pro-2.jpg" class="img-fluid">
			  				</div>
			  				<div class="text-center m-3 mt-4">
			  					<a href="" class="font-bold"><h4>Giấy Testliner KNA, KQM</h4></a>
			  				</div>
			  				<div class="text-center m-3">
			  					Sản phẩm dùng làm lớp mặt cho thùng carton, được sản xuất trên hệ thống ...
			  				</div>
			  				<div class="m-4">
			  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="col-md-4">
			  			<div class="h-product-member mb-5">
			  				<div>
			  					<img src="images/h-pro-3.jpg" class="img-fluid">
			  				</div>
			  				<div class="text-center m-3 mt-4">
			  					<a href="" class="font-bold"><h4>Giấy Testliner KT1,K1Y,KS</h4></a>
			  				</div>
			  				<div class="text-center m-3">
			  					Sản phẩm dùng làm lớp mặt cho thùng carton, được sản xuất trên hệ thống ...
			  				</div>
			  				<div class="m-4">
			  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="col-md-4">
			  			<div class="h-product-member mb-5">
			  				<div>
			  					<img src="images/h-pro-6.jpg" class="img-fluid">
			  				</div>
			  				<div class="text-center m-3 mt-4">
			  					<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
			  				</div>
			  				<div class="text-center m-3">
			  					Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống ...
			  				</div>
			  				<div class="m-4">
			  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
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
			  <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-5-tab">
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
			  <div class="tab-pane fade" id="nav-6" role="tabpanel" aria-labelledby="nav-6-tab">
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
			  <div class="tab-pane fade" id="nav-7" role="tabpanel" aria-labelledby="nav-7-tab">
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
					<a href="">Sầm sơn ” rực lửa” với Teambuilding mừng sinh nhật</a>
				</div>
				<div>
					Trong 3 ngày 21, 22, 23/06 CBNV Văn phòng đã có chuyến nghỉ mát kết hợp Teambuilding sôi động tại Sầm Sơn-Thanh Hóa, góp phần gắn kết...                    
				</div>
			</div>
			<div class="h-news-member">
				<div class="box-image">
					<img src="images/news-1.jpg">
				</div>
				<div class="ttt mt-2 mb-2 font-bold">
					<a href="">Sầm sơn ” rực lửa” với Teambuilding mừng sinh nhật</a>
				</div>
				<div>
					Trong 3 ngày 21, 22, 23/06 CBNV Văn phòng đã có chuyến nghỉ mát kết hợp Teambuilding sôi động tại Sầm Sơn-Thanh Hóa, góp phần gắn kết...                    
				</div>
			</div>
			<div class="h-news-member">
				<div class="box-image">
					<img src="images/news-1.jpg">
				</div>
				<div class="ttt mt-2 mb-2 font-bold">
					<a href="">Sầm sơn ” rực lửa” với Teambuilding mừng sinh nhật</a>
				</div>
				<div>
					Trong 3 ngày 21, 22, 23/06 CBNV Văn phòng đã có chuyến nghỉ mát kết hợp Teambuilding sôi động tại Sầm Sơn-Thanh Hóa, góp phần gắn kết...                    
				</div>
			</div>
			<div class="h-news-member">
				<div class="box-image">
					<img src="images/news-1.jpg">
				</div>
				<div class="ttt mt-2 mb-2 font-bold">
					<a href="">Sầm sơn ” rực lửa” với Teambuilding mừng sinh nhật</a>
				</div>
				<div>
					Trong 3 ngày 21, 22, 23/06 CBNV Văn phòng đã có chuyến nghỉ mát kết hợp Teambuilding sôi động tại Sầm Sơn-Thanh Hóa, góp phần gắn kết...                    
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