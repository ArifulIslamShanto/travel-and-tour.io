<?php
$conn= mysqli_connect("localhost", "root","","travel_and_tour");
//mysqli_select_db($con, "travel_and_tour");

$query= "select *from add_package" ;
$result= mysqli_query($conn, $query);

$num= mysqli_num_rows($result);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/packages.css">
</head>
<body>
    <nav>
    	<ul>
			 
			<li><a href="userpanel.php">Dash Board</a></li>
		</ul>
	</nav>
    
    <center>
    <div id="div1">
        <?php
        for($i=0;$i<$num;$i++)
        {
            $row= mysqli_fetch_assoc($result); 
        ?>
       <div id="div2">
       <a href="package/details.php?id=<?php echo $row['package_id']?>">
       <img src="imagesstore/<?php echo $row['img']?>" alt="" id="image">
    <label><?php echo $row['package_name'] ?></label></a></div>
        <?php
        } 
        ?>
    </div>
</center>
</body>
</html>