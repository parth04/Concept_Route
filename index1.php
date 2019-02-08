<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2
}
</style>
</head>

<body>
<h1 align="Center">Bill Desk</h1>
<form action="insert.php" method="POST">
<table>
  <tr>
    <th>Item</th>
    <th>Price</th>
    <th>Qty</th>
  </tr>
  <tr>
    <!--<td><input type="text" name="item" placeholder="Item"></td>-->
    <td>
      <select name="item" >
        <option value="a">a</option>
        <option value="b">b</option>
        <option value="c">c</option>
      </select>
    </td>
    <td><input type="decimal" name="price" placeholder="Price"></td>
    <td><input type="integer" name="quantity" placeholder="Quantity"></td>
  </tr>
  
</table>

<div align= "center">
    <br>
    <input type="submit" value="add">

</div>

</form>
<br>
<table>
  <tr>
    <th>Id</th>
    <th>Item</th>
    <th>Price</th>
    <th>Qty</th>
  </tr>
  
  <?php
require_once('connect.php');

$stmt="SELECT * from Details";
$res=mysqli_query($conn,$stmt);

    while($r = mysqli_fetch_assoc($res)){
?>
            
        <tr>
            <td><?php echo $r['id']; ?></td>
            <td><?php echo $r['item']; ?></td>
            <td><?php echo $r['price']; ?></td>
            <td><?php echo $r['quantity']; ?></td>
            <td><a href="delete.php?id=<?php echo $r['id'];?>"><button>Remove</button></a></td>
        </tr>

<?php
    }?>
  
</table>



</body>

</html> 

