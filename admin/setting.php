<?php require_once 'includes/session.php'; ?>
<?php require_once 'includes/dbconfig.php'; ?>
<?php require_once 'includes/functions.php'; ?>
<?php confirm_logged_in(); ?>

<?php
$errormsg = '';
$action = "add";
$id= '';
$username='';
$password='';


if(isset($_POST['submit'])){
	//$username = mysqli_real_escape_string($connection,$_POST['username']);
	//$password = mysqli_real_escape_string($connection,$_POST['password']);
	
	if(!empty($_POST['username']) && !empty($_POST['password'])) {
		$username = $_POST['username'];
		if (preg_match('/^\w{4,}$/', $username)) {
			$password = $_POST['password'];
			$hashed_password = password_encrypt($password);
			
 if($_POST['action']=="add")
 {	
	$sql = "INSERT INTO admins (Admin_username,Admin_password) VALUES ('$username','$hashed_password')";
			$result = mysqli_query($connection, $sql);
			if($result) {
				//$_SESSION['message'] = "Successfully created new admin : " .$username;
				//redirect_to('setting.php');
				echo '<script type="text/javascript">window.location="setting.php?act=1";</script>';

			}
			}
		} else {
			echo "Invalid username";
		}
	} else {
		echo "All fields are mandatory! ";
	}
}
if(isset($_POST['action']) && $_POST['action'] == 'update') {
	//die('test');
	$id = $_POST['id'];
	if(!empty($_POST['username']) && !empty($_POST['password'])) { 
		$username = $_POST['username'];
			if (preg_match('/^\w{4,}$/', $username)) {
			$password = $_POST['password'];
			$hashed_password = password_encrypt($password);
			
	
			//$id = mysqli_real_escape_string($connection,$_POST['id']);
			$sql = "UPDATE Admins SET Admin_username = '$username',Admin_password = '$hashed_password' WHERE Admin_id= '$id'";
			$result = mysqli_query($connection, $sql);

			if($result) {
				//die('test');
				//$_SESSION['message'] = "Successfully edited admin : " .$username;
				//redirect_to('admin.php');
				   echo '<script type="text/javascript">window.location="setting.php?act=2";</script>';

			} else {
				echo "An error occoured, please try again!";
			}
		} else {
			echo "Please enter a valid username";
		}
	} else {
		echo "All fields are mandatory! ";
	}
}


if(isset($_GET['action']) && $_GET['action']=="delete"){

$connection->query("UPDATE  admins set delete_status = '1'  WHERE Admin_id='".$_GET['id']."'");
header("location: setting.php?act=3");

}

$action = "add";
if(isset($_GET['action']) && $_GET['action']=="edit" ){
$id = isset($_GET['id'])?mysqli_real_escape_string($connection,$_GET['id']):'';

$sqlEdit = $connection->query("SELECT * FROM admins WHERE Admin_id='".$id."'");
if($sqlEdit->num_rows)
{
$rowsEdit = $sqlEdit->fetch_assoc();
extract($rowsEdit);
$username = $rowsEdit['Admin_username'];

$action = "update";
}else
{
$_GET['action']="";
}

}


if(isset($_REQUEST['act']) && @$_REQUEST['act']=="1")
{
$errormsg = "<div class='alert alert-success'><strong>Success!</strong> Setting Add successfully</div>";
}else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="2")
{
$errormsg = "<div class='alert alert-success'><strong>Success!</strong> Setting Edit successfully</div>";
}
else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="3")
{
$errormsg = "<div class='alert alert-success'><strong>Success!</strong> Setting Delete successfully</div>";
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inco panel industries Pvt Ltd</title>
	
    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
	


    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	 <script src="js/jquery-1.10.2.js"></script>
</head>

<?php
include("php/header.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Setting  
						<?php
						echo (isset($_GET['action']) && @$_GET['action']=="add" || @$_GET['action']=="edit")?
						' <a href="setting.php" class="btn btn-primary btn-sm pull-right">Back <i class="glyphicon glyphicon-arrow-right"></i></a>':'<a href="setting.php?action=add" class="btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-plus"></i> Add </a>';
						?>
						</h1>
						<?php
					echo $errormsg;
					?>
    
				</div>
                </div>
      
		<?php 
		 if(isset($_GET['action']) && @$_GET['action']=="add" || @$_GET['action']=="edit")
		 {
		?>
			
			<script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
			
                <div class="row">
				
                    <div class="col-sm-8 col-sm-offset-2">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           <?php echo ($action=="add")? "Add Setting": "Edit Setting"; ?>
                        </div>
                        
						<form action="setting.php" method="post" id="signupForm1" class="form-horizontal">
                        <div class="panel-body">

						<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Username </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="username" name="username" value="<?php echo $username;?>"  />
								</div>
							</div>
							
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Password </label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="password" name="password" value="<?php echo $password;?>" />
								</div>
							</div>
							
							
						
						<div class="form-group">
								<div class="col-sm-8 col-sm-offset-2">
								<input type="hidden" name="id" value="<?php echo $id;?>">
								<input type="hidden" name="action" value="<?php echo $action;?>">
								
									<button type="submit" name="submit" class="btn btn-primary">Save </button>
								</div>
							</div>
   
                         </div>
							</form>
	
                        </div>
                        </div>
					</div>
				
					   
		<script type="text/javascript">
		

		$( document ).ready( function () {			
			
			 if($("#signupForm1").length > 0)
         {
			$( "#signupForm1" ).validate( {
				rules: {
					username: "required",
					password: "required"
					
				
					
				},
				messages: {
					username: "Please enter username",
					password: "Please enter password"
					
					
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".col-sm-10" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !element.next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
					}
				},
				success: function ( label, element ) {
					// Add the span element, if doesn't exists, and apply the icon classes to it.
					if ( !$( element ).next( "span" )[ 0 ] ) {
						$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-10" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-10" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				}
			} );
			
			}
			
		} );
	</script>


			   
		<?php
		}else{
		?>
		

		
		 <link href="css/datatable/datatable.css" rel="stylesheet" />

		<div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Setting  
                        </div>
                           <div class="panel-body">
                             <div class="table-sorting table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
							
							<thead>
                                        <tr>
											<th>#</th>
											<th>Username</th>
                                            <th>Password</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
									
                                 <tbody>					 
									<?php
									$sql = "select * from admins where delete_status='0'";
									$q = $connection->query($sql);
									$i=1;
									while($r = $q->fetch_assoc())
									{
									echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>'.$r['Admin_username'].'</td>
                                            <td>'.$r['Admin_password'].'</td>
											<td>
											<a href="setting.php?action=edit&id='.$r['Admin_id'].'" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
							
											<a onclick="return confirm(\'Are you sure you want to delete this record\');" href="setting.php?action=delete&id='.$r['Admin_id'].'" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a> </td>
                                        </tr>';
										$i++;
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
    <script src="js/dataTable/jquery.dataTables.min.js"></script>
     <script>
         $(document).ready(function () {
             $('#tSortable22').dataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": true });
	
         });
		 
	
    </script>
		
		<?php
		}
		?>
				
				
            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

  	
 <div id="footer-sec" align="center">
       <b>Inco panel industries Pvt Ltd | Developed By : <a href="#" target="_blank">Jamyang Lama</b></a>
    </div>
   <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>

    
</body>
</html>
