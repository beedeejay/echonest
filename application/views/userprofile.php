

    <div id="" style="margin-top: 60px; background-color: #C0C0C0; padding: 20px;">
		<table class="table">
			<thead>
				<tr>
					<td>Create Profile</td>
					<td>List Profiles</td>
					<td>Read Profiles</td>
					<td>Delete Profile</td>
					<td>Get Predictions</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<form action="<?php echo site_url('userprofile/createProfile'); ?> " role="form" method="post" accept-charset="utf-8">
							<div class="form-group">
								<label for="exampleInputEmail1">Taste Profile name</label>
								<input type="text" class="form-control" id="create_name" name="create_name" placeholder="Greg's rocking moments" value="<?php echo set_value('create_name' ,''); ?>" >
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Taste Profile type</label>
								<input type="text" class="form-control" id="create_type" name="create_type" placeholder="song, artist, or general" value="<?php echo set_value('create_type' ,'general'); ?>">
							</div>
							</br>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</td>
					<td>
						<form action="<?php echo site_url('userprofile/listprofiles'); ?> " role="form" method="post" accept-charset="utf-8">
							<div class="form-group" style="visibility:hidden;">
								<label for="exampleInputEmail1">Taste Profile name</label>
								<input type="text" class="form-control" id="create_name" name="create_name" placeholder="Greg's rocking moments" value="<?php echo set_value('create_name' ,''); ?>" >
							</div>
							<div class="form-group" style="visibility:hidden;">
								<label for="exampleInputPassword1">Taste Profile type</label>
								<input type="text" class="form-control" id="create_type" name="create_type" placeholder="song, artist, or general" value="<?php echo set_value('create_type' ,'general'); ?>">
							</div>
							</br>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</td>
					<td>
						<form action="<?php echo site_url('userprofile/readProfile'); ?> " role="form" method="post" accept-charset="utf-8">
							<div class="form-group" >
								<label for="exampleInputEmail1">Read Profile name</label>
								<input type="text" class="form-control" id="read_profile_id" name="read_profile_id" placeholder="Greg's rocking moments" value="<?php echo set_value('read_profile_id' ,''); ?>" >
							</div>
							<div class="form-group" style="visibility:hidden;">
								<label for="exampleInputPassword1">Taste Profile type</label>
								<input type="text" class="form-control" id="create_type" name="create_type" placeholder="song, artist, or general" value="<?php echo set_value('create_type' ,'general'); ?>">
							</div>
							</br>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</td>
					<td>
						<form action="<?php echo site_url('userprofile/deleteProfile'); ?> " role="form" method="post" accept-charset="utf-8">
							<div class="form-group">
								<label for="exampleInputEmail1">Delete Profile name</label>
								<input type="text" class="form-control" id="profile_id" name="profile_id" placeholder="Greg's rocking moments" value="<?php echo set_value('profile_id' ,''); ?>" >
							</div>
							<div class="form-group" style="visibility:hidden;">
								<label for="exampleInputPassword1" >Taste Profile type</label>
								<input type="text" class="form-control" id="create_type" name="create_type" placeholder="song, artist, or general" value="<?php echo set_value('create_type' ,'general'); ?>">
							</div>
							</br>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</td>
					<td>
						<form action="<?php echo site_url('userprofile/getPredictions'); ?> " role="form" method="post" accept-charset="utf-8">
							<div class="form-group">
								<label for="exampleInputEmail1">Get Predictions</label>
								<input type="text" class="form-control" id="pred_profile_id" name="pred_profile_id" placeholder="Greg's rocking moments" value="<?php echo set_value('pred_profile_id' ,''); ?>" >
							</div>
							<table>
								<tbody>
									<tr>
										<td>
											<div class="checkbox">
												<label for="exampleInputPassword1">
													<input type="checkbox"  name="pred_adventurousness" id="pred_adventurousness" value="True"  <?php echo set_checkbox('pred_adventurousness', 'True'); ?> />
													Adventurousness</label>
											</div>

											<div class="checkbox">
												<label for="exampleInputPassword1">
													<input type="checkbox"  id="pred_diversity" name="pred_diversity" value="True" <?php echo set_checkbox('pred_diversity', 'True'); ?> />
													Diversity</label>
											</div>

											<div class="checkbox">
												<label for="exampleInputPassword1">
													<input type="checkbox"  id="pred_freshness" name="pred_freshness" value="True" <?php echo set_checkbox('pred_freshness', 'True'); ?>>
													Freshness</label>
											</div>
										</td>
										<td>
											<div class="checkbox">
												<label for="exampleInputPassword1">
													<input type="checkbox"   id="pred_mainstreamness" name="pred_mainstreamness"  value="True"<?php echo set_checkbox('pred_mainstreamness', 'True'); ?>>
													Mainstreamness</label>
											</div>

											<div class="checkbox">
												<label for="exampleInputPassword1">
													<input type="checkbox" id="pred_top_years" name="pred_top_years" value="True" <?php echo set_checkbox('pred_top_years', 'True'); ?>>
													Top years</label>
											</div>
											<div class="checkbox">
												<label for="exampleInputPassword1">
													<input type="checkbox" id="pred_top_styles" name="pred_top_styles" value="True" <?php echo set_checkbox('pred_top_styles', 'True'); ?>>
													Top styles</label>
											</div>
										</td>
									</tr>
								</tbody>
							</table>

							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</td>
				</tr>
			</tbody>
		</table>
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