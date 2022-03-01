
\<!DOCTYPE html><html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<form role="form" method="post" action="<?php echo site_url('store-image');?>" enctype="multipart/form-data">
    <div class="panel">
        <div class="panel-body">
            <div class="form-group" style="margin:20px 100px 30px;">
                <input type="text" class="form-control" name="emirates_id" placeholder="Emirates Id">
        </div>
            <div class="form-group" style="margin:20px 100px 30px;">
                <input type="text" class="form-control" name="name" placeholder="name">
            </div>
            <div class="form-group" style="margin:20px 100px 30px;">
               
                <input class="form-control" type="file" name="picture" />
            </div>
            
             <div class="form-group" style="margin:30px 100px;">
                <input type="submit" class="btn btn-warning" name="Submit" value="Submit">
            </div>
        </div>
    </div>
</form>
</body>
</html>