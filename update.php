<?php
	$conn = mysqli_connect('itflab0263070036.mysql.database.azure.com', 'Chinnatad@itflab0263070036', 'HIVlyv86', 'itflab');

	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$link = $_POST['link'];
	$id = $_POST['id'];

    $sql = 'UPDATE guestboook SET Name = "'.$name.'", Comment = "'.$comment.'", Link = "'.$link.'" WHERE ID = '.$id.'';
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 text-center">
      
            <h3>
                <?php
                    if (mysqli_query($conn, $sql)) {
                        echo "Update Completed";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                ?>
            </h3>
            <a href="index.php" class="btn btn-secondary mt-3">BACK</a>
       
    </div>
</body>

</html>
