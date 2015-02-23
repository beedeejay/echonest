<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Echonest Explorer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap-3.3.2-dist/css/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap-3.3.2-dist/css/bootstrap-theme.css');?>">

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
    </style>
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
