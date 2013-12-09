<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Chaccess, the front-enders accessibility tool</title>
        <meta name="Chaccess" content="">
        <meta name="viewport" content="width=device-width">

        <link href='http://fonts.googleapis.com/css?family=Raleway|Merriweather:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="stylesheets/screen.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    </head>
    <body id="home">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">
            <header>
                <p class="title">Chaccess, making accessibility accessible.</p>

                <p class="subtitle">Because optimizing the web for everyone is great!</p>
            </header>
            <!-- Explanation -->
            <section class="explanation">
                <p class="emphasize">What do you want to optimize?</p>
            </section>
                <!-- Tags -->
                <form id="create-checklist">
                    <fieldset>
                            <legend>Select the most relevant tags for your project</legend>
                            <ul class="tags">
                            <?php 
                            include 'display_tags.php';
                            ?>
                                
                            </ul>

                    </fieldset>
                    <fieldset class="nameproject">
                        <p class="emphasize">What project are u working on?</p>
                        <input id="insertname" type="text" length="50" placeholder="Name of project"></input>
                    </fieldset>
                    </br>
                    <input type="submit" value="Generate Checklist" class="projectname">
                </form>
            </section>


            <!-- Checklist Section -->
            <section id="checklist">
                <ul class="checklist">

                </ul>
            </section>

            <div class="testingunit">
            </div>
        </div>

        <script src="js/getcheckbox.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/main.js"></script> 
    </body>
</html>
