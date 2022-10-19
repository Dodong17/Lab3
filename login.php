
<?php include ('connection.php');

  if (isset($_POST['SUBMIT'])) {


$Firstname = mysqli_real_escape_string($conn, $_POST['Firstname']);
$MiddleName = mysqli_real_escape_string($conn, $_POST['MiddleName']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$Password = mysqli_real_escape_string($conn, $_POST['Password']);
$conpassword = mysqli_real_escape_string($conn, $_POST['conpassword']);

if ($Password == $conpassword) {
    $bahala = "SELECT uname FROM users WHERE uname = '$username'";
    $bahala2 = mysqli_query($conn, $bahala);

    if (mysqli_num_rows($bahala2)>0){
        
        header('Location: regis.php' );
        exit(0);

    }else{
        $end = "INSERT INTO users( fname, mname, lname, uname, gender, pword) VALUES( '$Firstname', '$MiddleName', '$lastname', '$username', '$gender', '$Password')";

        $bahala3 = mysqli_query($conn, $end);
        
        if($bahala3){
            header('Location: regis.php' );
            exit(0);
        }else {
            header('Location: regis.php' );
            exit(0);
        }
    }
}else{
    echo "WRONG PASSWORD KA! ";
    echo "TIGBASUN TIKA RUN!";
}

  }

?>