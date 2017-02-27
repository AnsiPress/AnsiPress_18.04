<?PHP
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '{{ db_name.stdout }}');

/** MySQL database username */
define('DB_USER', '{{ db_user.stdout }}');

/** MySQL database password */
define('DB_PASSWORD', '{{ random_password.stdout }}');

/** MySQL hostname */
define('DB_HOST', 'localhost');
