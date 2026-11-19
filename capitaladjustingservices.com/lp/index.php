<?php
$location = "";

if (isset($_GET['location'])) {
    $location = rawurldecode($_GET['location']);	
    $location = str_replace("-", " ", $location);
    $locationTitle = $location;
    $location = strtoupper($location);
}
$phone = '800-845-3952';

if(strtoupper($location) == strtoupper('Washington DC')){
    $phone = '771-240-3526';
}

if(strtoupper($location) == strtoupper('Georgia')){
    $phone = '678-940-6898';
}

if(strtoupper($location) == strtoupper('South Carolina')) {
    $phone = '843-948-5226';
}

if(strtoupper($location) == strtoupper('North Carolina')) {
    $phone = '910-974-8395';
}

if(strtoupper($location) == strtoupper('Virginia')) {
    $phone = '804-913-2363';
}

if(strtoupper($location) == strtoupper('NorthernVirginia')) {
    $locationTitle = 'Northern Virginia';
    $phone = '703-936-7201';
}

if(strtoupper($location) == strtoupper('New Jersey')) {
    $phone = '201-270-0177';
}

if(strtoupper($location) == strtoupper('Maryland')) {
    $phone = '301-970-3352';
}

$tel = str_replace("-", "", $phone);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" style="scroll-behavior: smooth;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Capital Adjusting Services</title>
    <link rel="icon" href="assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Poppins:100,200,300,400,500,600,700,800,900"
          rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="assets/lib/slick/slick.css"/>
    <link type="text/css" rel="stylesheet" href="assets/css/style.css?var1.4"/>
    

    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5SZFC73');</script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-187451509-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-187451509-1');
</script>
    
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SZFC73"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<section id="wrapper">
    <header id="header">
        <div class="header-top">
            <div class="container">
                <a href="mailto:info@capitaladjustingservices.com" class="email">info@capitaladjustingservices.com</a>
                <ul class="social-links">
                    <li>
                        <a href="https://www.facebook.com/capitaladjustingservices/" target="_blank" class="icon icon-fb">Facebook</a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/capital-adjusting-services/" target="_blank" class="icon icon-lnkd">LinkedIn</a>
                    </li>
                </ul><!--/.social-links-->
            </div>
        </div><!--/.header-top-->
        <div class="header-bottom">
            <div class="container">
                <div class="logo">
                    <img src="assets/images/site-logo.png" alt="Capital Adjusting Services">
                </div><!--/.logo-->
                <a class="show-on-mobile phone-icon" href="tel:<?php echo $tel;?>"><?php echo $phone;?></a>
                <button class="toggleMenu toggle-btn btn-open"><span>Menu</span></button>
                <div class="right-block">
                    <nav class="primary-menu">
                        <button class="toggleMenu toggle-btn btn-close">Close</button>
                        <ul>
                            <li>
                                <a href="#header" class="js-scroll">Home</a>
                            </li>
                            <li>
                                <a href="#about" class="js-scroll">About Us</a>
                            </li>
                            <?php if($location == !'') { ?>
                                <li>
                                    <a href="#locations" class="js-scroll">Locations</a>
                                </li>
                            <?php } ?>
                            <li>
                                <a href="#whyCapital" class="js-scroll">Why Choose CAS?</a>
                            </li>
                            <li>
                                <a href="#testimonials" class="js-scroll">Testimonials</a>
                            </li>
                            <li>
                                <a href="#footerContact" class="js-scroll">Contact Us</a>
                            </li>
                        </ul>
                    </nav><!--/.primary-menu-->
                    <div class="tel-block">
                        <a href="tel:<?php echo $tel;?>"><span class="small">Call Us For A FREE Claim Analysis</span><span><?php echo $phone;?></span></a>
                    </div><!--/.tel-block-->
                </div>
            </div>
        </div><!--/.header-bottom-->
    </header>
    <!--Header-->

    <main id="main">
        <section class="banner">
            <div class="banner-slider">
                <div class="item">
                    <img class="show-on-mobile" src="assets/images/banner-image.jpg" alt="Banner Image">
                    <div class="container">
                        <div class="d-flex">
                            <div class="panel-text">
                                <h1><?php echo $locationTitle;?>'s #1
                                    <small>Insurance Claim Adjusters</small>
                                </h1>
                                <div class="holder">
                                    <p>Insurance Companies Get You The Minimum,</p>
                                    <span class="text-uppercase">CAPITAL ADJUSTING Fights To Get You The Maximum On Your Claims!</span>
                                </div>
                                <ul class="list-star two-column">
                                    <li>No Recovery, No Fee</li>
                                    <li>No Upfront Costs</li>
                                    <li>Millions Recovered For Clients</li>
                                    <li>Rated #1 on the East Coast</li>
                                    <li>We Serve As Your Representative With the Insurance Company From Beginning To End</li>
                                    <li>BBB Accredited.</li>
                                </ul>
                                <div class="btn-wrap">
                                    <a href="#" class="btn btn-primary">Free Property Claim Review</a>
                                    <a href="#" class="btn btn-secondary">Re-Open A Denied Claim!</a>
                                </div>
                            </div><!-- /.panel-text -->
                            <div class="banner-form-wrapper">
                                <div class="banner-form bg-white-smoke">
                                    <div class="form-heading text-center">
                                        <h3>Tell Us About Your<br>
                                            Property Insurance Claim</h3>
                                    </div>
                                    <form method="post" action="mailer" id="bannerForm1" name="Banner Form 1">
                                        <div class="form-group">
                                            <input id="name" type="text" class="form-control" name="first-name"
                                                   placeholder="Your Name*">
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control" name="email"
                                                   placeholder="Email*">
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group">
                                            <input id="ph-number" type="tel" class="form-control" name="phone-number"
                                                   placeholder="Phone">
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group">
                                            <input id="zip" type="text" class="form-control" name="zip-code"
                                                   placeholder="zip code">
                                            <div class="messages"></div>
                                        </div>										
										<?php if($location == !'') { ?>
											<div class="form-group" style="display: none">
												<input id="location" type="hidden" value="<?php echo ucwords($locationTitle);?>" class="form-control" name="location" placeholder="Location">
											</div>
										<?php } ?>
                                        <div class="submit-holder form-group text-center">
                                            <span class="loader" style="display: none">Sending...</span>
                                            <button type="submit" class="btn btn-secondary w-100 submitButton">Get Help Today</button>
                                        </div>
                                    </form>
                                </div><!-- /.banner-form -->
                            </div><!-- /.banner-form-wrapper -->
                        </div><!-- /.d-flex -->
                    </div><!-- /.container -->
                </div><!--/.item /.bg-cover-->
                <div class="item item4 bg-cover">
                    <img src="assets/images/banner-bg4v1.jpg" alt="Banner Image">
                    <div class="container">
                        <div class="d-flex">
                            <div class="panel-text">
                                <h2>It Pays To Hire A Public Adjuster</h2>
                                <div class="img-holder">
                                    <img src="assets/images/cheque-image.png" alt="Cheque Img 2">
                                </div>
                                <h2>We Recently Recovered <span class="color-red">$214,425.94</span> For Our Client<br>
                                    <span class="sub-text">After The Insurance Company Only Offered $31,000!</span>
                                </h2>
                            </div><!-- /.panel-text -->
                            <div class="banner-form-wrapper">
                                <div class="banner-form bg-white-smoke">
                                    <div class="form-heading text-center">
                                        <h3>Tell Us About You<br>
                                            Property Insurance Claim</h3>
                                    </div>
                                    <form method="post" action="mailer" id="bannerForm4" name="Banner Form 4">
                                        <div class="form-group">
                                            <input id="name" type="text" class="form-control" name="first-name"
                                                   placeholder="Your Name*">
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control" name="email"
                                                   placeholder="Email*">
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group">
                                            <input id="ph-number" type="tel" class="form-control" name="phone-number"
                                                   placeholder="Phone">
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group">
                                            <input id="zip" type="text" class="form-control" name="zip-code"
                                                   placeholder="zip code">
                                            <div class="messages"></div>
                                        </div>
										<?php if($location == !'') { ?>
											<div class="form-group" style="display: none">
												<input id="location" type="hidden" value="<?php echo ucwords($locationTitle);?>" class="form-control" name="location" placeholder="Location">
											</div>
										<?php } ?>
                                        <div class="submit-holder form-group text-center">
                                            <span class="loader" style="display: none">Sending...</span>
                                            <button type="submit" class="btn btn-secondary w-100 submitButton">Get Help Today</button>
                                        </div>
                                    </form>
                                </div><!-- /.banner-form -->
                            </div><!-- /.banner-form-wrapper -->
                        </div><!-- /.d-flex -->
                    </div><!-- /.container -->
                </div><!--/.item /.item4 /.bg-cover-->
                <div class="item item3 bg-cover">
                    <img class="show-on-mobile" src="assets/images/banner-bg3.jpg" alt="Banner Image">
                    <div class="container">
                        <div class="d-flex">
                            <div class="panel-text">
                                <h2>A Government Study Shows<br>
                                    Public Adjusters Get You<span class="color-red"> 7.4x More Money</span>
                                </h2>
                                <div class="img-holder">
                                    <img src="assets/images/data-analysis.png" alt="Data Analysis Img">
                                </div>
                            </div><!-- /.panel-text -->
                            <div class="banner-form-wrapper">
                                <div class="banner-form bg-cyprus-blue">
                                    <div class="form-heading text-center">
                                        <h3>Tell Us About You<br>
                                            Property Insurance Claim</h3>
                                    </div>
                                    <form method="post" action="mailer" id="bannerForm3" name="Banner Form 3">
                                        <div class="form-group">
                                            <input id="name" type="text" class="form-control" name="first-name"
                                                   placeholder="Your Name*">
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control" name="email"
                                                   placeholder="Email*">
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group">
                                            <input id="ph-number" type="tel" class="form-control" name="phone-number"
                                                   placeholder="Phone">
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group">
                                            <input id="zip" type="text" class="form-control" name="zip-code"
                                                   placeholder="zip code">
                                            <div class="messages"></div>
                                        </div>
										<?php if($location == !'') { ?>
											<div class="form-group" style="display: none">
												<input id="location" type="hidden" value="<?php echo ucwords($locationTitle);?>" class="form-control" name="location" placeholder="Location">
											</div>
										<?php } ?>
                                        <div class="submit-holder form-group text-center">
                                            <span class="loader" style="display: none">Sending...</span>
                                            <button type="submit" class="btn btn-secondary w-100 submitButton">Get Help Today</button>
                                        </div>
                                    </form>
                                </div><!-- /.banner-form -->
                            </div><!-- /.banner-form-wrapper -->
                        </div><!-- /.d-flex -->
                    </div><!-- /.container -->
                </div><!--/.item /.item3 /.bg-cover-->
                <div class="item item5">
                    <img class="show-on-mobile" src="assets/images/banner-image4.jpg" alt="Banner Image">
                    <div class="container">
                        <div class="d-flex">
                            <div class="panel-text">
                                <div class="img-holder">
                                    <img src="assets/images/stamp-rejected.png" alt="Cheque Img 2">
                                </div>
                                <h2>DENIED, OLD<br>
                                    OR UNDERPAID<br>
                                    INSURANCE CLAIM?</h2>
                                <a href="#" class="btn btn-secondary font-big">NO PROBLEM</a>
                                <p>We Can Fight or Re-Open It.</p>
                            </div><!-- /.panel-text -->
                            <div class="banner-form-wrapper">
                                <div class="banner-form bg-white-smoke">
                                    <div class="form-heading text-center">
                                        <h3>Tell Us About You<br>
                                            Property Insurance Claim</h3>
                                    </div>
                                    <form method="post" action="mailer" id="bannerForm2" name="Banner Form 4">
                                        <div class="form-group">
                                            <input id="name" type="text" class="form-control" name="first-name"
                                                   placeholder="Your Name*">
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control" name="email"
                                                   placeholder="Email*">
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group">
                                            <input id="ph-number" type="tel" class="form-control" name="phone-number"
                                                   placeholder="Phone">
                                            <div class="messages"></div>
                                        </div>
                                        <div class="form-group">
                                            <input id="zip" type="text" class="form-control" name="zip-code"
                                                   placeholder="zip code">
                                            <div class="messages"></div>
                                        </div>
										<?php if($location == !'') { ?>
											<div class="form-group" style="display: none">
												<input id="location" type="hidden" value="<?php echo ucwords($locationTitle);?>" class="form-control" name="location" placeholder="Location">
											</div>
										<?php } ?>
                                        <div class="submit-holder form-group text-center">
                                            <span class="loader" style="display: none">Sending...</span>
                                            <button type="submit" class="btn btn-secondary w-100 submitButton">Get Help Today</button>
                                        </div>
                                    </form>
                                </div><!-- /.banner-form -->
                            </div><!-- /.banner-form-wrapper -->
                        </div><!-- /.d-flex -->
                    </div><!-- /.container -->
                </div><!--/.item /.item4 /.bg-cover-->
            </div><!--/.banner-slider-->
        </section>
        <!--/.banner-->

        <section class="about-section" id="about">
            <div class="container">
                <div class="content-holder">
                    <h2>About CAPITAL<br> ADJUSTING Services</h2>
                    <p>When a property claim is filed, the insurance company will assign its own adjuster to look out
                        for its best interest. Public adjusters are property claim experts that advocate for the
                        property or business owner. A common misconception is that general contractors have the
                        expertise and licensing to properly handle a property claim on behalf of the policy holder. In
                        fact, other than the insured the only professional that can legally negotiate with the insurance
                        company is a licensed public adjuster.</p>
                    <p>CAPITAL ADJUSTING serves all of the East Coast with adjusters ready to help you 24/7. Our team includes public adjusters who have more than fifty combined years of experience. All of our inspections are always completely free and our claims are adjusted in house by our experienced experts</p>
                    <!--<a href="#" class="arrow-double">Learn More About Us</a>-->
                </div>
            </div>
        </section>
        <!-- /.about-section -->

        <section class="specializes-section">
            <div class="container">
                <div class="section-title">
                    <h2 class="bordered-stars">CAPITAL ADJUSTING Specializes In</h2>
                </div>
                <div class="d-flex">
                    <div class="item">
                        <div class="icon-box">
                            <div class="sprite">
                            </div><!-- /.sprite -->
                            <div class="content-holder">
                                <h5>Water Damage</h5>
                                <!--<p>This prevents repetitive patterns from impairing the overall visual impression &
                                    facilitates.</p>
                                <a href="#" class="more">Read More</a>-->
                            </div><!-- /.tab-description -->
                        </div><!-- /.icon-box -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="icon-box">
                            <div class="sprite icon2">
                            </div><!-- /.sprite /.icon2-->
                            <div class="content-holder">
                                <h5>Fire Damage</h5>
                                <!--<p>This prevents repetitive patterns from impairing the overall visual impression &
                                    facilitates.</p>
                                <a href="#" class="more">Read More</a>-->
                            </div><!-- /.tab-description -->
                        </div><!-- /.icon-box -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="icon-box">
                            <div class="sprite icon3">
                            </div><!-- /.sprite /.icon3-->
                            <div class="content-holder">
                                <h5>Hurricane Damage</h5>
                                <!--<p>This prevents repetitive patterns from impairing the overall visual impression &
                                    facilitates.</p>
                                <a href="#" class="more">Read More</a>-->
                            </div><!-- /.tab-description -->
                        </div><!-- /.icon-box -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="icon-box">
                            <div class="sprite icon4">
                            </div><!-- /.sprite /.icon4-->
                            <div class="content-holder">
                                <h5>Flood Damage</h5>
                                <!--<p>This prevents repetitive patterns from impairing the overall visual impression &
                                    facilitates.</p>
                                <a href="#" class="more">Read More</a>-->
                            </div><!-- /.tab-description -->
                        </div><!-- /.icon-box -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="icon-box">
                            <div class="sprite icon5">
                            </div><!-- /.sprite /.icon5-->
                            <div class="content-holder">
                                <h5>Hail Damage</h5>
                                <!--<p>This prevents repetitive patterns from impairing the overall visual impression &
                                    facilitates.</p>
                                <a href="#" class="more">Read More</a>-->
                            </div><!-- /.tab-description -->
                        </div><!-- /.icon-box -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="icon-box">
                            <div class="sprite icon6">
                            </div><!-- /.sprite /.icon6-->
                            <div class="content-holder">
                                <h5>Tornado Damage</h5>
                                <!--<p>This prevents repetitive patterns from impairing the overall visual impression &
                                    facilitates.</p>
                                <a href="#" class="more">Read More</a>-->
                            </div><!-- /.tab-description -->
                        </div><!-- /.icon-box -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="icon-box">
                            <div class="sprite icon7">
                            </div><!-- /.sprite /.icon7-->
                            <div class="content-holder">
                                <h5>Roof Leak Damage</h5>
                                <!--<p>This prevents repetitive patterns from impairing the overall visual impression &
                                    facilitates.</p>
                                <a href="#" class="more">Read More</a>-->
                            </div><!-- /.tab-description -->
                        </div><!-- /.icon-box -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="icon-box">
                            <div class="sprite icon8">
                            </div><!-- /.sprite /.icon8-->
                            <div class="content-holder">
                                <h5>Mold Damage</h5>
                                <!--<p>This prevents repetitive patterns from impairing the overall visual impression &
                                    facilitates.</p>
                                <a href="#" class="more">Read More</a>-->
                            </div><!-- /.tab-description -->
                        </div><!-- /.icon-box -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="icon-box">
                            <div class="sprite icon9">
                            </div><!-- /.sprite /.icon9-->
                            <div class="content-holder">
                                <h5>Storm Damage</h5>
                                <!--<p>This prevents repetitive patterns from impairing the overall visual impression &
                                    facilitates.</p>
                                <a href="#" class="more">Read More</a>-->
                            </div><!-- /.tab-description -->
                        </div><!-- /.icon-box -->
                    </div><!-- /.item -->
                </div>
        </section>
        <!-- /.specializes-section -->

        <?php if ($location == !'') { ?>
            <section id="locations" class="circular-section bg-cover">
                <img src="assets/images/circular-section-bg.jpg" alt="Circular Section Bg">
                <div class="container">
                    <div class="section-title">
                        <h2 class="bordered-stars star-white">CAPITAL ADJUSTING Has Helped Individuals<br>
                            Maximize Their Claim In</h2>
                    </div>
                    <?php if ($location == 'NJ' || $location == 'NEW JERSEY') { ?>
                        <div class="circular-item">
                            <div class="circular-wrapper">
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/bergen-county.jpg"
                                                                alt="Bergen County">
                                    </div>
                                    <h3>Bergen County</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/middlesex.jpg"
                                                                alt="Middlesex County">
                                    </div>
                                    <h3>Middlesex County</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/monmouth-county.jpg"
                                                                alt="Monmouth County">
                                    </div>
                                    <h3>Monmouth County</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/burlington.jpg"
                                                                alt="Burlington County">
                                    </div>
                                    <h3>Burlington County</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/hudson.jpg"
                                                                alt="Hudson County">
                                    </div>
                                    <h3>Hudson County</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/gloucester.jpg"
                                                                alt="Gloucester County">
                                    </div>
                                    <h3>Gloucester County</h3>
                                </a><!--/.circle-item-->
                            </div>
                        </div>
                    <?php }
                    if ($location == 'WASHINGTON DC') { ?>
                        <div class="circular-item">
                            <div class="circular-wrapper">
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/washington-dc.jpg"
                                                                alt="Washington DC">
                                    </div>
                                    <h3>Washington DC</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/arlington-virginia.jpg"
                                                                alt="Arlington, Virginia">
                                    </div>
                                    <h3>Arlington, Virginia</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/alexandria-virginia.jpg"
                                                                alt="Alexandria, Virginia">
                                    </div>
                                    <h3>Alexandria, Virginia</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/bethesda-maryland.jpg"
                                                                alt="Bethesda, Maryland">
                                    </div>
                                    <h3>Bethesda, Maryland</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/fairfax-virginia.jpg"
                                                                alt="Fairfax, Virginia">
                                    </div>
                                    <h3>Fairfax, Virginia</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/frederick-maryland.jpg"
                                                                alt="Frederick, Maryland">
                                    </div>
                                    <h3>Frederick, Maryland</h3>
                                </a><!--/.circle-item-->
                            </div>
                        </div>
                    <?php }
                    if ($location == 'NORTH CAROLINA') { ?>
                        <div class="circular-item">
                            <div class="circular-wrapper">
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/charlotte.jpg"
                                                                alt="Charlotte">
                                    </div>
                                    <h3>Charlotte</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/raleigh.jpg"
                                                                alt="Raleigh - Durham">
                                    </div>
                                    <h3>Raleigh - Durham</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/greensboro.jpg"
                                                                alt="Greensboro">
                                    </div>
                                    <h3>Greensboro</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/winston-salem.jpg"
                                                                alt="Winston-Salem">
                                    </div>
                                    <h3>Winston-Salem</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/wilmington.jpg"
                                                                alt="Wilmington">
                                    </div>
                                    <h3>Wilmington</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/fayetteville.jpg"
                                                                alt="Fayetteville">
                                    </div>
                                    <h3>Fayetteville</h3>
                                </a><!--/.circle-item-->
                            </div>
                        </div>
                    <?php }
                    if ($location == 'SOUTH CAROLINA') { ?>
                        <div class="circular-item">
                            <div class="circular-wrapper">
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/columbia.jpg"
                                                                alt="Columbia">
                                    </div>
                                    <h3>Columbia</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/charleston.jpg"
                                                                alt="Charleston">
                                    </div>
                                    <h3>Charleston</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/greenville.jpg"
                                                                alt="Greenville">
                                    </div>
                                    <h3>Greenville</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/mount-pleasant.jpg"
                                                                alt="Mount Pleasant">
                                    </div>
                                    <h3>Mount Pleasant</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/rock-hill.jpg"
                                                                alt="Rock Hill">
                                    </div>
                                    <h3>Rock Hill</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/hilton-head.jpg"
                                                                alt="Hilton Head">
                                    </div>
                                    <h3>Hilton Head</h3>
                                </a><!--/.circle-item-->
                            </div>
                        </div>
                    <?php }
                    if ($location == 'MARYLAND') { ?>
                        <div class="circular-item">
                            <div class="circular-wrapper">
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/washington-dc.jpg"
                                                                alt="Washington DC">
                                    </div>
                                    <h3>Washington DC</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/baltimore.jpg"
                                                                alt="Baltimore">
                                    </div>
                                    <h3>Baltimore</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/gaithersburg.jpg"
                                                                alt="Gaithersburg">
                                    </div>
                                    <h3>Gaithersburg</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/frederick.jpg"
                                                                alt="Frederick">
                                    </div>
                                    <h3>Frederick</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/rockville.jpg"
                                                                alt="Rockville">
                                    </div>
                                    <h3>Rockville</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/annapolis.jpg"
                                                                alt="Annapolis">
                                    </div>
                                    <h3>Annapolis</h3>
                                </a><!--/.circle-item-->
                            </div>
                        </div>
                    <?php }
                    if ($location == 'VIRGINIA') { ?>
                        <div class="circular-item">
                            <div class="circular-wrapper">
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/washington-dc.jpg"
                                                                alt="Washington DC">
                                    </div>
                                    <h3>Washington DC</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/virginia-beach.jpg"
                                                                alt="Virginia Beach">
                                    </div>
                                    <h3>Virginia Beach</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/richmond.jpg"
                                                                alt="Richmond">
                                    </div>
                                    <h3>Richmond</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/norfolk.jpg"
                                                                alt="Norfolk">
                                    </div>
                                    <h3>Norfolk</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/chesapeake.jpg"
                                                                alt="Chesapeake">
                                    </div>
                                    <h3>Chesapeake</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/roanoke.jpg"
                                                                alt="Roanoke">
                                    </div>
                                    <h3>Roanoke</h3>
                                </a><!--/.circle-item-->
                            </div>
                        </div>
                    <?php }
                    if ($location == 'NORTHERNVIRGINIA') { ?>
                        <div class="circular-item">
                            <div class="circular-wrapper">
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/arlington-virginia.jpg"
                                                                alt="Arlington, Virginia">
                                    </div>
                                    <h3>Arlington, Virginia</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/alexandria-virginia.jpg"
                                                                alt="Alexandria, Virginia">
                                    </div>
                                    <h3>Alexandria, Virginia</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/washington-dc.jpg"
                                                                alt="Washington DC">
                                    </div>
                                    <h3>Washington DC</h3>
                                </a><!--/.circle-item-->
                            </div>
                        </div>
                    <?php }
                    if ($location == 'PENNSYLVANIA') { ?>
                        <div class="circular-item">
                            <div class="circular-wrapper">
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/philadelphia.jpg"
                                                                alt="Philadelphia">
                                    </div>
                                    <h3>Philadelphia</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/pittsburgh.jpg"
                                                                alt="Pittsburgh">
                                    </div>
                                    <h3>Pittsburgh</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/allentown.jpg"
                                                                alt="Allentown">
                                    </div>
                                    <h3>Allentown</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/erie.jpg"
                                                                alt="Erie">
                                    </div>
                                    <h3>Erie</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/reading.jpg"
                                                                alt="Reading">
                                    </div>
                                    <h3>Reading</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/scranton.jpg"
                                                                alt="Scranton">
                                    </div>
                                    <h3>Scranton</h3>
                                </a><!--/.circle-item-->
                            </div>
                        </div>
                    <?php }
                    if ($location == 'GEORGIA') { ?>
                        <div class="circular-item">
                            <div class="circular-wrapper">
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/atlanta.jpg"
                                                                alt="Atlanta">
                                    </div>
                                    <h3>Atlanta</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/savannah.jpg"
                                                                alt="Savannah">
                                    </div>
                                    <h3>Savannah</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/columbus.jpg"
                                                                alt="Columbus">
                                    </div>
                                    <h3>Columbus</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/macon.jpg"
                                                                alt="Macon">
                                    </div>
                                    <h3>Macon</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/athens.jpg"
                                                                alt="Athens">
                                    </div>
                                    <h3>Athens</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/roswell.jpg"
                                                                alt="Roswell">
                                    </div>
                                    <h3>Roswell</h3>
                                </a><!--/.circle-item-->
                            </div>
                        </div>
                    <?php }
                    if ($location == 'FLORIDA') { ?>
                        <div class="circular-item">
                            <div class="circular-wrapper">
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/miami.jpg"
                                                                alt="Miami">
                                    </div>
                                    <h3>Miami</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/tampa.jpg"
                                                                alt="Tampa">
                                    </div>
                                    <h3>Tampa</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/orlando.jpg"
                                                                alt="Orlando">
                                    </div>
                                    <h3>Orlando</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/jacksonville.jpg"
                                                                alt="Jacksonville">
                                    </div>
                                    <h3>Jacksonville</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/tallahassee.jpg"
                                                                alt="Tallahassee">
                                    </div>
                                    <h3>Tallahassee</h3>
                                </a><!--/.circle-item-->
                                <a class="circle-item" href="#">
                                    <div class="circle-sm"><img src="assets/images/st.-petersburg.jpg"
                                                                alt="St. Petersburg">
                                    </div>
                                    <h3>St. Petersburg</h3>
                                </a><!--/.circle-item-->
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
            <!-- /.circular-block -->
        <?php } ?>

        <section id="whyCapital" class="why-choose-section bg-cover text-center">
            <img src="assets/images/why-choose-bg.jpg" alt="Why Choose Bg">
            <div class="container">
                <div class="section-title">
                    <h2 class="bordered-stars">Why Choose CAPITAL ADJUSTING?</h2>
					<p>Our experienced public adjusters will be working with you throughout the whole claims process to ensure that all aspects and issues related to your damaged property are properly addressed. Apart from documenting your loss, when needed we may use experts such as industrial hygienist, engineers, architects, accountants, and appraisers needed to properly adjust and prepare your complex claim. Our comprehensive repair and restoration report will address many issues that your insurance company’s adjuster may overlook or not have the expertise to properly identify and allow for payment of your claim.</p>
                </div><!--/.section-title-->
                <div class="circle-icon-holder">
                    <div class="d-flex">
                        <a href="#" class="item">
                            <div class="icon-circle">
                                <div class="sprite">
                                </div><!-- /.sprite -->
                            </div><!-- /.icon-circle -->
                            <h6>Experienced Experts</h6>
                        </a><!-- /.item -->
                        <a href class="item">
                            <div class="icon-circle">
                                <div class="sprite icon2">
                                </div><!-- /.sprite icon2-->
                            </div><!-- /.icon-circle -->
                            <h6>Detailed Inspections</h6>
                        </a><!-- /.item -->
                        <a href class="item">
                            <div class="icon-circle">
                                <div class="sprite icon3">
                                </div><!-- /.sprite icon3-->
                            </div><!-- /.icon-circle -->
                            <h6>Claims Adjusted In-house</h6>
                        </a><!-- /.item -->
                        <a href="#" class="item">
                            <div class="icon-circle">
                                <div class="sprite icon4">
                                </div><!-- /.sprite icon4-->
                            </div><!-- /.icon-circle -->
                            <h6>Information Access</h6>
                        </a><!-- /.item -->
                    </div><!-- /.d-flex -->
                </div><!-- /.circle-icon-holder -->
                <div class="btn-wrap">
                    <a href="#wrapper" class="btn btn-secondary">Get A Free Claim Analysis & Review</a>
                </div>
            </div><!-- /.container -->
        </section>
        <!-- /.why-choose-section -->

        <section id="testimonials" class="testimonials-block">
            <div class="container">
                <div class="section-title">
                    <h2>See What Some Real CAPITAL ADJUSTING <br>Clients Say About Us</h2>
                </div><!--/.section-title-->
                <div class="testimonials-slider">
                    <div class="item">
                        <blockquote>
                            <span class="rating"></span>
                            <q>I called CAPITAL ADJUSTING late on a Friday now tired and frustrated after being run around by my insurance company for over two months. Adam took my call and in the next weeks did everything he said he would do. He took over the claim, was available for every question I had, and delivered us checks for much more than I ever expected. The insurance company told us we were only getting $21,000 for our damages and CAPITAL ADJUSTING came in and did their evaluation we were paid $147,000. I could not recommend CAPITAL ADJUSTING more enthusiastically. They come through!</q>
                            <h4 class="author">Ellen B.</h4>
                        </blockquote>
                    </div><!--/.item-->
                    <div class="item">
                        <blockquote>
                            <span class="rating"></span>
                            <q>After having a fire that destroyed our entire home, we asked others what to do and everyone said to hire a public adjuster to deal with the headache of dealing with the insurance company.  It was great advice. CAPITAL ADJUSTING helped us through every step of the way and made the process so simple. The insurance company did not want to pay us for all our clothing and furniture saying it should be cleaned. Adam Schwartz fought for us and the insurance company paid for every item we claimed. I know the outcome would not have been the same without Capital on our side.</q>
                            <h4 class="author">Lucy A.</h4>
                        </blockquote>
                    </div><!--/.item-->
                    <div class="item">
                        <blockquote>
                            <span class="rating"></span>
                            <q>Capital came through when NCJUA kept saying no. Our contactor needed more than $65,000 to repair our home after Florence tore the house’s roof off. Within five weeks of getting referred to Capital from our neighbors, they did a new estimate of all the damages, negotiated with the insurance company and made our nightmare end. Anytime you have a claim, get a professional to represent you as the insurance companies just do not want to pay what they owe.</q>
                            <h4 class="author">Ken S.</h4>
                        </blockquote>
                    </div><!--/.item-->
                </div><!--/.testimonials-slider-->
            </div>
        </section>
        <!--/.testimonials-block-->

        <section id="footerContact" class="contact-section bg-cover">
            <img src="assets/images/contact-bg.jpg" alt="Contact bg">
            <div class="container">
                <div class="grid items-center is-half-lg gap-12 is-gap-24-sm is-gap-32-md is-gap-48-lg">
                    <div class="content">
                        <div class="section-title">
                            <h2>Let CAPITAL ADJUSTING Help</h2>
                        </div>
                        <div class="contact-content text-center">
                            <p>No Claim is Too Big or Too Small<br>
                                If you suffered damage in your property - whether it be damage from flooding, mold, <br>roof damage, fire or anything else, contact CAPITAL ADJUSTING Services today for a free claim review.
                            </p>
                            <div class="dotted-box">
                                <span class="dotted-border text-white">CAPITAL ADJUSTING Services is here to help you with your insurance claim!</span>
                            </div>
                        </div>
                        <div class="fluid-iframe-300">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3105.135146732021!2d-77.0285152!3d38.8980247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b796d985f509%3A0xb5f13b7a43ddb746!2sCapital%20Adjusting%20Services!5e0!3m2!1sen!2snp!4v1705084586646!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div> <!-- Content -->
                    <div class="form-light bg-white-smoke">
                        <div class="form-heading text-center">
                            <h3>Tell Us About You<br>
                                Property Insurance Claim</h3>
                        </div>
                        <form method="post" action="mailer" id="footerForm" name="Contact Form">
                            <div class="d-flex">
                                <div class="form-group">
                                    <input id="name" type="text" class="form-control" name="first-name"
                                        placeholder="Your Name*">
                                    <div class="messages"></div>
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control" name="email"
                                        placeholder="Email*">
                                    <div class="messages"></div>
                                </div>
                                <div class="form-group">
                                    <input id="ph-number" type="tel" class="form-control" name="phone-number"
                                        placeholder="Phone">
                                    <div class="messages"></div>
                                </div>
                                <div class="form-group">
                                    <input id="zip" type="text" class="form-control" name="zip-code"
                                        placeholder="zip code">
                                    <div class="messages"></div>
                                </div>
                                <?php if($location == !'') { ?>
                                    <div class="form-group" style="display: none">
                                        <input id="location" type="hidden" value="<?php echo ucwords($locationTitle);?>" class="form-control" name="location" placeholder="Location">
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="submit-holder form-group text-center">
                                <span class="loader" style="display: none">Sending...</span>
                                <button type="submit" class="btn btn-secondary submitButton w-100">Get Help Today</button>
                            </div>
                        </form>
                    </div> <!-- Form -->
                </div>
            </div>
        </section>
        <!-- /.contact-section -->

    </main>
    <!--Main-->

    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="d-flex">
                    <div class="col col1">
                        <h4 class="footerToggle">Quick Links</h4>
                        <ul class="footer-nav">
                            <li>
                                <a href="#header" class="js-scroll">Home</a>
                            </li>
                            <li>
                                <a href="#about" class="js-scroll">About Us</a>
                            </li>
                            <?php if($location == !'') { ?>
                                <li>
                                    <a href="#locations" class="js-scroll">Locations</a>
                                </li>
                            <?php } ?>
                            <li>
                                <a href="#whyCapital" class="js-scroll">Why Choose CAS?</a>
                            </li>
                            <li>
                                <a href="#testimonials" class="js-scroll">Testimonials</a>
                            </li>
                            <li>
                                <a href="#footerContact" class="js-scroll">Contact Us</a>
                            </li>
                        </ul>
                    </div><!-- /.col /.col1 -->
                    <div class="col col2">
                        <h4 class="footerToggle">Claims</h4>
                        <ul>
                            <li>Water Damage</li>
                            <li>Fire Damage</li>
                            <li>Hurricane Damage</li>
                            <li>Flood Damage</li>
                            <li>Tornado Damage</li>
                            <li>Roof Leak Damage</li>
                            <li>Mold Damage</li>
                        </ul>
                    </div><!-- /.col /.col2 -->
                    <div class="col col3">
                        <h4 class="footerToggle">Licensed in</h4>
                        <ul class="locations">
                            <li>Washington, DC</li>
                            <li>Virginia</li>
                            <li>Maryland</li>
                            <li>New Jersey</li>
                            <li>Pennsylvania</li>
                            <li>North Carolina</li>
                            <li>South Carolina</li>
                            <li>Georgia</li>
                            <li>Puerto Rico</li>
                        </ul>
                    </div><!-- /.col /.col3 -->
                    <div class="col col4">
                        <h4 class="footerToggle">Contact Us</h4>
                        <ul class="contact-info">
                            <li>Capital Adjusting Services<br>
                                1200 G Street, NW<br>
                                Washington, DC 20005
                            </li>
                            <li><a href="mailto:info@capitaladjustingservices.com">info@capitaladjustingservices.com</a>
                            </li>
                            <li><a href="tel:<?php echo $tel;?>"><?php echo $phone;?></a></li>
                        </ul>
                    </div><!-- /.col /.col4 -->
                    <div class="col col5">
                        <h4 class="footerToggle">Follow Us</h4>
                        <ul class="footer-social">
                            <li><a href="#" target="_blank">Facebook</a></li>
                            <li><a href="#" target="_blank">Twitter</a></li>
                            <li><a href="#" target="_blank">Linked In</a></li>
                            <li><a href="#" target="_blank">Youtube</a></li>
                        </ul>
                    </div><!-- /.col /.col5 -->
                </div><!-- /.d-flex -->
            </div><!-- /.container -->
        </div><!-- /.footer-top -->
        <div class="footer-bottom">
            <div class="container">
                <div class="copyright text-center">
                    <p>&copy; Capital Adjusting Services <?php echo date('Y'); ?>. 
                        <a href="https://www.smartsites.com/experts/legal-services/" target="_blank">Legal Services Marketing</a> by <a href="https://www.smartsites.com/" target="_blank"><u>SmartSites</u></a>.</p>
                </div>
            </div>
        </div>
        <!--<div class="sticky-phone">
            <a href="tel:8562109489">(856) 210-9489</a>
        </div>-->
    </footer>
    <!--Footer-->
</section>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script src="assets/js/validate.min.js"></script>
<script src="assets/js/form-scripts.js"></script>
<script type="text/javascript" src="assets/lib/slick/slick.js"></script>
<script type="text/javascript" src="assets/js/jquery.matchHeight.js"></script>
<!--<script type="text/javascript" src="assets/js/smooth-scroll.polyfills.min.js"></script>-->
<script type="text/javascript" src="assets/js/script.js?var1.3"></script>
</body>
</html>
