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
    <div class="container">
		<div class="row">
			
			<div class="search">
				
				<img src="<?php echo base_url();?>static/images/logo.png" width="20%" height="20%" style="padding-bottom: 20px;">
				
				<div class="form-group">
                    <form action="job_search" method="GET">
                        <input class="form-control input-hg" type="search" id="search_box" name="job_name" placeholder="">
                        <span class="input-icon fui-search"></span>
                        <a id="inspiration_button" style="margin-top:20px;" class="btn btn-block btn-lg btn-inverse">Give me some inspiration</a>
                    </form>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="intro">
				<p>A beautiful, curated video library showing a real perspective of different careers from people already doing the job.
                <br>
                Search. Watch. Be inspired.</p>
            </div>
        	</div>
                <div class="row">
        			<ul class="thumbnails" id="caption-hover" type="none">
                        <?php
                            foreach($featuredVideos as $video){
                                echo '  
                                <a href="'.base_url().'view_video/?job_id=1607">       
                                    <li class="col-md-4">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h4>I\'m a...</h4>
                                                <p>Doctor</p>
                                            </div>
                                            
                                            <img src="'.$video->thumbnail.'" />
                                            
                                        </div>
                                    </li>
                                </a>';
                            }
                        ?>
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
                                    value: item.name,
                                    id: item.id
                                }
                             }));
                        }
                    });
                },
                minLength: 2,
                select: function( event, ui ) {
                    console.log( ui.item.id );
                    window.location.href = "<?php echo base_url(); ?>view_video/?job_id=" +ui.item.id;
                },
                open: function() {
                    $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
                },
                close: function() {
                    $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
                }
            });

            $("#inspiration_button").click(function(){
                
                $.ajax({
                    url: "<?php echo base_url(); ?>ajax/random_job",
                    data: {
                        format  : "json"
                    },
                    context: document.body,
                    success: function(data){
                        window.location.href = "<?php echo base_url(); ?>view_video/?job_id=" +data.job_id;    
                    }
                });

                return false;
            })
        });
    </script>

  </body>
</html>
