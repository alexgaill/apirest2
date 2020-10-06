<?php

require "Database.php";

class Article {
    
    public function __construct()
    {
        $this->db = new Database();
    }
    /**
     * Get all informations about article
     *
     */
    public function getAll()
    {
        $this->db->query("SELECT * FROM article");
    }

    /**
     * Get one line of article
     *
     * @param int $id
     */
    public function getOne($id)
    {
        $this->db->query("SELECT * FROM article WHERE id=$id", true);
    }

    /**
     * Save informations in article
     *
     * @param array $param
     */
    public function save($param)
    {
        $statement = "INSERT INTO article (title, content, categorie_id) VALUES (:title, :content, :categorie_id)";
        $this->db->prepare($statement, "save", $param);
    }

    /**
     * delete one line in article
     *
     * @param int $id
     */
    public function delete($id)
    {
        $statement = "DELETE FROM article WHERE id=$id";
        $this->db->prepare($statement, "delete");
    }

    /**
     * Modify data in article
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

        $statement = "UPDATE article SET title= :title, content= :content, categorie_id= :categorie_id WHERE id=$id";
        $this->db->prepare($statement, "put", $data);
    }
}