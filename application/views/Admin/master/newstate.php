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
                            <h5 class="hk-sec-title">ADD NEW STATE</h5>
                            <hr>
                           
                            <div class="row">
                                <div class="col-sm">
                                <form action="<?php echo base_url();?>Add_state" method="post">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">State</label>
                                                <input class="form-control" id="state" name="state" placeholder="" value="" type="text">
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
                

function AddCampaign()
{
    var AddCampaign = {
        "campaign_code": $("#campaign_code").val(),
        "campaign_name":$("#campaign_name").val(),
         "Start_Date": $start_date,
         "End_Date": $end_date,
          "Campaign_description": $("#Campaign_description").val(),
           "Registration_fee": $("#fee").val(), 
           "expected_members": $("#total_val").val(),
             "status":0
      };
      var postData = {
        campaign: AddCampaign,
      }
     

         var request = $.ajax({
            url: 'campaign-store',
            type: 'POST',
            data: {postData:postData} ,
            dataType: 'JSON'
            });
            request.done( function ( data ) {
                $id=$.trim(data);
                add_quota($id);
             
              });
              request.fail( function ( jqXHR, textStatus) {
                
             
              });
          
    


 
}



                </script>

            
