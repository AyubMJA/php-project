<!-- Statement of Authorship “I, Ayub Ali, student number 000354446, certify that this material is my original work. No other person's work has been used without due acknowledgement and I have not made my work available to anyone else. -->
<!-- 
    Sources Used will researching

    1. https://stackoverflow.com/questions/1179874/what-is-the-difference-between-bindparam-and-bindvalue
    2. https://stackoverflow.com/questions/134099/are-pdo-prepared-statements-sufficient-to-prevent-sql-injection
    3. https://stackoverflow.com/questions/42983503/pdofetch-obj-argument-in-fetchall-function
    4. https://stackoverflow.com/questions/46413577/php-fetchall-pdofetch-obj-and-json-encode-returns-invalid-json/46414156#46414156
    5. https://stackoverflow.com/questions/47071558/password-verify-function-inxampp-php-mysql-not-working
    6. https://stackoverflow.com/questions/16822169/pdo-incorporation-within-class
 -->
<?php
class User{
    protected $dbh;

    function __construct($dbh)
    {
        $this->dbh = $dbh;  
    }
    
    // Method to create new user
    public function loginUser($email, $password){
        $command = "SELECT userID, `password` FROM users WHERE email = :email"; //~password~ backslashes because password is a reserved keyword
        $stmt = $this->dbh->prepare($command);
        $stmt->bindParam(":email",$email,$this->dbh::PARAM_STR); //Passing inn $this->dbh works don't need PDO:: ~
        
        $stmt->execute();
        $user = $stmt->fetch($this->dbh::FETCH_OBJ); // returns user object
        $countRow = $stmt->rowCount();

        if($countRow > 0){
            $hashedPassword = $user->password; //captures users $hashedPassword
            //If statement compares the password typed in with hashed
            if(password_verify($password,$hashedPassword)){
                $_SESSION['userID'] = $user->userID;
                header('Location:home.php');
            }
        } else{
            return false;
        }
    }

    //signup users.
    public function signUp($email, $password){
        $command = "INSERT INTO users (email,`password`) VALUES(:email,:password)";
        $stmt = $this->dbh->prepare($command);
        $hashedPassword = password_hash($password,PASSWORD_DEFAULT); //Hashes user password here.

        $stmt->bindParam(":email",$email,$this->dbh::PARAM_STR); //binds user email with :email
        $stmt->bindParam(":password",$hashedPassword,$this->dbh::PARAM_STR); //Binds user password with :password
        $stmt->execute();

        $userID = $this->dbh->lastInsertId();
        $_SESSION['userID'] = $userID;
    }

    // Change funtion name and refactor it.
    public function checkEmail($email){
        $command = "SELECT email FROM users WHERE email = :email";
        $stmt = $this->dbh->prepare($command);
        $stmt->bindParam(":email", $email, $this->dbh::PARAM_STR);
        $stmt->execute();

        
        $count = $stmt->rowCount();

        if($count > 0){
            return true;
        }else {
            return false;
        }
    }

    //reteriving user info from table
    public function userInfo($userID){
        $command = "SELECT * FROM users WHERE userID = :userID";
        $stmt = $this->dbh->prepare($command);
        $stmt->bindParam(":userID", $userID, $this->dbh::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch($this->dbh::FETCH_OBJ);  // dbh === PDO db connection
    }
}
?>