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
    <style>
    .intro {
        padding-top:25px;

        width:500px;
        margin:0 auto;
    }
    ul.ss-choices {
        list-style-type: none;
    }
    input.btn {
        margin-left:130px;
        margin-top:20px;
    }
    form {
        color:white;
        padding-top:25px;
    }
    .intro img {
        padding-bottom:20px;
    }
    </style>
  </head>
  <body>
        <div class="container">
        <div class="row">

            <div class="search">

                <h1> About Us<h1>
            </div>
        </div>
        <div class="row">

                <div class="about">
                    <center>Wanna be a Spaceman was born out of an original <a href="www.amieduggan.com/blog">blog</a> post 'No-one ever told me I could be a spaceman' - after a lifetime of poor career guidance she vowed to create a curated library of professionally produced videos which would give a realistic insight into a variety of industries.</br>

The opportunity to turn an idea into reality didn't present itself until an event in October 2013. Launch 48 (www.launch48.com/cardiffweekend) brought together an eclectic mix of folk from various industries including web development, marketing, business and education.</br>

Over a period of 48 hours, hardly any sleep and a lot of coffee, a team of nine people filmed a load of great people talking about their jobs, built an extensive backend database which allowed people to search the site, designed a beautiful website and got a social media presence.</br>

The result was a social enterprise called 'Wanna be a Spaceman' - the principle behind the site is not to try and solve every problem that exists in the world of careers advice, but rather to do one thing well. Beautiful, simple &amp; inspiring videos which will help to inspire, direct and give choice to anyone who needs some careers guidance.</br>

Search. Watch. Be inspired.</center>



<center><h2>Our core values</h2>A commitment to inspire and give choice to those who need career guidance.</br>
A determination to ensure user privacy by not collecting any identifiable data.</br>
A pledge to undertake business practices in an ethical manner and never, ever to be evil.</center>
                </div>
            </div>
        </div>


        <footer>
            <div class="container">

                    <div class="pull-left">
                        &copy; Wanna be a spaceman 2013
                    </div>
                    <div class="pull-right">
                        <a href="/about">About</a> &#149;
                        <a href="#">Contact</a> &#149;
                        <a href="/team">The Team</a>
                    </div>
                    <div class="clear"></div>
            </div>
        </footer>

    </div>
    <!-- /.container -->


    <!-- Load JS here for greater good =============================-->
    <script src="<?php echo base_url(); ?>static/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/bootstrap-select.js"></script>
    <script src="<?php echo base_url(); ?>static/js/bootstrap-switch.js"></script>
    <script src="<?php echo base_url(); ?>static/js/flatui-checkbox.js"></script>
    <script src="<?php echo base_url(); ?>static/js/flatui-radio.js"></script>
    <script src="<?php echo base_url(); ?>static/js/jquery.tagsinput.js"></script>
    <script src="<?php echo base_url(); ?>static/js/jquery.placeholder.js"></script>

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
