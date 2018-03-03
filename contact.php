<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us | StarBulls</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Head section included -->
    <?php include '_partial/head.php' ?>
        <style>
            .page-banner {
                background: url(img/page-banners/contact.jpg);
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
            <h1 class="text-uppercase"><strong>contact us</strong> </h1>
        </div>
        <div class="page-banner-logo">
            <img src="img/starbullslogo.png" class="img-responsive">
        </div>
    </div>
    <div class="clearfix"></div>

    <main>
        <div class="container p-b-60">
            <div class="row" style="overflow:hidden">
                <div class="col-xs-12 col-sm-6 effect-right">
                    <div class="address-box">
                        <h2 class="m-t-none">Get in Touch</h2>
                        <table class="table">
                            <tr>
                                <td><i class="fa fa-phone"></i></td>
                                <td>000-1101-222-333</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-envelope"></i></td>
                                <td>info@starbulls.com</td>
                            </tr>
                            <tr>
                                <td><i class="fa fa-home"></i></td>
                                <td>6 / 20, Air-Condition Market Building, Tardeo Road, Tardeo, Mumbai - 400 034.</td>
                            </tr>
                        </table>
                        <h4><strong>Important Contacts</strong></h4>
                        <p>Jane Doe : 123456789</p>
                        <p>Jane Doe : 123456789</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 effect-left">
                    <div class="contact-form-box">
                        <form>
                            <div class="sb-form-input">
                                <p>Name</p>
                                <input class="contact-field" type="text" placeholder="" name="name" onkeypress="return keycheckval(event);" required>
                            </div>
                            <div class="sb-form-input">
                                <p>Phone</p>
                                <input id="mobile" class="contact-field" type="text" placeholder="" name="phone" onkeypress="return isNumber(event);" onchange="return checkmobile();" maxlength="10" required>
                            </div>
                            <div class="sb-form-input">
                                <p>E-mail</p>
                                <input class="contact-field" type="email" placeholder="" name="email" required>
                            </div>
                            <div class="sb-form-input">
                                <p>Query</p>
                                <textarea rows="3" maxlength="60" class="contact-field" type="text" placeholder="" name="query" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-starbulls-default">Send</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="container-fluid p-none" style="background:#111">
            <div class="col-xs-12 col-sm-12 p-none">
                <iframe style="display:block" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.670884510116!2d72.83939931451357!3d18.990136987137273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cef86c17f29d%3A0xa17a286393a6cd58!2sStarbulls+Facility+Management+Services+(i)+Pvt.Ltd.+Total+Security+Solution!5e0!3m2!1sen!2sin!4v1507831734267" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>

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