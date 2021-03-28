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

<hr>
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


<hr>
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


<hr>
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


<hr>
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


<hr>
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


<hr>
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


<hr>
<br>
<h5 class="text-left" style="color: "><b>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - GARBAGE AND WASTE DISPOSAL - SEWAGE TREATMENT PLANT</b></h5><br>  


<div class="text-left"><h5>
G1. Is the Sewage treatment plant facility present in the barangay?
</h5></div> 

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  


<div class="garbage_waste_diposal_sewage_repeat" hidden=""> 

<br>
<div class="text-left"><h5>GARBAGE AND WASTE DISPOSAL - Sewage treatment plant</h5>

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G3. What is the name of the Sewage treatment plant # 1?</b></label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="garbage_waste_diposal_sewage_name" name="garbage_waste_diposal_sewage_name" placeholder="" >
       </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G4. Building name of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="garbage_waste_diposal_sewage_building" name="garbage_waste_diposal_sewage_building" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G4.1 Complete address of</b></label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="garbage_waste_diposal_sewage_address" name="garbage_waste_diposal_sewage_address" placeholder="" >
    </div>
</div>

<div class="form-group row">
    <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G5. Who operates the ?</b></label>
</div>            

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_operates_yes">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_operates_yes">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_operates_yes">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_operates_yes">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_operates_yes">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_operates_yes">GOCC<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_operates_yes">NONE<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_operates_yes">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 


      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: GARBAGE AND WASTE DISPOSAL - Sewage treatment plant</b></label> 
      <textarea class="form-control" rows="3" cols="1" id="notes_garbage_waste_diposal_sewage_1"></textarea>
      </div> 

</div>
</div>    

<br>
<div class="garbage_waste_diposal_sewage_repeat_no" hidden=""> 

<div class="form-group row">
<label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G2. What is the distance of the barangay hall to the nearest facility(in kms)?</b></label>
</div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_distance_if_3">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_distance_if_4">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_distance_if_3">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_distance_if_4">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY<br> 
                        <input class="form-check-input" type="radio" name="">DON'T KNOW<br> 
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
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_distance_operates_no">PRIVATE<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_distance_operates_no">NATIONAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_distance_operates_no">PROVINCIAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_distance_operates_no">CITY/MUNICIPAL GOVERNMENT<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_distance_operates_no">BARANGAY<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_distance_operates_no">GOCC<br>
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_distance_operates_no">NONE<br> 
                        <input class="form-check-input" type="radio" name="garbage_waste_diposal_sewage_distance_operates_no">DON'T KNOW<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>        


      <br>
      <div class="form-group row">
      <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: GARBAGE AND WASTE DISPOSAL - Sewage treatment plant</b></label> 
      <textarea class="form-control" rows="3" cols="1" id="notes_garbage_waste_diposal_sewage_1"></textarea>
      </div>     
      </div>   

<hr>
<br>
<h5 class="text-left" style="color: "><b>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - WASTE COLLECTION EQUIPMENT</b></h5><br> 

<div class="text-left"><h5>
WD1. Are the following waste collection equipment available in the barangay?
</h5></div>  

<br>
<div class="text-left"><h6><b>TYPE OF WASTE COLLECTION EQUIPMENT</b></h6>
</div>

<br>
<div class="text-left"><h5>
A. Collection Trucks?
</h5></div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="collection_trucks"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="collection_trucks"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

<div class="collection_trucks_count_repeat" hidden=""> 

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>WD2. How many units are owned and are being used by the barangay?</b></label>
  <div class="row-sm-8">
  <input type="number" class="form-control" id="collection_trucks_count" name="collection_trucks_count" placeholder="">
  </div> 
</div>
</div>          

<br>
<div class="text-left"><h5>
B. Waste Collection Bins?
</h5></div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="collection_bins"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="collection_bins"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

<div class="collection_bins_count_repeat" hidden=""> 

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>WD2. How many units are owned and are being used by the barangay?</b></label>
  <div class="row-sm-8">
  <input type="number" class="form-control" id="collection_bins_count" name="collection_bins_count" placeholder="">
  </div> 
</div>
</div>     


<br>
<div class="text-left"><h5>
C. Incinerator?
</h5></div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="collection_incinerator"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="collection_incinerator"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

<div class="collection_incinerator_count_repeat" hidden=""> 

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>WD2. How many units are owned and are being used by the barangay?</b></label>
  <div class="row-sm-8">
  <input type="number" class="form-control" id="collection_incinerator_count" name="collection_incinerator_count" placeholder="">
  </div> 
</div>
</div>  


<br>
<div class="text-left"><h5>
D. Others, Specify
</h5></div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="collection_others"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="collection_others"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

<div class="collection_others_specify_repeat" hidden=""> 

<br>
 
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Please Specify:</b></label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="collection_others_specify" name="collection_others_specify" placeholder="" >
</div>
</div>

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>WD2. How many units are owned and are being used by the barangay?</b></label>
  <div class="col-sm-4">
  <input type="number" class="form-control" id="garbage_waste_diposal_dump_name" name="garbage_waste_diposal_dump_name" placeholder="" >
</div>
</div>

</div>  

<br>
<h5 class="text-left" style="color: ">WD3. Who collects the garbage from households?</h5><br>  

<div class="text-left"><h6>
<b>WD3. Who collects the garbage from households? <br>
A. Biodegradable/compostable</b>
</h6></div>  

<div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="collector_biodegradable"  data-val="No" value="No">
                                  &nbsp&nbsp A. MUNICIPAL COLLECTOR
                               
                            </label>
                        </div>

                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="collector_biodegradable"  data-val="No" value="no">
                                  &nbsp&nbsp  B.  BARANGAY CHAIRMAN
                               
                            </label>
                        </div>
                      </div>
              </div>  

               <div class="container">
               <div class="col-sm-10">
                        <div class="row">
                            <label >
                                
                                    <input class="form-check-input respo_radio" type="checkbox" name="collector_biodegradable"  data-val="No" value="No">
                                   &nbsp&nbsp  C. PRIVATE COLLECTOR (ESTABLISHMENT)
                                 
                            </label>
                        </div>

                            <div class="row">
                            <label>
                                    <input class="form-check-input respo_radio" type="checkbox" name="collector_biodegradable"  data-val="No" value="No">
                                  &nbsp&nbsp D. "BOTE DYARYO", WASTE PICKERS OR GARBAGE SCAVENGERS
                            </label>

                         </div> 
                         <div class="row">
                            <label>
                                
                                    <input class="form-check-input respo_radio" type="checkbox" name="collector_biodegradable"  data-val="Yes" value="Yes">
                                   &nbsp&nbsp E. OTHERS (Specify)
                                 
                            </label>
                        </div>

                      </div>
                      </div> 

<div class="collector_biodegradable_specify_repeat" hidden=""> 

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Please Specify:</b></label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="collector_biodegradable_specify" name="collector_biodegradable_specify" placeholder="" >

</div>
</div>
</div>

<br>
<div class="text-left"><h6>
<b>WD3. Who collects the garbage from households? <br>
 B. Recyclables</b>
</h6></div>  

<div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="collector_recyclables"  data-val="No" value="No">
                                  &nbsp&nbsp A. MUNICIPAL COLLECTOR
                               
                            </label>
                        </div>

                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="collector_recyclables"  data-val="No" value="No">
                                  &nbsp&nbsp  B.  BARANGAY CHAIRMAN
                               
                            </label>
                        </div>
                      </div>
              </div>  

               <div class="container">
               <div class="col-sm-10">
                        <div class="row">
                            <label >
                                
                                    <input class="form-check-input respo_radio" type="checkbox" name="collector_recyclables"  data-val="No" value="No">
                                   &nbsp&nbsp  C. PRIVATE COLLECTOR (ESTABLISHMENT)
                                 
                            </label>
                        </div>

                            <div class="row">
                            <label>
                                    <input class="form-check-input respo_radio" type="checkbox" name="collector_recyclables"  data-val="No" value="No">
                                  &nbsp&nbsp D. "BOTE DYARYO", WASTE PICKERS OR GARBAGE SCAVENGERS
                            </label>

                         </div> 
                         <div class="row">
                            <label>
                                
                                    <input class="form-check-input respo_radio" type="checkbox" name="collector_recyclables"  data-val="Yes" value="Yes">
                                   &nbsp&nbsp E. OTHERS (Specify)
                                 
                            </label>
                        </div>

                      </div>
                      </div> 

<div class="collector_recyclables_specify_repeat" hidden=""> 

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Please Specify:</b></label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="collector_recyclables_specify" name="collector_recyclables_specify" placeholder="" >

</div>
</div>
</div>



<br>
<div class="text-left"><h6>
<b>WD3. Who collects the garbage from households? <br> 
C. Residuals (nonhazardous industrial waste)</b>
</h6></div>  

<div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="collector_residuals"  data-val="No" value="No">
                                  &nbsp&nbsp A. MUNICIPAL COLLECTOR
                               
                            </label>
                        </div>

                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="collector_residuals"  data-val="No" value="No">
                                  &nbsp&nbsp  B.  BARANGAY CHAIRMAN
                               
                            </label>
                        </div>
                      </div>
              </div>  

               <div class="container">
               <div class="col-sm-10">
                        <div class="row">
                            <label >
                                
                                    <input class="form-check-input respo_radio" type="checkbox" name="collector_residuals"  data-val="No" value="No">
                                   &nbsp&nbsp  C. PRIVATE COLLECTOR (ESTABLISHMENT)
                                 
                            </label>
                        </div>

                            <div class="row">
                            <label>
                                    <input class="form-check-input respo_radio" type="checkbox" name="collector_residuals"  data-val="No" value="No">
                                  &nbsp&nbsp D. "BOTE DYARYO", WASTE PICKERS OR GARBAGE SCAVENGERS
                            </label>

                         </div> 
                         <div class="row">
                            <label>
                                
                                    <input class="form-check-input respo_radio" type="checkbox" name="collector_residuals"  data-val="Yes" value="Yes">
                                   &nbsp&nbsp E. OTHERS (Specify)
                                 
                            </label>
                        </div>

                      </div>
                      </div> 

<div class="collector_residuals_specify_repeat" hidden=""> 

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Please Specify:</b></label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="collector_residuals_specify" name="collector_residuals_specify" placeholder="" >

</div>
</div>
</div> 



<br>
<div class="text-left"><h6>
<b>WD4. How often are garbage collected from households?</b>
</h6></div>  


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                       <input class="form-check-input" type="radio" name="collector_how_often_question" data-val="No" value="No">DAILY<br> 
                       <input class="form-check-input" type="radio" name="collector_how_often_question" data-val="No" value="No">THRICE A WEEK<br> 
                       <input class="form-check-input" type="radio" name="collector_how_often_question" data-val="No" value="No">TWICE A WEEK<br> 
                       <input class="form-check-input" type="radio" name="collector_how_often_question" data-val="No" value="No">ONCE A WEEK<br> 
                       <input class="form-check-input" type="radio" name="collector_how_often_question" data-val="Yes" value="Yes">OTHERS, SPECIFY<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 


<div class="collector_how_often_question_specify_repeat" hidden=""> 

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Please Specify:</b></label>
  <div class="col-sm-8">
 <input type="text" class="form-control" id="collector_how_often_question_specify" name="collector_how_often_question_specify" placeholder="" > 
</div>
</div>
</div>


<br>
<div class="text-left"><h6>
<b>WD5. Does the barangay still collect garbage from households even if these are not properly segregated?</b>
</h6></div>  


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="collector_properly_segregated"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="collector_properly_segregated"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  


<br>
<div class="text-left"><h6>
<b>WD6. Does the barangay pay the municipal/city/provincial LGU for waste management services?</b>
</h6></div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="collector_payment"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="collector_payment"  data-val="No" value="No">No Payment/Fee
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

<div class="collector_amount_repeat" hidden=""> 

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>WD7. How much does the barangay pay for waste management services for the whole year (in Php)?</b></label>
  <div class="col-sm-4">
 <input type="number" class="form-control" id="collector_amount" name="collector_amount" placeholder="" > 
</div>
</div>
</div>


<br>
<div class="text-left"><h6>
<b>WD8. Is the current garbage collection system able to serve the whole barangay?</b>
</h6></div> 

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="collector_able_to_serve"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="collector_able_to_serve"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

<div class="collector_specific_areas_repeat_no" hidden=""> 

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>WD9. What specific areas (zone/purok/sitio) are not reached by the garbage collectors # 1?</b></label>
  <div class="col-sm-5">
 <input type="text" class="form-control" id="collector_specific_areas_repeat" name="collector_specific_areas_repeat" placeholder="" > 
</div>
</div>
</div>


<hr>
<br>
<i style="color: green" class="">Now, I would like to talk about the different mode of transportation in the barangay.</i><br><br>

<br>
<h5 class="text-left" style="color: "><b>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - XII. MODE OF TRANSPORTATION</b></h5><br>


<div class="text-left"><h5>
TF1. Is the following mode of transportation available or in operation in the barangay?
</h5></div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="publictransport1"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="publictransport1"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  



<div class="publictransport1_repeat" hidden=""> 

<br>
<div class="text-left"><h6>
<b>A. Bus?</b>
</h6></div>  


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="buspb"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="buspb"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  
       

<br>
<div class="text-left"><h6>
<b>B. Regular Taxi?</b>
</h6></div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="taxipb"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="taxipb"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  
       




<br>
<div class="text-left"><h6>
<b>C. TNVS Car (Grab, MiCab, etc)</b>
</h6></div>  


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="grabpb"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="grabpb"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  
        

<br>
<div class="text-left"><h6>
<b>D. TNVS Motorcycle (Joyride, Angkas, etc)</b>
</h6></div>  


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="joypb"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="joypb"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  
        

<br>
<div class="text-left"><h6>
<b>E. Van/FX</b>
</h6></div>  


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="vanpb"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="vanpb"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  
        


<br>
<div class="text-left"><h6>
<b>F. Jeepney</b>
</h6></div>  


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="jeeppb"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="jeeppb"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  
       


<br>
<div class="text-left"><h6>
<b>G. Tricycle</b>
</h6></div>  


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="tricpb"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="tricpb"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  
       

<br>
<div class="text-left"><h6>
<b>H. Pedicab</b>
</h6></div>  


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="pedpb"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="pedpb"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  
        

<br>
<div class="text-left"><h6>
<b>I. Boat/motorized banca</b>
</h6></div>  


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="boatpb"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="boatpb"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  
       


<br>
<div class="text-left"><h6>
<b>J. Train</b>
</h6></div>  


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="trainpb"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="trainpb"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  
        

<br>
<div class="text-left"><h6>
<b>K. Motorcycle (habal-habal, skylab)</b>
</h6></div>  


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="motorpb"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="motorpb"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  
       
<br>
<div class="text-left"><h5>
Other transport facilities:
</h5></div> 

<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>L. Other, please specify # 1?</b></label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="other_trans_position" name="other_trans_position" placeholder="" >
</div>
</div>


<div class="form-group row">
<label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: Service institutions and infrastructure - Transport Facilities</b></label> 
<textarea class="form-control" rows="3" cols="1" id="notes_public_vehicle_1"></textarea>
</div>
</div>


<br>
<div class="publictransport1_repeat_no" hidden=""> 

<div class="form-group row">
<label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>G2. What is the distance of the barangay hall to the nearest facility(in kms)?</b></label>
</div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="distancepb_distance_if_3">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)<br>
                        <input class="form-check-input" type="radio" name="distancepb_distance_if_4">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)<br> 
                        <input class="form-check-input" type="radio" name="distancepb_distance_if_3">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY<br> 
                        <input class="form-check-input" type="radio" name="distancepb_distance_if_4">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY<br> 
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>   

<br>
<div class="form-group row">
<label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Notes for SECTION: Service institutions and infrastructure - Transport Facilities</b></label> 
<textarea class="form-control" rows="3" cols="1" id="notes_public_vehicle_1"></textarea>
</div>
</div>


<hr>

<br>
<i style="color: green" class="">Now, I would like to talk about the different Information and Communications Technology in the barangay.</i><br><br>

<br>
<h5 class="text-left" style="color: "><b>INFORMATION AND COMMUNICATIONS TECHNOLOGY</b></h5><br>

<div class="text-left"><h5>
IT1. Is there an available cellphone network signal in the barangay?
</h5></div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="network_available_question"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="network_available_question"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

<br>
<div class="network_available_repeat" hidden=""> 

<div class="text-left"><h6>
<b>IT1.1 What is the available cellphone network signal in the barangay?</b>
</h6></div>  

<div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                    <input class="form-check-input respo_radio" type="checkbox" name="network_available"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp 2G (E or G)
                               
                            </label>
                        </div>

                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="network_available"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp 3G (H or 3G+ or H+)
                               
                            </label>
                        </div>
                      </div>
              </div>  

               <div class="container">
               <div class="col-sm-10">
                        <div class="row">
                            <label >
                                
                                    <input class="form-check-input respo_radio" type="checkbox" name="network_available"  data-val="Yes" value="Yes">
                                   &nbsp&nbsp  4G (LTE or 4G+ or LTE-A)
                                 
                            </label>
                        </div>
                      </div>
                    </div>
                  </div>


<br>                  
<div class="text-left"><h5>
IT2. Is there an existing telecommunication/cellular tower/s in the barangay?
</h5></div>


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="existing_telcom"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="existing_telcom"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  


<br>
<div class="existing_telcom_repeat" hidden=""> 

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>IT3. How many are the existing telecommunication/cellular tower/s in the barangay?</b></label>
  <div class="row-sm-8">
  <input type="number" class="form-control" id="how_many_telcom" name="how_many_telcom" placeholder="">
  </div> 
</div>
</div>          


<br>                  
<div class="text-left"><h5>
IT4. Is free WiFi available in the barangay?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="wifi_availability"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="wifi_availability"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  


<br>
<div class="wifi_availability_repeat" hidden=""> 

<div class="text-left"><h6>
<b>IT5. Who provides the free Wi-Fi in the barangay?</b>
</h6></div>  


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="who_provides_wifi"  data-val="Yes" value="Yes">PRIVATELY-OWNED<br>
                        <input class="form-check-input" type="radio" name="who_provides_wifi"  data-val="No" value="No">GOVERNMENTLY-OWNED
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 
        </div>


<br>                  
<div class="text-left"><h5>
IT6. Which of the following ICT equipment in the barangay can be used by the public for free?
</h5></div>

<div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="ict_equipment_free"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp TELEPHONES/CELLPHONES
                               
                            </label>
                        </div>

                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="ict_equipment_free"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  COMPUTERS (DESKTOP,LAPTOP,TABLET)
                               
                            </label>
                        </div>
                      </div>
              </div>  

               <div class="container">
               <div class="col-sm-10">
                        <div class="row">
                            <label >
                                
                                    <input class="form-check-input respo_radio" type="checkbox" name="ict_equipment_free"  data-val="Yes" value="Yes">
                                   &nbsp&nbsp  FAX MACHINES
                                 
                            </label>
                        </div>

                            <div class="row">
                            <label>
                                    <input class="form-check-input respo_radio" type="checkbox" name="ict_equipment_free"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp PRINTERS
                            </label>

                         </div> 
                          <div class="row">
                            <label>
                                    <input class="form-check-input respo_radio" type="checkbox" name="ict_equipment_free"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp AUDIO-VISUAL EQUIPMENT (PROJECTOR, MICROPHONE, SPEAKER)
                            </label>

                         </div> 
                         <div class="row">
                            <label>
                                
                                    <input class="form-check-input respo_radio" type="checkbox" name="ict_equipment_free_specify"  data-val="Yes" value="Yes">
                                   &nbsp&nbsp OTHERS, SPECIFY
                                 
                            </label>
                        </div> 
                          <div class="row">
                            <label>
                                    <input class="form-check-input respo_radio" type="checkbox" name="ict_equipment_free"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp NONE
                            </label>

                         </div> 

                      </div>
                      </div> 


<div class="ict_equipment_free_specify_repeat" hidden=""> 

<br>
<div class="form-group row">
  <label for="inputPassword" class="col-sm-3 col-form-label text-left"><b>Please Specify:</b></label>
  <div class="col-sm-8">
  <input type="text" class="form-control" id="ict_equipment_free_specify" name="ict_equipment_free_specify" placeholder="" >
</div>
</div>
</div>

<br>
<br>                  
<div class="text-left"><h5>
IT7. Are there Fiber Optic Cables installed in the barangay hall?
</h5></div>


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="fiber_optic_barangay"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="fiber_optic_barangay"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 
<br>       
<br>                  
<div class="text-left"><h5>
IT8. Does this barangay use computers (desktop, laptop, tablet, etc.) in providing government services such as barangay clearance, community tax certificate, etc.?
</h5></div>
         

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="use_ict_in_services"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="use_ict_in_services"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 

<br>
<br>                  
<div class="text-left"><h5>
IT9. How do residents of the barangay usually fill out their forms for their transactions in the barangay?
</h5></div>
         

<div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="fillout_forms_system"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp MANUAL ACCOMPLISHMENT OF FORMS
                               
                            </label>
                        </div>

                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="fillout_forms_system"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  DIRECT ENCODING TO A COMPUTER BY BARANGAY PERSONNEL
                               
                            </label>
                        </div>
                      </div>
              </div>  

               <div class="container">
               <div class="col-sm-10">
                        <div class="row">
                            <label >
                                
                                    <input class="form-check-input respo_radio" type="checkbox" name="fillout_forms_system"  data-val="Yes" value="Yes">
                                   &nbsp&nbsp DIRECT ENCODING TO A COMPUTER BY RESIDENT
                                 
                            </label>
                        </div>

                      </div>
                    </div>
<br>  
<br>                  
<div class="text-left"><h5>
IT10. Does this barangay maintain a computerized database?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="barangay_database"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="barangay_database"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

<br>
<br>                  
<div class="text-left"><h5>
IT11. Does this barangay have a hired IT Personnel?
</h5></div>


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="barangay_it_personnel"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="barangay_it_personnel"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

<div class="barangay_it_personnel_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>IT12. How many IT personnel are working in the barangay performing IT functions?
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="barangay_it_personnel_count" name="barangay_it_personnel_count" placeholder="" >
</div>
</div>
</div>


<br>
<br>                  
<div class="text-left"><h5>
IT13. Does this barangay have an official website (gov.ph)? (to disseminate news, provide barangay services, etc.)
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="barangay_official_website"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="barangay_official_website"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

<div class="barangay_official_website_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>IT14. What is the official website URL of the barangay?
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="barangay_official_website_url" name="barangay_official_website_url" placeholder="" >
</div>
</div>
</div>


<br>
<br>                  
<div class="text-left"><h5>
IT15. Does this barangay have a social media account operated by the LGU?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="barangay_social_media"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="barangay_social_media"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

<div class="barangay_social_media_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>IT16. What is the social media account page URL of the barangay?
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="barangay_social_media_url" name="barangay_social_media_url" placeholder="" >
</div>
</div>
</div>


<br>
<br>                  
<div class="text-left"><h5>
IT17. Do you have specific local strategy on new technologies such as use of social media to disseminate information, online selling and buying of goods, use of online facilities to request services from the barangay, etc?
</h5></div>


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="barangay_disseminate_information"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="barangay_disseminate_information"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 

<div class="barangay_disseminate_information_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>IT18. Please provide the URL to the document containing the local strategy on new technologies or please attach a photo
</b></h6></div>   

  <div class="form-group row">
  <div class="col-sm-5">
  <input type="text" class="form-control" id="barangay_disseminate_information_url" name="barangay_disseminate_information_url" placeholder="" >

<br>
<div class="text-left"><h6><b>
IT18.1 Please provide the photo containing the e-government strategy.</b>
</h6></div> 
 

 <h6>IT18.1 Please attach a photo (if any)</h6>
 <input type="file" class="btn btn-outline-secondary" name="file" id="barangay_disseminate_information_image"><button type="button" id="barangay_disseminate_information_image" class="btn btn-danger">Upload</button>


<br>
<div class="text-left">
<br>
<h6><b>IT18.2 Please provide the file containing the e-government strategy.
</b></h6></div>


<h6>IT18.2 Please attach a file (printed or electronic copy).</h6>
<input type="file" class="btn btn-outline-secondary" name="file" id="barangay_disseminate_information_file"><button type="button" id="barangay_disseminate_information_file" class="btn btn-danger">Upload</button>


</div>
</div>
</div>



<br>
<br>                  
<div class="text-left"><h5>
IT19. Is there an e-Government Strategy or equivalent being implemented by your local/municipal government?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="barangay_egovern"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="barangay_egovern"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 


<div class="barangay_egovern_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>IT20. Please provide the URL to the document containing the e-government strategy.
OR Please attach a photo or a file (printed or electronic copy).
</b></h6></div>   

  <div class="form-group row">
  <div class="col-sm-5">
  <input type="text" class="form-control" id="barangay_egovern_url" name="barangay_egovern_url" placeholder="" >

<br>
<div class="text-left"><h6><b>
IT20.1 Please provide the photo containing the e-government strategy.</b>
</h6></div> 

 <h6>IT20.1 Please attach a photo (if any)</h6>
 <input type="file" class="btn btn-outline-secondary" name="file" id="egovern_image_repeat"><button type="button" id="barangay_disseminate_information_image" class="btn btn-danger">Upload</button>


<br>
<div class="text-left">
<br>
<h6><b>IT20.2 Please provide the file containing the e-government strategy.
</b></h6></div>

<h6>IT20.2 Please attach a file (printed or electronic copy).)</h6>
<input type="file" class="btn btn-outline-secondary" name="file" id="barangay_egovern_url_image"><button type="button" id="barangay_disseminate_information_file" class="btn btn-danger">Upload</button>

</div>
</div>
</div>

<br>
<br>                  
<div class="text-left"><h5>IT21. Does this barangay use ICT equipment/ facilities for security purposes? (e.g CCTV, etc.)</h5>
</div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="barangay_cctv_ict"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="barangay_cctv_ict"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>                          
   



<hr>

<br>
<i style="color: green" class="">Now, I would like to talk about the significant events in the barangay.</i><br><br>


<hr>
<br>
<h5 class="text-left" style="color: "><b>SIGNIFICANT EVENTS IN THE BARANGAY FOR PAST 3 YEARS - CLIMATE-RELATED AND GEOLOGIC EVENTS (01 April 2018 to 31 March 2020)</b></h5><br>   

<div class="text-left"><h6>
<b>S1. From 01 April 2018 to 31 March 2020, how many times did the event occur and negatively affected the barangay? Put number/s in the line provided.
</b></h6></div>  

<br>                  
<div class="text-left"><h5>
A. Climate-related and geologic events
</h5></div>


<br>
<div class="row">
<div class="row-sm-3">
  <div class="col text-left">
    <b>typhoon</b>
<input type="number" class="form-control" id="significant_events_typhoon" name="significant_events_typhoon" placeholder="" >
   </div>
 </div>

  <div class="col text-left"> 
    <div class="row-sm-3">
  <b>flooding</b>
  <input type="number" class="form-control" id="significant_events_flooding" name="significant_events_flooding" placeholder="" >
   </div>       
  </div>

<div class="col text-left"> 
  <div class="row-sm-3">
  <b>flash flood</b>
  <input type="number" class="form-control" id="significant_events_flash_flood" name="significant_events_flash_flood" placeholder="" >
   </div>      
  </div> 

  <div class="col text-left"> 
    <div class="row-sm-3">
  <b>drought</b>
  <input type="number" class="form-control" id="significant_events_drought" name="significant_events_drought" placeholder="" >
   </div>      
  </div>
</div>


<!-- endrow -->
<br>
<div class="row">
<div class="row-sm-3">
  <div class="col text-left">
    <b>earthquake</b>
    <input type="number" class="form-control" id="significant_events_earthquake" name="significant_events_earthquake" placeholder="" >
   </div>
 </div>

  <div class="col text-left"> 
    <div class="row-sm-3">
  <b> volcanic eruption</b>
  <input type="number" class="form-control" id="significant_events_volcanic_eruption" name="significant_events_volcanic_eruption" placeholder="" >
   </div>       
  </div>

<div class="col text-left"> 
  <div class="row-sm-3">
  <b>landslide</b>
  <input type="number" class="form-control" id="significant_events_landslide" name="significant_events_landslide" placeholder="" >
   </div>      
  </div> 

  <div class="col text-left"> 
    <div class="row-sm-3">
  <b>tsunami</b>
  <input type="number" class="form-control" id="significant_events_tsunami" name="significant_events_tsunami" placeholder="" >
   </div>      
  </div>
</div>

<br>
<div class="row">
  <div class="row-sm-3">
  <div class="col text-left">
    <b>forest fire</b>
    <input type="number" class="form-control" id="significant_events_forest_fire" name="significant_events_forest_fire" placeholder="" >
   </div>
 </div>
</div>

<br>
<hr>
<br>
<br>
<h5 class="text-left" style="color: "><b>SIGNIFICANT EVENTS IN THE BARANGAY FOR PAST 3 YEARS - ECONOMIC EVENTS (01 April 2018 to 31 March 2020)</b></h5><br>   

              
<div class="text-left"><h5>
B. Economic events
</h5></div>

<br>                  
<div class="text-left"><h6>
<b>closure of many small firms
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_closure" name="significant_events_closure" placeholder="" >
</div>
</div>

<br>                  
<div class="text-left"><h6>
<b>mass lay-off
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_mass" name="significant_events_mass" placeholder="" >
</div>
</div>

<br>                  
<div class="text-left"><h6>
<b>opening of large firm/s
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_largefirm" name="significant_events_largefirm" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>opening of many small firm/s
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_smallfirm" name="significant_events_smallfirm" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>opening of shopping malls
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_shoppingmalls" name="significant_events_shoppingmalls" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>opening of fastfood restaurant/s
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_fastfood" name="significant_events_fastfood" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>closure of large firms
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_closure_large_firms" name="significant_events_closure_large_firms" placeholder="" >
</div>
</div>
<br>


<hr>
<br>
<h5 class="text-left" style="color: "><b>SIGNIFICANT EVENTS IN THE BARANGAY FOR PAST 3 YEARS - PEACE AND ORDER EVENTS (01 April 2018 to 31 March 2020)</b></h5><br>   

<div class="text-left"><h5>
C. Peace and order events
</h5></div>

<br>                  
<div class="text-left"><h6>
<b>fire
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_fire" name="significant_events_fire" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>armed conflict
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_armed_conflict" name="significant_events_armed_conflict" placeholder="" >
</div>
</div> 
<br>

<hr>
<br>
<h5 class="text-left" style="color: "><b>SIGNIFICANT EVENTS IN THE BARANGAY FOR PAST 3 YEARS - CLIMATE-RELATED AND GEOLOGIC EVENTS (01 April 2020 to 31 March 2021)</b></h5><br>   


<div class="text-left"><h5>
D. Health and agriculture-related events
</h5></div>

<br>                  
<div class="text-left"><h6>
<b>epidemic
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_fire" name="significant_events_fire" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>pest infestation
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_armed_conflict" name="significant_events_armed_conflict" placeholder="" >
</div>
</div> 

<br>                  
<div class="text-left"><h6>
<b>livestock/poultry diseases
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_fire" name="significant_events_fire" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>fish kill
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_armed_conflict" name="significant_events_armed_conflict" placeholder="" >
</div>
</div> 


<br>                  
<div class="text-left"><h5>
Other health and agriculture-related events
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="significant_events_others"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="significant_events_others"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>   


<div class="significant_events_others_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>Please Specify other health and agriculture-related events # 1?
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="significant_events_others_specify" name="significant_events_others_specify" placeholder="" >
</div>
</div>

<br>                  
<div class="text-left"><h6>
<b>Significant event count of
</b></h6></div> 

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_others_count" name="significant_events_others_count" placeholder="" >
</div>
</div>
</div>

<br>                  
<div class="text-left"><h5>
S2. Based on report to barangay, what are the main reasons for the closure of firms during the period (01 April 2018 to 31 March 2020)?
</h5></div>

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="reason_of_closure" name="reason_of_closure" placeholder="" >
</div>
</div>
<br>


<hr>
<br>
<h5 class="text-left" style="color: "><b>SIGNIFICANT EVENTS IN THE BARANGAY FOR PAST 3 YEARS - CLIMATE-RELATED AND GEOLOGIC EVENTS (01 April 2020 to 31 March 2021)</b></h5><br>   

<div class="text-left"><h6>
<b>S3. From 01 April 2020 to 31 March 2021, how many times did the event occur or affected the barangay?
</b></h6></div>  

<br>                  
<div class="text-left"><h5>
Climate-related and geologic events
</h5></div>


<br>
<div class="row">
<div class="row-sm-3">
  <div class="col text-left">
    <b>typhoon</b>
<input type="number" class="form-control" id="significant_events_typhoon2" name="significant_events_typhoon2" placeholder="" >
   </div>
 </div>

  <div class="col text-left"> 
    <div class="row-sm-3">
  <b>flooding</b>
  <input type="number" class="form-control" id="significant_events_flooding2" name="significant_events_flooding2" placeholder="" >
   </div>       
  </div>

<div class="col text-left"> 
  <div class="row-sm-3">
  <b>flash flood</b>
  <input type="number" class="form-control" id="significant_events_flash_flood2" name="significant_events_flash_flood2" placeholder="" >
   </div>      
  </div> 

  <div class="col text-left"> 
    <div class="row-sm-3">
  <b>drought</b>
  <input type="number" class="form-control" id="significant_events_drought2" name="significant_events_drought2" placeholder="" >
   </div>      
  </div>
</div>


<!-- endrow -->
<br>
<div class="row">
<div class="row-sm-3">
  <div class="col text-left">
    <b>earthquake</b>
    <input type="number" class="form-control" id="significant_events_earthquake2" name="significant_events_earthquake2" placeholder="" >
   </div>
 </div>

  <div class="col text-left"> 
    <div class="row-sm-3">
  <b> volcanic eruption</b>
  <input type="number" class="form-control" id="significant_events_volcanic_eruption2" name="significant_events_volcanic_eruption2" placeholder="" >
   </div>       
  </div>

<div class="col text-left"> 
  <div class="row-sm-3">
  <b>landslide</b>
  <input type="number" class="form-control" id="significant_events_landslide2" name="significant_events_landslide2" placeholder="" >
   </div>      
  </div> 

  <div class="col text-left"> 
    <div class="row-sm-3">
  <b>tsunami</b>
  <input type="number" class="form-control" id="significant_events_tsunami2" name="significant_events_tsunami2" placeholder="" >
   </div>      
  </div>
</div>

<br>
<div class="row">
  <div class="row-sm-3">
  <div class="col text-left">
    <b>forest fire</b>
    <input type="number" class="form-control" id="significant_events_forest_fire2" name="significant_events_forest_fire2" placeholder="" >
   </div>
 </div>
</div>
<br>

<hr>
<br>
<h5 class="text-left" style="color: "><b>SIGNIFICANT EVENTS IN THE BARANGAY FOR PAST 3 YEARS - ECONOMIC EVENTS (01 April 2020 to 31 March 2021)</b></h5><br>   

          
<div class="text-left"><h5>
Economic events
</h5></div>

<br>                  
<div class="text-left"><h6>
<b>closure of many small firms
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_closure2" name="significant_events_closure2" placeholder="" >
</div>
</div>

<br>                  
<div class="text-left"><h6>
<b>mass lay-off
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_mass2" name="significant_events_mass2" placeholder="" >
</div>
</div>

<br>                  
<div class="text-left"><h6>
<b>opening of large firm/s
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_largefirm2" name="significant_events_largefirm2" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>opening of many small firm/s
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_smallfirm2" name="significant_events_smallfirm2" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>opening of shopping malls
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_shoppingmalls2" name="significant_events_shoppingmalls2" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>opening of fastfood restaurant/s
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_fastfood2" name="significant_events_fastfood2" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>closure of large firms
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_closure_large_firms2" name="significant_events_closure_large_firms2" placeholder="" >
</div>
</div>
<br>


<hr>
<br>
<h5 class="text-left" style="color: "><b>SIGNIFICANT EVENTS IN THE BARANGAY FOR PAST 3 YEARS - PEACE AND ORDER EVENTS (01 April 2020 to 31 March 2021)</b></h5><br>   

<div class="text-left"><h5>
Peace and order events
</h5></div>

<br>                  
<div class="text-left"><h6>
<b>fire
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_fire2" name="significant_events_fire2" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>armed conflict
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_armed_conflict2" name="significant_events_armed_conflict2" placeholder="" >
</div>
</div> 
<br>

<div class="text-left"><h5>
Health and agriculture-related events
</h5></div>

<br>                  
<div class="text-left"><h6>
<b>epidemic
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_epidemic2" name="significant_events_epidemic2" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>pest infestation
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_pest2" name="significant_events_pest2" placeholder="" >
</div>
</div> 

<br>                  
<div class="text-left"><h6>
<b>livestock/poultry diseases
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_livestock2" name="significant_events_livestock2" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>fish kill
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_fish2" name="significant_events_fish2" placeholder="" >
</div>
</div> 


<br>                  
<div class="text-left"><h5>
Is there other health and agriculture-related events?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="significant_events_others2"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="significant_events_others2"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>   


<div class="significant_events_others2_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>Other health and agriculture-related events: # 1?
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="significant_events_others_specify2" name="significant_events_others_specify2" placeholder="" >
</div>
</div>

<br>                  
<div class="text-left"><h6>
<b>Significant event count of
</b></h6></div> 

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_others_count2" name="significant_events_others_count2" placeholder="" >
</div>
</div>
</div>


<br>                  
<div class="text-left"><h5>
S4. Based on report to barangay, what are the main reasons for the closure of small firms during the period (01 April 2020 to 31 March 2021)?
</h5></div>

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="reason_of_closure2" name="reason_of_closure2" placeholder="" >
</div>
</div>

<br>                  
<div class="text-left"><h5>
S5. Based on report to barangay, what are the main reasons for the closure of large firms during the period (01 April 2020 to 31 March 2021)?
</h5></div>

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="reason_of_closure2b" name="reason_of_closure2b" placeholder="" >
</div>
</div>
<br>


<hr>

<br>
<i style="color: green" class="">Now, I would like to talk about the disaster preparedness of the barangay..</i><br><br> 

<br>
<h5 class="text-left" style="color: "><b>DISASTER PREPAREDNESS</b></h5><br>   

<br>                  
<div class="text-left"><h5>
DP1. Does the barangay have a written disaster risk reduction and management plan?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_preparedness_plan"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_preparedness_plan"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>                          
   

<br>
<br>                  
<div class="text-left"><h5>
DP2. Does the barangay have disaster management committee?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_preparedness_committee"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_preparedness_committee"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>                          
   

<br>
<br>                  
<div class="text-left"><h5>
DP3. Does the barangay have a disaster/emergency response team?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_preparedness_response"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_preparedness_response"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>                          
   

<br>
<br>                  
<div class="text-left"><h5>
DP4. Do you have organization's plan of succession during an emergency?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_preparedness_succession"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_preparedness_succession"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>                          
   

<br>
<br>                  
<div class="text-left"><h5>
DP5. Does the barangay have a disaster/emergency hotline?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_preparedness_hotline"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_preparedness_hotline"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>                          
   

<div class="disaster_preparedness_hotline_contact_repeat" hidden=""> 

<br>
<div class="text-left"><h5>
<b>Barangay's disaster/emergency hotline</b>
</h5></div>

<br>                  
<div class="text-left"><h6>
<b>DP6. What is the barangay's disaster/emergency hotline # 1?
</b></h6>
</div>

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="disaster_preparedness_hotline_contact" name="disaster_preparedness_hotline_contact" placeholder="" >
</div>
</div>
</div>


<br>
<br>                  
<div class="text-left"><h5>
DP7. Do you have disaster preparedness guide for people with disabilities?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_preparedness_guide"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_preparedness_guide"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>   


<br>
<br>                  
<div class="text-left"><h5>DP8. Are you aware of government digital platforms for Disaster Risk Reduction and Climate Change Adaptation (DRR-CCA) that may be used in the formulation of your barangay's DRR-CCA plans?</h5>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_preparedness_awareness"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_preparedness_awareness"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  
</div>
<br>

<hr>

<br>
<h5 class="text-left" style="color: "><b>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - DISASTER PREPAREDNESS - TYPE OF DISASTER</b></h5><br>   



<div class="row">

  <div class="col text-left"><label><b>DP9. Does the barangay have a localized early warning system for:</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
          <b>&nbsp&nbsp Yes</b>
    
  </div>


<div class="col text-left"> 
  
          <b>No</b>
          
  </div>

  <div class="col"></div>

</div> 



<br>
<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp A. TYPHOON</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_typhoon"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_typhoon"  data-val="No" value="No"><br>
          
  </div>
  
 
  <div class="col"></div>


</div>



<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp B. FLOODING</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_flooding"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_flooding"  data-val="No" value="No"><br>
        
  </div>
  
 
  <div class="col"></div>


</div>


<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp C. DROUGHT</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_drought"  data-val="Yes" value="Yes">&nbsp&nbsp<br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_drought"  data-val="No" value="No"><br>
          
  </div>
  
 
  <div class="col"></div>


</div>


<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp D. EARTHQUAKE</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_earthquake"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_earthquake"  data-val="No" value="No"><br>
          
  </div>
  
 
  <div class="col"></div>


</div>


<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp E. VOLCANIC &nbsp&nbsp&nbspERUPTION</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_volcanic"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_volcanic"  data-val="No" value="No"><br>
         
  </div>
  
 
  <div class="col"></div>


</div>




<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp F. LANDSLIDE</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_landslide"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_landslide"  data-val="No" value="No"><br>
          
  </div>
  
 
  <div class="col"></div>


</div>


<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp G. TSUNAMI</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_tsunami"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_tsunami"  data-val="No" value="No"><br>
          
  </div>
  
 
  <div class="col"></div>


</div>



<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp H. STORM SURGE</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_storm"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_storm"  data-val="No" value="No"><br>
          
  </div>
  
 
  <div class="col"></div>


</div>



<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp I. FOREST FIRE</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_forest"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_forest"  data-val="No" value="No"><br>
        
  </div>
  
 
  <div class="col"></div>


</div>



<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbspJ. FIRE</b></label></div>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_fire"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_fire"  data-val="No" value="No"><br>
          
  </div>
  
 
  <div class="col"></div>


</div>



<div class="row">

  <div class="col text-left"><label><b>&nbsp K. EPIDEMIC/ &nbsp&nbspPANDEMIC</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_epidemic"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_epidemic"  data-val="No" value="No"><br>
          
  </div>
  
 
  <div class="col"></div>


</div>



<div class="row">
  <div class="container">
    
  </div>
  <div class="col text-left"><label><b>&nbsp&nbspL. ARMED CONFLICT</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_armed"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_armed"  data-val="No" value="No"><br>
            </div>

  <div class="col"></div>


</div>

<br>
<br>                  
<div class="text-left"><h5>
Other disaster that have a localized early warning system:
</h5></div>
<br>           


<div class="text-left"><h6>
<b>M. OTHER DISASTERS
</b></h6></div> 

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_early_warning_other_loc"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_early_warning_other_loc"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>                          
   
<div class="disaster_early_warning_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>Please specify other disaster # 1?
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="disaster_early_warning_other_specify_loc" name="disaster_early_warning_other_specify_loc" placeholder="" >
</div>
</div>
</div>

<br>
<hr>
<br>


<div class="row">

  <div class="col text-left"><label><b>DP10. Does the barangay have a disaster contingency plan for:</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
          <b>&nbsp&nbsp Yes</b>
    
  </div>


<div class="col text-left"> 
  
          <b>No</b>
          
  </div>

  <div class="col"></div>

</div> 



<br>
<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp A. TYPHOON</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_typhoon_plan"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_typhoon_plan"  data-val="No" value="No"><br>
          
  </div>
  
 
  <div class="col"></div>


</div>



<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp B. FLOODING</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_flooding_plan"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_flooding_plan"  data-val="No" value="No"><br>
        
  </div>
  
 
  <div class="col"></div>


</div>


<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp C. DROUGHT</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_drought_plan"  data-val="Yes" value="Yes">&nbsp&nbsp<br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_drought_plan"  data-val="No" value="No"><br>
          
  </div>
  
 
  <div class="col"></div>


</div>


<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp D. EARTHQUAKE</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_earthquake_plan"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_earthquake_plan"  data-val="No" value="No"><br>
          
  </div>
  
 
  <div class="col"></div>


</div>


<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp E. VOLCANIC &nbsp&nbsp&nbspERUPTION</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_volcanic_plan"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_volcanic_plan"  data-val="No" value="No"><br>
         
  </div>
  
 
  <div class="col"></div>


</div>




<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp F. LANDSLIDE</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_landslide_plan"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_landslide_plan"  data-val="No" value="No"><br>
          
  </div>
  
 
  <div class="col"></div>


</div>


<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp G. TSUNAMI</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_tsunami_plan"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_tsunami_plan"  data-val="No" value="No"><br>
          
  </div>
  
 
  <div class="col"></div>


</div>



<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp H. STORM SURGE</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_storm_plan"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_storm_plan"  data-val="No" value="No"><br>
          
  </div>
  
 
  <div class="col"></div>


</div>



<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbsp I. FOREST FIRE</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_forest_plan"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_forest_plan"  data-val="No" value="No"><br>
        
  </div>
  
 
  <div class="col"></div>


</div>



<div class="row">

  <div class="col text-left"><label><b>&nbsp&nbspJ. FIRE</b></label></div>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_fire_plan"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_fire_plan"  data-val="No" value="No"><br>
          
  </div>
  
 
  <div class="col"></div>


</div>



<div class="row">

  <div class="col text-left"><label><b>&nbsp K. EPIDEMIC/ &nbsp&nbspPANDEMIC</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_epidemic_plan"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_epidemic_plan"  data-val="No" value="No"><br>
          
  </div>
  
 
  <div class="col"></div>


</div>



<div class="row">
  <div class="container">
    
  </div>
  <div class="col text-left"><label><b>&nbsp&nbspL. ARMED CONFLICT</b></label></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <div class="col text-left"> 
               &nbsp&nbsp<input class="form-check-input" type="radio" name="disaster_early_warning_armed_plan"  data-val="Yes" value="Yes"><br>
  </div>

<div class="col text-left"> 
           <input class="form-check-input" type="radio" name="disaster_early_warning_armed_plan"  data-val="No" value="No"><br>
            </div>

  <div class="col"></div>


</div>

<br>
<br>                  
<div class="text-left"><h5>
Other disaster that have a disaster contingency plan:
</h5></div>
<br>           

       
<div class="text-left"><h6>
<b>M. OTHER DISASTERS
</b></h6></div> 

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_early_warning_other_plan"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_early_warning_other_plan"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>                          
   
<div class="disaster_early_warning_plan_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>Please specify other disaster # 1?
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="disaster_early_warning_other_specify_plan" name="disaster_early_warning_other_specify_plan" placeholder="" >
</div>
</div>
</div>

<hr>

<br><br>
<h5 class="text-left" style="color: "><b>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - E. DISASTER RISK REDUCTION AND MANAGEMENT</b></h5><br>   

                  
<div class="text-left"><h5>
DP11. Does the barangay have evacuation map?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_evacuation"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_evacuation"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>                          
   

<div class="disaster_evacuation_repeat" hidden=""> 
<br>                  
<div class="text-left"><h6>
<b>DP12. For what hazards is the evacuation map used?
</b></h6></div>  



<div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp FLOOD
                               
                            </label>
                        </div>



                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  LANDSLIDE
                               
                            </label>
                        </div> 



                         <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp STORM SURGE
                               
                            </label>
                        </div>



                         <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp EARTHQUAKE
                               
                            </label>
                        </div>



                         <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp TSUNAMI
                               
                            </label>
                        </div>



                         <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp VOLCANIC ERUPTION
                               
                            </label>
                        </div>



                         <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use_specify"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp OTHERS, SPECIFY
                               
                            </label>
                        </div>
                      </div>
              </div>  


<div class="disaster_evacuation_map_use_specify_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>Please Specify
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="disaster_evacuation_map_use_specify" name="disaster_evacuation_map_use_specify" placeholder="" >
</div>
</div>
</div>

</div>



<br>
<br>                  
<div class="text-left"><h5>
DP13. Does the barangay have a hazard map?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_evacuation1"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_evacuation1"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>                          
   

<div class="disaster_evacuation1_repeat" hidden=""> 
<br>                  
<div class="text-left"><h6>
<b>DP14. For what hazards is the hazard map used?
</b></h6></div>  



<div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use1"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp FLOOD
                               
                            </label>
                        </div>



                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use1"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  LANDSLIDE
                               
                            </label>
                        </div> 



                         <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use1"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp STORM SURGE
                               
                            </label>
                        </div>



                         <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use1"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp EARTHQUAKE
                               
                            </label>
                        </div>



                         <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use1"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp TSUNAMI
                               
                            </label>
                        </div>



                         <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use1"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp VOLCANIC ERUPTION
                               
                            </label>
                        </div>



                         <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use_specify1"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp OTHERS, SPECIFY
                               
                            </label>
                        </div>
                      </div>
              </div>  

</div>
<div class="disaster_evacuation_map_use_specify1_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>Please Specify
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="disaster_evacuation_map_use_specify1" name="disaster_evacuation_map_use_specify1" placeholder="" >
</div>
</div>
</div>


<br>
<br>                  
<div class="text-left"><h5>
DP15. In the past 12 months, did the barangay LGU conduct Disaster preparedness seminars (maybe funded by LGU or Non-Government Agency (NGA)?
</h5></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="lgu_conduct_seminars"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="lgu_conduct_seminars"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>          


<br>
<br>                  
<div class="text-left"><h5>
DP16. In the past 12 months, were there disaster kits provided (maybe funded by LGU or NGA) to the barangay LGU?
</h5></div>


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="lgu_disaster_kits"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="lgu_disaster_kits"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>    


<br>
<br>
<div class="text-left"><h5>
<b>Local Evacuation Centers
</b></h5></div>  


<br>                
<div class="text-left"><h5>
DP17. Does the barangay have an evacuation facility?
</h5></div>


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_evacuation_facility"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_evacuation_facility"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>   


<div class="disaster_evacuation_facility_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>DP18. Enumerate the location of evacuation centers in the barangay # 1?
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="disaster_location_evacuation_center" name="disaster_location_evacuation_center" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>DP19. How would you categorize this evacuation center?
</b></h6></div>   


<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                  <input class="form-check-input" type="radio" name="disaster_categorize_evacuation_center" data-val="No" value="No">SCHOOL BUILDING<br>  
                  <input class="form-check-input" type="radio" name="disaster_categorize_evacuation_center" data-val="No" value="No">DEDICATED EVACUATION CENTER<br>
                    <input class="form-check-input" type="radio"  name="disaster_categorize_evacuation_center" data-val="Yes" value="Yes">OTHERS, SPECIFY<br>
                 
                    
                  
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 

<div class="disaster_categorize_evacuation_center_other_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>Please Specify:
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="disaster_categorize_evacuation_center_other" name="disaster_categorize_evacuation_center_other" placeholder="" >
</div>
</div>
</div>




<br>                  
<div class="text-left"><h6>
<b>DP20. What is the capacity number of the evacuation center?
</b></h6></div>  


<div class="form-group row">
<div class="col-sm-3">
  <input type="number" class="form-control" id="disaster_capacity_evacuation_center" name="disaster_capacity_evacuation_center" placeholder="" >
</div>
</div>

<br>                  
<div class="text-left"><h6>
<b>DP21. In which types of disasters is this evacuation center has been used?
</b></h6></div>  


<div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp A. TYPHOON
                               
                            </label>
                        </div>

                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  B. FLOODING
                               
                            </label>
                        </div>

                        <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  C. DROUGHT
                               
                            </label>
                        </div>


                         <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  D. EARTHQUAKE
                               
                            </label>
                        </div> 


                         <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  E. VOLCANIC ERUPTION
                               
                            </label>
                        </div>
                    
                     <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  F. LANDSLIDE
                               
                            </label>
                        </div>
                    
                     <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  G. TSUNAMI
                               
                            </label>
                        </div>
                    
                        <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  H. FOREST FIRE
                               
                            </label>
                        </div> 


                         <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  I. FIRE
                               
                            </label>
                        </div>
                    
                         <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  J. EPIDEMIC/PANDEMIC
                               
                            </label>
                        </div>
                    

                        <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  K. ARMED CONFLICT
                               
                            </label>
                        </div>
                    

                     <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  L. OTHERS, SPECIFY
                               
                            </label>
                        </div>
                    

                     <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  M. NOT YET USED
                               
                            </label>
                        </div>
                    
                      </div>
              </div>   

 <div class="disaster_used_evacuation_center_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>Please Specify
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="disaster_used_evacuation_center_other" name="disaster_used_evacuation_center_other" placeholder="" >
</div>
</div>
</div>   

<br>                  
<div class="text-left"><h6>
<b>DP22. Does the facility have access to safe drinking water?
</b></h6></div>   

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_has_safe_water"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_has_safe_water"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  


<br>                  
<div class="text-left"><h6>
<b>DP23. Does the facility have access to sanitary toilets?
</b></h6></div>   

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_has_sanitary_toilets"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_has_sanitary_toilets"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  


<br>                  
<div class="text-left"><h6>
<b>DP24. Does the facility have an operational hand-washing area?
</b></h6></div>   

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_has_handwashing_area"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_has_handwashing_area"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  


<br>                  
<div class="text-left"><h6>
<b>DP25. Does the facility have a disinfection area?
</b></h6></div>   

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_has_disinfection_area"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_has_disinfection_area"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

<br>                  
<div class="text-left"><h6>
<b>DP26. Does the facility have medical kits?
</b></h6></div>   

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="disaster_has_medicalkits"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="disaster_has_medicalkits"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

</div>


<br>             
<div class="text-left"><h6>
<b>Time and Date Ended:
</b></h6></div>
<div class="form-group row">
  <div class="col-sm-3">
  <input type="date" class="form-control" id="barangay_official_website_url" name="barangay_official_website_url" placeholder="" > 
  <input type="Time" class="form-control" id="barangay_official_website_url" name="barangay_official_website_url" placeholder="" >
</div>
</div>
<br>

<hr>

<br>
<h5 class="text-left" style="color: "><b>PART II. BARANGAY LGU AND RECORDS-BASED DATA
A. GENERAL INFORMATION ABOUT THE BARANGAY LOCAL GOVERNMENT UNIT</b></h5><br>   


<br>                  
<div class="text-left"><h5>
<b>Ages of Barangay Officials</b>
</h5></div>


<br>                  

<h6 class="text-left" style="color: blue"><b>A. CAPTAIN</b></h6>
<div class="text-left"><h5>
A1. How many are males aged for Captain as of April 01, 2020? Please input a number.
</h5></div>


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_1a" name="gi_male_1a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_1b" name="gi_male_1b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_1c" name="gi_male_1c" placeholder="" >
</div>
</div>


<br>
<div class="text-left"><h5>
A2. How many are females aged for Captain as of April 01, 2020? Please input a number.
</h5></div>


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_1a" name="gi_female_1a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_1b" name="gi_female_1b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_1c" name="gi_female_1c" placeholder="" >
</div>
</div>
<br>
<hr>

<br>
<h6 class="text-left" style="color: blue"><b>B. KAGAWAD</b></h6>
<div class="text-left"><h5>
A1. How many are males aged for Kagawad as of April 01, 2020? Please input a number.
</h5></div>


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_1a" name="gi_male_2a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_1b" name="gi_male_2b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_1c" name="gi_male_2c" placeholder="" >
</div>
</div>


<br>
<div class="text-left"><h5>
A2. How many are females aged for Kagawad as of April 01, 2020? Please input a number.
</h5></div> 


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_1a" name="gi_female_2a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_1b" name="gi_female_2b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_1c" name="gi_female_2c" placeholder="" >
</div>
</div>
<br>

<hr>

<br>
<h6 class="text-left" style="color: blue"><b>C. SECRETARY</b></h6>
<div class="text-left"><h5>
A1. How many are males aged for Secretary as of April 01, 2020? Please input a number.
</h5></div>


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_3a" name="gi_male_3a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_3b" name="gi_male_3b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_3c" name="gi_male_3c" placeholder="" >
</div>
</div>


<br>
<div class="text-left"><h5>
A2. How many are females aged for Secretary as of April 01, 2020? Please input a number.
</h5></div> 


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_3a" name="gi_female_3a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_3b" name="gi_female_3b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_3c" name="gi_female_3c" placeholder="" >
</div>
</div>
<br>

<hr>

<br>
<h6 class="text-left" style="color: blue"><b>D. TREASURER</b></h6>
<div class="text-left"><h5>
A1. How many are males aged for Treasurer as of April 01, 2020? Please input a number.
</h5></div>

<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_4a" name="gi_male_4a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_4b" name="gi_male_4b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_4c" name="gi_male_4c" placeholder="" >
</div>
</div>


<br>
<div class="text-left"><h5>
A2. How many are females aged for Treasurer as of April 01, 2020? Please input a number.
</h5></div> 


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_4a" name="gi_female_4a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_4b" name="gi_female_4b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_4c" name="gi_female_4c" placeholder="" >
</div>
</div>
<br>

<hr>

<br>
<h6 class="text-left" style="color: blue"><b>E. TANOD</b></h6>
<div class="text-left"><h5>
A1. How many are males aged for Tanod as of April 01, 2020? Please input a number.
</h5></div>

<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_5a" name="gi_male_5a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_5b" name="gi_male_5b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_5c" name="gi_male_5c" placeholder="" >
</div>
</div>


<br>
<div class="text-left"><h5>
A2. How many are females aged for Tanod as of April 01, 2020? Please input a number.
</h5></div> 


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_5a" name="gi_female_5a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_5b" name="gi_female_5b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_5c" name="gi_female_5c" placeholder="" >
</div>
</div>
<br>

<hr>

<br>
<h6 class="text-left" style="color: blue"><b>F. HEALTH WORKER (DOCTOR / NURSE)</b></h6>
<div class="text-left"><h5>
A1. How many are males aged for Health Worker (Doctor / Nurse) as of April 01, 2020? Please input a number.
</h5></div>


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_6a" name="gi_male_6a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_6b" name="gi_male_6b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_6c" name="gi_male_6c" placeholder="" >
</div>
</div>


<br>
<div class="text-left"><h5>
A2. How many are females aged for Health Worker (Doctor / Nurse) as of April 01, 2020? Please input a number.
</h5></div> 


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_6a" name="gi_female_6a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_6b" name="gi_female_6b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_6c" name="gi_female_6c" placeholder="" >
</div>
</div>
<br>

<hr>


<br>
<h6 class="text-left" style="color: blue"><b>G. NUTRITION SCHOLAR</b></h6>
<div class="text-left"><h5>
A1. How many are males aged for Nutrition Scholar as of April 01, 2020? Please input a number.
</h5></div>


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_7a" name="gi_male_7a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_7b" name="gi_male_7b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_7c" name="gi_male_7c" placeholder="" >
</div>
</div>


<br>
<div class="text-left"><h5>
A2. How many are females aged for Nutrition Scholar as of April 01, 2020? Please input a number.
</h5></div> 


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_7a" name="gi_female_7a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_7b" name="gi_female_7b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_7c" name="gi_female_7c" placeholder="" >
</div>
</div>
<br>

<hr>

<br>
<h6 class="text-left" style="color: blue"><b>H. PUROK LEADER</b></h6>
<div class="text-left"><h5>
A1. How many are males aged for Purok Leader as of April 01, 2020? Please input a number.
</h5></div>


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_8a" name="gi_male_8a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_8b" name="gi_male_8b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_8c" name="gi_male_8c" placeholder="" >
</div>
</div>


<br>
<div class="text-left"><h5>
A2. How many are females aged for Purok Leader as of April 01, 2020? Please input a number.
</h5></div> 


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_8a" name="gi_female_8a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_8b" name="gi_female_8b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_8c" name="gi_female_8c" placeholder="" >
</div>
</div>
<br>

<hr>

<br>
<h6 class="text-left" style="color: blue"><b>I. ENR OFFICER</b></h6>
<div class="text-left"><h5>
A1. How many are males aged for ENR Officer as of April 01, 2020? Please input a number.
</h5></div>


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_9a" name="gi_male_9a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_9b" name="gi_male_9b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_9c" name="gi_male_9c" placeholder="" >
</div>
</div>


<br>
<div class="text-left"><h5>
A2. How many are females aged for ENR Officer as of April 01, 2020? Please input a number.
</h5></div> 


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_9a" name="gi_female_9a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_9b" name="gi_female_9b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_9c" name="gi_female_9c" placeholder="" >
</div>
</div>
<br>

<hr>

<br>
<h6 class="text-left" style="color: blue"><b>J. LIBRARIAN</b></h6>
<div class="text-left"><h5>
A1. How many are males aged for Librarian as of April 01, 2020? Please input a number.
</h5></div>


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_10a" name="gi_male_10a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_10b" name="gi_male_10b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_10c" name="gi_male_10c" placeholder="" >
</div>
</div>


<br>
<div class="text-left"><h5>
A2. How many are females aged for Librarian as of April 01, 2020? Please input a number.
</h5></div> 


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_10a" name="gi_female_10a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_10b" name="gi_female_10b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_10c" name="gi_female_10c" placeholder="" >
</div>
</div>
<br>

<hr>

<br>
<h6 class="text-left" style="color: blue"><b>K. DAY CARE WORKER</b></h6>
<div class="text-left"><h5>
A1. How many are males aged for Day Care Worker as of April 01, 2020? Please input a number.
</h5></div>


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_11a" name="gi_male_11a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_11b" name="gi_male_11b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_11c" name="gi_male_11c" placeholder="" >
</div>
</div>


<br>
<div class="text-left"><h5>
A2. How many are females aged for Day Care Worker as of April 01, 2020? Please input a number.
</h5></div> 


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_12a" name="gi_female_12a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_12b" name="gi_female_12b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_12c" name="gi_female_12c" placeholder="" >
</div>
</div>
<br>

<hr>

<br>
<h6 class="text-left" style="color: blue"><b>L. UTILITY WORKER</b></h6>
<div class="text-left"><h5>
A1. How many are males aged for Utility Worker as of April 01, 2020? Please input a number.
</h5></div>

<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_13a" name="gi_male_13a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_13b" name="gi_male_13b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_13c" name="gi_male_13c" placeholder="" >
</div>
</div>


<br>
<div class="text-left"><h5>
A2. How many are females aged for Utility Worker as of April 01, 2020? Please input a number.
</h5></div> 


<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_13a" name="gi_female_13a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_13b" name="gi_female_13b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_13c" name="gi_female_13c" placeholder="" >
</div>
</div>
<br>

<hr>

<br>
<h6 class="text-left" style="color: blue"><b>M. OTHERS (e.g. MIDWIFE) as of April 01, 2020? PLEASE SPECIFY:</b></h6>
<div class="text-left"><h6>
<b>Add Entry?
</b></h6></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="general_info_others"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="general_info_others"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>                          
   
<div class="general_info_others_repeat" hidden=""> 

<br>
<div class="text-left"><h5>
Other Barangay Worker:
</h5></div>

              
<div class="text-left"><h6>
<b>Please specify other barangay worker:
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="general_info_name" name="general_info_name" placeholder="" >
</div>
</div>
<br>


<div class="text-left"><h5>
A1. How many are males aged for as of April 01, 2020? Please input a number.
</h5></div>

<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_14a" name="gi_male_14a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_14b" name="gi_male_14b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_14c" name="gi_male_14c" placeholder="" >
</div>
</div>

<br>
<div class="text-left"><h5>
A2. How many are females aged for as of April 01, 2020? Please input a number.
</h5></div>

<br>                  
<div class="text-left"><h6>
<b>15 to 30 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_14a" name="gi_female_14a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_14b" name="gi_female_14b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_14c" name="gi_female_14c" placeholder="" >
</div>
</div>

</div>

<br>

<hr>

<br>
<h5 class="text-left" style="color: "><b>A. GENERAL INFORMATION ABOUT THE BARANGAY LOCAL GOVERNMENT UNIT OTHER DETAILS:</b></h5><br>  

<br>                  
<div class="text-left"><h5>
Reference Period:</h5>
<i style="font-size: 11px; color: gray"> mm/yy - mm/yy</i>
</h5></div>

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="others_lgu_reference_period" name="others_lgu_reference_period" placeholder="" >
</div>
</div>

<br>                  
<div class="text-left"><h5>Title of Source Document:</h5>

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="others_lgu_source_document" name="others_lgu_source_document" placeholder="" >
</div>
</div>

<br>                  
<div class="text-left"><h5>Data source agency/unit:</h5></div>

<br>

<hr>

<br>                  
<div class="text-left"><h5><b>A3. ESTABLISHMENTS OF THE BARANGAY</b></h5></div> 

<br>
<br>                
<div class="text-left"><h5>
A3. How many Agriculture, forestry, and fishing establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Agriculture, forestry, and fishing</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="agriculture_number_establishments" name="agriculture_number_establishments" placeholder="" >
</div>
</div>

<br>
<br>                
<div class="text-left"><h5>
A3. How many Mining and quarrying establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Mining and quarrying</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="mining_number_establishments" name="mining_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Manufacturing establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Manufacturing</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="manufacturing_number_establishments" name="manufacturing_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Electricity, gas, steam, and air conditioning supply establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Electricity, gas, steam, and air conditioning supply</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="electricity_number_establishments" name="electricity_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Water supply, sewerage, waste management and remediation activities establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Water supply, sewerage, waste management and remediation activities</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="water_number_establishments" name="water_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Construction establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Construction</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="construction_number_establishments" name="construction_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Wholesale and retail trade; repair of motor vehicles and motorcycles establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Wholesale and retail trade; repair of motor vehicles and motorcycles</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="wholesale_number_establishments" name="wholesale_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Transportation and storage establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Transportation and storage</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="transportation_number_establishments" name="transportation_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Accommodation and food service activities establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Accommodation and food service activities</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="accommodation_number_establishments" name="accommodation_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Information and communication establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Information and communication</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="information_number_establishments" name="information_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Financial and insurance activities establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Financial and insurance activities</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="financial_number_establishments" name="financial_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Real estate activities establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Real estate activities</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="realestate_number_establishments" name="realestate_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Professional, scientific, and technical services establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Professional, scientific, and technical services</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="professional_number_establishments" name="professional_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Administrative and support service activities establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Administrative and support service activities</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="administrative_number_establishments" name="administrative_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Public administration and defense; compulsory social security establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Public administration and defense; compulsory social security</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="public_number_establishments" name="public_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Education establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Education</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="education_number_establishments" name="education_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Human health and social work activities establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Human health and social work activities</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="human_number_establishments" name="human_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Arts, entertainment, and recreation establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Arts, entertainment, and recreation</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="arts_number_establishments" name="arts_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Other service activities establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Other service activities</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="other_number_establishments" name="other_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Activities of private households as employers and undifferentiated goods and services and producing activities of households for own use establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Activities of private households as employers and undifferentiated goods and services and producing activities of households for own use</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="goods_number_establishments" name="goods_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. How many Activities of extraterritorial organizations and bodies establishments are in the barangay as of 01 April 2021?
</h5></div>

<br>
<div class="text-left"><h6>
<b>Activities of extraterritorial organizations and bodies</b></h6></div>  

<br>
<div class="text-left"><h6>
<b>Number of establishments</b></h6></div>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="extraterritorial_number_establishments" name="extraterritorial_number_establishments" placeholder="" >
</div>
</div>


<br>
<br>                
<div class="text-left"><h5>
A3. ESTABLISHMENTS OF THE BARANGAY
</h5></div>


<br>
<div class="text-left"><h6>
<b>Reference Period
</b></h6></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="extraterritorial_reference_establishments" name="extraterritorial_reference_establishments" placeholder="" >
</div>
</div>


<br>
<div class="text-left"><h6>
<b>Title of source document
</b></h6></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="extraterritorial_title_establishments" name="extraterritorial_title_establishments" placeholder="" >
</div>
</div>


<br>
<div class="text-left"><h6>
<b>Data source/agency/unit/office in the barangay
</b></h6></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="extraterritorial_data_establishments" name="extraterritorial_data_establishments" placeholder="" >
</div>
</div>


<br>
<div class="text-left"><h6>
<b>Notes for A3. ESTABLISHMENTS OF THE BARANGAY
</b></h6></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="textfield" class="form-control" id="notes_establishments_extraterritorial_1" name="notes_establishments_extraterritorial_1" placeholder="" >
</div>
</div>
</div>
<br>

<hr>

<br>

<br>
<h5 class="text-left" style="color: "><b>B. VOLUNTEERISM IN THE BARANGAY</b></h5><br>   

<br>                  
<div class="text-left"><h5>
B1. How many volunteers have extended services to the barangay in the past three months?
</h5></div> 

<br>                  
<div class="text-left"><h5>
<b>Sector / Thematic Area</b>
</h5></div>

<br>                  
<div class="text-left"><h6>
<b>A - Agriculture
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="cc1" name="cc1" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>B - Environment
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="cc2" name="cc2" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>C - Health
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="cc3" name="cc3" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>D - Peace and Security
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="cc4" name="cc4" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>E - Industry
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="cc5" name="cc5" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>F - Services
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="cc6" name="cc6" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>G - Education
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="cc7" name="cc7" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>H - Governance
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="cc8" name="cc8" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>I - Job creation/income generation
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="cc11" name="cc11" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>J - Social Services
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="cc12" name="cc12" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>K - Is there other volunteers that have extended to the barangay in the past three months?
</b></h6></div> 

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="cc13"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="cc13"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>  

<div class="cc13_repeat" hidden=""> 
<br>                  
<div class="text-left"><h5>
Other volunteers that have extended to the barangay
</h5></div> 
<br>

<div class="text-left"><h6>
<b>Please specify Other volunteers that have extended to the barangay # 1
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="cc13_specify" name="cc13_specify" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>Count:
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="cc13_specify_count" name="cc13_specify_count" placeholder="" >
</div>
</div>
</div>


<br>
<br>                  
<div class="text-left"><h5>
B2. What are the volunteer service organizations which extended help to the barangay in the past 12 months?
</h5></div>

<br>                  
<div class="text-left"><h5>
<b>Volunteer Service</b>
</h5></div>


<br>                  
<div class="text-left"><h5>
Name of Volunteer Service Organization
</h5></div>
<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="name_of_organization_volunteerism" name="name_of_organization_volunteerism" placeholder="" >
</div>
</div>

<br>
                
<div class="text-left"><h5>
B3. Sector / Area:
</h5></div>


<div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="name_of_sector_volunteerism"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp A. Agriculture
                               
                            </label>
                        </div>

                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="name_of_sector_volunteerism"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  B. Environment
                               
                            </label>
                        </div>


                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="name_of_sector_volunteerism"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  C. Health
                               
                            </label>
                        </div>



                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="name_of_sector_volunteerism"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  D. Peace and Security
                               
                            </label>
                        </div>


                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="name_of_sector_volunteerism"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  E. Industry
                               
                            </label>
                        </div>


                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="name_of_sector_volunteerism"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  F. Services
                               
                            </label>
                        </div>


                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="name_of_sector_volunteerism"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  G. Education
                               
                            </label>
                        </div>


                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="name_of_sector_volunteerism"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  H. Governance
                               
                            </label>
                        </div>


                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="name_of_sector_volunteerism"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  I. Job creation / income generation
                               
                            </label>
                        </div>


                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="name_of_sector_volunteerism"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  J. Social Services
                               
                            </label>
                        </div>


                              <div class="row">
                            <label>
                                
                                     <input class="form-check-input respo_radio" type="checkbox" name="name_of_sector_volunteerism"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  K. Others, Specify
                               
                            </label>
                        </div>
                      </div>
              </div>  


<br>

<hr>

<br>
<h5 class="text-left" style="color: "><b>C. ROAD NETWORK</b></h5><br>   

<br>
<div class="text-left"><h5>
<b>TYPE OF ROAD</b>
</h5></div>

<br>                  
<div class="text-left"><h5>
C1. Are any of the following roads/streets present in the barangay?
</h5></div>
<br>

<div class="text-left"><h6>
<b>C1. Is this present in the barangay? <span style="color: blue"> - A. Paved Concrete</span>
</b></h6></div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="paved_concrete"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="paved_concrete"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>


<div class="paved_concrete_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>C2. What is the name of the Paved Concrete # 1?
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="paved_concrete_name" name="paved_concrete_name" placeholder="" >
</div>
</div>

<br>                  
<div class="text-left"><h6>
<b>C3. What is the length of the ? (in kms.)
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="paved_concrete_length" name="paved_concrete_length" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>C4. Who is maintaining the ?
</b></h6></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                       <input class="form-check-input" type="radio" name="paved_concrete_maintaining" data-val="No" value="No">1 - Private<br> 
                       <input class="form-check-input" type="radio" name="paved_concrete_maintaining" data-val="No" value="No">2 - National Government<br> 
                       <input class="form-check-input" type="radio" name="paved_concrete_maintaining" data-val="No" value="No">3 - Provincial Government<br> 
                       <input class="form-check-input" type="radio" name="paved_concrete_maintaining" data-val="No" value="No">4 - Municipal/City Government<br> 
                       <input class="form-check-input" type="radio" name="paved_concrete_maintaining" data-val="No" value="No">5 - Barangay<br> 
                       <input class="form-check-input" type="radio" name="paved_concrete_maintaining" data-val="Yes" value="Yes">6 - Others, specify<br> 
                       <input class="form-check-input" type="radio" name="paved_concrete_maintaining" data-val="No" value="No">7 - None<br> 
                       <input class="form-check-input" type="radio" name="paved_concrete_maintaining" data-val="No" value="No">8 - Don't Know<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 

<div class="RN5_concrete_others_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>C4. Others, please specify:
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="RN5_concrete_others" name="RN5_concrete_others" placeholder="" >
</div>
</div>
</div>

<br>                  
<div class="text-left"><h6>
<b>C5. What is the present condition of the road? (See Codes Below)
</b></h6></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                       <input class="form-check-input" type="radio" name="paved_concrete_condition" data-val="No" value="No">1 - Good<br> 
                       <input class="form-check-input" type="radio" name="paved_concrete_condition" data-val="No" value="No">2 - Fair<br> 
                       <input class="form-check-input" type="radio" name="paved_concrete_condition" data-val="No" value="No">3 - Poor<br> 
                       <input class="form-check-input" type="radio" name="paved_concrete_condition" data-val="No" value="No">4 - Bad<br> 
                       <input class="form-check-input" type="radio" name="paved_concrete_condition" data-val="No" value="No">5 - No assessment<br> 
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 
</div>

<br>
<br>

<div class="text-left"><h6>
<b>C1. Is this present in the barangay? <span style="color: blue"> - B. Paved Asphalt</span>
</b></h6></div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="paved_asphalt"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="paved_asphalt"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>


<div class="paved_asphalt_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>C2. What is the name of the Paved Asphalt # 1?
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="paved_asphalt_name" name="paved_asphalt_name" placeholder="" >
</div>
</div>

<br>                  
<div class="text-left"><h6>
<b>C3. What is the length of the ? (in kms.)
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="paved_asphalt_length" name="paved_asphalt_length" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>C4. Who is maintaining the ?
</b></h6></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                       <input class="form-check-input" type="radio" name="paved_asphalt_maintaining" data-val="No" value="No">1 - Private<br> 
                       <input class="form-check-input" type="radio" name="paved_asphalt_maintaining" data-val="No" value="No">2 - National Government<br> 
                       <input class="form-check-input" type="radio" name="paved_asphalt_maintaining" data-val="No" value="No">3 - Provincial Government<br> 
                       <input class="form-check-input" type="radio" name="paved_asphalt_maintaining" data-val="No" value="No">4 - Municipal/City Government<br> 
                       <input class="form-check-input" type="radio" name="paved_asphalt_maintaining" data-val="No" value="No">5 - Barangay<br> 
                       <input class="form-check-input" type="radio" name="paved_asphalt_maintaining" data-val="Yes" value="Yes">6 - Others, specify<br> 
                       <input class="form-check-input" type="radio" name="paved_asphalt_maintaining" data-val="No" value="No">7 - None<br> 
                       <input class="form-check-input" type="radio" name="paved_asphalt_maintaining" data-val="No" value="No">8 - Don't Know<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 

<div class="RN5_asphalt_others_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>C4. Others, please specify:
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="RN5_asphalt_others" name="RN5_asphalt_others" placeholder="" >
</div>
</div>
</div>

<br>                  
<div class="text-left"><h6>
<b>C5. What is the present condition of the road? (See Codes Below)
</b></h6></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                       <input class="form-check-input" type="radio" name="paved_asphalt_condition" data-val="No" value="No">1 - Good<br> 
                       <input class="form-check-input" type="radio" name="paved_asphalt_condition" data-val="No" value="No">2 - Fair<br> 
                       <input class="form-check-input" type="radio" name="paved_asphalt_condition" data-val="No" value="No">3 - Poor<br> 
                       <input class="form-check-input" type="radio" name="paved_asphalt_condition" data-val="No" value="No">4 - Bad<br> 
                       <input class="form-check-input" type="radio" name="paved_asphalt_condition" data-val="No" value="No">5 - No assessment<br> 
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 
</div>


<br>
<br>

<div class="text-left"><h6>
<b>C1. Is this present in the barangay? <span style="color: blue"> - C. Unpaved Gravel</span>
</b></h6></div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="unpaved_gravel"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="unpaved_gravel"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>


<div class="unpaved_gravel_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>C2. What is the name of the Unpaved Gravel # 1?
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="unpaved_gravel_name" name="unpaved_gravel_name" placeholder="" >
</div>
</div>

<br>                  
<div class="text-left"><h6>
<b>C3. What is the length of the ? (in kms.)
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="unpaved_gravel_length" name="unpaved_gravel_length" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>C4. Who is maintaining the ?
</b></h6></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                       <input class="form-check-input" type="radio" name="unpaved_gravel_maintaining" data-val="No" value="No">1 - Private<br> 
                       <input class="form-check-input" type="radio" name="unpaved_gravel_maintaining" data-val="No" value="No">2 - National Government<br> 
                       <input class="form-check-input" type="radio" name="unpaved_gravel_maintaining" data-val="No" value="No">3 - Provincial Government<br> 
                       <input class="form-check-input" type="radio" name="unpaved_gravel_maintaining" data-val="No" value="No">4 - Municipal/City Government<br> 
                       <input class="form-check-input" type="radio" name="unpaved_gravel_maintaining" data-val="No" value="No">5 - Barangay<br> 
                       <input class="form-check-input" type="radio" name="unpaved_gravel_maintaining" data-val="Yes" value="Yes">6 - Others, specify<br> 
                       <input class="form-check-input" type="radio" name="unpaved_gravel_maintaining" data-val="No" value="No">7 - None<br> 
                       <input class="form-check-input" type="radio" name="unpaved_gravel_maintaining" data-val="No" value="No">8 - Don't Know<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 

<div class="RN5_gravel_others_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>C4. Others, please specify:
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="RN5_gravel_others" name="RN5_gravel_others" placeholder="" >
</div>
</div>
</div>

<br>                  
<div class="text-left"><h6>
<b>C5. What is the present condition of the road? (See Codes Below)
</b></h6></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                       <input class="form-check-input" type="radio" name="unpaved_gravel_condition" data-val="No" value="No">1 - Good<br> 
                       <input class="form-check-input" type="radio" name="unpaved_gravel_condition" data-val="No" value="No">2 - Fair<br> 
                       <input class="form-check-input" type="radio" name="unpaved_gravel_condition" data-val="No" value="No">3 - Poor<br> 
                       <input class="form-check-input" type="radio" name="unpaved_gravel_condition" data-val="No" value="No">4 - Bad<br> 
                       <input class="form-check-input" type="radio" name="unpaved_gravel_condition" data-val="No" value="No">5 - No assessment<br> 
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 
</div>

<br>
<br>


<div class="text-left"><h6>
<b>C1. Is this present in the barangay? <span style="color: blue"> - D. Unpaved Earth</span>
</b></h6></div>  

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="unpaved_earth"  data-val="Yes" value="Yes">Yes<br>
                        <input class="form-check-input" type="radio" name="unpaved_earth"  data-val="No" value="No">No
                       </div> 
                    </div>                                                                                                           
              </div>
          </div>


<div class="unpaved_earth_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>C2. What is the name of the Unpaved Earth # 1?
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="unpaved_earth_name" name="unpaved_earth_name" placeholder="" >
</div>
</div>

<br>                  
<div class="text-left"><h6>
<b>C3. What is the length of the ? (in kms.)
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="unpaved_earth_length" name="unpaved_earth_length" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>C4. Who is maintaining the ?
</b></h6></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                       <input class="form-check-input" type="radio" name="unpaved_earth_maintaining" data-val="No" value="No">1 - Private<br> 
                       <input class="form-check-input" type="radio" name="unpaved_earth_maintaining" data-val="No" value="No">2 - National Government<br> 
                       <input class="form-check-input" type="radio" name="unpaved_earth_maintaining" data-val="No" value="No">3 - Provincial Government<br> 
                       <input class="form-check-input" type="radio" name="unpaved_earth_maintaining" data-val="No" value="No">4 - Municipal/City Government<br> 
                       <input class="form-check-input" type="radio" name="unpaved_earth_maintaining" data-val="No" value="No">5 - Barangay<br> 
                       <input class="form-check-input" type="radio" name="unpaved_earth_maintaining" data-val="Yes" value="Yes">6 - Others, specify<br> 
                       <input class="form-check-input" type="radio" name="unpaved_earth_maintaining" data-val="No" value="No">7 - None<br> 
                       <input class="form-check-input" type="radio" name="unpaved_earth_maintaining" data-val="No" value="No">8 - Don't Know<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 

<div class="RN5_earth_others_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>C4. Others, please specify:
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="RN5_earth_others" name="RN5_earth_others" placeholder="" >
</div>
</div>
</div>

<br>                  
<div class="text-left"><h6>
<b>C5. What is the present condition of the road? (See Codes Below)
</b></h6></div>

<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                       <input class="form-check-input" type="radio" name="unpaved_earth_condition" data-val="No" value="No">1 - Good<br> 
                       <input class="form-check-input" type="radio" name="unpaved_earth_condition" data-val="No" value="No">2 - Fair<br> 
                       <input class="form-check-input" type="radio" name="unpaved_earth_condition" data-val="No" value="No">3 - Poor<br> 
                       <input class="form-check-input" type="radio" name="unpaved_earth_condition" data-val="No" value="No">4 - Bad<br> 
                       <input class="form-check-input" type="radio" name="unpaved_earth_condition" data-val="No" value="No">5 - No assessment<br> 
                       </div> 
                    </div>                                                                                                           
              </div>
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
