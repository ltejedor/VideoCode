<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom-theme/jquery-ui-1.9.2.custom.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="js/bootstrap.js"></script>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

        <script>
        $(function() {
            $( "#slider" ).slider({
                range: true,
                values: [17, 78]
            });
            $( "#slider2" ).slider({
                range: true,
                values: [16, 67]
            });
        });

          $(function() {
            $( "#sortable" ).sortable({
              revert: true
            });
            $( "#draggable" ).draggable({
              connectToSortable: "#sortable",
              helper: "clone",
              revert: "invalid"
            });

            $( "#draggable2" ).draggable({
              connectToSortable: "#sortable",
              helper: "clone",
              revert: "invalid"
            });

            $( "#draggable3" ).draggable({
              connectToSortable: "#sortable",
              helper: "clone",
              revert: "invalid"
            });

            $( "#draggable4" ).draggable({
              connectToSortable: "#sortable",
              helper: "clone",
              revert: "invalid"
            });
            $( "ul, li" ).disableSelection();
          });

        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <ul class="nav nav-tabs">
          <li><a id="logo" href="#">VidCode</a></li>
        </ul>
                <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">

                    <div class="methods">

                        <div class="col-md-10">
                            <div id="slider"></div>
                        </div>
                        <div class="col-md-2">hue</div>
                        <div class="col-md-10">
                            <div id="slider2"></div>
                        </div>
                        <div class="col-md-2">fade</div>

                        <div class="col-md-5 pullLeft">
                            <ul><li id="draggable" class="btn btn-method">Filter</button></li></ul>
                            <ul><li id="draggable2" class="btn btn-method">Rotate</button></li></ul>
                        </div>
                        <div class="col-md-6">
                            <ul><li id="draggable3" class="btn btn-method">Blur</button></li></ul>
                            <ul><li id="draggable4" class="btn btn-method">Shake</button></li></ul>
                        </div>
                        <br /><br /><br /><br /><br /><br /><br /><br />
                        <div class="checkbox">
                            <label>
                              <input type="checkbox"> Check one
                            </label>
                        </div>


                        <div class="checkbox">
                            <label>
                              <input type="checkbox"> Check me out
                            </label>
                        </div>
                    </div>
                    <div id="tabs">
                        <div class="btn-group">
                          <button type="button" class="tab1 btn btn-default">Visual Edit</button>
                          <button type="button" class="tab2 btn btn-default">Code Edit</button>
                        </div>

                        <div class="tabs-1">

                            <ul id="sortable">
                              <li class="hidden2 ui-state-default"></li>
                              <li class="hidden2 ui-state-default"></li>
                              <li class="hidden2 ui-state-default"></li>
                              <li class="hidden2 ui-state-default"></li>
                              <li class="hidden2 ui-state-default"></li>
                            </ul>
                        </div>

                        <div class="tabs-2 hidden">
                            <pre id="editor">function foo(items) {
                                var i;
                                for (i = 0; i &lt; items.length; i++) {
                                    alert("Cool Cat Video " + items[i]);
                                }
                            }</pre>
                        </div>

                        <script src="src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
                        <script>
                            var editor = ace.edit("editor");
                            editor.setTheme("ace/theme/tomorrow");
                            editor.getSession().setMode("ace/mode/javascript");
                        </script>
                    </div>


                </div>

                <div class="col-md-7 overlay">
                    <div class="buttons">
                        <button type="button" class="btn btn-primary">Take a Video</button>
                        <button type="button" class="btn btn-primary">Import from Vine</button>
                        <button type="button" class="btn btn-primary">Import from Instagram</button>
                    </div>
                    <div class="clearHover">
                    </div>
                </div>
            </div>

        </div>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>



        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
