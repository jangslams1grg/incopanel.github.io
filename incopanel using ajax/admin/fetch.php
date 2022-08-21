<link href="css/datatable/datatable.css" rel="stylesheet" />
<div class="panel panel-default">
                        <div class="panel-heading">
                         <b>Manage Service</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-sorting table-responsive">
							<table class="table table-striped table-bordered table-hover" id="tSortable22">


			<thead>	 
				<tr>
			   <th>Image</th>
			   <th>Description</th>
			   <th>Action</th>
			  </tr>
			</thead>

			<tbody>
			<?php
				include('database_connection.php');
				$query = "SELECT * FROM tbl_image ORDER BY image_id DESC";
				$statement = $connect->prepare($query);
				$statement->execute();
				$result = $statement->fetchAll();
				$number_of_rows = $statement->rowCount();
				$output = '';
				$output .= '
				';
				if($number_of_rows > 0)
				{
				 $count = 0;
				 foreach($result as $row)
				 {
				  $count ++; 
				  $output .= '
				  <tr>

			   <td><img src="../files/services/'.$row["image_name"].'" class="img-thumbnail" width="50" height="15" /></td>
			   <td>'.$row["image_description"].'</td>
			   <td><button type="button" class="btn btn-warning btn-xs edit" id="'.$row["image_id"].'"><span class="glyphicon glyphicon-edit"></span></button>
				 <button type="button" class="btn btn-danger btn-xs delete" id="'.$row["image_id"].'" data-image_name="'.$row["image_name"].'"><span class="glyphicon glyphicon-remove"></button></td>
			  </tr>
			  ';
			 }
			}
			else
			{
			 $output .= '
			  <tr>
			   <td colspan="6" align="center">No Data Found</td>
			  </tr>
			 ';
			}
			$output .= '</tbody>';                                   
			$output .= '</table>';
			$output .= '</div>';
			$output .= '</div>';                                   
			$output .= '</div>';
											  
			echo $output;
			?>

	
	<script src="js/dataTable/jquery.dataTables.min.js"></script>
    
     <script src="js/dataTable/jquery.dataTables.min.js"></script>
    
     <script>
         $(document).ready(function () 
		 $.fn.dataTable.ext.errMode = 'none';
             $('#tSortable22').dataTable({
    "bPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": true });
	
         });
		 
	
    </script>
	 