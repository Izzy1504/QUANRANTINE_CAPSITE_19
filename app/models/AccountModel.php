<?php

class AccountModel {
    private $phone;
    private $password;
    private $role;

    public function __construct($phone, $password, $role) {
        $this->phone = $phone;
        $this->password = $password;
        $this->role = $role;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRole() {
        return $this->role;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setRole($role) {
        $this->role = $role;
    }
    public function login() {
        // Sử dụng kết nối từ lớp Connection
        $db = new Database();
    
        // Sử dụng tham số để tránh SQL injection
        $sql = "SELECT * FROM dbo.Account WHERE phone = ? AND password = ?";
        
        // Use an array to pass parameters in the correct order
        $params = array($this->phone, $this->password);
    
        // Sử dụng prepared statement để tránh SQL injection
        $result = $db->query($sql, $params);
    //    var_dump($result);
     
            if ($result) {
                // Check if there is a matching user
                if ($result > 0) {
                    return true;
                    
                } else {
                    // Incorrect phone or password
                    return false;
                }
            } else {
                // Error in the query
                // You might want to log the error or handle it appropriately
                return false;
            }
        
       
    }
    

    public function logout() {
        // Thực hiện các bước đăng xuất, ví dụ: hủy session
        session_start();
        session_destroy();
    }

}
