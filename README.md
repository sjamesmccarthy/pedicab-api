pedicabAPI
=============

pedicabAPI is a simple PHP RESTful API that returns JSON  

__Requires:__  
PHP 5.0, Apache htaccess  

__License:__  
GPL 3, http://opensource.org/licenses/GPL-3.0

__Usage:__  
http://[domain]/[version]/[endpoint]/[verb]/[id]/

__Returned Result:__  
{"title":"Quam Sit","content":"Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit."}

__Still Todo:__  
1. Implement public API Key (http://php.net/manual/en/features.http-auth.php)
2. Implement private API Secret Key 
3. Move database credentials to config JSON file
4. Validate headers on requests (http://php.net/manual/en/function.get-headers.php, https://developer.mozilla.org/en-US/docs/Web/HTTP/Server-Side_Access_Control)
