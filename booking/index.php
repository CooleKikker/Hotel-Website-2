<!DOCYTPE html>
<html>
    <head>
        <title>Boekingen</title>
        <link rel="stylesheet" href="../css/main.css">
    </head>
    <body>
        <div class="yellowblock2">
        <?php
            $conn = new mysqli("localhost", "root", "", "bookings");
            if($conn){
            $query = "SELECT `hotel`.id, `hotel`.`company`, `hotel`.`street`, `hotel`.`building`, `hotel`.city, `hotel`.`country` FROM `hotel`";
            if($result = $conn->query($query)){
                while($row = $result->fetch_assoc()){
                    $id = $row['id'];
                    echo "<b>Hotel: ". $row['company'] .", ".$row['street']." ".$row['building'].", ".$row['city'].", ".$row['country']."<br></b>";
                    $query2 = "SELECT * FROM booking WHERE hotel_id = $id";
                    if($result2 = $conn->query($query2)){
                            $aantal = mysqli_num_rows($result2);
                            if($aantal == 0){
                                echo "<p>Geen boekingen gevonden bij dit hotel!</p><br>";
                            }else{
                                echo "$aantal boekingen gevonden bij hotel!";
                                echo "<table style='width:100%;'><tr><th>Check in</th><th>Check out</th><th>Adults</th><th>Children</th></tr>";
                                while($row2 = $result2->fetch_assoc()){
                                    echo "<tr><th>".$row2['check_in']."</th><th>".$row2['check_out']."</th><th>".$row2['adults']."</th><th>".$row2['children']."</th></tr>";
                            }  
                        }
                        echo "</table>";
                }
            }
            }
        }
        ?>
        </div>
    </body>
</html>