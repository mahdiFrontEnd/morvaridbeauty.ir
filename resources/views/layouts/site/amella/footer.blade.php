
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>About Us</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="/templates/amella/about-us.html">About Us</a></li>
                            <li><a href="/templates/amella/services.html">Procedures</a></li>
                            <li><a href="/templates/amella/gallery.html">Gallery</a></li>
                            <li><a href="/templates/amella/contact-us.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>Contact Info</h3>
                        <ul>
                            <li><i class="fa fa-send" aria-hidden="true"></i> 3481 Rabana Place, 2090</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> +880 17980XXXXX</li>
                            <li><i class="fa fa-envelope-o" aria-hidden="true"></i> info@example.com</li>
                            <li><i class="fa fa-fax" aria-hidden="true"></i> Fax : 02 9635 0247</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3>Business hour</h3>
                        <ul class="bussiness-hour">
                            <li>Monday-Friday: <span class="pull-right">9am - 5pm.</span></li>
                            <li>Saturday: <span class="pull-right">10am - 2pm.</span></li>
                            <li>Sunday: <span class="pull-right">Closed.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="copyright">
                        <p>Copyright &copy; 2018. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <ul class="social-icons pull-right">
                        <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="/templates/amella/#" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->

<!-- Bact to top -->
<div class="back-top">
    <a href="/templates/amella/#"><i class="fa fa-angle-up"></i></a>
</div>

<!-- Start Video Modal -->
<div class="modal fade modal-vcenter" id="video-modal" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times-circle-o"></i></button>
            </div>
            <div class="modal-body">
                <iframe width="760" height="500" src="" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<!-- End Video Modal -->

<!-- Appointment Modal -->
<div class="modal fade modal-vcenter" id="appointment" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2>REQUEST AN APPOINTMENT</h2>
            </div>
            <div class="modal-body">
                <form id="reservation-form" method="post" data-toggle="validator">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>First Name*</label>
                                <input type="text" id="rfname" class="form-control" name="fname" required data-error="Please enter your first name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" id="rlname" class="form-control" name="lname" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>Email*</label>
                                <input type="email" id="remail" class="form-control" name="email" required data-error="Please enter valid email address">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>Phone*</label>
                                <input type="tel" id="rphone" class="form-control" name="phone" required data-error="Please enter your phone number">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" id="raddress" class="form-control" name="address">
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="form-group">
                                <label>Zip Code</label>
                                <input type="text" id="rzipcode" class="form-control" name="zipcode">
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-8">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" id="rcity" class="form-control" name="city">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Service</label>
                        <select id="rselect-service" class="select-option" name="service">
                            <option value="Herbal Spa">Herbal Spa</option>
                            <option value="Skin Care">Skin Care</option>
                            <option value="Stone Message">Stone Message</option>
                            <option value="Body Message">Body Message</option>
                            <option value="Aromatherapy">Aromatherapy</option>
                            <option value="Hydrotherapy">Hydrotherapy</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label>Reservation Date*</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" id="rdate" class="form-control date-pic" name="date" placeholder="mm/dd/yyyy" required data-error="Please select reservation date">
                                </div><!-- /.input group -->
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6">
                            <div class="bootstrap-timepicker">
                                <div class="form-group">
                                    <label>Time picker*</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <input type="text" id="rtime" name="time" class="form-control timepicker" required data-error="Please select reservation time">
                                    </div><!-- /.input group -->
                                    <div class="help-block with-errors"></div>
                                </div><!-- /.form group -->
                            </div>
                        </div>
                    </div>

                    <div class="submit-block text-right">
                        <a href="/templates/amella/#" class="btn btn-default" data-dismiss="modal">Cancel</a>
                        <input value="Submit" name="submit" class="btn btn-primary" type="submit">
                    </div>

                    <div id="msgSubmitRes" class="h3 text-center hidden"></div>

                </form>
            </div>
        </div>
    </div>
</div>
