<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Le styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
</head>

<body>

<div class="container">

    <!-------->
    <div id="content">
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#red" data-toggle="tab">Red</a></li>
            <li><a href="#orange" data-toggle="tab">Orange</a></li>
            <li><a href="#yellow" data-toggle="tab">Yellow</a></li>
            <li><a href="#green" data-toggle="tab">Green</a></li>
            <li><a href="#blue" data-toggle="tab">Blue</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="red">
                <h1>Red</h1>
                <p>red red red red red red</p>
            </div>
            <div class="tab-pane" id="orange">
                <h1>Orange</h1>
                <p>orange orange orange orange orange</p>
            </div>
            <div class="tab-pane" id="yellow">
                <h1>Yellow</h1>
                <p>yellow yellow yellow yellow yellow</p>
            </div>
            <div class="tab-pane" id="green">
                <h1>Green</h1>
                <p>green green green green green</p>
            </div>
            <div class="tab-pane" id="blue">
                <h1>Blue</h1>
                <p>blue blue blue blue blue</p>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $('#tabs').tab();
        });
    </script>
</div> <!-- container -->

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>