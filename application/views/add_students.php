<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>KJSCE Feedback System | Admin</title>
    <!-- Icons-->
   
    <link href="<?= base_url(); ?>assets/css/coreui-icons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/flag-icon.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/fontawesome.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!--jquery -->
  <script src="<?=base_url();?>dist/js/jquery-3.3.1.slim.min.js"></script>
  

    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    // Shared ID
    gtag('config', 'UA-118965717-3');
    // Bootstrap ID
    gtag('config', 'UA-118965717-5');
    </script>
    <script>
    $(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });
  
});
    </script>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <?php $this->load->view('navbar'); ?>
    <div class="app-body">
        <?php $this->load->view('sidebar'); ?>

        <main class="main" style="overflow: hidden;">
             <table style="width : 100%;"> 
             <tr>
             <td style="width : 50%;">  
			<div class="container" style="width: 50%;margin: 0 auto;padding-top: 30px;">
           <?php $attr = array('name' => 'form1','method' => 'POST');
              echo form_open('Ctrl_admin/add_students',$attr); ?>
       <div class="inner-width"style="font-size: 20px;text-transform: uppercase;display: inline-block;border-bottom: 4px solid;padding-bottom:0px;color: #333;text-align: center;margin-bottom:20px">
                <p>Student-Login</p>
    </div>
   <div class="form-group">
    <label for="exampleInputFid" class="bmd-label-floating">Enter Registration no. : </label>
    <input type="number" name="reg_no" class="form-control" id="reg_no" pattern=".{3,7}" oninvalid="this.setCustomValidity('Please enter your 3-7 digit Reg No')" oninput="setCustomValidity('')" required>
  </div>
  <div class="form-group">
    <label for="exampleInputName" class="bmd-label-floating">Enter Student-ID : </label>
    <input type="text" name="Sid" class="form-control" id="Sid" pattern=".{11,}" oninvalid="this.setCustomValidity('Please enter 11 digit student ID')" oninput="setCustomValidity('')" required>
  </div>
  <div class="form-group">
    <label for="exampleInputName" class="bmd-label-floating">Enter First Name : </label>
    <input type="text" name="FName" class="form-control" id="FName" oninvalid="this.setCustomValidity('Please enter student first name')" oninput="setCustomValidity('')" required>
  </div>
  <div class="form-group">
    <label for="exampleInputName" class="bmd-label-floating">Enter Last Name : </label>
    <input type="text" name="LName" class="form-control" id="LName" oninvalid="this.setCustomValidity('Please enter student last Name')" oninput="setCustomValidity('')" required>
  </div>
  <div class="form-group">
    <label for="exampleInputName" class="bmd-label-floating">Enter Middle Name : </label>
    <input type="text" name="MName" class="form-control" id="MName" oninvalid="this.setCustomValidity('Please enter student middle Name')" oninput="setCustomValidity('')" required>
  </div>
  <div class="form-group">
    <label for="exampleInputName" class="bmd-label-floating">Select Branch : </label>
    <select name="Branch" class="form-control" id="Branch" oninvalid="this.setCustomValidity('Please select Branch')" oninput="setCustomValidity('')" required>
    <option value="" selected>Choose Branch</option>
    <option value="IT">IT</option>
    <option value="Comps">Comps</option>
    <option value="Mech">Mech</option>
    <option value="EXTC">EXTC</option>
    <option value="ETRX">ETRX</option>
	</select>
  </div>
  <div class="form-group">
    <label for="exampleInputName" class="bmd-label-floating">Select Year : </label>
    <select name="Year" class="form-control" id="Year" oninvalid="this.setCustomValidity('Please select Year')" oninput="setCustomValidity('')" required>
    <option value="" selected>Choose Year</option>
    <option value="1">1st</option>
    <option value="2">2nd</option>
    <option value="3">3rd</option>
    <option value="4">4th</option>
	</select>
  </div>
  <div class="form-group">
    <label for="exampleInputName" class="bmd-label-floating">Select Sem : </label>
    <select name="Sem" class="form-control" id="Sem" oninvalid="this.setCustomValidity('Please select Sem')" oninput="setCustomValidity('')" required>
    <option value="" selected>Choose Sem</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
	</select>
  </div>
  <div class="form-group">
    <label for="exampleInputName" class="bmd-label-floating">Select Div : </label>
    <select name="div" class="form-control" id="div" oninvalid="this.setCustomValidity('Please select Div')" oninput="setCustomValidity('')" required>
    <option value="" selected>Choose Div</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
	</select>
  </div>
  <div class="form-group">
    <label for="exampleInputName" class="bmd-label-floating">Select Batch : </label>
    <select name="batch" class="form-control" id="batch" oninvalid="this.setCustomValidity('Please select Batch')" oninput="setCustomValidity('')" required>
    <option value="" selected>Choose Batch</option>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
    <option value="E">E</option>
    <option value="F">F</option>
    <option value="G">G</option>
    <option value="H">H</option>
	</select>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword" class="bmd-label-floating">Enter Password : </label>
    <input type="password" name="password" class="form-control" id="password" pattern=".{8,15}" oninvalid="this.setCustomValidity('Please enter 8-15 digit password ')" oninput="setCustomValidity('')" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword" class="bmd-label-floating">Enter Attendance : </label>
    <input type="number" name="attendance" class="form-control" id="attendance" pattern=".{1,3}" oninvalid="this.setCustomValidity('Please enter 1-3 digit password ')" oninput="setCustomValidity('')" required>
  </div>
						  

               <button class="button new btn-lg round" style="width:80%;background-color: #83919c;" align="center" type="submit"><span></span><b style="color : #fafafa;"> Add </b></button>
        
</form>
		<?php 
		if(isset($_POST['success']))
		{
			$resp=$_POST['resp'];
			if($_POST['success']==1)
			{
				print "<p style='color:green;'>$resp</p>";
			}
			else if($_POST['success']==0)
			{
				print "<p style='color:red;'>$resp</p>";
			}
		}
		?>
        </div>
        </td>
        <td style="width : 50%;position: fixed;top: 50%;left: 50%;">
        <?php $attr = array('name' => 'formcsv','method' => 'POST','id' => 'formcsv','accept' => '.csv','enctype' => 'multipart/form-data');
              echo form_open('Ctrl_admin/add_students',$attr); ?>
        <center><div class="container">
        <div class="col-lg-6 col-sm-6 col-12">
            <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-primary"style="margin-right:20px;width:10em;height:2.8em">
                        Browse&hellip; <input type="file" name="csvstu" style="display: none;" required>
                    </span>
                </label>
                <input type="text" style="padding:10px"name="uploadcsv" value="Upload csv here.." class="form-control" readonly>
            </div>
<button class="button new btn-lg round" style="width:80%;background-color: #83919c;" align="center" type="submit"><span></span><b style="color: #fafafa;">Add</b></button>
        </div></center>
        </form>
        <?php 
			if(isset($_POST['success']))
			{
				if($_POST['success']==21)
				{
					$count=$_POST['count'];
					print "<p style='color:green;'>$resp</p>";
					print "<p style='color:green;'>Number of records added are $count</p>";
				}
				else if($_POST['success']==20)
				{
					print "<p style='color:red;'>$resp</p>";
				}
		}
		?>
        </td>
        </tr>
        </table>
        </main>

    </div>
    <br><br>
    <footer class="app-footer">
        <div class="text-center"style="position:static;">
            <strong>Copyright&copy;<a href="#"style="color:rgb(48, 119, 180);">KJSCE </a></strong> <span>2019-2020 All rights reserved.</span>
        </div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="<?= base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/pace.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/perfect-scrollbar.min.js">
    </script>
    <script src="<?= base_url(); ?>assets/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="<?= base_url(); ?>assets/js/Chart.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom-tooltips.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    
    <!-- <script src="<?=base_url();?>plugins/printer/printThis.js" charset="utf-8"></script> -->
     <!-- <script src=" <?=base_url();?>plugins/fastclick/fastclick.js"></script> -->
    <script src="<?= base_url(); ?>assets/js/main.js"></script>

    <!-- Custom AJAX Calls -->
   

            

</body>

</html>
