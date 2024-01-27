<script>
  $(document).ready(function(){
    $('.list-group').each(function(){
      if(String($(this).text()).trim() == ""){
        $(this).html("")
      }
    })
    
     window.viewer_modal = function($src = ''){
      start_loader()
      var t = $src.split('.')
      t = t[1]
      if(t =='mp4'){
        var view = $("<video src='"+$src+"' controls autoplay></video>")
      }else{
        var view = $("<img src='"+$src+"' />")
      }
      $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
      $('#viewer_modal .modal-content').append(view)
      $('#viewer_modal').modal({
              show:true,
              backdrop:'static',
              keyboard:false,
              focus:true
            })
            end_loader()  

  }
    window.uni_modal = function($title = '' , $url='',$size=""){
        start_loader()
        $.ajax({
            url:$url,
            error:err=>{
                console.log()
                alert("An error occured")
            },
            success:function(resp){
                if(resp){
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    if($size != ''){
                        $('#uni_modal .modal-dialog').addClass($size+'  modal-dialog-centered')
                    }else{
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                    }
                    $('#uni_modal').modal({
                      show:true,
                      backdrop:'static',
                      keyboard:false,
                      focus:true
                    })
                    end_loader()
                }
            }
        })
    }
    window._conf = function($msg='',$func='',$params = []){
       $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
       $('#confirm_modal .modal-body').html($msg)
       $('#confirm_modal').modal('show')
    }
  })
</script>
<style>
.footer {
  background-color: #414141;
  width: 100%;
  text-align: left;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 16px;
  padding: 50px;
  /* margin-top: 50px; */
}
.container1{
  border-color:white;
  /* border:2px solid white; */
  border-radius:10px;
  display:flex;
  margin:10px;
  margin-left:100px;

  padding:10px;  
  /* containt-justify:center; */

}
.foot{
  border-color:white;
  border:2px solid white;
  border-radius:10px;
  padding:20px 20px;
  background-color:skyblue;
  width:60%;
  
  /* text-align:center; */
  
}
input{
  width:100%;
}
.loc{
  border-color:white;
  border:2px solid white;
  border-radius:10px;
  margin-left:100px;
  text-align:center;
}
p{
  color: #ffffff;
}
h1{
  color: #ffffff;
}
textarea{
  width:100%
}


</style>    
<footer class="main-footer text-sm">
  <div class="container">
        <!-- <strong>Copyright © <?php echo date('Y') ?>.  -->
        <!-- <a href=""></a> -->
        </strong>
        <!-- All rights reserved. -->
        <div class="float-right d-none d-sm-inline-block">
          <!-- <b><?php echo $_settings->info('short_name') ?> (by: <a href="mailto:oretnom23@gmail.com" target="blank">oretnom23</a> )</b> v1.0 -->
        </div>
      </div>
      <body>
<footer class="footer">
<div class="container1">
    <div class="foot">
      <h3><b>Enquiry Form</b></h3>
      <form action="" method="">
          <label for="fullname">Fullname</label><br>
          <input type="text" class="fullname" name="fullname" placeholder="Fullname" required autofoucus><br>
          <label for="email">Email</label><br>
          <input type="email" class="email" name="email" placeholder="Email" required><br>
          <label for="message">Message</label><br>
          <textarea type="message" class="message" name="message" placeholder="Message here..." required rows="4"></textarea><br>
          <input type="submit" name="submit" class="submit" value="Send">
      </form>
    </div>
  <div class="loc">
    <p style=" font-size:18px"><h1>Location:<br></h1><p>Ganesh park,near Vidya sahakari bank,<br>wadgaon phata,sinhagad Rd,wadgaon bk,<br>pune,Maharashtra</p></p>
      <h1 class="logo"><img src="images/logo.jpg"  style="width:90px; height:70px;"></h1>
      <p class="name"> PURVA PET CLINIC</p>
      <p class="menu">Timing:Mon-Sat:10am to 2pm & 4pm to 9pm<br>Sat:10am to 12pm
      </p>
     
    </div>
  </footer>
</div>
</body>
      </footer>
    </div>
    <!-- ./wrapper -->
<div id="libraries">
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url ?>plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url ?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url ?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url ?>plugins/fullcalendar/main.js"></script>
    <!-- overlayScrollbars -->
    <!-- <script src="<?php echo base_url ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="<?php echo base_url ?>dist/js/adminlte.js"></script>
  </div>   
    <div class="daterangepicker ltr show-ranges opensright">
      <div class="ranges">
        <ul>
          <li data-range-key="Today">Today</li>
          <li data-range-key="Yesterday">Yesterday</li>
          <li data-range-key="Last 7 Days">Last 7 Days</li>
          <li data-range-key="Last 30 Days">Last 30 Days</li>
          <li data-range-key="This Month">This Month</li>
          <li data-range-key="Last Month">Last Month</li>
          <li data-range-key="Custom Range">Custom Range</li>
        </ul>
      </div>
      <div class="drp-calendar left">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-calendar right">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
    </div>
    <div class="jqvmap-label" style="display: none; left: 1093.83px; top: 394.361px;">Idaho</div>
<script>
  $(function(){
    $('.wrapper>.content-wrapper').css("min-height",$(window).height() - $('#top-Nav').height() - $('#login-nav').height() - $("footer.main-footer").height())
  })
</script>