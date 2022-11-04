<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
      .div_center{
          text-align: center;
          padding-top:40px;
      }
      .font_size{
          font-size:40px;
          padding-bottom:40px;
      }
      .text_color{
          color: black;
          padding-bottom: 20px;
      }
      .center{
          margin: auto;
          width: 50%;
          text-align: center;
          margin-top:30px;
          border: 3px solid white;
      }
      label{
        display: inline-block;
        width: 200px;
      }
      .div_design{
        padding-bottom: 15px;
      }
      </style>
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
            <h1 class="font_size">
              Add Product
            </h1>


            <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">
          @csrf;
              <div class="div_design">
            <label>Tên sản phẩm</label>
            <input class="text_color"type="text" name="title" placeholder="Write a title" required="">
          </div>
           
          <div class="div_design">
            <label>Mô tả sản phẩm</label>
            <input class="text_color"type="text" name="description" placeholder="Write a title"  required="">
          </div>
          <div class="div_design">

            <label>Giá gốc: </label>
            <input class="text_color"type="number" name="price" placeholder="Write a title"  required="">
          </div >
          
          <div class="div_design">

            <label>Giá giảm: </label>
            <input class="text_color"type="number" name="discount_price" placeholder="Write a Discout is ap"  required="">
          </div>
          <div class="div_design">

            <label>Số lượng: </label>
            <input class="text_color"type="number" name="quantity" placeholder="Write a Discout is ap"  required="">
          </div>

         
          
          <div class="div_design">

            <label>Loại sản phẩm: </label>

            <select class="text_color" name="catagory" required="">
              <option value="" selected> Thêm sản phẩm ở đây</option>
              
              @foreach ($catagory as $catagory)
              <option value="{{ $catagory->catagory_name }}">{{ $catagory->catagory_name }}</option>
              @endforeach
           
           
            </select>
          </div>
        
          
          <div class="div_design">

            <label>Ảnh sản phẩm: </label>
            <input type="file" name="image" required=""  >
          </div>

          <div class="div_design">
            <input type="submit" value="Add Product" class="btn btn-primary">
          </div>

        </form>
          </div>
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