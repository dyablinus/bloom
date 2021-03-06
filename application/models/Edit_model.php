<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edit_model extends CI_Model
{

   // va chercher la table dans db
    private $table = "posts";
    public function __construct()
    {
        parent::__construct();
    // charge db pour tous
        $this->load->database();
    }

    public function get_where_order_limit($where = array(), $order = "desc", $by = "id", $limit = 10)
    {
        $this->db->where('deleted', 0);
        // va chercher dans db table
        $this->db->order_by($by, $order)
             ->limit($limit);
        $result = $this->db->get_where($this->table, $where);
        return $result;
    }

    public function get_where($where = array())
    {
        $this->db->where('deleted', 0);
        // va chercher dans db table
        $result = $this->db->get_where($this->table, $where);
        return $result;
    }
    public function get_where_draft($where = array())
    {
        $this->db->where('deleted', 0);
        // va chercher dans db table
        $result = $this->db->get_where("draft", $where);
        return $result;
    }

// créer un tableau avec le post et son message
    public function create($data_article)
    {
        $this->db->insert($this->table, $data_article);
        return $this->db->insert_id();
    }

 //modifie le commentaire
    public function update($title, $texte, $id)
    {
        $data = array(
        'title'  => $title,
        'texte' => $texte
        );

        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }
    public function delete($id)
    {
        $data = array(
        'deleted' => 1
        );
        $this->db->where('id', $id);
        $this->db->update($this->table, $data);
    }
}
