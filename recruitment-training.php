<!DOCTYPE html>
<html lang="en">

<head>
    <title>Recruitment & Training | StarBulls</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Head section included -->
    <?php include '_partial/head.php' ?>
        <style>
            .page-banner {
                background: url(img/page-banners/about.jpg);
                background-size: cover;
            }
        </style>
</head>


<body>
    <header>
        <!-- Header section included -->
        <?php include '_partial/header.php' ?>
    </header>
    <div class="clearfix"></div>

    <div class="page-banner">
        <div class="full-black-overlay"></div>
        <div class="page-name text-center">
            <h1 class="text-uppercase"><strong>Recruitment & Training</strong> </h1>
        </div>
        <div class="page-banner-logo">
            <img src="img/starbullslogo.png" class="img-responsive">
        </div>
    </div>
    <div class="clearfix"></div>

    <main class="" style="position:relative">
        <div class="container p-b-xxl">
            <div class="row" style="overflow:hidden">
                <div class="col-xs-12 text-center">
                    <div class="text-center">
                        <h3><strong>Recruitment</strong></h3>
                        <p>Our continuous efforts on client needs have made us become the trusted partner in this part of the world. Our focus on protection, safety, and confidentiality as we cater directly to you and your needs. As you browse through our site take a look at all of our services that make us your one stop for all of your security needs.</p>
                    </div>
                    <div class="rt-form col-xs-12 col-sm-6 col-sm-offset-3 p-tb-xxl">
                        <form>
                            <div class="sb-form-input">
                                <p>Name</p>
                                <input class="contact-field" type="text" placeholder="" name="name" onkeypress="return keycheckval(event);" required>
                            </div>
                            <div class="sb-form-input">
                                <p>E-mail</p>
                                <input class="contact-field" type="email" placeholder="" name="email" required>
                            </div>
                            <div class="sb-form-input">
                                <p>Phone</p>
                                <input id="mobile" class="contact-field" type="text" placeholder="" name="phone" onkeypress="return isNumber(event);" onchange="return checkmobile();" maxlength="10" required>
                            </div>
                            <div class="sb-form-input">
                                <p>Description</p>
                                <textarea rows="3" class="contact-field" type="text" placeholder="" name="description" required></textarea>
                            </div>
                            <div class="sb-form-input">
                                <p style="top:0;font-size:10px">Resume</p>
                                <input class="contact-field" type="file" placeholder="" name="resume" required>
                            </div>
                            <button type="submit" class="btn btn-starbulls-default">Send</button>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center">
                        <h3><strong>Training</strong></h3>
                        <p>Our continuous efforts on client needs have made us become the trusted partner in this part of the world. Our focus on protection, safety, and confidentiality as we cater directly to you and your needs. As you browse through our site take a look at all of our services that make us your one stop for all of your security needs.</p>
                    </div>
                </div>

            </div>
        </div>
        <section class="is_carousel">
            <div id="is_carousel" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/page-banners/about.jpg" alt="">
                    </div>

                    <div class="item">
                        <img src="img/page-banners/blogs.jpg" alt="">
                    </div>

                    <div class="item">
                        <img src="img/page-banners/contact.jpg" alt="">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#is_carousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#is_carousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

    </main>

    <div class="clearfix"></div>
    <footer>
        <!-- Footer section included -->
        <?php include '_partial/footer.php' ?>
    </footer>
</body>
<!-- Footer scripts included -->
<?php include '_partial/footer-scripts.php' ?>

</html>