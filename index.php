<?php

class User {
    // Properties
    public $userName;
    public $firstName;
    public $lastName;
    public $adress;
    public $age;
    public $mail;
    public $tel;
    public $github;
    public $profilePicture;
    
    // Constructor
    public function __construct($userName, $firstName, $lastName, $adress, $age, $mail, $tel, $github, $profilePicture){
        $this->userName = $userName;
        $this->firstName = $firstName;
        $this->lastName =  $lastName;
        $this->adress = $adress;
        $this->age =  $age;
        $this->mail = $mail;
        $this->tel = $tel;
        $this->github = $github;
        $this->profilePicture = $profilePicture;
    }

    // Methods
    public function echoUserName(){
        echo "<li><b>User Name : </b>".$this->userName."</li>";
    }
    public function echoFirstName(){
        echo "<li><b>First Name : </b>".$this->firstName."</li>";
    }
    public function echoLastName(){
        echo "<li><b>Last Name : </b>".$this->lastName."</li>";
    }
    public function echoAdress(){
        echo "<li><b>Adress : </b>".$this->adress."</li>";
    }
    public function echoAge(){
        echo "<li><b>Age : </b>".$this->age." ans</li>";
    }
    public function echoMail(){
        echo "<li><b>Mail : </b><a href='mailto:".$this->mail."'>".$this->mail."</a></li>";
    }
    public function echoTel(){
        echo "<li><b>Tel : </b><a href='tel:".$this->tel."'>".$this->tel."</a></li>";
    }
    public function echogithub(){
        echo "<li><b>GitHub : </b><a href='".$this->github."'>GitHub</a></li>";
    }
    public function echoProfilePicture(){
        echo "<li><img src='".$this->profilePicture."'></li>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Title -->
    <meta name="description" content="Home description.">
    <title>Titre site</title>
    <meta charset="UTF-8"/>
    <!-- Robots -->
    <meta name="robots" content="index, follow">
    <!-- Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!-- Links -->
    <link rel="stylesheet" type="text/css" href="src/css/style.css"/>
</head>
<body>
    <div id="left_container">
        <section>
            <p>User Object Creator</p>
            <fieldset>
                <legend>Properties</legend>
                    <form action="index.php" method="POST">
                        <label for="user_name">Username</label>
                        <input type="text" name="user_name" required>
                        <label for="first_name">First name</label>
                        <input type="text" name="first_name" required>
                        <label for="last_name">Last name</label>
                        <input type="text" name="last_name" required>
                        <label for="profile_picture">Profile picture</label>
                        <input type="text" name="profile_picture" required>
                        <label for="adress">Adress</label>
                        <input type="text" name="adress" required>
                        <label for="age">Age</label>
                        <input type="number" name="age" required>
                        <label for="mail">Mail</label>
                        <input type="email" name="mail" required>
                        <label for="tel">Tel</label>
                        <input type="text" name="tel" required>
                        <label for="github">GitHub</label>
                        <input type="text" name="github" required>
                        <input type="submit" name="submit">
                    </form>

            </fieldset>
        </section>
    </div>
    <div id="right_container">
        <section>
            <p>User Class Created with POO</p>
            <?php
            if(isset($_POST['submit'])){
            ?>
            <fieldset>
                <legend>Properties</legend>
                <ul>
                <?php
                    $userName = $_POST['user_name'];
                    $firstName = $_POST['first_name'];
                    $lastName = $_POST['last_name'];
                    $adress = $_POST['adress'];
                    $age = $_POST['age'];
                    $mail = $_POST['mail'];
                    $tel = $_POST['tel'];
                    $github = $_POST['github'];
                    $profilePicture = $_POST['profile_picture'];

                    $userGreg = new User($userName, $firstName, $lastName, $adress, $age, $mail, $tel, $github, $profilePicture);
                    $userGreg->echoProfilePicture();
                    $userGreg->echoUserName();
                    $userGreg->echoFirstName();
                    $userGreg->echoLastName();
                    $userGreg->echoAdress();
                    $userGreg->echoAge();
                    $userGreg->echoMail();
                    $userGreg->echoTel();
                    $userGreg->echogithub();
                ?>
                </ul>
            </fieldset>
            <?php
            }
            ?>
        </section>
    </div>
</body>
</html>