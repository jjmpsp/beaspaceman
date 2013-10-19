<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Wanna be a spaceman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url() ?>static/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url() ?>static/css/flat-ui.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>static/css/style.css" rel="stylesheet">

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
                        <form action="job_search" method="GET">
                            <input class="form-control input-hg" type="search" id="search_box" name="job_name" placeholder="placeholder">
                            <span class="input-icon fui-search"></span>
                        </form>
					</div>
				</div>
		</div>
		<div class="row">
			<div class="intro">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			error: The following untracked working tree files would be overwritten by merge:
	application/config/config.php
</div>
		</div>

<div class="row">
			<ul class="thumbnails" id="caption-hover" type="none">
				<li class="col-md-4">
					<div class="thumbnail">
						<div class="caption">
						<h4>Caption</h4>
						<p>sample text</p>
						</div>
						
						<img src="static/images/video/poster.jpg" />
						
					</div>
				</li>			
				
				<li class="col-md-4">
					<div class="thumbnail">
						<div class="caption">
						<h4>Caption</h4>
						<p>sample text</p>
						</div>						
						<img src="static/images/video/poster.jpg" />						
					</div>
				</li>			
				
				<li class="col-md-4">
					<div class="thumbnail">
						<div class="caption">
						<h4>Caption</h4>
						<p>sample text</p>
						</div>
						
						<img src="static/images/video/poster.jpg" />
						
					</div>
				</li>						
			</ul>
		</div>	

    </div>
    <!-- /.container -->


    <!-- Load JS here for greater good =============================-->
    <script src="<?php echo base_url() ?>static/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url() ?>static/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="<?php echo base_url() ?>static/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo base_url() ?>static/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>static/js/bootstrap-select.js"></script>
    <script src="<?php echo base_url() ?>static/js/bootstrap-switch.js"></script>
    <script src="<?php echo base_url() ?>static/js/flatui-checkbox.js"></script>
    <script src="<?php echo base_url() ?>static/js/flatui-radio.js"></script>
    <script src="<?php echo base_url() ?>static/js/jquery.tagsinput.js"></script>
    <script src="<?php echo base_url() ?>static/js/jquery.placeholder.js"></script>
    <script src="<?php echo base_url() ?>static/js/grid-caption.js"></script>

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
