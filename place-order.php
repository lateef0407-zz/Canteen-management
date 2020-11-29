<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>K.C CANTEEN</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>K.C CANTEEN</h3>
            </div>
             
            <ul class="list-unstyled components">
                <li>
                    <a href="admin-page.php">Food Menu</a>
                </li>
                <li class="active">
                   
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Orders</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                            <a href="all-orders.php">All orders</a>
                        </li>
                        <li>
                            <a href="#">Cancelled by Admin</a>
                        </li>
                        <li>
                            <a href="#">Cancelled by Customer</a>
                        </li>
                        <li>
                            <a href="#">Yet to be Delivered</a>
                        </li>
                        <li>
                            <a href="#">Paused</a>
                        </li>
                    </ul>
                </li>
               
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Tickets</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#all-tickets.php">All Tickets</a>
                        </li>
                        <li>
                            <a href="#">Closed</a>
                        </li>
                        <li>
                            <a href="#">Open</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Users</a>
                </li>
            </ul>
         

     
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class=" active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Sign Up</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Login</a>
                            </li>              
                    </div>      
                </div>
            </nav>

             
            <section id="content">

<!--breadcrumbs start-->
<div id="breadcrumbs-wrapper">
  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Provide Order Details</h5>
      </div>
    </div>
  </div>
</div>
<!--breadcrumbs end-->


<!--start container-->
        <div class="container">
  <p class="caption">Provide required delivery and payment details.</p>
  <div class="divider"></div>
    <div class="row">
      <div class="col s12 m4 l3">
        <h4 class="header">Details</h4>
      </div>
<div>
        <div class="card-panel">
          <div class="row">
            <form class="formValidate col s12 m12 l6" id="formValidate" method="post" action="confirm-order.php" novalidate="novalidate">
              <div class="row">
                <div class="input-field col s12">
                    <label for="payment_type">Payment Type</label><br><br>
                    <div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown valid" readonly="true" data-activates="select-options-efaae7de-6b32-046f-a27b-feb1e43d2dca" value="Wallet" aria-invalid="false"><ul id="select-options-efaae7de-6b32-046f-a27b-feb1e43d2dca" class="dropdown-content select-dropdown" style="width: 516px; position: absolute; top: 0px; left: 0px; opacity: 1; display: none;"><li class=""><span>Wallet</span></li><li class="active selected"><span>Cash on Delivery</span></li></ul><select id="payment_type" name="payment_type" class="initialized">
                            <option value="Wallet" selected="">Wallet</option>
                            <option value="Cash On Delivery">Cash on Delivery</option>							
                    </select></div>
                </div>
              </div>					
              <div class="row">
                <div class="input-field col s12">
                  <i class="mdi-action-home prefix"></i>
                    <textarea name="address" id="address" class="materialize-textarea validate" data-error=".errorTxt1" style="height: 22px;">mumbai</textarea>
                    <label for="address" class="active">Address</label>
                    <div class="errorTxt1"></div>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="mdi-action-credit-card prefix"></i>
                    <input name="cc_number" id="cc_number" type="text" data-error=".errorTxt2" required="" aria-required="true" aria-invalid="false" class="valid" disabled="">
                    <label for="cc_number" class="active">Card Number</label>
                    <div class="errorTxt2"></div>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="mdi-communication-vpn-key prefix"></i>	
                    <input name="cvv_number" id="cvv_number" type="text" data-error=".errorTxt3" required="" aria-required="true" aria-invalid="false" class="valid" disabled="">
                    <label for="cvv_number" class="active">CVV Number</label>								
                    <div class="errorTxt3"></div>
                </div>
              </div>					  
              <div class="row">
                <div class="row">
                  <div class="input-field col s12">
                    <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                      <i class="mdi-content-send right"></i>
                    </button>
                  </div>
                </div>
              </div>
              <input name="6" type="hidden" value="1">                    </form>
          </div>
        </div>
      </div>
    <div class="divider"></div>
    
  </div>
<!--end container-->

</div>

<div class="container">
  <p class="caption">Estimated Receipt</p>
  <div class="divider"></div>
  <!--editableTable-->
<div id="work-collections" class="seaction">
<div class="row">
<div>
<ul id="issues-collection" class="collection">
<li class="collection-item avatar">
<i class="mdi-content-content-paste red circle"></i>
<p><strong>Name:</strong>HAIDER</p>
<p><strong>Contact Number:</strong> 7778484121</p>
<a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a></li><li class="collection-item">
<div class="row">
    <div class="col s7">
        <p class="collections-title"><strong>#6 </strong>dosa masala</p>
    </div>
    <div class="col s2">
        <span>1 Pieces</span>
    </div>
    <div class="col s3">
        <span>Rs. 50</span>
    </div>
</div>
</li><li class="collection-item">
<div class="row">
    <div class="col s7">
        <p class="collections-title"> Total</p>
    </div>
    <div class="col s2">
        <span>&nbsp;</span>
    </div>
    <div class="col s3">
        <span><strong>Rs. 50</strong></span>
    </div>
</div>
</li></ul>


        </div>
        </div>
        </div>
      </div>
    </section>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>