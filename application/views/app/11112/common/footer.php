
<!-- Sticky footer push -->
<div id="push"></div>

</div>
<!-- /Full height wrapper -->

<!-- Main page footer -->
<footer id="footer">
    <div class="container">

        <!-- Footer info -->
        <p>Built on <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a> by <a href="http://DallasMatthews.co.uk">Dallas Matthews</a> Ltd. who are Relationship Marketing Experts based in Manchester, UK. &copy; 2009 - <?php echo date("Y"); ?> Dallas Matthews Ltd.</p>

        <!-- Footer nav -->
        <?php 
        /*<ul>
            <li><a href="#" class="">Support</a></li>
            <li><a href="#" class="">Documentation</a></li>
            <li><a href="#" class="">API</a></li>
        </ul>
         */ ?>
        <!-- /Footer nav -->

        <!-- Footer back to top -->
        <a href="#top" class="btn btn-alt"><span class="icon-arrow-up"></span></a>

    </div>
</footer>
<!-- /Main page footer -->

<!-- Bootstrap scripts -->
<script src="v2.2/js/bootstrap/bootstrap.min.js"></script>

<!-- jQuery FullCalendar -->
<script src="v2.2/js/plugins/fullCalendar/jquery.fullcalendar.min.js"></script>

<script>
    $(document).ready(function() {

        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        $('.full-calendar-demo').fullCalendar({
            header: {
                left: 'today month,basicWeek',
                center: 'title',
                right: 'prev,next'
            },
            buttonText: {
                prev: '<span class="icon-chevron-left"></span>',
                next: '<span class="icon-chevron-right"></span>'
            },
            editable: true,
            events: [
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1)
                },
                {
                    title: 'Long Event',
                    start: new Date(y, m, d - 5),
                    end: new Date(y, m, d - 2),
                    className: 'event-red'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d - 3, 16, 0),
                    allDay: false,
                    className: 'event-blue'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d + 4, 16, 0),
                    allDay: false,
                    className: 'event-green'
                },
                {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false,
                    className: 'event-orange'
                },
                {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false,
                    className: 'event-purple'
                },
                {
                    title: 'Birthday Party',
                    start: new Date(y, m, d + 1, 19, 0),
                    end: new Date(y, m, d + 1, 22, 30),
                    allDay: false,
                    className: 'event-turquoise'
                },
                {
                    title: 'Walking Pixels website',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://www.walkingpixels.com/',
                    className: 'event-dark'
                }
            ]
        });

    });
</script>

<!-- jQuery Flot Charts -->
<!--[if lte IE 8]>
        <script language="javascript" type="text/javascript" src="js/plugins/flot/excanvas.min.js"></script>
<![endif]-->
<script src="v2.2/js/plugins/flot/jquery.flot.min.js"></script>
<script src="v2.2/js/plugins/flot/jquery.flot.resize.min.js"></script>

<script>
    $(document).ready(function() {

        // Demo #1
        // we use an inline data source in the example, usually data would be fetched from a server
        var data = [], totalPoints = 300;
        function getRandomData() {
            if (data.length > 0)
                data = data.slice(1);

            // do a random walk
            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 50;
                var y = prev + Math.random() * 10 - 5;
                if (y < 0)
                    y = 0;
                if (y > 100)
                    y = 100;
                data.push(y);
            }

            // zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i)
                res.push([i, data[i]])
            return res;
        }

        // setup control widget
        var updateInterval = 30;
        $("#updateInterval").val(updateInterval).change(function() {
            var v = $(this).val();
            if (v && !isNaN(+v)) {
                updateInterval = +v;
                if (updateInterval < 1)
                    updateInterval = 1;
                if (updateInterval > 2000)
                    updateInterval = 2000;
                $(this).val("" + updateInterval);
            }
        });

        // setup plot
        var options = {
            series: {
                shadowSize: 0,
                color: '#c0392b',
                lines: {
                    fill: true
                }
            }, // drawing is faster without shadows
            yaxis: {min: 0, max: 100},
            xaxis: {show: false},
            grid: {backgroundColor: '#ffffff', borderColor: 'transparent'},
        };
        var plot = $.plot($("#demo-1"), [getRandomData()], options);

        function update() {
            plot.setData([getRandomData()]);
            // since the axes don't change, we don't need to call plot.setupGrid()
            plot.draw();
            setTimeout(update, updateInterval);
        }

        update();

    });
</script>

<!-- Custom checkbox and radio -->
<script src="v2.2/js/plugins/prettyCheckable/prettyCheckable.js"></script>
<script>
    $(document).ready(function() {

        $('.todo-block input').prettyCheckable();

    });
</script>

<!-- Block TODO list -->
<script>
    $(document).ready(function() {

        $('.todo-block input[type="checkbox"], .todo-block .prettycheckbox').click(function() {
            $(this).closest('tr').toggleClass('done');
        });
        $('.todo-block input[type="checkbox"]:checked').closest('tr').addClass('done');

    });
</script>

</body>
</html>

<?php //include('debug_bar.php'); ?>




<?php
    /* End of file footer.php */
    /* Location: ./application/views/{dID}/common/footer.php */

