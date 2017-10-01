<!DOCTYPE html>
<html lang="en">

<head>
    <title>StarBulls</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Head section included -->
    <?php include '_partial/head.php' ?>
</head>

<body>
    <header>
        <!-- Header section included -->
        <?php include '_partial/header.php' ?>
    </header>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="sub-item text-center">
                    <img class="wow flipInY" src="img/starbullslogo.png" width="150px">
                    <h1 class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1s">Premium security services<br>Trusted by millions</h1>
                </div>
                <img src="img/1.jpg" alt="" title="Starbull Security">
            </div>
            <div class="item">
                <img src="img/4.jpg" alt="" title="Starbull Security">
            </div>
        </div>

    </div>
    <div class="clearfix"></div>

    <main>
        <section id="homepage-events">
            <div class="container">
                <div class="title">
                    <h2>Events</h2>
                </div>
                <div class="events-section">
                    <div class="col-md-7">
                        <div class="events-box dark" style="background-image: url(img/1.jpg);">
                            <div class="box-details">
                                <h2 class="box-heading">Security Consulting</h2>
                                <p class="box-description">We happy to share our experience and cases with every company who care about security</p>
                                <a href="javascript:void();" class="btn btn-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="events-box light" style="background-image: url(img/temp.jpg);">
                            <div class="box-details">
                                <h2 class="box-heading">Close Protection</h2>
                                <p class="box-description">More than 25 specially trained bodyguards are ready to provide for your safety 24 hours a day</p>
                                <a href="javascript:void();" class="btn btn-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="events-box light" style="background-image: url(img/temp.jpg);">
                            <div class="box-details">
                                <h2 class="box-heading">Investigations</h2>
                                <p class="box-description">Our detective are always ready to find the hidden truth</p>
                                <a href="javascript:void();" class="btn btn-link">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="events-box dark" style="background-image: url(img/1.jpg);">
                            <div class="box-details">
                                <h2 class="box-heading">Security Systems</h2>
                                <p class="box-description">Development of security and fire protection systems for homes and offices any level of complexity</p>
                                <a href="javascript:void();" class="btn btn-link">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="clearfix"></div>
        
        <section id="homepage-services">
            <div class="container">
                <div class="title">
                    <h2>Security Services</h2>
                </div>
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
