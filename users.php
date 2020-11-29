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
                    <a href="index.php">Food Menu</a>
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
                <h5 class="breadcrumbs-title">User List</h5>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <p class="caption">Enable, Disable or Verify Users.</p>
          <div class="divider"></div>
          <!--editableTable-->
          <div id="editableTable" class="section">
		  <form class="formValidate" id="formValidate1" method="post" action="routers/user-router.php" novalidate="novalidate">
            <div class="row">
              <div class="col s12 m4 l3">
                <h4 class="header">List of users</h4>
              </div>
              <div>
<table>
                    <thead>
                      <tr>
                        <th data-field="name">Name</th>
                        <th data-field="price">Email</th>
                        <th data-field="price">Contact</th>
                        <th data-field="price">Address</th>	
                        <th data-field="price">Role</th>
                        <th data-field="price">Verified</th>
                        <th data-field="price">Enable</th>
                        <th data-field="price">Wallet</th>						
                      </tr>
                    </thead>

                    <tbody>
				<tr><td>Admin 1</td><td></td><td>9898000000</td><td>Address 1</td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-14c9b926-e8fe-8884-2965-41a10afcb482" value="Administrator"><ul id="select-options-14c9b926-e8fe-8884-2965-41a10afcb482" class="dropdown-content select-dropdown "><li class=""><span>Administrator</span></li><li class=""><span>Customer</span></li></ul><select name="1_role" class="initialized">
                      <option value="Administrator" selected="">Administrator</option>
                      <option value="Customer">Customer</option>
                    </select></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-97bd5828-f586-c867-dceb-0b3ee34649c9" value="Verified"><ul id="select-options-97bd5828-f586-c867-dceb-0b3ee34649c9" class="dropdown-content select-dropdown "><li class=""><span>Verified</span></li><li class=""><span>Not Verified</span></li></ul><select name="1_verified" class="initialized">
                      <option value="1" selected="">Verified</option>
                      <option value="0">Not Verified</option>
                    </select></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-27af6162-e166-e7c3-835c-07af63d1f699" value="Enable"><ul id="select-options-27af6162-e166-e7c3-835c-07af63d1f699" class="dropdown-content select-dropdown "><li class=""><span>Disable</span></li><li class=""><span>Enable</span></li></ul><select name="1_deleted" class="initialized">
                      <option value="1">Disable</option>
                      <option value="0" selected="">Enable</option>
                    </select></div></td><td><label for="balance" class="active">Balance</label><input id="balance" name="1_balance" value="3430" type="number" data-error=".errorTxt01"><div class="errorTxt01"></div></td></tr><tr><td>Customer 1</td><td>mail2@example.com</td><td>9898000001</td><td>Address 2</td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-ca8e2e8e-e6a6-bfba-1f04-1061db357e59" value="Customer"><ul id="select-options-ca8e2e8e-e6a6-bfba-1f04-1061db357e59" class="dropdown-content select-dropdown "><li class=""><span>Administrator</span></li><li class=""><span>Customer</span></li></ul><select name="2_role" class="initialized">
                      <option value="Administrator">Administrator</option>
                      <option value="Customer" selected="">Customer</option>
                    </select></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-023b8e41-4aa9-9412-4975-a5f8a3323818" value="Verified"><ul id="select-options-023b8e41-4aa9-9412-4975-a5f8a3323818" class="dropdown-content select-dropdown "><li class=""><span>Verified</span></li><li class=""><span>Not Verified</span></li></ul><select name="2_verified" class="initialized">
                      <option value="1" selected="">Verified</option>
                      <option value="0">Not Verified</option>
                    </select></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-701f6c30-4a2b-f314-2ec1-88dda0f740d9" value="Enable"><ul id="select-options-701f6c30-4a2b-f314-2ec1-88dda0f740d9" class="dropdown-content select-dropdown "><li class=""><span>Disable</span></li><li class=""><span>Enable</span></li></ul><select name="2_deleted" class="initialized">
                      <option value="1">Disable</option>
                      <option value="0" selected="">Enable</option>
                    </select></div></td><td><label for="balance" class="active">Balance</label><input id="balance" name="2_balance" value="1850" type="number" data-error=".errorTxt01"><div class="errorTxt01"></div></td></tr><tr><td>Customer 2</td><td>mail3@example.com</td><td>9898000002</td><td>Address 3</td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-57611b28-9ff3-cf4f-6d2e-573a82432877" value="Customer"><ul id="select-options-57611b28-9ff3-cf4f-6d2e-573a82432877" class="dropdown-content select-dropdown "><li class=""><span>Administrator</span></li><li class=""><span>Customer</span></li></ul><select name="3_role" class="initialized">
                      <option value="Administrator">Administrator</option>
                      <option value="Customer" selected="">Customer</option>
                    </select></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-e601ded7-fb26-20df-6f9e-3df8c1d604ed" value="Verified"><ul id="select-options-e601ded7-fb26-20df-6f9e-3df8c1d604ed" class="dropdown-content select-dropdown "><li class=""><span>Verified</span></li><li class=""><span>Not Verified</span></li></ul><select name="3_verified" class="initialized">
                      <option value="1" selected="">Verified</option>
                      <option value="0">Not Verified</option>
                    </select></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-55fee996-1a98-a24b-6593-01f4ad1ef9c0" value="Enable"><ul id="select-options-55fee996-1a98-a24b-6593-01f4ad1ef9c0" class="dropdown-content select-dropdown "><li class=""><span>Disable</span></li><li class=""><span>Enable</span></li></ul><select name="3_deleted" class="initialized">
                      <option value="1">Disable</option>
                      <option value="0" selected="">Enable</option>
                    </select></div></td><td><label for="balance" class="active">Balance</label><input id="balance" name="3_balance" value="1585" type="number" data-error=".errorTxt01"><div class="errorTxt01"></div></td></tr><tr><td>Customer 3</td><td></td><td>9898000003</td><td></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-86bc1d98-4f44-595c-78f6-c4bbdd38202d" value="Customer"><ul id="select-options-86bc1d98-4f44-595c-78f6-c4bbdd38202d" class="dropdown-content select-dropdown "><li class=""><span>Administrator</span></li><li class=""><span>Customer</span></li></ul><select name="4_role" class="initialized">
                      <option value="Administrator">Administrator</option>
                      <option value="Customer" selected="">Customer</option>
                    </select></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-85393657-ff3c-050b-5d2e-9754d81200ad" value="Not Verified"><ul id="select-options-85393657-ff3c-050b-5d2e-9754d81200ad" class="dropdown-content select-dropdown "><li class=""><span>Verified</span></li><li class=""><span>Not Verified</span></li></ul><select name="4_verified" class="initialized">
                      <option value="1">Verified</option>
                      <option value="0" selected="">Not Verified</option>
                    </select></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-bcb39c6c-0230-8145-3eb3-b5f8491f5d2f" value="Enable"><ul id="select-options-bcb39c6c-0230-8145-3eb3-b5f8491f5d2f" class="dropdown-content select-dropdown "><li class=""><span>Disable</span></li><li class=""><span>Enable</span></li></ul><select name="4_deleted" class="initialized">
                      <option value="1">Disable</option>
                      <option value="0" selected="">Enable</option>
                    </select></div></td><td><label for="balance" class="active">Balance</label><input id="balance" name="4_balance" value="2000" type="number" data-error=".errorTxt01"><div class="errorTxt01"></div></td></tr><tr><td>Customer 4</td><td></td><td>9898000004</td><td></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-2d542c04-5ca2-0c4c-1235-daf521c8bd6b" value="Customer"><ul id="select-options-2d542c04-5ca2-0c4c-1235-daf521c8bd6b" class="dropdown-content select-dropdown "><li class=""><span>Administrator</span></li><li class=""><span>Customer</span></li></ul><select name="5_role" class="initialized">
                      <option value="Administrator">Administrator</option>
                      <option value="Customer" selected="">Customer</option>
                    </select></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-ec1525d0-4d3e-8191-be21-96043be9a747" value="Not Verified"><ul id="select-options-ec1525d0-4d3e-8191-be21-96043be9a747" class="dropdown-content select-dropdown "><li class=""><span>Verified</span></li><li class=""><span>Not Verified</span></li></ul><select name="5_verified" class="initialized">
                      <option value="1">Verified</option>
                      <option value="0" selected="">Not Verified</option>
                    </select></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-aae3d62c-913b-a39c-4f6e-ce69dfe69faa" value="Disable"><ul id="select-options-aae3d62c-913b-a39c-4f6e-ce69dfe69faa" class="dropdown-content select-dropdown "><li class=""><span>Disable</span></li><li class=""><span>Enable</span></li></ul><select name="5_deleted" class="initialized">
                      <option value="1" selected="">Disable</option>
                      <option value="0">Enable</option>
                    </select></div></td><td><label for="balance" class="active">Balance</label><input id="balance" name="5_balance" value="2000" type="number" data-error=".errorTxt01"><div class="errorTxt01"></div></td></tr><tr><td>HAIDER</td><td>h@gmail.com</td><td>7778484121</td><td>mumbai</td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-7545dfc4-29cb-9183-8e3e-e09cb6598cfe" value="Customer"><ul id="select-options-7545dfc4-29cb-9183-8e3e-e09cb6598cfe" class="dropdown-content select-dropdown "><li class=""><span>Administrator</span></li><li class=""><span>Customer</span></li></ul><select name="6_role" class="initialized">
                      <option value="Administrator">Administrator</option>
                      <option value="Customer" selected="">Customer</option>
                    </select></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-036ed52f-2968-e76d-635f-de5f1f4c4038" value="Verified"><ul id="select-options-036ed52f-2968-e76d-635f-de5f1f4c4038" class="dropdown-content select-dropdown "><li class=""><span>Verified</span></li><li class=""><span>Not Verified</span></li></ul><select name="6_verified" class="initialized">
                      <option value="1" selected="">Verified</option>
                      <option value="0">Not Verified</option>
                    </select></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-f1b53b19-7302-cbf8-d7a2-4204f64e31b6" value="Enable"><ul id="select-options-f1b53b19-7302-cbf8-d7a2-4204f64e31b6" class="dropdown-content select-dropdown "><li class=""><span>Disable</span></li><li class=""><span>Enable</span></li></ul><select name="6_deleted" class="initialized">
                      <option value="1">Disable</option>
                      <option value="0" selected="">Enable</option>
                    </select></div></td><td><label for="balance" class="active">Balance</label><input id="balance" name="6_balance" value="2000" type="number" data-error=".errorTxt01"><div class="errorTxt01"></div></td></tr><tr><td>ali asger</td><td></td><td>254576765764</td><td></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-a1e2a2a8-30cb-10b8-6f1c-528f42e61fa5" value="Customer"><ul id="select-options-a1e2a2a8-30cb-10b8-6f1c-528f42e61fa5" class="dropdown-content select-dropdown "><li class=""><span>Administrator</span></li><li class=""><span>Customer</span></li></ul><select name="7_role" class="initialized">
                      <option value="Administrator">Administrator</option>
                      <option value="Customer" selected="">Customer</option>
                    </select></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-afbe7aa7-1038-d777-9f24-df762cb83b1c" value="Not Verified"><ul id="select-options-afbe7aa7-1038-d777-9f24-df762cb83b1c" class="dropdown-content select-dropdown "><li class=""><span>Verified</span></li><li class=""><span>Not Verified</span></li></ul><select name="7_verified" class="initialized">
                      <option value="1">Verified</option>
                      <option value="0" selected="">Not Verified</option>
                    </select></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-3a8e81a0-dad6-4ccd-6888-0a74aa57765b" value="Enable"><ul id="select-options-3a8e81a0-dad6-4ccd-6888-0a74aa57765b" class="dropdown-content select-dropdown "><li class=""><span>Disable</span></li><li class=""><span>Enable</span></li></ul><select name="7_deleted" class="initialized">
                      <option value="1">Disable</option>
                      <option value="0" selected="">Enable</option>
                    </select></div></td><td><label for="balance" class="active">Balance</label><input id="balance" name="7_balance" value="2000" type="number" data-error=".errorTxt01"><div class="errorTxt01"></div></td></tr>                    </tbody>
</table>
              </div>
			  <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Modify
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
            </div>
			</form>
		  <form class="formValidate" id="formValidate" method="post" action="routers/add-users.php" novalidate="novalidate">
            <div class="row">
              <div class="col s12 m4 l3">
                <h4 class="header">Add User</h4>
              </div>
              <div>
<table>
                    <thead>
                      <tr>
                        <th data-field="name">Username</th>
                        <th data-field="name">Password</th>							
                        <th data-field="name">Name</th>
                        <th data-field="price">Email</th>
                        <th data-field="price">Phone number</th>
                        <th data-field="price">Address</th>	
                        <th data-field="price">Role</th>
                        <th data-field="price">Verified</th>
                        <th data-field="price">Enable</th>		
                      </tr>
                    </thead>

                    <tbody>
				<tr><td><label for="username">Username</label><input id="username" name="username" type="text" data-error=".errorTxt02"><div class="errorTxt02"></div></td><td><label for="password">Password</label><input id="password" name="password" type="password" data-error=".errorTxt03"><div class="errorTxt03"></div></td><td><label for="name">Name</label><input id="name" name="name" type="text" data-error=".errorTxt04"><div class="errorTxt04"></div></td><td><label for="email">Email</label><input id="email" name="email" type="email"></td><td><label for="contact">Phone number</label><input id="contact" name="contact" type="number" data-error=".errorTxt05"><div class="errorTxt05"></div></td><td><label for="address">Address</label><input id="address" name="address" type="text" data-error=".errorTxt06"><div class="errorTxt06"></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-35c22665-eb9f-b828-352b-2b08ad492eb4" value="Customer"><ul id="select-options-35c22665-eb9f-b828-352b-2b08ad492eb4" class="dropdown-content select-dropdown "><li class=""><span>Administrator</span></li><li class=""><span>Customer</span></li></ul><select name="role" class="initialized">
                      <option value="Administrator">Administrator</option>
                      <option value="Customer" selected="">Customer</option>
                    </select></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-17419b69-f786-8c62-f8c7-0acc2d10f7b2" value="Not Verified"><ul id="select-options-17419b69-f786-8c62-f8c7-0acc2d10f7b2" class="dropdown-content select-dropdown "><li class=""><span>Verified</span></li><li class=""><span>Not Verified</span></li></ul><select name="verified" class="initialized">
                      <option value="1">Verified</option>
                      <option value="0" selected="">Not Verified</option>
                    </select></div></td><td><div class="select-wrapper initialized"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-1c226f06-1d95-d627-5d62-bc389c99416b" value="Enable"><ul id="select-options-1c226f06-1d95-d627-5d62-bc389c99416b" class="dropdown-content select-dropdown "><li class=""><span>Disable</span></li><li class=""><span>Enable</span></li></ul><select name="deleted" class="initialized">
                      <option value="1">Disable</option>
                      <option value="0" selected="">Enable</option>
                    </select></div></td></tr>                    </tbody>
</table>
              </div>
			  <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Add
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
            </div>
			</form>			
            <div class="divider"></div>
            
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