

    <div id="container" style="margin-top: 60px; background-color: #C0C0C0; padding: 20px;">
        <form action="<?php echo site_url('playlist/createPlaylist'); ?> " role="form" method="post" accept-charset="utf-8">
            <div class="form-group">
                <label for="exampleInputEmail1">Taste Profile id</label>
                <input type="text" class="form-control" id="seed_catalog" name="seed_catalog" placeholder="some taste profile id" value="<?php echo set_value('seed_catalog' ,''); ?>" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" placeholder="Rock" value="<?php echo set_value('genre' ,''); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Artist name</label>
                <input type="text" class="form-control" id="artist" name="artist" placeholder="Arctic Monkeys" value="<?php echo set_value('artist' ,''); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Song id</label>
                <input type="text" class="form-control" id="song_id" name="song_id" placeholder="some song id" value="<?php echo set_value('song_id' ,''); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Variety</label>
                <input type="text" class="form-control" id="variety" name="variety" placeholder="0.0 - 1.0" value="<?php echo set_value('variety' ,''); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Distribution</label>
                <input type="text" class="form-control" id="distribution" name="distribution" placeholder="0.0 - 1.0" value="<?php echo set_value('distribution' ,''); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Adventurousness</label>
                <input type="text" class="form-control" id="adventurousness" name="adventurousness" placeholder="0.0 - 1.0" value="<?php echo set_value('adventurousness' ,''); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Song hotness</label>
                <input type="text" class="form-control" id="target_song_hotttnesss" name="target_song_hotttnesss" placeholder="0.0 - 1.0" value="<?php echo set_value('target_song_hotttnesss' ,''); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Artist hotness</label>
                <input type="text" class="form-control" id="target_artist_hotttnesss" name="target_artist_hotttnesss" placeholder="0.0 - 1.0" value="<?php echo set_value('target_artist_hotttnesss' ,''); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Artist familiarity</label>
                <input type="text" class="form-control" id="target_artist_familiarity" name="target_artist_familiarity" placeholder="0.0 - 1.0" value="<?php echo set_value('target_artist_familiarity' ,''); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Song acousticness</label>
                <input type="text" class="form-control" id="target_acousticness" name="target_acousticness" placeholder="0.0 - 1.0" value="<?php echo set_value('target_acousticness' ,''); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Song Speechiness</label>
                <input type="text" class="form-control" id="target_speechiness" name="target_speechiness" placeholder="0.0 - 1.0" value="<?php echo set_value('target_speechiness' ,''); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Song energy</label>
                <input type="text" class="form-control" id="target_energy" name="target_energy" placeholder="0.0 - 1.0" value="<?php echo set_value('target_energy' ,''); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Song liveness</label>
                <input type="text" class="form-control" id="target_liveness" name="target_liveness" placeholder="0.0 - 1.0" value="<?php echo set_value('target_liveness' ,''); ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Song danceability</label>
                <input type="text" class="form-control" id="target_danceability" name="target_danceability" placeholder="0.0 - 1.0" value="<?php echo set_value('target_danceability' ,''); ?>">
            </div>
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