<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.header')

</head>

<body class="account-body accountbg">

    <!-- Log In page -->
    <div class="row vh-100 ">
        <div class="col-12 align-self-center">
            <div class="auth-page">
                <div class="card auth-card shadow-lg">
                    <div class="card-body">
                        <div class="px-3">
                            <div class="auth-logo-box">
                                <a href="../analytics/analytics-index.html" class="logo logo-admin"><img
                                        src="../assets/images/logo-sm.png" height="55" alt="logo" class="auth-logo"></a>
                            </div>
                            <!--end auth-logo-box-->

                            <div class="text-center auth-logo-text">
                                <h4 class="mt-0 mb-3">Register</h4>

                            </div>
                            <!--end auth-logo-text-->


                            <form class="form-horizontal auth-form my-4" action="index.html">


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="individual" name="customRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="individual">Individual</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="company" name="customRadio"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="company">Company</label>
                                        </div>
                                    </div>
                                </div>

                     <br>
                                <div class="form-group">
                                    <label for="fname">First name</label>
                                    <div class="input-group mb-3">
                                        <span class="auth-form-icon">
                                            <i class="dripicons-mail"></i>
                                        </span>
                                        <input type="fname" class="form-control" id="fname"
                                            placeholder="Enter First Name">
                                    </div>
                                </div>
                                <!--end form-group-->


                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <div class="input-group mb-3">
                                        <span class="auth-form-icon">
                                            <i class="dripicons-mail"></i>
                                        </span>
                                        <input type="lname" class="form-control" id="lname"
                                            placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="useremail">Email</label>
                                    <div class="input-group mb-3">
                                        <span class="auth-form-icon">
                                            <i class="dripicons-mail"></i>
                                        </span>
                                        <input type="email" class="form-control" id="useremail"
                                            placeholder="Enter Email">
                                    </div>
                                </div>
                                <!--end form-group-->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-user"></i>
                                                </span>
                                                <input type="password" class="form-control" id="password"
                                                    placeholder="Enter Password">
                                            </div>
                                        </div>
                                        <!--end form-group-->
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cpassword">Confirm Password</label>
                                            <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-user"></i>
                                                </span>
                                                <input type="password" class="form-control" id="cpassword"
                                                    placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                </div>

                                <div class="form-group row mt-4">
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-switch switch-success">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customSwitchSuccess">
                                            <label class="custom-control-label text-muted" for="customSwitchSuccess">By
                                                registering you agree to the Frogetor <a href="#"
                                                    class="text-primary">Terms of Use</a></label>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end form-group-->

                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-round btn-block waves-effect waves-light"
                                            type="submit">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end form-group-->
                            </form>
                            <!--end form-->
                        </div>
                        <!--end /div-->

                        <div class="m-3 text-center text-muted">
                            <p class="">Already have an account ? <a href="../authentication/auth-login.html"
                                    class="text-primary ml-2">Log in</a></p>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end auth-card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
    <!-- End Log In page -->

    @include('includes.scripts')

</body>

</html>
