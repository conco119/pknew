<div class="">
    <a class="hiddenanchor" id="toregister"></a> <a class="hiddenanchor" id="tologin"></a>
    <div id="wrapper">
        <div id="login" class="animate form">
            <section class="login_content">
                <form method="post" action="./admin?mc=pub&site=postLogin">
                    <h1>Đăng nhập</h1>
                    <div>
                        <input type="text" autofocus class="form-control text-center" name="username" placeholder="Tên đăng nhập" required value='admin'/>
                    </div>
                    <div>
                        <input type="password" class="form-control text-center" name="password" placeholder="Mật khẩu" required  value='12345'/>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-default submit" name="submit" value="Đăng nhập">
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <div class="clearfix"></div>
                        <br />
                        <div>
                        </div>
                    </div>
                </form>
                <!-- form -->
            </section>
            <!-- content -->
        </div>

    </div>
</div>
<script>
$(document).ready(function() {
    if( "{$notification.status}" == "success" || "{$notification.status}" == "error")
    {
        var notice = new PNotify({
            title: "{$notification.title}",
            text: "{$notification.text}",
            type: "{$notification.status}",
            mouse_reset: false,
            buttons: {
                sticker: false,
        }
        });
        notice.get().click(function () {
            notice.remove();
        });
    }
})
</script>

