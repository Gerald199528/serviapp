
¡Hola! Esta es una aplicación en desarrollo cuyo objetivo es crear un sistema web movil, donde el usuario pueda acceder  y generar reportes sobre los servicios  "Publicos" en Venezuela, el sistema contiene apis tales como google cloud, google Map entre otras 

Pasos para configurar la aplicación: Paso 1:

Abre la aplicación con un editor de código, como Visual Studio Code o el de tu preferencia.

Dirígete al archivo llamado .env.example y renómbralo a .env eliminando la parte “example”.

Paso 2:

Ejecuta los siguientes comandos en tu consola (Git Bash, CMD, etc.):

#npm install,
#composer install,
#php artisan key:generate,
Antes de migrar dirigete al archivo .env y donde dice "DB_DATABASE" remplazalo por  "DB_DATABASE=serviapp_trujillo" ya que la BD tiene como nonbre serviapp_trujillo luego si puedes usar el siguiente comando " #php artisan migrate"
#php artisan serve
