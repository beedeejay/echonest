

    <div id="container" style="margin: 100px; background-color: #C0C0C0; padding: 20px;">
        <form action="<?php echo site_url('userprofile/createProfile'); ?> " role="form" method="post" accept-charset="utf-8">
			<div class="form-group">
				<label for="exampleInputEmail1">Taste Profile name</label>
				<input type="text" class="form-control" id="create_name" name="create_name" placeholder="Greg's rocking moments" value="<?php echo set_value('create_name' ,''); ?>" >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Taste Profile type</label>
				<input type="text" class="form-control" id="create_type" name="create_type" placeholder="song, artist, or general" value="<?php echo set_value('create_type' ,'general'); ?>">
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