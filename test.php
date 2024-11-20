<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="windows-1251">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <title>Spora for OregonCore</title>
    <link id="bnetstyle" href="img/style.css" type="text/css" rel="stylesheet">
</head>
<body text="#cccc99" vlink="#aaaaaa" link="#ffffbb" bgcolor="#000000" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
    
        <table height="100%" cellspacing="0" cellpadding="0" width="100%" border="0">
            <tbody>
                <tr>
                    <td align="center">
                        <table cellspacing="0" cellpadding="0" background="img/backgrounds/default.jpg" border="0" style="background-repeat: no-repeat;">
                            <tbody>
                                <tr>
                                    <td valign="top">
                                        <div style="position: relative;">
                                            <div style="left: 130px; width: 400px; position: absolute; top: 0px;"></div>
                                        </div>
                                    </td>
                                    <td><img height="169" src="img/pixel.gif" width="1" alt=""></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><img height="1" src="img/pixel.gif" width="203" alt=""></td>
                                    <td>
									<?php
									if(isset($_POST['newacc']))
									{
										echo '<TR><TD rowSpan=6><IMG height=152 width=1 src="en/pixel.gif"><TD align=Center><SMALL class=error>
	Fields are filled not all
	<br><br><br><br></SMALL></TD></TD></TR><br>';
									}
									else
									{
									?>
									<form name="newacc" action="" method="post">
                                        <table cellspacing="0" cellpadding="0" width="220" border="0">
                                            <tbody>
                                                <tr>
                                                    <td rowspan="6"><img height="110" src="img/pixel.gif" width="15" alt=""></td>
                                                    <td valign="center" align="left" width="190">
                                                        <b style="font-size: 8pt;"><label for="username">Account Name:</label>&nbsp;</b><br>
                                                        <input id="username" style="width: 175px" tabindex="1" maxlength="16" size="18" name="username">
                                                    </td>
                                                    <td rowspan="6"><img height="1" src="img/pixel.gif" width="15" alt=""></td>
                                                </tr>
                                                <tr><td width="190" height="1"></td></tr>
                                                <tr><td width="190" height="1"></td></tr>
                                                <tr>
                                                    <td valign="center" align="left" width="190">
                                                        <b style="font-size: 8pt;"><label for="passw">Password:</label>&nbsp;</b><br>
                                                        <input id="passw" style="width: 175px" tabindex="2" type="password" maxlength="16" size="18" name="passw">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td valign="center" align="left" width="190">
                                                        <b style="font-size: 8pt;"><label for="email">E-mail:</label>&nbsp;</b><br>
                                                        <input id="email" style="width: 175px" tabindex="3" maxlength="50" size="18" name="email">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left">
                                                        <table cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        &nbsp; <!-- nothing here -->
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" colspan="3">
                                                        <table cellspacing="0" cellpadding="0" border="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td><img height="39" src="img/pixel.gif" width="19" alt=""></td>
                                                                    <td>
                                                                        <input class="create_acc" name="newacc" style="width: 168px; height: 39px" tabindex="4" type="submit" value="" alt="Create" border="0">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
									</form>
									<?php
									}
									?>
                                    </td>
                                    <td><img height="1" src="img/pixel.gif" width="217" alt=""></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <table cellspacing="0" cellpadding="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td colspan="3"><img height="17" src="img/pixel.gif" width="1" alt=""></td>
                                                </tr>
                                                <tr>
                                                    <td width="106"><img height="1" src="img/pixel.gif" width="106" alt=""></td>
                                                    <td width="410">
                                                        <small>
                                                            <table cellpadding="3" cellspacing="0" align="center">
                                                                <tbody>
                                                                    <tr class="title">
                                                                        <td align="left" nowrap="nowrap" width="50"></td>
                                                                        <td align="left" nowrap="nowrap" width="60"><a href="0">Name</a></td>
                                                                        <td align="center" nowrap="nowrap" width="40"><a href="1">Race</a></td>
                                                                        <td align="center" nowrap="nowrap" width="40"><a href="2">Class</a></td>
                                                                        <td align="center" nowrap="nowrap" width="40"><a href="3">LvL</a></td>
                                                                        <td align="left" nowrap="nowrap" width="100"><a href="4">Location</a></td>
                                                                    </tr>
                                                                    <tr><td class="txt" align="center" colspan="6" nowrap="nowrap"><img height="1" src="img/pixel.gif" width="400" alt=""></td></tr>
                                                                </tbody>
                                                            </table>
                                                        </small>
                                                    </td>
                                                    <td width="124"><img height="1" src="img/pixel.gif" width="124" alt=""></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3"><img height="100" src="img/pixel.gif" width="1" alt=""></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
</body>
</html>
