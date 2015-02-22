<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Echonest - Song API</title>
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
        <form action="<?php echo site_url('song/searchSong'); ?> " role="form" method="post" accept-charset="utf-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Artist name</label>
                <input type="text" class="form-control" id="artist" name="artist" placeholder="Artist name" value="<?php echo set_value('artist' ,''); ?>" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Song name</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Song name" value="<?php echo set_value('title' ,''); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Number of results</label>
                <input type="text" class="form-control" id="results" name="results" placeholder="No of results" value="<?php echo set_value('results' ,'3'); ?>">
            </div>
			<table>
				<tr>
					<td>
						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"  name="audio_summary" id="audio_summary" value="True"  <?php echo set_checkbox('audio_summary', 'True'); ?> />
								audio_summary</label>
						</div>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"  id="artist_discovery" name="artist_discovery" value="True" <?php echo set_checkbox('artist_discovery', 'True'); ?> />
								artist_discovery</label>
						</div>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"  id="artist_discovery_rank" name="artist_discovery_rank" value="True" <?php echo set_checkbox('artist_discovery_rank', 'True'); ?>>
								artist_discovery_rank</label>
						</div>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="artist_familiarity" name="artist_familiarity"  value="True"<?php echo set_checkbox('artist_familiarity', 'True'); ?>>
								artist_familiarity</label>
						</div>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox" id="artist_familiarity_rank" name="artist_familiarity_rank" value="True" <?php echo set_checkbox('artist_familiarity_rank', 'True'); ?>>
								artist_familiarity_rank</label>
						</div>
					</td>
					<td>
						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="artist_hotttnesss" name="artist_hotttnesss" value="True" <?php echo set_checkbox('artist_hotttnesss', 'True'); ?>>
								artist_hotttnesss</label>
						</div>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="artist_hotttnesss_rank" name="artist_hotttnesss_rank" value="True" <?php echo set_checkbox('artist_hotttnesss_rank', 'True'); ?> >
								artist_hotttnesss_rank</label>
						</div>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="artist_location" name="artist_location" value="True" <?php echo set_checkbox('artist_location', 'True'); ?>>
								artist_location</label>
						</div>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="song_currency" name="song_currency" value="True" <?php echo set_checkbox('song_currency', 'True'); ?>>
								song_currency</label>
						</div>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="song_currency_rank" name="song_currency_rank" value="True" <?php echo set_checkbox('song_currency_rank', 'True'); ?>>
								song_currency_rank</label>
						</div>
					</td>
					<td>
						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="song_discovery" name="song_discovery" value="True" <?php echo set_checkbox('song_discovery', 'True'); ?>>
								song_discovery</label>
						</div>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="song_discovery_rank" name="song_discovery_rank" value="True" <?php echo set_checkbox('song_discovery_rank', 'True'); ?>>
								song_discovery_rank</label>
						</div>
						
						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="song_hotttnesss" name="song_hotttnesss" value="True" <?php echo set_checkbox('song_hotttnesss', 'True'); ?>>
								song_hotttnesss</label>
						</div>
						
						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="song_hotttnesss_rank" name="song_hotttnesss_rank" value="True" <?php echo set_checkbox('song_hotttnesss_rank', 'True'); ?>>
								song_hotttnesss_rank</label>
						</div>
						
						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="song_type" name="song_type" value="True" <?php echo set_checkbox('song_type', 'True'); ?>>
								song_type</label>
						</div>
					</td>
				</tr>
			</table>
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