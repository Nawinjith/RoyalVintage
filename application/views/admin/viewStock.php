<html>
<head>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
<title>View Stock</title>

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
  <h1>Warehouse View</h1>
<table width=100% border="1" cellspacing="5" cellpadding="5">
<thead>
  <tr style="background:#CCC">
    <th>Import No</th>
    <th>Item Id</th>
    <th>Quantity</th>
    <th>dealerID_fk</th>
    <th>date</th>
    <th>Delete</th>
    <th>Update</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($data as $row)
  { ?>
  <tr>
   
        <td><?php echo $row->importNo;?></td>
        <td><?php echo $row->productID_fk;?></td>
        <td><?php echo $row->quantity;?></td>
        <td><?php echo $row->dealerID_fk;?></td>
        <td><?php echo $row->date;?></td>
        <td>
            <form method="DELETE" action = "<?php echo site_url('Welcome/Delete/'.$row->itemCode);?>" > 
            <button type="submit" class="btn-md">Delete</button>
            </form>
        </td>

        <td>
          <form action = "<?php echo site_url('Welcome/Edit/'.$row->itemCode);?>" > 
          <button type ="submit" class="btn-md">Update</button>
          </form>
      </td>
    
  </tr>
  <?php } ?>

  </tbody>
</table>

</body>
</html>
