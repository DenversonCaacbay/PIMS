<!DOCTYPE html>
<html>
<head>
    <title>Update Item</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<style>
    *{
    margin: 0;
    padding: 0;
}

body{
    font-family:'Open Sans', sans-serif;
}
.section1{
    margin-top:3%;
}

h3{
    color: #526dfe;
    margin-top:2%;
}
form{
    width: 70%;
    background:white;
    box-sizing: border-box;
    border-radius: 8px;
    border: 2px #526dfe solid;
    text-align: center;
    margin-top:12px;
    margin-left: 15%;
    padding:5%;
    font-family: "Monserrat" , sans-serif;

}

.btn{
    display:block;
    background:#ea3f25;
    padding: 14px 0;
    color:white;
    font-size: 18px;
    font-family: Helvetica, Arial, Sans-Serif;
    text-decoration: none;
    text-transform: uppercase;
    cursor: pointer;
    margin-top: 8px;
    width:100%;
}
input[type=text]{
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=submit] {
    display:block;
    background:#526dfe;
    padding: 14px 0;
    border: 1px #526dfe solid ;
    color:white;
    font-size: 18px;
    font-family: Helvetica, Arial, Sans-Serif;
    text-transform: uppercase;
    cursor: pointer;
    margin-top: 8px;
    width:100%;
}




  .box select {
    background-color: #526dfe;
    color: white;
    padding: 12px;
    width: 50%;
    border: none;
    font-size: 20px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
    -webkit-appearance: button;
    appearance: button;
    outline: none;
  }
  
  .box:hover::before {
    color: rgba(255, 255, 255, 0.6);
    background-color: rgba(255, 255, 255, 0.2);
  }
  
  .box select option {
    padding: 30px;
  }

</style>
<body>
<div class="testing">
    <br>
    
    <center><h3 class="logo" href="#">UPDATE PRODUCT</h3></center>
    </div>


    <div>
        <form action="update_form.php" method = "post" class="container">
			<input type="text" name="id" placeholder="Item ID Number" >
            <input type="text" name="update" placeholder="Update data" >
            <div class="box">
                <select name="choice">
                    <option value="">Select</option>
                    <option value="price">Price</option>
                    <option value="quantity">Quantity</option>
                </select><br><br>
            </div>

            <input type="submit" value="Update Item">
            <a class="btn" href="inventory.php">Back</a>
        </form>
    </div>

            <?php 
                $id = "";
                $update = "";
                $choice = "";

                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $id = clean($_POST["id"]);
                    $update = clean($_POST["update"]);
                    $choice = clean($_POST["choice"]);
                    $errors = [];

                    if(empty($id)){
                        array_push($errors, "ID Empty.");
                    }
                    if(empty($update)){
                        array_push($errors, "Input Empty.");
                    }
                    
                    if(count($errors) == 0){
                        $conn = new mysqli("localhost","root", "", "pims_db2");

                        $sql = "UPDATE inventory SET $choice = '".$update."' WHERE id ='".$id."' ";

                        if($conn->query($sql)){
                            echo '<script>
                            window.location = "inventory.php";
                            alert("Updating successfully");
                            
                            </script>';
                            exit();
                        }
                        else{
                            echo "<p>".$conn->error."</p>";
                        }
                        
                        $conn->close();


                    }
                    else{
                        displayError($errors);
                    }

                    
                }


                //Functions
                //For ez Errors
                function displayError($errors){
                    foreach($errors  as $error){
                        echo "<p>".$error."</p>";
                    }
                }


                //for cleaning inputs
                function clean($input){
                    $input = trim($input);
                    $input = stripslashes($input);
                    $input = htmlspecialchars($input);
                    return $input;
                }

            ?>
                
</body>
</html>