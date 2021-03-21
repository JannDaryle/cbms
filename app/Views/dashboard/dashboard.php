<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Barangay Profile Questionnaire</title>

 
<link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<style type="text/css">
  
    input[type='radio'] 
    {
        height: 17px;
        width: 17px;
        vertical-align: middle;
    }

    input[type='checkbox'] 
    {
        height: 25px;
        width: 25px;
        vertical-align: middle;
    }

    .avatar
    {
        width: 120px;
        height: 120px;
        border-radius: ;
        position: absolute;
        top: -30px;
        left: calc(50% - 105px);
    }

    .uniform_font {

      font-size: 20px;
      font-weight: 600;
    }

    textarea  
{  
   text-decoration-line: underline;
   
}


</style>



<!-- TOP MENU -->


<nav class="navbar sticky-top navbar-light bg-light" style="background-color: rgba(0,0,0,0.5)!important;">

                   

                  
                <div align="center" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                   <img src="<?php echo base_url('assets/img/cbms_logo_resized.png'); ?>" width="100">
                </div>

                   <!--  <span style="color: white; object-position: center; "><h4> COMMUNITY BASED MONITORING SYSTEM</h4> </span> -->

                   <!-- <h5><?= session('fullname')?></h5> -->
                   

      <a class="navbar-brand" href="#"> </a>

         <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: rgba(0,0,0,0.2)!important;">



              <button class="btn btn-primary" id="menu-toggle"><i class="fab fa-audible"></i></button>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                       <!--  <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li> -->
                       <!--  <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li> -->
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i  style="font-size: 35px; color: white" class="fas fa-user-cog"></i>
                          
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                           <!--  <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a> -->
                            <!-- <div class="dropdown-divider"></div> -->
                           
                            <button type="button" id="logout_button" class="btn btn-dark dropdown-item"><i class="fas fa-sign-out-alt"></i>&nbsp&nbsp Logout</button>
                          </div>
                        </li>
                       </ul>
              </div>

          </nav>

</nav>

<!-- END OF TOP MENU -->


  
     
<body>



  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" style="background-color: rgba(0,0,0,0.5)!important;">
      
      <div class="list-group list-group-flush" >
        
                <div class="nav flex-column nav-pills text-center itemTabs" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="position: fixed;">

                  <div class="sidebar-heading" style="color: white; font-size: 18px;">Questionnaire Sections</div>
                  <a class="tabs nav-link fade show active" id="v-pills-home-tab" data-toggle="tab" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="color: white">Section 1</a>
                  <a class="tabs nav-link" id="v-pills-profile-tab"  data-toggle="tab" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="color: white">Section 2</a>
                  <a class="tabs nav-link" id="v-pills-messages-tab" data-toggle="tab" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false" style="color: white">Section 3</a>
                  <a class="tabs nav-link" id="v-pills-settings-tab" data-toggle="tab" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false" style="color: white">Section 4</a>

                  <br>

                  <div align="center"> <button type="button" id="add_notes" class="btn btn-outline-warning"><i class="far fa-sticky-note" style="font-size: 25px;"></i> Add Notes</button></div>
                 

                    <div align="center" style="visibility: hidden" >
                   <img src="<?php echo base_url('assets/img/cbms_logo_resized.png'); ?>" width="150">
                    </div>

                    <div align="center" style="visibility: hidden" >
                   <img src="<?php echo base_url('assets/img/cbms_logo_resized.png'); ?>" width="150">
                    </div>

                  <br>
                  <label class="text-center" align="center" style="color: lightgreen ">Progress</label>
                  <div class="progress" style="margin-left: 15px !important;">
                   <div class="progress-bar bg-success" role="progressbar" style="width: 21%;" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100">21%</div>
                  </div>
      

                </div>
      </div>



    </div>

    <!-- End of sidebar -->




    
    <div id="page-content-wrapper">



         <!-- ------Topbar---- -->

    

      <!-- ----End of Topbar---- -->



<!-- ----MAIN Content - Depending on Section------ -->

<div class="tab-content" id="v-pills-tabContent">


        <!--   -----Section 1------ -->
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
               <div class="container-fluid" style="width: 90%; background-color: " >
                    


              <div class="card text-center" style="margin-top: 20px; margin-bottom: 40px;">
                            <div class="card-header" >
                             <h3>COMMUNITY BASED MONITORING SYSTEM</h3>
                            </div>

                            <div class="card-body" style="background-color: #fafcff">

                              <!-- <h5 class="card-title">BARANGAY PROFILE QUESTIONNAIRE</h5> -->
                              <br><br>
                              <h6 class="card-title text-left">REPUBLIC OF THE PHILIPPINES</h6>
                              <h6 class="card-title text-left">PHILIPPINE STATISTICS AUTHORITY</h6>
                           

 
<p class="text-left" style="color:gray"><i>
CBMS FORM 2<br>
Approval Number : PSA-1962-02<br>
Expiry Date : 31 December 2020</i><br></p>

<br>
<h6 class="text-left"><b>OBLIGATION TO PROVIDE INFORMATION:</b></h6>
<p class="text-left" style="color:gray"><i>Section 25 of Republic Act 10625 (Obligation to Provide Information) stipulates that all respondents whether natural or legal persons are required to provide truthful and complete information to all statistical inquiries or surveys conducted by the Philippine Statistics Authority (PSA).</p><br></i>



<h6 class="text-left"><b>CONFIDENTIALITY:</b></h6>
<p class="text-left" style="color:gray"><i>
The PSA adheres and commits to the confidentiality of information as stipulated in Section 26 of RA 10625 (Confidentiality of Information) and Section 8 of RA 10173 (Confidentiality). All data obtained herein shall be held strictly confidential, and will not be used for taxation, investigation or law enforcement purposes."
</i></p>


<br><br><h6 class="text-left"><b>Introduction</b></h6><br>


<p class="text-left" style="color:gray"><i>
Dear Sir/Madam,<br><br>
The Philippine Statistics Authority (PSA) is conducting the Community-Based Monitoring System (CBMS). CBMS as defined by the law refers to an organized technology-based system of collecting, processing and validating necessary disaggregated data that may be used for planning, program implementation and impact monitoring at the local level while empowering communities to participate in the process.<br><br>

The conduct of the CBMS is pursuant to RA No. 11315, otherwise known as the Community-Based Monitoring System (CBMS) Act.which authorizes the PSA to prepare and conduct periodic compendium of localized facts, figures, and maps on the different dimensions of poverty such as health, nutrition, water, sanitation, shelter, education, income, employment, security, and participation every three (3) years.<br><br>

All barangay LGUs are requested to respond to this Barangay Profile Questionnaire (BPQ).<br><br>

By responding to this questionnaire, you are voluntarily providing information to the PSA and you are authorizing the PSA to collect data about your barangay, in which such data may also be shared to the national government agencies for monitoring purposes and for possible assistance that may be extended to your LGU. Data that you will provide in this BPQ will also be stored and archived in the PSA's National CBMS Databank.<br><br>

Considering public health concerns and following health protocols, we may conduct an interview personally, online  or via telephone. Geotagging will also be undertaken to record location data of the barangay hall, facilities within the barangay, government projects, among others.<br><br>

Data submissions in paper or electronically will also be stored by the PSA in its database for record-keeping, future PSA data collection activities and will be used in the generation of statistics about your locality.<br><br>

Rest assured that the data that you will furnish in this data collection activity shall be considered PRIVILEGED COMMUNICATION and as such shall be inadmissible as evidence in any legal proceeding. Moreover, please be informed that Section 4(e) of RA 10173 (Data Privacy Act of 2012) states that data privacy does not apply to “information necessary in order to carry out the functions of public authority which includes the processing of personal data for the performance by the independent agencies of their constitutionally and statutorily mandated functions.”  We appreciate your utmost cooperation and support for the success of the enhancement of the CBMS.<br><br>

For inquiries, contact the PSA at (02)8376-1909 or send us a message at the email addresses cbss.staff@psa.gov.ph and cbss.oans@gmail.com.<br><br>

Thank you very much.<br><br>

CLAIRE DENNIS S. MAPA, Ph.D.<br>
National Statistician and Civil Registrar General<br><br>
</p></i>

<hr>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<hr>
<h5 class="text-left" style="color: blue">GEOGRAPHIC IDENTIFICATION</h5>
<br>
<form method="post" id="submit_de">  <!-- Section 1 Form -->

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Region</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="reg_name" name="reg_name" placeholder="" hidden="">
      <select id="reg" name="reg" class="form-control"></select>
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Province</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="prv_name" name="prv_name" placeholder="" hidden="">
      <select id="prv" name="prv" class="form-control"></select>
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left" ><b>Municipality</b></label>
    <div class="col-sm-8">
     <input type="text" class="form-control" id="mun_name" name="mun_name" placeholder="" hidden="">
      <select id="mun" name="mun" class="form-control"></select>
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Barangay</b></label>
    <div class="col-sm-8">
     <input type="text" class="form-control" id="bgy_name" name="bgy_name" placeholder="" hidden="">
      <select id="bgy" name="bgy" class="form-control"></select>
    </div>
</div>



<br>
<div class="form-group row">
    <label for="inputPassword" class="col-sm-6 col-form-label text-left"><b>Geopoints of the Barangay Hall (Latitude and Longtitude)</b></label>
    <div class="col-sm-12">
      <br>
      <a class="btn btn-outline-info" id="get_geo_hall"role="button">Get Geopoint here.</a>
      <span ></span> <span></span>

      <div class="row">
    <div class="col">
       <b>Latitude</b> <input class="form-control form-control-lg" type="text" placeholder="Latitude " id="geo_hall_lat" name="geo_hall_lat" hidden="" readonly="">
    </div>
    <div class="col">
       <b>Longtitude</b><input class="form-control form-control-lg" type="text" placeholder="Longtitude" id="geo_hall_long" name="geo_hall_long" hidden="" readonly="">
    </div>
  </div>

     
      
    </div>
</div>

<hr>
<h5 class="text-left" style="color: blue">NAME OF BARANGAY CHAIRPERSON</h5>
<br>
  <div class="row">
    <div class="col">

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left" ><b>Lastname</b></label>
    <div class="col-sm-8">
     
       <input type="text" class="form-control" id="chair_brgy_lastname" name="chair_brgy_lastname" placeholder="">
    </div>
</div>
     
    </div>
    <div class="col">

 <div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left" ><b>Firstname</b></label>
    <div class="col-sm-8">
     
       <input type="text" class="form-control" id="chair_brgy_firstname" name="chair_brgy_firstname" placeholder="">
    </div>
</div>     


    </div>
  </div>

 




 <div class="row">

  <div class="col text-left"><label><b>Respondent:</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 

  <input class="form-check-input respo_radio" type="checkbox" name="respondent_chair" id="respo_radio1">
          <label class="form-check-label" for="gridRadios1">
          <b>&nbsp&nbsp Barangay Chairman</b>
          </label>
  </div>

<div class="col text-left"> 
  <input class="form-check-input respo_radio" type="checkbox" name="respondent_personnel" id="respo_radio2">
          <label class="form-check-label" for="gridRadios2">
          <b>&nbsp&nbsp Barangay Personnel</b>
          </label>
  </div>
  
 
  <div class="col"></div>

</div>








<br class="barangay_personnel_div" hidden="">
<hr class="barangay_personnel_div" hidden="">
<h5 class="text-left barangay_personnel_div" style="color: blue" hidden="">NAME OF BARANGAY PERSONNEL</h5>

<br>

<div class="row barangay_personnel_div" hidden="">


<div class="container-fluid">
<i class="uniform_font">Please list the personnel in the barangay.</i>
 <div style="padding-bottom: 40px; padding-top: 30px" class="">
    <table  class="table table-hover cell-border compact submit_table_1" style="width:100%" >  
          <thead class="">
            <tr> 
             
              <th style="text-align: center;" class="text-center " width="">Designation</th>
              <th style="text-align: center;" class="text-center " width="">Lastname</th>
              <th style="text-align: center;" class="text-center " width="">Firstname</th>
              <th style="text-align: center;" class="text-center " width="">-</th>
              
         
            </tr>
          </thead>
        </table>
      </div>
</div>

<div class="center col">
 <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#add_barangay_personnel">Add Personnel</button>
</div>

</div> <!-- end of barangay_personnel_div -->





<hr class="" >

<h5 class="text-left" style="color: blue">OTHERS DETAILS OF THE BARANGAY</h5>
<br>

<h6 class="text-left" style="color: "><b>ADDRESS OF THE BARANGAY HALL</b></h6><br><br>


<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Building name</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="brgy_building_name" name="brgy_building_name" placeholder="" >
     
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Complete address of the Barangay Hall</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="brgy_address" name="brgy_address" placeholder="" >
     
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Email address of the barangay:</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="brgy_eadd" name="brgy_eadd" placeholder="" >
     
    </div>
</div>



<div class="row">

  <div class="col text-left"><label><b>What is/are the available contact numbers for the barangay?</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 

  <input class="form-check-input respo_radio" type="checkbox" name="brgy_tel" id="respo_radio3">
          <label class="form-check-label" for="gridRadios3">
          <b>&nbsp&nbsp Telephone number</b>
          </label>
  </div>

<div class="col text-left"> 
  <input class="form-check-input respo_radio" type="checkbox" name="brgy_mobile" id="respo_radio4">
          <label class="form-check-label" for="gridRadios4">
          <b>&nbsp&nbsp Mobile number</b>
          </label>
  </div>
  
 
  <div class="col"></div>

</div>







<div class="form-group row for_respo_radio3" hidden="" >
    <label for="" class="col-sm-3 col-form-label text-left"><b>Telephone number:</b></label>
    <div class="col-sm-8">
      <textarea type="text" class="form-control" id="brgy_tel_val" name="brgy_tel_val" placeholder="" ></textarea>
     <label for="" style="font-size: 11px; color: red"><i>Press Enter to add more data.</i></label>
    </div>
    
</div>

<div class="form-group row for_respo_radio4" hidden="" >
    <label for="" class="col-sm-3 col-form-label text-left"><b>Mobile number:</b></label>
    <div class="col-sm-8">
      <textarea type="text" class="form-control" id="brgy_mobile_val" name="brgy_mobile_val" placeholder="" ></textarea>
      <label for="" style="font-size: 11px; color: red"><i>Press Enter to add more data.</i></label>
    </div>

</div>


<!-- 
<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Method of interview/data collection</b></label>
    <div class="col-sm-8">
     
      <select id="method_int" name="method_int" class="form-control">

        <option value="">-Select-</option>
        <option value="A - PAPER AND PENCIL PERSONAL INTERVIEW">A - PAPER AND PENCIL PERSONAL INTERVIEW</option>
        <option value="B - SELF-ADMINISTERED QUESTIONNAIRE">B - SELF-ADMINISTERED QUESTIONNAIRE</option>
        <option value="C - COMPUTER-ASSISTED PERSONAL INTERVIEW">C - COMPUTER-ASSISTED PERSONAL INTERVIEW</option>
      </select>
    </div>
</div> -->


<br>
<br>
<br>
<br>
<hr> 
<h1 class="center">BARANGAY PROFILE QUESTIONNAIRE</h1> 

<br>
<br>
<p class="text-left" style="color:gray"><i>
The Philippine Statistics Authority (PSA) is conducting the Community-Based Monitoring System (CBMS). One of the questionnaires being administered in the CBMS is the Barangay Profile Questionnaire commonly known as BPQ or CBMS Form 4. CBMS BPQ is designed to gather supplementary information to the Household Profile Questionnaire (CBMS Form 2).<br><br>

The CBMS Form 4 or BPQ gathers data on the physical characteristics of the barangay, as well as the available basic services and service institutions in the barangay. Rest assured that the data that you will furnish in this data collection activity shall be considered PRIVILEGED COMMUNICATION and as such shall be inadmissible as evidence in any proceeding. <br><br>

We appreciate your utmost cooperation and support for the success of the enhancement of the CBMS. Thank you!
</i></p>
<hr>
<br>
<br>
<br>

<h4 class="text-left" style="color: white; background-color: #2277bd">PART I. BARANGAY CHARACTERISTICS AND COMMUNITY FACILITIES</h4><br>

<i class="" style="color: green">I would like to talk about the physical characteristics of the barangay.</i><br><br><br>

<h5 class="text-left" style="color: "><b>A. PHYSICAL CHARACTERISTICS OF THE BARANGAY</b></h5><br><br>

<div class="text-left"><h5>
1. What is/are the general description and characteristics of the barangay?
Does this barangay have…
</h5></div>

  <div class="container-fluid">
    
     <table id="table1" class="cell-border compact" style="width:100%">
        <thead>
            <tr>
                <th>Plains?</th>
                <th>Upland Areas?</th>
                <th>Mountainous Areas?</th>
                <th>Coastal Areas?</th>
                <th>Please specify other:</th>
            </tr>
        </thead>

             <tr>

                <td>
                      <div class="container">
                        <div class="row">
                          <div class="col">
                             <input class="form-check-input" type="radio" name="a_plains"  data-val="Yes" value="Yes">Yes
                          </div>
                          <div class="col">
                            <input class="form-check-input" type="radio" name="a_plains"  data-val="No" value="No">No
                          </div>
                        </div>
                      </div>             
                </td>


                <td>
                      <div class="container">
                        <div class="row">
                          <div class="col">
                             <input class="form-check-input" type="radio" name="a_upland"  data-val="Yes" value="Yes">Yes
                          </div>
                          <div class="col">
                            <input class="form-check-input" type="radio" name="a_upland"  data-val="No" value="No">No
                          </div>
                        </div>
                      </div>             
                </td>

                 <td>
                      <div class="container">
                        <div class="row">
                          <div class="col">
                             <input class="form-check-input" type="radio" name="a_mountainous"  data-val="Yes" value="Yes">Yes
                          </div>
                          <div class="col">
                            <input class="form-check-input" type="radio" name="a_mountainous"  data-val="No" value="No">No
                          </div>
                        </div>
                      </div>             
                </td>

                 <td>
                      <div class="container">
                        <div class="row">
                          <div class="col">
                             <input class="form-check-input" type="radio" name="a_coastal"  data-val="Yes" value="Yes">Yes
                          </div>
                          <div class="col">
                            <input class="form-check-input" type="radio" name="a_coastal"  data-val="No" value="No">No
                          </div>
                        </div>
                      </div>             
                </td>
                 
                <td>

               <div class="form-group">
                <textarea class="form-control" name="a_1_specify_other" rows="2"></textarea>
                <label for="" style="font-size: 11px; color: red"><i>Press Enter to add more data.</i></label>
               </div>
                
                </td>

            </tr>

     </table>

  </div>

 <!--  __________________ -->
 
<br> 
<div class="text-left"><h5>
2. Are there puroks in the barangay?
</h5></div>

          <div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="a_2_puroks"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="a_2_puroks"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 


<div class="sheila" hidden="">  

<br> 
<div class="text-left"><h5>
3. What are the puroks in the barangay?<br><br>
&nbsp&nbsp&nbsp&nbsp
</h5></div>



<div class="container-fluid">

<i class="uniform_font">Please list the puroks in the barangay.</i>
  
 <div style="padding-bottom: 40px; padding-top: 30px" class="">
    <table  class="table table-hover cell-border compact  submit_table_2" style="width:100%" >  
          <thead class="">
            <tr> 
             
              <th style="text-align: center;" class="text-center " width="">Barangay Name</th>
              <th style="text-align: center;" class="text-center " width="15%" colspan="1">-</th>
                               
            </tr>
          </thead>
        </table>
      </div>
</div>

<div class="center col">
 <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#add_barangay_list">Add Barangay</button>
</div>
<hr>
</div>




<br> 
<div class="text-left"><h5>
4. Are there sitios in the barangay?
</h5></div>

          <div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="a_2_sitios"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="a_2_sitios"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>


<div class="a2sitios" hidden="">  
  
<br> 
<div class="text-left"><h5>
5. What are the puroks in the barangay?<br><br>
&nbsp&nbsp&nbsp&nbsp
</h5></div>



<div class="container-fluid">

<i class="uniform_font">Please list the sitios in the barangay.</i>
  
 <div style="padding-bottom: 40px; padding-top: 30px" class="">
    <table  class="table table-hover cell-border compact  submit_table_3" style="width:100%" >  
          <thead class="">
            <tr> 
             
              <th style="text-align: center;" class="text-center " width="">Sitios Name</th>
              <th style="text-align: center;" class="text-center " width="15%" colspan="1">-</th>
                               
            </tr>
          </thead>
        </table>
  </div>
</div>

<div class="center col">
 <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#add_barangay_sitios">Add Sitios</button>
</div>
<hr>
</div>


<br> 
<div class="text-left"><h5>
6. What is the land area (in sqm.) of the barangay used for the following purposes?<br><br>
&nbsp&nbsp&nbsp&nbsp
</h5></div>



<div class="container">
  <div class="row">

    <div class="col">
     <div class="container-fluid" style="width:100%">
    
     <table id="table2" class="cell-border compact text-left table-hover" style="width:100%">
        <thead>
            <tr>
                <th>Land Classification/Use</th>
                <th style="width:40%">Land area (in sq. m.)<br><i style="font-size: 12px !important; color: red">"Please input "0" if none"</i></th>
               
            </tr>
        </thead>

              <tr>
                <td>A. Residential</td>
                <td> <input type="number" class="form-control land_classification" name="A6_resi" placeholder="" ></td>
              </tr>

              <tr>
                <td>B. Commercial</td>
                <td> <input type="number" class="form-control land_classification" name="A6_comm" placeholder="" ></td>
              </tr>

              <tr>
                <td>C. Agricultural</td>
                <td> <input type="number" class="form-control land_classification" name="A6_agri" placeholder="" ></td>
              </tr>

              <tr>
                <td>D. Industrial</td>
                <td> <input type="number" class="form-control land_classification" name="A6_indus" placeholder="" ></td>
              </tr>

              <tr>
                <td>E. Mineral</td>
                <td> <input type="number" class="form-control land_classification" name="A6_mine" placeholder="" ></td>
              </tr>

              <tr>
                <td>F. Timberland</td>
                <td> <input type="number" class="form-control land_classification" name="A6_timb" placeholder="" ></td>
              </tr>

              <tr>
                <td>G. Special Classes</td>
                <td> <input type="number" class="form-control land_classification" name="A6_sclass" placeholder="" ></td>
              </tr>

              <tr>
                <td>H. Vacant Lot</td>
                <td> <input type="number" class="form-control land_classification" name="A6_vacant" placeholder="" ></td>
              </tr>

              <tr>
                <td>I. Others, please specify<br>
                   <textarea class="form-control" name="A6_othersa_classification" rows="2"></textarea>
                   <label for="" style="font-size: 11px; color: red"><i>Press Enter to add more data.</i></label>
                </td>

                <td> <br> 
                  <textarea type="number" class="form-control land_classification" name="A6_othersa" placeholder="" ></textarea>
                  <label for="" style="font-size: 11px; color:white"><i>-</i></label>
                </td>
              </tr>



     </table>
         <label for="" class="text-left"><b>TOTAL LAND AREA:  <span id="total_land_area"></span></b></label>        
  </div>
    </div>

    <div class="col container-fluid" style="">

          <div style="padding-bottom: 100px"></div>
     
             <div class="form-group row">
                <label for="inputPassword" class="col-sm-8 col-form-label text-left"><b>6a. Reference Period <i style="font-size: 11px; color: gray">   as of (Format: yyyy)</i>
                </b></label>

                <div class="col-sm-8">
                  <input type="number" class="form-control"  name="A6_refper" placeholder="" >
                 
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-8 col-form-label text-left"><b>6b. Source of document</b></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="A6_dsource" placeholder="" >
                 
                </div>
            </div>

            <div class="form-group row">
                <label for="inputPassword" class="col-sm-8 col-form-label text-left"><b>6c. Data source agency/unit/office in the barangay</b></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control"  name="A6_osource" placeholder="" >
                 
                </div>
            </div>
      

    </div>




  </div>
</div>


<br> 
<br>

<br> 
<div class="text-left"><h5>
7. What are the boundaries of the barangay?<br><br>
&nbsp&nbsp&nbsp&nbsp
</h5></div>



<div class="container">
  <div class="row">
    <div class="col">
                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label text-left"><b>North</b></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="A7_north" placeholder="" >
                       
                      </div>
                  </div>

                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label text-left"><b>East</b></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="A7_east" placeholder="" >
                       
                      </div>
                  </div>

                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label text-left"><b>West</b></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="A7_west" placeholder="" >
                       
                      </div>
                  </div>

                  <div class="form-group row">
                      <label class="col-sm-3 col-form-label text-left"><b>South</b></label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="A7_south" placeholder="" >
                       
                      </div>
                  </div>
    </div>

    <div class="col">
      
               <div class="form-group row">
                  <label for="inputPassword" class="col-sm-8 col-form-label text-left"><b>7a. Reference Period <i style="font-size: 11px; color: gray">   as of (Format: yyyy)</i>
                  </b></label>

                  <div class="col-sm-8">
                    <input type="number" class="form-control"  name="A7_south_reference" placeholder="" >
                   
                  </div>
              </div>

              <div class="form-group row">
                  <label for="inputPassword" class="col-sm-8 col-form-label text-left"><b>7b. Source document</b></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="A7_south_source" placeholder="" >
                   
                  </div>
              </div>

              <div class="form-group row">
                  <label for="inputPassword" class="col-sm-8 col-form-label text-left"><b>7c. Data source agency/unit/office in the barangay</b></label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="A7_south_data" placeholder="" >
                   
                  </div>
              </div>

    </div>



  </div>
</div>







<hr>

<br>
<i style="color: green" class="">Now, I would like to talk about the different health facilities in the barangay. <br>
Kindly provide details about government-operated and privately owned facilities in the barangay.</i><br><br>


<br> 
<div class="text-left"><h4>
ENCODE EA/BSN/FSN?
</h4></div>

          <div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="EA_BSN_FSN"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="EA_BSN_FSN"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>

<br><br><br>
<h5 class="text-left" style="color: "><b>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - HEALTH FACILITIES</b></h5><br>


<div class="container-fluid">
    
     <table id="table1" class="cell-border compact" style="width:100%">
        <thead>
            <tr class="text-center">
                <th>I. HEALTH FACILITY</th>
                <th>HF1. Does this barangay have at least one ___?</th>
                <th>HF2. What is the distance ofthe brgy hall to the nearest facility?</th>
                <th>HF3. What is the name of the (Health Facility)?</th>
                <th>HF4. What is the address of the (Health Facility)?</th>
                <th>HF5. What institution operates the facility?</th>
                <th>HF6. EA</th>
                <th>HF7. BSN</th>
                <th>HF8. FSN</th>
            </tr>
        </thead>

           

     </table>

  </div>

 <!-- Tourism Sites and Destination -->
<hr>
<br>
<i style="color: green" class="">Now, I would like to talk about the different tourism sites and destination in the barangay.</i><br><br>
<div class="text-left"><h5>
T1. Are there any of the tourism sites and destination present in the barangay?
</h5></div>

          <div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="tourism_sites"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="tourism_sites"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

<div class="t_sites" hidden=""> 

<br>
<div class="text-left"><h5>IX. TOURISM SITES AND DESTINATION</h5>
<br>
<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>T2. What is the name of tourism sites and destination # 1?</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="tourism_sites_name" name="tourism_sites_name" placeholder="" >
       </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>T3. Building name of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="tourism_sites_building" name="tourism_sites_building" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>T3.1 Complete address of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="tourism_sites_address" name="tourism_sites_address" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>T4. Who operates the ?</b></label>
</div> 

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="tourism_sites_operates_yes">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="tourism_sites_operates_yes">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="tourism_sites_operates_yes">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="tourism_sites_operates_yes">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="tourism_sites_operates_yes">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="tourism_sites_operates_yes">GOCC<br>
                        <input class="form-check-input" type="radio" name="tourism_sites_operates_yes">NONE<br> 
                        <input class="form-check-input" type="radio" name="tourism_sites_operates_yes">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>   

      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: TOURISM SITES AND DESTINATION</b></label> 
      <textarea class="form-control" rows="4" cols="1" id="notes_tourism_sites_1"></textarea>
      </div>


      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>T8. Does your barangay engage in tourism activities?</b></label>
      <div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="tourism_barangay_engage"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="tourism_barangay_engage"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>
</div>
</div>
<br> 
<hr>
<br>



<i style="color: green" class="">Now, I would like to talk about if the barangay have airport and seaport.</i><br><br>  
<br>
<h5 class="text-left" style="color: "><b>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - X. TRANSPORT FACILITY - SEAPORT</b></h5><br> 


<div class="text-left"><h5>
PTA. Is there a seaport located in the barangay?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="transport_facility_seaport"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="transport_facility_seaport"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>   

<div class="transport_facility_seaport_repeat" hidden=""> 

<br>
<div class="text-left"><h5>X. TRANSPORT FACILITY - Seaport</h5>

<br>
<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>PT1. What is the name of the Seaport facility # 1?</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="transport_facility_seaport_name" name="transport_facility_seaport_name" placeholder="" >
       </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>PT2. Building name of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="transport_facility_seaport_building" name="transport_facility_seaport_building" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>PT2.1 Complete address of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="transport_facility_seaport_address" name="transport_facility_seaport_address" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>PT3. Who operates the ?</b></label>
</div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="transport_facility_seaport_operates_yes">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="transport_facility_seaport_operates_yes">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="transport_facility_seaport_operates_yes">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="transport_facility_seaport_operates_yes">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="transport_facility_seaport_operates_yes">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="transport_facility_seaport_operates_yes">GOCC<br>
                        <input class="form-check-input" type="radio" name="transport_facility_seaport_operates_yes">NONE<br> 
                        <input class="form-check-input" type="radio" name="transport_facility_seaport_operates_yes">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>


      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: X. TRANSPORT FACILITY - Seaport</b></label> 
      <textarea class="form-control" rows="3" cols="0" id="transport_facility_seaport_1"></textarea>
      </div> 

</div>
</div>


<br>
<br>
<h5 class="text-left" style="color: "><b>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - X. TRANSPORT FACILITY - AIRPORT</b></h5><br> 


<div class="text-left"><h5>
PTB. Is there an airport located in the barangay?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="transport_facility_airport"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="transport_facility_airport"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 

<div class="transport_facility_airport_repeat" hidden=""> 

<br>
<div class="text-left"><h5>X. TRANSPORT FACILITY - Airport</h5>

<br>
<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>PT1. What is the name of the Airport facility # 1?</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="transport_facility_airport_name" name="transport_facility_airport_name" placeholder="" >
       </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>PT2. Building name of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="transport_facility_airport_building" name="transport_facility_airport_building" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>PT2.1 Complete address of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="transport_facility_airport_address" name="transport_facility_airport_address" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>PT3. Who operates the ?</b></label>
</div>            

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="transport_facility_airport_operates_yes">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="transport_facility_airport_operates_yes">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="transport_facility_airport_operates_yes">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="transport_facility_airport_operates_yes">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="transport_facility_airport_operates_yes">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="transport_facility_airport_operates_yes">GOCC<br>
                        <input class="form-check-input" type="radio" name="transport_facility_airport_operates_yes">NONE<br> 
                        <input class="form-check-input" type="radio" name="transport_facility_airport_operates_yes">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 

      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: X. TRANSPORT FACILITY - Seaport</b></label> 
      <textarea class="form-control" rows="3" cols="1" id="transport_facility_airport_1"></textarea>
      </div> 


</div>
</div> 

<hr>
<br>
<i style="color: green" class="">Now, I would like to talk about the different garbage and waste disposal facilities and practices in the barangay.</i><br><br>


<br>
<h5 class="text-left" style="color: "><b>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - GARBAGE AND WASTE DISPOSAL - OPEN DUMP SITE</b></h5><br>

<div class="text-left"><h5>
G1. Is the Open Dump Site present in the barangay?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 



<div class="garbage_waste_diposal_dump_repeat" hidden=""> 

<br>
<div class="text-left"><h5>GARBAGE AND WASTE DISPOSAL - Open Dump Site</h5>

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G3. What is the name of the Open Dump Site # 1?</b></label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="garbage_waste_diposal_dump_name" name="garbage_waste_diposal_dump_name" placeholder="" >
       </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G4. Building name of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="garbage_waste_diposal_dump_building" name="garbage_waste_diposal_dump_building" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G4.1 Complete address of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="garbage_waste_diposal_dump_address" name="garbage_waste_diposal_dump_address" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G5. Who operates the ?</b></label>
</div>            

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_operates_yes">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_operates_yes">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_operates_yes">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_operates_yes">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_operates_yes">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_operates_yes">GOCC<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_operates_yes">NONE<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_operates_yes">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 


      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: GARBAGE AND WASTE DISPOSAL - Open Dump Site</b></label> 
      <textarea class="form-control" rows="3" cols="1" id="notes_garbage_waste_diposal_dump_1"></textarea>
      </div> 

     

</div>
</div>    

<br>
<div class="garbage_waste_diposal_dump_repeat_no" hidden=""> 

<div class="form-group row">
<label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G2. What is the distance of the barangay hall to the nearest facility(in kms)?</b></label>
</div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_distance_if_3">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_distance_if_4">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_distance_if_3">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_distance_if_4">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY<br> 
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>   

<br>
<div class="form-group row">
<label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G6. Who operates the facility?</b></label>
</div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_distance_operates_no">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_distance_operates_no">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_distance_operates_no">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_distance_operates_no">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_distance_operates_no">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_distance_operates_no">GOCC<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_distance_operates_no">NONE<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_dump_distance_operates_no">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>        


      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: GARBAGE AND WASTE DISPOSAL - Open Dump Site</b></label> 
      <textarea class="form-control" rows="3" cols="1" id="notes_garbage_waste_diposal_dump_1"></textarea>
      </div>     
      </div>           


<br>
<h5 class="text-left" style="color: "><b>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - GARBAGE AND WASTE DISPOSAL - SANITARY AND LAND FILL</b></h5><br> 

<div class="text-left"><h5>
G1. Is the Sanitary Land Fill present in the barangay?
</h5></div> 

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 

<div class="garbage_waste_diposal_sanitary_repeat" hidden=""> 

<br>
<div class="text-left"><h5>GARBAGE AND WASTE DISPOSAL - Sanitary Land Fill</h5>

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G3. What is the name of the Sanitary Land Fill # 1?</b></label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="garbage_waste_diposal_sanitary_name" name="garbage_waste_diposal_sanitary_name" placeholder="" >
       </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G4. Building name of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="garbage_waste_diposal_sanitary_building" name="garbage_waste_diposal_sanitary_building" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G4.1 Complete address of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="garbage_waste_diposal_sanitary_address" name="garbage_waste_diposal_sanitary_address" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G5. Who operates the ?</b></label>
</div>            

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_operates_yes">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_operates_yes">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_operates_yes">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_operates_yes">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_operates_yes">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_operates_yes">GOCC<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_operates_yes">NONE<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_operates_yes">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 


      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: GARBAGE AND WASTE DISPOSAL - Sanitary Land Fill</b></label> 
      <textarea class="form-control" rows="3" cols="1" id="notes_garbage_waste_diposal_sanitary_1"></textarea>
      </div> 

     

</div>
</div>    

<br>
<div class="garbage_waste_diposal_sanitary_repeat_no" hidden=""> 

<div class="form-group row">
<label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G2. What is the distance of the barangay hall to the nearest facility(in kms)?</b></label>
</div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_distance_if_3">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_distance_if_4">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_distance_if_3">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_distance_if_4">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY<br> 
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>   

<br>
<div class="form-group row">
<label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G6. Who operates the facility?</b></label>
</div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_distance_operates_no">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_distance_operates_no">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_distance_operates_no">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_distance_operates_no">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_distance_operates_no">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_distance_operates_no">GOCC<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_distance_operates_no">NONE<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sanitary_distance_operates_no">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>        


      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: GARBAGE AND WASTE DISPOSAL - Sanitary Land Fill</b></label> 
      <textarea class="form-control" rows="3" cols="1" id="notes_garbage_waste_diposal_sanitary_1"></textarea>
      </div>     
      </div>   

<br>
<h5 class="text-left" style="color: "><b>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - GARBAGE AND WASTE DISPOSAL - COMPOST PITS</b></h5><br> 

<div class="text-left"><h5>
G1. Is the Compost Pits present in the barangay?
</h5></div> 

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

<div class="garbage_waste_diposal_compost_repeat" hidden=""> 

<br>
<div class="text-left"><h5>GARBAGE AND WASTE DISPOSAL - Compost Pits</h5>

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G3. What is the name of the Compost Pits # 1?</b></label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="garbage_waste_diposal_compost_name" name="garbage_waste_diposal_compost_name" placeholder="" >
       </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G4. Building name of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="garbage_waste_diposal_compost_building" name="garbage_waste_diposal_compost_building" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G4.1 Complete address of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="garbage_waste_diposal_compost_address" name="garbage_waste_diposal_compost_address" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G5. Who operates the ?</b></label>
</div>            

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_operates_yes">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_operates_yes">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_operates_yes">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_operates_yes">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_operates_yes">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_operates_yes">GOCC<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_operates_yes">NONE<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_operates_yes">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 


      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: GARBAGE AND WASTE DISPOSAL - Compost Pits</b></label> 
      <textarea class="form-control" rows="3" cols="1" id="notes_garbage_waste_diposal_compost_1"></textarea>
      </div> 

</div>
</div>    



<br>
<div class="garbage_waste_diposal_compost_repeat_no" hidden=""> 

<div class="form-group row">
<label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G2. What is the distance of the barangay hall to the nearest facility(in kms)?</b></label>
</div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_distance_if_3">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_distance_if_4">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_distance_if_3">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_distance_if_4">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY<br> 
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>   

<br>
<div class="form-group row">
<label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G6. Who operates the facility?</b></label>
</div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_distance_operates_no">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_distance_operates_no">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_distance_operates_no">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_distance_operates_no">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_distance_operates_no">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_distance_operates_no">GOCC<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_distance_operates_no">NONE<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_compost_distance_operates_no">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>        


      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: GARBAGE AND WASTE DISPOSAL - Compost Pits</b></label> 
      <textarea class="form-control" rows="3" cols="1" id="notes_garbage_waste_diposal_compost_1"></textarea>
      </div>     
      </div>   


<br>
<h5 class="text-left" style="color: "><b>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - GARBAGE AND WASTE DISPOSAL - MATERIAL RECOVERY FACILITY (MRF)</b></h5><br> 

<div class="text-left"><h5>
G1. Is the Material Recovery Facility (MRF) present in the barangay?
</h5></div> 

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

<div class="garbage_waste_diposal_material_repeat" hidden=""> 

<br>
<div class="text-left"><h5>GARBAGE AND WASTE DISPOSAL - Material Recovery Facility (MRF)</h5>

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G3. What is the name of the Material Recovery Facility (MRF) # 1?</b></label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="garbage_waste_diposal_material_name" name="garbage_waste_diposal_material_name" placeholder="" >
       </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G4. Building name of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="garbage_waste_diposal_material_building" name="garbage_waste_diposal_material_building" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G4.1 Complete address of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="garbage_waste_diposal_material_address" name="garbage_waste_diposal_material_address" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G5. Who operates the ?</b></label>
</div>            

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_operates_yes">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_operates_yes">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_operates_yes">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_operates_yes">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_operates_yes">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_operates_yes">GOCC<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_operates_yes">NONE<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_operates_yes">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 


      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: GARBAGE AND WASTE DISPOSAL - Material Recovery Facility (MRF)</b></label> 
      <textarea class="form-control" rows="3" cols="1" id="notes_garbage_waste_diposal_material_1"></textarea>
      </div> 

</div>
</div>    

<br>
<div class="garbage_waste_diposal_material_repeat_no" hidden=""> 

<div class="form-group row">
<label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G2. What is the distance of the barangay hall to the nearest facility(in kms)?</b></label>
</div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_distance_if_3">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_distance_if_4">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_distance_if_3">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_distance_if_4">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY<br> 
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>   

<br>
<div class="form-group row">
<label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G6. Who operates the facility?</b></label>
</div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_distance_operates_no">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_distance_operates_no">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_distance_operates_no">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_distance_operates_no">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_distance_operates_no">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_distance_operates_no">GOCC<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_distance_operates_no">NONE<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_material_distance_operates_no">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>        


      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: GARBAGE AND WASTE DISPOSAL - Material Recovery Facility (MRF)</b></label> 
      <textarea class="form-control" rows="3" cols="1" id="notes_garbage_waste_diposal_material_1"></textarea>
      </div>     
      </div>   

<br>
<h5 class="text-left" style="color: "><b>B. SERVICE INSTITUTIONS and INFRASTRUCTURE - GARBAGE AND WASTE DISPOSAL - TREATMENT, STORAGE, AND DISPOSAL (TSD) facility</b></h5><br>  


<div class="text-left"><h5>
G1. Is the Treatment, storage, and disposal (TSD) facility present in the barangay?
</h5></div> 

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  


<div class="garbage_waste_diposal_treatment_repeat" hidden=""> 

<br>
<div class="text-left"><h5>GARBAGE AND WASTE DISPOSAL - Treatment, storage, and disposal (TSD) facility</h5>

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G3. What is the name of the Treatment, storage, and disposal (TSD) facility # 1?</b></label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="garbage_waste_diposal_treatment_name" name="garbage_waste_diposal_treatment_name" placeholder="" >
       </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G4. Building name of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="garbage_waste_diposal_treatment_building" name="garbage_waste_diposal_treatment_building" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G4.1 Complete address of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="garbage_waste_diposal_treatment_address" name="garbage_waste_diposal_treatment_address" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G5. Who operates the ?</b></label>
</div>            

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_operates_yes">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_operates_yes">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_operates_yes">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_operates_yes">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_operates_yes">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_operates_yes">GOCC<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_operates_yes">NONE<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_operates_yes">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 


      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: GARBAGE AND WASTE DISPOSAL - Treatment, storage and disposal (TSD) facility</b></label> 
      <textarea class="form-control" rows="3" cols="1" id="notes_garbage_waste_diposal_treatment_1"></textarea>
      </div> 

</div>
</div>    

<br>
<div class="garbage_waste_diposal_treatment_repeat_no" hidden=""> 

<div class="form-group row">
<label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G2. What is the distance of the barangay hall to the nearest facility(in kms)?</b></label>
</div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_distance_if_3">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_distance_if_4">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_distance_if_3">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_distance_if_4">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY<br> 
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>   

<br>
<div class="form-group row">
<label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G6. Who operates the facility?</b></label>
</div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_distance_operates_no">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_distance_operates_no">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_distance_operates_no">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_distance_operates_no">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_distance_operates_no">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_distance_operates_no">GOCC<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_distance_operates_no">NONE<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_treatment_distance_operates_no">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>        


      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: GARBAGE AND WASTE DISPOSAL - Treatment, storage and disposal (TSD) facility</b></label> 
      <textarea class="form-control" rows="3" cols="1" id="notes_garbage_waste_diposal_treatment_1"></textarea>
      </div>     
      </div>   



<br>
<h5 class="text-left" style="color: "><b>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - GARBAGE AND WASTE DISPOSAL - WASTE-TO-ENERGY FACILITY</b></h5><br>  


<div class="text-left"><h5>
G1. Is the Waste-to-energy facility present in the barangay?
</h5></div> 

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  


<div class="garbage_waste_diposal_energy_repeat" hidden=""> 

<br>
<div class="text-left"><h5>GARBAGE AND WASTE DISPOSAL - Waste-to-energy facility</h5>

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G3. What is the name of the Waste-to-energy facility # 1?</b></label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="garbage_waste_diposal_energy_name" name="garbage_waste_diposal_energy_name" placeholder="" >
       </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G4. Building name of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="garbage_waste_diposal_energy_building" name="garbage_waste_diposal_energy_building" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G4.1 Complete address of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="garbage_waste_diposal_energy_address" name="garbage_waste_diposal_energy_address" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G5. Who operates the ?</b></label>
</div>            

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_operates_yes">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_operates_yes">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_operates_yes">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_operates_yes">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_operates_yes">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_operates_yes">GOCC<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_operates_yes">NONE<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_operates_yes">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 


      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: GARBAGE AND WASTE DISPOSAL - Waste to Energy facility</b></label> 
      <textarea class="form-control" rows="3" cols="1" id="notes_garbage_waste_diposal_energy_1"></textarea>
      </div> 

</div>
</div>    

<br>
<div class="garbage_waste_diposal_energy_repeat_no" hidden=""> 

<div class="form-group row">
<label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G2. What is the distance of the barangay hall to the nearest facility(in kms)?</b></label>
</div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_distance_if_3">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_distance_if_4">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_distance_if_3">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_distance_if_4">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY<br> 
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>   

<br>
<div class="form-group row">
<label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G6. Who operates the facility?</b></label>
</div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_distance_operates_no">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_distance_operates_no">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_distance_operates_no">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_distance_operates_no">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_distance_operates_no">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_distance_operates_no">GOCC<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_distance_operates_no">NONE<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_energy_distance_operates_no">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>        


      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: GARBAGE AND WASTE DISPOSAL - Waste to Energy facility</b></label> 
      <textarea class="form-control" rows="3" cols="1" id="notes_garbage_waste_diposal_energy_1"></textarea>
      </div>     
      </div>   









</form> <!-- SECTION 1 End Form -->



   
                             
                            </div> <!-- End of Card Body -->


                            <div class="card-footer text-muted" >
                             <button type="button" id="save_sec_1" class="btn btn-outline-success">Save</button>
                             <button type="button" class="btn btn-outline-primary">Submit</button>
                            </div>
              </div>




               </div>

          </div>
          <!-- End of Section 1 -->







       <!-- ------------------------------------------------------SECTION 2 ---------------------------------------------- -->
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="container-fluid" style="width: 90%; background-color: " >
                    


              <div class="card text-center" style="margin-top: 20px; margin-bottom: 40px;">
                            <div class="card-header" >
                             <h3>COMMUNITY BASED MONITORING SYSTEM</h3>
                            </div>

                            <div class="card-body" style="background-color: #ebebeb">

                               <form method="post" id="submit_de_part2">

                              </form>

                            </div> <!-- <<<<< End of Section 2 body -->


                            <div class="card-footer text-muted" >
                             <button type="button" id="save_sec_2" class="btn btn-outline-success">Save</button>
                             <button type="button" class="btn btn-outline-primary">Submit</button>
                            </div>


              </div> <!-- <<<<< End of Section 2 card -->

          </div> <!-- <<<<< End of Section 2 tab container-fluid -->

        </div> <!-- <<<<< End of Section 2 tab -->











         <!-- ------------------------------------------------------SECTION 3 ---------------------------------------------- -->
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"> 
               <div class="container-fluid" style="width: 90%; background-color: " >
                    


              <div class="card text-center" style="margin-top: 20px; margin-bottom: 40px;">
                            <div class="card-header" >
                             <h3>COMMUNITY BASED MONITORING SYSTEM</h3>
                            </div>

                            <div class="card-body" style="background-color: #ebebeb">

                              <form method="post" id="submit_de_part3">

                              </form>

                            </div> <!-- <<<<< End of Section 3 body -->


                           <div class="card-footer text-muted" >
                             <button type="button" id="save_sec_3" class="btn btn-outline-success">Save</button>
                             <button type="button" class="btn btn-outline-primary">Submit</button>
                            </div>


              </div> <!-- <<<<< End of Section 3 card -->

          </div> <!-- <<<<< End of Section 3 tab container-fluid -->

        </div> <!-- <<<<< End of Section 3 tab -->









              <!-- ------------------------------------------------------SECTION 4 ---------------------------------------------- -->

          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
               <div class="container-fluid" style="width: 90%; background-color: " >
                    


              <div class="card text-center" style="margin-top: 20px; margin-bottom: 40px;">
                            <div class="card-header" >
                             <h3>COMMUNITY BASED MONITORING SYSTEM</h3>
                            </div>

                            <div class="card-body" style="background-color: #ebebeb">



                              <form method="post" id="submit_de_part4">

                              <hr>
                              <h6 class="text-left" style="color: blue">CERTIFICATION</h6>

                               

                               <div class="form-group row">
                                <label  class="col-sm-3 col-form-label text-left"><b>Please check the box.</b></label>
                                  
                              </div>

                               <div class="form-check">
                                  <input type="checkbox" class="form-check-input" id="cert_checkbox" name="cert_checkbox" value = "HAHAHA">
                                  <label class="form-check-label" for="exampleCheck1" style="padding-top: 5px;">&nbsp I hereby certify that the data set forth herein were personally obtained/reviewed by me and in accordance with the instructions given by the PSA.</label>
                                </div>
                                <br>

                              <div class="form-group row">
                                  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Reviewed by</b></label>
                                  <div class="col-sm-8">
                                   
                                    <select id="reviewed_by" name="reviewed_by" class="form-control">

                                      <option value="">-Select-</option>
                                      <option value="CAS/ACAS">CAS/ACAS</option>
                                      <option value="HEAD CAS">HEAD CAS</option>
                                      <option value="CO/RSSO/PSO SUPERVISOR">CO/RSSO/PSO SUPERVISOR</option>
                                    </select>
                                  </div>
                              </div>

                              <div class="form-group row">
                                  <label for="inputPassword" class="col-sm-3 col-form-label text-left" ><b>Full Name</b></label>
                                  <div class="col-sm-8">
                                   <input type="text" class="form-control" id="reviewers_name" name="reviewers_name" placeholder="" >
                                   
                                  </div>
                              </div>

                              </form>





<!-- -------SIGNATURE PAD------  --> 
 <div id="signature-pad" class="signature-pad container-fluid">
    <div class="signature-pad--body container-fluid">
      <canvas></canvas>
    </div>
    <div class="signature-pad--footer container-fluid">
      <div class="description container-fluid"><b>Sign above</b></div>

      <div class="signature-pad--actions container-fluid">
        <div style="padding-top: 10px;" class="container-fluid">
          <button type="button" class="button clear btn btn-outline-info" data-action="clear">Clear</button>
          <button type="button" class="button btn btn-outline-info" data-action="change-color">Change color</button>
          <button type="button" class="button btn btn-outline-info" data-action="undo">Undo</button>

        </div>
        <div style="padding-top: 10px;" class="container-fluid">
          <button type="button" class="button save btn btn-outline-info" data-action="save-png" hidden="">Save as PNG</button>
          <button type="button" class="button save btn btn-outline-info" data-action="save-jpg">Save as JPG</button>
          <button type="button" class="button save btn btn-outline-info" data-action="save-svg" hidden="">Save as SVG</button>
        </div>
      </div>
    </div>
  </div>
<!-- ---END OF SIGNATURE PAD--- -->            

<!-- <img src="<?php echo base_url('assets/img/esignature/signature (11).jpg'); ?>" class="avatar">  -->





                    <form enctype="multipart/form-data" id="upload_signature_form">
                        <div class="form-group" style="padding-top: 20px;">
                         
                         
                          <input type="file" class="btn btn-outline-secondary" name="file" id="exampleFormControlFile1">
                        </div>

                        <div class="form-group">
                          <button type="button" id="upload_signature" class="btn btn-danger">Upload</button>
                        </div>
                    </form>

                          </div> <!-- <<<<< End of Section 4 body -->


                            <div class="card-footer text-muted" >
                             <button type="button" id="save_sec_4" class="btn btn-outline-success">Save</button>
                             <button type="button" class="btn btn-outline-primary">Submit</button>
                            </div>


              </div> <!-- <<<<< End of Section 4 card -->

          </div> <!-- <<<<< End of Section 4 tab container-fluid -->

      </div> <!-- <<<<< End of Section 4 tab -->
















</div>

<!-- ------End of Main Content------ -->
      

     


    </div> <!-- End of Page Content Wrapper -->


    

  </div> <!-- End of D-Flex -->


  <!-- -------------------------------------------MODALS------------------------------------------- -->



  <!-- ADD BARANGAY PERSONNEL -->

<div class="modal fade" id="add_barangay_personnel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Barangay Personnel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form method="post" id="submit_table_1">

  <div class="form-group">
    <label for="">Designation</label>
    <input type="text" class="form-control" name="designation_barangay_p" aria-describedby="" placeholder="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  <div class="form-group">
    <label for="">First Name</label>
    <input type="text" class="form-control" name="firstname_barangay_p" aria-describedby="" placeholder="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  <div class="form-group">
    <label for="">Last Name</label>
    <input type="text" class="form-control" name="lastname_barangay_p" aria-describedby="" placeholder="">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save_tables" data-val="submit_table_1">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- END OF ADD BARANGAY PERSONNEL -->


 <!-- ADD BARANGAY LIST -->

<div class="modal fade" id="add_barangay_list" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Barangay</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form method="post" id="submit_table_2">

  

  <div class="form-group">
    <label for="">Barangay Name</label>
    <input type="text" class="form-control" name="barangay_list_name" aria-describedby="" placeholder="">
   
  </div>

</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save_tables" data-val="submit_table_2">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- END OF BARANGAY LIST -->

 <!-- ADD BARANGAY LIST -->

<div class="modal fade" id="add_barangay_sitios" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Sitios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form method="post" id="submit_table_3">

  

  <div class="form-group">
    <label for="">Sitio's Name</label>
    <input type="text" class="form-control" name="barangay_sitios_name" aria-describedby="" placeholder="">
   
  </div>

</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save_tables" data-val="submit_table_3">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- END OF BARANGAY LIST -->



</body>
</html>
