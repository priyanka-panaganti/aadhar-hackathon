<?php 
require_once 'vendor/autoload.php';
if (isset($_POST["submit"])){
    $receiver =$_POST["receiver"];
    $subject =$_POST["subject"];
    $msg =$_POST["message"];

    $MessageBird = new \MessageBird\Client('MJ12Si19ryvbn5jc5uXqrNDjB');
  $Message = new \MessageBird\Objects\Message;
  $Message->originator ="+917013035968";
  $Message->recipients =[ $receiver];
  $Message->body = $msg ;
  $MessageBird->messages->create($Message);
  
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
<title>Send SMS using PHP</title>
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-5 mx-auto bg-white shadow border p-4 rounded">
                <h2> <class="text-center fw-bold mb-3">SMS Sender</h2>
                <form action=" " method="post">
                    <div class="form-group mb-3">
                        <label for="receiver" class="form-label">Receiver</label>
                        <input type="text" class="form-control"placeholder="Enter receiver phone number" required name="receiver"id="receiver">
                    </div>
                    <div class="form-group mb-3">
                        <label for="subject" class="form-label">subject</label>
                        <input type="text" class="form-control"placeholder="Enter subject " required name="subject"id="subject">
                    </div>
                    <div class="form-group mb-3">
                        <label for="subject" class="form-label">Message</label>
                        <textarea rows="5" class="form-control"placeholder="Enter message" required name="message"id="message"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary" name="submit">Send SMS</button>
                        <button type="reset" class="btn btn-danger" >Reset form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>