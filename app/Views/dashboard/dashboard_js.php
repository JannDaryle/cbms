

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

welcome_message();
load_this();
get_form_1();






 jQuery('.submit_table_1').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    "scrollX": true,
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


 jQuery('#table1, #table2, #table3, #table4, #table5').DataTable({

       "responsive": true, 
       "bPaginate": false,
       "bFilter": false,
       "bInfo": false,
       "scrollX": true,
       "ordering": false

 });


 jQuery('.submit_table_2').DataTable({

    "order":[],
    "serverSide":true,
    "searching": false, 
    "scrollX": true,
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
    "scrollX": true,
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
    "scrollX": false,
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
    "scrollX": false,
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
    "scrollX": false,
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


 


}); //END OF ONLOAD 





//This Function Auto Saves the previous section when transferring to a new navigation section
jQuery.noConflict();
$(document).on('shown.bs.tab', 'a[data-toggle="tab"]', function (e) 
{

   var q1 = e.target; // newly activated tab
   var q2 = e.relatedTarget.href; // previous active tab

   const prev_tab = q2.substring(q2.indexOf('#') + 1); 

   if(prev_tab == "v-pills-home")
   {

      var pass_form = 1; 
      trigger_save(pass_form);
     
   }
   else if(prev_tab == "v-pills-profile")
   {

      var pass_form = 2; 
      trigger_save(pass_form);   
   }
   else if(prev_tab == "v-pills-messages")
   {

      var pass_form = 3;  
      trigger_save(pass_form);  
   }
   else if(prev_tab == "v-pills-settings")
   {

      var pass_form = 4; 
      trigger_save(pass_form);   
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

getLocation();

$("#geo_hall_lat").attr("hidden",false);
$("#geo_hall_long").attr("hidden",false);

function getLocation() {
  var x = document.getElementById("geo_hall_lat");
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}


function showPosition(position) 
{

  $("#geo_hall_lat").val(position.coords.latitude);
  $("#geo_hall_long").val(position.coords.longitude);
 
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


$('#menu-toggle').click(function(e){
         
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
       
         
} );

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
    download(dataURL, "signature.jpg");
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
        Swal.fire(text)
                }
 
    })()

  
});


// ------RUNNING SUM----------
$('.land_classification').on('keyup', function()
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




	
})();

</script>

</body>
</html>
