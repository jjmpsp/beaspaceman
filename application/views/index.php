<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flat UI Free</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="static/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="static/css/flat-ui.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

  </head>
  <body>
    <div class="container">
			
		<div class="row">
				<div class="search">
					<div class="form-group">
						<input class="form-control" type="search" id="search_box" placeholder="placeholder">
						<span class="input-icon fui-search"></span>
					</div>		
				</div>
		</div>
		<div class="row">
			<div class="intro">
				<p>Intro text</p>
			</div>
		</div>
		
		<div class="video-grid">
			<div class="row">
					<div class="col-md-4">v1</div>
					<div class="col-md-4">v2</div>
					<div class="col-md-4">v3</div>
			</div>
		</div>
		
    </div>
    <!-- /.container -->


    <!-- Load JS here for greater good =============================-->
    <script src="static/js/jquery-1.8.3.min.js"></script>
    <script src="static/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="static/js/jquery.ui.touch-punch.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/bootstrap-select.js"></script>
    <script src="static/js/bootstrap-switch.js"></script>
    <script src="static/js/flatui-checkbox.js"></script>
    <script src="static/js/flatui-radio.js"></script>
    <script src="static/js/jquery.tagsinput.js"></script>
    <script src="static/js/jquery.placeholder.js"></script>

    <!-- might wanna clean this up when we have an MVP -->
    <script>
        $(document).ready(function(){
            var srcText = "What do you want to be when you're older?";
            var i = 0;
            var result = srcText[i];
            setInterval(function() {
                if(i == srcText.length -1) {
                    clearInterval(this);
                    return;
                };
                i++;
                console.log(srcText[i]);
                result += srcText[i].replace("\n", "<br />");
                $("#search_box").attr("placeholder", result);
            },
            30);
        })
    </script>

  </body>
</html>
