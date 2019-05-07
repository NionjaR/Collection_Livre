<?php 
 
	if( !defined('BASEPATH')) exit('No direct script access allowed');
	
	class Acces_base extends CI_Model{
		
		public function get_List($table)
		{
			
			$sql = "select * from  ".$table."";
			$this->load->database();
			$result = $this->db->query($sql);
			$retour = $result->result_array();
			$this->db->close();
			return $retour;
		}
		public function getLivre_Categorie($id_categorie)
		{
			$sql = "select * from Livre_Categorie lc join Livre l on lc.id_livre=l.id where id_categorie='".$id_categorie."'";
			$this->load->database();
			$result = $this->db->query($sql);
			$retour = $result->result_array();
			$this->db->close();
			return $retour;
		}
		public function getListById($table,$id)
		{
			$sql = "select * from ".$table."  where id='".$id."'";
			$this->load->database();
			$result = $this->db->query($sql);
			$retour = $result->result_array();
			$this->db->close();
			return $retour;
		}		
		public function login($user,$mdp)
		{
			$sql = "select * from Admins where NOM_ADMIN= '".$user."' and MDP ='".$mdp."'";
			$this->load->database();
			$result = $this->db->query($sql);
			$retour = $result->result_array();
			$this->db->close();
			return $retour;
		}
		public function insert_Admin($name_admin,$mdp)
		{			
			$id =  "Admin".($this->Acces_base->count('Admins')['compt']+1);
			$sql = "insert into Admins values('".$id."','".$name_admin."','".$mdp."')";
			$this->load->database();
			$this->db->query($sql);
			$this->db->close();
		}
		public function count($table)
		{
			$sql = "select count(*)as compt from ".$table;
			//echo $sql;
			$this->load->database();
			$result = $this->db->query($sql);
			$retour = $result->row_array();
			$this->db->close();
			return $retour;			
		}	
		public function delete($id,$table)
		{
			$sql = "delete from ".$table." where id='".$id."'";
			echo $sql;
			$this->load->database();
			$result = $this->db->query($sql);
		}						
		
		public function insert_Livre($name_book,$date_enter,$description)
		{
			$this->load->database();			
			$id =  "Livre".($this->Acces_base->count('Livre')['compt']+1);
			$sql = "insert into Livre values('".$id."','".$name_book."','".$date_enter."','".$description."')";			
			//echo $sql;
			$this->db->query($sql);
			$this->db->close();
			return $id;
		}
		public function insert_Image($name_image,$id_livre)
		{
			$this->load->database();
			$sql = "insert into Image values('".$id_livre."','".$name_image."')";
			$this->db->query($sql);
			$this->db->close();
		}
		public function insert_Livre_categorie($idcategorie,$id_livre)
		{
			$this->load->database();						
			$sql = "insert into Livre_Categorie values('".$id_livre."','".$idcategorie."')";
			$this->db->query($sql);
			$this->db->close();			
		}
		public function insert_Categorie($categorie)
		{
			$this->load->database();
			$id =  "Categorie".($this->Acces_base->count('Categorie')['compt']+1);
			$sql = "insert into Categorie values('".$id."','".$categorie."')";			
			$this->db->query($sql);
			$this->db->close();
		}
		public function delete_livre($id,$table)
		{
			$sql = "delete from ".$table." where id ='".$id."'";
			$this->load->database();
			$this->db->query($sql);
			$this->db->close();
		}
		public function delete_livre_categorie($id,$table)
		{
			$sql = "delete from ".$table." where id_livre ='".$id."'";
			$this->load->database();
			$this->db->query($sql);
			$this->db->close();
		}
		public function delete_image($id,$table)
		{
			$sql = "delete from ".$table." where id_livre ='".$id."'";
			$this->load->database();
			$this->db->query($sql);
			$this->db->close();
		}
		public function update_livre($id,$name_book,$description)
		{
			$sql = "update Livre set NAME_BOOK='".$name_book."', DESCRIPTIONS='".$description."' where id = '".$id."'" ;			
			$this->load->database();
			$this->db->query($sql);
			$this->db->close();
		}		
	}
?>