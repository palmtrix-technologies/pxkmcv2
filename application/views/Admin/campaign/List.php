 
 <!-- Main Content -->
 <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Campaign</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">

             
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                       
                        <section class="hk-sec-wrapper">
                        <div class="card-header" style="
    background-color: black;
    color: aliceblue;
">
                        Campaigns
                                                </div>
                            <!-- <p class="mb-40">Use buttons: <code>['copy', 'csv', 'excel', 'pdf', 'print']</code> to add export table options.</p> -->
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_3" class="table table-hover w-100 display">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Period</th>
                                                    <th>Expecting Members</th>
                                                    <th>Membership Fee</th>
                                                    <th>Members</th>
                                                    <th>Collected Fee</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($campaigns as $campaign) { ?>

                                                <tr>
                                                    <td><?php echo $campaign-></td>
                                                    <td>10-Mar-2022 - 10-mar-2022</td>
                                                    <td>1000 </td>
                                                    <td>10 AED</td>
                                                    <td>0</td>
                                                    <td>0</td>
                                                    <td>Active</td>
                                                    <td><td>
                                                            <a href="#" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <i class="icon-pencil"></i> </a>
                                                            <a href="#" data-toggle="tooltip" data-original-title="View"> <i class="icon-eye text-danger"></i> </a>
                                                        </td></td>
                                                </tr>
                                                <?php } ?>
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

