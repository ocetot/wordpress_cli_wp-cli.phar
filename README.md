# wordpress_cli_wp-cli.phar

* instala wordpress por consola

wp core download --locale=es_ES

* para configurar wp-config /// base de datos ya creada

wp config create --dbname=apiwordpress --dbuser=root --dbpass= --dbhost=localhost

* ingreso al admin o login de wordpress por consola /// 

wp core install --url=wordpress.test --title="apiwordpress" --admin_user=admin --admin_password=123456 --admin_email=mensajeriayin@gmail.com
