<header class="header">
            <div class="top_menu row main_box">
                <div class="container">
                    <div class="float-left">
                        <a href="mailto:support@colorlib.com">support@colorlib.com</a>
                        <a href="#">Bienvenida Gente Cool</a>
                    </div>
                    <div class="float-right">
                        <ul class="header_social">
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-behance"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>                 
            </div>             
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light main_box ">
                    <div class="container py-1 d-flex justify-content-center flex-sm-row justify-content-sm-between flex-column">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h d-flex align-items-center mb-n3 mb-sm-auto flex-sm-row justify-content-sm-around align-items-sm-center flex-column justify-content-center" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php echo  get_custom_logo(); ?> 
                            <h1 class="pl-0 text-center mt-0 mr-0 mb-0 ml-2"><?php bloginfo( 'name' ); ?></h1>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            <span class="navbar-toggler-icon"></span>
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                               <!-- <li class="nav-item active">
                                    <a class="nav-link text-center" href="index.html">Home</a>
                                </li>                                 
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="category.html">Shop Category</a>

                                        <li class="nav-item">
                                            <a class="nav-link" href="single-product.html">Product Details</a>

                                        <li class="nav-item">
                                            <a class="nav-link" href="checkout.html">Product Checkout</a>
                                            <li class="nav-item">
                                                <a class="nav-link" href="cart.html">Shopping Cart</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="confirmation.html">Confirmation</a>
                                            </li>
                                    </ul>
                                </li>                                 
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="blog.html">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="single-blog.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>                                 
                                <li class="nav-item submenu dropdown">
                                    <a href="#" class="nav-link dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a class="nav-link" href="login.html">Login</a>

                                        <li class="nav-item">
                                            <a class="nav-link" href="tracking.html">Tracking</a>
                                            <li class="nav-item">
                                                <a class="nav-link" href="elements.html">Elements</a>
                                            </li>
                                    </ul>
                                </li>                                 
                                <li class="nav-item">
                                    <a class="nav-link text-center" href="contact.html">Contact</a>
                                </li> -->
                                <?php 
                            wp_nav_menu( array(
                                'theme_location' => 'menu_superior',
                                'menu_id'        => 'primary-menu',
                            ) ); ?>
                            </ul> 
                            <ul class="nav navbar-nav navbar-right">
                                <li class="nav-item text-center">
                                    <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                                </li>
                                <li class="nav-item text-center">
                                    <a href="#" class="search"><i class="fas fa-search"></i></a>
                                </li>
                            </ul>
                        </div>                         
                    </div>
                </nav>
            </div>
        </header>