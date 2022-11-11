<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Required meta tags -->
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
  <style type="text/css">
    .center {
        margin:auto;
        width:50%;
        border: 2px solid white;
        text-align: center;
        margin-top: 40px;
    }
    .font-size{
        text-align: center;
        font-size: 40px;
        padding-top:20px;
    }
.img_size{
    width: 150px;
    height: 150px;
}
.th_coloer{
    background: skyblue;
}
</style>
</head>
  <body>
    @include('sweetalert::alert')
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
            <h2 class="font-size">Tất cả sản phẩm</h2>
            <table class="center">
                <tr class="th_color">
                    <th>
                        Sản Phẩm
                    </th>
                    <th>
                        Mô tả
                    </th>
                    <th>
                        Giá 
                    </th>
                    <th>
                        Giảm giá
                    </th>
                    <th>Số lượng</th>
                    <th>
                        Loại
                    </th>
                    <th>
                        Ảnh
                    </th>
                    <th>
                        Delete
                    </th>
                    <th>
                        Edit
                    </th>
                </tr>
                @foreach ($product as $product )
                <tr>
                    <td>
                        {{ $product->title }}
                    </td>
                    <td>
                        {{ $product ->description }}
                    </td>
                    <td>
                        {{ $product ->price }}
                    </td>
                    <td>
                        {{ $product ->discount_price }}
                    </td>
                    <td>
                        {{ $product->quantity }}
                    </td>
                    <td>
                        {{ $product ->catagory }}
                    </td>
                    <td>
                        <img class="img_size"src="./product/{{ $product->image }}">
                    </td>
                    <td>
                        <a class="btn btn-danger"  onclick="confirmation(event)" href="{{ url('delete_product',$product->id) }}">Delete</a>
                    </td>
                    <td>
                        <a href="{{ url('update_product',$product->id) }}" class="btn btn-success">Edit</a>
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
                    title: "Are you sure to cancel this product",
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