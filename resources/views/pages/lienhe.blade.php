@extends('master-layout')
@section('title')
Liên hệ
@endsection
@section('content')

<div class="banner-warp">
  <div class="banner">
    <div class="banner-member">
      <img src="images/anh-1.jpg" class="img-fluid" >
      <div class="banner-member-text">
        <div class="container">
          <div class="banner-member-text-title">
            <h2 class="font-bold text-center text-banner" data-aos="fade-up" data-aos-delay="200">LIÊN HỆ</h2>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
			<div class="row">
				<div class="col-12">
					

					<div class="row content-lienhe mt-4 mb-4">
						<div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
							<u class="tt-lienhe mb-5">CÔNG TY CỔ PHẦN GIẤY HOÀNG HÀ HẢI PHÒNG</u>
							<div><i class="fas fa-map-marker-alt"></i> <strong>Trụ sở chính:</strong> Số 194 đường Kiều Hạ, Phường Đông Hải 2, Quận Hải An, Thành phố Hải Phòng.
							<br>
							<i class="fas fa-map-marker-alt"></i> <strong> Văn phòng đại diện:</strong>  Số 29 Ngõ 53 Nguyễn Khoái, Bạch Đằng, Hai Bà Trưng, Hà Nội 
							<br>
							<i class="fas fa-envelope"></i> <strong>Email:</strong>  hhppaper@gmail.com
							<br>
							<i class="fas fa-phone-volume"></i> <strong>Điện thoại: </strong>  0388936388
							<br>
							<i class="fas fa-fax"></i> <strong>Fax: </strong>0388936388 
							<br>
							<i class="fas fa-globe"></i> <strong>Website: </strong>www.hhppaper.com
							</div>

							
						</div>

						<div class="col-md-6 bg-light border rounded mb-4" data-aos="fade-up" data-aos-delay="300">
							<u class="tt-lienhe ">GỬI THÔNG TIN CHO CHÚNG TÔI</u>
							<form  style="padding: 10px 20px">
					              <div class="form-group">
					                <label for="email" >Họ và tên</label>
					                <input type="email" class="form-control" id="email" placeholder="Nhập họ và tên..." name="email">
					              </div>
					              <div class="form-group">
					                <label for="email">Địa chỉ email</label>
					                <input type="email" class="form-control" id="email" placeholder="Nhập Email..." name="email">
					              </div>
					              <div class="form-group">
					                <label for="email">Số điện thoại</label>
					                <input type="email" class="form-control d-right" id="email" placeholder="Nhập số điện thoại" name="email">
					              </div>

					              <div class="form-group">
					                <label for="comment">Nội dung</label>
					                <textarea class="form-control" rows="3" id="comment" placeholder="Nhập nội dung" name="text"></textarea>
					              </div>
					              <div class="form-group form-check">
					                <label class="form-check-label">
					                  <input class="form-check-input" type="checkbox" name="remember"> Ghi nhớ
					                </label>
					              </div>
					              <button type="submit" class="btn btn-primary">Gửi</button>
					            </form>


						
							
						</div>
					</div>

					<div class="row mb-4" data-aos="flip-left"data-aos-easing="ease-out-cubic"data-aos-duration="1000">
							<i class="fas fa-map-marked-alt mb-3"></i> <strong> Bản đồ đường đi </strong>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.5285584921153!2d106.7300920144044!3d20.85073549920892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a6548352131ed%3A0xb5f0c095c5e41fdb!2zMTk0IEtp4buBdSBI4bqhLCDEkMO0bmcgSOG6o2kgMSwgSOG6o2kgQW4sIEjhuqNpIFBow7JuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1564974152673!5m2!1svi!2s" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>


@endsection