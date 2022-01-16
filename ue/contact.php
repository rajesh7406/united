<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>United Build Group - Contact us</title>
    <meta name="description" content="United Build Group - Contact us">
    <?php
    include_once('header.php');
    ?>

    <div class="page_banner bg_cover" style="background-image: url(assets/img/banner/banner-contact.jpg)">
            <div class="container">
                <div class="page_banner_content">
                    <h3 class="title">Efficient Network For Service Excellence</h3>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>

        <section class="contact_page pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact_form mt-30">
                        <div class="contact_title">
                            <h5 class="title">Send Message Us </h5>
                        </div>
                        <form id="contact-form" action="assets/contact.php" method="post">
                            <div class="contact_form_wrapper">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <input type="text" name="name" placeholder="Name">
                                            <i class="fas fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_form">
                                            <input type="email" name="email" placeholder="Email">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <input type="text" name="subject" placeholder="Subject">
                                            <i class="far fa-i-cursor"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <i class="fas fa-edit"></i>
                                        </div>
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="single_form">
                                            <button class="main-btn">Sand Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact_info">
                        <div class="contact_title mt-30">
                            <h5 class="title">Get In Touch</h5>
                        </div>
                        <p>Locations of United Build Group Headquarters and Branches</p>
                        
                        <div class="single_info d-flex">
                            <div class="info_icon">
                                <i class="far fa-map"></i>
                            </div>
                            <div class="info_content media-body">
                                <p>Level 13, 2 Ellzabeth St, Lorem Ipsum Is simply dummy text</p>
                            </div>
                        </div>
                        <div class="single_info d-flex">
                            <div class="info_icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="info_content media-body">
                                <p>+88 0123456789</p>
                                <p>+88 0123456789</p>
                            </div>
                        </div>
                        <div class="single_info d-flex">
                            <div class="info_icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="info_content media-body">
                                <p>info@classified.com</p>
                                <p>info.classified@gmail..com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    include_once('footer.php');
    ?>