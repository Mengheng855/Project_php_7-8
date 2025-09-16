<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flexy Free Bootstrap Admin Template by WrapPixel</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!--  App Topstrip -->
    <div class="app-topstrip bg-dark py-6 px-3 w-100 d-lg-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center justify-content-center gap-5 mb-2 mb-lg-0">
        <a class="d-flex justify-content-center" href="#">
          <img src="../assets/images/logos/logo-wrappixel.svg" alt="" width="150">
        </a>


      </div>



    </div>
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./dashboard.php" class="text-nowrap logo-img">
            <img src="../assets/images/logos/logo.svg" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-6"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.php" aria-expanded="false">
                <i class="ti ti-atom"></i>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <!-- ---------------------------------- -->
            <!-- Dashboard -->
            <!-- ---------------------------------- -->
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="product.php" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-aperture"></i>
                  </span>
                  <span class="hide-menu">Products</span>
                </div>

              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="user.php" aria-expanded="false">
                <div class="d-flex align-items-center gap-3">
                  <span class="d-flex">
                    <i class="ti ti-shopping-cart"></i>
                  </span>
                  <span class="hide-menu">Users</span>
                </div>

              </a>
            </li>
          </ul>
          </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler " id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>

          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

              <li class="nav-item dropdown">
                <a class="nav-link " href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <?php
                  echo '<img src="../Auth/image/' . $_SESSION['profile'] . '" alt="" width="35" height="35" class="rounded-circle">';
                  ?>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">

                    <a href="./login.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="body-wrapper-inner">
        <div class="container-fluid">
          <!--  Row 1 -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">

                  <div class="table-responsive mt-4">
                    <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
                      <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        +Add Product
                      </button>
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>Title</th>
                          <th>
                            Price
                          </th>
                          <th>
                            Description
                          </th>
                          <th>
                            Image
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>001</td>
                          <td>T-shirt</td>
                          <td>$12.5</td>
                          <td>New popular T-shirt</td>
                          <td><img width="70px" height="70px" class="rounded-circle" src="https://i.pinimg.com/1200x/05/a6/39/05a639f55ec0188d3b4f83ceb52c98ec.jpg" alt=""></td>
                          <td>
                            <button class="btn btn-danger" type="button">Delete</button>
                            <button class="btn btn-warning" type="button">Edit</button>
                          </td>
                        </tr>
                      </tbody>
                      <!-- Button trigger modal -->


                      <!-- Modal -->
                      <<!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">

                              <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                              <form action="" id="form" method="POST" enctype="multipart/form-data">
                                <div class="modal-body">
                                  <div class="row g-3">

                                    <!-- Title -->
                                    <div class="col-md-6">
                                      <label for="title" class="form-label">Product Title</label>
                                      <input type="text" name="title" id="title" class="form-control" placeholder="Enter product title" required>
                                    </div>

                                    <!-- Price -->
                                    <div class="col-md-6">
                                      <label for="price" class="form-label">Price ($)</label>
                                      <input type="number" name="price" id="price" class="form-control" step="0.01" placeholder="Enter price" required>
                                    </div>

                                    <!-- Description -->
                                    <div class="col-12">
                                      <label for="description" class="form-label">Description</label>
                                      <textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter product description" required></textarea>
                                    </div>

                                    <!-- Image -->
                                    <div class="col-12">
                                      <label for="image" class="form-label">Product Image</label> <br>
                                      <img width="70px" id="image" height="70px" class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-bNOpQOznqtb7Ao-2LgUUQayQFpGNvr75Mw&s" alt="">
                                      <input type="file" name="file" id="file" class="form-control"  required>
                                    </div>

                                  </div>
                                </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="button" id="save" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                                </div>
                              </form>

                            </div>
                          </div>
                        </div>

                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>
</html>
<script>
  $(document).ready(function(){
    $('#file').hide();
    $('#image').click(function(){
      $('#file').click();
    })
    $('#file').change(function(){
      const file=this.files[0];
      if(file){
        const img=URL.createObjectURL(file);
        $('#image').attr('src',img);
      }
    })
    $('#save').click(function(){
     
      let file=$('#file')[0].files[0];
      let title=$('#title').val();
      let price=$('#price').val();
      let des=$('#description').val();

      const formdata=new FormData();
      formdata.append('file',file);
      formdata.append('title',title);
      formdata.append('price',price);
      formdata.append('description',des);
      $.ajax({
        url:'insert.php',
        method:'POST',
        data:formdata,
        contentType:false,
        processData:false,
        success:function(){
          

        }
      })
    })
  })
</script>