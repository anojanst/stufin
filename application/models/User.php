<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model
{

    function userLogin($email ="",$password = ""){

        $this->db->from('user');
        $this->db->where('email', $email);
        // echo $this->bcrypt->hash_password($password);
        $results = $this->db->get()->row();
        
        if ($this->bcrypt->check_password($password, $results->password))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }


}
?>