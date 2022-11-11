<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
    .div_center{
        text-align: center;
        padding-top:40px;
    }
    .h2_font{
        font-size:40px;
        padding-bottom:40px;
    }
    .input_color{
        color: black;
    }
    .center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top:30px;
        border: 3px solid white;
    }
    </style>
    <!-- Required meta tags -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message')}}
                </div>
                @endif
                <div class="div_center">
                    <h2 class="h2_font">
                        Add Catagory
                    </h2>
                    <form action="{{ url('/add_catagory') }}" method="POST">
                        @csrf
                        <input class="input_color" type="text" name="catagory" placeholder="Write catagory name">
                        <input type="submit" class="btn btn-primary"name="submit" value="Add Catagory">
                    </form>
                </div>
                <table class="center">
                    <tr>
                        <td>
                            Catagory Name
                        </td>
                        <td>
                           Action 
                        </td>
                    </tr>
                    @foreach ($data as $data)
                       <tr>
                        <td>{{ $data->catagory_name }}</td>
                        <td>
                            Toys
                        </td>
                        <td>
                            <a onclick="confirmation(event)" class="btn btn-danger" href="{{ url('delete_catagory',$data->id) }}" >Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    
    <!-- End custom js for this page -->
    <script>
        function confirmation(ev){
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);
            swal(
                {
                    title: "Are you sure to cancel this Catagory",
                    text: "You will not be able to revert this",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
    
                }  )
                .then((willCancel)=>
                {
                    if (willCancel) {
                        window.location.href = urlToRedirect;
                    }
                });
        }
       </script>
  </body>
</html>