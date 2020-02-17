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
                                <a href="#" class="logo logo-admin"><img
                                        src="{{ asset('public/assets/images/logo-sm.svg') }}" height="40" width="65" alt="logo"
                                        class="auth-logo"></a>
                            </div>
                            <!--end auth-logo-box-->

                            <div class="text-center auth-logo-text">
                                <h4 class="mt-0 mb-3">Register</h4>

                            </div>
                            <!--end auth-logo-text-->


                            <form class="form-horizontal auth-form my-4" id="reg_form">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="individual" name="type"
                                                class="custom-control-input">
                                            <label class="custom-control-label" for="individual">Individual</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="company" name="type" class="custom-control-input">
                                            <label class="custom-control-label" for="company">Company</label>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="form-group">
                                    <label for="fname">First name</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="fname" id="fname"
                                            placeholder="Enter First Name">
                                    </div>
                                </div>
                                <!--end form-group-->


                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <div class="input-group mb-3">
                                        <input type="lname" class="form-control" name="lname" id="lname"
                                            placeholder="Enter Last Name">
                                    </div>
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="input-group mb-3">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Enter Email">
                                    </div>
                                </div>
                                <!--end form-group-->

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <div class="input-group mb-3">
                                                <input type="password" name="password" class="form-control"
                                                    id="password" placeholder="Enter Password">
                                            </div>
                                        </div>
                                        <!--end form-group-->
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cpassword">Confirm Password</label>
                                            <div class="input-group mb-3">
                                                <input type="password" name="cpassword" class="form-control" id="cpassword"
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
                                        <button
                                            class="btn btn-primary btn-round btn-block waves-effect waves-light save_register_btn"
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
                            <p class="">Already have an account ? <a href="{{ route('login') }}"
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
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>


    <script>

        $(document).ready(function () {

            $('.save_register_btn').on('click', function (e) {

                var fname = $('#fname').val();
                var lname = $('#lname').val();
                var email = $('#email').val();
                var company = $('#company').val();
                var password = $('#password').val();
                var cpassword = $('#cpassword').val();
                var form = $(this).parents('form');
                
           
                $(form).validate({
                    rules: {
                        fname: {
                            required: true,
                        },
                        lname: {
                            required: true,
                        },
                        email: {
                            required: true,
                            email: true,
                        },
                        password: {
                            required: true,
                            minlength: 6
                        },
                        cpassword: {
                            required: true,
                            equalTo: "#password"
                        },
                    },
                    messages: {
                        fname: "First Name is required.",
                        lname: "Last Name is required.",
                    },
                    errorElement: "em",
                        errorPlacement: function (error, element) {
                        error.appendTo(element.parent().parent().after());
                    },
                    submitHandler: function () {
                        var formData = new FormData(form[0]);
                        $.ajax({
                            type: 'POST',
                            url: 'save_register',
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function (data) {
                                document.getElementById("reg_form").reset();
                                if (data.status) {
                                    window.location = "{{ route('login') }}"
                                    showCustomSucces(data.message);
                                } else if(data.exists) {
                                    showCustomError(data.message);
                                } else {
                                    showCustomError(data.message);
                                }
                            },
                            error: function (err) {
                              console.log(err);
                            }
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>
