<?php 
namespace App\Controllers;
use App\Models\Personnel_m;
use App\Models\Barangay_m;

class Personnel extends BaseController
{
	public function index()
	{
	

			return view('home/login_new');
	}

	//--------------------------------------------------------------------


	public function signup()
	{


		return view('home/signup');

	} 

	public function generate_id()
  {

      $id = \Ramsey\Uuid\Uuid::uuid4();
      return $id;
  }




  public function save_questionnaire()
  {

    $session = session();
    $id = $session->get('uuid');

    $_POST['uuid'] = $id;
    unset($_POST['DataTables_Table_0_length']);
   
   // var_dump($_POST);
   
		$db = \Config\Database::connect();
		$builder = $db->table('bpq_data');
		$builder->where('uuid',$id);
		return $builder->update($_POST); 


		    // $barangay_m = new barangay_m();
        // $barangay_m->replace($_POST);
 		
  }


  public function save_data_bpq_tables()
  {

    $session = session();
    $id = $session->get('uuid');

    $_POST['uuid'] = $id;

    if(isset($_POST['designation_barangay_p']) )
    {
    	$_POST['barangay_p_deleted'] = "No";
    	$_POST['table_name'] = "submit_table_1";
    }

    if(isset($_POST['barangay_list_name']) )
    {
    	$_POST['barangay_list_name_deleted'] = "No";
    	$_POST['table_name'] = "submit_table_2";
    }

    if(isset($_POST['barangay_sitios_name']) )
    {
    	$_POST['barangay_sitios_name_deleted'] = "No";
    	$_POST['table_name'] = "submit_table_3";
    }

    if(isset($_POST['barangay_health_facility_name']) )
    {
    	$_POST['barangay_health_facility_deleted'] = "No";
    	$_POST['table_name'] = "submit_table_barangay_fac_health";
    }

    if(isset($_POST['barangay_education_facility_name']) )
    {
    	$_POST['barangay_education_facility_deleted'] = "No";
    	$_POST['table_name'] = "submit_table_barangay_fac_education";
    }

    if(isset($_POST['barangay_service_facility_name']) )
    {
    	$_POST['barangay_service_facility_deleted'] = "No";
    	$_POST['table_name'] = "submit_table_barangay_fac_service";
    }

    if(isset($_POST['disposal_facility_name']) )
    {
    	$_POST['disposal_facility_deleted'] = "No";
    	$_POST['table_name'] = "submit_table_barangay_fac_garbage_waste";
    }

      
   
		$db = \Config\Database::connect();
		$builder = $db->table('bpq_tables');
		return $builder->insert($_POST); 

	
	    		
  }

  public function delete_data_bpq_tables()
  {

   $db = \Config\Database::connect();
   $builder = $db->table('bpq_tables');
	 $builder->where($_POST);


	 if(isset($_POST['lastname_barangay_p']))
	 {
	 	$_POST['barangay_p_deleted'] = "Yes";
	 }

	 if(isset($_POST['barangay_list_name']))
	 {
	 	$_POST['barangay_list_name_deleted'] = "Yes";
	 }

	 if(isset($_POST['barangay_sitios_name']))
	 {
	 	$_POST['barangay_sitios_name_deleted'] = "Yes";
	 }

	 if(isset($_POST['barangay_health_facility_name']))
	 {
	 	$_POST['barangay_health_facility_deleted'] = "Yes";
	 }

	 if(isset($_POST['barangay_education_facility_name']))
	 {
	 	$_POST['barangay_education_facility_deleted'] = "Yes";
	 }
	 
	 if(isset($_POST['barangay_service_facility_name']))
	 {
	 	$_POST['barangay_service_facility_deleted'] = "Yes";
	 }

	  if(isset($_POST['disposal_facility_name']))
	 {
	 	$_POST['disposal_facility_deleted'] = "Yes";
	 }

	 return $builder->update($_POST);

  }



	public function save()
	{
    

		$personnel_m = new personnel_m();
		$barangay_m = new barangay_m();

		$_POST['string_pass'] = $_POST['password'];
		$_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
		
		$id = $this->generate_id();
		
    $_POST['uuid'] = $id;

		$personnel_m->insert($_POST);


		if(isset($id))
		{

		$barangay_m->insert($_POST);
		}



		return $this->response->redirect(site_url('Personnel'));
	}






	public function update_checkbox()
	{


		$personnel_m = new personnel_m();
		$thisCheckbox = $_POST['thisCheckbox'];

		$session = session();
    $id = $session->get('uuid');

		$data = array(
         
            $thisCheckbox => 'NO'
            
        );

	  $personnel_m->update_checkbox($id,$data);
			  
  }


	public function login()
	{

				if($value = $this->exists($_POST['email'], $_POST['password'])!= NULL)
				{

					

					return $this->response->redirect(site_url('dashboard'));
				}
				else
				{

					    $this->output->set_status_header('400');
              $this->output->set_content_type('application/json');
              echo json_encode(array('status'=>'Data is empty'));
				}


	}



	private function exists($email, $password)
	{

		$personnel_m = new Personnel_m();
		$personnel = $personnel_m->where('email', $email)->first();

		if($personnel != NULL)
		{

				if(password_verify($password, $personnel['password']))
				{

					$session = session();
					$session->set('uuid', $personnel['uuid']);
					$session->set('fullname', $personnel['fullname']);

					return $personnel;
				}

		}

	}





}
