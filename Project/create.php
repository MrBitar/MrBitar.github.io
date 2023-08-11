<html>
    <head>
        <title>Brew</title>
        <link rel="stylesheet" type="text/css" href="php.css" />
</head>
<body><div>
        <h1>Create Your Own Drink</h1>
        <form action="" >
        <p>Enter Your Name:</p>
        <input type="text" name="name" required/>
        <p>Enter The Drink Name:</p>
        <input type="text" name="drink" required/>
        <p>Enter the recipe:</p>
        <textarea cols="50" rows="10" name="recipe" required></textarea><br/>
        <input type="submit" name="Submit" value="Submit" onclick="create()" /><br />
        <input type="reset" name="Reset" value="Reset"/>
    

</form>
</div>
       <script>
        function create(){
            <?php 
            session_start();
            require_once "connection.php";
            $name=$_GET['name'];
            $drink=$_GET['drink'];
            $recipe=$_GET['recipe'];
            if(isset($name) && isset($drink) && isset($recipe))
            {
            $query="INSERT INTO brew VALUES (NULL,'$name','$recipe','$drink')";
            $result = mysqli_query($con,$query);
            $name="";
            $drink="";
            $recipe="";
            }
            if (!$result)
            die ("Database access failed: ".mysqli_error());
            ?>
            res= alert("Leave ??");
            if (res){
                <?php
                header("Location:own.php");
                ?>
            }
        }
        </script>
        
</body>
</html>