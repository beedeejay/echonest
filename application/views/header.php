<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Echonest Explorer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap-3.3.2-dist/css/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap-3.3.2-dist/css/bootstrap-theme.css');?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap-slider-master/js/bootstrap-slider.js');?>">

    <style type="text/css">

        ::selection { background-color: #E13300; color: white; }
        ::-moz-selection { background-color: #E13300; color: white; }
        ::-webkit-selection { background-color: #E13300; color: white; }

        body {
                background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;

        }
        .form-group {
            padding-right: 50px;
        }


        @import url(http://fonts.googleapis.com/css?family=Roboto:400,300);
        @import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

        body {
            padding: 70px 0px;
        }

        .range {
            display: table;
            position: relative;
            height: 25px;
            margin-top: 20px;
            background-color: rgb(245, 245, 245);
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .range input[type="range"] {
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            -ms-appearance: none !important;
            -o-appearance: none !important;
            appearance: none !important;

            display: table-cell;
            width: 100%;
            background-color: transparent;
            height: 25px;
            cursor: pointer;
        }
        .range input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            -ms-appearance: none !important;
            -o-appearance: none !important;
            appearance: none !important;

            width: 11px;
            height: 25px;
            color: rgb(255, 255, 255);
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0px;
            background-color: rgb(153, 153, 153);
        }

        .range input[type="range"]::-moz-slider-thumb {
            -webkit-appearance: none !important;
            -moz-appearance: none !important;
            -ms-appearance: none !important;
            -o-appearance: none !important;
            appearance: none !important;

            width: 11px;
            height: 25px;
            color: rgb(255, 255, 255);
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: 0px;
            background-color: rgb(153, 153, 153);
        }

        .range output {
            display: table-cell;
            padding: 3px 5px 2px;
            min-width: 40px;
            color: rgb(255, 255, 255);
            background-color: rgb(153, 153, 153);
            text-align: center;
            text-decoration: none;
            border-radius: 4px;
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
            width: 1%;
            white-space: nowrap;
            vertical-align: middle;

            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;

            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: -moz-none;
            -o-user-select: none;
            user-select: none;
        }
        .range input[type="range"] {
            outline: none;
        }
        .range.range-primary, .range-primary1 , .range-primary2, .range-primary3 input[type="range"]::-webkit-slider-thumb {
            background-color: rgb(66, 139, 202);
        }
        .range.range-primary input[type="range"]::-moz-slider-thumb {
            background-color: rgb(66, 139, 202);
        }
        .range.range-primary output {
            background-color: rgb(66, 139, 202);
        }
        .range.range-primary input[type="range"] {
            outline-color: rgb(66, 139, 202);
        }

    </style>
    <script>

        // Without JQuery
        var slider = new Slider('#ex1', {
            formatter: function(value) {
                return 'Current value: ' + value;
            }
        });
        alert("Yeah!");

    </script>
</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
    <div class="container">
        <ul class="nav navbar-nav">
            <li class="<?php echo (isset($sal)) ?  $sal : 's'; ?>"><a href="<?php echo site_url('song/searchsong');?>">Song <span class="sr-only">(current)</span></a></li>
            <li class="<?php echo (isset($aal)) ?  $aal : 's'; ?>"><a href="<?php echo site_url('artist/searchartist');?>">Artist</a></li>
            <li class="<?php echo (isset($upal)) ?  $upal : 's'; ?>"><a href="<?php echo site_url('userprofile');?>">Taste Profile</a></li>
            <li class="<?php echo (isset($plal)) ?  $plal : 's'; ?>"><a href="<?php echo site_url('playlist');?>">Playlist</a></li>
        </ul>
    </div>
</nav>
