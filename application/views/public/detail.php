<?php $this->load->view('layout_home/header')?>
<body class="single-page single-cause">
    

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                            <a class="d-block" href="index.html" rel="home"><img class="d-block" src="<?php echo base_url('assets/images/logo.png')?>" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <?php $this->load->view('layout_home/menu') ?>

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Our Donations</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="highlighted-cause">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 order-2 order-lg-1">


                    
                    <div class="section-heading">
                        <h2 class="entry-title">Sumbang Bangunan Sekolah </h2>
                    </div><!-- .section-heading -->

                    <img src="<?php echo base_url('assets/images/tes.jpg')?>" alt="" style="margin-top:20px;">


                    <div class="entry-content mt-5" style="margin-top:0px;">
                        <p>Dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet.</p>
                    </div><!-- .entry-content -->

                    
                    <div class="short-content">
                        <h3 class="entry-title">Description</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris. Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamc.</p>
                    </div>

                    <div class="short-content">
                        <h3 class="entry-title">Additional Information</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus.</p>
                    </div>

                    <div class="short-content">
                        <h3 class="entry-title">Our Goal</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus.</p>
                    </div>

                   
                    
                </div><!-- .col -->

                <div class="col-12 col-lg-4 order-1 order-lg-2">
                    
                    <div class="donation-form-wrap" style="text-align: center;">
                        <img src="<?php echo base_url('assets/images/logo.png')?>" style="width:50%; margin:0;">
                        <h2>Make a donation</h2>
    
                        <div class="short-content" >
                            
                            <p style="margin:0;">Created 12 Mei 2020</p>
                            <p style="margin:0; color:orangered;">30 hari tersisa</p>
                        </div>
    
                        <form class="donation-form">
                            

                            <div class="fund-raised w-100 mt-5">
                                <div class="featured-fund-raised-bar barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div><!-- .tipWrap -->
        
                                    <span class="fill" data-percentage="50"></span>
                                </div><!-- .fund-raised-bar -->
        
                                <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="fund-raised-total mt-4">
                                        Raised: $56 880
                                    </div><!-- .fund-raised-total -->
        
                                    <div class="fund-raised-goal mt-4">
                                        Goal: $70 000
                                    </div><!-- .fund-raised-goal -->
                                </div><!-- .fund-raised-details -->
                            </div><!-- .fund-raised -->

    
                            <input class="btn gradient-bg mt-5" type="submit" value="Donate Now">
                        </form>
                    </div>


                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .highlighted-cause -->

    

    <div class="container">
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
    </div>

    <?php $this->load->view('layout_home/footer') ?>

</body>
</html>