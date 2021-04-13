<!DOCTYPE html>

<style>



body{
   width: auto;
    height: auto;
    margin: 0;
    padding: 0;
    background:url(<?php echo base_url('/assets/img/image2.png'); ?>);
                
    background-size: stretch;
    background-position: center;
    font-family: sans-serif;
    background-repeat: repeat;
}
.login-box{
    width: 320px;
    height: 500px;
    background: rgba(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
}
.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
h3{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}


.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #e6f2f7;
    font-size: 15px;
}
.login-box input[type="button"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.login-box input[type="button"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
.login-box a:hover
{
    color: #39dc79;
}

input::placeholder {
  color: #d9f0fa;
}



</style>


<html lang="en">
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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



<head>
   <title>CBMS Login</title>
</head>
    <body>
    <div class="login-box">
    <img src="<?php echo base_url('assets/img/cbms_logo_resized.png'); ?>" class="avatar"> 
        <h3>Community Based Monitoring System</h3>
            <form method="post" id="login_form">
            <p>Username</p>
            <input type="text" id="email" name="email" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" id="password" name="password" placeholder="Enter Password">
            <input type="button" id="btn_submit" value="Login">
            <!-- <button type="button" id="btn_submit" class="btn btn-primary">Login</button> -->
            
          <a href="<?= site_url('personnel/signup') ?>"><i>Register Here<br></i></a>
          <p style="color: #d9f0fa; font-size: 13px;">(Shown only during development)</p>  
            </form>
        
        
        </div>
    
    </body>





<script>

$("#btn_submit").on("click",function(e){


           if($("#email").val() != "" && $("#password").val() != ""   )
           {

            var form = document.getElementById("login_form");
               
                  let timerInterval;

                  Swal.fire({
                    title: 'Logging in..',
                    html: 'Please wait... <b></b> milliseconds.',
                    timer: 1500,
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

                      $.ajax({
                                                type: 'post',
                                                url:"<?php echo base_url("/personnel/login"); ?>",
                                                data: $('#login_form').serialize(),
                                                success: function () {                                                
                                                                                                                                                                                                                                                            
                                                    window.location = "<?= site_url('dashboard') ?>";
                                                                                                                                              
                                                },
                                                 error: function(result){
                                                
                                                $('#login_form')[0].reset();
                                                Swal.fire('Note','Wrong email or password.','warning');
                                                  }
                                              });
                      
                    }
                  })


           }
           else
           {
               
            Swal.fire('Notice','Email or Password is empty.','info');
           }
              

});

</script>





</html>