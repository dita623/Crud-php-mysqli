<?php
include 'database.php';
$no = $_GET['nama']; //get the no which will updated
$query = "SELECT * FROM tb_student WHERE nama = $nama"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>
<form method="post" action="proses_ubah.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="orange">
	<td height="21" colspan="3">
     <strong> Form Update</strong>
    </td>

  <tr>
  	<td width="23%"> No </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="no" disabled='disable' value="<?php echo $data['no']; ?>"> </td>
  </tr>

  <tr>
  	<td>nama</td>
    <td>:</td>
    <td> <input type="text" name="nama" value="<?php echo $data['nama']; ?>"> </td>
  </tr>

  <tr>
  	<td>username</td>
    <td>:</td>
    <td> <textarea name="username"><?php echo $data['username']; ?>"> </td>
  </tr>
  <tr>
    <td>password</td>
    <td>:</td>
    <td> <input type="text" name="password" value="<?php echo $data['password']; ?>"> </td>
  </tr>
  <tr>
    <td>email</td>
    <td>:</td>
    <td> <input type="text" name="email" value="<?php echo $data['email']; ?>"> </td>
  </tr>

<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
  	<input type="SUBMIT" name="SUBMIT" value="Save"></td>
  </tr>
</table>
</form>