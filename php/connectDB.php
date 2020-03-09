<?php

class ConnectDB {
    public $serverName;
    public $userName;
    public $password;
    public $dbName;
    public $tableName;
    public $con;

    public function __construct(
        $dbName = "products",
        $serverName = "localhost",
        $userName = "root",
        $password ="",
        $tableIndex = "index_items",
        $tablePhone = "phone",
        $comment = "comment"
    )
    {
        $this->dbName = $dbName;
        $this->severName = $serverName;
        $this->userName = $userName;
        $this->password = $password;
        $this->tableIndex = $tableIndex;
        $this->tablePhone = $tablePhone;
        $this->comment = $comment;


 //Create Database Connection
        $this->con = mysqli_connect($serverName, $userName, $password);

        //Check connection
        if (!$this->con) { //eger geçerli bir bağlantı yoksa programı sonlandır.
            die("Connection Failed: ".mysqli_connect_error());
        }

        //Bağlantı tamamlandıktan sonra artık sorgu yapabiliriz.
        $sql = "CREATE DATABASE IF NOT EXISTS $dbName";

        //Yukarıda oluşturulan sorguyu uygula(Execute query)
        if(mysqli_query($this->con, $sql)) { //eğer geçerli bir bağlantı ve sorgu varsa if bloğuna gir.
            $this->con = mysqli_connect($serverName, $userName, $password, $dbName);
        }
    }

    // Anasayfa ürünlerini databaseden getir
    public function getIndexItems($rowNumber) {
        $sql = "SELECT * FROM $this->tableIndex 
                WHERE id = $rowNumber";
                
        $result = mysqli_query($this->con, $sql);
        if (mysqli_num_rows($result)>0) {
            return $result;
        }
    }

    //Telefonlaro databaseden getir
    public function getPhoneItems() {
        $sql = "SELECT * FROM $this->tablePhone";
                    
        $result = mysqli_query($this->con, $sql);
        if (mysqli_num_rows($result)>0) {
            return $result;
        }
    }


    //Comment Section
    public function comments() {
        if (isset($_POST['insert'])) {
            // Escape user inputs for security
            $name = mysqli_real_escape_string($this->con, $_POST['name']);
            $email1 = mysqli_real_escape_string($this->con, $_POST['email']);
            $email2 = mysqli_real_escape_string($this->con, $_POST['email2']);
            $gender = mysqli_real_escape_string($this->con, $_POST['gender']);
            $comment = mysqli_real_escape_string($this->con, $_POST['comment']);
            $email = $email1.$email2;
    
            $sql = "insert into $this->comment values('$name', '$email', '$gender', '$comment');";
            } 

    }

}
?>
