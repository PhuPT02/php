RewriteEngine On
RewriteRule ^chi-tiet-([a-zA-Z0-9_-]+)-([0-9]+)$ tin_tuc.php?parameter=c_tintuc&func=chi_tiet_tintuc&id=$2
RewriteRule ^tin-tuc-([a-zA-Z0-9_-]+)-([0-9]+)$ tin_tuc.php?parameter=c_tintuc&func=ds_tintuc&id=$2
RewriteRule ^([a-zA-Z0-9_-]+)-([0-9]+)$ tin_tuc.php?parameter=c_tintuc&func=tintuc&id=$2
RewriteRule ^trang-chu$ index.php


Options +FollowSymlinks
RewriteEngine on
ErrorDocument 404 index.php
ErrorDocument 401 index.php
ErrorDocument 403 index.php
ErrorDocument 400 index.php

Options All -Indexes

<Files .htaccess>
Order Allow,Deny
Deny from all
</Files>

<Files database.php>
Order Allow,Deny
Deny from all
</Files>