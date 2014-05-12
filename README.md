Uploading files with CakePHP
============================

Para el correcto funcionamiento de este proyecto hacer lo siguiente:

- Crear una carpeta en la raíz del servidor web por ejemplo: `/var/www/demo/`.
- Clonar o descargar este repositorio en la carpeta recién creada.
- Cargar la BD a nuestro mysql (por consola o bien usando phpmyadmin, es indistinto) esta base de datos viene en el archivo: `database.sql`.
- Al cargar la BD se creará una bd en MySQL llamada `uploading_files_demo` (esta la usaremos para probar el proyecto)
- Crear un usuario de MySQL llamado `uploading_user` con contraseña `uploading_user`, este se usará para la conexión
(o bien configurar otro usuario y contraseña en el archivo `/var/www/demo/app/config/database.php`).
- Para probar que todo está funcionando ingresar a: `http://localhost/demo/contenidos` y verás una pantalla como la de la figura `demo.png` (incluida como parte de este ejemplo).


**NOTA:** Para guardar correctamente las imágenes se requiere que la carpeta `/var/www/ismael/app/webroot/img/Contenido/`
tenga permisos de escritura para el usuario y el grupo de apache (o el que esté configurado).