<?php
                
				

				function query($q)
                {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "cms";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM laptop";
                    $result = mysqli_query($conn, $sql);
                    return $result;
                }



    ?>