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
    <link href="<?php echo base_url(); ?>static/css/team.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

  </head>
  <body>	
  
<div class="navbar view-video-nav">
	  <div class="back">
		<a href="<?php echo base_url(); ?>"><span class="fui-arrow-left"></span>Go Back</a>
	  </div>
	  
	<div class="search-view-video col-md-3 pull-right">
		<div class="form-group">
			<form action="job_search" method="GET">
				<input class="form-control input-sm" type="search" id="search_box" name="job_name" placeholder="">
				<span class="input-icon fui-search"></span>
			</form>
		</div>
	</div>
	</div>
  <div class="title">
  <img src="http://localhost/beaspaceman/static/images/logo.png" width="20%" height="20%">
  </div>
<div class='content content-2'>
    <div class='container'>
      <div class='col-sm-4 member' >
        <img src="<?php echo base_url(); ?>static/images/about/members/amie.png" alt="Amie" />
        <h3>Amie Duggan</h3>
        <a data-toggle="modal" href="#amie">About</a>
      </div>

      <div class='col-sm-4 member' >
        <img src="<?php echo base_url(); ?>static/images/about/members/dale.png" alt="Dale" />
        <h3>Dale Webb</h3>
        
        <a data-toggle="modal" href="#dale">About</a>
      </div>

      <div class='col-sm-4 member' >
        <img src="<?php echo base_url(); ?>static/images/about/members/joel.png" alt="Joel" />
        <h3>Joel Murphy</h3>
        
        <a data-toggle="modal" href="#joel">About</a>
      </div>
    </div>
    <div class='container'>
        <div class='col-sm-4 member' >
        <img src="<?php echo base_url(); ?>static/images/about/members/matthew.png" alt="Matthew" />
        <h3>Matthew Jones</h3>
        
        <a data-toggle="modal" href="#matthew">About</a>
      </div>

      <div class='col-sm-4 member' >
        <img src="<?php echo base_url(); ?>static/images/about/members/cem.png" alt="Cem" />
        <h3>Cem Staveley</h3>
        
        <a data-toggle="modal" href="#cem">About</a>
      </div>

      <div class='col-sm-4 member' >
        <img src="<?php echo base_url(); ?>static/images/about/members/tharshan.png" alt="Tharshan" />
        <h3>Tharshan Muthulingam</h3>
        
        <a data-toggle="modal" href="#tharshan">About</a>
      </div>
    </div>
<div class='container'>
      <div class='col-sm-4 member' >
        <img src="<?php echo base_url(); ?>static/images/about/members/abd.png" alt="Abd" />
        <h3>Abd Madi</h3>
        <a data-toggle="modal" href="#abd">About</a>
      </div>

      <div class='col-sm-4 member' >
        <img src="<?php echo base_url(); ?>static/images/about/members/dan.png" alt="Dan" />
        <h3>Daniel Harris</h3>
        <a data-toggle="modal" href="#dan">About</a>
      </div>

      <div class='col-sm-4 member' >
        <img src="<?php echo base_url(); ?>static/images/about/members/tony.png" alt="Tony" />
        <h3>Tony Morris</h3>
        <a data-toggle="modal" href="#tony">About</a>
      </div>

    </div>
  </div>

  <!-- Modals -->
  <div class='modal fade' id="amie" tabindex="-1" role="dialog" aria-labelledby="amie" aria-hidden="true">
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>Amie Duggan</h4>
          <div class='social'>
            <ul>
              <li><a href="https://twitter.com/amieduggan" target="_BLANK"><img src="<?php echo base_url(); ?>static/images/about/icons/twitter.png" alt="Twitter"></a></li>
              <li><a href="mailto:amie@wannabeaspaceman.com"><img src="<?php echo base_url(); ?>static/images/about/icons/email.png" alt="Email" /></a></li>
            </ul>
          </div>
          <div class='clearfix'></div>
        </div>
        <div class='modal-body'>
          <img src="<?php echo base_url(); ?>static/images/about/members/amie.png" alt="Amie" class='profile' />
          <p>Amie has a background in adult education and owns AND Training - an employability training company in Cardiff. She co-runs Founders Hub, a shared creative space and co-runs various conferences, including <a href=http://handheldconf.com>Handheld Conf</a>. Find her personal site at <a href=www.amieduggan.com>www.amieduggan.com</a> </p>
          <div class='clearfix'></div>
        </div>
      </div>
    </div>
  </div>

  <div class='modal fade' id="dale" tabindex="-1" role="dialog" aria-labelledby="dale" aria-hidden="true">
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>Dale Webb</h4>
          <div class="social">
            <ul>
              <li><a href="https://twitter.com/ddaalee" target="_BLANK"><img src="<?php echo base_url(); ?>static/images/about/icons/twitter.png" alt="Twitter"></a></li>
              <li><a href="mailto:dale@wannabeaspaceman.com"><img src="<?php echo base_url(); ?>static/images/about/icons/email.png" alt="Email" /></a></li>
            </ul>
          </div>
          <div class='clearfix'></div>
        </div>
        <div class='modal-body'>
          <img src="<?php echo base_url(); ?>static/images/about/members/dale.png" alt="Dale" class='profile' />
          <p>Dale has lived and graduated from Birmingham, where he studied Computer Science at the University of Birmingham. He recently moved to Wales to work with <a href="http://alacrityfoundation.co.uk">The Alacrity Foundation</a> where he is learning how to be a computer scientist in a business world.</p>
          <div class='clearfix'></div>
        </div>
      </div>
    </div>
  </div>

  <div class='modal fade' id="joel" tabindex="-1" role="dialog" aria-labelledby="joel" aria-hidden="true">
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>Joel Murphy</h4>
          <div class="social">
            <ul>
              <li><a href="https://twitter.com/jjmpsp" target="_BLANK"><img src="<?php echo base_url(); ?>static/images/about/icons/twitter.png" alt="Twitter"></a></li>
              <li><a href="mailto:joel@wannabeaspaceman.com"><img src="<?php echo base_url(); ?>static/images/about/icons/email.png" alt="Email" /></a></li>
            </ul>
          </div>
          <div class='clearfix'></div>
        </div>
        <div class='modal-body'>
          <img src="<?php echo base_url(); ?>static/images/about/members/joel.png" alt="Joel" class='profile' />
          <p> <a href="http://joel-murphy.com">Joel</a> is a second year Computer Science student at Cardiff University and is no stranger to startups. Working with various platforms and technologies in the past, he has a broad knowledge of computer systems. Founder of <a href="https://notedu.mp">NoteDump</a>.</p>
          <div class='clearfix'></div>
        </div>
      </div>
    </div>
  </div>

  <div class='modal fade' id="matthew" tabindex="-1" role="dialog" aria-labelledby="matthew" aria-hidden="true">
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>Matthew Jones</h4>
          <div class="social">
            <ul>
              <li><a href="https://twitter.com/1994mattj" target="_BLANK"><img src="<?php echo base_url(); ?>static/images/about/icons/twitter.png" alt="Twitter"></a></li>
              <li><a href="mailto:matthew@wannabeaspaceman.com"><img src="<?php echo base_url(); ?>static/images/about/icons/email.png" alt="Email" /></a></li>
            </ul>
          </div>
          <div class='clearfix'></div>
        </div>
        <div class='modal-body'>
          <img src="<?php echo base_url(); ?>static/images/about/members/matthew.png" alt="Matthew" class='profile' />
          <p>Matthew is currently a second year Computer Science student at Cardiff University. <a href="http://launch48.com/">Launch48</a> has been his first major startup event and he's enjoying learning new development skills as well as gaining an insight into the business side of creating a startup. As the current president of the <a href="cs.cf.ac.uk/comscisoc">ComScI Society</a> he is now looking to promote events and initatives likes these to it's members.</p>
          <div class='clearfix'></div>
        </div>
      </div>
    </div>
  </div>

  <div class='modal fade' id="cem" tabindex="-1" role="dialog" aria-labelledby="cem" aria-hidden="true">
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>Cem Staveley</h4>
          <div class="social">
            <ul>
              <li><a href="mailto:cem@wannabeaspaceman.com"><img src="<?php echo base_url(); ?>static/images/about/icons/email.png" alt="Email" /></a></li>
            </ul>
          </div>
          <div class='clearfix'></div>
        </div>
        <div class='modal-body'>
          <img src="<?php echo base_url(); ?>static/images/about/members/cem.png" alt="Treasurer" class='profile' />
          <p>Cem is currently in his final year studying Computer Science at Cardiff University. With an interest in startups, he seeks to improve his development skills and has particularly taken interest in web applications development and their place in business.</p>
          <div class='clearfix'></div>
        </div>
      </div>
    </div>
  </div>


  <div class='modal fade' id="tharshan" tabindex="-1" role="dialog" aria-labelledby="tharshan" aria-hidden="true">
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>Tharshan Muthulingam</h4>
          <div class="social">
            <ul>
              <li><a href="mailto:tharshan@wannabeaspaceman.com"><img src="<?php echo base_url(); ?>static/images/about/icons/email.png" alt="Email" /></a></li>
            </ul>
          </div>
          <div class='clearfix'></div>
        </div>
        <div class='modal-body'>
          <img src="<?php echo base_url(); ?>static/images/about/members/tharshan.png" alt="Tharshan" class='profile' />
          <p>Test</p>
          <div class='clearfix'></div>
        </div>
      </div>
    </div>
  </div>


  <div class='modal fade' id="abd" tabindex="-1" role="dialog" aria-labelledby="abd" aria-hidden="true">
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>Abd Madi</h4>
          <div class="social">
            <ul>
              <li><a href="mailto:abd@wannabeaspaceman.com"><img src="<?php echo base_url(); ?>static/images/about/icons/email.png" alt="Email" /></a></li>
            </ul>
          </div>
          <div class='clearfix'></div>
        </div>
        <div class='modal-body'>
          <img src="<?php echo base_url(); ?>static/images/about/members/abd.png" alt="Abd" class='profile' />
          <p>Abd is currently studying for his MBA in business and he specialises in marketing. In the past he’s worked on setting up marketing strategies, social media management, online advertising campaigns (Facebook, YouTube, Google) and branding management.</p>
          <div class='clearfix'></div>
        </div>
      </div>
    </div>
  </div>


  <div class='modal fade' id="dan" tabindex="-1" role="dialog" aria-labelledby="dan" aria-hidden="true">
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>Daniel Harris</h4>
          <div class="social">
            <ul>   
              <li><a href="https://twitter.com/danharrisfilms" target="_BLANK"><img src="<?php echo base_url(); ?>static/images/about/icons/twitter.png" alt="Twitter"></a></li>
              <li><a href="mailto:dan@wannabeaspaceman.com"><img src="<?php echo base_url(); ?>static/images/about/icons/email.png" alt="Email" /></a></li>
            </ul>
          </div>
          <div class='clearfix'></div>
        </div>
        <div class='modal-body'>
          <img src="<?php echo base_url(); ?>static/images/about/members/dan.png" alt="Dan" class='profile' />
          <p>Daniel Harris is a videographer, filming everything from weddings, festivals and conferences. He is the founder of <a href="www.aotv.co.uk">AOTV </a>, a small team based in South Wales who believe that much of what they do doesn’t just reflect them, it reflects their homes and identities. Dan is also a producer of <a href="www.besquare.me">Besquare</a> and travels the globe filming web conferences.</p>
          <div class='clearfix'></div>
        </div>
      </div>
    </div>
  </div>


  <div class='modal fade' id="tony" tabindex="-1" role="dialog" aria-labelledby="tony" aria-hidden="true">
    <div class='modal-dialog'>
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
          <h4 class='modal-title'>Tony Morris</h4>
          <div class="social">
            <ul>
              <li><a href="mailto:tony@wannabeaspaceman.com"><img src="<?php echo base_url(); ?>static/images/about/icons/email.png" alt="Email" /></a></li>
            </ul>
          </div>
          <div class='clearfix'></div>
        </div>
        <div class='modal-body'>
          <img src="<?php echo base_url(); ?>static/images/about/members/tony.png" alt="Tony" class='profile' />
          <p>Test</p>
          <div class='clearfix'></div>
        </div>
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
            var srcText = "Search for a career...";
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
