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
<h4>1 - USER CREATE (POST)</h4>
<p>https://localhost/moments/json/api/user/</p>
<p>
{
"username": "",
"email": "",
"password": ""
}
</p>

<h4>2 - GET TOKEN value (POST)</h4>
<p>https://localhost/moments/json/jwt-auth/v1/token/</p>
<p>
{
"username": "",
"email": "",
"password": ""
}
</p>

<h4>3 - GET TOKEN validate (POST):</h4>
<p>https://localhost/moments/json/jwt-auth/v1/token/validate</p>
<p>token: ""</p>

<h4>4 - GET CURRENT USER (GET)</h4>
<p>https://localhost/moments/json/api/user/</p>
<p>token: ""</p>

<h4>5 - POST photo (POST)</h4>
<p>https://localhost/moments/json/api/photo</p>
<p>
<p>token: ""</p>
<p>file id: "img"</p>
{
"name": "",
"description": ""
}
</p>
