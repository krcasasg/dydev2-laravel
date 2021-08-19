# Prueba de desarrollo en Laravel CRUD
Esta es una aplicación CRUD realizada en Laravel, para utilizarla se requiere
descargarla, descargar el script SQL donde adjuntan las tablas que se utilizan.
## Configuración de la Base de datos
se debe ajustar el archivo .env de acuerdo a la base de datos, para este caso la llame igual que la carpeta contenedora
de los archivos.
## Ejecutar los archivos que requieren NPM
ejecutar npm install && npm run dev
## Uso
se debe realizar un primer registro en el enlace registro a mano derecha, será redirigido al panel del CRUD donde 
podrá visualizar inicialmente el index con una tabla donde aparecen los usuarios, un menu lateral con opciones de crear 
y listar, al igual que un menú superior con las mismas opciones.

## crear un usuario 
Se hace clic en la opción crear, aparece un formulario para ingreso de datos

## Editar
Cada usuario en la tabla del index contiene una opción editar la cual redirigirá al formulario de actualización de datos

## Eliminar
En el index cada usuario cuenta con un botón eliminar que activa un modal pidiendo confirmación de la eliminación.

## Componentes
1. para la maquetación se utilizo la plantilla adminlte v3
2. construido sobre el framework laravel 8
3. el módulo de autenticación basico de laravel:ui

