
  <!--service-->
  <section id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4">
          <h2 class="ser-title">Dịch vụ và tiện ích</h2>
          <hr class="botm-line">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris cillum.</p>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-stethoscope"></i>
            </div>
            <div class="icon-info">
              <h4>24 Hour Support</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-ambulance"></i>
            </div>
            <div class="icon-info">
              <h4>Emergency Services</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-user-md"></i>
            </div>
            <div class="icon-info">
              <h4>Medical Counseling</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="service-info">
            <div class="icon">
              <i class="fa fa-medkit"></i>
            </div>
            <div class="icon-info">
              <h4>Premium Healthcare</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ service-->
  <!--cta-->
  <section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="schedule-tab" style='margin-left:100px;'>
          <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>Xem video siêu âm</h3>
              <p>Xem lại hình ảnh siêu âm mọi lúc mọi nơi </p>
              <a href="#" class="medi-info-btn">Xem</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3>Lịch làm việc của bác sĩ</h3>
              <p>Dễ dàng tra cứu lịch của bác sĩ</p>
              <a href="#" class="medi-info-btn">Xem</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 mt-boxy-3">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
              <h3>Hỏi đáp</h3>
              <p>Trả lời những câu hỏi nhanh nhất</p>
              <a href="#" class="medi-info-btn">Xem</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">PHÒNG KHÁM ĐA KHOA 125 THÁI THỊNH RA MẮT DỊCH VỤ SIÊU ÂM VIP E6
<br>Ultimate Dream</h2>
            <hr class="botm-line">
            <p class="sec-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
            <a href="" style="color: #0cb8b6; padding-top:10px;">Know more..</a>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
              <iframe width="700" height="400" src="https://www.youtube.com/embed/ZaZVCN8SbHM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <h3>PHÒNG KHÁM ĐA KHOA 125 THÁI THỊNH RA MẮT DỊCH VỤ SIÊU ÂM VIP E6</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>It's something important you want to know.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ about-->
  <!--doctor team-->
  <section id="doctor-team" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Tin tức</h2>
          <hr class="botm-line">
        </div>
    {foreach from=$posts item=item}
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="thumbnail">
            <a href="/bai-viet/{$item.slug}"><img src="{base_url($item.path)}/{$item.name}" alt="..." class="team-img"></a>
            <div class="caption">
              <a href='/bai-viet/{$item.slug}'>{$item.title}</a>
              <p>{readMoreHelper($item.content)}</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
    {/foreach}
        {* <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor2.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Iai Donas</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor3.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Amanda Denyl</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-6">
          <div class="thumbnail">
            <img src="img/doctor4.jpg" alt="..." class="team-img">
            <div class="caption">
              <h3>Jason Davis</h3>
              <p>Doctor</p>
              <ul class="list-inline">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div> *}
      </div>
    </div>
  </section>
  <!--/ doctor team-->
  <!--testimonial-->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">see what patients are saying?</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Alex<span>Texas</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Alex<span>Texas</span></h3>
          </div>
        </div>
        <div class="col-md-4 col-sm-4">
          <div class="testi-details">
            <!-- Paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="testi-info">
            <!-- User Image -->
            <a href="#"><img src="img/thumb.png" alt="" class="img-responsive"></a>
            <!-- User Name -->
            <h3>Alex<span>Texas</span></h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ testimonial-->
  <!--cta 2-->
  <section id="cta-2" class="section-padding">
    <div class="container">
      <div class=" row">
        <div class="col-md-2"></div>
        <div class="text-right-md col-md-4 col-sm-4">
          <h2 class="section-title white lg-line">« Giới thiệu về <br> chúng tôi »</h2>
        </div>
        <div class="col-md-6 col-sm-5">
          Phòng khám M được thành lập 24/3/2014 do bác sỹ XX là chủ phòng khám đồng thời là người chịu trách nhiệm chuyên môn kỹ thuật. Bác sỹ Cương tốt nghiệp chuyên khoa cấp I chuyên ngành chẩn đoán hình ảnh tại Đại học Y Hà Nội và gần 20 năm kinh nghiệm làm việc tại Viện Giám định trung ương, phòng khám 10A Hà Đông…rất mong được phục vụ Quý khách
          Phương châm hoạt động: Tận tình – Hiệu quả.
          <p class="text-right text-primary"><i>— Bac si xx</i></p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Liên hệ</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Thông tin liên hệ</h3>
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>321 Hà Nội<br>Hà Nội</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@companyname.com</p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+1 800 123 1234</p>
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            {* <h3 class="cnt-ttl">Để lại thông tin liên hệ</h3> *}
            <div class="space"></div>
            <form action="/?mc=contact&site=create" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Tên của bạn" required />

              </div>
              <div class="form-group">
                <input type="text" class="form-control br-radius-zero" name="phone" placeholder="Số điện thoại" required/>

              </div>
              <div class="form-group">
                <textarea class="form-control br-radius-zero" name="content" rows="5" required placeholder="Nội dung"></textarea>
              </div>

              <div class="form-action">
                <button type="submit" class="btn btn-form">Gửi thông tin liên hệ</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ contact-->