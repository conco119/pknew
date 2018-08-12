  <!--contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Liên hệ</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <div class="space"></div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="./?mc=contact&site=create" method="post" role="form">
              <div class="form-group">
                <label> Tên của bạn </label>
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Tên của bạn" required/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <label> Số điện thoại </label>
                <input type="text" class="form-control br-radius-zero" name="phone" id="subject" placeholder="Số điện thoại" data-rule="minlen:10" data-msg="Số điện thoại phải lớn hơn 10 ký tự" required />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <label> Nội dung </label>
                <textarea class="form-control br-radius-zero" name="content" rows="5" data-rule="required" data-msg="Hãy ghi một điều gì đó" placeholder="Message" required></textarea>
                <div class="validation"></div>
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
  <script>
      $(document).ready(function(){
          $("#banner li.active").attr('class', ' ');
          $("#contact-menu").attr('class', 'active');
      })
  </script>
