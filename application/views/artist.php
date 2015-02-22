<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Echonest - Artist API</title>
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
        <form action="<?php echo site_url('artist/searchArtist'); ?> " role="form" method="post" accept-charset="utf-8">
			<div class="form-group">
				<label for="exampleInputEmail1">Artist name</label>
				<input type="text" class="form-control" id="artist" name="artist" placeholder="Artist name" value="<?php echo set_value('artist' ,''); ?>" >
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
								<input type="checkbox"  name="biographies" id="biographies" value="True"  <?php echo set_checkbox('biographies', 'True'); ?> />
								biographies</label>
						</div>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"  id="blogs" name="blogs" value="True" <?php echo set_checkbox('blogs', 'True'); ?> />
								blogs</label>
						</div>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"  id="discovery" name="discovery" value="True" <?php echo set_checkbox('discovery', 'True'); ?>>
								discovery</label>
						</div>
						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="discovery_rank" name="discovery_rank"  value="True"<?php echo set_checkbox('discovery_rank', 'True'); ?>>
								discovery_rank</label>
						</div>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox" id="doc_counts" name="doc_counts" value="True" <?php echo set_checkbox('doc_counts', 'True'); ?>>
								doc_counts</label>
						</div>
					</td>
					<td>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="familiarity" name="familiarity" value="True" <?php echo set_checkbox('familiarity', 'True'); ?>>
								familiarity</label>
						</div>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="familiarity_rank" name="familiarity_rank" value="True" <?php echo set_checkbox('familiarity_rank', 'True'); ?> >
								familiarity_rank</label>
						</div>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="genre" name="genre" value="True" <?php echo set_checkbox('genre', 'True'); ?>>
								genre</label>
						</div>
						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="hotttnesss" name="hotttnesss" value="True" <?php echo set_checkbox('hotttnesss', 'True'); ?>>
								hotttnesss</label>
						</div>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="hotttnesss_rank" name="hotttnesss_rank" value="True" <?php echo set_checkbox('hotttnesss_rank', 'True'); ?>>
								hotttnesss_rank</label>
						</div>
					</td>
					<td>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="images" name="images" value="True" <?php echo set_checkbox('images', 'True'); ?>>
								images</label>
						</div>

						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="artist_location" name="artist_location" value="True" <?php echo set_checkbox('artist_location', 'True'); ?>>
								artist_location</label>
						</div>
						
						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="news" name="news" value="True" <?php echo set_checkbox('news', 'True'); ?>>
								news</label>
						</div>
						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="reviews" name="reviews" value="True" <?php echo set_checkbox('reviews', 'True'); ?>>
								reviews</label>
						</div>
						
						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="songs" name="songs" value="True" <?php echo set_checkbox('songs', 'True'); ?>>
								songs</label>
						</div>
					</td>
					<td valign="top">
						
						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="urls" name="urls" value="True" <?php echo set_checkbox('urls', 'True'); ?>>
								urls</label>
						</div>
						
						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="video" name="video" value="True" <?php echo set_checkbox('video', 'True'); ?>>
								video</label>
						</div>
						
						<div class="checkbox">
							<label for="exampleInputPassword1">
								<input type="checkbox"   id="years_active" name="years_active" value="True" <?php echo set_checkbox('years_active', 'True'); ?>>
								years_active</label>
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