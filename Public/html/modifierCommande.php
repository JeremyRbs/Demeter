 <?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $host = "localhost"; /* Host name */
    $user = "lambda"; /* User */
    $password = "lambda"; /* Password */
    $dbname = "projetdemeter"; /* Database name */

    $con = mysqli_connect($host, $user, $password, $dbname);
    // Check connection
    if (! $con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $return_arr = array();

    $query = "UPDATE `commande` SET `A_Livrer` = 'O' WHERE `commande`.`NumCom` = ".$id." ";

    $result = mysqli_query($con, $query);

}

?>