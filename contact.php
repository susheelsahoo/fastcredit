<?php include('layout/header.php');?>


    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="contact-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Let's discuss</span>
                <h2>Whatever question you have, please feel free to ask.</h2>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <div class="title">
                            <h3>Write Us</h3>
                        </div>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" id="name" class="form-control" required
                                            data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" id="email" class="form-control" required
                                            data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                            required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5"
                                            required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">
                                        Send message
                                        <span></span>
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-side-box">
                        <div class="title">
                            <h3>Contact Finix</h3>
                        </div>
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-clock"></i>
                            </div>
                            <h4>Working Hours</h4>
                            <ul class="list">
                                <li>
                                    Mon – Thurs
                                    <span>8:00 AM - 5:00 PM</span>
                                </li>
                                <li>
                                    Fri – Satur
                                    <span>8:00 AM - 3:00 PM</span>
                                </li>
                                <li>
                                    Sun
                                    <span>CLOSED</span>
                                </li>
                            </ul>
                        </div>
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-pin"></i>
                            </div>
                            <h4>Address</h4>
                            <span>6890 Blvd, The Bronx, NY 1058 New <br> York, USA</span>
                        </div>
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <h4>Phone</h4>
                            <span>
                                <a href="tel:1514312-6688">+1 (514) 312-5678</a>
                            </span>
                            <span>
                                <a href="tel:1514312-6688">+1 (514) 312-6688</a>
                            </span>
                        </div>
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <h4>Email</h4>
                            <span>
                                <a
                                    href="https://templates.envytheme.com/cdn-cgi/l/email-protection#4a222f2626250a2c2324233264292527"><span
                                        class="__cf_email__"
                                        data-cfemail="0c64696060634c6a65626574226f6361">[email&#160;protected]</span></a>
                            </span>
                            <span>
                                <a href="#">skype: example</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="map">
        <div class="container-fluid">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830869428!2d-74.11976397304603!3d40.69766374874431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1594738801148!5m2!1sen!2sbd"></iframe>
        </div>
    </div>



    <?php include('layout/footer.php');?>