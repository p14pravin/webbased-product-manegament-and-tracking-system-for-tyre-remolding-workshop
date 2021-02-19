<!DOCTYPE html>
<?php 
include('admin/database.php');

	if(isset($_GET['tracking_id'])){
	$tracking_id = $_GET['tracking_id'];
	}
	else{
		$tracking_id = "Not entered";
	}

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link rel="stylesheet" href="admin/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="admin/assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
	<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>#NHTRW</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button></div>
                </nav>
				
				<?php
				
					$get_details_query = "SELECT * from my_order where tracking_id = '$tracking_id'";
						if($row = mysqli_query($conn,$get_details_query)){
							$result_array = mysqli_fetch_array($row);
							
							if(isset($result_array['order_id'])){
							?>
							
							
							<div class="container-fluid">
								<div class="d-sm-flex justify-content-between align-items-center mb-4">
									<h3 class="text-dark mb-0">Order Details</h3>
								</div>
								<div class="row" style="margin-bottom: 30px;">
									<div class="col-md-3"><span style="color: rgb(10,10,11);">Tracking ID</span></div>
									<div class="col-md-3"><span style="color: rgb(255,15,0);"><a href="view-order.php?tracking_id=<?php echo $result_array['tracking_id'];?>"><?php echo $result_array['tracking_id'];?> </a></span></div>
									<div class="col-md-3"><span style="color: rgb(10,10,11);">Order Status</span></div>
									<div class="col-md-3"><span style="color: rgb(255,15,0);"><?php echo $result_array['order_status'];?></span></div>
								</div>
								<div class="row" style="margin-bottom: 6px;">
									<div class="col-md-3"><span>Customer Name:&nbsp;</span></div>
									<div class="col-md-3"><span style="color: rgb(10,10,11);"><?php echo $result_array['customer_name'];?></span></div>
								</div>
								<div class="row" style="margin-bottom: 6px;">
									<div class="col-md-3"><span>Customer Mo.:&nbsp;</span></div>
									<div class="col-md-3"><span style="color: rgb(0,0,0);"><?php echo $result_array['customer_mo'];?></span></div>
								</div>
								<div class="row" style="margin-bottom: 6px;">
									<div class="col-md-3"><span>Customer Address</span></div>
									<div class="col-md-3"><span style="color: rgb(0,0,0);"><?php echo $result_array['customer_add'];?></span></div>
								</div>
								<div class="row" style="margin-bottom: 6px;">
									<div class="col-md-3"><span>Invoice Date</span></div>
									<div class="col-md-3"><span style="color: rgb(0,0,0);"><?php echo $result_array['invoice_date'];?><br></span></div>
									<div class="col-md-3"><span style="color: rgb(133,135,150);">Expected Delivery Date:<br></span></div>
									<div class="col-md-3" style="margin-bottom: 0px;"><span style="color: rgb(0,0,0);"><?php echo $result_array['expected_D_D'];?><br></span></div>
								</div>
								<div class="row" style="margin-bottom: 6px;">
									<div class="col">
										<hr>
									</div>
								</div>
								<div class="row" style="margin-bottom: 15px;">
									<div class="col-md-3"><span>Tyre Size :</span></div>
									<div class="col-md-3"><span style="color: rgb(0,0,0);"><?php echo $result_array['tyre_size'];?></span></div>
									<div class="col-md-3"><span>Tyre Condition :</span></div>
									<div class="col-md-3"><span style="color: rgb(0,0,0);"><?php echo $result_array['tyre_condition'];?></span></div>
								</div>
								<div class="row" style="margin-bottom: 15px;">
									<div class="col-md-3"><span>Tyre type :</span></div>
									<div class="col-md-3" style="color: rgb(0,0,0);"><span><?php echo $result_array['tyre_type'];?></span></div>
									<div class="col-md-3"><span>New Design :</span></div>
									<div class="col-md-3"><span style="color: rgb(0,0,0);"><?php echo $result_array['new_design'];?></span></div>
								</div>
								<div class="row" style="margin-bottom: 30px;">
									<div class="col-md-3"><span>Tyre Rubber Type:</span></div>
									<div class="col-md-3"><span style="color: rgb(0,0,0);"><?php echo $result_array['tyre_rubber'];?></span></div>
								</div>
								<div class="col">
									<hr>
								</div>
								<div class="row text-right d-xl-flex justify-content-xl-end" style="margin-bottom: 6px;">
									<div class="col-md-3"><span>Cost of Remould :</span></div>
									<div class="col-md-3"><span style="color: rgb(0,0,0);">Rs. <?php echo $result_array['cost'];?>/-</span></div>
								</div>
								<div class="row text-right d-xl-flex justify-content-xl-end" style="margin-bottom: 6px;">
									<div class="col-md-3"><span>Advance Paid :</span></div>
									<div class="col-md-3"><span style="color: rgb(7,7,7);">Rs. <?php echo $result_array['advance'];?>/-</span></div>
								</div>
								<div class="row">
									<div class="col">
										<hr style="width:40%; float: right">
									</div>
								</div>
								<div class="row text-right d-xl-flex justify-content-xl-end" style="margin-bottom: 6px;">
									<div class="col-md-3"><span>Order Type :</span></div>
									<div class="col-md-3"><span style="color: rgb(0,0,0);"><?php echo $result_array['order_type'];?></span></div>
									<div class="col-md-3"><span>Remainig Balance :</span></div>
									<div class="col-md-3"><span style="color: rgb(0,0,0);">Rs. <?php echo $result_array['balance'];?>/-</span></div>
								</div>
								<div class="row text-right d-xl-flex justify-content-xl-end" style="margin-bottom: 6px;padding-top: 55px;">
									<div class="col-md-3"><span style="color: rgb(0,0,0);">For New Hindustan Tyre Remoulding Works</span></div>
								</div>
								<div class="row" style="margin-bottom: 6px;">
									<div class="col-md-3"><span style="color: rgb(0,0,0);"><br><br>Remark: <?php echo $result_array['remark'];?><br></span></div>
									<div class="col-md-3"><span style="color: rgb(0,0,0);"><button onclick="document.location='admin/order_invoice.php?tracking_id=<?php echo $result_array["tracking_id"]?>'" class="btn btn-primary btn-sm text-center" style="width:100%">Download OR Print Invoice</button><br><br>#Terms and Condition Apply.<br>#Track Your Order on our Website using tracking ID.<br></span></div>
								</div>
							</div>
				<?php 
							}
							else{
					
				?>
							<div class="container-fluid">
								<div class="d-sm-flex justify-content-between align-items-center mb-4">
								<h2 id="print">Wrong Traking ID</h2>
								</div>
							</div>
				<?php
							}
						}
				?>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright&nbsp;© Made with&nbsp;❤&nbsp;ndroid 2019-21<br></span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <div></div>
    <script src="admin/assets/js/jquery.min.js"></script>
    <script src="admin/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="admin/assets/js/theme.js"></script>
</body>

</html>