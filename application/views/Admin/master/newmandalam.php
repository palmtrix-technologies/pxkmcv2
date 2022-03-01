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
                            <h5 class="hk-sec-title">ADD NEW MANDALAM</h5>
                            <hr>
                           
                            <div class="row">
                                <div class="col-sm">
                                <form action="<?php echo base_url();?>Add_mandalam" method="post">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Mandalam</label>
                                                <input class="form-control" id="mandalam" name="mandalam" placeholder="" value="" type="text">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">District</label>
                                                <select class="form-control" name="district" id="district" value="--Select Type--">
                                <option value="select">--Select Type--</option>
                                <?php

                                foreach ($district as $district) {
                                    echo '<option value="' . $district->id . '" id="' . $district->id . '">' . $district->district_name . '</option>';
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

            
