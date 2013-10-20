<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Wanna be a spaceman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url(); ?>static/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url(); ?>static/css/flat-ui.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>static/css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

  </head>
  <body>
	
	<div class="navbar">
		<div class="search-view-video col-md-4 pull-right">
			<div class="form-group">
				<form action="job_search" method="GET">
					<input class="form-control" type="search" id="search_box" name="job_name" placeholder="">
					<span class="input-icon fui-search"></span>
				</form>
			</div>
		</div>
	</div>		
	  
    <div class="container">
		<div class="row">
			<div class="video-view">
				<iframe src="http://player.vimeo.com/video/75809732" width="540" height="360" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                <br>
				<input name="tagsinput" id="tagsinput" class="tagsinput" value="Clean,Fresh,Modern,Unique" />
            </div>
        </div>
        
        <div class="row video-details">
			<div class="col-md-9">
			<p>aa</p>
			</div>
					
			<ul class="thumbnails col-md-3" id="caption-hover" type="none">
				<li>
					<div class="thumbnail">
						<div class="caption">
						<h4>Caption</h4>
						<p>sample text</p>
						</div>
						
						<img src="<?php echo base_url();?>static/images/video/poster.jpg" />
						
					</div>
				</li>
				
				<li>
					<div class="thumbnail">
						<div class="caption">
						<h4>Caption</h4>
						<p>sample text</p>
						</div>
						
						<img src="<?php echo base_url();?>static/images/video/poster.jpg" />
						
					</div>
				</li>
				
				<li>
					<div class="thumbnail">
						<div class="caption">
						<h4>Caption</h4>
						<p>sample text</p>
						</div>
						
						<img src="<?php echo base_url();?>static/images/video/poster.jpg" />
						
					</div>
				</li>
				
			</ul>			
			
			</div>			
		</div>        
        
	</div>


        <footer>
            <div class="container">
                
                    <div class="pull-left">
                        &copy; Wanna be a spaceman 2013
                    </div>
                    <div class="pull-right">
                        About
                        Contact
                        The team
                    </div>
                    <div class="clear"></div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- Load JS here for greater good =============================-->
    <script src="static/js/jquery-1.8.3.min.js"></script>
    <!--<script src="static/js/jquery-ui-1.10.3.custom.min.js"></script>-->
    <!-- <script src="static/js/jquery.ui.touch-punch.min.js"></script> -->

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    <script src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/bootstrap-select.js"></script>
    <script src="<?php echo base_url(); ?>static/js/bootstrap-switch.js"></script>
    <script src="<?php echo base_url(); ?>static/js/flatui-checkbox.js"></script>
    <script src="<?php echo base_url(); ?>static/js/flatui-radio.js"></script>
    <script src="<?php echo base_url(); ?>static/js/jquery.tagsinput.js"></script>
    <script src="<?php echo base_url(); ?>static/js/jquery.placeholder.js"></script>
    <script src="<?php echo base_url(); ?>static/js/grid-caption.js"></script>
    <script src="<?php echo base_url(); ?>static/js/bootstrap-typeahead.js"></script>
    <script src="<?php echo base_url(); ?>static/js/tags.js"></script>

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
                result += srcText[i].replace("\n", "<br />");
                $("#search_box").attr("placeholder", result);
            },
            30);

            $("#search_box" ).autocomplete({
                source: function( request, response ) {
                    $.ajax({
                        url: "ajax/jobs_search/",
                        dataType: "json",
                        data: {
                            //featureClass: "P",
                            //style: "full",
                            //maxRows: 12,
                            job_name: request.term,
                            format  : "json"
                        },
                        success: function( data ) {
                            response( $.map( data, function( item ) {
                                return {
                                    //label: item.name + (item.adminName1 ? ", " + item.adminName1 : "") + ", " + item.countryName,
                                    value: item.name
                                }
                             }));
                        }
                    });
                },
                minLength: 2,
                select: function( event, ui ) {
                    log( ui.item ?
                    "Selected: " + ui.item.label :
                    "Nothing selected, input was " + this.value);
                },
                open: function() {
                    $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
                },
                close: function() {
                    $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
                }
            });
        });
    </script>

  </body>
</html>
