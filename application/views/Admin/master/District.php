 
 <!-- Main Content -->
 <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Master</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
            <div class="row">
            <div class="col-xl-12">
            <section class="hk-sec-wrapper"> 
            <div style="background-color: #8a99a0d9; margin-bottom: 14px;width: 12%;" class="col-xl-2">
            <span class="new-button"><a href="<?php echo base_url(); ?>newdistrict" class="btn btn-sm"><span class="fa fa-plus"></span> &nbsp;Add New</a></span>
</div>
                   
                       
                      
                        <div class="card-header" style="
    background-color: black;
    color: aliceblue;
">
                        DISTRICT
                                                </div>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_3" class="table table-hover w-100 display">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:center;">ID</th>
                                                    <th style="text-align:center;">DISTRICT</th>
                                                    <th style="text-align:center;">STATE</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

                                            <?php $i=1;
                        foreach ($district as $key => $value1)
                         {  
                        	?>
                     <tr>
                        <td class="text-center"><?php echo $i;?></td>
                        <td class="text-center"><?php echo $value1->district_name;?></td>
                        <td class="text-center"><?php echo $value1->state_name;?></td>
                       
                     </tr>
                     <?php $i++; } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                      
                    </div>
                </div>
                <!-- /Row -->

            </div>
            <!-- /Container -->

           <!-- Data Table JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/dist/js/dataTables-data.js"></script>

