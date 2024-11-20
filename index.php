<?php
/* 
	SPORA for VMangos
	Simple Page Of Registration of Accounts for VMangos

	It is made in the form of one page with fields of input of the 
	information of an account and the list of players being on a server.
    Using php SRP

*/
include ('config.php');

	

$ceva ='';
$username = '';


	

	
if(isset($_POST['createacc']))
{
	if (empty($_POST['username']) and empty($_POST['passw']) and empty($_POST['email']))
	{
		$cont='<TR><TD rowSpan=6><IMG height=152 width=1 src="'.$img_base.'pixel.gif"><TD align=Center><SMALL class=error>
		'.$text["not_all"].'
		<br><br><br><br></SMALL></TD></TD></TR><br>';
	}
	else
	{
		//do the thing
		
		$insert = '';
		if($insert != '1')
		{
			//account exists
			$cont='<TR><TD rowSpan=6><IMG height=152 width=1 src="'.$img_base.'pixel.gif"><TD align=Center><SMALL class=error>
			Username or email<br>'.$text["taken"].'
			<br><br><br><br></SMALL></TD></TD></TR><br>';
		}
		else
		{
			//account create
			//cont ok
			$cont='<TR><TD rowSpan=6><IMG height=152 width=1 src="'.$img_base.'pixel.gif"><TD align=Center><SMALL>
			'.$text["acc"].'<br><strong>'.$username.'</strong><br>'.$text["create"].'
			<br><br><br><br></SMALL></TD></TD></TR><br>';
		}
		
	}
}
else
{
	$cont='         <TR>
                <TD rowSpan=6><IMG height=110 
                  src="'.$img_base.'pixel.gif" width=15></TD>
                <TD vAlign=center align=left width=190><B 
                  style="FONT-SIZE: 8pt;"><LABEL 
                  for=username>'.$text["name"].':</LABEL>&nbsp;</b><BR><INPUT 
                  id=username style="WIDTH: 175px" tabIndex=1 maxLength=16 
                  size=18 name=username></TD>
                <TD rowSpan=6><IMG height=1 src="'.$img_base.'pixel.gif" width=15></TD></TR>
              <TR><TD width=190 height=1></TD></TR>
              <TR><TD width=190 height=1></TD></TR>
              <TR>
                <TD vAlign=center align=left width=190><B 
                  style="FONT-SIZE: 8pt;"><LABEL 
                  for=passw>'.$text["password"].':</LABEL>&nbsp;</B><BR><INPUT id=passw 
                  style="WIDTH: 175px" tabIndex=2 type=password maxLength=16 
                  size=18 name=passw></TD></TR>
              <TR>
                <TD vAlign=center align=left width=190><B 
                  style="FONT-SIZE: 8pt;"><LABEL 
                  for=email>E-mail:</LABEL>&nbsp;</B><BR><INPUT id=email 
                  style="WIDTH: 175px" tabIndex=2 maxLength=50 
                  size=18 name=email></TD></TR>
              <TR>
                <TD align=left>
                  <TABLE cellSpacing=0 cellPadding=0 border=0>
                    <TBODY>
                    <TR>
                      <TD><B style="FONT-SIZE: 8pt;">Burning Crusade Enabled?&nbsp</b>
		      <input type="checkbox" name="flags" value="1" checked></td>
                      <TD></TD>
                      <TD></TD></TR></TBODY></TABLE></TD></TR>
              <TR>
                <TD align=left colSpan=3>
                  <TABLE cellSpacing=0 cellPadding=0 border=0>
                    <TBODY>
                    <TR>
                      <TD><IMG height=39 
                        src="'.$img_base.'pixel.gif" width=19></TD>
                      <TD><INPUT class=button 
                        style="WIDTH: 168px; HEIGHT: 39px" tabIndex=3 type=image 
                        alt=Create src="'.$img_base.$button.'" 
                        value=Create border=0></TD>
					</TR></TBODY></TABLE></TD></TR>';
}


$onlineplayers= '10';

$playerloc = '34';

$list="";
$i=0;
while ($i < $onlineplayers)
	{
	$name='Playername';
	$race='1';
	$class='1';
	$res_race = $def['character_race'][$race];
	$res_class = $def['character_class'][$class];
	$lvl='10';
	$loc=$zone['34'];
	$gender='1';
	$list.= "
				<tr class=txt>
					<td></td>
					<td>$name</td>
					<td align='center'><img alt=$res_race src='".$img_base.$race."-$gender.gif' height='18' width='18'></td>
					<td align='center'><img alt=$res_class src='".$img_base."$class.gif' height='18' width='18'></td>
					<td align='center'>$lvl</td>
					<td >$loc</td>
				</tr>";
	$i++;
	}



// Main part !!!
?>
<HTML><HEAD><META HTTP-EQUIV="Pragma" CONTENT="no-cache"><TITLE><?php print $title ?></TITLE>
<META http-equiv=Content-Type content="text/html; charset=windows-1251"><LINK 
id=bnetstyle href="<?php print $img_base ?>style.css" type=text/css 
rel=stylesheet>
  </SCRIPT>
</HEAD>
<BODY text=#cccc99 vLink=#aaaaaa link=#ffffbb bgColor=#000000 leftMargin=0 
topMargin=0 marginheight="0" marginwidth="0">
<FORM name=login_form method=post>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD align=middle>
      <TABLE cellSpacing=0 cellPadding=0 background="<?php print $img_base ?>/backgrounds/default.jpg" border=0 style="background-repeat: no-repeat;">
        <TBODY>
        <TR>
          <TD vAlign=top>
            <DIV style="POSITION: relative">
            <DIV 
            style="LEFT: 130px; WIDTH: 400px; POSITION: absolute; TOP: 0px"></DIV></DIV></TD>
          <TD><IMG height=169 src="<?php print $img_base ?>pixel.gif" 
          width=1></TD>
          <TD></TD></TR>
        <TR>
          <TD><IMG height=1 src="<?php print $img_base ?>pixel.gif" 
          width=203></TD>
          <TD>
		  <TABLE cellSpacing=0 cellPadding=0 width=220 border=0>
		  <TBODY>
            <?php print $cont ?></TBODY></TABLE></TD>
          <TD><IMG height=1 src="<?php print $img_base ?>pixel.gif" 
          width=217></TD></TR>
        <TR>
          <TD colSpan=3>
            <TABLE cellSpacing=0 cellPadding=0 border=0>
              <TBODY>
              <TR>
                <TD colSpan=3><IMG height=17 
                  src="<?php print $img_base ?>pixel.gif" width=1></TD></TR>
	      <TR>
                <TD width=106><IMG height=1 
                  src="<?php print $img_base ?>pixel.gif" width=106></TD>
                <TD width=410><SMALL>
			<strong class=title><center><?php print $text['realm']; echo $realmlist; ?></center></strong><br>
<strong class=title><center><?php print $realm ?></center></strong><br>

<table cellpadding='3' cellspacing='0' align='center'>
				<tbody>
<tr class=title>
			<td align='left' nowrap='nowrap' width=50></td>
			<td align='left' nowrap='nowrap' width=60><a href="<?php print $link.'0">'.$text['char'][0] ?></a></td>
			<td align='center' nowrap='nowrap' width=40><a href="<?php print $link.'1">'.$text['char'][1] ?></a></td>
			<td align='center' nowrap='nowrap' width=40><a href="<?php print $link.'2">'.$text['char'][2] ?></a></td>
			<td align='center' nowrap='nowrap' width=40><a href="<?php print $link.'3">'.$text['char'][3] ?></a></td>
			<td align='left' nowrap='nowrap' width=100><a href="<?php print $link.'4">'.$text['char'][4] ?></a></td>
				</tr>
<tr><td class='txt' align='center' colspan='6' nowrap='nowrap'><IMG height=1 src='<?php print $img_base ?>pixel.gif' width=400></td></tr>				<?php print $list ?>				
				</tbody>
</table>

                  </SMALL></TD>
                <TD width=124><IMG height=1 
                  src="<?php print $img_base ?>pixel.gif" width=124></TD></TR>
              <TR>
                <TD colSpan=3><IMG height=100 
                  src="<?php print $img_base ?>pixel.gif" 
            width=1></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></FORM></BODY></HTML>