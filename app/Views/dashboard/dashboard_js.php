

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url('assets/fontawesome/js/all.min.js'); ?>"></script>
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-borderless@4/borderless.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script> <!-- Signature add ons -->

 <link rel="stylesheet" href="<?php echo base_url('assets/css/simple-sidebar.css'); ?>" />




<!-- -------------------------------------------------------DONE LOADING LIBRARIES------------------------------------------------------ -->





<script {csp-script-nonce} type="text/javascript">

(() => {

	'use strict';





$(document).ready( function () 
{

// welcome_message();
load_this();
get_form_1();






 jQuery('.submit_table_1').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    // "scrollX": true,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_table_1"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1,2], "visible": true, "searchable": false}
            

                  ]
  });


 jQuery('#table1, #table2, #table3, #table4, #table5, #sect2_table1, #sect2_table2, #sect2_table3, #sect2_table4, #sect2_table5, #table6, #table7, #table8, #table9, #table10, #table11, #table12, #table13, #table14, #table15, #table16, #table17, #table18').DataTable({

       "responsive": true, 
       "bPaginate": false,
       "bFilter": false,
       "bInfo": false,
       // "scrollX": true,
       "ordering": false
       

 });

jQuery('.user_notes').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    // "scrollX": true,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_notes"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
        { "orderable": false, "targets": [1], "visible": true, "searchable": false},
        { "orderable": false, "targets": [0], "visible": true, "searchable": false, "className": 'readBreakLines'}
            

                  ]
  });

 jQuery('.submit_table_2').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    // "scrollX": true,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_table_2"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1], "visible": true, "searchable": false}
            

                  ]
  });

 

 jQuery('.submit_table_3').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    // "scrollX": true,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_table_3"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1], "visible": true, "searchable": false}
            

                  ]
  });


 jQuery('.submit_table_barangay_fac_health').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    // "scrollX": false,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_barangay_health_facilities"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1,2,3,4], "visible": true, "searchable": false}
            

                  ]
  });


 jQuery('.submit_table_barangay_fac_education').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    // "scrollX": false,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_barangay_education_facilities"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1,2,3,4], "visible": true, "searchable": false}
            

                  ]
  });


  jQuery('.submit_table_barangay_fac_service').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    // "scrollX": false,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_barangay_service_facilities"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1,2,3,4], "visible": true, "searchable": false}
            

                  ]
  });



  jQuery('.submit_table_barangay_fac_agricultural').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    // "scrollX": false,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_barangay_agricultural_facilities"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1,2,3,4], "visible": true, "searchable": false}
            

                  ]
  });

  jQuery('.submit_table_barangay_input_dealer').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    // "scrollX": false,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_barangay_input_dealers"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1,2,3,4], "visible": true, "searchable": false}
            

                  ]
  });

  jQuery('.submit_table_barangay_water_facility').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    // "scrollX": false,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_barangay_water_facilities"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1,2,3,4], "visible": true, "searchable": false}
            

                  ]
  });

jQuery('.submit_table_barangay_electric_facility').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    // "scrollX": false,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_barangay_electric_facilities"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1,2,3,4], "visible": true, "searchable": false}
            

                  ]
  });

jQuery('.submit_table_barangay_credit_facility').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    // "scrollX": false,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_barangay_credit_facilities"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1,2,3,4], "visible": true, "searchable": false}
            

                  ]
  });

jQuery('.submit_table_barangay_noninfra_facility').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    // "scrollX": false,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_barangay_noninfra_facilities"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1,2,3,4,5], "visible": true, "searchable": false}
            

                  ]
  });


jQuery('.submit_table_barangay_infra_facility').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    // "scrollX": false,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_barangay_infra_facilities"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1,2,3,4,5,6,7], "visible": true, "searchable": false}
            

                  ]
  });

jQuery('.submit_table_barangay_fac_garbage_waste').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    //"scrollX": false,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_barangay_garbage_waste_facilities"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1,2,3,4], "visible": true, "searchable": false}
            

                  ]
  }); 




    jQuery('.submit_table_barangay_fac_tourism_sites').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    //"scrollX": false,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_barangay_tourism_sites_facilities"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1,2,3,4], "visible": true, "searchable": false}
            

                  ]
  });


    jQuery('.submit_table_barangay_fac_transport').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    //"scrollX": false,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_barangay_transport_sites_facilities"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1,2,3,4], "visible": true, "searchable": false}
            

                  ]
  });



    jQuery('.submit_table_barangay_road_network').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    //"scrollX": false,
    "bPaginate": false,
    "ajax":
    {
      url:"<?php echo base_url("/dashboard/get_barangay_road_network"); ?>",
      type:"POST",
    },
    "columnDefs": [
               
                   { "orderable": false, "targets": [0,1,2,3,4], "visible": true, "searchable": false}
            

                  ]
  });

 


}); //END OF ONLOAD 





//This Function Auto Saves the previous section when transferring to a new navigation section
jQuery.noConflict();
$(document).on('shown.bs.tab', 'a[data-toggle="tab"]', function (e) 
{

   var q1 = e.target.href; // newly activated tab
   var q2 = e.relatedTarget.href; // previous active tab




   const prev_tab = q2.substring(q2.indexOf('#') + 1); 
   const current_tab = q1.substring(q2.indexOf('#') + 1);

   // alert(current_tab);

   if(current_tab == "v-pills-profile")
   {
      get_form_2();   
   }

   if(current_tab == "v-pills-messages")
   {
      get_form_3();   
   }

   if(current_tab == "v-pills-settings")
   {
      get_form_4();   
   }




   if(prev_tab == "v-pills-home")
   {

      var pass_form = 1; 
      // trigger_save(pass_form);
      data_preloading(pass_form);
   }
   else if(prev_tab == "v-pills-profile")
   {

      var pass_form = 2; 
      // trigger_save(pass_form);
      data_preloading(pass_form);  
   }
   else if(prev_tab == "v-pills-messages")
   {

      var pass_form = 3;  
      // trigger_save(pass_form);  
      data_preloading(pass_form);  
   }
   else if(prev_tab == "v-pills-settings")
   {

      var pass_form = 4; 
      // trigger_save(pass_form);
      data_preloading(pass_form);   
   }

   
});



function get_form_1()
{

var elements = document.getElementById("submit_de").elements;


let data = [ ];
  

  jQuery.ajax({
                url: "<?php echo base_url("/dashboard/load_form_1"); ?>", 
                method: "POST",
               
                dataType: "JSON",
                success:function(result){

                data = result;
                // console.log(data[0].bgy);
                let province_area = [ ];
                var getRegion = data[0].reg;

                 jQuery.ajax({
                                  url: "<?php echo base_url("/dashboard/load_province"); ?>",
                                  method: "POST",
                                  data: {getRegion},
                                  dataType: "JSON",
                                  success:function(result){

                                  province_area = result;
                                  // console.log(province_area);

                                  let provinceList = $('#prv');
                                  let provinceList_up = $('#update_prv');

                                  provinceList.empty();
                                  provinceList.append(`<option value="">Select Province</option>`);

                                  provinceList_up.empty();
                                  provinceList_up.append(`<option value="">Select Province</option>`);
                                  
                                  province_area.forEach(data => {
                                  if (data) {
                                  provinceList.append(`<option value="${data.prov_code}">${data.prov_name}</option>`);
                                  provinceList_up.append(`<option value="${data.prov_code}">${data.prov_name}</option>`);


                                  }
                                   })

                                  $('#prv').val(data[0].prv);
                                 
                                    },
                                  error: function(result){
                                  // console.log(result);
                                  // Swal.fire('Error','Error, Check  Entry Again.','error');
                                    }

                                        })

                let municipal_area = [ ]; 
                var getProvince =  data[0].prv;

                jQuery.ajax({
                url: "<?php echo base_url("/dashboard/load_municipal"); ?>",
                method: "POST",
                data: {getProvince, getRegion},
                dataType: "JSON",
                success:function(result){

                municipal_area = result;
                // console.log(municipal_area);

                let municipalList = $('#mun');
                let municipalList_up = $('#update_mun');

                municipalList.empty();
                municipalList.append(`<option value="">Select Municipal</option>`);

                municipalList_up.empty();
                municipalList_up.append(`<option value="">Select Municipal</option>`);
                
                municipal_area.forEach(data => {
                if (data) {
                municipalList.append(`<option value="${data.mun_code}">${data.mun_name}</option>`);
                municipalList_up.append(`<option value="${data.mun_code}">${data.mun_name}</option>`);
                }
                 })
               
                $('#mun').val(data[0].mun);

                  },
                error: function(result){
                // console.log(result);
                // Swal.fire('Error','Error, Check  Entry Again.','error');
                  }

                      })


                let barangay_area = [ ]; 
                var getMunicipal =  data[0].mun;

                jQuery.ajax({
                url: "<?php echo base_url("/dashboard/load_barangay"); ?>",
                method: "POST",
                data: {getMunicipal, getProvince, getRegion},
                dataType: "JSON",
                success:function(result){

                barangay_area = result;
                // console.log(barangay_area);

                let barangayList = $('#bgy');
                let barangayList_up = $('#update_bgy');

                barangayList.empty();
                barangayList.append(`<option value="">Select Barangay</option>`);

                barangayList_up.empty();
                barangayList_up.append(`<option value="">Select Barangay</option>`);
                
                barangay_area.forEach(data => {
                if (data) {
                barangayList.append(`<option value="${data.bgy_code}">${data.bgy_name}</option>`);
                barangayList_up.append(`<option value="${data.bgy_code}">${data.bgy_name}</option>`);
                }
                 })

                $('#bgy').val(data[0].bgy);
               
                  },
                error: function(result){
                // console.log(result);
                // Swal.fire('Error','Error, Check  Entry Again.','error');
                  }

                      })





              // -----------------PASSING DATA TO FORMS - AUTO FILL----------------
                

                for (var i = 0, element; element = elements[i++];) 
                  {
                    // if (element.type === "text" && element.value === "")

                      
                        
                       

                        if(element.name == "geo_hall_lat")
                        {
                           if(data[0][element.name] != "")
                           {
                              $("#geo_hall_lat").attr("hidden",false);
                              $("#geo_hall_long").attr("hidden",false);
                           } 
                        }



                        if(element.name != "DataTables_Table_0_length")
                        { 


                           
                          // ------------------UPDATE CHECK BOXES--------------

                            if(element.type == "checkbox")
                            {
                              if(data[0][element.name] == "YES")
                              {
                               
                                $("[name='"+element.name+"']").click();
                              }
                            }


                             // ------------------UPDATE RADIOS--------------

                            if(element.type == "radio")
                            {

                                if(data[0][element.name] == "Yes")
                                {                               
                                  $('input[name="' +element.name+ '"][value="' + data[0][element.name] + '"]').click();
                                }

                                 if(data[0][element.name] == "No")
                                {                               
                                  $('input[name="' +element.name+ '"][value="' + data[0][element.name] + '"]').click();
                                }

                            }



                            console.log(element.name);
                            console.log(data[0][element.name]);

                          if(element.type == "select-one")
                          {
                            if(element.name != "reg" && element.name != "prv" && element.name != "mun" && element.name != "bgy")
                            {
                              $('[name="'+element.name+'"]').val(data[0][element.name]).change();
                            }
                            
                            // alert(element.name);
                          }


                          

                            // ----------------------OVER ALL UPDATE-----------------
                          if(element.type != "radio")
                          {
                            $('[name="'+element.name+'"]').val(data[0][element.name]);

                            if(element.name == "A6_resi" 
                            || element.name == "A6_comm"
                            || element.name == "A6_agri"
                            || element.name == "A6_indus"
                            || element.name == "A6_mine"
                            || element.name == "A6_timb"
                            || element.name == "A6_sclass"
                            || element.name == "A6_vacant"
                            || element.name == "A6_othersa" 
                              )
                            {
                              $('[name="'+element.name+'"]').val(data[0][element.name]).trigger("change");
                            }

                          }


                           
                        }
                       
                        
                      
                  }


                  // ------------END OF AUTOFILL-----------
                                      
                  },
                error: function(result){
                // console.log(result);
                // Swal.fire('Error','Error, Check  Entry Again.','error');
                  }

              })




}

// ---------------------------------LOAD SECTION 2 ----------------------

function get_form_2()
{

var elements = document.getElementById("submit_de_part2").elements;


let data = [ ];
  

  jQuery.ajax({
                url: "<?php echo base_url("/dashboard/load_form_2"); ?>", 
                method: "POST",
               
                dataType: "JSON",
                success:function(result){

                data = result;
                // console.log(data[0].bgy);
                
              // -----------------PASSING DATA TO FORMS - AUTO FILL----------------
                

                for (var i = 0, element; element = elements[i++];) 
                  {
                    // if (element.type === "text" && element.value === "")

                      
                        
                       

                        if(element.name == "geo_hall_lat")
                        {
                           if(data[0][element.name] != "")
                           {
                              $("#geo_hall_lat").attr("hidden",false);
                              $("#geo_hall_long").attr("hidden",false);
                           } 
                        }



                        if(element.name != "DataTables_Table_0_length")
                        { 


                           
                          // ------------------UPDATE CHECK BOXES--------------

                            if(element.type == "checkbox")
                            {
                              if(data[0][element.name] == "YES")
                              {
                               
                                $("[name='"+element.name+"']").click();
                              }
                            }


                             // ------------------UPDATE RADIOS--------------

                            if(element.type == "radio")
                            {

                                if(data[0][element.name] == "Yes")
                                {                               
                                  $('input[name="' +element.name+ '"][value="' + data[0][element.name] + '"]').click();
                                }

                                 if(data[0][element.name] == "No")
                                {                               
                                  $('input[name="' +element.name+ '"][value="' + data[0][element.name] + '"]').click();
                                }

                            }



                            console.log(element.name);
                            console.log(data[0][element.name]);

                          if(element.type == "select-one")
                          {
                            if(element.name != "reg" && element.name != "prv" && element.name != "mun" && element.name != "bgy")
                            {
                              $('[name="'+element.name+'"]').val(data[0][element.name]).change();
                            }
                            
                            // alert(element.name);
                          }


                          

                            // ----------------------OVER ALL UPDATE-----------------
                          if(element.type != "radio")
                          {
                            $('[name="'+element.name+'"]').val(data[0][element.name]);
                          }


                           
                        }
                       
                        
                      
                  }


                  // ------------END OF AUTOFILL-----------
                                      
                  },
                error: function(result){
                // console.log(result);
                // Swal.fire('Error','Error, Check  Entry Again.','error');
                  }

              })


}

// ---------------------------------LOAD SECTION 3 ----------------------

function get_form_3()
{

var elements = document.getElementById("submit_de_part3").elements;


let data = [ ];
  

  jQuery.ajax({
                url: "<?php echo base_url("/dashboard/load_form_3"); ?>", 
                method: "POST",
               
                dataType: "JSON",
                success:function(result){

                data = result;
                // console.log(data[0].bgy);
                
              // -----------------PASSING DATA TO FORMS - AUTO FILL----------------
                

                for (var i = 0, element; element = elements[i++];) 
                  {
                    // if (element.type === "text" && element.value === "")

                      
                        
                       

                        if(element.name == "geo_hall_lat")
                        {
                           if(data[0][element.name] != "")
                           {
                              $("#geo_hall_lat").attr("hidden",false);
                              $("#geo_hall_long").attr("hidden",false);
                           } 
                        }



                        if(element.name != "DataTables_Table_0_length")
                        { 


                           
                          // ------------------UPDATE CHECK BOXES--------------

                            if(element.type == "checkbox")
                            {
                              if(data[0][element.name] == "YES")
                              {
                               
                                $("[name='"+element.name+"']").click();
                              }
                            }


                             // ------------------UPDATE RADIOS--------------

                            if(element.type == "radio")
                            {

                                if(data[0][element.name] == "Yes")
                                {                               
                                  $('input[name="' +element.name+ '"][value="' + data[0][element.name] + '"]').click();
                                }

                                 if(data[0][element.name] == "No")
                                {                               
                                  $('input[name="' +element.name+ '"][value="' + data[0][element.name] + '"]').click();
                                }

                            }



                            console.log(element.name);
                            console.log(data[0][element.name]);

                          if(element.type == "select-one")
                          {
                            if(element.name != "reg" && element.name != "prv" && element.name != "mun" && element.name != "bgy")
                            {
                              $('[name="'+element.name+'"]').val(data[0][element.name]).change();
                            }
                            
                            // alert(element.name);
                          }


                          

                            // ----------------------OVER ALL UPDATE-----------------
                          if(element.type != "radio")
                          {
                            $('[name="'+element.name+'"]').val(data[0][element.name]);
                          }


                           
                        }
                       
                        
                      
                  }


                  // ------------END OF AUTOFILL-----------
                                      
                  },
                error: function(result){
                // console.log(result);
                // Swal.fire('Error','Error, Check  Entry Again.','error');
                  }

              })


}

// ------------------------------------LOAD SECTION 4--------------------------------

function get_form_4()
{

var elements = document.getElementById("submit_de_part4").elements;


let data = [ ];
  

  jQuery.ajax({
                url: "<?php echo base_url("/dashboard/load_form_4"); ?>", 
                method: "POST",
               
                dataType: "JSON",
                success:function(result){

                data = result;
                // console.log(data[0].bgy);
                
              // -----------------PASSING DATA TO FORMS - AUTO FILL----------------
                

                for (var i = 0, element; element = elements[i++];) 
                  {
                    // if (element.type === "text" && element.value === "")

                      
                        
                       

                        if(element.name == "geo_hall_lat")
                        {
                           if(data[0][element.name] != "")
                           {
                              $("#geo_hall_lat").attr("hidden",false);
                              $("#geo_hall_long").attr("hidden",false);
                           } 
                        }



                        if(element.name != "DataTables_Table_0_length")
                        { 


                           
                          // ------------------UPDATE CHECK BOXES--------------

                            if(element.type == "checkbox")
                            {
                              if(data[0][element.name] == "YES")
                              {
                               
                                $("[name='"+element.name+"']").click();
                              }
                            }


                             // ------------------UPDATE RADIOS--------------

                            if(element.type == "radio")
                            {

                                if(data[0][element.name] == "Yes")
                                {                               
                                  $('input[name="' +element.name+ '"][value="' + data[0][element.name] + '"]').click();
                                }

                                 if(data[0][element.name] == "No")
                                {                               
                                  $('input[name="' +element.name+ '"][value="' + data[0][element.name] + '"]').click();
                                }

                            }



                            console.log(element.name);
                            console.log(data[0][element.name]);

                          if(element.type == "select-one")
                          {
                            if(element.name != "reg" && element.name != "prv" && element.name != "mun" && element.name != "bgy")
                            {
                              $('[name="'+element.name+'"]').val(data[0][element.name]).change();
                            }
                            
                            // alert(element.name);
                          }


                          

                            // ----------------------OVER ALL UPDATE-----------------
                          if(element.type != "radio")
                          {
                            $('[name="'+element.name+'"]').val(data[0][element.name]);
                            $('[name="'+element.name+'"]').trigger("change");


                          }


                           
                        }
                       
                        
                      
                  }


                  // ------------END OF AUTOFILL-----------
                                      
                  },
                error: function(result){
                // console.log(result);
                // Swal.fire('Error','Error, Check  Entry Again.','error');
                  }

              })


}

//LOAD REGION LIST

function load_this()
{
  let areas = [ ];
  

  jQuery.ajax({
                url: "<?php echo base_url("/dashboard/load_region"); ?>", 
                method: "POST",
               
                dataType: "JSON",
                success:function(result){

                areas = result;
                // console.log(areas);

                let regList = $('#reg');
                let regListUpdate = $('#update_reg');
                

                regList.empty();
                regList.append(`<option value="">Select Region</option>`);

                regListUpdate.empty();
                regListUpdate.append(`<option value="">Select Region</option>`);

              
                
                areas.forEach(data => {
                if (data.reg_code != 0) {
                regList.append(`<option value="${data.reg_code}">${data.reg_name}</option>`);
                regListUpdate.append(`<option value="${data.reg_code}">${data.reg_name}</option>`);

               
                }
                 });
                
                // Swal.fire('Welcome!')
                // .then(()=>{
                        
                //     // console.log(result);
                //     // location.reload();    
                                      
                // });
               
                  },
                error: function(result){
                // console.log(result);
                // Swal.fire('Error','Error, Check  Entry Again.','error');
                  }

                      })

}







$('#reg, #update_reg').on('change', function() {


              $('#reg_name').val($( "#reg option:selected" ).text());
                 
                              
              let province_area = [ ];

              if($('#reg').val() == "")
              {
                var getRegion =  $('#update_reg').val();

              }
              else
              {
                var getRegion =  $('#reg').val();
              }

                  jQuery.ajax({
                                  url: "<?php echo base_url("/dashboard/load_province"); ?>",
                                  method: "POST",
                                  data: {getRegion},
                                  dataType: "JSON",
                                  success:function(result){

                                  province_area = result;
                                  // console.log(province_area);

                                  let provinceList = $('#prv');
                                  let provinceList_up = $('#update_prv');

                                  provinceList.empty();
                                  provinceList.append(`<option value="">Select Province</option>`);

                                  provinceList_up.empty();
                                  provinceList_up.append(`<option value="">Select Province</option>`);
                                  
                                  province_area.forEach(data => {
                                  if (data) {
                                  provinceList.append(`<option value="${data.prov_code}">${data.prov_name}</option>`);
                                  provinceList_up.append(`<option value="${data.prov_code}">${data.prov_name}</option>`);


                                  }
                                   })
                                 
                                    },
                                  error: function(result){
                                  // console.log(result);
                                  // Swal.fire('Error','Error, Check  Entry Again.','error');
                                    }

                                        })


});





$('#prv, #update_prv').on('change', function() 
{
                        

            $('#prv_name').val($( "#prv option:selected" ).text());

            let municipal_area = [ ];

            if($('#reg').val() == "")
            {
              var getRegion =  $('#update_reg').val();
              
            }
            else
            {
             
              var getRegion =  $('#reg').val();
            }



            if($('#prv').val() == "")
            {
             
              var getProvince =  $('#update_prv').val();

            }
            else
            {
              var getProvince =  $('#prv').val();
              
            }





jQuery.ajax({
                url: "<?php echo base_url("/dashboard/load_municipal"); ?>",
                method: "POST",
                data: {getProvince, getRegion},
                dataType: "JSON",
                success:function(result){

                municipal_area = result;
                // console.log(municipal_area);

                let municipalList = $('#mun');
                let municipalList_up = $('#update_mun');

                municipalList.empty();
                municipalList.append(`<option value="">Select Municipal</option>`);

                municipalList_up.empty();
                municipalList_up.append(`<option value="">Select Municipal</option>`);
                
                municipal_area.forEach(data => {
                if (data) {
                municipalList.append(`<option value="${data.mun_code}">${data.mun_name}</option>`);
                municipalList_up.append(`<option value="${data.mun_code}">${data.mun_name}</option>`);
                }
                 })
               
                  },
                error: function(result){
                // console.log(result);
                // Swal.fire('Error','Error, Check  Entry Again.','error');
                  }

                      })


});


$('#mun, #update_mun').on('change', function() 
{


              $('#mun_name').val($( "#mun option:selected" ).text());
                              
              let barangay_area = [ ];


              if($('#reg').val() == "")
              {
                var getRegion =  $('#update_reg').val();
                
              }
              else
              {
               
                var getRegion =  $('#reg').val();
              }



              if($('#prv').val() == "")
              {
               
                var getProvince =  $('#update_prv').val();

              }
              else
              {
                var getProvince =  $('#prv').val();
                
              }


              if($('#mun').val() == "")
              {
               
                var getMunicipal =  $('#update_mun').val();

              }
              else
              {
                var getMunicipal =  $('#mun').val();
                
              }






jQuery.ajax({
                url: "<?php echo base_url("/dashboard/load_barangay"); ?>",
                method: "POST",
                data: {getMunicipal, getProvince, getRegion},
                dataType: "JSON",
                success:function(result){

                barangay_area = result;
                // console.log(barangay_area);

                let barangayList = $('#bgy');
                let barangayList_up = $('#update_bgy');

                barangayList.empty();
                barangayList.append(`<option value="">Select Barangay</option>`);

                barangayList_up.empty();
                barangayList_up.append(`<option value="">Select Barangay</option>`);
                
                barangay_area.forEach(data => {
                if (data) {
                barangayList.append(`<option value="${data.bgy_code}">${data.bgy_name}</option>`);
                barangayList_up.append(`<option value="${data.bgy_code}">${data.bgy_name}</option>`);
                }
                 })
               
                  },
                error: function(result){
                // console.log(result);
                // Swal.fire('Error','Error, Check  Entry Again.','error');
                  }

                      })



});




$('#bgy').on('change', function() 
{


$('#bgy_name').val($( "#bgy option:selected" ).text());

});





//CTRL + S BIND CODE FOR SAVE FUNCTION

$(window).bind('keydown', function(event) 
{
    if (event.ctrlKey || event.metaKey) 
    {
        switch (String.fromCharCode(event.which).toLowerCase()) 
        {
        case 's':
            event.preventDefault();
            
            var q1 = $('.active').attr('href');
            const activeItem = q1.substring(q1.indexOf('#') + 1);

                    if(activeItem == "v-pills-home")
                   {

                      var pass_form = 1; 
                      data_preloading(pass_form)    
                   }
                   else if(activeItem == "v-pills-profile")
                   {

                      var pass_form = 2; 
                      data_preloading(pass_form)   
                   }
                   else if(activeItem == "v-pills-messages")
                   {

                      var pass_form = 3;  
                      data_preloading(pass_form)  
                   }
                   else if(activeItem == "v-pills-settings")
                   {

                      var pass_form = 4; 
                      data_preloading(pass_form)   
                   }

              
            // alert(activeItem);
            
            break;
        // case 'f':
        //     event.preventDefault();
        //     alert('ctrl-f');
        //     break;
        // case 'g':
        //     event.preventDefault();
        //     alert('ctrl-g');
        //     break;
        }
    }
});


function welcome_message()
{

let timerInterval
Swal.fire({
  allowOutsideClick: false,
  title: '<img src="<?php echo base_url('assets/img/cbms_logo_resized.png'); ?>" width="200"> ',
  html: '<p style="font-size: 20px; color:black; "><strong>Preparing Questionnaire, Please wait....</strong></p>',
  backdrop: `
    rgba(255, 255, 255, 0.8)
    url("https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/attachments/delivery/asset/c49c83ef51b0c4230f8f39560b8250a3-1596267998/navy_for-light_bg/make-animated-logo-loader-for-your-website.gif")
    bottom center
    no-repeat
  `,
  timer: 5000,
  timerProgressBar: false,
  didOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    // trigger_save();

    // console.log('I was closed by the timer')
  }
})


}


function data_preloading(form)
{


let timerInterval
Swal.fire({
  allowOutsideClick: false,
  title: '<img src="<?php echo base_url('assets/img/cbms_logo_resized.png'); ?>" width="200"> ',
  html: '<p style="font-size: 20px; color:black; "><strong>Saving Data, Please wait....</strong></p>',
  backdrop: `
    rgba(255, 255, 255, 0.8)
    url("https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/attachments/delivery/asset/c49c83ef51b0c4230f8f39560b8250a3-1596267998/navy_for-light_bg/make-animated-logo-loader-for-your-website.gif")
    bottom center
    no-repeat
  `,
  timer: 3000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    trigger_save(form);

    // console.log('I was closed by the timer')
  }
})

}



function trigger_save(form)
{

    var form_type = form;

    if(form_type == 1)
    {
      var save_form = $('#submit_de');
    }
    else if(form_type == 2)
    {
      var save_form = $('#submit_de_part2');
    }
    else if(form_type == 3)
    {
      var save_form = $('#submit_de_part3');
    }
    else if(form_type == 4)
    {
      var save_form = $('#submit_de_part4');
    }

    
 



     
    // console.log(save_form.find('input[type=radio]:checked'));
    // console.log(save_form.find('input[type=radio]:checked').data("val"));// <- get the data embeded in the input

    save_form.find('input[type=checkbox]:checked').prop('checked', true).val("YES");

   
   
  
     
            
                                   jQuery.ajax({
                                                type: 'post',
                                                url:"<?php echo base_url("/personnel/save_questionnaire"); ?>",
                                                data: save_form.serialize(),
                                                success: function () {

                                                  
                                                 // $("#user_list").DataTable().ajax.reload();
                                                 // console.log(save_form.serialize());
                                                 
                                                 Swal.fire({
                                                          position: 'center',
                                                          icon: 'success',
                                                          title: 'Your data has been saved.',
                                                          showConfirmButton: true,
                                                          timer: 3000
                                                        })

                                                 .then(()=>{
                                                                                                                                                                              
                                                    // $('.close').click(); //hiding modal statement doesnt work. this one works
                                                    // $('#submit_de')[0].reset();  //reset my forms values to blank
                                                                      
                                                });
                                                 
                                                }
                                              });
                           
              
}

$(".save_tables").on("click",function(e)
{


var get_table_form = $(this).data("val");
var save_form =  $('#'+get_table_form);


                                   jQuery.ajax({
                                                type: 'post',
                                                url:"<?php echo base_url("/personnel/save_data_bpq_tables"); ?>",
                                                data: save_form.serialize(), 
                                                success: function () {

                                                  
                                                 jQuery('.'+get_table_form).DataTable().ajax.reload();
                                                 Swal.fire('Success.', '', 'success')

                                                 .then(()=>{
                                                                                                                                                                              
                                                    $('.close').click(); //hiding modal statement doesnt work. this one works
                                                    $('#'+get_table_form)[0].reset();  //reset my forms values to blank
                                                                      
                                                });
                                                 
                                                }
                                              });


});



//Read the button ID

$("#logout_button").on("click",function(e)
{

Swal.fire({
            title: 'Do you want to Logout?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: `Yes`,
            denyButtonText: `No`,
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                                      
            window.location = "<?= site_url('dashboard/logout') ?>";

            } else if (result.isDenied) {
            // Swal.fire('Saving the data was cancelled.', '', 'info')
            }
      })


});




// Side Menu Toggle hide/show

$("#menu-toggle").click(function(e) 
{
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");

});


// ----------GEO LOCATION X AND Y------------

$("#get_geo_hall").on("click",function(e)
{

showPosition();
// getLocation();

$("#geo_hall_lat").attr("hidden",false);
$("#geo_hall_long").attr("hidden",false);

// function getLocation() {
//   var x = document.getElementById("geo_hall_lat");
//   if (navigator.geolocation) {
//     navigator.geolocation.getCurrentPosition(showPosition);
//   } else { 
//     x.innerHTML = "Geolocation is not supported by this browser.";
//   }
// }


function showPosition(position) 
{

  // $("#geo_hall_lat").val(position.coords.latitude);
  // $("#geo_hall_long").val(position.coords.longitude);

  $("#geo_hall_lat").val("14.609053699999997");
  $("#geo_hall_long").val("121.02225650000001");
 
}


});




// -------------SKIPPING---------------

$('.respo_radio').click(function(){


    if ($(this).is(":checked") == false)
    {
        // console.log($(this).attr("name"));

        var thisCheckbox =  $(this).attr("name");

                                  jQuery.ajax({
                                                type: 'post',
                                                url:"<?php echo base_url("/personnel/update_checkbox"); ?>",
                                                data: {thisCheckbox},
                                                success: function () {

                                                  
                                                 // jQuery('.barangay_personnel_table').DataTable().ajax.reload();
                                                 // Swal.fire('Personnel was Added Successfully', '', 'success')

                                               
                                                 
                                                }
                                              });

    }

    if ($("#respo_radio2").is(":checked")) 
    {
      $(".barangay_personnel_div").attr("hidden",false);
      jQuery('.submit_table_1').DataTable().ajax.reload();
    }

     if ($("#respo_radio2").is(":checked") == false) 
    {
      $(".barangay_personnel_div").attr("hidden",true);
    }

    if ($("#respo_radio3").is(":checked")) 
    {
      $(".for_respo_radio3").attr("hidden",false);
    }

    if ($("#respo_radio3").is(":checked")==false) 
    {
      $(".for_respo_radio3").attr("hidden",true);
    }


    if ($("#respo_radio4").is(":checked")) 
    {
      $(".for_respo_radio4").attr("hidden",false);    
    }

     if ($("#respo_radio4").is(":checked") == false) 
    {
      $(".for_respo_radio4").attr("hidden",true);
    }
     

});



$('.respo_radio_sect3').click(function(){


    if ($(this).is(":checked") == false)
    {
        console.log($(this).attr("name"));

        // var thisCheckbox =  $(this).attr("name");

        //                           jQuery.ajax({
        //                                         type: 'post',
        //                                         url:"<?php echo base_url("/personnel/update_checkbox_sect3"); ?>",
        //                                         data: {thisCheckbox},
        //                                         success: function () {

                                                  
        //                                          // jQuery('.barangay_personnel_table').DataTable().ajax.reload();
        //                                          // Swal.fire('Personnel was Added Successfully', '', 'success')

                                               
                                                 
        //                                         }
        //                                       });

        // console.log("hehehehehe");

    }

   
     

});





$('input[name="a_2_puroks"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".sheila").attr("hidden",false);
  jQuery('.submit_table_2').DataTable().ajax.reload();
}
else if (s == "No")
{
  $(".sheila").attr("hidden",true);
}

 
});

$('input[name="a_2_sitios"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".a2sitios").attr("hidden",false);
  jQuery('.submit_table_3').DataTable().ajax.reload();
}
else if (s == "No")
{
  $(".a2sitios").attr("hidden",true);
}

 
});


$('input[name="EA_BSN_FSN"]').click(function(e){

        
        var selected =  $(this).data("val");

        if(selected == "Yes")
        {
          $('.encode_bsn').attr("hidden",false);
          jQuery('#table3').DataTable().draw();
        }
        else if(selected == "No")
        {
          $('.encode_bsn').attr("hidden",true);
          jQuery('#table3').DataTable().draw();
        }


        // alert(selected);
       
    } );


// $('#menu-toggle').click(function(e){
         
// var delay = ( function() {
//     var timer = 0;
//     return function(callback, ms) {
//         clearTimeout (timer);
//         timer = setTimeout(callback, ms);
//     };
// })();

// delay(function(){

//     jQuery('.norm_table').DataTable().draw();
//     jQuery('.dyna_table').DataTable().ajax.reload();


// }, 2000 ); // end delay
       
         
// } );

function reload_tables()
{

  var delay = ( function() {
    var timer = 0;
    return function(callback, ms) {
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
    };
})();

delay(function(){

    jQuery('.norm_table').DataTable().draw();
    jQuery('.dyna_table').DataTable().ajax.reload();


}, 2000 ); // end delay

}


$('.hf2').change(function(e){

        var selected =  $(this).data("skip");

        
        if($(this)[0].selectedIndex == 3)
        {
          $('.hf2_in_'+selected).attr("hidden",false);
          $('.hf2_out_'+selected).attr("hidden",true);
        }
        else if($(this)[0].selectedIndex == 4)
        {
          $('.hf2_in_'+selected).attr("hidden",true);
          $('.hf2_out_'+selected).attr("hidden",false);
        }
        else
        {
          $('.hf2_in_'+selected).attr("hidden",true);
          $('.hf2_out_'+selected).attr("hidden",true);
        }

     
        // alert($(this)[0].selectedIndex);          
       
    } );


$('.HF').click(function(e){

        
        var selected =  $(this).data("val");
        var skip =  $(this).data("skip");



        if(selected == "Yes")
        {
         
          $('.skip_no_'+skip).attr("hidden",true);
          $('.skip_yes_'+skip).attr("hidden",false);
          // reload_tables();
          
        }
        else if(selected == "No")
        {
          $('.skip_no_'+skip).attr("hidden",false);
          $('.skip_yes_'+skip).attr("hidden",true);
         
        }


        // alert(selected);
       
    } );


$('.pass_data_facility').click(function(e){
       
       var selected =  $(this).data("facility");

       $('#health_facilities').val(selected);

       
    } );

$('.pass_data_facility_educ').click(function(e){
       
       var selected =  $(this).data("facility");

       $('#education_facilities').val(selected);

       
    } );

$('.pass_data_facility_service').click(function(e){
       
       var selected =  $(this).data("facility");

       $('#service_facilities').val(selected);

       
    } );


$('.pass_data_facility_agrilcultural').click(function(e){
       
       var selected =  $(this).data("facility");

       $('#agricultural_facilities').val(selected);

       
    } );


$('.pass_data_facility_input_dealer').click(function(e){
       
       var selected =  $(this).data("facility");

       $('#input_dealer').val(selected);

       
    } );

$('.pass_data_facility_water_facility').click(function(e){
       
       var selected =  $(this).data("facility");

       $('#water_facility').val(selected);

       
    } );


$('.pass_data_electric_facility').click(function(e){
       
       var selected =  $(this).data("facility");

       $('#electric_facility').val(selected);

       
    } );

$('.pass_data_credit_facility').click(function(e){
       
       var selected =  $(this).data("facility");

       $('#credit_facility').val(selected);

       
    } );




$('input[name="E_yes_no"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $("#sect2_table4").attr("hidden",false);
}
else if (s == "No")
{
  $("#sect2_table4").attr("hidden",true);
}

 
});

$('input[name="C1_yes_no"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $("#sect2_table5").attr("hidden",false);
}
else if (s == "No")
{
  $("#sect2_table5").attr("hidden",true);
}

 
});


$('.note_refresh').click(function(){

 jQuery('.user_notes').DataTable().ajax.reload();

});



$('.i5select').change(function(e){

            
        if($(this)[0].selectedIndex == 3)
        {
          $('.i5select_num6').attr("hidden",false);
          $('.i5select_num7').attr("hidden",true);
          
        }
        else if($(this)[0].selectedIndex == 1 || $(this)[0].selectedIndex == 2 || $(this)[0].selectedIndex == 4)
        {
          $('.i5select_num6').attr("hidden",true);
          $('.i5select_num7').attr("hidden",false);
        }
        else
        {
          $('.i5select_num6').attr("hidden",true);
          $('.i5select_num7').attr("hidden",true);
        }

     
        // alert($(this)[0].selectedIndex);          
       
    } );


// START OF SECTION 3 SKIPPING

$('.pass_data_facility_garbage_waste').click(function(e){
       
       var selected =  $(this).data("facility");

       $('#garbage_waste_facilities').val(selected);

       
    } ); 

$('.pass_data_facility_tourism_sites').click(function(e){
       
       var selected =  $(this).data("facility");

       $('#tourism_sites_facilities').val(selected);

       
    } );

$('.pass_data_facility_transport').click(function(e){
       
       var selected =  $(this).data("facility");

       $('#transport_sites_facilities').val(selected);

       
    } );

$('.pass_data_road_network_facility').click(function(e){
       
       var selected =  $(this).data("facility");

       $('#road_network').val(selected);

       
    } );




$('input[name="collection_trucks"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".collection_trucks_count_repeat").attr("hidden",false);
  
}
else if (s == "No")
{
  $(".collection_trucks_count_repeat").attr("hidden",true);
}

 
});


$('input[name="collection_bins"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".collection_bins_count_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".collection_bins_count_repeat").attr("hidden",true);
}

 
}); 


$('input[name="collection_incinerator"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".collection_incinerator_count_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".collection_incinerator_count_repeat").attr("hidden",true);
}

 
}); 

$('input[name="collection_others"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".collection_others_specify_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".collection_others_specify_repeat").attr("hidden",true);
}

 
}); 


$('input[name="collector_biodegradable"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".collector_biodegradable_specify_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".collector_biodegradable_specify_repeat").attr("hidden",true);
}

 
}); 


$('input[name="collector_recyclables"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".collector_recyclables_specify_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".collector_recyclables_specify_repeat").attr("hidden",true);
}

 
}); 

$('input[name="collector_residuals"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".collector_residuals_specify_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".collector_residuals_specify_repeat").attr("hidden",true);
}

 
}); 

$('input[name="collector_how_often_question"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".collector_how_often_question_specify_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".collector_how_often_question_specify_repeat").attr("hidden",true);
}

 
});


$('input[name="collector_payment"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".collector_amount_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".collector_amount_repeat").attr("hidden",true);
}

 
});


$('input[name="collector_able_to_serve"]').click(function(){

var s =  $(this).data("val");

if(s == "No")
{
  $(".collector_specific_areas_repeat_no").attr("hidden",false);
   
}
else if (s == "Yes")
{
  $(".collector_specific_areas_repeat_no").attr("hidden",true);
}

 
}); 


$('input[name="publictransport1"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".publictransport1_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".publictransport1_repeat").attr("hidden",true);
}

 
});


$('input[name="publictransport1"]').click(function(){

var s =  $(this).data("val");

if(s == "No")
{
  $(".publictransport1_repeat_no").attr("hidden",false);
   
}
else if (s == "Yes")
{
  $(".publictransport1_repeat_no").attr("hidden",true);
}

 
}); 


$('input[name="network_available_question"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".network_available_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".network_available_repeat").attr("hidden",true);
}

 
});


$('input[name="existing_telcom"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".existing_telcom_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".existing_telcom_repeat").attr("hidden",true);
}

 
});



$('input[name="wifi_availability"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".wifi_availability_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".wifi_availability_repeat").attr("hidden",true);
}

 
}); 


$('input[name="ict_equipment_free"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".ict_equipment_free_specify_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".ict_equipment_free_specify_repeat").attr("hidden",true);
}

 
});


$('input[name="barangay_it_personnel"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".barangay_it_personnel_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".barangay_it_personnel_repeat").attr("hidden",true);
}

 
});


$('input[name="barangay_official_website"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".barangay_official_website_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".barangay_official_website_repeat").attr("hidden",true);
}

 
});


$('input[name="barangay_social_media"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".barangay_social_media_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".barangay_social_media_repeat").attr("hidden",true);
}

 
});


$('input[name="barangay_disseminate_information"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".barangay_disseminate_information_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".barangay_disseminate_information_repeat").attr("hidden",true);
}

 
}); 


$('input[name="barangay_egovern"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".barangay_egovern_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".barangay_egovern_repeat").attr("hidden",true);
}

 
});


$('input[name="significant_events_others"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".significant_events_others_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".significant_events_others_repeat").attr("hidden",true);
}

 
});


$('input[name="significant_events_others2"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".significant_events_others2_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".significant_events_others2_repeat").attr("hidden",true);
}

 
});


$('input[name="disaster_preparedness_hotline"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".disaster_preparedness_hotline_contact_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".disaster_preparedness_hotline_contact_repeat").attr("hidden",true);
}

 
});



$('input[name="disaster_early_warning_other_loc"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".disaster_early_warning_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".disaster_early_warning_repeat").attr("hidden",true);
}

 
});


$('input[name="disaster_early_warning_other_plan"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".disaster_early_warning_plan_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".disaster_early_warning_plan_repeat").attr("hidden",true);
}

 
});


$('input[name="disaster_evacuation"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".disaster_evacuation_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".disaster_evacuation_repeat").attr("hidden",true);
}

 
});


$('input[name="disaster_evacuation_map_use_specify"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".disaster_evacuation_map_use_specify_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".disaster_evacuation_map_use_specify_repeat").attr("hidden",true);
}

 
});


$('input[name="disaster_evacuation1"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".disaster_evacuation1_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".disaster_evacuation1_repeat").attr("hidden",true);
}

 
}); 


$('input[name="disaster_evacuation_map_use_specify1"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".disaster_evacuation_map_use_specify1_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".disaster_evacuation_map_use_specify1_repeat").attr("hidden",true);
}

 
});



$('input[name="disaster_evacuation_facility"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".disaster_evacuation_facility_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".disaster_evacuation_facility_repeat").attr("hidden",true);
}

 
}); 



$('input[name="disaster_categorize_evacuation_center"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".disaster_categorize_evacuation_center_other_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".disaster_categorize_evacuation_center_other_repeat").attr("hidden",true); 
}


});


$('input[name="disaster_used_evacuation_center"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".disaster_used_evacuation_center_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".disaster_used_evacuation_center_repeat").attr("hidden",true); 
}

});


$('input[name="general_info_others"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".general_info_others_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".general_info_others_repeat").attr("hidden",true); 
}

});


$('input[name="cc13"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".cc13_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".cc13_repeat").attr("hidden",true); 
}

});


$('input[name="paved_concrete"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".paved_concrete_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".paved_concrete_repeat").attr("hidden",true); 
}

});


$('input[name="paved_concrete_maintaining"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".RN5_concrete_others_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".RN5_concrete_others_repeat").attr("hidden",true); 
}

});


$('input[name="paved_asphalt"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".paved_asphalt_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".paved_asphalt_repeat").attr("hidden",true); 
}

});



$('input[name="paved_asphalt_maintaining"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".RN5_asphalt_others_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".RN5_asphalt_others_repeat").attr("hidden",true); 
}

});


$('input[name="unpaved_gravel"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".unpaved_gravel_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".unpaved_gravel_repeat").attr("hidden",true); 
}

});


$('input[name="unpaved_gravel_maintaining"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".RN5_gravel_others_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".RN5_gravel_others_repeat").attr("hidden",true); 
}

});


$('input[name="unpaved_earth"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".unpaved_earth_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".unpaved_earth_repeat").attr("hidden",true); 
}

});


$('input[name="unpaved_earth_maintaining"]').click(function(){

var s =  $(this).data("val");

if(s == "Yes")
{
  $(".RN5_earth_others_repeat").attr("hidden",false);
   
}
else if (s == "No")
{
  $(".RN5_earth_others_repeat").attr("hidden",true); 
}

});


//END OF SECTION 3 SKIPPING




// ------------------------------END OF SKIPPING---------------------

    









// /-------------------- Signature Pad JS

var wrapper = document.getElementById("signature-pad");
var clearButton = wrapper.querySelector("[data-action=clear]");
var changeColorButton = wrapper.querySelector("[data-action=change-color]");
var undoButton = wrapper.querySelector("[data-action=undo]");
var savePNGButton = wrapper.querySelector("[data-action=save-png]");
var saveJPGButton = wrapper.querySelector("[data-action=save-jpg]");
var saveSVGButton = wrapper.querySelector("[data-action=save-svg]");
var canvas = wrapper.querySelector("canvas");
var signaturePad = new SignaturePad(canvas, {
  // It's Necessary to use an opaque color when saving image as JPEG;
  // this option can be omitted if only saving as PNG or SVG
  backgroundColor: 'rgb(255, 255, 255)'
});

// Adjust canvas coordinate space taking into account pixel ratio,
// to make it look crisp on mobile devices.
// This also causes canvas to be cleared.
function resizeCanvas() {
  // When zoomed out to less than 100%, for some very strange reason,
  // some browsers report devicePixelRatio as less than 1
  // and only part of the canvas is cleared then.
  var ratio =  Math.max(window.devicePixelRatio || 1, 1);

  // This part causes the canvas to be cleared
  canvas.width = 300;
  canvas.height = 300;
  canvas.getContext("2d").scale(ratio, ratio);

  // This library does not listen for canvas changes, so after the canvas is automatically
  // cleared by the browser, SignaturePad#isEmpty might still return false, even though the
  // canvas looks empty, because the internal data of this library wasn't cleared. To make sure
  // that the state of this library is consistent with visual state of the canvas, you
  // have to clear it manually.
  signaturePad.clear();
}

// On mobile devices it might make more sense to listen to orientation change,
// rather than window resize events.
window.onresize = resizeCanvas;
resizeCanvas();

function download(dataURL, filename) {
  var blob = dataURLToBlob(dataURL);
  var url = window.URL.createObjectURL(blob);

  var a = document.createElement("a");
  a.style = "display: none";
  a.href = url;
  a.download = filename;

  document.body.appendChild(a);
  a.click();

  window.URL.revokeObjectURL(url);
}

// One could simply use Canvas#toBlob method instead, but it's just to show
// that it can be done using result of SignaturePad#toDataURL.
function dataURLToBlob(dataURL) {
  // Code taken from https://github.com/ebidel/filer.js
  var parts = dataURL.split(';base64,');
  var contentType = parts[0].split(":")[1];
  var raw = window.atob(parts[1]);
  var rawLength = raw.length;
  var uInt8Array = new Uint8Array(rawLength);

  for (var i = 0; i < rawLength; ++i) {
    uInt8Array[i] = raw.charCodeAt(i);
  }

  return new Blob([uInt8Array], { type: contentType });
}

clearButton.addEventListener("click", function (event) {
  signaturePad.clear();
});

undoButton.addEventListener("click", function (event) {
  var data = signaturePad.toData();

  if (data) {
    data.pop(); // remove the last dot or line
    signaturePad.fromData(data);
  }
});

changeColorButton.addEventListener("click", function (event) {
  var r = Math.round(Math.random() * 255);
  var g = Math.round(Math.random() * 255);
  var b = Math.round(Math.random() * 255);
  var color = "rgb(" + r + "," + g + "," + b +")";

  signaturePad.penColor = color;
});

savePNGButton.addEventListener("click", function (event) {
  if (signaturePad.isEmpty()) {
    alert("Please provide a signature first.");
  } else {
    var dataURL = signaturePad.toDataURL();
    download(dataURL, "signature.png");
  }
});

saveJPGButton.addEventListener("click", function (event) {
  if (signaturePad.isEmpty()) {
    alert("Please provide a signature first.");
  } else {
    var dataURL = signaturePad.toDataURL("image/jpeg");
    download(dataURL, "<?= session('fullname');?>");
  }
});

saveSVGButton.addEventListener("click", function (event) {
  if (signaturePad.isEmpty()) {
    alert("Please provide a signature first.");
  } else {
    var dataURL = signaturePad.toDataURL('image/svg+xml');
    download(dataURL, "signature.svg");
  }
});

// End of Signature pad JS




//UPLOAD SIGNATURE
$("#upload_signature").on("click",function(e){
  

      e.preventDefault();

      let myForm = document.getElementById('upload_signature_form');
      let formData = new FormData(myForm);
      


   jQuery.ajax({

       url:"<?php echo base_url("/dashboard/upload"); ?>",
       type: 'POST',
       data: formData,  
       enctype: 'multipart/form-data',  
       contentType: false, 
       processData: false,
       beforeSend: function() {

                                          
                                              let timerInterval
                                                Swal.fire({
                                                  allowOutsideClick: false,
                                                  title: '<p style="font-size: 40px; color:black; ">Saving data, Please wait....</p>',
                                                  html: '',
                                                  backdrop: `
                                                    rgba(255, 255, 255, 0.8)
                                                    url("https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/attachments/delivery/asset/c49c83ef51b0c4230f8f39560b8250a3-1596267998/navy_for-light_bg/make-animated-logo-loader-for-your-website.gif")
                                                    bottom center
                                                    no-repeat
                                                  `,
                                                  timer: 5000,
                                                  timerProgressBar: true,
                                                  didOpen: () => {
                                                    Swal.showLoading()
                                                    timerInterval = setInterval(() => {
                                                      const content = Swal.getContent()
                                                      if (content) {
                                                        const b = content.querySelector('b')
                                                        if (b) {
                                                          b.textContent = Swal.getTimerLeft()
                                                        }
                                                      }
                                                    }, 100)
                                                  },
                                                  willClose: () => {
                                                    clearInterval(timerInterval)
                                                  }
                                                }).then((result) => {
                                                  /* Read more about handling dismissals below */
                                                  if (result.dismiss === Swal.DismissReason.timer) {
                                                   

                                                    // console.log('I was closed by the timer')
                                                  }
                                                })
            

                        }, 
       success: function (response) 
       {
         Swal.fire('Success!', 'E-Signature was Successfully Uploaded.', 'success');
         // $("#user_list").DataTable().ajax.reload();
         // $('.close').click();
         $('#upload_signature_form')[0].reset();
       },

       error: function(result)
                                 {
                                      
                                      Swal.fire('Failed to Upload','Please Select the downloaded E-signature file.','error');
                                 }


   });


}); //END OF UPLOAD




// -------------SAVE BUTTON ON THE END OF THE SECTION--------------------

$("#save_sec_4, #save_sec_3, #save_sec_2, #save_sec_1").on("click",function(e)
{

    var s_trigger = $(this).attr('id');


    if(s_trigger =="save_sec_1")
    {
      var q_form = 1;
      data_preloading(q_form);
    }
     else if(s_trigger =="save_sec_2")
    {
      var q_form = 2;
      data_preloading(q_form);
      
    }
     else if(s_trigger =="save_sec_3")
    {
      var q_form = 3;
      data_preloading(q_form);
     
    }
     else if(s_trigger =="save_sec_4")
    {
      var q_form = 4;
      data_preloading(q_form);
      
    }

  
});





$(document).on("click", ".delete_button", function () {

    
    
     var table_name = $(this).data('table_name');
     var data = $(this).data();

     // console.log(data);
                                   jQuery.ajax({
                                                type: 'post',
                                                url:"<?php echo base_url("/personnel/delete_data_bpq_tables"); ?>",
                                                data: data,
                                                success: function () {

                                                  
                                                 jQuery('.'+table_name).DataTable().ajax.reload();
                                                 Swal.fire('Deleted!', '', 'success')

                                                 .then(()=>{
                                                                                                                                                                              
                                                    // $('.close').click(); //hiding modal statement doesnt work. this one works
                                                    // $('#submit_de')[0].reset();  //reset my forms values to blank
                                                                      
                                                });
                                                 
                                                }
                                                });
 
});

$("#add_notes").on("click",function(e)
{

    (async () => {

        const { value: text } = await Swal.fire({
        input: 'textarea',
        inputLabel: 'Add a note',
        inputPlaceholder: 'Type your message here...',
        inputAttributes: {
          'aria-label': 'Type your message here'
        },
        showCancelButton: true
        })

      if (text) {
  
  var message = text;
        jQuery.ajax({
                                                type: 'post',
                                                url:"<?php echo base_url("/personnel/save_note"); ?>",
                                                data: {'message': message}, 
                                                success: function () {

                                                  
                                                 // jQuery('.'+get_table_form).DataTable().ajax.reload();
                                                 Swal.fire('Success.', '', 'info')

                                                 .then(()=>{
                                                                                                                                                                              
                                                    $('.close').click(); //hiding modal statement 
                                                                      
                                                });
                                                 
                                                }
                                              });


                }
 
    })()

  
});


// ------RUNNING SUM----------
$('.land_classification').on('change', function()
{
      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#total_land_area').text(jQuery('.land_classification').sum());
  
});


//GET TOTAL MALE 
$('.total_crime_m').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  


var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_capt_m').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  


var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_kgwd_m').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  


var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_sect_m').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  


var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});




$('.total_treasurer_m').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  


var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});




$('.total_tanod_m').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  


var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});




$('.total_hdoctor_m').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  


var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_nscholar_m').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  


var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_prkleader_m').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_enrofficer_m').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_librarian_m').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_dcworker_m').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_utworker_m').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_others_m').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});



//GET TOTAL FEMALE
$('.total_crime_f').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_capt_f').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_kgwd_f').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_sect_f').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_treasurer_f').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});



$('.total_tanod_f').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});



$('.total_hdoctor_f').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});





$('.total_nscholar_f').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});



$('.total_prkleader_f').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});



$('.total_enrofficer_f').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_librarian_f').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});



$('.total_utworker_f').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_dcworker_f').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});


$('.total_others_f').on('change', function()
{

  var getSection = $(this).data('val'); 
  var str = getSection.substring(1);

      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#'+getSection).text(jQuery('.'+getSection).sum());
  

var val1 = 0;        
var val2 = 0;  

val1 = parseInt($('#f'+str).html());        
val2 = parseInt($('#m'+str).html());

$('#'+str+'_total').text( val1+val2);

});












// ----START OF SECTION 3---

$('.significant-events-climate').on('keyup', function()
{
      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#total_significant_events_climate').text(jQuery('.significant-events-climate').sum());
  
}); 


$('.significant-events-economic').on('keyup', function()
{
      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#total_significant-events-economic').text(jQuery('.significant-events-economic').sum());
  
}); 



$('.significant-events-climate2').on('keyup', function()
{
      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#total_significant-events-climate2').text(jQuery('.significant-events-climate2').sum());
  
}); 


$('.significant-events-peaceandorder').on('keyup', function()
{
      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#total_significant-events-peaceandorder').text(jQuery('.significant-events-peaceandorder').sum());
  
}); 


$('.significant-events-healthagri').on('keyup', function()
{
      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#total_significant-events-healthagri').text(jQuery('.significant-events-healthagri').sum());
  
}); 


$('.significant-events-economic2').on('keyup', function()
{
      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#total_significant-events-economic2').text(jQuery('.significant-events-economic2').sum());
  
}); 


$('.significant-events-peaceandorder2').on('keyup', function()
{
      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#total_significant-events-peaceandorder2').text(jQuery('.significant-events-peaceandorder2').sum());
  
}); 


$('.significant-events-healthagri2').on('keyup', function()
{
      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#total_significant-events-healthagri2').text(jQuery('.significant-events-healthagri2').sum());
  
}); 



$('.brgy-establishments').on('keyup', function()
{
      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#total_brgy_establishments').text(jQuery('.brgy-establishments').sum());
  
}); 


$('.sector-thematic').on('keyup', function()
{
      (function( $ ){
   $.fn.sum=function () {
    var sum=0;
        $(this).each(function(index, element){
            if($(element).val()!="")
            sum += parseFloat($(element).val());
        });
    return sum;
    }; 
})( jQuery );
  
  $('#total_sector-thematic').text(jQuery('.sector-thematic').sum());
  
}); 

// ---END OF SECTION 3 ----






$('#final_submission').on('click', function()
{

  Swal.fire({
  title: 'Submitting this questionnaire will tag it as a final data.',
  text: "You won't be able to change the data after submitting, click cancel if you want to review the entries.",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, Submit.'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Submitted Successfully!',
      'Your questionnaire data has been sent.',
      'success'
    )
  }

})


});
	
})();

</script>

</body>
</html>
