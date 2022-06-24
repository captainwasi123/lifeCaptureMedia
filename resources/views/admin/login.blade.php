<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login | LifeCaptureMedia</title>

    @include('admin.includes.style')
</head>
<body class="crm_body_bg">
    


<section class="mt_60">
    <div class="row">
        
        <div class="col-lg-12">
            <div class="white_box mb_30 mt_60">
                <div class="row justify-content-center">
                  
                    <div class="col-lg-6 text-center">
                        <img src="{{URL::to('/public/admin/img/logo.png')}}">
                        <h4>Administration</h4>
                        <br><br>
                        <!-- sign_in  -->
                        <div class="modal-content cs_modal">
                            <div class="modal-header justify-content-center theme_bg_1">
                                <h5 class="modal-title text_white">Log in</h5>
                            </div>
                            <div class="modal-body">
                                <form method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                    <button type="submit" class="btn_1 full_width text-center">Log in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- scripts -->
    @include('admin.includes.script')

    @if(session()->has('error'))
        <script type="text/javascript">
            Swal.fire({
              icon: 'error',
              title: 'Alert...',
              text: '{{ session()->get("error") }}'
            });
        </script>
    @endif
    @if(session()->has('success'))
        <script type="text/javascript">
            Swal.fire({
              icon: 'success',
              title: 'Success!',
              text: '{{ session()->get("success") }}'
            });
        </script>
    @endif
</body>

</html>
