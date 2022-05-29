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

<h3> Endpoints:</h3>
<h4> 1 - GET TOKEN value (POST)</h4>
<p>https://localhost/moments/json/jwt-auth/v1/token/</p><br/>
<p>{
"username": "",
"email": "",
"password": ""
}
</p>

<h4>2 - GET TOKEN validate (POST):</h4>
<p>https://localhost/moments/json/jwt-auth/v1/token/validate</p><br/>
<p>token: ""</p>

<h4>3 - POST photo https://localhost/moments/json/api/photo</h4>
