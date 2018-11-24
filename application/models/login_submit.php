<?php

session_start();
?>
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_submit extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

}

public function get_data_from_table() {
        $query = $this->db->get('Users');
        return $query->result();
}




$email = ['email'];
$password = ['password'];
$count = 0;

$sql = "select *from users";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die(mysqli_error($conn));
}

while ($row = mysqli_fecth_array($result)) {
    if ($row['email'] == $email && $row['password']) {
        echo "welcome back" . $row['name'] . "<br/>";
        echo "<a href='ndash.php'>click here to go to your dashboard</a>";
        $count ++;
        $_SESSION['email'] = $email;
        break;
    }
}

if ($count == 0) {
    echo "you have entered a wrong password or email" . "<br/>";
}


mysqli_close($conn);
?>    








