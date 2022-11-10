<!DOCTYPE html>
<html lang="en">
  <head>
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
 <style>
    .title_deg{
        text-align: center;
        font-size: 25px;
        font-weight: bold;
        padding-bottom: 40px;
    }
    .table_deg{
        border:2px solid white;
        width: 100%;
        margin:auto;
        padding-top:50px;
        text-align: center;
    }
    .th_deg{
        background-color: skyblue;
    }
    .img_size{
        width: 200px;
        height: 200px;
    }
 </style>
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
            <h1 class="title_deg">All Orders</h1>
     <div style="padding-left:400px;padding-bottom:30px">
        <form action="{{ url('search') }}" method="get">
            @csrf
            <input style="color: black" type="text" name="search" placeholder="Search For Something">
            <input type="submit" value="Search" class="btn btn-outline-primary">
        </form>
     </div>
     
            <table class="table_deg">
            <tr class="th_deg">
                <th style="padding: 10px">
                    Name
                </th>
                <th  style="padding: 10px">
                    Email
                </th>
                <th  style="padding: 10px">
                    Address
                </th>
                <th  style="padding: 10px"> 
                    Phone
                </th>
                <th  style="padding: 10px" >
                    Product Title
                </th>
                <th  style="padding: 10px">
                    Quantity
                </th>
                <th  style="padding: 10px">
                    Price
                </th>
                <th  style="padding: 10px">
                    Payment Status
                </th>
                <th  style="padding: 10px" >
                    Delivery Status
                </th>
                <th  style="padding: 10px">
                    Image
                </th>
                <th  style="padding: 10px">
                    Delivered
                </th>
                <th  style="padding: 10px">
                    Print PDF
                </th>
                <th  style="padding: 10px">
                        Send Email
                </th>
            </tr>
            @forelse ($order as $order)
                
            <tr>
                <td>
                    {{$order->name  }}
                </td>
                <td>
                    {{$order->email  }}
                </td>
                <td>
                    {{$order->address  }}
                </td>
                <td>
                    {{$order->phone  }}
                </td>
                <td>
                    {{$order->product_title  }}
                </td>
                <td>
                    {{$order->quantity  }}
                </td>
                <td>
                    {{$order->price  }}
                </td>
                <td>
                    {{$order->payment_status  }}
                </td>
                <td>
                    {{$order->delivery_status  }}
                </td>
                <td>
                    <img class="img_size"src="./product/{{ $order->image }}">
                </td>


                <td>
                    @if ($order->delivery_status=='processing')
                    <a href="{{ url('delivered',$order->id) }}" onclick="return confirm('Are you sure this product is delivered')"class="btn btn-primary">Delivered</a>
                    @else
                    <p style="color: green">
                        Delivered
                    </p>
                    @endif
                </td>
                <td>
                    <a href="{{ url('print_pdf',$order->id) }}" class="btn btn-secondary">Print PDF</a>
                </td>
                <td>
                    <a href="{{ url('send_email',$order->id) }}" class="btn btn-info">Send Email</a>
                </td>
            </tr>

            @empty
            <tr>
                <Td colspan="16">
                    <p>No Data Found</p>

                </Td>
            </tr>
         
            @endforelse

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
  </body>
</html>