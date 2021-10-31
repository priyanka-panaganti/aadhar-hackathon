<html>
    
    <head>
<script src="instascan.min.js></script>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/
bootstrap/4.4.4/css/bootstrap.min.css"/
</head>
<body>
    <div class="container"><br>
    <h4 class="text-center text-dark">Qr-Code Scanner Using Instascan</h4>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <video id="preview" width="100%"></video>
</div>
<div class="col-md-6">
    <label>Qr-Code Value</label>
    <input type="text" name="text" id="text"readonly=""class="form-control">
</div>
</div>
</div>
<script src="instascan.min.js"></script>
<script type="text/javascript">
 let scanner=new Instascan.Scanner({video:document.getElementbyIddd(preview)});
Instascan.Camera.getCameras().then(function(cameras){
    if(cameras.length>0)
    {
        scanner.start(cameras[0]);
    }
    else
    {
        alert("no camera found");
    }
    }).catch(function(e))
    {
        console.error(e);
    });
    scanner.addListener('scan',function(c)){
        document.getElementbyId("text")value=c;
    });
    </script>
</body>
</html>