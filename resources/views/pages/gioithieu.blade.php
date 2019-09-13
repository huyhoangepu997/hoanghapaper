
@extends('master-layout')
@section('title')
Giới thiệu
@endsection
@section('content')


<div class="banner-warp">
  <div class="banner">
    <div class="banner-member">
      <img src="images/anh-1.jpg" class="img-fluid" >
      <div class="banner-member-text">
        <div class="container">
          <div class="banner-member-text-title">
            <h2 class="font-bold text-center text-banner" data-aos="fade-up" data-aos-delay="200">GIỚI THIỆU</h2>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container " >
  <div class="row mt-5">

    <!-- cột bên trái -->
    <div class="col-md-12 mb-4"  data-aos="fade-up" data-aos-delay="100">
      <div class="codongs-tt-title" style="width: 105px" >
        <div  style="padding:10px; color: white">Giới thiệu <i class="fa fa-angle-down" aria-hidden="true" style="font-size: 14px"></i></div>
      </div>
      <div class="row"  style="margin: 0">
        <div class="nav flex-column nav-pills col-md-3 nav-content pr-0 codong-tt codongs-tt" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Về chúng tôi</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Cơ cấu tổ chức</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Cơ cấu bộ máy quản lý</a>
          <a class="nav-link" id="v-pills-settings-tab-1" data-toggle="pill" href="#v-pills-settings-1" role="tab" aria-controls="v-pills-settings-1" aria-selected="false">Danh sách cổ đông</a>
          <a class="nav-link" id="v-pills-settings-tab-2" data-toggle="pill" href="#v-pills-settings-2" role="tab" aria-controls="v-pills-settings-2" aria-selected="false">Danh sách công ty</a>
          <a class="nav-link" id="v-pills-settings-tab-3" data-toggle="pill" href="#v-pills-settings-3" role="tab" aria-controls="v-pills-settings-3" aria-selected="false">Hình ảnh</a>
          <a class="nav-link" id="v-pills-settings-tab-4" data-toggle="pill" href="#v-pills-settings-4" role="tab" aria-controls="v-pills-settings-4" aria-selected="false" style="
          border-bottom-width: 0px;
          ">Lời dạy của chúa</a>
        </div>


        <div class="tab-content col-md-9 " id="v-pills-tabContent"  data-aos="fade-up" data-aos-delay="400">

          <!-- về chúng tôi -->
          <div class="tab-pane fade show active pl-4" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h4 class="mt-3 text-gioithieu"  >VỀ CHÚNG TÔI</h4>
            <hr>
            <h4 class="mb-5" style="color: #058ff7">1.1 Giới thiệu chung về tổ chức niêm yết</h4>
            <!-- <br> -->
            <div class="table-responsive">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Tên công ty</td>
                    <td>CÔNG TY CỔ PHẦN GIẤY HOÀNG HÀ HẢI PHÒNG</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Tên giao dịch quốc tế</td>
                    <td>HAI PHONG HOANG HA PAPER JOINT STOCK COMPANY</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Mã chứng khoán</td>
                    <td>HHP</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Trụ sở chính</td>
                    <td>Số 194 đường Kiều Hạ, Phường Đông Hải 2, Quận Hải An, Thành phố Hải Phòng, Việt Nam</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Văn phòng đại diện</td>
                    <td>Số 29, ngõ 53 đường Nguyễn Khoái, Phường Bạch Đằng, Quận Hai Bà Trưng, Thành phố Hà Nội, Việt Nam</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Điện thoại</td>
                    <td>0225 3979952</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Fax</td>
                    <td>0225 3979951</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>Website</td>
                    <td><a href="www.hhppaper.com">www.hhppaper.com</a></td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>Giấy CNĐKKD</td>
                    <td>Số 0201282851 do Sở Kế hoạch và Đầu tư Hải Phòng cấp lần đầu ngày 05/11/2012, đăng ký thay đổi lần thứ 05 ngày 27/08/2019</td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>Vốn điều lệ đăng ký</td>
                    <td>180.000.000.000 (Một trăm tám mươi tỷ) đồng</td>
                  </tr>
                  <tr>
                    <th scope="row">11</th>
                    <td>Vốn thực góp</td>
                    <td>180.000.000.000 (Một trăm tám mươi tỷ) đồng</td>
                  </tr>
                  <tr>
                    <th scope="row">12</th>
                    <td>Người đại diện theo pháp luật</td>
                    <td>Bà Trần Thị Thu Phương - Tổng Giám đốc</td>
                  </tr>
                  <tr>
                    <th scope="row">13</th>
                    <td>Tài khoản ngân hàng</td>
                    <td>114.0000.97519 tại ngân hàng TMCP Công Thương Việt Nam - Chi nhánh Ngô Quyền</td>
                  </tr>
                  <tr>
                    <th scope="row">14</th>
                    <td>Ngày chính thức được chấp thuận là công ty đại chúng</td>
                    <td>Ngày 16/05/2018 (theo Văn bản số 3105/UBCK-GSĐC ngày 16/05/2018 của Ủy Ban Chứng Khoán Nhà Nước)</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <h4 class="my-4 text-uppercase" style="font-size: 20px;">Ngành nghề kinh doanh</h4>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" class="td-style">STT</th>
                    <th scope="col" class="td-style">Tên ngành, nghề kinh doanh</th>
                    <th scope="col">Mã ngành, nghề kinh doanh</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Sản xuất bột giấy, giấy và bìa</td>
                    <td class="td-style">1701 (Chính)</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">2</th>
                    <td>Sản xuất giấy nhăn, bìa nhăn, bao bì từ giấy và bìa</td>
                    <td rowspan="2" class="td-style">1702</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Sản xuất bao bì bằng giấy, bìa, giấy nhăn và giấy bìa</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">3</th>
                    <td>Sản xuất các sản phẩm khác từ giấy và bìa chưa được phân vào đâu</td>
                    <td rowspan="2" class="td-style">1709</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Sản xuất giấy viết, giấy in, giấy tráng phấn. Sản xuất, gia công giấy vệ sinh</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">4</th>
                    <td>Bán buôn đồ dùng khác cho gia đình</td>
                    <td rowspan="2" class="td-style">4649</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Giấy, bìa carton, giấy tráng phấn</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">5</th>
                    <td>Hoạt động dịch vụ hỗ trợ kinh doanh khác còn lại chưa được phân vào đâu</td>
                    <td rowspan="2" class="td-style">8299</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Dịch vụ xuất nhập khẩu hàng hóa</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">6</th>
                    <td>Bán buôn chuyên doanh khác chưa được phân vào đâu</td>
                    <td rowspan="2" class="td-style">4669</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Phế liệu, phế thải kim loại, phi kim loại (không bao gồm bán buôn các loại phế liệu nhập khẩu gây ô nhiễm môi trường), nguyên liệu làm giấy</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">7</th>
                    <td>Bán buôn máy móc, thiết bị và phụ tùng máy khác</td>
                    <td rowspan="2" class="td-style">4659</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Máy móc, thiết bị ngành giấy. Thiết bị thủy lực, máy nén khí, máy cơ khí, thiết bị phòng cháy chữa cháy, thiết bị bảo hộ lao động</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>In ấn</td>
                    <td class="td-style">1811</td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>Dịch vụ liên quan đến in</td>
                    <td class="td-style">1812</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">10</th>
                    <td>Bán buôn nhiên liệu rắn, lỏng, khí và các sản phẩm liên quan</td>
                    <td rowspan="2" class="td-style">4661</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Nhựa đường, than đá và nhiên liệu rắn khác, dầu thô, xăng dầu, khí đốt và các sản phẩm liên quan</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">11</th>
                    <td>Photo, chuẩn bị tài liệu và các hoạt động hỗ trợ văn phòng đặc biệt khác</td>
                    <td rowspan="2" class="td-style">8219</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Photo, chuẩn bị tài liệu</td>
                  </tr>
                  <tr>
                    <th scope="row">12</th>
                    <td>Kho bãi và lưu giữ hàng hóa</td>
                    <td class="td-style">5210</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">13</th>
                    <td>Lắp đặt máy móc và thiết bị công nghiệp</td>
                    <td rowspan="2" class="td-style">3320</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Lắp đặt máy móc, thiết bị ngành giấy</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">14</th>
                    <td>Hoạt động chuyên môn, khoa học và công nghệ khác chưa được phân vào đâu</td>
                    <td rowspan="2" class="td-style">7490</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Chuyển giao công nghệ sản xuất giấy</td>
                  </tr>
                  <tr>
                    <th scope="row">15</th>
                    <td>Kinh doanh bất động sản, quyền sử dụng đất thuộc chủ sở hữu, chủ sử dụng hoặc đi thuê</td>
                    <td class="td-style">6810</td>
                  </tr>
                  <tr>
                    <th scope="row">16</th>
                    <td>Bốc xếp hàng hóa</td>
                    <td class="td-style">5224</td>
                  </tr>
                  <tr>
                    <th scope="row">17</th>
                    <td>Vận tải hàng hóa bằng đường bộ</td>
                    <td class="td-style">4933</td>
                  </tr>
                  <tr>
                    <th scope="row">18</th>
                    <td>Vận tải hàng hóa đường thuỷ nội địa</td>
                    <td class="td-style">5022</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">19</th>
                    <td>Vận tải hành khách đường bộ khác</td>
                    <td rowspan="2" class="td-style">4932</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Vận tải hành khách bằng xe khách nội tỉnh, liên tỉnh. Vận tải hành khách bằng ô tô theo tuyến cố định và theo hợp đồng</td>
                  </tr>
                  <tr>
                    <th scope="row">20</th>
                    <td>Phá dỡ</td>
                    <td class="td-style">4311</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">21</th>
                    <td>Chuẩn bị mặt bằng</td>
                    <td rowspan="2" class="td-style">4312</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: San lấp mặt bằng</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">22</th>
                    <td>Hoạt động kiến trúc và tư vấn kỹ thuật có liên quan</td>
                    <td rowspan="2" class="td-style">7110</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Tư vấn lập dự án. Tư vấn lập hồ sơ mời thầu, hồ sơ dự thầu công trình xây dựng</td>
                  </tr>
                  <tr>
                    <th scope="row">23</th>
                    <td>Xây dựng nhà để ở</td>
                    <td class="td-style">4101</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">24</th>
                    <td>Hoạt động liên quan đến kế toán, kiểm toán và tư vấn về thuế</td>
                    <td rowspan="2" class="td-style">6920</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Dịch vụ tư vấn kế toán. Dịch vụ kế toán thuế</td>
                  </tr>
                  <tr>
                    <th scope="row">25</th>
                    <td>Xây dựng nhà không để ở</td>
                    <td class="td-style">4102</td>
                  </tr>
                  <tr>
                    <th scope="row">26</th>
                    <td>Xây dựng công trình đường sắt</td>
                    <td class="td-style">4211</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">27</th>
                    <td>Cho thuê xe có động cơ</td>
                    <td rowspan="2" class="td-style">7710</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Cho thuê ôtô; Cho thuê xe có động cơ khác</td>
                  </tr>
                  <tr>
                    <th scope="row">28</th>
                    <td>Xây dựng công trình đường bộ</td>
                    <td class="td-style">4212</td>
                  </tr>
                  <tr>
                    <th scope="row">29</th>
                    <td>Xây dựng công trình điện</td>
                    <td class="td-style">4221</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">30</th>
                    <td>Xây dựng công trình cấp, thoát nước</td>
                    <td rowspan="2" class="td-style">4222</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Xây dựng công trình thủy lợi</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">31</th>
                    <td>Xây dựng công trình chế biến, chế tạo</td>
                    <td rowspan="2" class="td-style">4293</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Xây dựng công trình công nghiệp</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">32</th>
                    <td>Xây dựng công trình kỹ thuật dân dụng khác</td>
                    <td rowspan="2" class="td-style">4299</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Xây dựng công trình dân dụng, cơ sở hạ tầng kỹ thuật khu công nghiệp, cơ sở hạ tầng khu đô thị</td>
                  </tr>
                </tbody>
              </table>
              <h4 class="my-4" style="color: #058ff7">1.2 Quá trình hình thành và phát triển</h4>
              <p>Công ty Cổ phần Giấy Hoàng Hà Hải Phòng (mã số doanh nghiệp 0201282851) có trụ sở chính đặt tại Số 194 đường Kiều Hạ, phường Đông Hải 2, quận Hải An, thành phố Hải Phòng, Việt Nam được thành lập bởi 05 cổ đông sáng lập vào ngày 05 tháng 11 năm 2012, với số vốn góp ban đầu là 18 tỷ đồng để thực hiện dự án Tái cấu trúc Nhà máy sản xuất giấy Đức Dương.</p>
              <p>Nhà máy sản xuất giấy Đức Dương do Hợp tác xã Xí nghiệp sản xuất Giấy Đức Dương (Xí nghiệp Đức Dương) là chủ đầu tư được khởi công xây dựng năm 2007, sau gần 2 năm xây dựng và lắp đặt, dây chuyền sản xuất giấy Kraft công suất 15.000 tấn/năm được hoàn thành và bắt đầu đưa vào sử dụng từ đầu năm 2009. Qua thời gian vận hành chạy thử thành công, đến năm 2010 Nhà máy đã đi vào sản xuất, tuy nhiên sản lượng thời điểm này chỉ đạt 30-50% công suất với dòng sản phẩm giấy Kraft sóng thường. Sang năm 2011 Ngân hàng áp dụng việc giảm hạn mức vay, Xí nghiệp Đức Dương gặp khó khăn về vốn, chỉ hoạt động cầm chừng và đến cuối năm 2011 đã phải cho dừng sản xuất, không còn khả năng trả nợ và có nguy cơ phá sản. Chính vì vậy, Ngân hàng đã ra thông báo tìm kiếm đối tác để bán tài sản thế chấp của Xí nghiệp Đức Dương nhằm thu hồi nợ.</p>
              <p>Được sự giới thiệu của Vietinbank, tháng 09/2012 các cổ đông sáng lập đã khảo sát thực tế tài sản của Xí nghiệp Đức Dương, sau khi cân nhắc, tính toán, lên phương án, bàn bạc, trao đổi thống nhất với Ngân hàng đã quyết định thành lập Công ty Cổ phần Giấy Hoàng Hà Hải Phòng vào tháng 11/2012 để mua lại toàn bộ Nhà máy của Xí nghiệp Đức Dương, tận dụng toàn bộ cơ sở vật chất và pháp lý hiện có, tiến hành đầu tư cải tạo, bổ sung, nâng cấp dây chuyền để chuyển đổi sang dòng sản phẩm giấy Kraft sóng gia keo. Do có thế mạnh về công nghệ sản xuất giấy, khả năng, tiềm lực về nguồn vốn và kinh nghiệm quản lý, chỉ 8 tháng sau khi nhận bàn giao, Công ty đã đưa Nhà máy giấy Hoàng Hà đi vào hoạt động ổn định (tiết kiệm được rất nhiều thời gian nếu đầu tư mới một nhà máy giấy) với dòng sản phẩm giấy Kraft sóng gia keo (giấy bao bì carton) mang thương hiệu Giấy Hoàng Hà. Cho đến nay, các chỉ tiêu về sản lượng, doanh thu, lợi nhuận của Công ty liên tục tăng trưởng qua các năm.</p>
          </div>
        
          <div class="tab-pane fade pl-4" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <h4 class="mt-3 text-gioithieu">SƠ ĐỒ TỔ CHỨC</h4>
            <hr>
            <p>Hiện tại, CTCP Giấy Hoàng Hà Hải Phòng được tổ chức và hoạt động tuân thủ theo:</p>
            <ul style="margin-left: 20px;">
              <li>Luật Doanh nghiệp được Quốc hội nước Cộng hòa xã hội chủ nghĩa Việt Nam ban hành và có hiệu lực từ ngày 01/07/2014.</li>
              <li>Điều lệ Công ty được ĐHĐCĐ thường niên năm 2018 thông qua ngày 13/04/2018 có sửa đổi, bổ sung theo Điều lệ mẫu áp dụng cho Công ty đại chúng.</li>
              <li>Trong quá trình hoạt động và phát triển, bộ máy của Công ty đã được xây dựng, điều chỉnh và kiện toàn để phù hợp với chiến lược phát triển, yêu cầu thực tế và đặc điểm hoạt động của Công ty.</li>
            </ul>
            <h5 class="text-center">Sơ đồ 1: Cơ cấu tổ chức CTCP Giấy Hoàng Hà Hải Phòng</h5>
            <div class="text-center"><img src="{{ asset('images/about-1.PNG') }}" alt="" ></div>
            <h5>Công ty mẹ: Công ty CP Giấy Hoàng Hà Hải Phòng</h5>
            <ul style="margin-left: 20px;">
              <li>Địa chỉ trụ sở chính: Số 194 đường Kiều Hạ, phường Đông Hải 2, quận Hải An, thành phố Hải Phòng, Việt Nam</li>
              <li>VPĐD tại Hà Nội: Số 29, ngõ 53 Nguyễn Khoái, Phường Bạch Đằng, quận Hai Bà Trưng, thành phố Hà Nội.</li>
              <li>Điện thoại: 0225 3979952</li>
              <li>Fax: 0225 3979951</li>
              <li>Website: hhppaper.com</li>
              <li>Email: hhppaper@gmail.com</li>
            </ul>
          </div>





        </div>
        <!-- cột bên phải -->
        <!-- <div class="col-md-3 tin-tuc-content"  data-aos="fade-up" data-aos-delay="700">
          <ul class="list-group" >
            <li class="list-group-item text-center font-weight-bold" style="background-color: #058ff7 ; color: white" >TIN TỨC</li>
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
        </div> -->

      </div>




    </div>
    @endsection
