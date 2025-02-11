<header>
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-6"><i class="icon-phone"></i><strong>0399002999</strong></div>
                <div class="col-6">
                    <ul id="top_links">
                        <li><a href="#sign-in-dialog" id="access_link">Đăng nhập</a></li>
                        <!--<li><a href="wishlist.html" id="wishlist_link">Wishlist</a></li>-->
                    </ul>
                </div>
            </div><!-- End row -->
        </div><!-- End container-->
    </div><!-- End top line-->

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div id="logo_home">
                  <h1><a href="<?php echo base_url(); ?>" title="City tours travel template">City Tours travel</a></h1>
              </div>
            </div>
            <nav class="col-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                <div id="header_menu">
                    <img src="<?php echo base_url(); ?>assets/default/img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                </div>
                <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                <ul>
                    <li class="submenu">
                        <a href="<?php echo base_url(); ?>" class="show-submenu">Home</a>
                    </li>
                    <li class="submenu">
                        <a href="<?php echo base_url(); ?>tour/?view=1" class="show-submenu">Tours</a>
                    </li>
                    <li class="submenu">
                        <a href="<?php echo base_url(); ?>check" class="show-submenu">Tra đơn đặt tour</a>
                    </li>
                </ul>
                </div><!-- End main-menu -->
                <ul id="top_tools">
                    <li>
                        <a href="javascript:void(0);" class="search-overlay-menu-btn"><i class="icon_search"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div><!-- container -->
</header>

<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
      <h3>Đăng Nhập</h3>
  </div>
  <form>
      <div class="sign-in-wrapper">
        <!--<a href="#0" class="social_bt facebook">Login with Facebook</a>
        <a href="#0" class="social_bt google">Login with Google</a>
        <div class="divider"><span>Or</span></div>-->
        <div class="form-group">
          <label>Tên đăng nhập</label>
          <input type="text" class="form-control" name="email" id="email">
          <i class="icon_set_2_icon-105"></i>
      </div>
      <div class="form-group">
          <label>Mật khẩu</label>
          <input type="password" class="form-control" name="password" id="password" value="">
          <i class="icon_lock_alt"></i>
      </div>
      <!--<div class="clearfix add_bottom_15">
          <div class="checkboxes float-left">
            <input id="remember-me" type="checkbox" name="check">
            <label for="remember-me">Remember Me</label>
        </div>
        <div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
    </div>-->
    <div class="text-center"><input type="submit" value="Đăng nhập" class="btn_login"></div>
    <!--<div class="text-center">
      Don’t have an account? <a href="javascript:void(0);">Sign up</a>
  </div>
  <div id="forgot_pw">
      <div class="form-group">
        <label>Please confirm login email below</label>
        <input type="email" class="form-control" name="email_forgot" id="email_forgot">
        <i class="icon_mail_alt"></i>
    </div>
    <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
    <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div> -->
</div>
</div>
</form>
<!--form -->
</div>
<!-- /Sign In Popup -->

<!-- Search Menu -->
<div class="search-overlay-menu">
    <span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
    <form role="search" id="searchform" action="<?php echo base_url(); ?>tour" method="get">
      <input id="searchbox" value="" name="q" type="search" placeholder="Search..." />
      <button id="something" type="submit"><i class="icon_set_1_icon-78"></i>
      </button>
  </form>
</div>
  <!-- End Search Menu -->