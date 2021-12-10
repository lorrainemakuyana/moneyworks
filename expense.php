<?php require("functions/add-expense.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Expense - Moneyworks!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="#" alt="">
        <span class="d-none d-lg-block">Moneyworks!</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <?php echo "<a class='nav-link' href='dashboard.php?username=$username'>"; ?>
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
      <?php echo "<a class='nav-link' href='balance.php?username=$username'>"; ?>
          <i class="bi bi-cash-coin"></i>
          <span>Update Balance</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <?php echo "<a class='nav-link' href='expense.php?username=$username'>"; ?>
          <i class="bx bxs-cart"></i>
          <span>Add Expense</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
      <?php echo "<a class='nav-link' href='investment.php?username=$username'>"; ?>
          <i class="bi bi-arrow-down-up"></i>
          <span>Add Investment</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
      <?php echo "<a class='nav-link collapsed' href='user-profile.php?username=$username'>"; ?>
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
      <?php echo "<a class='nav-link collapsed' href='contact.php?username=$username'>"; ?>
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="login.php">
          <i class="bi bi-box-arrow-left"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->
      
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Expenses</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New Expense</h5>

              <!-- General Form Elements -->
              <form method="post" >
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" required>
                  </div>
                </div>
                

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Category</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" name="category" required>
                      <option selected>Select Category</option>
                      <option value="general">General</option>
                      <option value="fashion">Clothing</option>
                      <option value="vacation">Vacation</option>
                      <option value="food">Food</option>                    
                      <option value="gifts">Gifts</option>
                      <option value="miscellaneous">Miscellaneous</option>
                    </select>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Cost</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="cost" step="0.01" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">          </label>
                  <div class="col-sm-10">
                    <input type="submit" name="addexpense" class="btn btn-primary" value="Add Expense">
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; 2021 <strong><span>Moneyworks!</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>