<h2> MOMENTS API</h2>

<h3> 1 - Define API route name in functions;</h3>

<h3> 2 - Create endpoints;</h3>

<h3> 3 - Install plugin JWT Authentication for WP REST API by Enrique Chavez;</h3>

<h3> 4 - Edit .htaccess:</h3>

RewriteEngine on
RewriteCond %{HTTP:Authorization} ^(._)
RewriteRule ^(._) - [E=HTTP_AUTHORIZATION:%1]

SetEnvIf Authorization "(.\*)" HTTP_AUTHORIZATION=$1

<h3> 5 - ADD in wp-config.php file (use https://api.wordpress.org/secret-key/1.1/salt/ to secret-key) ON TOP ARCHIVE:</h3>

define('JWT_AUTH_SECRET_KEY', 'your-top-secret-key');
define('JWT_AUTH_CORS_ENABLE', true);

<h3> 6 - Refresh permalinks;</h3>

<h3> Obs:</h3>

1 - GET TOKEN value:
POST
https://localhost/moments/json/jwt-auth/v1/token/
{
"username": "",
"email": "",
"password": ""
}

2 - GET TOKEN validate:
GET
https://localhost/moments/json/jwt-auth/v1/token/validate
token: ""
