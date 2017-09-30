
<?php 





// // DATABASE CONNECTION
// $servername = "localhost";
// $username = "root";
// $password = "";

//  $conn = new mysqli($servername, $username, $password);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// else {echo "Connected successfully";


// // CREATE DATABASE

// //$sql = "CREATE DATABASE MYDATABASE";
// //if ($conn->query($sql) === TRUE) {
//   //  echo "Database created successfully. <br>"; 
//     // sql to create table
// $sql = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP
// )";

// if ($conn->query($sql) === TRUE) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }
// }

// $conn->close();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MYDATABASE";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// // sql to create table
// $sql = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP
// )";

// if ($conn->query($sql) === TRUE) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com')";

// if ($conn->multi_query($sql) === TRUE) {
// 	    $last_id = $conn->insert_id;

//     echo "New records created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }


// $sql = " SELECT firstname, lastname FROM MyGuests ";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo " Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//     }
// } else {
//     echo "0 result";
// }


$sql = "DELETE FROM MyGuests WHERE id > 20";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();





$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}






$conn->close();

 ?>
