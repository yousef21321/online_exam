<?php
    $filepath = realpath(dirname(__FILE__));
    include_once ($filepath.'/../lib/Session.php');
    include_once ($filepath.'/../lib/Database.php');
    include_once ($filepath.'/../helpers/Format.php');

class Admin1{
    private $db1;
    private $fm1;
    public function __construct(){
        $this->db1 = new Database();
        $this->fm1 = new Format();
    }

    public function getAdminData($_data){
        $adminUser = $this->fm1->validation($_data['adminUser']);
        $adminPass = $this->fm1->validation($_data['adminPass']);

        $adminUser  = mysqli_real_escape_string($this->db1->link, $adminUser);
        $adminPass = mysqli_real_escape_string($this->db1->link, md5($adminPass));

        $query = "select * from tbl_admin1 where adminUser='$adminUser' and adminPass='$adminPass'";
        $result = $this->db1->select($query);
            if($result != false){
            $value = $result->fetch_assoc();
                Session1::init();
                Session1::set("adminLogin", true);
                Session1::set("adminUser", $value['adminUser']);
                Session1::set("adminId", $value['adminId']);
                header("Location:index.php");
        }else{
                $smg = "<span class='error'>Username or Password Not Matched!</span>";
                return $smg;
            }
    }
}
?>
