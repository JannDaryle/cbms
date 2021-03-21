<?php 
  namespace App\Controllers;
  use App\Models\Personnel_m;
  use App\Models\Barangay_m;
  use monken\TablesIgniter;

  use PhpOffice\PhpSpreadsheet\Spreadsheet;
  use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
  use PhpOffice\PhpSpreadsheet\IOFactory;
  ini_set('max_execution_time', 0);

class Dashboard extends BaseController
{


public function index()
{

				helper('form');
				$session = session();


				if($session->get('uuid') != NULL)
				{
		    
				$data = [
						'title' => 'Dashboard'
				];

				echo view('dashboard/dashboard',$data);
				echo view('dashboard/dashboard_js');
		  	}

			  else
			  {
			 		echo view('home/login_new');
			  }

}


function get_table_1()
{
	$crudModel = new Barangay_m();

	$data_table = new TablesIgniter();

	$data_table->setTable($crudModel->table1())
							->setDefaultOrder("uuid", "DESC")
							->setSearch(["lastname_barangay_p"])
							->setOrder(["lastname_barangay_p"])
							->setOutput(["designation_barangay_p", "lastname_barangay_p", "firstname_barangay_p",$crudModel->button_delete_1()]);

	return $data_table->getDataTable();
}


function get_table_2()
{
	$crudModel = new Barangay_m();

	$data_table = new TablesIgniter();

	$data_table->setTable($crudModel->table2())
							->setDefaultOrder("uuid", "DESC")
							->setSearch([""])
							->setOrder([""])
							->setOutput(["barangay_list_name",$crudModel->button_delete_2()]);

	return $data_table->getDataTable();
}

function get_table_3()
{
	$crudModel = new Barangay_m();

	$data_table = new TablesIgniter();

	$data_table->setTable($crudModel->table3())
							->setDefaultOrder("uuid", "DESC")
							->setSearch([""])
							->setOrder([""])
							->setOutput(["barangay_sitios_name",$crudModel->button_delete_3()]);

	return $data_table->getDataTable();
}




public function load_form_1()
{

	$load_model = new Barangay_m();

	$display = $load_model->load_form_1();

	return json_encode($display);

	
}

public function load_region()
{

	$load_model = new Personnel_m();

	$display = $load_model->load_region();

	return json_encode($display);
}



public function load_province()
{

	$region_id = $_POST['getRegion'];
	$clean_data_id = json_encode($region_id);
	

	$load_model = new Personnel_m();

	$display = $load_model->load_province($clean_data_id);

	return json_encode($display);
}

public function load_municipal()
{

	$province_id = $_POST['getProvince'];
	$region_id = $_POST['getRegion'];

	$prv = json_encode($province_id);
	$reg = json_encode($region_id);
	

	$load_model = new Personnel_m();

	$display = $load_model->load_municipal($prv,$reg);

	return json_encode($display);
}

public function load_barangay()
{

	$region_id = $_POST['getRegion'];
	$province_id = $_POST['getProvince'];
	$municipal_id = $_POST['getMunicipal'];

	$reg = json_encode($region_id);
	$prv = json_encode($province_id);
	$mun = json_encode($municipal_id);
	

	$load_model = new Personnel_m();

	$display = $load_model->load_barangay($mun, $prv, $reg);

	return json_encode($display);
}








function upload() 
{ 
        helper(['form', 'url']);
         
        $database = \Config\Database::connect();
        $db = $database->table('bpq_data');
    
        $input = $this->validate([
            'file' => [
                'uploaded[file]',
                'mime_in[file,image/jpg,image/jpeg,image/png]',
                'max_size[file,1024]',
            ]
        ]);
    
        if (!$input) {

             print_r('Choose a valid file');
             $this->output->set_status_header('400');
             $this->output->set_content_type('application/json');
             echo json_encode(array('status'=>'Data is empty'));

        } else {
            $img = $this->request->getFile('file');
            $img->move('./assets/img/esignature');
    
            // $data = [
            //    'name' =>  $img->getName(),
            //    'type'  => $img->getClientMimeType()
            // ];
    
            // $save = $db->insert($data);
            print_r('File has successfully uploaded');        
        }
}




function logout()
{
		$session = session();
		$session->destroy();

		return $this->response->redirect(site_url('personnel'));
}




} // END OF CONTROLLER
