<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>KJSCE Feedback | Update Timetable</title>
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

    <!-- Select2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    
    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" />

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

    <style>
        th, td {
            padding: 8px 8px;
        }

        select {
            padding-left: 3px 4px;
        }

        table {
            margin-bottom: 1rem;
        }

    </style>

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <?php $this->load->view('navbar'); ?>
    <div class="app-body">
        <?php $this->load->view('sidebar'); ?>

        <main class="main" style="overflow: hidden;">

            <div class="container-fluid mt-4">
                <div class="animated fadeIn">
                    <!-- /.row-->
                    <!-- HEAD -->
                    <!-- Content Wrapper. Contains page content -->
                    <div class="content-wrapper" style="padding-left: 10px">
                        <!-- Content Header (Page header) -->
                        <section class="content-header">
                            <br> <!--add spacing between ---->

                            <!--<h3 class="box-title col-xs-11">Select Fields and Click Generate</h3>-->
                            <div class="row" id="printdiv">
                                <div class="col-xs-6">
                                    <div class="box-box-danger">
                                        <div class="box-header with-border">
                                        </div>
                                        <div class="box-body">
                                            <div id="rep">
                                                
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row mx-auto mt-5 pl-5" id="printdiv">
                                                            <div class="col-sm-5">
                
                                                            </div>
                                                            <!-- /.col sm 5-->


<!-- time table-->
                                                            <center>
<div class="login1" style="text-align: center;">                                                                          
    
        <?php 
            $attr = array('class' => 'register','method' => 'POST');
            echo form_open('Timetable/updateLoadMat',$attr);
        ?>
        <!-- <form action=<?php echo base_url(); ?>"updateLoadMat/updateLoadMat1/" class="register" method="POST"> -->
                                
                            Faculty Name:

                            

                            <select id="F_Name" required="required" name="F_name" required="true">
                                <?php
                                foreach ($NameOfFaculty as $object) {
                                    echo '<option value="'.$object->NameOfFaculty.'">'.$object->NameOfFaculty.'</option>';
                                }
                                
                                ?>
                            </select>
                         
                                    
                    
                    
                    <input type="button" value="Add Class" onClick="addRow('dataTable')" /> 
                    <input type="button" value="Remove Class" onClick="deleteRow('dataTable')"  /> 
                    
        <center>    
               <table id="dataTable" class="form" border="1">
                  <tbody>
            <tr bgcolor="#f6f6f6">
            <th rowspan="2">Semester</th>
            <th rowspan="2">Division</th>
            <th rowspan="2">Course</th>
            <th rowspan="2">Theory</th>
            <th rowspan="2">Practical</th>
            <th colspan="8" style="width: 100%;"><center>Batch</center></th>
        </tr>
        <tr>
            
            
            <td>A1</td>
            <td>A2</td>
            <td>A3</td>
            <td>A4</td>
            <td>B1</td>
            <td>B2</td>
            <td>B3</td>
            <td>B4</td>

        </tr>
                    <tr>
                      <p>
                                        
                             <td>
                            <select id="sem1" required="required" name="sem1">
                                <option id="opt3" value="3">3</option>
                                <option id="opt4" value="4">4</option>
                                <option id="opt5" value="5">5</option>
                                <option id="opt6" value="6">6</option>
                                <option id="opt7" value="7">7</option>
                                <option id="opt8" value="8">8</option>
                            </select>   

                            
                         </td>
                        <td>
                            <select id="divi1" required="required" name="divi1">
                                <option  id="opt1" value="5">5</option>
                                <option  id="opt2" value="6">6</option>
                         </td>
                         <td>
                            <select id="course1" required="required" name="course1">
                                <?php
                                    foreach ($Cname as $object) {
                                        echo '<option value="'.$object->Cname.'">'.$object->Cname.'</option>';
                                    }
                                ?>
                         </td>
                        <td>
                            <input type="checkbox" id="chkbx_theory1" name="chkbx_theory1"/>
                                
                         </td>
                         
                         <td>
                            
                            <input type="checkbox" id="chkbx_pracs1" name="chkbx_pracs1" onClick="pr_enable()"/>
                            </select>
                         </td>
                            <td>
                                <input type="checkbox" id="chkbx_ba1" name="chkbx_ba1"/>
                            </td>
                            <td>
                                <input type="checkbox" id="chkbx_ba2" name="chkbx_ba2"/>
                            </td>
                            <td>
                                <input type="checkbox" id="chkbx_ba3" name="chkbx_ba3"/>
                            </td>
                            <td>
                                <input type="checkbox" id="chkbx_ba4" name="chkbx_ba4"/>
                            </td>
                            <td>
                                <input type="checkbox" id="chkbx_bb1" name="chkbx_bb1"/>
                            </td>
                            <td>
                                <input type="checkbox" id="chkbx_bb2" name="chkbx_bb2"/>
                            </td>
                            <td>
                                <input type="checkbox" id="chkbx_bb3" name="chkbx_bb3"/>
                            </td>
                            <td>
                                <input type="checkbox" id="chkbx_bb4" name="chkbx_bb4"/>
                            </td>
                            
                        
                            </p>
                    </tr>
                    </tbody>
                </table>
</center>

                <div class="clear"></div>
            <input type="textbox" id="numrow" value="1" hidden="true" name="numrow"/>
            <input class="submit" type="submit" value="Confirm &raquo;" />
                        
            <div class="clear"></div>
        </form>
</center>





                                                            <div class="col-sm-12 d-none d-md-block">
                                                                <div id="out">
                                                                    <canvas id="barChart" style="height:480px"></canvas>
                                                                </div>

                                                            </div>
                                                            <!-- /.col sm-12 d-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <div class="text-center">
                                            
                                        </div>
                                    </div>
                                </div>
                        </section>
                        <!-- /.content -->
                    </div>

                </div>
            </div>
        </main>

    </div>
    <footer class="app-footer">
        <div class="text-center">
            <a href="#">KJSCE</a>
            <span>&copy; 2019 All rights reserved.</span>
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
    <script src="<?= base_url(); ?>assets/js/custom-tooltips.min.js">
  
    </script>
    <!-- <script src="<?=base_url();?>plugins/printer/printThis.js" charset="utf-8"></script> -->
     <!-- <script src=" <?=base_url();?>plugins/fastclick/fastclick.js"></script> -->
    <script src="<?= base_url(); ?>assets/js/main.js"></script>

    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>


    <!-- Custom AJAX Calls -->
    <script type="text/javascript">
        $(function() {
            $('#F_Name').select2(); 
            // $('#sem1').select2(); 
            // $('#divi1').select2(); 
            // $('#course1').select2(); 

            $('#dataTable').DataTable();
        });
    </script>

            

</body>

</html>