<!-- =====  HEADER START  ===== -->
<header id="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="header-top-left">
                        <div class="contact"><a href="tel:[+6289630080545]">Call now !</a> <span class="hidden-xs hidden-sm hidden-md">+62 896-3008-0545</span></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8">
                    <ul class="header-top-right text-right">
                        <li class="language dropdown"> <span class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Language <span class="caret"></span> </span>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                            </ul>
                        </li>
                        <?php if ($this->session->userdata('logged_in') === true) : ?>
                            <li class="account"><a href="<?= base_url('auth/logout') ?>">Log Out</a></li>
                        <?php else : ?>
                            <li class="account"><a href="<?= base_url('auth') ?>">Log in</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="main-search mt_40">
                        <input id="search-input" name="search" value="" placeholder="Search" class="form-control input-lg" autocomplete="off" type="text">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
                        </span> </div>
                </div>
                <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="<?= base_url() ?>"> <img alt="OYEENok" src="<?= asset_url() ?>images/logo.png"> </a> </div>
                <div class="col-xs-6 col-sm-4 shopcart">
                    <div id="cart" class="btn-group btn-block mtb_40">
                        <button type="button" class="btn" data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true"><span id="shippingcart">Shopping cart</span><span id="cart-total">items (0)</span> </button>
                    </div>
                    <div id="cart-dropdown" class="cart-menu collapse">
                        <ul>
                            <li>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><a href="#"><img src="<?= asset_url() ?>images/product/70x84.jpg" alt="iPod Classic" title="iPod Classic"></a></td>
                                            <td class="text-left product-name"><a href="#">MacBook Pro</a> <span class="text-left price">$20.00</span>
                                                <input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
                                            </td>
                                            <td class="text-center"><a class="close-cart"><i class="fa fa-times-circle"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><a href="#"><img src="<?= asset_url() ?>images/product/70x84.jpg" alt="iPod Classic" title="iPod Classic"></a></td>
                                            <td class="text-left product-name"><a href="#">MacBook Pro</a> <span class="text-left price">$20.00</span>
                                                <input class="cart-qty" name="product_quantity" min="1" value="1" type="number">
                                            </td>
                                            <td class="text-center"><a class="close-cart"><i class="fa fa-times-circle"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-right"><strong>Sub-Total</strong></td>
                                            <td class="text-right">$2,100.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                            <td class="text-right">$2.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>VAT (20%)</strong></td>
                                            <td class="text-right">$20.00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>Total</strong></td>
                                            <td class="text-right">$2,122.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li>
                                <form action="cart_page.html">
                                    <input class="btn pull-left mt_10" value="View cart" type="submit">
                                </form>
                                <form action="checkout_page.html">
                                    <input class="btn pull-right mt_10" value="Checkout" type="submit">
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <nav class="navbar">
                <p>Menu</p>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="i-bar"><i class="fa fa-bars"></i></span></button>
                <div class="collapse navbar-collapse js-navbar-collapse">
                    <ul id="menu" class="nav navbar-nav">
                        <li> <a href="<?= base_url() ?>">Home</a></li>
                        <li> <a href="<?= base_url('view/category/1') ?>">Anime</a></li>
                        <li> <a href="<?= base_url('view/category/2') ?>">Manga</a></li>
                        <li> <a href="<?= base_url('view/category/3') ?>">Light Novel</a></li>
                        <li> <a href="#">About us</a></li>
                        <li> <a href="<?= base_url('admin') ?>">Admin Page</a></li>
                        <!-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages </a>
                            <ul class="dropdown-menu">
                                <li> <a href="contact_us.html">Contact us</a></li>
                                <li> <a href="cart_page.html">Cart</a></li>
                                <li> <a href="checkout_page.html">Checkout</a></li>
                                <li> <a href="product_detail_page.html">Product Detail Page</a></li>
                                <li> <a href="single_blog.html">Single Post</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </nav>
        </div>
    </div>
</header>
<!-- =====  HEADER END  ===== -->