<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="adminhome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    .inputrow
    {
      border-left: none;
      border-right: none;
      border-top: none;
      background-color: transparent;
      resize: none;
      outline: none;
      text-align: center;
      color: blue;
    }
    td{
      text-align: center;
    }
    * {
      scrollbar-width: thin;
        scrollbar-color: #BBB #EEE;
    }

    *::-webkit-scrollbar {
      width: 10px;
    }

    *::-webkit-scrollbar-track {
      background: #C0C3C6;
    }

    *::-webkit-scrollbar-thumb {
      background-color: #888;
      border-radius: 10px;
      border: 3px solid #C0C3C6;
    }
    input[list]:focus {
    outline: none;
    }
    input[list] + div[list] {
        display: none;
        position: absolute;
        width: 100%;
        max-height: 164px;
        overflow-y: auto;
        max-width: 330px;
        background: #FFF;
        border: var(--border);
        border-top: none;
      border-radius: 0 0 5px 5px;
      box-shadow: 0 3px 3px -3px #333;
        z-index: 100;
    }
    input[list] + div[list] span {
        display: block;
        padding: 7px 5px 7px 20px;
        color: #069;
        text-decoration: none;
        cursor: pointer;
    }
    input[list] + div[list] span:not(:last-child) {
      border-bottom: 1px solid #EEE;
    }
    input[list] + div[list] span:hover {
        background: rgba(100, 120, 140, .2);
    }

    </style>
  </head>
  <body>
    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="trinetra";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if (!$conn)
    {
      die("Sorry , failed to connect: ".mysqli_connect_error());
    }
      $sql="SELECT Company FROM suppliers";
      $result=mysqli_query($conn,$sql);
     ?>
     <?php
     $servername="localhost";
     $username="root";
     $password="";
     $database="trinetra";
     $conn1=mysqli_connect($servername,$username,$password,$database);
     if (!$conn1)
     {
       die("Sorry , failed to connect: ".mysqli_connect_error());
     }
       $sql1="SELECT ProductName FROM products";
       $result1=mysqli_query($conn,$sql1);
      ?>
    <nav class="navbar navbar-default  navbar-fixed-top navbar-dark bg-dark ">
        <img src="logo.png" alt="" height=50px width=60px><a id="aone" class="navbar-brand">Inventory</a>
        <div class="navbuttons">
          <a href="stockpurchase.html"><button type="button" name="button" class="btn btn-warning" id="bnav" onclick="stockpurchase.html"> Stock Purchase</button></a>
          <a href="closingstock.html"><button type="button" name="button" class="btn btn-info" id="bnav" onclick="closingstock.html"> Closing Stock</button></a>

          <a href="expired.html"><button type="button" name="button" class="btn btn-info" id="bnav" onlick="expired.html"> Expiry</button></a>

        </div>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="managerlogin.html"><button type="button" name="button" class="btn btn-danger">Log Out</button></a></li>
        </ul>
    </nav>
    <div id="popup" class="alert alert-success alert-dismissible fade show" role="alert"></div>
    <div class="form-1-container section-container">
        <div class="container">
            <div class="row">
                <div class="col form-1 section-description wow fadeIn">
                    <h2>New Purchase Details</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-md-10 offset-md-1 form-1-box wow fadeInUp"> -->

                    <!-- <form method="post"> -->
                        <!-- User's Credentials  -->
                        <fieldset class="form-group border p-3">
                            <legend class="w-auto px-2">Invoice Details</legend>
                            <div class="form-group">
                                <label for="username">Supplier:<span style="color:red">*</span></label>
                                <input type="text" class="form-control" id="supplier" placeholder="Supplier..." name="supplier" list="company" autocomplete="off" required>
                                <div list="company">
                                <?php while($row = mysqli_fetch_array($result)) { ?>
                                  <span><?php echo $row['Company']; ?></span>
                                  <?php } ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="date">Invoice Date:<span style="color:red">*</span></label>
                                <input type="date" class="form-control" id="invoicedate" name="invoicedate" required>
                            </div>
                            <div class="form-group">
                                <label for="invoice">Invoice Number:<span style="color:red">*</span></label>
                                <input type="invoice" class="form-control" id="invoicenumber" placeholder="Invoice Number..." name="invoicenumber" required>
                            </div>

                        </fieldset>
                        <div class="form-group row text-right">
                            <div class="col">
                                <button type="button" class="btn btn-danger" name="savebutton" id="savebutton">Enter</button>
                            </div>
                        </div>
                        <div list="productlist" id="divlist">
                        <?php while($row = mysqli_fetch_array($result1)) { ?>
                          <span><?php echo $row['ProductName']; ?></span>
                          <?php } ?>
                        </div>
                        <div id="productdetails">
                        <fieldset class="form-group border p-3">
                            <legend class="w-auto px-2">Product Details</legend>
                            <div class="bb tt">

                              <button type="button" name="addproduct" class="btn btn-success" id="addproduct" style="float:right;margin-right:20px;">Add Product</button>

                            <table  class="table table-striped" id="producttable">
                                <thead>
                                  <tr>
                                    <th style="text-align: center;" scope="col">Name</th>
                                    <th style="text-align: center;" scope="col">Quantity</th>
                                    <th scope="col" style="text-align: center;">Price</th>
                                    <th scope="col" style="text-align: center;">Amount</th>
                                    <th scope="col" style="text-align: center;"><button type="button" name="savebutton1" class="btn btn-info" id="savebutton1">Save</button></th>
                                  </tr>
                                </thead>
                                <tbody>

                                </tbody>
                              </table>
                              <p id="coretotal"></p>
                              <p id="amsgsttotal"></p>
                              <p id="amcgsttotal"></p>
                              <p id="grandtotal"></p>
                            </div>
                        </fieldset>
                        <div class="form-group row text-right">
                            <div class="col">
                                <button type="button" class="btn btn-danger" name="done" id="done" style="float:right;">Save Purchase</button>
                            </div>
                        </div>

                      </div>


                <!-- </div> -->
            </div>

        </div>
    </div>
    <script src="add_purchase.js"></script>
</body>
</html>
