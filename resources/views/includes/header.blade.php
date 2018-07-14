<header class="main-header" id="main-header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container clearfix">
            <!-- Top Left -->
            <div class="top-left">
                <ul class="clearfix">
                    <li><a href="#"><span class="fa fa-circle"></span> Hello guest! Welcome to HOPE, Inc.</a></li>
                </ul>
            </div>
            <!-- Top Right -->
            <div class="top-right">
                <ul class="clearfix">
                    <li><a href="#"><span class="fa fa-phone"></span> (+064)-342-27582</a></li>
                    <li><a href="#"><span class="fa fa-clock-o"></span> 9am - 5pm</a></li>
                    <li><a href="mailto:noreply@regulator.com"><span class="fa fa-at"></span> info@HOPE.com</a></li>
                    <li><a href="#"><span class="fa fa-map-marker"></span> Find us on map</a></li>
                </ul>
            </div>

        </div>
    </div><!-- Header Top End -->

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container clearfix">

            <!--Outer Box-->
            <div class="outer-box">

                <!-- Logo -->
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="/images/logo.png" alt="HOPE"></a>
                </div>

                <!-- Main Menu -->
                @include('includes.nav')

                <!--Cart Button-->
                <div class="appoinment-btn">
                    <!-- Modal: donate now Starts -->
                    <a class="thm-btn a-inner letter-spacing-1" data-toggle="modal" href="#modal-donate-now">Appoinment</a>
                    <div class="modal fade" id="modal-donate-now" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog style-one" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Make an Appoinment</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="appoinment-form-outer">
                                        <form action="contact.html" method="post">

                                            <!--Form Portlet-->
                                            <div class="form-portlet">
                                                <h3 class="text-thm">Fill Up Appointment Form.</h3>

                                                <div class="row clearfix">

                                                    <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                                        <div class="field-label">Name <span class="required">*</span></div>
                                                        <input type="text" required="" placeholder="First Name" value="" name="name">
                                                    </div>

                                                    <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                                        <div class="field-label">Email <span class="required">*</span></div>
                                                        <input type="email" required="" placeholder="Email" value="" name="name">
                                                    </div>

                                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                                        <div class="field-label">Phone <span class="required">*</span></div>
                                                        <input type="text" required="" placeholder="Phone" value="" name="name">
                                                    </div>

                                                    <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                                        <div class="field-label">Age <span class="required">*</span></div>
                                                        <input type="text" required="" placeholder="age" value="" name="name">
                                                    </div>

                                                    <div class="form-group date col-lg-6 col-md-6 col-xs-12">
                                                        <div class="field-label">Appoinment Date <span class="required">*</span></div>
                                                        <input class="datepicker" type="text" required="" placeholder="MM/DD/Year" value="" name="name">
                                                    </div>

                                                    <div class="form-group time col-lg-6 col-md-6 col-xs-12">
                                                        <div class="field-label">Time<span class="required">*</span></div>
                                                        <input type="text" class="timepicker" required="" placeholder="Time" value="" name="name">
                                                    </div>

                                                    <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                                        <div class="field-label">Address <span class="required">*</span></div>
                                                        <input type="text" required="" placeholder="Address" value="" name="name">
                                                    </div>


                                                    <div class="text-center"><button class="thm-btn b-inner font-16" type="submit">Appoinment</button></div>

                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal: donate now Ends -->
                </div>

            </div>
        </div>
    </div><!-- Header Lower End-->

</header><!--End Main Header -->