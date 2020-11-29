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
                    <a href="admin-page.phpOrder">Order Food</a>
                </li>
                <li class="active">
                   
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Orders</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                            <a href="all-orders.php">All orders</a>
                        </li>
                        <li>
                            <a href="#">Cancelled by Customer</a>
                        </li>
                        <li>
                            <a href="#">Yet to be Delivered</a>
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
                    <a href="#">Edit Details</a>
                </li>
            </ul>
        </nav> 
            </ul>
         

     
        </nav>

<section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Tickets</h5>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <p class="caption">If you're experiencing any issues, contact us by opening a ticket.</p>
          <div class="divider"></div>
            <div class="row">
              <div class="col s12 m4 l3">
                <h4 class="header">Open a ticket</h4>
              </div>
<div>
                <div class="card-panel">
                  <div class="row">
                    <form class="formValidate" id="formValidate" method="post" action="routers/add-ticket.php" novalidate="novalidate">
                      <div class="row">
                        <div class="input-field col s12">
                          <input name="subject" id="subject" type="text" data-error=".errorTxt1">
                          <label for="subject" class="">Subject</label>
						  <div class="errorTxt1"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <textarea name="description" id="description" class="materialize-textarea validate" data-error=".errorTxt2"></textarea>
                          <label for="description" class="">Description</label>
						  <div class="errorTxt2"></div>
                        </div>
                      </div>					  
                      <div class="row">
                        <div class="input-field col s4">
							<div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-d6ff309e-24c0-cfbb-64f0-a90b9eac0154" value="Choose a type"><ul id="select-options-d6ff309e-24c0-cfbb-64f0-a90b9eac0154" class="dropdown-content select-dropdown "><li class="disabled"><span>Choose a type</span></li><li class=""><span>Support</span></li><li class=""><span>Payment</span></li><li class=""><span>Complaint</span></li><li class=""><span>Others</span></li></ul><select name="type" class="initialized">
								<option disabled="" selected="">Choose a type</option>
								<option value="Support">Support</option>
								<option value="Payment">Payment</option>
								<option value="Complaint">Complaint</option>
								<option value="Others">Others</option>				
							</select></div>
							<label>Type</label>
                        </div>
                      </div>					  
                      <div class="row">
                        <div class="row">
                          <div class="input-field col s12">
						  <input type="hidden" value="6" name="id">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                              <i class="mdi-content-send right"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            <div class="divider"></div>
            
          </div>
        <!--end container-->


      <!-- END CONTENT -->
    </div>
	
	
	        <!--start container-->
        <div class="container">
          <p class="caption">List of your tickets</p>
          <div class="divider"></div>
									<div id="work-collections">
									<ul id="projects-collection" class="collection">
								<a href="view-ticket.php?id=2" class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">not delivered</p>                                              
                                            </div>
                                            <div class="col s2">
                                            <span class="task-cat cyan">Open</span></div>											
                                            <div class="col s2">
                                            <span class="task-cat grey darken-3">Complaint</span></div>
                                            <div class="col s2">
                                            <span class="badge">2020-11-02 19:29:28</span></div>
                                        </div>
                                    </a><a href="view-ticket.php?id=3" class="collection-item">
                                        <div class="row">
                                            <div class="col s6">
                                                <p class="collections-title">not delivered</p>                                              
                                            </div>
                                            <div class="col s2">
                                            <span class="task-cat cyan">Open</span></div>											
                                            <div class="col s2">
                                            <span class="task-cat grey darken-3">Complaint</span></div>
                                            <div class="col s2">
                                            <span class="badge">2020-11-02 19:29:29</span></div>
                                        </div>
                                    </a>									</ul>
									</div>
            <div class="divider"></div>
            
          </div>
        <!--end container-->


      <!-- END CONTENT -->
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