Omeka-DeepzoomViewer
====================

install the plugin as usual.
change .htaccess
replace line 
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule .* index.php
with line
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule !\.(js|ico|gif|jpg|png|css|html|xml)$ index.php

add a new item type : deepzoom.
add it to the selected items.

the plugin adds a new routing to omeka :deepzoom-viewer.
which accepts 'index/show/filename/' as a parameter.

note : 
the default configuration is expecting the deepzoomfiles to be stored
under /digitized.
to change that, change data-urin in  show.php 
