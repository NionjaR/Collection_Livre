<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Controle extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->model('Acces_base');
			//echo base_url();
		}		
		public function indexBO()
		{
			$this->load->view('index(BO)');
		}		
		public function indexFO()
		{
			$datalist1 = $this->Acces_base->get_List('Categorie');
			$datalist2 = $this->Acces_base->get_List('Livre');			    
			$data = array("data_categorie"=>$datalist1,"data_livre"=>$datalist2);
			$this->load->view('index(FO)',$data);
		}
		public function login_page()
		{
			$this->load->view('Login');
		}	
		public function user_login()
		{
			$user = $this->input->post('user');	
			$mdp = $this->input->post('mdp');
			
			if($this->input->post('sign')=="sign")
			{
				$this->sign_in($user,$mdp);
			}
			else
			{
				$this->login($user,$mdp);
			}
		}
		public function sign_in($user,$mdp)
		{			
			$mdp = md5($mdp);//hash('md5',',kpkp');
			$this->Acces_base->insert_Admin($user,$mdp);
			$this->load->view('Login');
		}
		public function login()
		{
			$user = $this->input->post('user');	
			$mdp = $this->input->post('mdp');
			$hash = md5($mdp);
			
			$data1 = $this->Acces_base->login($user,$hash);
							
			if(count($data1)>0)
			{
				$this->session->set_userdata('idAdmin',$data1[0]['ID']);	
				$this->load->view('index(BO)');
			}
			else
			{
			  	$this->load->view('Login');			  
			}
		}
		public function Affiche_Produit_Categorie()
		{
			$id = $this->input->get('id');
			$datalivre = $this->Acces_base->getLivre_Categorie($id);
			$data_categorie = $this->Acces_base->get_List('Categorie');
			$data = array('page'=>'ListProduit','data_livre'=>$datalivre,'data_categorie'=>$data_categorie);
			$this->load->view('index(FO)',$data);
		}
		public function Fiche_Produit()
		{
			$id_livre = $this->input->get('id');
			$data_categorie = $this->Acces_base->get_List('Categorie');
			$datafiche = $this->Acces_base->getListById("Livre",$id_livre);						
			$data = array('page'=>'FicheProduit','dataFiche'=>$datafiche,'data_categorie'=>$data_categorie);
			$this->load->view('index(FO)',$data);
		}
		public function get_PageBO()
		{
			$page = $this->input->get('page');
			$datalist = "";
			if($page=="List")
			{
				$datalist = $this->Acces_base->get_List('Livre');			    
			}
			$datalist1 = $this->Acces_base->get_List('Categorie');
			$data = array('page'=> $page,"data"=>$datalist,"categories"=>$datalist1);
			$this->load->view('index(BO)',$data);
		}
		public function insert_categorie()
		{
			$name_categorie = $this->input->post('name_categorie');
			$this->Acces_base->insert_categorie($name_categorie);
			$data = array('page'=> "SaveCategorie");
			$this->load->view('index(BO)',$data);
		}
		public function insert_livre()
		{
			$name_book = $this->input->post('name_book');
			$date_enter = $this->input->post('date_enter');
			$name_image = $this->input->post('name_image');			 
			$description = $this->input->post('description');
			$idcategorie = $this->input->post('categorie');
			$id_livre = $this->Acces_base->insert_Livre($name_book,$date_enter,$description);
			$this->Acces_base->insert_Image($name_image,$id_livre);
			$this->Acces_base->insert_Livre_categorie($idcategorie,$id_livre);
			$datalist1 = $this->Acces_base->get_List('Categorie');
			$data = array('page'=> "SaveBook","categories"=>$datalist1);
			$this->load->view('index(BO)',$data);			
		}
		public function delete_livre()
		{					
			$idlivre = $this->input->get('idlivre');
			$this->Acces_base->delete_livre_categorie($idlivre,"Livre_categorie");
			$this->Acces_base->delete_image($idlivre,"Image");
			$this->Acces_base->delete_livre($idlivre,"Livre");
			$datalist = $this->Acces_base->get_List('Livre');			    			
			$data = array('page'=> "List","data"=>$datalist);
			$this->load->view('index(BO)',$data);
		}
		public function update_livre()
		{
			$idlivre = $this->input->post('idlivre');
			$name_book = $this->input->post('name_book');			
			$description = $this->input->post('description');
			$this->Acces_base->update_livre($idlivre,$name_book,$description);
			$datalist = $this->Acces_base->get_List('Livre');			    			
			$data = array('page'=> "List","data"=>$datalist);
			$this->load->view('index(BO)',$data);
		}
		public function redirect_to_page_update()
		{
			$idlivre = $this->input->get("idlivre");
			$datalist = $this->Acces_base->getListById("Livre",$idlivre);
			$data = array('page'=> "Update","data"=>$datalist);
			$this->load->view('index(BO)',$data);
		}
	
		
	}
