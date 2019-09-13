@extends('master-layout')
@section('title')
Tin tức
@endsection
@section('content')


<div class="banner-warp">
  <div class="banner">
    <div class="banner-member">
      <img src="images/anh-1.jpg" class="img-fluid" >
      <div class="banner-member-text">
        <div class="container">
          <div class="banner-member-text-title">
            <h2 class="font-bold text-center text-banner" data-aos="fade-up" data-aos-delay="200">TIN TỨC</h2>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container " >
    <div class="row mt-5">
		<!-- cột 1 -->
		<div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="100">
			<ul class="list-group">
			  <li class="list-group-item active text-center font-weight-bold">HÌNH ẢNH</li>
			  <li class="list-group-item">
			  	<img src="http://www.ppivn.vn/userfiles/giaysanphamgiay_QWBM.jpeg" style="width: 100%" class="mt-3">
			  	<img src="http://hhppaper.com/image/data/hhppaper/slide/nh%20h%E1%BA%A3i%20ph%C3%B2ng.jpg" style="width: 100%" class="mt-3">
			  	<img src="http://hhppaper.com/image/data/hjghv.JPG" style="width: 100%" class="mt-3">
			  	<img src="http://hhppaper.com/image/data/ch%C3%A0o%20s%C3%A0n%20hhp/ed4716c1f553140d4d42.jpg" style="width: 100%" class="mt-3">
			  </li>
			
			</ul>
		</div>
    	

		<!-- cột 2 -->
		<div class="col-md-6 mb-3" data-aos="fade-up" data-aos-delay="300">
			<ul class="list-group">
			  <li class="list-group-item active text-center font-weight-bold">TRUNG QUỐC- THỊ TRƯỜNG CHỦ LỰC NHẬP KHẨU GIẤY</li>
			  <li class="list-group-item">
			  	<div class="text-center"data-aos="flip-right">
			  		<img src="http://www.ppivn.vn/userfiles/giaysanphamgiay_QWBM.jpeg" >
			  	</div>
			  	<span>
			  		Theo số liệu từ TCHQ, tính từ đầu năm đến hết tháng 6/2018 Việt Nam đã nhập khẩu 977 nghìn tấn giấy các loại, đạt 910,8 triệu USD, giảm 0,9% về lượng nhưng tăng 11% về trị giá so với cùng kỳ 2017. Tính riêng tháng 6/2018 lượng giấy nhập khẩu chỉ đạt 155,3 nghìn tấn đạt 150,3 triệu USD, giảm 14,6% về lượng và giảm 12,6% trị giá so với tháng 5/2018.
			  		<br>
			  		Trong số thị trường Việt Nam nhập khẩu mặt hàng giấy thì Trung Quốc chiếm thị phần lớn 19% với 186,4 nghìn tấn, đạt 165,1 triệu USD, giảm 12,11% về lượng nhưng tăng 4,16% về trị giá so với cùng kỳ, giá nhập bình quân tăng 18,51% lên 885,43 USD/tấn.
			  		<br>
			  		Tính riêng tháng 6/2018 lượng giấy nhập từ thị trường Trung Quốc là 27,9 nghìn tấn, trị giá 25,9 triệu USD, giảm 26,09% về lượng và 23,16% trị giá so với tháng 5/2018, giá nhập bình quân 928,42 USD, tăng 3,97%.
			  	</span>
			  </li>
			
			</ul>
		</div>

		<!-- cột 3 -->
		   <div class="col-md-3 tin-tuc-content"  data-aos="fade-up" data-aos-delay="400">
            <ul class="list-group" >
                <li class="list-group-item text-center font-weight-bold" style="background-color: #058ff7 ; color: white" >TUYỂN DỤNG</li>
              <li class="list-group-item">
                  <div class="row">
                      <div class="col-md-4 " style="padding:0"><img src="http://hhppaper.com/image/data/tin%20t%E1%BB%A9c/paper_FMTV.jpg" style="width: 90%">
                      </div>
                      <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                          <span>Giá giấy và bột giấy thế giới tăng mạnh  </span>
                      </div>
                  </div>
              </li>
              <li class="list-group-item">
                  <div class="row">
                      <div class="col-md-4 " style="padding:0"><img src="http://www.ppivn.vn/userfiles/giaysanphamgiay_QWBM.jpeg" style="width: 90%">
                      </div>
                      <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                          <span>Trung Quốc - thị trường nhập khẩu  </span>
                      </div>
                  </div>
              </li>
              <li class="list-group-item">
                  <div class="row">
                      <div class="col-md-4 " style="padding:0"><img src="http://hhppaper.com/image/cache/data/ch%C3%A0o%20s%C3%A0n%20hhp/caecf57113e3f2bdabf2-300x200.jpg" style="width: 100%">
                      </div>
                      <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                          <span>Chào sản thành công cổ phiếu HHP  </span>
                      </div>
                  </div>
              </li>

              <li class="list-group-item">
                  <div class="row">
                      <div class="col-md-4 " style="padding:0"><img src="http://hhppaper.com/image/data/tin%20t%E1%BB%A9c/paper_FMTV.jpg" style="width: 90%">
                      </div>
                      <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                          <span>Giá giấy và bột giấy thế giới tăng mạnh  </span>
                      </div>
                  </div>
              </li>
              <li class="list-group-item">
                  <div class="row">
                      <div class="col-md-4 " style="padding:0"><img src="http://www.ppivn.vn/userfiles/giaysanphamgiay_QWBM.jpeg" style="width: 90%">
                      </div>
                      <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                          <span>Trung Quốc - thị trường nhập khẩu  </span>
                      </div>
                  </div>
              </li>
              <li class="list-group-item">
                  <div class="row">
                      <div class="col-md-4 " style="padding:0"><img src="http://hhppaper.com/image/cache/data/ch%C3%A0o%20s%C3%A0n%20hhp/caecf57113e3f2bdabf2-300x200.jpg" style="width: 100%">
                      </div>
                      <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                          <span>Chào sản thành công cổ phiếu HHP  </span>
                      </div>
                  </div>
              </li>

</ul>
        </div>

   </div>
</div>



@endsection
