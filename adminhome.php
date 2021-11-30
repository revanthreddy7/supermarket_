<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="adminhome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-custom navbar-mainbg">
    <img src="logo.png" alt="" height=80px width=100px>
    <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
            
            <li class="nav-item active">
                <a class="nav-link" href="products.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products.php">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="costing.php">Costing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="inventory.php">Stock Purchase</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="closingstock.php">Closing Stock</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="suppliers.php">Suppliers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Employees</a>
            </li>

        
        <li class="nav-item"><button type="button" name="button" class="btn btn-danger btnn">Log Out</button></li>
      </ul>
    </div>
</nav>
    <div class="jumbotron">
      <select class="date" name="">
        <option value="today">24th Sep</option>
        <option value="yesterday">Yesterday</option>
        <option value="week">Last 7 days</option>
        <option value="month">Last 30 days</option>
        <option value="thismonth">This month</option>
        <option value="lastmonth">Last month</option>
        <option value="customrange">Custom Range</option>
      </select>
      <h1>Sale</h1>
      <p>Rs.10000</p>
    </div>
    <div class="jumbotron">
        <select class="date">
          <option value="today">24th Sep</option>
          <option value="yesterday">Yesterday</option>
          <option value="week">Last 7 days</option>
          <option value="month">Last 30 days</option>
          <option value="thismonth">This month</option>
          <option value="lastmonth">Last month</option>
          <option value="customrange">Custom Range</option>
          <option value="button"><button class="btn btn-success" type="submit" name="button">Apply</button></option>
        </select>

      <h1>Payment modes</h1>
      <p>Cash - Rs. 3400</p>
      <p>UPI - Rs. 2000</p>
      <p>Cards - Rs. 4600</p>
    </div>
    <div class="jumbotron">
      <select class="date" name="">
        <option value="today">24th Sep</option>
        <option value="yesterday">Yesterday</option>
        <option value="week">Last 7 days</option>
        <option value="month">Last 30 days</option>
        <option value="thismonth">This month</option>
        <option value="lastmonth">Last month</option>
        <option value="customrange">Custom Range</option>
      </select>
      <h1>Total expense: Rs. 3000</h1>
      <p>Maintenance - Rs. 1400</p>
      <p>Staff-Expense - Rs. 600</p>
      <p>Rent - Rs. 1000</p>
    </div>
    <link rel="stylesheet" href="navv.css">
<script src="navv.js"></script>
  </body>
  </html>
