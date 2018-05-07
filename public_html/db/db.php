<?php 

function connect()
{
//     $server="localhost";
//     $user = "root";
//     $pw = "";
    $server="localhost:3306";
    $user = "tux";
    $pw = "mqIw32~3";
    $dbn= "bilder";
    
    $conn = new mysqli($server, $user, $pw, $dbn);
    
    if($conn->connect_error){
        die("C f".$conn->connection_error);
    }
    
    return $conn;
    $conn->close();
}


function upload(){
    $conn=connect();
    
    $z=$_POST["selectalbum"];
    $z=$z+1;
    $z2=$_SESSION["aktBild"]["adr"];
    $z1=$_SESSION["aktBild"]["name"];
    $st = $conn->prepare("Insert Into Bild (Album_ID,Name,addresse) values (?,?,?)");
    $st->bind_param("iss",$z,$z1,$z2);
    $st->execute();
    
    echo "Es isch gange";
    $conn->close();
}

function loadPic() {
    $db = connect();
    //Liest die Medienart_ID aus der Medienart aus und speichert sie in $zahl
    $sql1= "SELECT addresse FROM Bild WHERE Album_ID = 1";
    
    $resultma = $db->query($sql1);
    
    
    return $resultma;
    $db->close();
}


?>