<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends CI_Model
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
		//$this->db->insert('Table_name', $Object);
		if($this->db->insert('articles', $reg_details))
		{
			return true;
		}else {
			return false;
		}
	}

	public function insert_image($reg_details)
	{
		if($this->db->insert('pictures', $reg_details))
		{
			return true;
		}else {
			return false;
		}
	}

	public function get_all_article_images($id_article) {
		$this->db->where('id_art', $id_article);
		$this->db->order_by('img_path','ASC');
		$query= $this->db->get('pictures');
		return $query->result();
	}

	public function get_all_articles() {
		$query= $this->db->query('SELECT * FROM articles WHERE archive="non" ORDER BY date_pub DESC');
		return $query->result();
	}

	public function get_some_articles($nb) {
		$query = $this->db->query('SELECT articles.*, COUNT(commentaires.id_article) AS commentaire, year(articles.date_pub) AS annee, month(articles.date_pub) AS mois, day(articles.date_pub) AS jour, hour(articles.date_pub) AS heure, minute(articles.date_pub) AS minute FROM articles LEFT JOIN commentaires ON(articles.id = commentaires.id_article) GROUP BY articles.id HAVING articles.archive = "non" ORDER BY articles.date_pub DESC LIMIT '.$nb);
		return $query->result();
	}

	public function get_all_categorie_articles($categorie) {
		$query = $this->db->query('SELECT articles.*, COUNT(commentaires.id_article) AS commentaire, year(articles.date_pub) AS annee, month(articles.date_pub) AS mois, day(articles.date_pub) AS jour, hour(articles.date_pub) AS heure, minute(articles.date_pub) AS minute FROM articles LEFT JOIN commentaires ON(articles.id = commentaires.id_article) GROUP BY articles.id HAVING ((articles.archive = "non") AND (id_categorie = "'.$categorie.'")) ORDER BY articles.date_pub DESC');
		return $query->result();
	}

	public function get_all_categorie_articles_top10($categorie) {
		$query = $this->db->query('SELECT articles.*, COUNT(commentaires.id_article) AS commentaire, year(articles.date_pub) AS annee, month(articles.date_pub) AS mois, day(articles.date_pub) AS jour, hour(articles.date_pub) AS heure, minute(articles.date_pub) AS minute FROM articles LEFT JOIN commentaires ON(articles.id = commentaires.id_article) GROUP BY articles.id HAVING ((articles.archive = "non") AND (id_categorie = "'.$categorie.'")) ORDER BY articles.date_pub DESC LIMIT 10');
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

	public function get_an_article($id) {
		$query= $this->db->query('SELECT articles.*, year(articles.date_pub) AS annee, month(articles.date_pub) AS mois, day(articles.date_pub) AS jour, hour(articles.date_pub) AS heure, minute(articles.date_pub) AS minute, year(articles.date_mod) AS annee_mod, month(articles.date_mod) AS mois_mod, day(articles.date_mod) AS jour_mod, hour(articles.date_mod) AS heure_mod, minute(articles.date_mod) AS minute_mod, year(articles.date_archive) AS annee_archive, month(articles.date_archive) AS mois_archive, day(articles.date_archive) AS jour_archive, hour(articles.date_archive) AS heure_archive, minute(articles.date_archive) AS minute_archive FROM articles WHERE articles.id = '.$id);
		return $query->row();
	}

	public function get_article_by_titre($titre) {
		$query= $this->db->query('SELECT * FROM articles WHERE articles.titre = "'.$titre.'"');
		return $query->row();
	}

	public function insert_article_update($reg_id, $reg_details)
	{
		$this->db->where('id', $reg_id);
		$result = $this->db->update('articles', $reg_details);
		if ($result) {
			return true;
		} else {
			return false;
		}
	}

	public function delete_artile_model($id) {
		$this->db->where('id', $id);
		$result = $this->db->delete('articles');
		$this->db->where('id_article', $id);
		$result2 = $this->db->delete('commentaires');
		if ($result == $result2) {
			return true;
		} else {
			return false;
		}
	}

	public function archive_article_model($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->update('articles', array("archive"=>"oui", "date_archive"=>date("Y-m-d H:i:s",time())));
		if ($result) {
			return true;
		} else {
			return false;
		}
	}

	public function unarchive_article_model($id)
	{
		$this->db->where('id', $id);
		$result = $this->db->update('articles', array("archive"=>"non", "date_archive"=>null));
		if ($result) {
			return true;
		} else {
			return false;
		}
	}

	public function like_article_model($id)
	{
		$result = $this->db->query('UPDATE articles SET nb_like = nb_like +1 WHERE articles.id = '.$id);
		if ($result) {
			return true;
		} else {
			return false;
		}
	}

	public function view_article_model($id)
	{
		$result = $this->db->query('UPDATE articles SET nb_vues = nb_vues + 1 WHERE articles.id = '.$id);
		if ($result) {
			return true;
		} else {
			return false;
		}
	}
	public function get_all_article_comments($id_article) {
		$query= $this->db->query('SELECT commentaires.*,  year(commentaires.date_pub) AS annee, month(commentaires.date_pub) AS mois, day(commentaires.date_pub) AS jour, hour(commentaires.date_pub) AS heure, minute(commentaires.date_pub) AS minute FROM commentaires WHERE id_article = '.$id_article.' ORDER BY date_pub DESC');
		return $query->result();
	}

	public function count_art() {
		$query = $this->db->query('SELECT COUNT(id) AS cpt_art FROM articles WHERE (archive = "non")');
		return $query->row();
	}

	public function count_arc() {
		$query = $this->db->query('SELECT COUNT(id) AS cpt_arc FROM articles WHERE (archive = "oui")');
		return $query->row();
	}

	public function count_journ() {
		$query = $this->db->query('SELECT COUNT(*) AS cpt_journ FROM journalistes');
		return $query->row();
	}

	public function count_archive_by_year() {
		$query = $this->db->query('SELECT archive, YEAR(articles.date_archive) AS annee, COUNT(*) nb_archive FROM articles GROUP BY annee HAVING archive="oui" ORDER BY annee DESC');
		return $query->result();
	}

	public function get_annual_archives($annee) {
		$query = $this->db->query('SELECT articles.*, COUNT(commentaires.id_article) AS commentaire, year(articles.date_archive) AS annee, month(articles.date_archive) AS mois, day(articles.date_archive) AS jour, hour(articles.date_archive) AS heure, minute(articles.date_archive) AS minute FROM articles LEFT JOIN commentaires ON(articles.id = commentaires.id_article) GROUP BY articles.id HAVING ((articles.archive = "oui") AND (YEAR(date_archive)= '.$annee.')) ORDER BY articles.date_pub DESC');
		return $query->result();
	}

	public function get_articles_by_views() {
		$query = $this->db->query('SELECT articles.*, COUNT(commentaires.id_article) AS commentaire, year(articles.date_pub) AS annee, month(articles.date_pub) AS mois, day(articles.date_pub) AS jour, hour(articles.date_pub) AS heure, minute(articles.date_pub) AS minute FROM articles LEFT JOIN commentaires ON(articles.id = commentaires.id_article) GROUP BY articles.id HAVING (articles.archive = "non") ORDER BY articles.nb_vues DESC, articles.date_pub DESC LIMIT 10');
		return $query->result();
	}
}
