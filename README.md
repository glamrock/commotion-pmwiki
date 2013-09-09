commotion-pmwiki: PmWiki for Commotion Linux nodes

##Getting Started
Copy the `pmwiki` folder to `/var/www`. At this point, you can change the folder name to something more memorable like `wiki`.  You can now view the wiki by visiting `http://localhost/pmwiki/`. Because it is hosted locally, the address doesn't include .com, .net, or other top-level domains.

###Setting PmWiki skin
In `pmwiki/local/config.php`, search for `$Skin =`. After that, you will see a default defined as `'CoTheme'` -- you may replace this name with another skin within the `pmwiki/pub/skins` folder.  

###Installing dependencies
PmWiki requires PHP to run. PHP5 and beyond includes a web server automatically, but if you are using PHP4, you must also install Apache2 or lighttpd.

`sudo apt-get install php5 -y`


