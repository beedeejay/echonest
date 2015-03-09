

    <div id="container" style="margin-top: 60px; background-color: #C0C0C0; padding: 20px;">
        <form action="<?php echo site_url('playlist/createPlaylist'); ?> " role="form" method="post" accept-charset="utf-8">

            <div class="container">

            <div class="form-group" style="width: 310px;">
                <label for="exampleInputEmail1">Taste Profile id</label>
                <input type="text" class="form-control" id="seed_catalog" name="seed_catalog" placeholder="some taste profile id" value="<?php echo set_value('seed_catalog' ,''); ?>" >
            </div>
            <div class="form-group" style="width: 310px;">
                <label for="exampleInputPassword1">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" placeholder="Rock" value="<?php echo set_value('genre' ,''); ?>">
            </div>
            <div class="form-group" style="width: 310px;">
                <label for="exampleInputPassword1">Artist name</label>
                <input type="text" class="form-control" id="artist" name="artist" placeholder="Arctic Monkeys" value="<?php echo set_value('artist' ,''); ?>">
            </div>
            <div class="form-group" style="width: 310px;">
                <label for="exampleInputPassword1">Song id</label>
                <input type="text" class="form-control" id="song_id" name="song_id" placeholder="some song id" value="<?php echo set_value('song_id' ,''); ?>">
            </div>

            <div class="form-group" style="width: 600px;">
               <div class="form-group" style="width: 600px;">
                    <label for="exampleInputPassword1">Variety</label>
                    <div class="row">
                        <div class="col-xs-6" style="	display: inline;">
                            <div class="range range-primary10">
                                <input autofocus = "autofocus" type="range" id="Variety" name="Variety" min="0.0" max="1" step="0.1" value="0.0" onchange="rangePrimary10.value=value">
                                <output id="rangePrimary10">0.0</output>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group" style="width: 600px;">
                <div class="form-group" style="width: 600px;">
                    <label for="exampleInputPassword1">Distribution</label>
                    <div class="row">
                        <div class="col-xs-6" style="	display: inline;">
                            <div class="range range-primary9">
                                <input autofocus = "autofocus" type="range" id="Distribution" name="Distribution" min="0.0" max="1" step="0.1" value="0.0" onchange="rangePrimary9.value=value">
                                <output id="rangePrimary9">0.0</output>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group" style="width: 600px;">
                <div class="form-group" style="width: 600px;">
                    <label for="exampleInputPassword1">Adventurousness</label>
                    <div class="row">
                        <div class="col-xs-6" style="	display: inline;">
                            <div class="range range-primary8">
                                <input autofocus = "autofocus" type="range" id="adventurousness" name="adventurousness" min="0.0" max="1" step="0.1" value="0.0" onchange="rangePrimary8.value=value">
                                <output id="rangePrimary8">0.0</output>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group" style="width: 600px;">
                 <div class="form-group" style="width: 600px;">
                    <label for="exampleInputPassword1">Song hotness</label>
                    <div class="row">
                        <div class="col-xs-6" style="	display: inline;">
                            <div class="range range-primary7">
                                <input autofocus = "autofocus" type="range" id="target_song_hotttnesss" name="target_song_hotttnesss" min="0.0" max="1" step="0.1" value="0.0" onchange="rangePrimary7.value=value">
                                <output id="rangePrimary7">0.0</output>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group" style="width: 600px;">
               <div class="form-group" style="width: 600px;">
                    <label for="exampleInputPassword1">Artist hotness</label>
                    <div class="row">
                        <div class="col-xs-6" style="	display: inline;">
                            <div class="range range-primary6">
                                <input autofocus = "autofocus" type="range" id="target_artist_hotttnesss" name="target_artist_hotttnesss" min="0.0" max="1" step="0.1" value="0.0" onchange="rangePrimary6.value=value">
                                <output id="rangePrimary6">0.0</output>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group" style="width: 600px;">
                <div class="form-group" style="width: 600px;">
                    <label for="exampleInputPassword1">Song familiarity</label>
                    <div class="row">
                        <div class="col-xs-6" style="	display: inline;">
                            <div class="range range-primary5">
                                <input autofocus = "autofocus" type="range" id="target_artist_familiarity" name="target_artist_familiarity" min="0.0" max="1" step="0.1" value="0.0" onchange="rangePrimary5.value=value">
                                <output id="rangePrimary5">0.0</output>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="form-group" style="width: 600px;">
                <div class="form-group" style="width: 600px;">
                    <label for="exampleInputPassword1">Song acousticness</label>
                    <div class="row">
                        <div class="col-xs-6" style="	display: inline;">
                            <div class="range range-primary4">
                                <input autofocus = "autofocus" type="range" id="target_acousticness" name="target_acousticness" min="0.0" max="1" step="0.1" value="0.0" onchange="rangePrimary4.value=value">
                                <output id="rangePrimary4">0.0</output>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group" style="width: 600px;">
                <div class="form-group" style="width: 600px;">
                    <label for="exampleInputPassword1">Song Speechiness</label>
                    <div class="row">
                        <div class="col-xs-6" style="	display: inline;">
                            <div class="range range-primary3">
                                <input autofocus = "autofocus" type="range" id="target_speechiness" name="target_speechiness" min="0.0" max="1" step="0.1" value="0.0" onchange="rangePrimary3.value=value">
                                <output id="rangePrimary3">0.0</output>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group" style="width: 600px;">
                <div class="form-group" style="width: 600px;">
                    <label for="exampleInputPassword1">Song energy</label>
                    <div class="row">
                        <div class="col-xs-6" style="	display: inline;">
                            <div class="range range-primary2">
                                <input autofocus = "autofocus" type="range" id="target_energy" name="target_energy" min="0.0" max="1" step="0.1" value="0.0" onchange="rangePrimary2.value=value">
                                <output id="rangePrimary2">0.0</output>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group" style="width: 600px;">
                <label for="exampleInputPassword1">Song liveness</label>
                <div class="row">
                    <div class="col-xs-6" style="	display: inline;">
                        <div class="range range-primary1">
                            <input autofocus = "autofocus" type="range" id="target_liveness" name="target_liveness" min="0.0" max="1" step="0.1" value="0.0" onchange="rangePrimary1.value=value">
                            <output id="rangePrimary1">0.0</output>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group" style="width: 600px;">
                <label for="exampleInputPassword1">Song danceability</label>
                <div class="row">
                    <div class="col-xs-6" style="	display: inline;">
                        <div class="range range-primary">
                            <input autofocus = "autofocus" type="range" id="target_danceability" name="target_danceability" min="0.0" max="1" step="0.1" value="0.0" onchange="rangePrimary.value=value">
                            <output id="rangePrimary">0.0</output>
                        </div>
                    </div>
                </div>
            </div>

            </br>
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