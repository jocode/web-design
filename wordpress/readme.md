# Wordpress

WordPress es un sistema de gestión de contenidos o CMS enfocado a la creación de cualquier tipo de página web. Es un sistema de gestión de contenidos o CMS (por sus siglas en inglés, Content Management System).

El sitio oficial de wordpress para trabajar libremente es [wordpress.org](https://es.wordpress.org/)

## Diferencia entre wordpress.org y wordpress.com

- **wordpress.com** Es un servicio que podemos contratar para alojar nuestro blog. Es limitado y no puedes modificar el código fuente.

- **wordpress.org** Es gratuito, nos permite personalizar el sitio a nuestro gusto. Aquí usted descarga el CMS y tienes la opción de contratar el hosting que quieras.

En nuestro caso trabajaremos con `wordpress.org`

## Descargar e instalar un servidor local

Debemos decargar un servidor local como XAMPP. 
Un servidor local son una serie de herremientas que nos permiten ejecutar un servidor dentro de nuestra computadora. Este servicio utiliza un servidor Apache, MAriaDB para las bases de datos y PHP como servidor de backend.

Algunas alternativas a XAMPP son:
- WAMPP Server
- MAMP For windows

En algunas ocasiones puede generar errores de puertos al usar XAMPP, generalmante Skype, Spotify o thumberbird utiliza estos puertos para funcionar.

> Los proyectos se deben guardar en la carpeta `htdocs`, generalmente en la ruta `C:\xampp\htdocs`

Para ejecutar el servidor debemos irnos al panel y habilitar las opciones de Apache y MySQL.

Para acceder a la ruta por el navegador, lo hacemos con `localhost`, ó digitando la dirección IP local que es `127.0.0.1`

## Instalando Wordpress 

Como vamos a usar wordpress.org, debemos descargar los archivos. Los pasos son los siguientes

1. Descargar wordpress del sitio [wordpress.org/download](https://es.wordpress.org/download/)
2. Copiarlos en la ruta de nuestro servidor local
3. Abrir el sitio web (Debes haber encendido el servidor - XAMPP)
4. Seguir los pasos del asistente
    - Crear usuario
    - Crear la base de datos
    - Darle un nombre al sitio web

Ya al finalizar los pasos, puedes acceder al dashboard o panel de administración de tu sitio web, usando wordpress.

Debes digitar un usuario y una contraseña para que puedas acceder al panel de control. Pueden ser:
- usuario: `admin`
- contraseña: `esunacontraseñafuerte`