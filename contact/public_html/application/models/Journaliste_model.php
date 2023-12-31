<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Journaliste_model extends CI_Model
{
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
		parent::__construct();
	}

	public function insert_journaliste($reg_details)
	{
		if($this->db->insert('journalistes', $reg_details))
		{
			return true;
		}else {
			return false;
		}
	}

	public function get_all_journalistes() {
		$query= $this->db->query('SELECT * FROM journalistes ORDER BY username ASC');
		return $query->result();
	}

	public function get_a_journaliste($id) {
		$this->db->where('id', $id);
		$query= $this->db->get('journalistes');
		return $query->row();
	}

	public function insert_journaliste_update($reg_id, $reg_details)
	{
		$this->db->where('id', $reg_id);
		$result = $this->db->update('journalistes', $reg_details);
		if ($result) {
			return true;
		} else {
			return false;
		}
	}

	public function delete_journaliste($id) {
		$this->db->where('id', $id);
		$result = $this->db->delete('journalistes');
		if ($result == true) {
			return true;
		} else {
			return false;
		}
	}

	public function get_all_journaliste_articles($id_journaliste) {
		$query= $this->db->query('SELECT * FROM articles WHERE ((archive="non") AND (id_journaliste='.$id_journaliste.')) ORDER BY date_pub DESC');
		return $query->result();
	}

	public function login($login, $password) {
		$this->db->where('username', $login);
		$this->db->where('password', $password);
		$query= $this->db->get('journalistes');
		return $query->row();
	}
}
