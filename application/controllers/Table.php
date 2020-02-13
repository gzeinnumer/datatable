<?php 

class Table extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
	}

	function index(){
		$this->load->view("table_view");
	}

	function ambil_data(){
		$draw=$_REQUEST['draw'];
		$length=$_REQUEST['length'];

		$start=$_REQUEST['start'];

		$search=$_REQUEST['search']["value"];

		//tempatkan model disini
		$total=$this->db->count_all_results("villages");
		$output=array();

		$output['draw']=$draw;
		$output['recordsTotal']=$output['recordsFiltered']=$total;

		$output['data']=array();

		if($search!=""){
			$this->db->like("name",$search);
		}

		$this->db->limit($length,$start);
		$this->db->order_by('name','DESC');
		$query=$this->db->get('villages');

		if($search!=""){
			$this->db->like("name",$search);
			$jum=$this->db->get('villages');
			$output['recordsTotal']=$output['recordsFiltered']=$jum->num_rows();
		}
		$nomor_urut=$start+1;
		foreach ($query->result_array() as $desa) {
			$output['data'][]=array($nomor_urut,$desa['name']);
		$nomor_urut++;
		}
		echo json_encode($output);
	}
}


 ?>