<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

class addusers{
    //properties
    private $fullname;
    private $email;
    private $gender;
    private $groupp;
    private $mobile;
    private $dateOfBird;

    // Methods khai bao cau truc
    public function __construct($fullname, $email, $gender, $groupp, $mobile, $dateOfBird){
        $this -> fullname= $fullname;
        $this -> email = $email;
        $this ->gender = $gender;
        $this ->groupp = $groupp;
        $this ->mobile = $mobile;
        $this ->dateOfBird = $dateOfBird;

    }

    //Getters/setter
    public function getFullName(){
        return $this->fullname;
    }
    public function setFullName($fullname){
         $this->fullname =$fullname;
    }

}

?>
<a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> </a>
</body>
</html>