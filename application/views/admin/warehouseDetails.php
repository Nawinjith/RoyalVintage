<html>
<head>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<title>Warehouse Details</title>

<style type="text/css">

.btn {
  background-color: #F1C40F;
  border: none;
  color: #873600;
  padding: 15px 50px;
  text-align: center;
  text-decoration: none;
  margin: 20px 65px;
  display: inline-block;
  font-size: 16px;
}

</style>
</head>
 
<body>
  <h1>Warehouse Details</h1>
<table width=100% border="1" cellspacing="5" cellpadding="5">
<thead>
  <tr style="background:#CCC">
    <th>Warehouse Id</th>
    <th>location</th>
    <th>capacity</th>
    <th>Contact No</th>
    <th>Delete</th>
    <th>Update</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($data as $row)
  { ?>
  <tr>
   
        <td><?php echo $row->warehouseID;?></td>
        <td><?php echo $row->location;?></td>
        <td><?php echo $row->capacity;?></td>
        <td><?php echo $row->contactNo;?></td>
       
        <!-- <td>
            <form method="DELETE" action = "<?php echo site_url('Welcome/Delete/'.$row->itemCode);?>" > 
            <button type="submit" class="btn-md">Delete</button>
            </form>
        </td>

        <td>
          <form action = "<?php echo site_url('Welcome/Edit/'.$row->itemCode);?>" > 
          <button type ="submit" class="btn-md">Update</button>
          </form>
      </td> -->
    
  </tr>
  <?php } ?>

  </tbody>
</table>

</body>
</html>
