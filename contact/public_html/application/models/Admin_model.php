<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
	/**
	 * Class constructor.
	 */
	public function __construct()
	{
		parent::__construct();
	}

	public function insert_article($reg_details)
	{
		if($this->db->insert('articles', $reg_details))
		{
			return true;
		}else {
			return false;
		}
	}

	public function get_all_articles() {
		$query= $this->db->query('SELECT * FROM articles WHERE archive="non" ORDER BY date_pub DESC');
		return $query->result();
	}

	public function get_some_articles($nb) {
		$query = $this->db->query('SELECT articles.*, COUNT(commentaires.id_article) AS commentaire, year(articles.date_pub) AS annee, month(articles.date_pub) AS mois, day(articles.date_pub) AS jour, hour(articles.date_pub) AS heure, minute(articles.date_pub) AS minute FROM articles LEFT JOIN commentaires ON(articles.id = commentaires.id_article) GROUP BY articles.id HAVING articles.archive = "non" ORDER BY articles.date_pub DESC LIMIT '.$nb);
		return $query->result();
	}

	public function get_all_articles_user() {
		$query = $this->db->query('SELECT articles.*, COUNT(commentaires.id_article) AS commentaire, year(articles.date_pub) AS annee, month(articles.date_pub) AS mois, day(articles.date_pub) AS jour, hour(articles.date_pub) AS heure, minute(articles.date_pub) AS minute FROM articles LEFT JOIN commentaires ON(articles.id = commentaires.id_article) GROUP BY articles.id HAVING (articles.archive = "non") ORDER BY articles.date_pub DESC');
		return $query->result();
	}

	public function get_all_archives() {
		$query= $this->db->query('SELECT * FROM articles WHERE archive="oui" ORDER BY date_pub DESC');
		return $query->result();
	}

	public function login($login, $password) {
		$this->db->where('username', $login);
		$this->db->where('password', $password);
		$query= $this->db->get('admin');
		return $query->row();
	}

	public function get_all_categorie_articles($categorie) {
		if ($categorie == 'Societe') {
			$query = 'SELECT articles.*, COUNT(commentaires.id_article) AS commentaire, year(articles.date_pub) AS annee, month(articles.date_pub) AS mois, day(articles.date_pub) AS jour, hour(articles.date_pub) AS heure, minute(articles.date_pub) AS minute FROM articles LEFT JOIN commentaires ON(articles.id = commentaires.id_article) GROUP BY articles.id HAVING ((articles.archive = "non") AND ((id_categorie = "Societe") OR (id_categorie = "Sport"))) ORDER BY articles.date_pub DESC';
		}else {
			$query = 'SELECT articles.*, COUNT(commentaires.id_article) AS commentaire, year(articles.date_pub) AS annee, month(articles.date_pub) AS mois, day(articles.date_pub) AS jour, hour(articles.date_pub) AS heure, minute(articles.date_pub) AS minute FROM articles LEFT JOIN commentaires ON(articles.id = commentaires.id_article) GROUP BY articles.id HAVING ((articles.archive = "non") AND (id_categorie = "'.$categorie.'")) ORDER BY articles.date_pub DESC';
		}
		$query = $this->db->query($query);
		return $query->result();
	}

	public function get_an_admin($id) {
		$this->db->where('id', $id);
		$query= $this->db->get('admin');
		return $query->row();
	}

	public function insert_admin_update($reg_id, $reg_details)
	{
		$this->db->where('id', $reg_id);
		$result = $this->db->update('admin', $reg_details);
		if ($result) {
			return true;
		} else {
			return false;
		}
	}
}
