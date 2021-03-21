<?php

namespace App\Models;
use CodeIgniter\Model;



class Personnel_m extends Model
{
	
	protected $table = 'users';
	protected $primaryKey = 'uuid';
	protected $allowedFields = ['reg', 'prv', 'mun', 'bgy', 'firstname', 'middlename', 'lastname', 'role',  'fullname', 'password', 
															'email', 'phone', 'created_at', 'updated_at',  'isLoggedIn',  'lastloggedIn',  'logged_in_tries',  'user_locked', 
															'caf_started',  'caf_ended',  'change_password_tries',  'email_sent',  'address',  'response_status', 'isDeleted', 'string_pass', 'uuid', 'questionnaire_code', 'reg_name', 'prv_name',
														  'mun_name', 'bgy_name'];



														  




   

	public function load_region()
    {
         
         $query = $this->db->query('select a.phcode_reg, a.reg_code, a.reg_name from geo_map as a group by a.reg_code order by a.reg_code asc');
        
         
         return $query->getResult();
       
    }


    public function load_province($region_id)
    {
         

      // $query = $this->db->query('select * from psgc where level = "Pro" and region = '.$region_id.' ORDER BY `areaName` ASC');
    	$query = $this->db->query('select a.phcode_reg, a.reg_code, a.reg_name, a.prov_code, a.prov_name from geo_map  as a where a.reg_code = '.$region_id.' group by a.prov_code order by a.prov_code asc ');
         
        
	     
         return $query->getResult();
       
    }




    public function load_municipal($prv,$reg)
    {
         

         // $query = $this->db->query('select * from psgc where level = "Mun" and province = '.$province_id.' ORDER BY `areaName` ASC');

         $query = $this->db->query('select a.phcode_reg, a.reg_code, a.reg_name, a.prov_code, a.prov_name, a.mun_code, a.mun_name 
         from geo_map  as a where a.reg_code = '.$reg.' and a.prov_code = '.$prv.'  group by a.mun_code order by a.mun_code asc ');
         
        
	     
         return $query->getResult();
       
    }

    public function load_barangay($mun,$prv,$reg)
    {
         

         // $query = $this->db->query('select * from psgc where level = "bgy" and province = '.$province_id.' and municipal = '.$municipal_id.' ORDER BY `areaName` ASC');
        
	     		  $query = $this->db->query('select a.phcode_reg, a.reg_code, a.reg_name, a.prov_code, a.prov_name, a.mun_code, a.mun_name, a.bgy_code, a.bgy_name 
          from geo_map  as a where a.reg_code = '.$reg.' and a.prov_code = '.$prv.' and a.mun_code = '.$mun.'  group by a.bgy_code order by a.bgy_code asc ');
	     		

         return $query->getResult();
       
    }

    public function update_checkbox($where, $data) 
    {
       

      $builder = $this->db->table('bpq_data')->where('uuid',$where )->update($data);

        
      $count = $this->db->affectedRows();

      return $count; 
     
     
    }

		

														
}

