<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Contact Us</title>
</head>
<body>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <div class="container">
        <h2 class="text-center">Contact Form</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 pb-5">
                <form action="{{ route('contact') }}" method="post">
                    @csrf
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                        </div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h4><i class="icon fa fa-ban"></i>{{ session('error') }}</h4>
                        </div>
                    @endif

                    <div class="card border-primary rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-info text-white text-center py-2">
                                <h3><i class="fa fa-envelope"></i> Contact us</h3>
                                <p class="m-0">We will gladly help you</p>
                            </div>
                        </div>
                        <div class="card-body p-3">

                            <!--Body-->
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                    </div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                    </div>
                                    <textarea class="form-control" name="message" placeholder="Your Message" required></textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" value="Submit" class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
