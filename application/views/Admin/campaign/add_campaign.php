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
                            <h5 class="hk-sec-title">ADD NEW CAMPAIGN</h5>
                            <hr>
                           
                            <div class="row">
                                <div class="col-sm">
                                 
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Campaign Name</label>
                                                <input class="form-control" id="campaign_name" placeholder="" value="" type="text">
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="lastName">Duration</label>
                                                <input class="form-control dateranger" id="dates" type="text" name="" placeholder="" value="" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">Campaign Description</label>
                                                <textarea class="form-control" id="Campaign_description" rows="5" placeholder="Textarea"></textarea>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="form-group">
                                                <label for="lastName">Membership Fee</label>
                                                <input class="form-control" id="fee"  type="text" placeholder="" value="" >
                                                </div>
                                                <div class="form-group">
                                                <label for="lastName">Campaign Code</label>
                                                <input class="form-control"  id="campaign_code" type="text" placeholder="" value="" >
                                                </div>
                                            </div>
                                        </div>
                                       

                                     
                                        <hr>
                                        <h6 class="form-group">Campaign Quata </h6>
                                        <div class="row">
                                            <div class="col-md-4 form-group">
                                                <label for="firstName">Default For Panjayath/municipality/corporation</label>
                                                <input class="form-control" id="txtdefaultvaluepanjayath" placeholder="" value="" type="text">
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label for="lastName">Total</label>
                                                <input class="form-control"  id="total_val" type="text" placeholder="" value="" >
                                            </div>
                                        </div>
                                        <hr>

                                        <h6 class="form-group">Campaign Quata Configuration</h6>
                                        <div class="accordion accordion-type-2" id="accordion_2">
                                        <?php  foreach($Districts as $District){  ?>
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between">
                                                <a role="button" data-toggle="collapse" href="#collapse_1i<?= $District->id ?>" aria-expanded="false" class="collapsed"><?php echo $District->district_name;?></a>
                                                <span class="pull-right d_value" data-key="<?= $District->id ?>" >500</span>
                                            </div>
                                            <div id="collapse_1i<?= $District->id?>" class="collapse" data-parent="#accordion_2" role="tabpanel" style="">
                                                <div class="card-body pa-15"> 
                                                <table id="edit_datable_1" class="table  table-bordered table-striped mb-0 edit_datable_1" style="cursor: pointer;">
                                               
                                                <tbody>
                                                <?php
                                                    $mandalams = $this->Model_campaign->getall_mandalam($District->id);
                                                    foreach($mandalams as $mandalam){?>
                                                    <tr class="mandalam" style="background-color:red">
                                                    <th ><?=$mandalam->mandalam_name;?></th>
                                                        <th class="m_value" data-key="<?=$mandalam->id?>" data-id="<?=$District->id?>" >0</th>
                                                      
                                                    </tr>
                                                    <?php 
                                                    $villages = $this->Model_campaign->getall_panjayath($mandalam->id);
                                                    foreach($villages as $village){?>
                                                    <tr class="panjayath">
                                                        <td tabindex="1"><?php echo $village->name;?></td>
                                                        <td class="p_value" data-key="<?=$village->id?>" data-id="<?=$mandalam->id?>" tabindex="1">0</td>
                                                       
                                                    </tr>

                                                 <?php } }?>
                                                   
                                                </tbody>
                                               
                                            </table>        
                                            
                                            </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                      
                                    </div>
                                       
                                     
                                      <hr>
                                        <button class="btn btn-primary" onClick="AddCampaign();" type="submit">Continue to checkout</button>
                                   
                                </div>
                            </div>
                        </section>
                      
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->

            <script>
                $start_date="2022-03-01";
                $end_date="2022-03-01";
                $(document).ready(function(){
                    $("#txtdefaultvaluepanjayath").change(function(){
                        $('.p_value').text($("#txtdefaultvaluepanjayath").val());
                        calculate_total();
                    });

                    $('.dateranger').daterangepicker({
                        opens: 'left',
                        "cancelClass": "btn-secondary"
                    }, function(start, end, label) {
                        $start_date=start.format('YYYY-MM-DD');
                        $end_date=end.format('YYYY-MM-DD');
                        // alert($start_date);
                        // $('.dateranger').val(start.format('YYYY-MM-DD') + '|' + end.format('YYYY-MM-DD'));
                    });
                    

                   


                });


                function calculate_total(){
                    $('.m_value').each(function(){
                        var id = $(this).attr('data-key');
                        var total=0;
                        $('.p_value').each(function(){
                            if($(this).attr('data-id') == id){
                                total=total+parseInt($(this).text());
                            }
                        });
                        $(this).text(total);
                    });
                    var totals=0;
                    $('.d_value').each(function(){
                        var id = $(this).attr('data-key');
                        var total=0;
                        $('.m_value').each(function(){
                            if($(this).attr('data-id') == id){
                                total=total+parseInt($(this).text());
                            }
                        });
                        $(this).text(total);
                        totals=totals+total;
                    });

                    $("#total_val").val(totals);
                  
                }


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

function add_quota($id)
{
    var contents=[];
    $('.p_value').each(function(){
       
        console.log($(this).text());
        if($(this).text()!=0){


            var Sectionslist={
                "campaign_id":$id, 
                "municipality_id":$(this).attr('data-key'),
                "Quota":$(this).text()
            }
            contents.push(Sectionslist); 
        }

      
     }); 
 
     var postData = {
        quota: contents,
      }

      console.log(postData);
     var request = $.ajax({
        url: 'addcampaign-quota',
        type: 'POST',
        data: {postData:postData} ,
        dataType: 'JSON'
        });
        request.done( function ( data ) {
         
         alert("success");
         
          });
          request.fail( function ( jqXHR, textStatus) {
            alert("error");
         
          });

}

                </script>

            
