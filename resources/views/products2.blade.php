<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />

  <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <style>
    .addProducts {
      float: right;
      margin-bottom: 1rem;

    }

    .tableScroll {
      max-width: 100%;
      overflow-x: scroll;
    }
  </style>
</head>

<body>
  <!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="{{route('index')}}" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
          </a>
          <a href="{{route('products')}}" class="list-group-item list-group-item-action py-2 ripple active">
            <i class="fas fa-chart-area fa-fw me-3"></i><span>Products</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-lock fa-fw me-3"></i><span>Password</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-chart-line fa-fw me-3"></i><span>Analytics</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-globe fa-fw me-3"></i><span>International</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-building fa-fw me-3"></i><span>Partners</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-users fa-fw me-3"></i><span>Users</span></a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a>
        </div>
      </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="25" alt="" loading="lazy" />
        </a>
        <!-- Search form -->
        <form class="d-none d-md-flex input-group w-auto my-auto">
          <input autocomplete="off" type="search" class="form-control rounded" placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px" />
          <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
        </form>

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <!-- Notification dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-bell"></i>
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Some news</a></li>
              <li><a class="dropdown-item" href="#">Another news</a></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>

          <!-- Icon -->
          <li class="nav-item">
            <a class="nav-link me-3 me-lg-0" href="#">
              <i class="fas fa-fill-drip"></i>
            </a>
          </li>
          <!-- Icon -->
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#">
              <i class="fab fa-github"></i>
            </a>
          </li>

          <!-- Icon dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="united kingdom flag m-0"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#"><i class="united kingdom flag"></i>English
                  <i class="fa fa-check text-success ms-2"></i></a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="poland flag"></i>Polski</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="china flag"></i>中文</a>
              </li>
              <li>tableScroll
                <a class="dropdown-item" href="#"><i class="japan flag"></i>日本語</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="germany flag"></i>Deutsch</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="france flag"></i>Français</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="spain flag"></i>Español</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="russia flag"></i>Русский</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="portugal flag"></i>Português</a>
              </li>
            </ul>
          </li>

          <!-- Avatar -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22" alt="" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{route('profile')}}">My profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->


  <!--Main layout-->
  <main style="margin-top: 58px">
    <div class="container pt-4">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary addProducts" onclick="addModal()">
        Add Products
      </button>

      <!-- Modal -->
      

      
      <div id="content-body">
        @include('product2_list',['product' => $products])
      </div>

      <div id="product-add">
          @include('product_add')
      </div>
      <div id="product-update">
      </div>

    </div>


</main>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function tableShow() {
      $('#myTable').DataTable();
      let myTable_wrapper = document.getElementById('myTable_wrapper');
      myTable_wrapper.classList.add('tableScroll');
    }
    tableShow();
    // const addModal = new Modal(document.getElementById('exampleModal'),null);
    function addModal(){
        let modal = $('#exampleModal')
        modal.show();
        console.log(modal)
    }
    function updateStatus(button) {
      let prod_id = button.data('id');
      let status = button.val();
      let contentBody = $('#content-body');
      console.log(prod_id);
      console.log(status);
      console.log(contentBody);

      $.ajax({
        url: "{{ route('changeStatus') }}",
        type: "POST",
        // dataType: "json",
        data: {
          'id': prod_id,
          'status': status,
          '_token': '{{ csrf_token() }}'
        },
        success: function(response) {
          // Handle the success response
          // console.log(response);
          contentBody.html(response);
          tableShow();
          // alert(response);
        },
        error: function(xhr) {
          // Handle the error response
          console.log(xhr.responseText);
        }
      });

    }

    function deleteProduct(button) {
      let con = confirm('are you sure want delete');
      if (con) {
        let prod_id = button.data('id');
        let contentBody = $('#content-body');
        console.log(prod_id);
        console.log(contentBody);
        $.ajax({
          url: "{{ route('deleteProduct') }}",
          type: "POST",
          // dataType: "json",
          data: {
            'id': prod_id,
            '_token': '{{ csrf_token() }}'
          },
          success: function(response) {
            // Handle the success response
            // console.log(response);
            contentBody.html(response);
            tableShow();
            // alert(response);
          },
          error: function(xhr) {
            // Handle the error response
            console.log(xhr.responseText);
          }
        });
      }



    }

    function updateProductView(button) {

      let prod_id = button.data('id');
      let contentBody = $('#product-update');
      console.log(prod_id);
      console.log(contentBody);
      $.ajax({
        url: "{{ route('updateProductView') }}",
        type: "POST",
        // dataType: "json",
        data: {
          'id': prod_id,
          '_token': '{{ csrf_token() }}'
        },
        success: function(response) {
          contentBody.html(response);
          $("#updateModal").modal('show');
          
        },
        error: function(xhr) {
          // Handle the error response
          console.log(xhr.responseText);
        }
      });

    }
      $(document).on('submit', '#updateProductForm', function(e) {
    
        e.preventDefault();
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        let form = $('#updateProductForm')[0];
        let data = new FormData(form);
        
        let contentBody = $('#content-body');

        $.ajax({
          url: "{{ route('updateProduct') }}",
          type: "POST",
          data: data,
          processData: false,
          contentType: false,
          success: function(data) {
            console.log(data);
            contentBody.html(data);
            tableShow();
            alert('Updated');

            $("#updateModal").modal('hide');
          },
          error: function(e) {
            console.log(e.responseText);
          }
        });

        // $("#productForm").reset();


      });


      $(document).on('submit', '#productForm', function(e){
        e.preventDefault();
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        let form = $('#productForm')[0];
        let data = new FormData(form);
        console.log(form);
        console.log("Data");
        console.log(data);
        let contentBody = $('#content-body');

        $.ajax({
          url: "{{ route('productsAdd') }}",
          type: "POST",
          data: data,
          processData: false,
          contentType: false,
          success: function(data) {
            console.log(data);
            contentBody.html(data);
            tableShow();
            alert('success');

          },
          error: function(e) {
            console.log(e.responseText);
          }
        });
        $("#exampleModal").modal('hide');

        // $("#productForm").reset();


      });
    
  </script>


</body>

</html>