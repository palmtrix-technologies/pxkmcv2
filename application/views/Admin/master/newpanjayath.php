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
                            <h5 class="hk-sec-title">ADD NEW PANJAYATH</h5>
                            <hr>
                           
                            <div class="row">
                                <div class="col-sm">
                                <form action="<?php echo base_url();?>Add_panjayath" method="post">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Panjayath</label>
                                                <input class="form-control" id="panjayath" name="panjayath" placeholder="" value="" type="text">
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Type</label>
                                                <select class="form-control" name="type" id="type" value="--Select Type--">
                                <option value="select">--Select Type--</option>
                                <option value="Municipality">Municipality</option>
                                <option value="Grama Panchayat">Grama Panchayat</option>
                            </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Mandalam</label>
                                                <select class="form-control" name="mandalam" id="mandalam" value="--Select Type--">
                                <option value="select">--Select Type--</option>
                                <?php

                                foreach ($mandalam as $mandalam) {
                                    echo '<option value="' . $mandalam->id . '" id="' . $mandalam->id . '">' . $mandalam->mandalam_name . '</option>';
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

            
