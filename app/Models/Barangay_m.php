<?php

namespace App\Models;
use CodeIgniter\Model;



class Barangay_m extends Model
{
	
	protected $table = 'bpq_data';
	protected $primaryKey = 'uuid';
	protected $allowedFields = ['uuid', 'reg', 'prv', 'mun', 'bgy', 'reg_name', 'prv_name', 'mun_name', 'bgy_name', 'a_plains'];



														  	
 public function load_form_1()
    {
         

         $session = session();
         $id = $session->get('uuid');
         
        

         $query = $this->db->query("select * FROM bpq_data where uuid = ".  '"'.$id.'"' );
         
         return $query->getResult();
       
    }

     public function table1()
    {

    	$session = session();
      $id = $session->get('uuid');

    	$builder = $this->db->table('bpq_tables')->where('uuid', $id)->where('barangay_p_deleted', 'No')->where('table_name', 'submit_table_1');

    	return $builder;

    }

    public function table2()
    {

    	$session = session();
      $id = $session->get('uuid');

    	$builder = $this->db->table('bpq_tables')->where('uuid', $id)->where('barangay_list_name_deleted', 'No')->where('table_name', 'submit_table_2');

    	return $builder;

    }

     public function table3()
    {

    	$session = session();
      $id = $session->get('uuid');

    	$builder = $this->db->table('bpq_tables')->where('uuid', $id)->where('barangay_sitios_name_deleted', 'No')->where('table_name', 'submit_table_3');

    	return $builder;

    }

     public function button_delete_1()
	  {

				$action_button = function($row){
					return '
						<button type="button" name="delete_button" class="btn btn-danger btn-sm delete_button" data-table_name="'.$row['table_name'].'"  data-firstname_barangay_p="'.$row['firstname_barangay_p'].'" data-lastname_barangay_p="'.$row['lastname_barangay_p'].'"><i class="fas fa-trash-alt"></i></button>
						';
				};

				return $action_button;

	  }


	  public function button_delete_2()
	  {

				$action_button = function($row){
					return '
						<button type="button" name="delete_button" class="btn btn-danger btn-sm delete_button" data-barangay_list_name="'.$row['barangay_list_name'].'" data-table_name="'.$row['table_name'].'" ><i class="fas fa-trash-alt"></i></button>';
				};

				return $action_button;

														
    }

    public function button_delete_3()
	  {

				$action_button = function($row){
					return '
						<button type="button" name="delete_button" class="btn btn-danger btn-sm delete_button" data-barangay_sitios_name="'.$row['barangay_sitios_name'].'" data-table_name="'.$row['table_name'].'" ><i class="fas fa-trash-alt"></i></button>';
				};

				return $action_button;

														
    }

}