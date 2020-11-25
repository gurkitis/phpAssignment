<?php
    class DB
    {
        private static $servername = "localhost";
        private static $username = "root";
        private static $password = "";
        private static $dbname = "php_assignmentDB";

        public static function Querry($qry)
        {
            $conn = mysqli_connect(self::$servername, self::$username, self::$password, self::$dbname);
            if (!$conn)
            {
                die("Connection failed: ". mysqli_connect_error());
            }

            $result = $conn->query($qry);

            if ($conn->error == null)
            {
                return $result;
            }
            else
            {
                echo "Error: " . $qry . "<br>" . $conn->error;
            }

            $conn->close();
        }
    }
?>