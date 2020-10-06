<?php

require "Database.php";

class Categorie {
    
    public function __construct()
    {
        $this->db = new Database();
    }
    /**
     * Get all informations about categorie
     *
     */
    public function getAll()
    {
        $this->db->query("SELECT * FROM categorie");
    }

    /**
     * Get one line of categorie
     *
     * @param int $id
     */
    public function getOne($id)
    {
        $this->db->query("SELECT * FROM categorie WHERE id=$id", true);
    }

    /**
     * Save informations in categorie
     *
     * @param array $param
     */
    public function save($param)
    {
        $statement = "INSERT INTO categorie (name) VALUES (:name)";
        $this->db->prepare($statement, "save", $param);
    }

    /**
     * delete one line in categorie
     *
     * @param int $id
     */
    public function delete($id)
    {
        $statement = "DELETE FROM categorie WHERE id=$id";
        $this->db->prepare($statement, "delete");
    }

    /**
     * Modify data in categorie
     *
     * @param int $id
     * @param string $param
     */
    public function put($id, $param){
        $put = explode(",", $param);
        $data= array();

        foreach ($put as $value) {
            $elmt = explode(":", $value);
            $data[$elmt[0]] = $elmt[1];
        }

        // $statement = "UPDATE categorie SET name= :name WHERE id=$id";
        $statement = "UPDATE categorie SET ";
        foreach ($data as $key => $value) {
            $statement .= $key."=".$value.", ";
        }
        $statement = substr($statement, 0,-2);
        $statement .= " WHERE id=$id";
        var_dump($statement);
        // $this->db->prepare($statement, "put", $data);
    }
}