<?php include('layout/header.php');?>


    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                    <?php if($_GET["type"]){?>
                        <div class="alert alert-<?php echo htmlspecialchars($_GET["type"]); ?>">
                        <strong><?php echo ucfirst(htmlspecialchars($_GET["type"])); ?>!</strong> <?php echo htmlspecialchars($_GET["msg"]); ?>
                        </div>
                   <?php }?>
                    
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="index.php">Home</a></li>
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
                        
                        <form action="sendcontactemail.php" method="post" id="contactForm">
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
                                        <label>Phone</label>
                                        <input type="number" name="phone" id="phone" class="form-control" required
                                            data-error="Please enter your phone">
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
                            <h3>Contact Fast Credit Deal</h3>
                        </div>
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-clock"></i>
                            </div>
                            <h4>Working Hours</h4>
                            <ul class="list">
                                <li>
                                    Mon ??? Sat
                                    <span>10:00 AM - 07:00 PM</span>
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
                            <span><?php echo $address; ?></span>
                        </div>
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <h4>Phone</h4>
                            <span>
                                <a href="tel:<?php echo $phone1; ?>"><?php echo $phone; ?></a>
                            </span>
                            
                        </div>
                        <div class="info-box">
                            <div class="icon">
                                <i class="flaticon-email"></i>
                            </div>
                            <h4>Email</h4>
                            <span>
                                <a href="mail:<?php echo $email; ?>"><?php echo $email; ?></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="map">
        <div class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6998.893371622871!2d77.07710692274782!3d28.706193889781474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d06a18fd99255%3A0x82d87d985b01ba3d!2sKrishan%20Vihar%2C%20Delhi%2C%20110086!5e0!3m2!1sen!2sin!4v1632818440348!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>



    <?php include('layout/footer.php');?>