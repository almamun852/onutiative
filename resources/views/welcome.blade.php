<!DOCTYPE html>
<script>
       var myToken = '1567453f93ac13be052f265dcf5e630fe32ecd67';
</script> 
<html>
<head>
  <title>Call Popup</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" crossorigin="anonymous">
</head>
<body>
<div class="container in">
  <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
    <div class="card text-center verify">
      <div class="card-header">
        <h3>OnuKit Popup Demo For Third Party</h3>
      </div>
      <div class="card-body">
        <h5 class="card-title"> 
          Dear User, 
          <br>Thanks for your Registration to OnuKit
        </h5>
        <p><b>Introduction:</b> <br>
        To connect a third party popup you can use this script</p>
        <p><b>How to use:</b><br> 
          1. Go to <a href="user.onukit.com">user.OnuKit.com</a>
          <br>
          2. Install Call Popup plugin from "Plugins" menu.
          <br>
          3. Follow the instructions given in the plugin

        </p>
      </div>
      <div class="card-footer">
        ©2018 Onukit, a project of Onutiative Ltd.
      </div>
    </div>
  </div> 
  </div>
 
</div>
 

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.js"></script>
<script src="http://user.onukit.com/6v0/js/socket.io/node_modules/socket.io-client/dist/socket.io.js"></script>
<script>
     var socket = io.connect( 'http://njs.onuserver.com:9001');
       socket.on( myToken, function(data) {
        
       if($('#'+data.callLogID).is(':visible') == false)
      {
        $('<div />').attr('id', data.callLogID).attr('title', data.incomingTime).html("Mobile: "+data.mobile+"<br />Device ID: "+data.deviceID).dialog();
      }
    
          console.log(data);
      });
</script>
</body>
</html>