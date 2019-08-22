<!DOCTYPE html>
<html>
<head>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

</head>
<body align='center'>

<div style="height: ">
<form action="#" method="POST">
	DISH NAME:
	<input type="text" name="name"><br><br>
	PRICE:
	<input type="text" name="price"><br><br>
	<button type="submit" name="submit"> SUBMIT </button>
	<button type="submit" name="edit"><a href ="edit_dish_price.php">EDIT</a></button>
	<button type="submit" name="showData"><a href ="showData.inc.php" target=blank>SHOW ALL DATA</a></button>
    <button type="submit" name="todaymenu"><a href ="today_menu.php" target=blank>TODAY'S MENU</a></button>
    <button type="submit" name="todaymenu2" value="select"><a href="select_today_meal.php" target=blank>SELECT TODAY'S MENU</a></button>
    <button type="submit" name="orderin1day" value="select"><a href="order_in_a_day.php" target=blank>TODAY'S ORDERS</a></button>
</form>

</div>

<?php
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
 
if(strpos($fullUrl , "info=incomplete")==true)
{ echo "did not fill fields";
exit();
}

?>

<?php
if (isset($_POST['submit'])) {
	include_once 'config.php';

	$name = $_POST["name"];
	$price = $_POST["price"];
	 
    if (empty($name) || empty($price)){
     	header('Location: enter_dish.php?info=incomplete');
     	exit();
     	
    }
    
     else {
 	

	$sql = "INSERT INTO menu (name, price) VALUES ('$name', '$price');";
	mysqli_query($mysqli, $sql);
	 
    header('Location: enter_dish.php?info=success');
	exit();
}


}
?>




    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>