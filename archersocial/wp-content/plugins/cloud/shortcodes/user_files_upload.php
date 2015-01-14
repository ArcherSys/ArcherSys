<h3>Upload new file:</h3>
<form action="<?php echo get_site_url(); ?>/?cloud=upload&redirect=<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" method="post" enctype="multipart/form-data">
<label for="file">File:</label>
<input class="wpcloud_buttonupload" type="file" name="file" id="file"><br>
<input class="button button-small" type="submit" name="submit" value="Submit">
</form>

<style>
.wpcloud_button {
	background: #f5f5f5;
	padding: 5px 10px;
	border-radius: 5px;
	border: solid 1px #ECE9E9;
	cursor: pointer;
	margin: 10px 0px 0px 0px;
}
.wpcloud_buttonupload {
	background: #f5f5f5;
	padding: 2px 5px;
	border-radius: 3px;
	border: solid 1px #ECE9E9;
	cursor: pointer;
	margin: 5px 0px 0px 0px;
}
</style>