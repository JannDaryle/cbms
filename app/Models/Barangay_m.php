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

    public function barangay_health_facilities()
    {

      $session = session();
      $id = $session->get('uuid');

        $builder = $this->db->table('bpq_tables')->where('uuid', $id)->where('barangay_health_facility_deleted', 'No')->where('table_name', 'submit_table_barangay_fac_health');

        return $builder;

    }

     public function barangay_education_facilities()
    {

      $session = session();
      $id = $session->get('uuid');

        $builder = $this->db->table('bpq_tables')->where('uuid', $id)->where('barangay_education_facility_deleted', 'No')->where('table_name', 'submit_table_barangay_fac_education');

        return $builder;

    }


    public function barangay_service_facilities()
    {

      $session = session();
      $id = $session->get('uuid');

        $builder = $this->db->table('bpq_tables')->where('uuid', $id)->where('barangay_service_facility_deleted', 'No')->where('table_name', 'submit_table_barangay_fac_service');

        return $builder;

    }


     public function barangay_garbage_waste_facilities()
    {

      $session = session();
      $id = $session->get('uuid');

        $builder = $this->db->table('bpq_tables')->where('uuid', $id)->where('disposal_facility_deleted', 'No')->where('table_name', 'submit_table_barangay_fac_garbage_waste');

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

    public function button_delete_4()
    {

                $action_button = function($row){
                    return '
                        <button type="button" name="delete_button" class="btn btn-danger btn-sm delete_button" data-barangay_health_facility_name="'.$row['barangay_health_facility_name'].'" data-table_name="'.$row['table_name'].'" ><i class="fas fa-trash-alt"></i></button>';
                };

                return $action_button;

                                                        
    }

     public function button_delete_5()
    {

                $action_button = function($row){
                    return '
                        <button type="button" name="delete_button" class="btn btn-danger btn-sm delete_button" data-barangay_education_facility_name="'.$row['barangay_education_facility_name'].'" data-table_name="'.$row['table_name'].'" ><i class="fas fa-trash-alt"></i></button>';
                };

                return $action_button;

                                                        
    }

    public function button_delete_6()
    {

                $action_button = function($row){
                    return '
                        <button type="button" name="delete_button" class="btn btn-danger btn-sm delete_button" data-barangay_service_facility_name="'.$row['barangay_service_facility_name'].'" data-table_name="'.$row['table_name'].'" ><i class="fas fa-trash-alt"></i></button>';
                };

                return $action_button;

                                                        
    }

    public function button_delete_waste()
    {

                $action_button = function($row){
                    return '
                        <button type="button" name="delete_button" class="btn btn-danger btn-sm delete_button" data-disposal_facility_name="'.$row['disposal_facility_name'].'" data-table_name="'.$row['table_name'].'" ><i class="fas fa-trash-alt"></i></button>';
                };

                return $action_button;

                                                        
    }
    

}