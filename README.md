<h2> MOMENTS API</h2>

# 1 - Define API route name in functions;

# 2 - Create endpoints;

# 3 - Install plugin JWT Authentication for WP REST API by Enrique Chavez;

# 4 - Edit .htaccess:

RewriteEngine on
RewriteCond %{HTTP:Authorization} ^(._)
RewriteRule ^(._) - [E=HTTP_AUTHORIZATION:%1]

SetEnvIf Authorization "(.\*)" HTTP_AUTHORIZATION=$1

# 5 - ADD in wp-config.php file (use https://api.wordpress.org/secret-key/1.1/salt/ to secret-key) ON TOP ARCHIVE:

define('JWT_AUTH_SECRET_KEY', 'your-top-secret-key');
define('JWT_AUTH_CORS_ENABLE', true);

# 6 - Refresh permalinks;

# Obs:

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
