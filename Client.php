<?php

require "General.php";

class Client extends General {

    protected $table = "client";

    /**
     * Save client
     *
     * @param array $param
     * @return void
     */
    public function save($param){
        $statement = "INSERT INTO client (username, role, password, secret_api_key)
                        VALUES (:username, :role, :password, :secret_api_key)";
        
        $param["username"]= htmlspecialchars($param["username"]);
        $param["password"]= password_hash($param["password"], PASSWORD_DEFAULT);
        $param["role"]= json_encode(["ROLE_USER"]);
        $param["secret_api_key"]= md5(uniqid());

        $this->db->prepare($statement, 'save', $param);
    }
}