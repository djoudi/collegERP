<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <?php include_component('userControl', 'head'); ?>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span2 sidebar-container">
                    <?php include_component('userControl', 'nav'); ?>
                </div>
                <div class="span10 body-container">

                    <div class="row-fluid">
                        <?php echo $sf_content ?>
                    </div>
                </div>
            </div>
        </div>





        <script type="text/javascript">
            $("#utopia-sparkline-type1").sparkline([5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7, 5, 6, 7, 9, 9], {type:"line", height:48, width:140});

            $('.utopia-activity-feeds').vTicker({
                speed: 500,
                pause: 3000,
                animation: 'fade',
                height: 335,
                mousePause: true,
                showItems: 4
            });


            $(function() {
                $( "#utopia-dashboard-datepicker" ).datepicker().css({marginBottom:'20px'});

                jQuery("#validation").validationEngine();
                $("#phone").mask("(999) 9999999999");
                $(".chzn-select").chosen(); $(".chzn-select-deselect").chosen({allow_single_deselect:true});

                $.simpleWeather({
                    zipcode: '10001',
                    unit: 'f',
                    success: function(weather) {
                        html = '<h2>'+weather.city+', '+weather.region+'</h2>';
                        html += '<img style="float:left" width="125px " src="'+weather.image+'">';
                        html += '<p>'+weather.temp+'&deg; '+weather.units.temp+'<br /><span>'+weather.currently+'</span></p>';
                        html += '<a href="'+weather.link+'">View Forecast &raquo;</a>';

                        $("#utopia-dashboard-weather").css({marginBottom:'20px'}).html(html);
                    },
                    error: function(error) {
                        $("#utopia-dashboard-weather").html('<p>'+error+'</p>');
                    }
                });


            });
        </script>
    </body>


</html>
