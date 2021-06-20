<?php include("connection.php");
include("header.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Webslesson Demo | Simple PHP Mysql Shopping Cart</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <br />
        <div class="container">
            <br />
            <br />
            <br />
            <h3 align="center">Pets For You</h3><br />
            <br /><br />
            <?php
                $query = "select * from  pet where status='Not Booked' ";
                $result = mysqli_query($con, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
            <div  class="col-md-4">
                <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                    <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                        <img  src="images/<?php echo $row["img"]; ?>" class="img-responsive" /><br />
                        
                        <h4 class="text-info"><?php echo $row["breed"]; ?></h4>
                         <h4 class="text-info"> <?php echo $row["gender"]; ?></h4>
                       <h4 class="text-info"><?php echo $row["description"]; ?></h4>
                        <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

                       

                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                        <button type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="View"><a style="text-decoration: none;color: white" href="login.php">View</a></button>

                    </div>
                </form>
            </div>
            <?php
                    }
                }
            ?>