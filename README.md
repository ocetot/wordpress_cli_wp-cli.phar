# wordpress_cli_wp-cli.phar

* instala wordpress por consola

wp core download --locale=es_ES

* agrega los datos de una base de datos previeamente creada

wp config create --dbname=p --dbuser=root --dbpass= --dbhost=localhoset --dbprefix=wp_

* borra la base de datos
 wp db clean --yes

* ingreso al admin o login de wordpress por consola /// (༼ つ ◕_◕ ༽つ😑 coloca la url bien en esta caso local http://localhost/apiwordpress )

wp core install --url=http://localhost/p --title="p de prueba" --admin_user=admin --admin_password=123456 --admin_email=mensajeriayin@gmail.com

* tema par wordpress


wp theme activate twentytwentyone

* genera 10 post


wp post generate --count=10


* instala woocommerce plugin

wp plugin install woocommerce -activete


* contraseña aplicacion //(wp-config.php)

define('WP_ENVIRONMENT_TYPE', 'local');

