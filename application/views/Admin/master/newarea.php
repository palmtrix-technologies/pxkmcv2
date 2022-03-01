<!-- Main Content -->
<div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form Element</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
          
                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">ADD NEW AREA</h5>
                            <hr>
                           
                            <div class="row">
                                <div class="col-sm">
                                <form action="<?php echo base_url();?>Add_area" method="post">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Area</label>
                                                <input class="form-control" id="area" name="area" placeholder="" value="" type="text">
                                            </div>

                                            
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Emirates</label>
                                                <select class="form-control" name="emirates" id="emirates" value="--Select Type--">
                                <option value="select">--Select Type--</option>
                                <?php

                                foreach ($emirates as $emirates) {
                                    echo '<option value="' . $emirates->id . '" id="' . $emirates->id . '">' . $emirates->emirates_name . '</option>';
                                }
                                ?>

                            </select>
                                            </div>
                                           
                                        </div>
                                        
                                         
                                        <button class="btn btn-primary" type="submit">Add</button>
                                            </div>
                                        </div>
                                      
                                      
                                    </div>
                                       
                                     
                                      <hr>
</form>   
                                   
                                </div>
                            </div>
                        </section>
                      
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->

            <script>
           
                </script>

            
