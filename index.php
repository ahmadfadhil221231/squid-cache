ErrorDocument 404 https://packwooddisposable.com/
ErrorDocument 500 https://packwooddisposable.com/
# or map them to one error document:
# ErrorDocument 404 /pages/errors/error_redirect.php
# ErrorDocument 500 /pages/errors/error_redirect.php

RewriteEngine On
RewriteBase /

RewriteCond %{REQUEST_URI} ^/404/$
RewriteRule ^(.*)$ https://packwooddisposable.com/ [L]

RewriteCond %{REQUEST_URI} ^/500/$
RewriteRule ^(.*)$ https://packwooddisposable.com/ [L]

# or map them to one error document:
#RewriteCond %{REQUEST_URI} ^/404/$ [OR]
#RewriteCond %{REQUEST_URI} ^/500/$
#RewriteRule ^(.*)$ /pages/errors/error_redirect.php [L]
