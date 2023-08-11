<html>
    <head>
        <title>Fans creation!</title>
        <link rel="stylesheet" type="text/css" href="php.css" />
        
</head>
<body><div>
<?php
        require_once "connection.php";
        $query="SELECT * FROM brew";
        $result=mysqli_query($con,$query);
        $r=mysqli_num_rows($result);
        session_start();
        if(isset($_SESSION['name']))
        {
            $name=$_SESSION['name'];
            echo "<h1> Welcome $name</h1>";
        }
        else
        {
            echo "<h1><a href='index.html'>Welcome To The Lab!</a></h1>";
        }
        echo "<table style='font-family: candyshop;
        font-size: 210%; font-decoration:bold; margin:0.1in;'>";
        for($j=0; $j<$r; ++$j)
        {
            $row=mysqli_fetch_assoc($result);
            echo "<tr>";
            echo "<td><strong>Done by:</strong> ".$row['name']."</td>";
            echo "<td><strong>Drink: </strong>".$row['drink']."</td></tr>";
            echo '<tr><td colspan="2"><strong>Recipe:</strong><br />'.$row['recipe']."</td></tr>";
            

        }
        
        echo "</table>";
        
        ?>
</div>
</body>
</html>