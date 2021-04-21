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

    th 
    {
      border-top: 1px solid #dddddd;
      border-bottom: 1px solid #dddddd;
      border-right: 1px solid #dddddd;
    }
    th:first-child
    {
      border-left: 1px solid #dddddd;
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
      <a class="btn btn-outline-warning" id="get_geo_hall"role="button">Get Geopoint here.</a>
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
<h5 class="text-left" style="color: blue">NAME OF PUNONG BARANGAY</h5>
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
    <table  class="dyna_table table table-hover cell-border compact submit_table_1" style="width:100%" >  
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
 <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#add_barangay_personnel">Add Barangay Personnel</button>
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
    
     <table id="table1" class="norm_table cell-border compact" style="width:100%">
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
    <table  class="dyna_table table table-hover cell-border compact  submit_table_2" style="width:100%" >  
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
 <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#add_barangay_list">Add Purok</button>
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
    <table  class="dyna_table table table-hover cell-border compact  submit_table_3" style="width:100%" >  
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
 <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#add_barangay_sitios">Add Sitios</button>
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
    
     <table id="table2" class="norm_table cell-border compact text-left table-hover" style="width:100%">
        <thead>
            <tr>
                <th style="width:40%">Land Classification/Use</th>
                <th style="width:60%">Land area (in sq. m.)<br><i style="font-size: 12px !important; color: red">"Please input "0" if none"</i></th>
               
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

                <td> <br><br> 
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

<br>



<div class="container-fluid">
    
     <table id="table3" class="norm_table cell-border compact table-hover" style="width:100%">
        <thead>
            <tr class="text-center">
                <th wi>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - HEALTH FACILITIES</th>
             
            </tr>
        </thead>

            <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                       <h6>HF1. Does this barangay have atleast one <u>Barangay Health Center?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                    <input class="form-check-input HF" type="radio" name="HF1_pbhc"  data-val="Yes" data-skip="pbhc" value="Yes">Yes<br>
                                    <input class="form-check-input HF" type="radio" name="HF1_pbhc"  data-val="No"  data-skip="pbhc" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>



                    <div class="col-sm skip_no_pbhc" hidden="">
                       <h6 style="padding-bottom: 5px;">HF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                              <select  name="bhc_distance" class="form-control hf2" data-skip="phbc" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>

                              <h6 class="hf2_in_phbc" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_phbc"  name="bhc_distance_in2km" placeholder="Please Specify" hidden="">

                                 
                              <h6 class="hf2_out_phbc" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_phbc"  name="bhc_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>


                    <div class="skip_yes_pbhc container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility" data-facility="Barangay Health Center" data-toggle="modal" data-target="#add_barangay_health_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_garbage_waste" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  

                    <div class="col-sm skip_no_pbhc" hidden>
                      <h6 >HF5. What institution operates the facility?</h6><br><br>
                      <select  name="no_bhc_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>

          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

   <!-- ------------------- 1-->        
         
            <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>HF1. Does this barangay have atleast one <u>Hospital?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_hospital"  data-val="Yes" data-skip="hospital" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_hospital"  data-val="No"  data-skip="hospital" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_hospital" hidden="">
                       <!-- this -->
                       <h6 style="padding-bottom: 5px;">HF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="hospital_distance" class="form-control hf2" data-skip="hospital" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_hospital" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_hospital"  name="hospital_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_hospital" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_hospital"  name="hospital_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_hospital container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility" data-facility="Hospital" data-toggle="modal" data-target="#add_barangay_health_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_health" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_hospital" hidden>
                      <h6>HF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_hospital_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

           <!-- -------2------ -->


           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>HF1. Does this barangay have atleast one <u>Maternity and Child Clinic?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_maternity"  data-val="Yes" data-skip="maternity" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_maternity"  data-val="No"  data-skip="maternity" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_maternity" hidden="">
                       <!-- this -->
                       <h6 style="padding-bottom: 5px;">HF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="maternity_distance" class="form-control hf2" data-skip="maternity" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_maternity" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_maternity"  name="maternity_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_maternity" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_maternity"  name="maternity_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_maternity container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility" data-facility="Maternity and Child Clinic" data-toggle="modal" data-target="#add_barangay_health_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_health" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_maternity" hidden>
                      <h6>HF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_maternity_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>


<!-- --------3--------- -->
 <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>HF1. Does this barangay have atleast one <u>Private Medical Clinic?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_pclinic"  data-val="Yes" data-skip="pclinic" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_pclinic"  data-val="No"  data-skip="pclinic" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_pclinic" hidden="">
                       <!-- this -->
                       <h6 style="padding-bottom: 5px;">HF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="pclinic_distance" class="form-control hf2" data-skip="pclinic" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_pclinic" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_pclinic"  name="pclinic_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_pclinic" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_pclinic"  name="pclinic_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_pclinic container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility" data-facility="Private Medical Clinic" data-toggle="modal" data-target="#add_barangay_health_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_health" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_pclinic" hidden>
                      <h6>HF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_pclinic_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>


<!-- --------4--------- -->

<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>HF1. Does this barangay have atleast one <u>Botika ng Barangay?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_botikab"  data-val="Yes" data-skip="botikab" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_botikab"  data-val="No"  data-skip="botikab" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_botikab" hidden="">
                       <!-- this -->
                       <h6 style="padding-bottom: 5px;">HF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="botikab_distance" class="form-control hf2" data-skip="botikab" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_botikab" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_botikab"  name="botikab_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_botikab" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_botikab"  name="botikab_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_botikab container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility" data-facility="Botika ng Barangay" data-toggle="modal" data-target="#add_barangay_health_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_health" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_botikab" hidden>
                      <h6>HF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_botikab_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>


<!-- --------5--------- -->

<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>HF1. Does this barangay have atleast one <u>Botika ng Bayan?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_baybotika"  data-val="Yes" data-skip="baybotika" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_baybotika"  data-val="No"  data-skip="baybotika" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_baybotika" hidden="">
                       <!-- this -->
                       <h6 style="padding-bottom: 5px;">HF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="baybotika_distance" class="form-control hf2" data-skip="baybotika" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_baybotika" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_baybotika"  name="baybotika_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_baybotika" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_baybotika"  name="baybotika_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_baybotika container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility" data-facility="Botika ng Bayan" data-toggle="modal" data-target="#add_barangay_health_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_health" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_baybotika" hidden>
                      <h6>HF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_baybotika_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>


<!-- --------6--------- -->

<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>HF1. Does this barangay have atleast one <u>Dental clinic?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_dental"  data-val="Yes" data-skip="dental" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_dental"  data-val="No"  data-skip="dental" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_dental" hidden="">
                       <!-- this -->
                       <h6 style="padding-bottom: 5px;">HF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="dental_distance" class="form-control hf2" data-skip="dental" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_dental" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_dental"  name="dental_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_dental" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_dental"  name="dental_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_dental container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility" data-facility="Dental Clinic" data-toggle="modal" data-target="#add_barangay_health_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_health" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_dental" hidden>
                      <h6>HF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_dental_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>


<!-- --------7--------- -->

<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>HF1. Does this barangay have atleast one <u>COVID-19 Quarantine / Isolation Facility?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_covid19iso"  data-val="Yes" data-skip="covid19iso" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_covid19iso"  data-val="No"  data-skip="covid19iso" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_covid19iso" hidden="">
                       <!-- this -->
                       <h6 style="padding-bottom: 5px;">HF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="covid19iso_distance" class="form-control hf2" data-skip="covid19iso" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_covid19iso" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_covid19iso"  name="covid19iso_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_covid19iso" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_covid19iso"  name="covid19iso_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_covid19iso container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility" data-facility="COVID-19 Quarantine / Isolation Facility" data-toggle="modal" data-target="#add_barangay_health_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_health" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_covid19iso" hidden>
                      <h6>HF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_covid19iso_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>


<!-- --------8--------- -->
<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>HF1. Does this barangay have atleast one <u>COVID-19 Testing Center?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_covid19testingc"  data-val="Yes" data-skip="covid19testingc" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_covid19testingc"  data-val="No"  data-skip="covid19testingc" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_covid19testingc" hidden="">
                       <!-- this -->
                       <h6 style="padding-bottom: 5px;">HF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="covid19testingc_distance" class="form-control hf2" data-skip="covid19testingc" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_covid19testingc" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_covid19testingc"  name="covid19testingc_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_covid19testingc" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_covid19testingc"  name="covid19testingc_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_covid19testingc container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility" data-facility="COVID-19 Testing Center" data-toggle="modal" data-target="#add_barangay_health_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_health" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_covid19testingc" hidden>
                      <h6>HF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_covid19testingc_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>


<!-- --------9--------- -->
<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>HF1. Does this barangay have atleast one <u>Habilitation facility?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_habilitation"  data-val="Yes" data-skip="habilitation" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_habilitation"  data-val="No"  data-skip="habilitation" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_habilitation" hidden="">
                       <!-- this -->
                       <h6 style="padding-bottom: 5px;">HF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="habilitation_distance" class="form-control hf2" data-skip="habilitation" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_habilitation" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_habilitation"  name="habilitation_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_habilitation" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_habilitation"  name="habilitation_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_habilitation container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility" data-facility="Habilitation facility" data-toggle="modal" data-target="#add_barangay_health_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_health" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_habilitation" hidden>
                      <h6>HF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_habilitation_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>


<!-- --------10--------- -->
  <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>HF1. Does this barangay have atleast one <u>Rehabilitation Center?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_rehabilitation"  data-val="Yes" data-skip="rehabilitation" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_rehabilitation"  data-val="No"  data-skip="rehabilitation" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_rehabilitation" hidden="">
                       <!-- this -->
                       <h6 style="padding-bottom: 5px;">HF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="rehabilitation_distance" class="form-control hf2" data-skip="rehabilitation" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_rehabilitation" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_rehabilitation"  name="rehabilitation_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_rehabilitation" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_rehabilitation"  name="rehabilitation_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_rehabilitation container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility" data-facility="Rehabilitation Center" data-toggle="modal" data-target="#add_barangay_health_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_health" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_rehabilitation" hidden>
                      <h6>HF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_rehabilitation_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>


<!-- --------11--------- -->
<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>HF1. Does this barangay have <u>other health facility?</u> Please specify</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_other"  data-val="Yes" data-skip="other" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="HF1_other"  data-val="No"  data-skip="other" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                   

                     <!-- this -->
                    <div class="skip_yes_other container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility" data-facility="Other Facilities" data-toggle="modal" data-target="#add_barangay_health_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_health" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                  

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>


<!-- --------12--------- -->

      </table>
    </div>


 
<hr>

<br>
<i style="color: green" class="">Now, I would like to talk about the education facilities in the barangay.</i><br><br>




<div class="container-fluid">
    
     <table id="table5" class="norm_table cell-border compact table-hover" style="width:100%">
        <thead>
            <tr class="text-center">
                <th wi>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - EDUCATION FACILITIES</th>
             
            </tr>
        </thead>

          <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>EF1. Does this barangay have atleast one <u>Day care center?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_daycc"  data-val="Yes" data-skip="daycc" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_daycc"  data-val="No"  data-skip="daycc" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_daycc" hidden="">
                       <!-- this -->
                       <h6 style="padding-bottom: 5px;">EF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="daycc_distance" class="form-control hf2" data-skip="daycc" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_daycc" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_daycc"  name="daycc_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_daycc" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_daycc"  name="daycc_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_daycc container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_educ" data-facility="Day Care Center" data-toggle="modal" data-target="#add_barangay_education_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_education" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_daycc" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_daycc_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------1 E Facility--- -->

           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>EF1. Does this barangay have atleast one <u>College/University?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_college"  data-val="Yes" data-skip="college" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_college"  data-val="No"  data-skip="college" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_college" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">EF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="college_distance" class="form-control hf2" data-skip="college" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_college" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_college"  name="college_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_college" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_college"  name="college_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_college container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_educ" data-facility="College/University" data-toggle="modal" data-target="#add_barangay_education_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_education" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_college" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_college_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------2 E Facility--- -->

           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>EF1. Does this barangay have atleast one <u>Senior High School?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_seniorhigh"  data-val="Yes" data-skip="seniorhigh" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_seniorhigh"  data-val="No"  data-skip="seniorhigh" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_seniorhigh" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">EF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="seniorhigh_distance" class="form-control hf2" data-skip="seniorhigh" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_seniorhigh" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_seniorhigh"  name="seniorhigh_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_seniorhigh" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_seniorhigh"  name="seniorhigh_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_seniorhigh container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_educ" data-facility="Senior High School" data-toggle="modal" data-target="#add_barangay_education_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_education" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_seniorhigh" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_seniorhigh_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------3 E Facility--- -->

             <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>EF1. Does this barangay have atleast one <u>Junior High School?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_juniorhigh"  data-val="Yes" data-skip="juniorhigh" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_juniorhigh"  data-val="No"  data-skip="juniorhigh" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_juniorhigh" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">EF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="juniorhigh_distance" class="form-control hf2" data-skip="juniorhigh" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_juniorhigh" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_juniorhigh"  name="juniorhigh_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_juniorhigh" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_juniorhigh"  name="juniorhigh_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_juniorhigh container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_educ" data-facility="Junior High School" data-toggle="modal" data-target="#add_barangay_education_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_education" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_juniorhigh" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_juniorhigh_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------4 E Facility--- -->

            <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>EF1. Does this barangay have atleast one <u>Elementary School?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_elem"  data-val="Yes" data-skip="elem" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_elem"  data-val="No"  data-skip="elem" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_elem" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">EF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="elem_distance" class="form-control hf2" data-skip="elem" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_elem" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_elem"  name="elem_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_elem" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_elem"  name="elem_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_elem container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_educ" data-facility="Elementary School" data-toggle="modal" data-target="#add_barangay_education_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_education" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_elem" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_elem_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------5 E Facility--- -->
           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>EF1. Does this barangay have atleast one <u>Preschool?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_preschool"  data-val="Yes" data-skip="preschool" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_preschool"  data-val="No"  data-skip="preschool" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_preschool" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">EF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="preschool_distance" class="form-control hf2" data-skip="preschool" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_preschool" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_preschool"  name="preschool_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_preschool" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_preschool"  name="preschool_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_preschool container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_educ" data-facility="Preschool" data-toggle="modal" data-target="#add_barangay_education_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_education" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_preschool" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_preschool_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------6 E Facility--- -->
           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>EF1. Does this barangay have atleast one <u>SPED school/center?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_sped"  data-val="Yes" data-skip="sped" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_sped"  data-val="No"  data-skip="sped" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_sped" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">EF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="sped_distance" class="form-control hf2" data-skip="sped" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_sped" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_sped"  name="sped_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_sped" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_sped"  name="sped_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_sped container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_educ" data-facility="SPED School/Center" data-toggle="modal" data-target="#add_barangay_education_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_education" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_sped" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_sped_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------7 E Facility--- -->
           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>EF1. Does this barangay have atleast one <u>TVET Institution/Training Institute?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_tvet"  data-val="Yes" data-skip="tvet" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_tvet"  data-val="No"  data-skip="tvet" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_tvet" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">EF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="tvet_distance" class="form-control hf2" data-skip="tvet" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_tvet" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_tvet"  name="tvet_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_tvet" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_tvet"  name="tvet_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_tvet container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_educ" data-facility="TVET Institution/Training Institute" data-toggle="modal" data-target="#add_barangay_education_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_education" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_tvet" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_tvet_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------8 E Facility--- -->
           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>EF1. Does this barangay have atleast one <u>Other Education Facility?</u> Please Specify</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_other_ef"  data-val="Yes" data-skip="other_ef" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="EF1_other_ef"  data-val="No"  data-skip="other_ef" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                  

                     <!-- this -->
                    <div class="skip_yes_other_ef container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_educ" data-facility="Other Education Facility" data-toggle="modal" data-target="#add_barangay_education_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_education" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                                          
                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------9 E Facility--- -->


      </table>
</div> <!-- ---END OF Education Facilities Div Container Fluid-- -->

<hr>

<br>
<i style="color: green" class="">Now, I would like to talk about the service facilities in the barangay.</i><br><br>

<div class="container-fluid">
    
     <table id="table7" class="norm_table cell-border compact table-hover" style="width:100%">
        <thead>
            <tr class="text-center">
                <th wi>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - SERVICE FACILITIES</th>
             
            </tr>
        </thead>


        <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>SF1. Does this barangay have atleast one <u>Multi-purpose Hall?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_multi"  data-val="Yes" data-skip="multi" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_multi"  data-val="No"  data-skip="multi" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_multi" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">SF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="multi_distance" class="form-control hf2" data-skip="multi" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_multi" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_multi"  name="multi_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_multi" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_multi"  name="multi_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_multi container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_service" data-facility="Multi-Purpose Hall" data-toggle="modal" data-target="#add_barangay_service_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_service" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_multi" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_multi_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------1 Service Facility--- -->
           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>SF1. Does this barangay have atleast one <u>Police Station?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_police"  data-val="Yes" data-skip="police" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_police"  data-val="No"  data-skip="police" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_police" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">SF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="police_distance" class="form-control hf2" data-skip="police" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_police" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_police"  name="police_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_police" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_police"  name="police_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_police container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_service" data-facility="Police Station" data-toggle="modal" data-target="#add_barangay_service_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_service" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_police" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_police_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------2 Service Facility--- -->
           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>SF1. Does this barangay have atleast one <u>Women's crisis center?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_wcc"  data-val="Yes" data-skip="wcc" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_wcc"  data-val="No"  data-skip="wcc" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_wcc" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">SF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="wcc_distance" class="form-control hf2" data-skip="wcc" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_wcc" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_wcc"  name="wcc_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_wcc" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_wcc"  name="wcc_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_wcc container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_service" data-facility="Women's crisis center" data-toggle="modal" data-target="#add_barangay_service_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_service" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_wcc" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_wcc_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------3 Service Facility--- -->
           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>SF1. Does this barangay have atleast one <u>Bank?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_bank"  data-val="Yes" data-skip="bank" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_bank"  data-val="No"  data-skip="bank" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_bank" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">SF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="bank_distance" class="form-control hf2" data-skip="bank" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_bank" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_bank"  name="bank_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_bank" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_bank"  name="bank_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_bank container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_service" data-facility="Bank" data-toggle="modal" data-target="#add_barangay_service_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_service" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_bank" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_bank_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------4 Service Facility--- -->
            <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>SF1. Does this barangay have atleast one <u>Fire Station?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_fire_station"  data-val="Yes" data-skip="fire_station" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_fire_station"  data-val="No"  data-skip="fire_station" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_fire_station" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">SF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="fire_station_distance" class="form-control hf2" data-skip="fire_station" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_fire_station" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_fire_station"  name="fire_station_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_fire_station" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_fire_station"  name="fire_station_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_fire_station container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_service" data-facility="Fire Station" data-toggle="modal" data-target="#add_barangay_service_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_service" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_fire_station" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_fire_station_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------5 Service Facility--- -->
           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>SF1. Does this barangay have atleast one <u>Public plaza/garden/park/sports facility (gymnasium, court, etc)?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_plazas"  data-val="Yes" data-skip="plazas" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_plazas"  data-val="No"  data-skip="plazas" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_plazas" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">SF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="plazas_distance" class="form-control hf2" data-skip="plazas" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_plazas" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_plazas"  name="plazas_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_plazas" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_plazas"  name="plazas_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_plazas container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_service" data-facility="Parks,Gymnasium, etc." data-toggle="modal" data-target="#add_barangay_service_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_service" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_plazas" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_plazas_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------6 Service Facility--- -->
           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>SF1. Does this barangay have atleast one <u>Go Negosyo Center?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_negosyo"  data-val="Yes" data-skip="negosyo" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_negosyo"  data-val="No"  data-skip="negosyo" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_negosyo" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">SF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="negosyo_distance" class="form-control hf2" data-skip="negosyo" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_negosyo" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_negosyo"  name="negosyo_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_negosyo" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_negosyo"  name="negosyo_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_negosyo container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_service" data-facility="Go Negosyo Center" data-toggle="modal" data-target="#add_barangay_service_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_service" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_negosyo" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_negosyo_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------7 Service Facility--- -->
           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>SF1. Does this barangay have atleast one <u>Persons with Disabilities Affairs Office?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_pwd"  data-val="Yes" data-skip="pwd" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_pwd"  data-val="No"  data-skip="pwd" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_pwd" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">SF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="pwd_distance" class="form-control hf2" data-skip="pwd" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_pwd" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_pwd"  name="pwd_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_pwd" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_pwd"  name="pwd_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_pwd container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_service" data-facility="PWD Affairs Office" data-toggle="modal" data-target="#add_barangay_service_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_service" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_pwd" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_pwd_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------8 Service Facility--- -->
           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>SF1. Does this barangay have atleast one <u>Office of Senior Citizens Affairs?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_osc_affairs"  data-val="Yes" data-skip="osc_affairs" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_osc_affairs"  data-val="No"  data-skip="osc_affairs" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_osc_affairs" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">SF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="osc_affairs_distance" class="form-control hf2" data-skip="osc_affairs" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_osc_affairs" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_osc_affairs"  name="osc_affairs_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_osc_affairs" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_osc_affairs"  name="osc_affairs_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_osc_affairs container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_service" data-facility="Office of Senior Citizen" data-toggle="modal" data-target="#add_barangay_service_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_service" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_osc_affairs" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_osc_affairs_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------9 Service Facility--- -->
           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>SF1. Does this barangay have atleast one <u>Local Council for the Protection of Children Office?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_lcpc_office"  data-val="Yes" data-skip="lcpc_office" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_lcpc_office"  data-val="No"  data-skip="lcpc_office" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_lcpc_office" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">SF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="lcpc_office_distance" class="form-control hf2" data-skip="lcpc_office" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_lcpc_office" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_lcpc_office"  name="lcpc_office_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_lcpc_office" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_lcpc_office"  name="lcpc_office_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_lcpc_office container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_service" data-facility="Local Council for the Protection of Children" data-toggle="modal" data-target="#add_barangay_service_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_service" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_lcpc_office" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_lcpc_office_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------10 Service Facility--- -->
           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>SF1. Does this barangay have atleast one <u>Cemetery?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_cemetery"  data-val="Yes" data-skip="cemetery" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_cemetery"  data-val="No"  data-skip="cemetery" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_cemetery" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">SF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="cemetery_distance" class="form-control hf2" data-skip="cemetery" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_cemetery" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_cemetery"  name="cemetery_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_cemetery" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_cemetery"  name="cemetery_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_cemetery container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_service" data-facility="Cemetery" data-toggle="modal" data-target="#add_barangay_service_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_service" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_cemetery" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_cemetery_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------11 Service Facility--- -->
            <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>SF1. Does this barangay have atleast one <u>Library?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_library"  data-val="Yes" data-skip="library" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_library"  data-val="No"  data-skip="library" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_library" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">SF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="library_distance" class="form-control hf2" data-skip="library" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_library" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_library"  name="library_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_library" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_library"  name="library_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_library container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_service" data-facility="Library" data-toggle="modal" data-target="#add_barangay_service_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_service" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_library" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_library_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------12 Service Facility--- -->
           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>SF1. Does this barangay have atleast one <u>Post office or postal service?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_postal"  data-val="Yes" data-skip="postal" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_postal"  data-val="No"  data-skip="postal" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                     <!-- this -->
                    <div class="col-sm skip_no_postal" hidden="">
                       
                       <h6 style="padding-bottom: 5px;">SF2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                               <!-- this name -->
                              <select  name="postal_distance" class="form-control hf2" data-skip="postal" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                               <!-- this +name-->
                              <h6 class="hf2_in_postal" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6>
                                 <input type="text" class="form-control hf2_in_postal"  name="postal_distance_in2km" placeholder="Please Specify" hidden="">

                              <!-- this +name-->  
                              <h6 class="hf2_out_postal" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY PROV CITY/MUN</h6> 
                                 <input type="text" class="form-control hf2_out_postal"  name="postal_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                     <!-- this -->
                    <div class="skip_yes_postal container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_service" data-facility="Postal Service" data-toggle="modal" data-target="#add_barangay_service_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_service" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                     <!-- this -->
                    <div class="col-sm skip_no_postal" hidden>
                      <h6>EF5. What institution operates the facility?</h6><br><br>
                       <!-- this name -->
                      <select  name="no_postal_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------13 Service Facility--- -->
           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>SF1. Does this barangay have <u>other service facility?</u> Please specify</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_sf1_other"  data-val="Yes" data-skip="sf1_other" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="SF1_sf1_other"  data-val="No"  data-skip="sf1_other" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_sf1_other container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_service" data-facility="Other Service Facility" data-toggle="modal" data-target="#add_barangay_service_facilities">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_service" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- -------14 Service Facility--- -->
          
          
      </table>
  </div> <!-- ---END OF Service Facilities Div Container Fluid-- -->
          
       <hr>


 <br>
<i style="color: green" class="">Now, I would like to talk about if the barangay have airport and seaport.</i><br><br>

<div class="container-fluid">
    
     <table id="table8" class="norm_table cell-border compact table-hover" style="width:100%">
        <thead>
            <tr class="text-center">
                <th wi>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - X. TRANSPORT FACILITY</th>
             
            </tr>
        </thead>
        <!-- ----------------BREAK-------- -->


        <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>PTA. Is there a <u>seaport</u> located in the barangay?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="PTA_pta_seaport"  data-val="Yes" data-skip="pta_seaport" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="PTA_pta_seaport"  data-val="No"  data-skip="pta_seaport" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_pta_seaport container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_transport" data-facility="Seaport" data-toggle="modal" data-target="#add_barangay_transport_facility">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_transport" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr> 

           <!-------------- TRANSPORT 1 SEAPORT ----------> 



        <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>PTB. Is there a <u>Airport</u> located in the barangay?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="PTA_pta_airport"  data-val="Yes" data-skip="pta_airport" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="PTA_pta_airport"  data-val="No"  data-skip="pta_airport" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_pta_airport container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_transport" data-facility="Airport" data-toggle="modal" data-target="#add_barangay_transport_facility">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_transport" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>










</table>
</div>   <!------ END OF TRANSPORT FACILITY ------>
<hr>










 <br>
<i style="color: green" class="">Now, I would like to talk about the different tourism sites and destination in the barangay.</i><br><br>

<div class="container-fluid">
    
     <table id="table9" class="norm_table cell-border compact table-hover" style="width:100%">
        <thead>
            <tr class="text-center">
                <th wi>IX. TOURISM SITES AND DESTINATION</th>
             
            </tr>
        </thead>
        <!-- ----------------BREAK-------- -->
                     
              <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>T1. Are there any of the <u>tourism sites and destination</u> present in the barangay?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="T1_t1_tourism"  data-val="Yes" data-skip="t1_tourism" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="T1_t1_tourism"  data-val="No"  data-skip="t1_tourism" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_t1_tourism container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                     <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_tourism_sites" data-facility="Tourism Sites" data-toggle="modal" data-target="#add_barangay_tourism_sites">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_tourism_sites" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

   




</table>
</div> <!---- END OF TOURIST END DISTINATATION --->
<hr>











<br>
<i style="color: green" class="">Now, I would like to talk about the different garbage and waste disposal facilities and practices in the barangay.</i><br><br>



<div class="container-fluid">
    
     <table id="table10" class="norm_table cell-border compact table-hover" style="width:100%">
        <thead>
            <tr class="text-center">
                <th wi>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - GARBAGE AND WASTE DISPOSAL </th>
             
            </tr>
        </thead>
        <!-- ----------------BREAK-------- -->

            <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                       <h6>G1. Is the <u>Open Dump Site</u> present in the barangay?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                    <input class="form-check-input HF" type="radio" name="G1_dumpsite"  data-val="Yes" data-skip="dumpsite" value="Yes">Yes<br>
                                    <input class="form-check-input HF" type="radio" name="G1_dumpsite"  data-val="No"  data-skip="dumpsite" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>



                    <div class="col-sm skip_no_dumpsite" hidden="">
                       <h6 style="padding-bottom: 5px;">G2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                              <select  name="dumpsite_distance" class="form-control hf2" data-skip="dumpsite" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>

                              <h6 class="hf2_in_dumpsite" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_dumpsite"  name="dumpsite_distance_in2km" placeholder="Please Specify" hidden="">

                                 
                              <h6 class="hf2_out_dumpsite" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_dumpsite"  name="dumpsite_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>


                    <div class="skip_yes_dumpsite container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_garbage_waste" data-facility="Open Dump Site" data-toggle="modal" data-target="#add_barangay_open_dump_site">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_garbage_waste" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  

                    <div class="col-sm skip_no_dumpsite" hidden>
                      <h6 >G5. What institution operates the facility?</h6><br><br>
                      <select  name="no_dumpsite_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>

          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- ---------Garbage fac 1------- -->



           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>G1. Is the <u>Sanitary Land Fill</u> present in the barangay?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                    <!-- this -->
                                    <input class="form-check-input HF" type="radio" name="G1_landfill"  data-val="Yes" data-skip="landfill" value="Yes">Yes<br>
                                    <!-- this -->
                                    <input class="form-check-input HF" type="radio" name="G1_landfill"  data-val="No"  data-skip="landfill" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                    <!-- this -->
                    <div class="col-sm skip_no_landfill" hidden="">
                       <h6 style="padding-bottom: 5px;">G2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                        <!-- this -->
                              <select  name="landfill_distance" class="form-control hf2" data-skip="landfill" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>

                              <!-- this -->
                              <h6 class="hf2_in_landfill" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_landfill"  name="landfill_distance_in2km" placeholder="Please Specify" hidden="">

                                 <!-- this -->
                              <h6 class="hf2_out_landfill" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_landfill"  name="landfill_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>


                    <!-- this -->
                    <div class="skip_yes_landfill container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                    <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_garbage_waste" data-facility="Sanitary Land Fill" data-toggle="modal" data-target="#add_barangay_open_dump_site">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_garbage_waste" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                    <!-- this -->
                    <div class="col-sm skip_no_landfill" hidden>
                      <h6 >G5. What institution operates the facility?</h6><br><br>
                      <!-- this -->
                      <select  name="no_landfill_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>

          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- ---------Garbage fac 2------- -->
                  



              <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>G1. Is the <u>Compost Pits</u> present in the barangay?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                    <!-- this -->
                                    <input class="form-check-input HF" type="radio" name="G1_compostpits"  data-val="Yes" data-skip="compostpits" value="Yes">Yes<br>
                                    <!-- this -->
                                    <input class="form-check-input HF" type="radio" name="G1_compostpits"  data-val="No"  data-skip="compostpits" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                    <!-- this -->
                    <div class="col-sm skip_no_compostpits" hidden="">
                       <h6 style="padding-bottom: 5px;">G2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                        <!-- this -->
                              <select  name="compostpits_distance" class="form-control hf2" data-skip="compostpits" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>

                              <!-- this -->
                              <h6 class="hf2_in_compostpits" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_compostpits"  name="compostpits_distance_in2km" placeholder="Please Specify" hidden="">

                                 <!-- this -->
                              <h6 class="hf2_out_compostpits" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_compostpits"  name="compostpits_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>


                    <!-- this -->
                    <div class="skip_yes_compostpits container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                    <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_garbage_waste" data-facility="Compost Pits" data-toggle="modal" data-target="#add_barangay_open_dump_site">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_garbage_waste" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                    <!-- this -->
                    <div class="col-sm skip_no_compostpits" hidden>
                      <h6 >G5. What institution operates the facility?</h6><br><br>
                      <!-- this -->
                      <select  name="no_compostpits_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>

          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- ---------Garbage fac 3------- -->


            
                
              <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>G1. Is the <u>Material Recovery Facility (MRF)</u> present in the barangay?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                    <!-- this -->
                                    <input class="form-check-input HF" type="radio" name="G1_mrfacility"  data-val="Yes" data-skip="mrfacility" value="Yes">Yes<br>
                                    <!-- this -->
                                    <input class="form-check-input HF" type="radio" name="G1_mrfacility"  data-val="No"  data-skip="mrfacility" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                    <!-- this -->
                    <div class="col-sm skip_no_mrfacility" hidden="">
                       <h6 style="padding-bottom: 5px;">G2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                        <!-- this -->
                              <select  name="mrfacility_distance" class="form-control hf2" data-skip="mrfacility" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>

                              <!-- this -->
                              <h6 class="hf2_in_mrfacility" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_mrfacility"  name="mrfacility_distance_in2km" placeholder="Please Specify" hidden="">

                                 <!-- this -->
                              <h6 class="hf2_out_mrfacility" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_mrfacility"  name="mrfacility_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>


                    <!-- this -->
                    <div class="skip_yes_mrfacility container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                    <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_garbage_waste" data-facility="Material Recovery Facility" data-toggle="modal" data-target="#add_barangay_open_dump_site">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_garbage_waste" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                    <!-- this -->
                    <div class="col-sm skip_no_mrfacility" hidden>
                      <h6 >G5. What institution operates the facility?</h6><br><br>
                      <!-- this -->
                      <select  name="no_mrfacility_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>

          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- ---------Garbage fac 4------- -->






           <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>G1. Is the <u>Treatment, storage, and disposal (TSD) facility</u> present in the barangay?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                    <!-- this -->
                                    <input class="form-check-input HF" type="radio" name="G1_tsdfac"  data-val="Yes" data-skip="tsdfacility" value="Yes">Yes<br>
                                    <!-- this -->
                                    <input class="form-check-input HF" type="radio" name="G1_tsdfac"  data-val="No"  data-skip="tsdfacility" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                    <!-- this -->
                    <div class="col-sm skip_no_tsdfacility" hidden="">
                       <h6 style="padding-bottom: 5px;">G2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                        <!-- this -->
                              <select  name="tsdfacility_distance" class="form-control hf2" data-skip="tsdfacility" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>

                              <!-- this -->
                              <h6 class="hf2_in_tsdfacility" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_tsdfacility"  name="tsdfacility_distance_in2km" placeholder="Please Specify" hidden="">

                                 <!-- this -->
                              <h6 class="hf2_out_tsdfacility" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_tsdfacility"  name="tsdfacility_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>


                    <!-- this -->
                    <div class="skip_yes_tsdfacility container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                    <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_garbage_waste" data-facility="TSD Facility" data-toggle="modal" data-target="#add_barangay_open_dump_site">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_garbage_waste" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                    <!-- this -->
                    <div class="col-sm skip_no_tsdfacility" hidden>
                      <h6 >G5. What institution operates the facility?</h6><br><br>
                      <!-- this -->
                      <select  name="no_tsdfacility_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>

          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

     <!-- Garbage  fac 5 -->




          <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>G1. Is the <u>Waste-to-energy facility</u> present in the barangay?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                    <!-- this -->
                                    <input class="form-check-input HF" type="radio" name="G1_wtefacility"  data-val="Yes" data-skip="wtefacility" value="Yes">Yes<br>
                                    <!-- this -->
                                    <input class="form-check-input HF" type="radio" name="G1_wtefacility"  data-val="No"  data-skip="wtefacility" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                    <!-- this -->
                    <div class="col-sm skip_no_wtefacility" hidden="">
                       <h6 style="padding-bottom: 5px;">G2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                        <!-- this -->
                              <select  name="wtefacility_distance" class="form-control hf2" data-skip="wtefacility" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>

                              <!-- this -->
                              <h6 class="hf2_in_wtefacility" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_wtefacility"  name="wtefacility_distance_in2km" placeholder="Please Specify" hidden="">

                                 <!-- this -->
                              <h6 class="hf2_out_wtefacility" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_wtefacility"  name="wte_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>


                    <!-- this -->
                    <div class="skip_yes_wtefacility container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                    <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_garbage_waste" data-facility="Waste to Energy Facility" data-toggle="modal" data-target="#add_barangay_open_dump_site">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_garbage_waste" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                    <!-- this -->
                    <div class="col-sm skip_no_wtefacility" hidden>
                      <h6 >G5. What institution operates the facility?</h6><br><br>
                      <!-- this -->
                      <select  name="no_wtefacility_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>

          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

     <!-- Garbage  fac 6 -->




       <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>G1. Is the <u>Sewage treatment plant facility</u> present in the barangay?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                    <!-- this -->
                                    <input class="form-check-input HF" type="radio" name="G1_sewagefacility"  data-val="Yes" data-skip="sewagefacility" value="Yes">Yes<br>
                                    <!-- this -->
                                    <input class="form-check-input HF" type="radio" name="G1_sewagefacility"  data-val="No"  data-skip="sewagefacility" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                    <!-- this -->
                    <div class="col-sm skip_no_sewagefacility" hidden="">
                       <h6 style="padding-bottom: 5px;">G2. What is the distance of the Barangay Hall to the nearest facility?</h6> <br>
                        <!-- this -->
                              <select  name="sewagefacility_distance" class="form-control hf2" data-skip="sewagefacility" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>

                              <!-- this -->
                              <h6 class="hf2_in_sewagefacility" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_sewagefacility"  name="sewagefacility_distance_in2km" placeholder="Please Specify" hidden="">

                                 <!-- this -->
                              <h6 class="hf2_out_sewagefacility" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_sewagefacility"  name="sewage_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>


                    <!-- this -->
                    <div class="skip_yes_sewagefacility container-fluid" hidden="">
                    
                                  <div class="container-fluid">
                                    <!-- this -->
                                 <div class="text-center"><button type="button" class="btn btn-outline-warning pass_data_facility_garbage_waste" data-facility="Sewage Treatment Plant Facility" data-toggle="modal" data-target="#add_barangay_open_dump_site">Add Facility</button></div><br>
                                  
                                       <table  class="dyna_table table table-hover cell-border compact submit_table_barangay_fac_garbage_waste" style="width:100%" >  
                                            <thead class="">
                                              <tr> 
                                                <th style="text-align: center;" class="text-center " width="">Facility Type</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Name</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Address</th>
                                                <th style="text-align: center;" class="text-center " width="">Facility Operator</th>
                                               <!--  <th style="text-align: center;" class="text-center " width="">EA</th>
                                                <th style="text-align: center;" class="text-center " width="">BSN</th>
                                                <th style="text-align: center;" class="text-center " width="">FSN</th> -->
                                                <th style="text-align: center;" class="text-center " width="">-</th>
                                                
                                           
                                              </tr>
                                            </thead>
                                          </table>
                                      
                                  </div>
                          <br>
                    </div>

                  
                    <!-- this -->
                    <div class="col-sm skip_no_sewagefacility" hidden>
                      <h6 >G5. What institution operates the facility?</h6><br><br>
                      <!-- this -->
                      <select  name="no_sewagefacility_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>
                      <br>
                    </div>

          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

     <!-- Garbage  fac 7 -->



</table>
</div>

<br>
<br>

<div class="container-fluid">
    
     <table id="table11" class="norm_table cell-border compact table-hover" style="width:100%">
        <thead>
            <tr class="text-center">
                <th wi>TYPE OF WASTE COLLECTION EQUIPMENT</th>
             
            </tr>
        </thead>


        
         <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>A. Collection Trucks?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="collection_trucks"  data-val="Yes" data-skip="a_collection_trucks" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="collection_trucks"  data-val="No"  data-skip="a_collection_trucks" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_a_collection_trucks container-fluid" hidden="">
                      <div class="text-left"><h6>
                 <b>WD2. How many units are owned and are being used by the barangay?</b>
                      </h6></div>  
 
                    <div class="form-group row">
               <div class="col-sm-3">
               <input type="number" class="form-control" id="collection_trucks_count" name="collection_trucks_count" placeholder="">
               </div> 
               </div>
               </div>

               
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- WASTE COLLECTION EQUIPMENT 1 -->


     
         <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>B. Waste Collection Bins?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="collection_bins"  data-val="Yes" data-skip="b_collection_bins" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="collection_bins"  data-val="No"  data-skip="b_collection_bins" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_b_collection_bins container-fluid" hidden="">
                      <div class="text-left"><h6>
                 <b>WD2. How many units are owned and are being used by the barangay?</b>
                      </h6></div>  
 
                    <div class="form-group row">
               <div class="col-sm-3">
               <input type="number" class="form-control" id="collection_bins_count" name="collection_bins_count" placeholder="">
               </div> 
               </div>
               </div>

               
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- WASTE COLLECTION EQUIPMENT 2 -->



         <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>C. Incinerator?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="collection_incinerator"  data-val="Yes" data-skip="c_collection_incinerator" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="collection_incinerator"  data-val="No"  data-skip="c_collection_incinerator" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_c_collection_incinerator container-fluid" hidden="">
                      <div class="text-left"><h6>
                 <b>WD2. How many units are owned and are being used by the barangay?</b>
                      </h6></div>  
 
                    <div class="form-group row">
               <div class="col-sm-3">
               <input type="number" class="form-control" id="collection_incinerator_count" name="collection_incinerator_count" placeholder="">
               </div> 
               </div>
               </div>

               
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- WASTE COLLECTION EQUIPMENT 3 -->




         <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>D. Others, Specify</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="collection_others"  data-val="Yes" data-skip="d_collection_others" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="collection_others"  data-val="No"  data-skip="d_collection_others" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_d_collection_others container-fluid" hidden="">
                        

                        <br>                  
                        <div class="text-left"><h6>
                        <b>Please Specify:
                        </b></h6></div>   

                        <div class="form-group row">
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="collection_others_specify" name="collection_others_specify" placeholder="" >
                         </div>
                         </div>


                      <div class="text-left"><h6>
                 <b>WD2. How many units are owned and are being used by the barangay?</b>
                      </h6></div>  
 
                    <div class="form-group row">
               <div class="col-sm-3">
               <input type="number" class="form-control" id="collection_others_count" name="collection_others_count" placeholder="">
               </div> 
               </div>
               </div>

               
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- WASTE COLLECTION EQUIPMENT 4 -->




    <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>WD3. Who collects the garbage from households? <br>
                      <u>A. Biodegradable/compostable?</u></h6> 
                    <div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="collector_biodegradable"  data-val="No" value="MUNICIPAL COLLECTOR">
                                  &nbsp&nbsp A. MUNICIPAL COLLECTOR
                               
                            </label>
                        </div>

                              <div class="row">
                            <label>
                                
                                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="collector_biodegradable"  data-val="No" value="BARANGAY CHAIRMAN">
                                  &nbsp&nbsp  B.  BARANGAY CHAIRMAN
                               
                            </label>
                        </div>
                      </div>
              </div>  

               <div class="container">
               <div class="col-sm-10">
                        <div class="row">
                            <label >
                                
                                   &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="collector_biodegradable"  data-val="No" value="PRIVATE COLLECTOR (ESTABLISHMENT)">
                                   &nbsp&nbsp  C. PRIVATE COLLECTOR (ESTABLISHMENT)
                                 
                            </label>
                        </div>

                            <div class="row">
                            <label>
                                   &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="collector_biodegradable"  data-val="No" value="BOTE DYARYO, WASTE PICKERS OR GARBAGE SCAVENGERS">
                                  &nbsp&nbsp D. "BOTE DYARYO", WASTE PICKERS OR GARBAGE SCAVENGERS
                            </label>

                         </div> 
                          <div class="row">
                            <label>
                                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="collector_biodegradable" data-skip ="collector_biodegradable_spec"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp E. OTHERS (Specify)
                                 
                            </label>

                         </div> 
                         
                         

                      </div>
                      </div> 

                      <br>
                    </div>


                
                     <!-- this -->


        
                                  
                          <br>
                    </div>

<div class="collector_biodegradable_specify_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>Please Specify
</b></h6></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="collector_biodegradable_specify" name="collector_biodegradable_specify" placeholder="" >
</div>
</div>
</div> 



                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
<!-- WASTE COLLECTION 5 --> 



<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>WD3. Who collects the garbage from households? <br>
                      <u>B. Recyclables?</u></h6> 
                    <div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="collector_recyclables"  data-val="No" value="MUNICIPAL COLLECTOR">
                                  &nbsp&nbsp A. MUNICIPAL COLLECTOR
                               
                            </label>
                        </div>

                              <div class="row">
                            <label>
                                
                                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="collector_recyclables"  data-val="No" value="BARANGAY CHAIRMAN">
                                  &nbsp&nbsp  B.  BARANGAY CHAIRMAN
                               
                            </label>
                        </div>
                      </div>
              </div>  

               <div class="container">
               <div class="col-sm-10">
                        <div class="row">
                            <label >
                                
                                   &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="collector_recyclables"  data-val="No" value="PRIVATE COLLECTOR (ESTABLISHMENT)">
                                   &nbsp&nbsp  C. PRIVATE COLLECTOR (ESTABLISHMENT)
                                 
                            </label>
                        </div>

                            <div class="row">
                            <label>
                                   &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="collector_recyclables"  data-val="No" value="BOTE DYARYO, WASTE PICKERS OR GARBAGE SCAVENGERS">
                                  &nbsp&nbsp D. "BOTE DYARYO", WASTE PICKERS OR GARBAGE SCAVENGERS
                            </label>

                         </div> 
                          <div class="row">
                            <label>
                                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="collector_recyclables"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp E. OTHERS (Specify)
                                 
                            </label>

                         </div> 
                         
                         

                      </div>
                      </div> 

                      <br>
                    </div>


                
                     <!-- this -->
                    

               
                                  
                          <br>
                    </div>
 <div class="collector_recyclables_specify_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>Please Specify
</b></h6></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="collector_recyclables_specify" name="collector_recyclables_specify" placeholder="" >
</div>
</div>
</div>      

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
<!-- WASTE COLLECTION 6 -->


<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>WD3. Who collects the garbage from households? <br>
                      <u>C. Residuals (nonhazardous industrial waste)</u></h6> 
                    <div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="collector_residuals"  data-val="No" value="MUNICIPAL COLLECTOR">
                                  &nbsp&nbsp A. MUNICIPAL COLLECTOR
                               
                            </label>
                        </div>

                              <div class="row">
                            <label>
                                
                                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="collector_residuals"  data-val="No" value="BARANGAY CHAIRMAN">
                                  &nbsp&nbsp  B.  BARANGAY CHAIRMAN
                               
                            </label>
                        </div>
                      </div>
              </div>  

               <div class="container">
               <div class="col-sm-10">
                        <div class="row">
                            <label >
                                
                                   &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="collector_residuals"  data-val="No" value="PRIVATE COLLECTOR (ESTABLISHMENT)">
                                   &nbsp&nbsp  C. PRIVATE COLLECTOR (ESTABLISHMENT)
                                 
                            </label>
                        </div>

                            <div class="row">
                            <label>
                                   &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="collector_residuals"  data-val="No" value="BOTE DYARYO, WASTE PICKERS OR GARBAGE SCAVENGERS">
                                  &nbsp&nbsp D. "BOTE DYARYO", WASTE PICKERS OR GARBAGE SCAVENGERS
                            </label>

                         </div> 
                          <div class="row">
                            <label>
                                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="collector_residuals" data-skip="collector_residuals_spec"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp E. OTHERS (Specify)
                                 
                            </label>

                         </div> 
                         
                         

                      </div>
                      </div> 

                      <br>
                    </div>


                
                     <!-- this -->
                  

               
                                  
                          <br>
                    </div>
 <div class="collector_residuals_specify_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>Please Specify
</b></h6></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="collector_residuals_specify" name="collector_residuals_specify" placeholder="" >
</div>
</div>
</div>         

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
<!-- WASTE COLLECTION 6 -->


<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>WD4. How often are garbage collected from households?</h6> 
                   
<div class="container">
              <div class="row">
                    <div class="col text-left">
                      <div class="container">
                       <input class="form-check-input" type="radio" name="collector_how_often_question" data-val="No" value="DAILY">DAILY<br> 
                       <input class="form-check-input" type="radio" name="collector_how_often_question" data-val="No" value="THRICE A WEEK">THRICE A WEEK<br> 
                       <input class="form-check-input" type="radio" name="collector_how_often_question" data-val="No" value="TWICE A WEEK">TWICE A WEEK<br> 
                       <input class="form-check-input" type="radio" name="collector_how_often_question" data-val="No" value="ONCE A WEEK">ONCE A WEEK<br> 
                       <input class="form-check-input" type="radio" name="collector_how_often_question" data-val="Yes" value="OTHERS, SPECIFY">OTHERS, SPECIFY<br>
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 


                
                     <!-- this -->
                  <div class="collector_how_often_question_specify_repeat container-fluid" hidden="">
              
 
                  
                    <br>                  
<div class="text-left"><h6>
<b>Please Specify
</b></h6></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="collector_how_often_question_specify" name="collector_how_often_question_specify" placeholder="" >
</div>
</div>
               </div>

               
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- WASTE COLLECTION 8 -->
       
      
      <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>WD5. Does the barangay still collect garbage from households even if these are not properly segregated?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="collector_properly_segregated"  data-val="Yes"  value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="collector_properly_segregated"  data-val="No"   value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
          
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

<!-- WASTE COLLECTION 9 -->



         <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>WD6. Does the barangay pay the municipal/city/provincial LGU for waste management services?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="collector_payment"  data-val="Yes" data-skip="wd6_collector_payment" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="collector_payment"  data-val="No"  data-skip="wd6_collector_payment" value="No Payment/Fee">No Payment/Fee
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_wd6_collector_payment container-fluid" hidden="">
                      <div class="text-left"><h6>
                 <b>WD7. How much does the barangay pay for waste management services for the whole year (in Php)??</b>
                      </h6></div>  
 
                    <div class="form-group row">
               <div class="col-sm-3">
               <input type="number" class="form-control" id="collector_amount" name="collector_amount" placeholder="">
               </div> 
               </div>
               </div>

               
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

           <!-- WASTE COLLECTION 10 -->










</table>
</div> <!---- END OF WASTE COLLECTION EQUIPMENT --->
<hr>




<br>
<i style="color: green" class="">Now, I would like to talk about the different mode of transportation in the barangay.</i><br><br>


<div class="container-fluid">
    
     <table id="table12" class="norm_table cell-border compact table-hover" style="width:100%">
        <thead>
            <tr class="text-center">
                <th wi>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - XII. MODE OF TRANSPORTATION</th>
             
            </tr>
        </thead>

             <tr>
              <td class="text-left">
             
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>TF1. Is the following mode of transportation available or in operation in the barangay?</u></h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                    <!-- this -->
                                    <input class="form-check-input HF" type="radio" name="TF1_publictransport1"  data-val="Yes" data-skip="publictranspo" value="Yes">Yes<br>
                                    <!-- this -->
                                    <input class="form-check-input HF" type="radio" name="TF1_publictransport1"  data-val="No"  data-skip="publictranspo" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>



                    <div class="col-sm skip_no_publictranspo" hidden="">
                       <h6 style="padding-bottom: 5px;">TF2. What is the distance of the barangay hall to the nearest public land transport or railroad terminal? (in kms)</h6> <br>
                       <!-- this -->
                              <select  name="publictranspo_distance" class="form-control hf2" data-skip="publictranspo" style="margin-bottom: 15px;">
                                <option value="">Select</option>
                                <option value="WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">WITHIN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)">MORE THAN 2 KMS (INSIDE THE CITY/MUNICIPALITY)</option>
                                <option value="WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</option>
                                <option value="DON'T KNOW">DON'T KNOW</option>                                                  
                              </select>
                              <!-- this -->
                              <h6 class="hf2_in_publictranspo" hidden="">WITHIN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6>
                                 <input type="text" class="form-control hf2_in_publictranspo"  name="publictranspo_distance_in2km" placeholder="Please Specify" hidden="">

                                 <!-- this -->
                              <h6 class="hf2_out_publictranspo" hidden="">MORE THAN 2 KMS (OUTSIDE THE CITY/MUNICIPALITY), SPECIFY</h6> 
                                 <input type="text" class="form-control hf2_out_publictranspo"  name="publictranspo_distance_more2km" placeholder="Please Specify" hidden="">    
                    </div>

                    <!-- this -->
                    <div class="skip_yes_publictranspo container-fluid" hidden="">
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

<br>                  
<div class="text-left"><h6>
<b>L. Other, please specify?
</b></h6></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="other_trans_position" name="other_trans_position" placeholder="" >
</div>
</div>

 
                          <br>
                    </div>

                  

                    <div class="col-sm skip_no_publictranspo" hidden>
                     
                      <br>
                    </div>

          


                  </div>
                </div>

                <hr>

             </td>
         
           </tr>








  </table>
</div> <!---- END OF  MODE OF TRANSPORTATION --->
<hr>


<br>
<i style="color: green" class="">Now, I would like to talk about the different Information and Communications Technology in the barangay.</i><br><br></i><br><br>

<div class="container-fluid">
    
     <table id="table13" class="norm_table cell-border compact table-hover" style="width:100%">
        <thead>
            <tr class="text-center">
                <th wi>INFORMATION AND COMMUNICATIONS TECHNOLOGY</th>
             
            </tr>
        </thead>


        <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>IT1. Is there an available cellphone network signal in the barangay?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="IT1_network_available"  data-val="Yes" data-skip="it1_network_available_q" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="IT1_network_available"  data-val="No"  data-skip="it1_network_available_q" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_it1_network_available_q container-fluid" hidden="">
                      <div class="text-left"><h6>
<b>IT1.1 What is the available cellphone network signal in the barangay?</b>
</h6></div>  
 <!-- CHECKBOX -->
<div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                    &nbsp&nbsp&nbsp&nbsp <input class="form-check-input respo_radio" type="checkbox" name="network_available"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp 2G (E or G)
                               
                            </label>
                        </div>

                              <div class="row">
                            <label>
                                
                                    &nbsp&nbsp&nbsp&nbsp <input class="form-check-input respo_radio" type="checkbox" name="network_available"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp 3G (H or 3G+ or H+)
                               
                            </label>
                        </div>
                      </div>
              </div>  

               <div class="container">
               <div class="col-sm-10">
                        <div class="row">
                            <label >
                                
                                   &nbsp&nbsp&nbsp&nbsp <input class="form-check-input respo_radio" type="checkbox" name="network_available"  data-val="Yes" value="Yes">
                                   &nbsp&nbsp  4G (LTE or 4G+ or LTE-A)
                                 
                            </label>
                        </div>
                      </div>
                    </div>
                  </div>
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

           <!-- ICT 1 --> 




         <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>IT2. Is there an existing telecommunication/cellular tower/s in the barangay?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="IT2_existing_telcom"  data-val="Yes" data-skip="IT_it2_existing_telcom" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="IT2_existing_telcom"  data-val="No"  data-skip="IT_it2_existing_telcom" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_IT_it2_existing_telcom container-fluid" hidden="">
                      <div class="text-left"><h6>
                 <b>IT3. How many are the existing telecommunication/cellular tower/s in the barangay?</b>
                      </h6></div>  
 
                    <div class="form-group row">
               <div class="col-sm-3">
               <input type="number" class="form-control" id="how_many_telcom" name="how_many_telcom" placeholder="">
               </div> 
               </div>
               </div>

               
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

           <!-- ICT 2 -->


        <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>IT4. Is free WiFi available in the barangay?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="IT4_wifi_availability"  data-val="Yes" data-skip="IT4_it4_wifi_availability" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="IT4_wifi_availability"  data-val="No"  data-skip="IT4_it4_wifi_availability" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_IT4_it4_wifi_availability container-fluid" hidden="">
                      <div class="text-left"><h6>
                 <b>IT5. Who provides the free Wi-Fi in the barangay?</b>
                      </h6></div>  
 
                    <div class="container">
                      <div class="row">
                    <div class="col text-left">
                      <div class="container">
                        <input class="form-check-input" type="radio" name="who_provides_wifi"  data-val="Yes" value="PRIVATELY-OWNED">PRIVATELY-OWNED<br>
                        <input class="form-check-input" type="radio" name="who_provides_wifi"  data-val="Yes" value="GOVERNMENTLY-OWNED">GOVERNMENTLY-OWNED
                       </div> 
                    </div>                                                                                                           
              </div>
          </div> 
               </div>

               
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

           <!-- ICT 3 -->


<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>IT6. Which of the following ICT equipment in the barangay can be used by the public for free?</h6> 
                    <div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="ict_equipment_free"  data-val="No" value="TELEPHONES/CELLPHONES">
                                  &nbsp&nbsp TELEPHONES/CELLPHONES
                               
                            </label>
                        </div>

                              <div class="row">
                            <label>
                                
                                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="ict_equipment_free"  data-val="No" value="COMPUTERS (DESKTOP,LAPTOP,TABLET)">
                                  &nbsp&nbsp  COMPUTERS (DESKTOP,LAPTOP,TABLET)
                               
                            </label>
                        </div>
                      </div>
              </div>  

               <div class="container">
               <div class="col-sm-10">
                        <div class="row">
                            <label >
                                
                                   &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="ict_equipment_free"  data-val="No" value="FAX MACHINES">
                                   &nbsp&nbsp  FAX MACHINES
                                 
                            </label>
                        </div>

                            <div class="row">
                            <label>
                                   &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="ict_equipment_free"  data-val="No" value="PRINTERS">
                                  &nbsp&nbsp PRINTERS
                            </label>

                         </div> 
                          <div class="row">
                            <label>
                                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="ict_equipment_free"  data-val="No" value="AUDIO-VISUAL EQUIPMENT (PROJECTOR, MICROPHONE, SPEAKER)">
                                  &nbsp&nbsp AUDIO-VISUAL EQUIPMENT (PROJECTOR, MICROPHONE, SPEAKER)
                            </label>

                         </div> 
                         <div class="row">
                            <label>
                                
                                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="ict_equipment_free"  data-val="Yes" value="Yes">
                                   &nbsp&nbsp OTHERS, SPECIFY
                                 
                            </label>
                        </div> 
                          <div class="row">
                            <label>
                                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="ict_equipment_free"   data-val="No" value="NONE">
                                  &nbsp&nbsp NONE
                            </label>

                         </div> 

                      </div>
                      </div> 

                      <br>
                    </div>


                
                     <!-- this -->

               
                                  
                          
                    </div>
<div class="ict_equipment_free_specify_repeat" hidden=""> 

<br>                  
<div class="text-left"><h6>
<b>Please Specify
</b></h6></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="ict_equipment_free_specify" name="ict_equipment_free_specify" placeholder="" >
</div>
</div>
</div>   

                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

           <!-- ICT 4 -->





       <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>IT7. Are there Fiber Optic Cables installed in the barangay hall?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="fiber_optic_barangay"  data-val="Yes" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="fiber_optic_barangay"  data-val="No"   value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                   

               
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
<!-- ICT 5 -->


 <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>IT8. Does this barangay use computers (desktop, laptop, tablet, etc.) in providing government services such as barangay clearance, community tax certificate, etc.?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="use_ict_in_services"  data-val="Yes" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="use_ict_in_services"  data-val="No"   value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                   

               
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

<!-- ICT 5 -->


<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>IT9. How do residents of the barangay usually fill out their forms for their transactions in the barangay??</h6> 
                    <div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="fillout_forms_system"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp MANUAL ACCOMPLISHMENT OF FORMS
                               
                            </label>
                        </div>

                              <div class="row">
                            <label>
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="fillout_forms_system"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  DIRECT ENCODING TO A COMPUTER BY BARANGAY PERSONNEL
                               
                            </label>
                        </div>
                      </div>
              </div>  
  

               <div class="container">
               <div class="col-sm-10">
                        <div class="row">
                            <label >
                                
                                    &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="fillout_forms_system"  data-val="Yes" value="Yes">
                                   &nbsp&nbsp DIRECT ENCODING TO A COMPUTER BY RESIDENT
                                 
                            </label>
                             <br>
                        </div>

                      </div>
                    </div>
                    <hr>


           </tr>

<!-- ICT 6 -->




<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>IT10. Does this barangay maintain a computerized database?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="barangay_database"  data-val="Yes" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="barangay_database"  data-val="No"   value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                   

               
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- ICT 7 -->



         <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>IT11. Does this barangay have a hired IT Personnel?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="IT11_barangay_it_personnel"  data-val="Yes" data-skip="IT11_it11_barangay_it_personnel" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="IT11_barangay_it_personnel"  data-val="No"  data-skip="IT11_it11_barangay_it_personnel" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_IT11_it11_barangay_it_personnel container-fluid" hidden="">
                      <div class="text-left"><h6>
                 <b>IT12. How many IT personnel are working in the barangay performing IT functions?</b>
                      </h6></div>  
 
                    <div class="form-group row">
               <div class="col-sm-3">
               <input type="number" class="form-control" id="barangay_it_personnel_count" name="barangay_it_personnel_count" placeholder="">
               </div> 
               </div>
               </div>

               
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
<!-- ICT 8 -->

 <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>IT13. Does this barangay have an official website (gov.ph)? (to disseminate news, provide barangay services, etc.)</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="IT13_barangay_official_website"  data-val="Yes" data-skip="IT13_it13_barangay_official_website" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="IT13_barangay_official_website"  data-val="No"  data-skip="IT13_it13_barangay_official_website" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_IT13_it13_barangay_official_website container-fluid" hidden="">
                      <div class="text-left"><h6>
                 <b>IT14. What is the official website URL of the barangay?</b>
                      </h6></div>  
 
                    <div class="form-group row">
                    <div class="col-sm-6">
                   <input type="text" class="form-control" id="barangay_official_website_url" name="barangay_official_website_url" placeholder="" >
                  </div>
                   </div>
               </div>

               
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- ICT 9 -->


 <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>IT15. Does this barangay have a social media account operated by the LGU?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="IT15_barangay_social_media"  data-val="Yes" data-skip="IT15_it15_barangay_social_media" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="IT15_barangay_social_media"  data-val="No"  data-skip="IT15_it15_barangay_social_media" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_IT15_it15_barangay_social_media container-fluid" hidden="">
                      <div class="text-left"><h6>
                 <b>IT16. What is the social media account page URL of the barangay?</b>
                      </h6></div>  
 
                    <div class="form-group row">
                    <div class="col-sm-6">
                   <input type="text" class="form-control" id="barangay_social_media_url" name="barangay_social_media_url" placeholder="" >
                  </div>
                   </div>
               </div>

               
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- ICT 10 -->


 <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>IT17. Do you have specific local strategy on new technologies such as use of social media to disseminate information, online selling and buying of goods, use of online facilities to request services from the barangay, etc?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="IT17_barangay_disseminate_information"  data-val="Yes" data-skip="IT17_it17_barangay_disseminate_information" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="IT17_barangay_disseminate_information"  data-val="No"  data-skip="IT17_it17_barangay_disseminate_information" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_IT17_it17_barangay_disseminate_information container-fluid" hidden="">
                      <div class="text-left"><h6>
                 <b>IT18. Please provide the URL to the document containing the local strategy on new technologies or please attach a photo</b>
                      </h6></div>  
 
                    <br>                  


  <div class="form-group row">
  <div class="col-sm-5">
  <input type="text" class="form-control" id="barangay_disseminate_information_url" name="barangay_disseminate_information_url" placeholder="" >



<br>
<div class="text-left"><h6><b>
IT18.1 Please provide the photo containing the e-government strategy.</b>
</h6></div> 
 

 <h6>IT18.1 Please attach a photo (if any)</h6>
 <input type="file" class="btn btn-outline-secondary" name="file" id="barangay_disseminate_information_image"><button type="button" name="barangay_egovern_information_image" class="btn btn-danger">Upload</button>


<br>
<div class="text-left">
<br>
<h6><b>IT18.2 Please provide the file containing the e-government strategy.
</b></h6></div>


<h6>IT18.2 Please attach a file (printed or electronic copy).</h6>
<input type="file" class="btn btn-outline-secondary" name="file" id="barangay_disseminate_information_file"><button type="button" name="barangay_egovern_information_file" class="btn btn-danger">Upload</button>


</div>
</div>
               </div>

               
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- ICT 11 -->







</table>
</div> <!---- END OF INFORMATION COMMUNICATIONS TECHNOLOGY --->
<hr>








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

<div class="row">
  <div class="float-sm-left">
     <div class="container-fluid" align="left" style="width:100%">
    
     <table id="table6" class="cell-border compact text-left table-hover" style="width:100%">
        <thead>
            <tr>
                <th>Climate-related and <br>geologic events</th>
                <th style="width:40%"><br><i style="font-size: 12px !important; color: red">"Please input "0" if none"</i></th>
               
            </tr>
        </thead>

              <tr>
                <td>typhoon</td>
                <td> <input type="number" class="form-control" name="significant_events_typhoon" placeholder="" ></td>
              </tr>

              <tr>
                <td>flooding</td>
                <td> <input type="number" class="form-control" name="significant_events_flooding" placeholder="" ></td>
              </tr>

              <tr>
                <td>flash flood</td>
                <td> <input type="number" class="form-control" name="significant_events_flash_flood" placeholder="" ></td>
              </tr>

              <tr>
                <td>drought</td>
                <td> <input type="number" class="form-control" name="significant_events_drought" placeholder="" ></td>
              </tr>

              <tr>
                <td>earthquake</td>
                <td> <input type="number" class="form-control" name="significant_events_earthquake" placeholder="" ></td>
              </tr>

              <tr>
                <td>volcanic eruption</td>
                <td> <input type="number" class="form-control" name="significant_events_volcanic_eruption" placeholder="" ></td>
              </tr>

              <tr>
                <td>landslide</td>
                <td> <input type="number" class="form-control" name="significant_events_landslide" placeholder="" ></td>
              </tr>

              <tr>
                <td>tsunami</td>
                <td> <input type="number" class="form-control" name="significant_events_tsunami" placeholder="" ></td>
              </tr>

               <tr>
                <td>forest fire</td>
                <td> <input type="number" class="form-control" name="significant_events_forest_fire" placeholder="" ></td>
              </tr>

     </table>
               
  </div>
    </div>
</div>




<br>
<hr>
<br>
<br>
<h5 class="text-left" style="color: "><b>SIGNIFICANT EVENTS IN THE BARANGAY FOR PAST 3 YEARS - ECONOMIC EVENTS (01 April 2018 to 31 March 2020)</b></h5><br>   


<div class="row">
  <div class="float-sm-left">
     <div class="container-fluid" align="left" style="width:100%">
    
     <table id="table4" class="cell-border compact text-left table-hover" style="width:100%">
        <thead>
            <tr>
                <th>B. Economic Events</th>
                <th style="width:40%"><br><i style="font-size: 12px !important; color: red">"Please input "0" if none"</i></th>
               
            </tr>
        </thead>

              <tr>
                <td>closure of many small firms</td>
                <td> <input type="number" class="form-control" name="significant_events_closure" placeholder="" ></td>
              </tr>

              <tr>
                <td>mass lay-off</td>
                <td> <input type="number" class="form-control" name="significant_events_mass" placeholder="" ></td>
              </tr>

              <tr>
                <td>opening of large firm/s</td>
                <td> <input type="number" class="form-control" name="significant_events_largefirm" placeholder="" ></td>
              </tr>

              <tr>
                <td>opening of many small firm/s</td>
                <td> <input type="number" class="form-control" name="significant_events_smallfirm" placeholder="" ></td>
              </tr>

              <tr>
                <td>opening of shopping malls</td>
                <td> <input type="number" class="form-control" name="significant_events_shoppingmalls" placeholder="" ></td>
              </tr>

              <tr>
                <td>opening of fastfood restaurant/s</td>
                <td> <input type="number" class="form-control" name="significant_events_fastfood" placeholder="" ></td>
              </tr>

              <tr>
                <td>closure of large firms</td>
                <td> <input type="number" class="form-control" name="significant_events_closure_large_firms" placeholder="" ></td>
              </tr>

              </tr>

     </table>
              
  </div>
    </div>
</div>

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
<h5 class="text-left" style="color: "><b>SIGNIFICANT EVENTS IN THE BARANGAY FOR PAST 3 YEARS - HEALTH AND AGRICULTURE-RELATED EVENTS (01 April 2018 to 31 March 2020)</b></h5><br> 


<div class="text-left"><h5>
D. Health and agriculture-related events
</h5></div>

<br>                  
<div class="text-left"><h6>
<b>epidemic
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_epidemic" name="significant_events_epidemic" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>pest infestation
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_pest" name="significant_events_pest" placeholder="" >
</div>
</div> 

<br>                  
<div class="text-left"><h6>
<b>livestock/poultry diseases
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_livestock" name="significant_events_livestock" placeholder="" >
</div>
</div>


<br>                  
<div class="text-left"><h6>
<b>fish kill
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="significant_events_fish" name="significant_events_fish" placeholder="" >
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



<div class="row">
  <div class="float-sm-left">
     <div class="container-fluid" align="left" style="width:100%">
    
     <table id="table18" class="cell-border compact text-left table-hover" style="width:100%">
        <thead>
            <tr>
                <th>Climate-related and <br>geologic events</th>
                <th style="width:40%">Occurence <br><i style="font-size: 12px !important; color: red">"Please input "0" if none"</i></th>
               
            </tr>
        </thead>

              <tr>
                <td>typhoon</td>
                <td> <input type="number" class="form-control" name="significant_events_typhoon2" placeholder="" ></td>
              </tr>

              <tr>
                <td>flooding</td>
                <td> <input type="number" class="form-control" name="significant_events_flooding2" placeholder="" ></td>
              </tr>

              <tr>
                <td>flash flood</td>
                <td> <input type="number" class="form-control" name="significant_events_flash_flood2" placeholder="" ></td>
              </tr>

              <tr>
                <td>drought</td>
                <td> <input type="number" class="form-control" name="significant_events_drought2" placeholder="" ></td>
              </tr>

              <tr>
                <td>earthquake</td>
                <td> <input type="number" class="form-control" name="significant_events_earthquake2" placeholder="" ></td>
              </tr>

              <tr>
                <td>volcanic eruption</td>
                <td> <input type="number" class="form-control" name="significant_events_volcanic_eruption2" placeholder="" ></td>
              </tr>

              <tr>
                <td>landslide</td>
                <td> <input type="number" class="form-control" name="significant_events_landslide2" placeholder="" ></td>
              </tr>

              <tr>
                <td>tsunami</td>
                <td> <input type="number" class="form-control" name="significant_events_tsunami2" placeholder="" ></td>
              </tr>

               <tr>
                <td>forest fire</td>
                <td> <input type="number" class="form-control" name="significant_events_forest_fire2" placeholder="" ></td>
              </tr>



     </table>
    
  </div>
    </div>
</div>
<br>


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

<div class="container-fluid">
    
     <table id="table14" class="norm_table cell-border compact table-hover" style="width:100%">
        <thead>
            <tr class="text-center">
                <th wi>DISASTER PREPAREDNESS</th>
             
            </tr>
        </thead>



<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>DP1. Does the barangay have a written disaster risk reduction and management plan?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="disaster_preparedness_plan"  data-val="Yes"  value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="disaster_preparedness_plan"  data-val="No" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

           <!-- DISASTER PREPAREDNESS 1 -->




<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>DP2. Does the barangay have disaster management committee?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="disaster_preparedness_committee"  data-val="Yes"  value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="disaster_preparedness_committee"  data-val="No" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

           <!-- DISASTER PREPAREDNESS 2 -->


<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>DP3. Does the barangay have a disaster/emergency response team?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="disaster_preparedness_response"  data-val="Yes"  value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="disaster_preparedness_response"  data-val="No" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

           <!-- DISASTER PREPAREDNESS 3 -->


<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>DP4. Do you have organization's plan of succession during an emergency?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="disaster_preparedness_succession"  data-val="Yes"  value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="disaster_preparedness_succession"  data-val="No" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

           <!-- DISASTER PREPAREDNESS 4 -->


  <tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>DP5. Does the barangay have a disaster/emergency hotline?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="disaster_preparedness_hotline"  data-val="Yes" data-skip="disaster_p_hotline" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="disaster_preparedness_hotline"  data-val="No"  data-skip="disaster_p_hotline" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>


                
                     <!-- this -->
                    <div class="skip_yes_disaster_p_hotline container-fluid" hidden="">
                      <div class="text-left"><h6>
                 <b>DP6. What is the barangay's disaster/emergency hotline # 1?</b>
                      </h6></div>  
 
                    <div class="form-group row">
               <div class="col-sm-3">
               <input type="number" class="form-control" id="disaster_preparedness_hotline_contact" name="disaster_preparedness_hotline_contact" placeholder="">
               </div> 
               </div>
               </div>

               
                                  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

           <!-- DISASTER PREPAREDNESS 5 -->


<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>DP7. Do you have disaster preparedness guide for people with disabilities?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="disaster_preparedness_guide"  data-val="Yes"  value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="disaster_preparedness_guide"  data-val="No" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

           <!-- DISASTER PREPAREDNESS 6 -->




<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>DP8. Are you aware of government digital platforms for Disaster Risk Reduction and Climate Change Adaptation (DRR-CCA) that may be used in the formulation of your barangay's DRR-CCA plans?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="disaster_preparedness_awareness"  data-val="Yes"  value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="disaster_preparedness_awareness"  data-val="No" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

           <!-- DISASTER PREPAREDNESS 7 -->














        </table>
</div> <!---- END OF DISASTER PREPAREDNESS--->
<hr>

<br>


<div class="row">
  <div class="float-sm-left">
     <div class="container-fluid" align="left" style="width:100%">
    

<table  id="" class="norm_table cell-border compact text-left table-hover" align="left" style="width:100%">
<tr>
  <thead>
    
     <th>DP9. Does the barangay have a localized <br>early warning system for: &nbsp&nbsp&nbsp&nbsp&nbsp</th>

    <th>Yes</th>
    <th>No</th>
  </thead>
    
   
</tr>
<tr>
    <td>A. TYPHOON</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_typhoon"  data-val="Yes" value="Yes" data-col=""></label></td>
   <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_typhoon"  data-val="No" value="No" data-col=""></label></td> 
</tr>


<tr>
  <td>B. FLOODING</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_flooding"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_flooding"  data-val="No" value="No" data-col=""></label></td>
</tr>


<tr>
    <td>C. DROUGHT</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_drought"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_drought"  data-val="No" value="No" data-col=""></label></td>
</tr>


<tr>
  <td>D. EARTHQUAKE</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_earthquake"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_earthquake"  data-val="No" value="No" data-col=""></label></td>
</tr>


<tr>
  <td>E. VOLCANIC ERUPTION</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_volcanic"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_volcanic"  data-val="No" value="No" data-col=""></label></td>
</tr>



<tr>
  <td>F. LANDSLIDE</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_landslide"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_landslide"  data-val="No" value="Yes" data-col=""></label></td>
</tr>


<tr>
  <td>G. TSUNAMI</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_tsunami"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_tsunami"  data-val="No" value="No" data-col=""></label></td>
</tr>


<tr>
  <td>H. STORM SURGE</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_storm"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_storm"  data-val="No" value="No" data-col=""></label></td>
</tr>

<tr>
  <td>I. FOREST FIRE</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_forest"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_forest"  data-val="No" value="No" data-col=""></label></td>
</tr>



<tr>
  <td>J. FIRE</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_fire"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_fire"  data-val="No" value="No" data-col=""></label></td>
</tr>



<tr>
  <td>K. EPIDEMIC / PANDEMIC</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_epidemic"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_epidemic"  data-val="No" value="No" data-col=""></label></td>
</tr>


<tr>
  <td>L. ARMED CONFLICT</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_armed"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_armed"  data-val="No" value="No" data-col=""></label></td>
</tr>


</table>
</div>

</div>

    </div>
<br>




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
  <div class="float-sm-left">
     <div class="container-fluid" align="left" style="width:100%">
    

<table  id="" class="norm_table cell-border compact text-left table-hover" align="left" style="width:100%">
<tr>
  <thead>
    
     <th>DP10. Does the barangay have a disaster<br> contingency plan for: &nbsp&nbsp&nbsp&nbsp&nbsp</th>

    <th>Yes</th>
    <th>No</th>
  </thead>
    
   
</tr>
<tr>
    <td>A. TYPHOON</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_typhoon_plan"  data-val="Yes" value="Yes" data-col=""></label></td>
   <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_typhoon_plan"  data-val="No" value="No" data-col=""></label></td> 
</tr>


<tr>
  <td>B. FLOODING</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_flooding_plan"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_flooding_plan"  data-val="No" value="No" data-col=""></label></td>
</tr>


<tr>
    <td>C. DROUGHT</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_drought_plan"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_drought_plan"  data-val="No" value="No" data-col=""></label></td>
</tr>


<tr>
  <td>D. EARTHQUAKE</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_earthquake_plan"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_earthquake_plan"  data-val="No" value="No" data-col=""></label></td>
</tr>


<tr>
  <td>E. VOLCANIC ERUPTION</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_volcanic_plan"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_volcanic_plan"  data-val="No" value="No" data-col=""></label></td>
</tr>



<tr>
  <td>F. LANDSLIDE</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_landslide_plan"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_landslide_plan"  data-val="No" value="Yes" data-col=""></label></td>
</tr>


<tr>
  <td>G. TSUNAMI</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_tsunami_plan"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_tsunami_plan"  data-val="No" value="No" data-col=""></label></td>
</tr>


<tr>
  <td>H. STORM SURGE</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_storm_plan"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_storm_plan"  data-val="No" value="No" data-col=""></label></td>
</tr>

<tr>
  <td>I. FOREST FIRE</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_forest_plan"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_forest_plan"  data-val="No" value="No" data-col=""></label></td>
</tr>



<tr>
  <td>J. FIRE</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_fire_plan"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_fire_plan"  data-val="No" value="No" data-col=""></label></td>
</tr>



<tr>
  <td>K. EPIDEMIC / PANDEMIC</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_epidemic_plan"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_epidemic_plan"  data-val="No" value="No" data-col=""></label></td>
</tr>


<tr>
  <td>L. ARMED CONFLICT</td>
    <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_armed_plan"  data-val="Yes" value="Yes" data-col=""></label></td>
  <td><label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="disaster_early_warning_armed_plan"  data-val="No" value="No" data-col=""></label></td>
</tr>


</table>
             
  </div>
    </div>
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



<div class="container-fluid">
    
     <table id="table15" class="norm_table cell-border compact table-hover" style="width:100%">
        <thead>
            <tr class="text-center">
                <th wi>B. SERVICE INSTITUTIONS AND INFRASTRUCTURE - E. DISASTER RISK REDUCTION AND MANAGEMENT</th>
             
            </tr>
        </thead>


<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>DP11. Does the barangay have evacuation map?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="DP11_disaster_evacuation"  data-val="Yes" data-skip="DP11_dp11_disaster_evacuation" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="DP11_disaster_evacuation"  data-val="No"  data-skip="DP11_dp11_disaster_evacuation" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>

 <div class="skip_yes_DP11_dp11_disaster_evacuation container-fluid" hidden="">
                    
<div class="text-left"><h6>
<b>DP12. For what hazards is the evacuation map used?
</b></h6></div>  


<div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use"  data-val="Yes" value="FLOOD">
                                  &nbsp&nbsp FLOOD
                               
                            </label>
                        </div>



                              <div class="row">
                            <label>
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use"  data-val="Yes" value="LANDSLIDE">
                                  &nbsp&nbsp  LANDSLIDE
                               
                            </label>
                        </div> 



                         <div class="row">
                            <label>
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use"  data-val="Yes" value="STORM SURGE">
                                  &nbsp&nbsp STORM SURGE
                               
                            </label>
                        </div>



                         <div class="row">
                            <label>
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use"  data-val="Yes" value="EARTHQUAKE">
                                  &nbsp&nbsp EARTHQUAKE
                               
                            </label>
                        </div>



                         <div class="row">
                            <label>
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use"  data-val="Yes" value="TSUNAMI">
                                  &nbsp&nbsp TSUNAMI
                               
                            </label>
                        </div>



                         <div class="row">
                            <label>
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use"  data-val="Yes" value="VOLCANIC ERUPTION">
                                  &nbsp&nbsp VOLCANIC ERUPTION
                               
                            </label>
                        </div>



                         <div class="row">
                            <label>
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use_specify"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp OTHERS, SPECIFY
                               
                            </label>
                        </div>
                      </div>
              </div>  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
<!-- DRMP 1 -->


<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>DP13. Does the barangay have a hazard map?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="DP13_disaster_evacuation1"  data-val="Yes" data-skip="DP13_dp13_disaster_evacuation1" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="DP13_disaster_evacuation1"  data-val="No"  data-skip="DP13_dp13_disaster_evacuation1" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>

 <div class="skip_yes_DP13_dp13_disaster_evacuation1 container-fluid" hidden="">
                    
<div class="text-left"><h6>
<b>DP14. For what hazards is the hazard map used?
</b></h6></div>  


<div class="container"> 
                    <div class="col-sm-10">
                          <div class="row">
                            <label>
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use1"  data-val="Yes" value="FLOOD">
                                  &nbsp&nbsp FLOOD
                               
                            </label>
                        </div>



                              <div class="row">
                            <label>
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use1"  data-val="Yes" value="LANDSLIDE">
                                  &nbsp&nbsp  LANDSLIDE
                               
                            </label>
                        </div> 



                         <div class="row">
                            <label>
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use1"  data-val="Yes" value="STORM SURGE">
                                  &nbsp&nbsp STORM SURGE
                               
                            </label>
                        </div>



                         <div class="row">
                            <label>
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use1"  data-val="Yes" value="EARTHQUAKE">
                                  &nbsp&nbsp EARTHQUAKE
                               
                            </label>
                        </div>



                         <div class="row">
                            <label>
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use1"  data-val="Yes" value="TSUNAMI">
                                  &nbsp&nbsp TSUNAMI
                               
                            </label>
                        </div>



                         <div class="row">
                            <label>
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use1"  data-val="Yes" value="VOLCANIC ERUPTION
                               ">
                                  &nbsp&nbsp VOLCANIC ERUPTION
                               
                            </label>
                        </div>



                         <div class="row">
                            <label>
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_evacuation_map_use1"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp OTHERS, SPECIFY
                               
                            </label>
                        </div>
                      </div>
              </div>  
                          <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>
           <!-- DISASTER RISK MANAGEMENT 2 -->




<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>DP15. In the past 12 months, did the barangay LGU conduct Disaster preparedness seminars (maybe funded by LGU or Non-Government Agency (NGA))?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="lgu_conduct_seminars"  data-val="Yes"  value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="lgu_conduct_seminars"  data-val="No" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>


<!-- DISASTER RISK MANAGEMENT 3 -->




<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>DP16. In the past 12 months, were there disaster kits provided (maybe funded by LGU or NGA) to the barangay LGU?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="lgu_disaster_kits"  data-val="Yes"  value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="lgu_disaster_kits"  data-val="No" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>


<!-- DISASTER RISK MANAGEMENT 4 -->


<tr>
              <td class="text-left">
              
                
                <div class="">
                  <div class="row">

                    <div class="col-sm">
                      <!-- this -->
                       <h6>DP17. Does the barangay have an evacuation facility?</h6> 
                       <div class="container">
                          <div class="row">
                                <div class="col text-left">
                                  <div class="container">
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="DP17_disaster_evacuation_facility"  data-val="Yes" data-skip="DP17_dp17_disaster_evacuation_facility" value="Yes">Yes<br>
                                     <!-- this name -->
                                    <input class="form-check-input HF" type="radio" name="DP17_disaster_evacuation_facility"  data-val="No"  data-skip="DP17_dp17_disaster_evacuation_facility" value="No">No
                                   </div> 
                                </div>                                                                                                           
                          </div>
                      </div>
                      <br>
                    </div>

 <div class="skip_yes_DP17_dp17_disaster_evacuation_facility container-fluid" hidden="">
                    
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
                  <input class="form-check-input" type="radio" name="disaster_categorize_evacuation_center" data-val="No" value="SCHOOL BUILDING">SCHOOL BUILDING<br>  
                  <input class="form-check-input" type="radio" name="disaster_categorize_evacuation_center" data-val="No" value="DEDICATED EVACUATION CENTER">DEDICATED EVACUATION CENTER<br>
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
                                
                                     &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp A. TYPHOON
                               
                            </label>
                        </div>

                              <div class="row">
                            <label>
                                
                                      &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  B. FLOODING
                               
                            </label>
                        </div>

                        <div class="row">
                            <label>
                                
                                      &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  C. DROUGHT
                               
                            </label>
                        </div>


                         <div class="row">
                            <label>
                                
                                      &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  D. EARTHQUAKE
                               
                            </label>
                        </div> 


                         <div class="row">
                            <label>
                                
                                      &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  E. VOLCANIC ERUPTION
                               
                            </label>
                        </div>
                    
                     <div class="row">
                            <label>
                                
                                      &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  F. LANDSLIDE
                               
                            </label>
                        </div>
                    
                     <div class="row">
                            <label>
                                
                                      &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  G. TSUNAMI
                               
                            </label>
                        </div>
                    
                        <div class="row">
                            <label>
                                
                                      &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  H. FOREST FIRE
                               
                            </label>
                        </div> 


                         <div class="row">
                            <label>
                                
                                      &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  I. FIRE
                               
                            </label>
                        </div>
                    
                         <div class="row">
                            <label>
                                
                                      &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  J. EPIDEMIC/PANDEMIC
                               
                            </label>
                        </div>
                    

                        <div class="row">
                            <label>
                                
                                      &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
                                  &nbsp&nbsp  K. ARMED CONFLICT
                               
                            </label>
                        </div>
                    

                     <div class="row">
                            <label>
                                
                                      &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="Yes" value="Yes">
                                  &nbsp&nbsp  L. OTHERS, SPECIFY
                               
                            </label>
                        </div>
                    

                     <div class="row">
                            <label>
                                
                                      &nbsp&nbsp&nbsp&nbsp<input class="form-check-input respo_radio" type="checkbox" name="disaster_used_evacuation_center"  data-val="No" value="No">
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
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>

<!-- DISASTER MANAGEMENT RISK 5 -->

 <tr>
     <td class="text-left">
              
              <br>             
<div class="text-left"><h6>
<b>Time and Date Ended:
</b></h6></div>
<div class="form-group row">
  <div class="col-sm-3">
  <input type="Date" class="form-control" id="Interview_date_end" name="Interview_date_end" placeholder="" > 
  <input type="Time" class="form-control" id="Interview_time_end" name="Interview_time_end" placeholder="" >
</div>
</div>
<br>


      <br>
                    </div>
                             

                  </div>
                </div>

                <hr>

             </td>
         
           </tr>



   </table>
</div> <!---- END OF disaster risk management --->
<hr>





<h4 class="text-left" style="color: white; background-color: #2277bd">PART II. BARANGAY LGU AND RECORDS-BASED DATA
A. GENERAL INFORMATION ABOUT THE BARANGAY LOCAL GOVERNMENT UNIT</h4><br>


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
  <input type="number" class="form-control" id="gi_male_2a" name="gi_male_2a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_2b" name="gi_male_2b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_male_2c" name="gi_male_2c" placeholder="" >
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
  <input type="number" class="form-control" id="gi_female_2a" name="gi_female_2a" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>31 to 59 years old
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_2b" name="gi_female_2b" placeholder="" >
</div>
</div>


<div class="text-left"><h6>
<b>60 and above
</b></h6></div>   

<div class="form-group row">
  <div class="col-sm-3">
  <input type="number" class="form-control" id="gi_female_2c" name="gi_female_2c" placeholder="" >
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

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="others_lgu_source_data" name="others_lgu_source_data" placeholder="" >
</div>
</div>

<br>

<hr>

</div>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i> </div> 

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="agriculture_number_establishments" name="agriculture_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="mining_number_establishments" name="mining_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i> </div> 

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="manufacturing_number_establishments" name="manufacturing_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>


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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i> </div> 

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="electricity_number_establishments" name="electricity_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i></div>

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="water_number_establishments" name="water_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="construction_number_establishments" name="construction_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="wholesale_number_establishments" name="wholesale_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i> </div> 

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="transportation_number_establishments" name="transportation_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i></div> 

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="accommodation_number_establishments" name="accommodation_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i></div>

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="information_number_establishments" name="information_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i> </div> 

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="financial_number_establishments" name="financial_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i> </div> 

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="realestate_number_establishments" name="realestate_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="professional_number_establishments" name="professional_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="administrative_number_establishments" name="administrative_number_establishments" placeholder="" >
</div>
</div>


<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="public_number_establishments" name="public_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="education_number_establishments" name="education_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i> </div> 

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="human_number_establishments" name="human_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i> </div> 

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="arts_number_establishments" name="arts_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="other_number_establishments" name="other_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i></div>  

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="goods_number_establishments" name="goods_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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
<b>Number of establishments</b></h6>
<i style="font-size: 11px; color: gray"> "Please input "0" if none"</i> </div> 

<div class="form-group row">
  <div class="col-sm-6">
  <input type="text" class="form-control" id="extraterritorial_number_establishments" name="extraterritorial_number_establishments" placeholder="" >
</div>
</div>

<br>
<hr>

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

<hr>

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



<div class="text-left"><h5>
B3. Sector / Area:
</h5></div>

<!-- CHECKBOX -->

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




<br><br><hr>
<h4 style="color: blue;">---------- END OF SECTION 1 ----------</h4>


</form> <!-- Section 1 End Form -->



   
                             
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


<!-- ADD BARANGAY HEALTH FACILITIES -->

<div class="modal fade" id="add_barangay_health_facilities" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Barangay Health Facilities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form method="post" id="submit_table_barangay_fac_health">
 
  <div class="form-group">
    <label for="">HF3. What is the Name of the Facility?</label>
    <input type="text" class="form-control" name="barangay_health_facility_name" aria-describedby="" placeholder="">
   
  </div>

   <div class="form-group">
    <label for="">HF4. What is the Address of the Facility?</label>
    <input type="text" class="form-control" name="barangay_health_facility_address" aria-describedby="" placeholder="">
   
  </div>

  <div class="form-group" >
                      <label>HF5. What institution operates the facility?</label>
                      <select  name="barangay_health_facility_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>

  </div>


                     <div class="form-group encode_bsn" hidden=""><h6>HF6. EA</h6>
                     <input type="text" class="form-control"  name="barangay_health_facility_EA" placeholder="" >
                    </div>
                     <div class="form-group encode_bsn"  hidden=""><h6>HF7. BSN</h6>
                      <input type="text" class="form-control"  name="barangay_health_facility_BSN" placeholder="" >
                    </div>
                     <div class="form-group encode_bsn"  hidden=""><h6>HF8. FSN</h6>
                      <input type="text" class="form-control"  name="barangay_health_facility_FSN" placeholder="" >
                    </div>

  <div class="form-group" hidden=""> 
    <input type="text" class="form-control" id="health_facilities" name="barangay_health_facility_type" aria-describedby="" placeholder="">   
  </div>



</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save_tables" data-val="submit_table_barangay_fac_health">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- ----- END OF ADD HEALTH FACILITIES---- -->

<!-- ADD BARANGAY EDUCATIONAL FACILITIES -->

<div class="modal fade" id="add_barangay_education_facilities" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Barangay Education Facilities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form method="post" id="submit_table_barangay_fac_education">
 
  <div class="form-group">
    <label for="">EF3. What is the Name of the Facility?</label>
    <input type="text" class="form-control" name="barangay_education_facility_name" aria-describedby="" placeholder="">
   
  </div>

   <div class="form-group">
    <label for="">EF4. What is the Address of the Facility?</label>
    <input type="text" class="form-control" name="barangay_education_facility_address" aria-describedby="" placeholder="">
   
  </div>

  <div class="form-group" >
                      <label>EF5. What institution operates the facility?</label>
                      <select  name="barangay_education_facility_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>

  </div>


                     <div class="form-group encode_bsn" hidden=""><h6>EF6. EA</h6>
                     <input type="text" class="form-control"   name="barangay_education_facility_EA" placeholder="" >
                    </div>
                     <div class="form-group encode_bsn"  hidden=""><h6>EF7. BSN</h6>
                      <input type="text" class="form-control"  name="barangay_education_facility_BSN" placeholder="" >
                    </div>
                     <div class="form-group encode_bsn"  hidden=""><h6>EF8. FSN</h6>
                      <input type="text" class="form-control"  name="barangay_education_facility_FSN" placeholder="" >
                    </div>

  <div class="form-group" hidden=""> 
    <input type="text" class="form-control" id="education_facilities" name="barangay_education_facility_type" aria-describedby="" placeholder="">   
  </div>



</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save_tables" data-val="submit_table_barangay_fac_education">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- --- END OF ADD EDUCATIONAL FACILITIES--- -->




<!-- ADD BARANGAY SERVICE FACILITIES -->

<div class="modal fade" id="add_barangay_service_facilities" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Barangay Service Facilities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form method="post" id="submit_table_barangay_fac_service">
 
  <div class="form-group">
    <label for="">SF3. What is the Name of the Facility?</label>
    <input type="text" class="form-control" name="barangay_service_facility_name" aria-describedby="" placeholder="">
   
  </div>

   <div class="form-group">
    <label for="">SF4. What is the Address of the Facility?</label>
    <input type="text" class="form-control" name="barangay_service_facility_address" aria-describedby="" placeholder="">
   
  </div>

  <div class="form-group" >
                      <label>SF5. What institution operates the facility?</label>
                      <select  name="barangay_service_facility_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>

  </div>


                     <div class="form-group encode_bsn" hidden=""><h6>SF6. EA</h6>
                     <input type="text" class="form-control"   name="barangay_service_facility_EA" placeholder="" >
                    </div>
                     <div class="form-group encode_bsn"  hidden=""><h6>SF7. BSN</h6>
                      <input type="text" class="form-control"  name="barangay_service_facility_BSN" placeholder="" >
                    </div>
                     <div class="form-group encode_bsn"  hidden=""><h6>SF8. FSN</h6>
                      <input type="text" class="form-control"  name="barangay_service_facility_FSN" placeholder="" >
                    </div>

  <div class="form-group" hidden=""> 
    <input type="text" class="form-control" id="service_facilities" name="barangay_service_facility_type" aria-describedby="" placeholder="">   
  </div>



</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save_tables" data-val="submit_table_barangay_fac_service">Save</button>
      </div>
    </div>
  </div>
</div>
<!-- --- END OF ADD SERVICE FACILITIES--- -->


<!-- ADD GARBAGE AND DISPOSAL FACILITY -->

<div class="modal fade" id="add_barangay_open_dump_site" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Garbage and Waste Disposal Facilities</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form method="post" id="submit_table_barangay_fac_garbage_waste">
 
  <div class="form-group">
    <label for="">G3. What is the name of the Facility ?</label>
    <input type="text" class="form-control" name="disposal_facility_name" aria-describedby="" placeholder="">
   
  </div>

   <div class="form-group">
    <label for="">G4. What is the Address of the Facility?</label>
    <input type="text" class="form-control" name="disposal_facility_address" aria-describedby="" placeholder="">
   
  </div>

  <div class="form-group" >
                      <label>G5. What institution operates the facility?</label>
                      <select  name="disposal_facility_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>

  </div>


                     <div class="form-group encode_bsn" hidden=""><h6>G6. EA</h6>
                     <input type="text" class="form-control"  name="disposal_facility_EA" placeholder="" >
                    </div>
                     <div class="form-group encode_bsn"  hidden=""><h6>G7. BSN</h6>
                      <input type="text" class="form-control"  name="disposal_facility_BSN" placeholder="" >
                    </div>
                     <div class="form-group encode_bsn"  hidden=""><h6>G8. FSN</h6>
                      <input type="text" class="form-control"  name="disposal_facility_FSN" placeholder="" >
                    </div>

  <div class="form-group" hidden=""> 
    <input type="text" class="form-control" id="garbage_waste_facilities" name="disposal_facility_type" aria-describedby="" placeholder="">   
  </div>



</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save_tables" data-val="submit_table_barangay_fac_garbage_waste">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- -----END OF GARBAGE FAC----- -->



<!-- ADD TOURISM SITES AND DESTINATION -->

<div class="modal fade" id="add_barangay_tourism_sites" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Tourism Sites and Destination</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form method="post" id="submit_table_barangay_fac_tourism_sites">
 
  <div class="form-group">
    <label for="">T2. What is the name of the Facility ?</label>
    <input type="text" class="form-control" name="tourism_facility_name" aria-describedby="" placeholder="">
   
  </div>

   <div class="form-group">
    <label for="">T3.1 What is the Address of the Facility?</label>
    <input type="text" class="form-control" name="tourism_facility_address" aria-describedby="" placeholder="">
   
  </div>

  <div class="form-group" >
                      <label>T4. What institution operates the facility?</label>
                      <select  name="tourism_facility_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>

  </div>


                     <div class="form-group encode_bsn" hidden=""><h6>G6. EA</h6>
                     <input type="text" class="form-control"  name="tourism_sites_facility_EA" placeholder="" >
                    </div>
                     <div class="form-group encode_bsn"  hidden=""><h6>G7. BSN</h6>
                      <input type="text" class="form-control"  name="tourism_sites_facility_BSN" placeholder="" >
                    </div>
                     <div class="form-group encode_bsn"  hidden=""><h6>G8. FSN</h6>
                      <input type="text" class="form-control"  name="tourism_sites_facility_FSN" placeholder="" >
                    </div>

  <div class="form-group" hidden=""> 
    <input type="text" class="form-control" id="tourism_sites_facilities" name="tourism_facility_type" aria-describedby="" placeholder="">   
  </div>



</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save_tables" data-val="submit_table_barangay_fac_tourism_sites">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- -----END OF TOURISM SITES AND DESTINATION----- -->




<!-- ADD TRANSPORT FACILITY -->

<div class="modal fade" id="add_barangay_transport_facility" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Tourism Sites and Destination</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<form method="post" id="submit_table_barangay_fac_transport">
 
  <div class="form-group">
    <label for="">PT1. What is the name of the Facility ?</label>
    <input type="text" class="form-control" name="transport_facility_name" aria-describedby="" placeholder="">
   
  </div>

   <div class="form-group">
    <label for="">PT2.1 What is the Address of the Facility?</label>
    <input type="text" class="form-control" name="transport_facility_address" aria-describedby="" placeholder="">
   
  </div>

  <div class="form-group" >
                      <label>PT3 What institution operates the facility?</label>
                      <select  name="transport_facility_operator" class="form-control" >
                        <option value="">Select</option>
                        <option value="PRIVATE">PRIVATE</option>
                        <option value="NATIONAL GOVERNMENT">NATIONAL GOVERNMENT</option>
                        <option value="PROVINCIAL GOVERNMENT">PROVINCIAL GOVERNMENT</option>
                        <option value="CITY/MUNICIPAL GOVERNMENT">CITY/MUNICIPAL GOVERNMENT</option>
                        <option value="BARANGAY">BARANGAY</option>
                        <option value="GOCC">GOCC</option>
                        <option value="NONE">NONE</option>
                        <option value="DON’T KNOW">DON’T KNOW</option>
                  
                      </select>

  </div>


                     <div class="form-group encode_bsn" hidden=""><h6>G6. EA</h6>
                     <input type="text" class="form-control"  name="transport_facility_EA" placeholder="" >
                    </div>
                     <div class="form-group encode_bsn"  hidden=""><h6>G7. BSN</h6>
                      <input type="text" class="form-control"  name="transport_facility_BSN" placeholder="" >
                    </div>
                     <div class="form-group encode_bsn"  hidden=""><h6>G8. FSN</h6>
                      <input type="text" class="form-control"  name="transport_facility_FSN" placeholder="" >
                    </div>

  <div class="form-group" hidden=""> 
    <input type="text" class="form-control" id="transport_sites_facilities" name="transport_facility_type" aria-describedby="" placeholder="">   
  </div>



</form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save_tables" data-val="submit_table_barangay_fac_transport">Save</button>
      </div>
    </div>
  </div>
</div>

<!-- -----END OF TRANSPORT FACILITY---- -->










</body>
</html>
