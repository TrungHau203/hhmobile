<header id="header">
  <nav class="navbar bc-color__primary header-top nav__pc">
    <ul class=" header-top__list container">
      <li><a href="#">Bản mobile</a></li>
      <li><a href="#">Giới thiệu</a></li>
      <li><a href="#">Sản phẩm đã xem</a></li>
      <li><a href="#">Trung tâm bảo hành</a></li>
      <li><a href="#">Hệ thống 106 siêu thị</a></li>
      <li><a href="#">Tuyển dụng</a></li>
      <li><a href="#">Tra cứu đơn hàng</a></li>
      <li>
      <?php if(empty($_SESSION['id'])){ ?>
        <a href="signIn.php">
          Đăng nhập
        </a>
      <?php } else{ ?>
        <div class="header__navbar-item header__navbar-user">
        <a class="login-item" href="#">Chào <?php echo $_SESSION['name']; ?></a>
            <ul class="header__navbar-user-menu">
              <li class="header__navbar-user-item">
                <a href="">Tài khoản của tôi</a>
              </li>
              <li class="header__navbar-user-item">
                <a href="">Địa chỉ của tôi</a>
              </li>
              <li class="header__navbar-user-item">
                <a href="view_cart.php">Đơn mua</a>
              </li>
              <li class="header__navbar-user-item header__navbar-user-item-separate">
                <a href="signOut.php">Đăng xuất</a>
              </li>
            </ul>
        </div>
      <?php } ?>
        
        
      </li>
    </ul>
  </nav>
  <nav class="navbar container bc-color">
    <div class="container-fluid bc-color">
      <label for="nav__mobile-input" class="navbar__icon" >
        <i class="fas fa-bars"></i>
      </label>
      <input type="checkbox" name="" id="nav__mobile-input"  class="nav-input">
      <div class="nav__mobile">
        <label for="nav__mobile-input"class="nav__mobile-close">
          <i class="fa-solid fa-xmark"></i>
        </label>
        <ul class=" headerMobile__list ">
          <li>
            <a href="category.php">
              <i class="fa-solid fa-mobile-screen-button"></i>
              <span>ĐIỆN THOẠI</span>
            </a>

          </li>
          <li>
            <a href="#">
              <i class="fa-solid fa-clock"></i>
              <span>ĐỒNG HỒ</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa-solid fa-laptop"></i>
              <span>LAPTOP</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa-solid fa-tv"></i>
              <span>SMART TV</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa-solid fa-tablet"></i>
              <span>TABLET</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa-solid fa-headphones"></i>
              <span>TAI NGHE</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa-solid fa-house"></i>
              <span>SMART HOME</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa-solid fa-plug"></i>
              <span>PHỤ KIỆN</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa-solid fa-gamepad"></i>
              <span>ĐỒ CHƠI CÔNG NGHỆ</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa-solid fa-screwdriver-wrench"></i>
              <span>SỬA CHỮA</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa-solid fa-sim-card"></i>
              <span>SIM THẺ</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa-solid fa-newspaper"></i>
              <span>TIN TỨC</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa-solid fa-bolt-lightning"></i>
              <span>ƯU ĐÃI HOT</span>
            </a>
          </li>
        </ul>
      </div>
      <label for="nav__mobile-input" class="nav__overlay"></label>
      <a href="index.php" class="navbar-brand">
        <img src="https://hoanghamobile.com/Content/web/img/logo-text.png" alt="lỗi ảnh">
      </a>
      <div class="header__cart cart-mobile">
        <div class="header__cart-wrap cart__product">
          <a href="view_cart.php">
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="header__cart-wrap-notice">
              0
            </span>
          </a>
        </div>
      </div>
      
      <form class="d-flex header__search" role="search" action="./search.php" method="get">
        <input type="search" class="form-control me-2 header__search-input" placeholder="Hôm nay bạn tìm gì" name="searchTitle">
        <button class="header__search-btn">
          <i class="header__search-btn-icon fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
      <div class="header__ship">
        <div class="header__ship-check bc-color__primary br__16 check__product">
          <a href="" class="header__ship-link">
            <i class="fa-solid fa-truck-fast"></i>
            <span>Kiểm tra đơn hàng</span>
          </a>
          
        </div>
      </div>
      <div class="header__cart cart-pc">
        <div class="header__cart-wrap cart__product">
          <a href="view_cart.php">
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="header__cart-wrap-notice ">3</span>
          </a>
        </div>
      </div>
    </div>
    
  </nav>
  <nav class="navbar bc-color__primary header-bottom container br__16 m__10 nav__pc">
    <ul class=" header-bottom__list ">
      <li class="li_phone"> 
        <a href="category.php?id=1" class="buy_phone">
          <i class="fa-solid fa-mobile-screen-button"></i>
          <p>ĐIỆN THOẠI</p>
        </a>
        <div class="container p__0 w-color phone-hover br__16">
          <ul class="p__0-16">
            <h4>
              Hãng sản xuất
            </h4>
            <li>
              <a href="product.php?id=1">Iphone</a>
            </li>
            <li>
              <a href="product.php?id=5">XiaoMi</a>
            </li>
          </ul>
        </div>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-clock"></i>
          <p>ĐỒNG HỒ</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-laptop"></i>
          <p>LAPTOP</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-tv"></i>
          <p>SMART TV</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-tablet"></i>
          <p>TABLET</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-headphones"></i>
          <p>TAI NGHE</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-house"></i>
          <p>SMART HOME</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-plug"></i>
          <p>PHỤ KIỆN</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-gamepad"></i>
          <p>ĐỒ CHƠI CÔNG NGHỆ</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-screwdriver-wrench"></i>
          <p>SỬA CHỮA</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-sim-card"></i>
          <p>SIM THẺ</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-newspaper"></i>
          <p>TIN TỨC</p>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="fa-solid fa-bolt-lightning"></i>
          <p>ƯU ĐÃI HOT</p>
        </a>
      </li>
    </ul>
  </nav>
</header>