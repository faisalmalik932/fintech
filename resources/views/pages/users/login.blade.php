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
                                        src="{{ url('public/assets/images/logo-sm.png') }}" height="55" alt="logo" class="auth-logo"></a>
                            </div>
                            <!--end auth-logo-box-->

                            <div class="text-center auth-logo-text">
                                <h4 class="mt-0 mb-3">Login</h4>

                            </div>
                            <!--end auth-logo-text-->


                            <form class="form-horizontal auth-form my-4">
                                   @csrf 
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="input-group mb-3">
                                        <span class="auth-form-icon">
                                            <i class="dripicons-mail"></i>
                                        </span>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Enter Email">
                                    </div>
                                </div>
                                <!--end form-group-->

                 
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-user"></i>
                                                </span>
                                                <input type="password" name="password" class="form-control" id="password"
                                                    placeholder="Enter Password">
                                            </div>
                                        </div>
                                        <!--end form-group-->
                                    </div>

                                    <div class="col-md-6">
                               
                                        <!--end form-group-->
                   



                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-round btn-block waves-effect waves-light loginBtn"
                                            type="submit">Login <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end form-group-->
                            </form>
                            <!--end form-->
                        </div>
                        <!--end /div-->

                        <div class="m-3 text-center text-muted">
                            <p class="">Dont have an account ? <a href="{{ route('register') }}"
                                    class="text-primary ml-2">Register</a></p>
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


    <script>

$(document).ready(function() {
        $(".loginBtn").click(function(e) {
  
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    
            e.preventDefault();
            var email     = $("#email").val();
            var password  = $("#password").val();
    
            $.ajax({
                url: 'user_login',
                type: 'POST',
                data: {
                    email: email,
                    password: password
                },
                success: function(data) {
                    if(data.status) {
                        window.location = "{{ route('dashboard') }}"
                        console.log('successfully submitted');
                    } else {
                        console.log('Data not submitted');
                    }
                }
            });
          });  
        }); 
    </script>

</body>

</html>