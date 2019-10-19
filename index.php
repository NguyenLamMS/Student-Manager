<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="favicon.ico"/>
</head>
<body>
<?php include 'connect.php'; ?>
<div class="container">
  <h2 class="text-black" style="padding: 20px;text-align: center;s">STUDENT MANAGER</h2>
  <table class="table" style="margin-top: 50px ">
    <thead class="thead-dark">
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
    		include 'connect.php';
    		$sql = "SELECT * FROM student";
			$result = $conn->query($sql);	
    		if ($result->num_rows > 0) {	
			while($row = $result->fetch_assoc()) {
		    // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["email"]. "<br>";
		    ?>
		      <tr>
		        <td><?php echo $row["firstname"] ?></td>
		        <td><?php echo $row["lastname"] ?></td>
		        <td><?php echo $row["email"] ?></td>
		      </tr>
		    <?php
		    }
			} else {
			    echo "0 results";
			}
			 $conn->close();
	    	 ?>
    
    </tbody>
  </table>
  <div class="row">
  	<button data-toggle="modal" data-target="#addModal" type="button" class="col-sm" style="margin: 50px;height: 50px;font-size: 18px">Add</button>
	<button type="button" class="col-sm " style="margin: 50px;height: 50px;font-size: 18px">Up file</button>
	<button type="button" class="col-sm" style="margin: 50px;height: 50px;font-size: 18px">Refresh</a></button>
  </div>
</div>
<!-- modal add -->
	<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="add.php" method="POST">
	        	
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Firstname</label>
	            <input type="text" class="form-control" id="recipient-name" name="firstname">
	          </div>
	          <div class="form-group">
	            <label for="message-text" class="col-form-label">Lastname</label>
	            <input type="text" class="form-control" id="recipient-name" name="lastname">
	          </div>
	          <div class="form-group">
	            <label for="message-text" class="col-form-label">Email</label>
	            <input type="text" class="form-control" id="recipient-name" name="email">
	          </div>
	           <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button class="btn btn-primary">Add</button>
		      </div>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>


</body>
</html>
