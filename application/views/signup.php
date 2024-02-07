 <!-- Back to home Start -->
        <div class="back-to-home rounded d-none d-sm-block">
            <a href="<?php echo base_url() ?>" class="text-white rounded d-inline-block text-center"><i data-feather="home" class="fea icon-sm"></i></a>
        </div>
        <!-- Back to home End -->

        <!-- Hero Start -->
        <section class="user-pages d-flex align-items-center" style="background: url('assets/images/home/user.jpg') center center;">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8">
                        <div class="login-page bg-white shadow-lg rounded p-4 mt-4 position-relative">
                            <div class="text-center">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/loader-logo.png" height="75" alt="">
                                </a>
                                <h5 class="my-4">Registration Form</h5>  
                            </div>
                            <form class="login-form">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">                                               
                                            <label class="form-label">First name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="s" required="" placeholder="First Name :">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control"  name="email" required="" placeholder="Your Email :">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Password <span class="text-danger">*</span></label>
                                            <input type="password" class="form-control"  required="" placeholder="Password :">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100">Register</button>
                                    </div>
                                    
                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="text-dark me-2">Already have an account ?</small> <a href="<?php echo base_url() . 'login'?>" class="text-dark fw-bold">Sign in</a></p>
                                    </div>
                                </div>
                            </form>
                        </div><!--end login-->
                    </div>
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->