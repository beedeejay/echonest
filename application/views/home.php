<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Mavibes Test</title>
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
    </style>
</head>

<body>

    <div id="container" style="margin: 100px; background-color: #C0C0C0; padding: 20px;">
        <form action="<?php echo site_url('home/getinfo'); ?> " role="form" method="post" accept-charset="utf-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Artist name</label>
                <input type="text" class="form-control" id="artistname" name="artistname" placeholder="Artist name" value="<?php echo set_value('artistname' ,''); ?>" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Song name</label>
                <input type="text" class="form-control" id="songname" name="songname" placeholder="Song name" value="<?php echo set_value('songname' ,''); ?>">
            </div>

            <div class="checkbox">
                <label for="exampleInputPassword1">
                    <input type="checkbox"  name="description" id="description" value="True"  <?php echo set_checkbox('description', 'True'); ?> />
                    Description</label>
            </div>

            <div class="checkbox">
                <label for="exampleInputPassword1">
                    <input type="checkbox"  id="style" name="style" value="True" <?php echo set_checkbox('style', 'True'); ?> />
                    Style</label>
            </div>

            <div class="checkbox">
                <label for="exampleInputPassword1">
                    <input type="checkbox"  id="mood" name="mood" value="True" <?php echo set_checkbox('mood', 'True'); ?>>
                    Mood</label>
            </div>

            <div class="checkbox">
                <label for="exampleInputPassword1">
                    <input type="checkbox"   id="rank_type" name="rank_type"  value="True"<?php echo set_checkbox('rank_type', 'True'); ?>>
                    Rank type</label>
            </div>

            <div class="checkbox">
                <label for="exampleInputPassword1">
                    <input type="checkbox" id="artist_id" name="artist_id" value="True" <?php echo set_checkbox('artist_id', 'True'); ?>>
                    Artist id</label>
            </div>

            <div class="checkbox">
                <label for="exampleInputPassword1">
                    <input type="checkbox"   id="results" name="results" value="True" <?php echo set_checkbox('results', 'True'); ?>>
                    Results</label>
            </div>

            <div class="checkbox">
                <label for="exampleInputPassword1">
                    <input type="checkbox"   id="song_type" name="song_type" value="True" <?php echo set_checkbox('song_type', 'True'); ?> >
                    Song type</label>
            </div>

            <div class="checkbox">
                <label for="exampleInputPassword1">
                    <input type="checkbox"   id="max_energy" name="max_energy" value="True" <?php echo set_checkbox('max_energy', 'True'); ?>>
                    Max Energy</label>
            </div>

            <div class="checkbox">
                <label for="exampleInputPassword1">
                    <input type="checkbox"   id="liveness" name="liveness" value="True" <?php echo set_checkbox('liveness', 'True'); ?>>
                    Liveness</label>
            </div>

            <div class="checkbox">
                <label for="exampleInputPassword1">
                    <input type="checkbox"   id="max_speechiness" name="max_speechiness" value="True" <?php echo set_checkbox('max_speechiness', 'True'); ?>>
                    Max speechiness</label>
            </div>

            <div class="checkbox">
                <label for="exampleInputPassword1">
                    <input type="checkbox"   id="max_acousticness" name="max_acousticness" value="True" <?php echo set_checkbox('max_acousticness', 'True'); ?>>
                    Max acousticness</label>
            </div>


            <!--<div class="checkbox">
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                </label>
                <label class="radio-inline">
                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                </label>
            </div>-->


           <!-- <div class="checkbox">
                <label for="exampleInputPassword1"><input type="checkbox"   id="format" placeholder="Format">Format</label>
            </div>-->

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        </br>
        </br>
        <div>
            <fieldset>
                <legend> Http Query:</legend>
                <?php
                if (isset($query_info)) {
                    print_r($query_info);
                }
                ?>

            </fieldset>
            </br>
            <fieldset>
                <legend> Results:</legend>

                <?php
                    if (isset($curl_result)) {
                        echo $curl_result;
                    }
                ?>
            </fieldset>
        </div>

    </div>

</body>
</html>