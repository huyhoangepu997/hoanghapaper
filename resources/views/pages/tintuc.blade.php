
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

    <!-- cột bên trái -->
    <div class="col-md-9 "  data-aos="fade-up" data-aos-delay="100">
      <ul class="nav nav-tabs codong-tt" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tin tức nội bộ
          </a>
        </li>
        
        

        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Tin tức trong ngành</a>
        </li>
      </ul>

      <!-- tin tức nội bộ -->
      <div class="tab-content" id="myTabContent" data-aos="fade-up" data-aos-delay="200">
        
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          
         <div class="row mt-5 codong-ct">
           
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row">
              <div class="col-md-4">
               <div class="thumbnail text-center mt-3 ml-3">
                <img src="http://hhppaper.com/image/data/hhppaper/chung-nhan-rung-fsc.jpg" alt="" style="width:100%;height: 100%">
              </div>
            </div>
            <!-- Blog Content -->
            <div class="col-md-8 blog-content">
              <a href="{{ route('tintucchitiet') }}" class="blog-headline">
                <h5>CHỨNG NHẬN CỦA FSC</h5>
              </a>
              <div class="meta d-flex align-items-center">
                <a href="#">09/18/2019</a>
              </div>
              <p>FSC được viết tắt từ các chữ cái tiếng Anh: Forest Stewardship Council là một tổ chức Quốc tế, phi chính phủ, phi lợi nhuận được thành lập vào năm 1993 tại Toronto...</p>
              <a href="{{ route('tintucchitiet') }}"
              class="btn btn-outline-primary btn-sm mt-3">
              Đọc tiếp >>
            </a>
          </div>
        </div>
      </div>


    </div>
    
    <hr class="w-100 my-3">

    <div class="row mt-3 codong-ct"  data-aos="fade-up" data-aos-delay="200">

      <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
        <div class="row">
          <div class="col-md-4">
           <div class="thumbnail text-center">
            <img src="http://hhppaper.com/image/data/ch%C3%A0o%20s%C3%A0n%20hhp/caecf57113e3f2bdabf2.jpg" alt="" style="width:100%;">
          </div>
        </div>
        <!-- Blog Content -->
        <div class="col-md-8 blog-content">
          <a href="#" class="blog-headline">
            <h5>CHÀO SÀN THÀNH CÔNG CỔ PHIẾU HHP</h5>
          </a>
          <div class="meta d-flex align-items-center">
            <a href="#">09/18/2019</a>
          </div>
          <p>Công ty CP Giấy Hoàng Hà Hải Phòng được HNX chấp thuận đăng ký niêm yết cổ phiếu từ ngày 01/08/2018 với mã chứng khoán là HHP...</p>
          <a href=""
          class="btn btn-outline-primary btn-sm mt-3">
          Đọc tiếp >>
        </a>
      </div>
    </div>
  </div>


</div>

<hr class="w-100 my-3">



<div class="row mt-3 codong-ct"  data-aos="fade-up" data-aos-delay="200">
 
  <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
    <div class="row">
      <div class="col-md-4">
       <div class="thumbnail text-center">
        <img src="http://hhppaper.com/image/cache/data/%E1%BA%A3nh%20ho%E1%BA%A1t%20%C4%91%E1%BB%99ng%20c%C3%B4ng%20ty/bong%20da-250x150.jpg" alt="" style="width:100%;">
      </div>
    </div>
    <!-- Blog Content -->
    <div class="col-md-8 blog-content">
      <a href="#" class="blog-headline">
        <h5>FC HOÀNG HÀ GIÀNH VỊ TRÍ Á QUÂN</h5>
      </a>
      <div class="meta d-flex align-items-center">
        <a href="#">09/18/2019</a>
      </div>
      <p>Giải bóng đá do LĐLĐ quận Hải An tổ chức. Tham dự giải có 08 đội bóng chia làm 2 bảng thì đấu 1 lượt tính điểm để chọn ra 2 đội đứng đầu mỗi bảng tiến vào Bán kết...</p>
      <a href=""
      class="btn btn-outline-primary btn-sm mt-3">
      Đọc tiếp >>
    </a>
  </div>
</div>
</div>


</div>

<hr class="w-100 my-3">
<div class="row mt-3 codong-ct" data-aos="fade-up" data-aos-delay="200">
 
  <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
    <div class="row">
      <div class="col-md-4">
       <div class="thumbnail text-center">
        <img src="http://hhppaper.com/image/cache/data/%E1%BA%A3nh%20ho%E1%BA%A1t%20%C4%91%E1%BB%99ng%20c%C3%B4ng%20ty/thu%E1%BA%BF%202018/IMG_0366%20(Copy)-250x150.jpg" alt="" style="width:100%;height: 100%">
      </div>
    </div>
    <!-- Blog Content -->
    <div class="col-md-8 blog-content">
      <a href="#" class="blog-headline">
        <h5>HHP ĐÓN NHẬN BẰNG KHEN CỦA BTC </h5>
      </a>
      <div class="meta d-flex align-items-center">
        <a href="#">09/18/2019</a>
      </div>
      <p>Sáng 11/10/2018, tại Trung tâm Hội nghị thành phố Hải Phòng, Cục Thuế thành phố tổ chức Hội nghị tuyên dương tổ chức, cá nhân...</p>
      <a href=""
      class="btn btn-outline-primary btn-sm mt-3">
      Đọc tiếp >>
    </a>
  </div>
</div>
</div>
</div>

<hr class="w-100 my-3">
<div class="row mt-3 codong-ct" data-aos="fade-up" data-aos-delay="200">
 
  <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
    <div class="row">
      <div class="col-md-4">
       <div class="thumbnail text-center">
        <img src="http://hhppaper.com/image/cache/data/tin%20t%E1%BB%A9c/Lao%20%C4%91%E1%BB%99ng%20gi%E1%BB%8Fi/1-250x150.png" alt="" style="width:100%;height: 100%">
      </div>
    </div>
    <!-- Blog Content -->
    <div class="col-md-8 blog-content">
      <a href="#" class="blog-headline">
        <h5>CUỘC THI LAO ĐỘNG GIỎI 2019</h5>
      </a>
      <div class="meta d-flex align-items-center">
        <a href="#">09/18/2019</a>
      </div>
      <p>Công ty CP Giấy Hoàng Hà Hải Phòng (Công ty giấy Hoàng Hà) vừa phát động và tổ chức thành công Cuộc thi Lao động giỏi 2019 tại Nhà máy Hải Phòng và Nhà máy Hà Nam...</p>
      <a href=""
      class="btn btn-outline-primary btn-sm mt-3">
      Đọc tiếp >>
    </a>
  </div>
</div>
</div>
</div>

<hr class="w-100 my-3">
<div class="row mt-3 codong-ct" data-aos="fade-up" data-aos-delay="200">
 
  <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
    <div class="row">
      <div class="col-md-4">
       <div class="thumbnail text-center">
        <img src="http://hhppaper.com/image/cache/data/%E1%BA%A3nh%20ho%E1%BA%A1t%20%C4%91%E1%BB%99ng%20c%C3%B4ng%20ty/IMG_1978.jpg%20copy-250x150.jpg" alt="" style="width:100%;height: 100%">
      </div>
    </div>
    <!-- Blog Content -->
    <div class="col-md-8 blog-content">
      <a href="#" class="blog-headline">
        <h5>PHÁT TRIỂN BỀN VỮNG DỰA TRÊN GIÁ TRỊ CỐT LÕI</h5>
      </a>
      <div class="meta d-flex align-items-center">
        <a href="#">09/18/2019</a>
      </div>
      <p>Trải qua chặng đường hơn 06 năm xây dựng và phát triển, đến nay Công ty Giấy Hoàng Hà đã có những bước tăng trưởng mạnh mẽ cả về quy mô cũng như chất lượng...</p>
      <a href=""
      class="btn btn-outline-primary btn-sm mt-3">
      Đọc tiếp >>
    </a>
  </div>
</div>
</div>
</div>

</div>


<!-- tin tức trong ngành -->


<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
 <div class="row mt-3 codong-ct">
   
  <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
    <div class="row">
      <div class="col-md-4">
       <div class="thumbnail text-center mt-3 ml-3">
        <img src="http://vppa.vn/wp-content/uploads/2019/09/20190916_114300.jpg" alt="" style="width:100%;height: 100%">
      </div>
    </div>
    <!-- Blog Content -->
    <div class="col-md-8 blog-content">
      <a href="#" class="blog-headline">
        <h5>Hiệp hội Giấy và Bột giấy Việt Nam tiếp, làm việc với Đại học công nghệ Hoa Nam, Trung Quốc</h5>
      </a>
      <div class="meta d-flex align-items-center">
        <a href="#">09/18/2019</a>
      </div>
      <p>Ngày 16 tháng 9 năm 2019, tại Văn phòng Hiệp hội Giấy và Bột giấy Việt Nam, Ông Đặng Văn Sơn – Phó Chủ tịch, Tổng Thư ký Hiệp hội Giấy và Bột Giấy Việt Nam...</p>
      <a href=""
      class="btn btn-outline-primary btn-sm mt-3">
      Đọc tiếp >>
    </a>
  </div>
</div>
</div>


</div>

<div class="row mt-3 codong-ct">
 
  <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
    <div class="row">
      <div class="col-md-4">
       <div class="thumbnail text-center mt-3 ml-3">
        <img src="http://vppa.vn/wp-content/uploads/2019/09/vinapaco-1.jpg" alt="" style="width:100%;height: 100%">
      </div>
    </div>
    <!-- Blog Content -->
    <div class="col-md-8 blog-content">
      <a href="#" class="blog-headline">
        <h5>Vinapaco: Hơn 5 tỷ đồng đầu tư hệ thống quan trắc nước, khí thải tự động</h5>
      </a>
      <div class="meta d-flex align-items-center">
        <a href="#">09/18/2019</a>
      </div>
      <p>Dự kiến trong quý 3/2019 Vinapaco sẽ nghiệm thu, đưa vào vận hành chính thức hệ thống quan trắc nước thải tự động và truyền dữ liệu...</p>
      <a href=""
      class="btn btn-outline-primary btn-sm mt-3">
      Đọc tiếp >>
    </a>
  </div>
</div>
</div>

<div class="row mt-3 codong-ct">
 
  <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
    <div class="row">
      <div class="col-md-4">
       <div class="thumbnail text-center mt-3 ml-3">
        <img src="http://vppa.vn/wp-content/uploads/2019/09/vinapaco-1.jpg" alt="" style="width:100%;height: 100%">
      </div>
    </div>
    <!-- Blog Content -->
    <div class="col-md-8 blog-content">
      <a href="#" class="blog-headline">
        <h5>Mô hình kinh tế tuần hoàn: Câu chuyện từ doanh nghiệp ngành giấy</h5>
      </a>
      <div class="meta d-flex align-items-center">
        <a href="#">09/18/2019</a>
      </div>
      <p>Sử dụng hơn 95% nguyên liệu đã qua sử dụng, chi hàng triệu USD mỗi năm cho công tác xử lý chất thải, Công ty Lee & Man Việt Nam...</p>
      <a href=""
      class="btn btn-outline-primary btn-sm mt-3">
      Đọc tiếp >>
    </a>
  </div>
</div>
</div>


</div>

</div>
</div>
</div>


</div>


<!-- cột bên phải -->
<div class="col-md-3 tin-tuc-content"  data-aos="fade-up" data-aos-delay="400">
  <ul class="list-group" >
    <li class="list-group-item text-center font-weight-bold" style="background-color: #058ff7 ; color: white" >TIN MỚI</li>
    <li class="list-group-item">
      <div class="row">
        <div class="col-md-4 " style="padding:0"><img src="http://hhppaper.com/image/data/tin%20t%E1%BB%A9c/paper_FMTV.jpg" style="width: 100%">
        </div>
        <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
          <span>Giá giấy và bột giấy thế giới tăng mạnh  </span>
        </div>
      </div>
    </li>
    <li class="list-group-item">
      <div class="row">
        <div class="col-md-4 " style="padding:0"><img src="http://www.ppivn.vn/userfiles/giaysanphamgiay_QWBM.jpeg" style="width: 100%">
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
        <div class="col-md-4 " style="padding:0"><img src="http://hhppaper.com/image/data/tin%20t%E1%BB%A9c/paper_FMTV.jpg" style="width: 100%">
        </div>
        <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
          <span>Giá giấy và bột giấy thế giới tăng mạnh  </span>
        </div>
      </div>
    </li>
    <li class="list-group-item">
      <div class="row">
        <div class="col-md-4 " style="padding:0"><img src="http://www.ppivn.vn/userfiles/giaysanphamgiay_QWBM.jpeg" style="width: 100%">
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

<div class="mt-4">
 <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
</div>

</div>
@endsection
