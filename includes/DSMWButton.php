<?php

$wgHooks['SkinTemplateToolboxEnd'][] = 'dsmwAddButton';

function dsmwAddButton($skintemplate) {
    global $wgServer;
    $urlServer = $wgServer;
    $url = Title::makeTitle(NS_SPECIAL, 'ArticleAdminPage')->getLocalUrl();
    echo "<li id=\"t-dsmw\"><A HREF=" . $urlServer . $url . ">DSMW Admin</A></li>";
    return true;
}
?>
