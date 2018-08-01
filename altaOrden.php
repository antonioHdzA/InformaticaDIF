<?php
  $servername="localhost";
  $username="root";
  $password="";
  // Create connection

  $nombre= $_POST['nombre'];
  $area= $_POST['area'];
  $coordinacion= $_POST['coordinacion'];
  $problema= $_POST['problema'];
  $descripcion= $_POST['descripcion'];
  echo "<script> console.log('".$nombre."')</script>"

  /*$conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
  }
  echo "<script> console.log('Connected successfully') </script>";

  $sql = "INSERT INTO ordenes (nombre, area, coordinacion, problematica,descripcion) VALUES ('John', 'Doe', 'john@example.com')";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }*/
?>
