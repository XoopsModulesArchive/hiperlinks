<?php

//
// ------------------------------------------------------------------------- //
// E-Xoops: Content Management for the Masses //
// < http://www.e-xoops.com > //
// ------------------------------------------------------------------------- //
// Original Author: Pascal Le Boustouller
// Author Website : pascal.e-xoops@perso-search.com
// Licence Type : GPL
// ------------------------------------------------------------------------- //
require XOOPS_ROOT_PATH . '/modules/myAds/header.php';
require XOOPS_ROOT_PATH . '/modules/myAds/cache/config.php';
require XOOPS_ROOT_PATH . '/modules/myAds/include/functions.php';
if (!isset($lid)) {
    exit();
}
function EnvAnn($lid)
{
    global $xoopsConfig, $xoopsDB, $xoopsUser, $xoopsTheme, $xoopsLogger;

    require XOOPS_ROOT_PATH . '/modules/myAds/header.php';

    $result = $xoopsDB->query('SELECT lid, title, email FROM ' . $xoopsDB->prefix('xdir_links') . " where lid=$lid");

    [$lid, $title, $email] = $xoopsDB->fetchRow($result);

    OpenTable();

    echo '
<b>' . _CLA_SENDTO . " $lid \"<B>$lid : $title</B>\" " . _CLA_FRIEND . "<br><br>
<form action=\"mail_center.php\" method=post>
<input type=hidden name=lid value=$lid>";

    if ($xoopsUser) {
        $idd = $iddds = $xoopsUser->getVar('name', 'E');

        $idde = $iddds = $xoopsUser->getVar('email', 'E');
    }

    echo '
<TABLE BORDER=0>
<TR>
<TD>' . _CLA_NAME . " </TD>
<TD><input class=textbox type=text name=\"yname\" value=\"$idd\"></TD>
</TR>
<TR>
<TD>" . _CLA_MAIL . " </TD>
<TD><input class=textbox type=text name=\"ymail\" value=\"$idde\"></TD>
</TR>
<TR>
<TD COLSPAN=2> </TD>
</TR>
<TR>
<TD>" . _CLA_MAILFR . " </TD>
<TD><input class=textbox type=textarea name=\"message\"><textarea></TD>
</TR>
</TABLE>
<input type=hidden name=\"email\" value=\"$email\">
<input type=hidden name=op value=MailAnn>
<input type=submit value=" . _CLA_SENDFR . '>
</form> ';

    CloseTable();

    require XOOPS_ROOT_PATH . '/footer.php';
}
function MailAnn($lid, $yname, $ymail, $message, $email)
{
    global $xoopsConfig, $xoopsUser, $xoopsDB, $myts, $xoopsLogger;

    $result = $xoopsDB->query('SELECT lid, title, email FROM ' . $xoopsDB->prefix('xdir_links') . " where lid=$lid");

    [$lid, $title, $email] = $xoopsDB->fetchRow($result);

    $title = htmlspecialchars($title, ENT_QUOTES | ENT_HTML5);

    $submitter = htmlspecialchars($submitter, ENT_QUOTES | ENT_HTML5);

    $email = htmlspecialchars($email, ENT_QUOTES | ENT_HTML5);

    $subject = '' . _CLA_SUBJET . ' ' . $xoopsConfig['sitename'] . '';

    $message .= "\n" . _CLA_INTERESS . ' ' . $xoopsConfig['sitename'] . "\n" . XOOPS_URL . '/modules/myAds/';

    mail($email, $subject, $message, "From: \"$yname\" <$ymail>\nX-Mailer: PHP/" . phpversion());

    redirect_header('index.php', 1, _CLA_ANNSEND);

    exit();
}
function ImprAnn($lid)
{
    global $xoopsConfig, $xoopsUser, $xoopsDB, $monnaie, $useroffset, $claday,$ynprice,$myts,$xoopsLogger;

    $currenttheme = getTheme();

    $result = $xoopsDB->query('SELECT lid, title, type, description, tel, price, typeprix, date, email, submitter, town, country, photo FROM ' . $xoopsDB->prefix('ann_annonces') . " where lid=$lid");

    [$lid, $title, $type, $description, $tel, $price, $typeprix, $date, $email, $submitter, $town, $country, $photo] = $xoopsDB->fetchRow($result);

    $title = htmlspecialchars($title, ENT_QUOTES | ENT_HTML5);

    $type = htmlspecialchars($type, ENT_QUOTES | ENT_HTML5);

    $description = $myts->displayTarea($description, 1, 0, 0);

    $tel = htmlspecialchars($tel, ENT_QUOTES | ENT_HTML5);

    $price = htmlspecialchars($price, ENT_QUOTES | ENT_HTML5);

    $typeprix = htmlspecialchars($typeprix, ENT_QUOTES | ENT_HTML5);

    $submitter = htmlspecialchars($submitter, ENT_QUOTES | ENT_HTML5);

    $town = htmlspecialchars($town, ENT_QUOTES | ENT_HTML5);

    $country = htmlspecialchars($country, ENT_QUOTES | ENT_HTML5);

    echo '
<html>
<head><title>' . $xoopsConfig['sitename'] . '</title>
<LINK REL="StyleSheet" HREF="../../themes/' . $currenttheme . '/style/style.css" TYPE="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
<table border=0><tr><td>
<table border=0 width=640 cellpadding=0 cellspacing=1 bgcolor="#000000"><tr><td>
<table border=0 width=100% cellpadding=15 cellspacing=1 bgcolor="#FFFFFF"><tr><td>';

    $useroffset = '';

    if ($xoopsUser) {
        $timezone = $xoopsUser->timezone();

        if (isset($timezone)) {
            $useroffset = $xoopsUser->timezone();
        } else {
            $useroffset = $xoopsConfig['default_TZ'];
        }
    }

    $date = ($useroffset * 3600) + $date;

    $date2 = $date + ($claday * 86400);

    $date = formatTimestamp($date, 's');

    $date2 = formatTimestamp($date2, 's');

    echo '<br><br><TABLE WIDTH=100% BORDER=0>
<TR>
<TD>' . _CLA_ANNFROM . " $submitter (No. $lid )<br><br>";

    echo " <b>$type :</b> <I>$title</I> ";

    echo "</TD>
</TR>
<TR>
<TD><DIV STYLE=\"text-align:justify;\">$description</DIV><P>";

    if ($price && 1 == $ynprice) {
        echo '<B>' . _CLA_PRICE2 . "</B> $price $monnaie - $typeprix<br>";
    }

    echo '' . _CLA_BYMAIL . ' <A HREF="' . XOOPS_URL . "/modules/myAds/contact.php?lid=$lid\">" . XOOPS_URL . "/modules/myAds/contact.php?lid=$lid</A>";

    if ($tel) {
        echo '<br>' . _CLA_TEL . " $tel";
    }

    if ($town) {
        echo '<br>' . _CLA_TOWN . " $town";
    }

    if ($country) {
        echo '<br>' . _CLA_COUNTRY . " $country";
    }

    echo '<br><br>' . _CLA_DATE2 . " $date " . _CLA_DISPO . " $date2<br><br>";

    if ($photo) {
        echo "<CENTER><IMG SRC=\"images_ann/$photo\" BORDER=0></CENTER>";
    }

    echo '</TD>
</TR>
</TABLE>';

    echo '<br><br></td></tr></table></td></tr></table>
<br><br><center>
' . _CLA_EXTRANN . ' <B>' . $xoopsConfig['sitename'] . '</B><br>
<a href="' . XOOPS_URL . '/modules/myAds/">' . XOOPS_URL . '/modules/myAds/</a>
</td></tr></table>
</body>
</html>
';
}
switch ($op) {
case 'EnvAnn':
EnvAnn($lid);
break;
case 'MailAnn':
MailAnn($lid, $yname, $ymail, $message, $email);
break;
case 'ImprAnn':
ImprAnn($lid);
break;
default:
redirect_header('index.php', 1, '' . _RETURNGLO . '');
break;
}
