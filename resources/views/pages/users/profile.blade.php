@extends('layouts.master')


@section('content')

        <div class="page-wrapper">


            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                              
                                <h4 class="page-title">Profile</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body  met-pro-bg">
                                    <div class="met-profile">
                                        <div class="row">
                                            <div class="col-lg-4 align-self-center">
                                                <div class="met-profile-main">
                                                    <div class="met-profile-main-pic">
                                                        <img src="{{ asset('public/users/'.Auth()->user()->image) }}" alt="" class="rounded-circle">
                                                        <span class="fro-profile_main-pic-change" id="uploaded_image">
                                                            <i class="fas fa-camera" id="pic"></i>
                                                            <input type="file" name="image" id="file" style="display:none"/>
                                                        </span>
                                                    </div>
                                                    <div class="met-profile_user-detail">
                                                        <h5 class="met-user-name">{{ucfirst(Auth::user()->fname) }} {{ ucfirst(Auth::user()->lname) }}</h5>                                                        
                                                        <p class="mb-0 met-user-name-post">{{ ucfirst(Auth::user()->type) }}</p>
                                                    </div>
                                                </div>                                                
                                            </div><!--end col-->
                                            <div class="col-lg-4 ml-auto">
                                                <ul class="list-unstyled personal-detail">
                                                    <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> phone </b> : +91 23456 78910</li>
                                                    <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b> Email </b> : {{ Auth::user()->email }}</li>
                                                    <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i> <b>Location</b> : USA</li>
                                                </ul>
                                                <div class="button-list btn-social-icon">                                                
                                                    <button type="button" class="btn btn-blue btn-round">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </button>
            
                                                    <button type="button" class="btn btn-secondary btn-round ml-2">
                                                        <i class="fab fa-twitter"></i>
                                                    </button>
            
                                                    <button type="button" class="btn btn-pink btn-round  ml-2">
                                                        <i class="fab fa-dribbble"></i>
                                                    </button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end f_profile-->                                                                                
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
    
                    <div class="row">                        
                        <div class="col-md-6">
                            <div class="card">      
                                <div class="card-body">
                                    <form id="data_form">
                                        @csrf
                                        <h4 class="mt-0 mb-3 header-title">Profile Details</h4>
                                        <div class="form-group">
                                            <label for="address_line_one">Address 1</label>
                                            <input type="text" class="form-control" id="address_line_one" name="address_line_one" placeholder="Address 1">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="address_line_two">Address 2</label>
                                            <input type="text" class="form-control" id="address_line_two" name="address_line_two" placeholder="Address 2">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="country_name">Country</label>
                                            <input type="text" class="form-control" id="country_name" name="country_name" placeholder="Country">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="city_name">City</label>
                                            <input type="text" class="form-control" id="city_name" name="city_name" placeholder="City">
                                        </div><!--end form-group-->                                        
                                        <div class="form-group">
                                            <label for="postal_code">Postal Code</label>
                                            <input type="text" class="form-control" id="postal_code" name="postal_code" placeholder="Postal Code">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="zip_code">Zip Code</label>
                                            <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip Code">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="phone_no">Mobile Number</label>
                                            <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Enter Mobile Number">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="landline_no">Landline Number</label>
                                            <input type="text" class="form-control" id="landline_no" name="landline_no" placeholder="Enter Landline Number">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="comp_country_corporation_name">Company Country Name</label>
                                            <input type="text" class="form-control" id="comp_country_corporation_name" name="comp_country_corporation_name" placeholder="Enter Company Country Name">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="comp_corporation_city">Company City Name</label>
                                            <input type="text" class="form-control" id="comp_corporation_city" name="comp_corporation_city" placeholder="Enter Company City Name">
                                        </div><!--end form-group-->
                                     
                                        <input type = "hidden" name = "id" value = "{{Auth::user()->id}}">
                                        <button type="submit" class="btn btn-secondary btn-sm save_user_data">Save Change</button>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="setLinkAc">Linked Account</label>
                                            <select class="form-control" id="setLinkAc">
                                                <option>PayPal</option>
                                                <option>VISA</option>
                                                <option>ICICI</option>
                                                <option>HDFC</option>
                                            </select>
                                        </div><!--end form-group-->      
                                        <div class="form-group">
                                            <label for="setCurrency">Collect Currency</label>
                                            <select class="form-control" id="setCurrency">
                                                <option>US Dollar</option>
                                                <option>Pounds</option>
                                                <option>Euro</option>
                                                <option>Yen</option>
                                            </select>
                                        </div>  <!--end form-group-->                                                       
                                        <div class="form-group">
                                            <label for="setChangePassword">Change Wallet Password</label>
                                            <input type="password" class="form-control" id="setChangePassword" placeholder="Password">
                                        </div> <!--end form-group-->                                                   
                                        <button type="submit" class="btn btn-secondary btn-sm">Save Change</button>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container -->
            </div>

@endsection
        
@section('scripts')
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>    

  $(document).ready(function () {

      $('.save_user_data').on('click', function (e) {

          var address_line_one = $('#address_line_one').val();
          var address_line_two = $('#address_line_two').val();
          var country_name = $('#country_name').val();
          var city_name = $('#city_name').val();
          var postal_code = $('#postal_code').val();
          var zip_code = $('#zip_code').val();
          var phone_no = $('#phone_no').val();
          var landline_no = $('#landline_no').val();
          var comp_country_corporation_name = $('#comp_country_corporation_name').val();
          var comp_corporation_city = $('#comp_corporation_city').val();
          var form = $(this).parents('form');
          
     
          $(form).validate({
              rules: {
                  address_line_one: {
                      required: true,
                  },
                  address_line_two: {
                      required: true,
                  },
                  country_name: {
                      required: true,
                  },
                  city_name: {
                      required: true,
                  },
                  postal_code: {
                    required: true,
                      minlength: 5,
                      digits: true
                  },
                  zip_code: {
                      required: true,
                      minlength: 5,
                      digits: true,
                  },
                  phone_no: {
                      required: true,
                      minlength: 11,
                      digits: true,
                  },
                  landline_no: {
                    required: true,
                      minlength: 11,
                      digits: true,
                  },
                  comp_country_corporation_name: {
                      required: true,
                  },
                  comp_corporation_city: {
                      required: true,
                  },
              },
              messages: {
                  address_line_one: "Address Line 1 is required.",
                  address_line_two: "Address Line 2 is required.",
                  country_name: "Country Name is required.",
                  city_name: "City Name is required.",
                  postal_code: 
                  {
                    required: "Postal Code is required",
                    minlength: "Postal Code must contain at least {0} characters",
                    digits: "Postal Code can only contain numbers",
                  },
                  zip_code: 
                  {
                    required: "this field is required",
                    minlength: "this field must contain at least {0} characters",
                    digits: "this field can only contain numbers",
                  },
                  phone_no: 
                  {
                    required: "Mobile Number is required",
                    minlength: "Mobile Number must contain at least {0} characters",
                    digits: "Mobile Number can only contain numbers",
                  },
                  landline_no:
                  {
                    required: "Landline Number is required",
                    minlength: "Landline Number must contain at least {0} characters",
                    digits: "Landline Number can only contain numbers",
                  },
                  comp_country_corporation_name: "Company Country Name is required.",
                  comp_corporation_city: "Company City Name is required.",
              },
              errorElement: "em",
                  errorPlacement: function (error, element) {
                  error.appendTo(element.parent().after());
              },
              submitHandler: function () {
      
                  var formData = new FormData(form[0]);
                  $.ajax({
                      type: 'POST',
                      url: 'save_userdata',
                      data: formData,
                      processData: false,
                  contentType: false,
                      success: function (data) {
                          document.getElementById("data_form").reset();
                          console.log(data);
                          if (data.status) {
                              console.log('Record Inserted successfully');
                          } else {
                           console.log('Record Not Inserted');
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
<script>
    $('#pic').click(function () {
  $("input[type='file']").trigger('click');
});

$('input[type="file"]').on('change', function() {
  var val = $(this).val();
  $(this).siblings('span').text(val);
})
</script>

<script>
    $(document).ready(function () {
        $(document).on('change', '#file', function(){
            var property = document.getElementById("file").files[0];
            var image_name = property.name;
            var image_extension = image_name.split(".").pop().toLowerCase();
            if (jQuery.inArray(image_extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) 
            {
                alert("Invalid Image File");    
            }
            var image_size = property.size;
            if (image_size > 2000000) 
            {
                alert("Image size is too big");    
            }
            else
            {
                var form_data = new FormData();
                form_data.append("image", property);
                $.ajax({
                    headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                             },
                    url:"save_picture",
                    method: "POST",
                    data:form_data,
                    contentType:false,
                    cache:false,
                    processData:false,
                    beforeSend:function()
                    {
                        $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label");
                    },
                    success:function(data)
                    {
                        $('#uploaded_image').html(data);
                         window.location.reload();
                    }
                })
            }
        });
    });
</script>

@endsection