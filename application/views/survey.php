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
            <div class="intro">
                <img src="static/images/logo.png" width="200">
                <iframe src="//player.vimeo.com/video/56690820" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <form action="https://docs.google.com/forms/d/1mhXxFnx6QVomKS3vM1Ar5BFULelgk_1lACcHniNpCu4/formResponse" method="POST" id="ss-form" target="_self" onsubmit="" class="form-group"><ol style="padding-left: 0">
                    <div class="ss-form-question errorbox-good">
                    <div dir="ltr" class="ss-item  ss-text"><div class="ss-form-entry"><label class="ss-q-item-label" for="entry_1059789002"><div class="ss-q-title">Email Address
                    </div>
                    <div class="ss-q-help ss-secondary-text" dir="ltr">Leave your email address with us, if you want to be kept updated.</div></label>
                    <input type="text" name="entry.1059789002" value="" class="ss-q-short valid form-control" id="entry_1059789002" dir="auto" pattern=".*^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$.*" title="Must match pattern">
                    </div></div></div> <div class="ss-form-question errorbox-good">
                    <div dir="ltr" class="ss-item  ss-text"><div class="ss-form-entry"><label class="ss-q-item-label" for="entry_1860807043"><div class="ss-q-title">Where do you go for your career advice?
                    </div>
                    <div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
                    <input type="text" name="entry.1860807043" value="" class="ss-q-short form-control" id="entry_1860807043" dir="auto" title="">
                    <div class="error-message"></div>

                    </div></div></div> <div class="ss-form-question errorbox-good">
                    <div dir="ltr" class="ss-item ss-item-required ss-radio"><div class="ss-form-entry"><label class="ss-q-item-label" for="entry_525901956"><div class="ss-q-title">Do you think a video careers library would be useful?
                    <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                    <span class="ss-required-asterisk">*</span></div>
                    <div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>

                    <ul class="ss-choices"><li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1674590170" value="Yes" id="group_1674590170_1" class="ss-q-radio" aria-label="Yes" required=""></span>
                    <span class="ss-choice-label">Yes</span>
                    </label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="radio" name="entry.1674590170" value="No" id="group_1674590170_2" class="ss-q-radio" aria-label="No" required=""></span>
                    <span class="ss-choice-label">No</span>
                    </label></li> </ul>
                    <div class="error-message"></div>
                    </div></div></div> <div class="ss-form-question errorbox-good">
                    <div dir="ltr" class="ss-item  ss-paragraph-text"><div class="ss-form-entry"><label class="ss-q-item-label" for="entry_1551973167"><div class="ss-q-title">Why?
                    </div>
                    <div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
                    <textarea name="entry.1551973167" rows="8" cols="0" class="ss-q-long form-control" id="entry_1551973167" dir="auto"></textarea>
                    <div class="error-message"></div>

                    </div></div></div> <div class="ss-form-question errorbox-good">
                    <div dir="ltr" class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-item-label" for="entry_744870596"><div class="ss-q-title">What do you wanna be?
                    <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                    <span class="ss-required-asterisk">*</span></div>
                    <div class="ss-q-help ss-secondary-text" dir="ltr"></div></label>
                    <input type="text" name="entry.744870596" value="" class="ss-q-short form-control" id="entry_744870596" dir="auto" aria-required="true" required="" title="">
                    <div class="error-message"></div>

                    </div></div></div>
                    <input type="hidden" name="draftResponse" value="[]
                    ">
                    <input type="hidden" name="pageHistory" value="0">


                    <div class="ss-item ss-navigate"><table id="navigation-table"><tbody><tr><td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
                    <input type="submit" name="submit" value="Submit" id="ss-submit" class="btn btn-block btn-lg btn-success form-control">
                    </tr></tbody></table></div></ol>
                </form>
            </div>
        </div>

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
