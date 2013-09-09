<?php if (!defined('PmWiki')) exit();
$WikiTitle = "Community Wiki";
$PageLogoUrl = "co.png";

#Favicon -CHECK^
#$Favicon = "favicon.ico";

#Set the skin name, which is the name of the folder in pub/skins/
$Skin = 'CoTheme';

#this is the default admin password
$DefaultPasswords['admin'] = crypt('default');

#set to 0 if you want to prevent file uploads
$EnableUpload = 1;
#this is the default upload password
$DefaultPasswords['upload'] = crypt('upload')

#Require editors to have an account (1=yes, 0=no)
$EnablePostAuthorRequired = 0;

#time format eg June 19th, 2013 at 11:11 pm
#no time zone listed as it's being run as a local app
$TimeFmt = '%B %d, %Y at %I:%M %p'

# Remove the default "rel='nofollow'" attribute for external links.
$UrlLinkFmt = "<a class='urllink' href='\$LinkUrl' title='\$LinkAlt'>\$LinkText</a>"

#include add-ons ("Cookbook" and "Scripts")
include_once("cookbook/recipefile.php");
include_once("scripts/scriptfile.php");

#Enable UTF-8 characters and all languages
include_once("scripts/xlpage-utf-8.php");

##  The refcount.php script enables ?action=refcount, which helps to find missing and orphaned pages.
if ($action == 'refcount') include_once("scripts/refcount.php");

#Uncomment next line to enable RSS feeds
# if ($action == 'rss')  include_once("scripts/feeds.php");  # RSS 2.0

#Automatically create category pages when linked
#NOTE: if enabled, auto-created categories must be manually deleted (if mis-spelled etc)
$AutoCreate['/^Category\\./'] = array('ctime' => $Now);




#leaving php tag open
