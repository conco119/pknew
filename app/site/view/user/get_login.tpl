
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">

        <div class="col-md-offset-3 col-sm-8 marb20">
          <div class="contact-info">
            {*<h3 class="cnt-ttl">Đăng nhập để xem video</h3>*}
            <div class="space"></div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="./?mc=user&site=post_login" method="post" role="form">
              <div class="form-group">
                <label> Mã bệnh nhân</label>
                <input type="text" name="code" class="form-control br-radius-zero" placeholder="Mã bệnh nhân" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <label> Số điện thoại</label>
                <input type="number" class="form-control br-radius-zero" name="phone" placeholder="Số điện thoại" data-rule="minlen:10" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-action">
                <button type="submit" class="btn btn-form text-center">Đăng nhập</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
      $(document).ready(function(){
          $("#banner li.active").attr('class', ' ');
          $("#login-menu").attr('class', 'active');
      })
  </script>
  <!--/ contact-->
  <script>
$(document).ready(function() {

	if( "{$notification.status}" == "success" || "{$notification.status}" == "error")
	{
    alert("Tài khoản hoặc mật khẩu không đúng");
	}
})
</script>