<?php

    include_once 'config/constants.php';

    class Model
    {
        private $server = LOCALHOST;
        private $username = DB_USERNAME;
        private $password = DB_PASSWORD;
        private $database = DB_NAME;
        private $conn;
        public $siteurl = SITEURL;

        public function __construct()
        {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
            else {
                echo "Connected successfully";
            }
        }

        public function fetch()
        {
            $data = null;

            $sql = "SELECT * FROM products";
            $result = $this->conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc($sql)) {
                    // echo "<tr>";
                    // echo "<td>".$row["sku"]."</td>";
                    // echo "<td>".$row["name"]."</td>";
                    // echo "<td>".$row["price"]."</td>";
                    // echo "<td>".$row["size"]."</td>";
                    // echo "<td>".$row["weight"]."</td>";
                    // echo "<td>".$row["dimension"]."</td>";
                    // echo "</tr>";

                    $data[] = $row;
                }
            } else {
                echo "0 results";
            }
            return $data;
        }

    }
    


?>