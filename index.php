<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- Add custom CSS here -->
        <style type="text/css">
.ui-widget{text-align: center;margin-top: 35px;}.ui-autocomplete{ text-align:left !important;}
#skills{height: 25px; font-size: 16px;}
</style>
</head>
<body>
       


        <div class="container">

    <div class="row">
        <div class="col-lg-12">
            <div>
              <div class="ui-widget">
                <label for="skills">Your Skills: </label>
                <input id="skills">
              </div>
	    </div>
        </div>
    </div>

</div>
<p>ristina jui</p>   
        	<!-- JavaScript -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
     	    	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
        
    	    <script>
  $(function() {  
    $( "#skills" ).autocomplete({
      source: "search.php"
    });
  });
  </script>
</body>
</html>
