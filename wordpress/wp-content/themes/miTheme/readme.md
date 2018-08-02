# Diseñando un theme para wordpress

En esta práctica diseñaremos un  tema para wordpress.
Iniciaremos por la página principal y luego con la **single page** o página de artículo.

Usamos SASS para hacer el trabajo más ameno al escribir código CSS y para hacer de esto mucho más rápido.

**NOTA**
La single page, básicamente consta de la mismos estilos de la página principal, lo único que cambia es el contenido. De una vista de varios artículos, a una vista detallada de uno sólo. 

> Recordar colocar la configuración de depuración en TRUE `define('WP_DEBUG', true);`, cuando estemos desarrollando el tema de wordpress. Y colocarla FALSE cuando el blog esté en producción. Esto se modifica en el archivo `wp_config.php`

## Convirtiendo nuestro sitio en un Tema para wordpress

Ya habiendo realizado el diseño de  nuestro sitio, lo vamos a incluir en los temas de wordpress.
Para eso, debemos copiar los archivos en la ruta:
`wordpress/wp-content/themes/` 
Aquí es donde debemos pegar la carpeta con todoslos archivos y darle un nombre, por ejemplo `miTheme`

A  continuación se especifican algunos pasos para la adaptación del diseñoa un tema de wordpress.

1. Crear un archivo llamado `style.css`. Aquí debemos colocar todos los estilos de nuestro sitio y además darle una descripción del tema. Por ejemplo.

*style.css*
```css 
/*
Theme Name: Mi primer Tema
Theme URI: http://johanmosquera.me
Author: Johan Camilo Mosquera
Author URI: http://johanmosquera.me
Description: Mi primer tema de Wordpress creado con HTML, CSS (SASS) y Bootstrap
Version: 1.0
*/
```

2. Debemos crear un archivo llamado `index.php`. Este es un archivo plantilla y es el que abre por defecto wordpress.

3. Debemos agregan una captura de pantalla del tema. La imagen debe llamarse **screenshot** y debe tener unas medidas de `600px 450px`

4. Creamos un archivo llamado `single.php`, este es el archivo del artículo

5. Creamos el archivo `404.php` Para la página de error

6. Creamos el archivo `header.php` para el header de nuestro sitio

7. Creamos el archivo `footer.php`

8. Creamos el archivo `page.php` que sirve para las páginas de wordpress

9. Creamos el archivo `functions.php`, es muy importante, y con él podemos darle algunas funcionalidades extras a nuestro tema

10. Creamos el archivo `sidebar.php`


## Separando las secciones del layout en los archivos php

Wordpress ordena la estructura del tema de la siguiente forma. 
El archivo `index.php`, es el que carga por defecto. Así que aquí es donde debemos colocar el contenido principal del sitio.

En el archivo `header.php`, carga el header de la página. Aquí podemos colocar todo el contenido hacia arriba de la etiqueta `</header>`, esto incluye el menú de navegación.

En el archivo `footer.php`, carga el pie de página. Aquí podemos colocar todo el contenido hacia abajo de la etiqueta `<footer>`.

Luego, de separar la estructura por archivos, debemos incluirlos nuevamente, y esto lo hacemos mediante funciones de wordpress. 

La primera se llama **get_header()**, y obtiene el contenido del archivo `header.php`

La segunda es **get_footer**, e incluye el footer que hemos creado en el archivo `footer.php`

Para cargar el sidebar, colocamos la función **get_sidebar()**  para obtener el contenido del archivo `sidebar.php`

Con la función **bloginfo('template_url')** obtenemos la url de la plantilla. De esta manera podemos usarla para colocar las rutas relativas a los estilos, scripts e imágenes.

Por ejemplo 
```html 
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/estilos.css">
```

Con **bloginfo('url')** obtenemos la url de nuestro sitio web.

**Importante** 
Es recomedable hacer uso de las siguientes funciones, e incluirlas en el archivo index.php 
- **wp_head()** 
    Se coloca antes de la etiqueta head, y nos agrega la barra superior cuando somos usuarios de wordpress. (La típica barra oscura)
- **wp_footer()** 
    Se coloca en el footer, antes de la etiqueta body 

Sin estas funciones, no se podrían incluir plugins, que instalemos en nuestro blog.

## Loop de wordpress

El loop de wordpress nos permite obtener los post que hemos creado, para mostrarlos en la página de entradas

Para mostrar el listado de artículos, debemos usar la siguiente función:

```php 
<?php 
if ( have_posts() ): 
    while (have_posts()): 
        /* Mostramos los post */
        the_post(); 

        # Muestra el enlace del post 
        the_permalink(); 

        # Muestra la imágen del artículo
        if (has_post_thumbnail()){
            the_post_thumbnail('homepage_thumb')
        }

        # Muestra el título del artículo
        the_title();

        # Muestra la fecha del artículo
        echo get_the_date();

        # Muestra la fecha de publicación del artículo
        echo the_excerpt();

        # Muestra las categorías a las que está asociado el artículo
        the_category();

        # Muestra el contenido del artículo
        echo the_content();

    endwhile;
endif;
?>
```

*Para ver el funcionamiento de loop, ver el archivo:* [index.php](index.php)


## Single Page y pagination

Para la navegación, usamos el plugin **wp-pagenavi**, lo instalamos y sólo debemos usar la función `wp_pagenavi();` en donde queramos colocar la paginación.
Lo demás es cuestión de los estilos que le queramos dar a la navegación.

Es recomendable no usar los comentarios de PHP, es mejor usar los comentarios que ofrece el plugin  de **discuss** 

## Menús de navegación 

Para crear menús dinámicos, debemos primero registrar los menús para el tema. Para eso, debemos de ir al archivo `functions.php` y escribir la función `register_nav_menus()`, dentro de el colocamos un arreglo tipo clave valor
```php 
# Registramos dos tipos de menú para nuestro tema
register_nav_menus( array(
    'menu_top' => 'Menú principal',
    'menu-footer'=> 'Menú footer'
));
```

Luego de registrar el menú, debemos incluirlos en el tema usando la función `wp_nav_menu()`. El siguiente ejemplo incluye el menú en el header 
```php
wp_nav_menu(array(
    'container'=>false, 
    'menu_class'=>'', 
    'items_wrap'=>'<ul class="col-md-12">%3$s</ul>',
    'theme_location'=>'menu_top'
));
```

## Areas de sidebar y widgets

Para agregar widgets, debemos incluir igualmente el soporte en las funciones (`functions.php`) del template. 
Para incluir el soporte, debemos usar la función `register_sidebar()`, y él especificamos el id, nombre y las etiquetas de apertura y cierre: 
```php
# Esta función registra una sección para agregar widgets.
register_sidebar(array(
    'id'=>'header',
    'name'=>'Header',
    'before_widget'=>'<div>',
    'after_widget'=>'</div>',
    'before_title'=>'<h3>',
    'after_title'=>'</h3>'
));
```

Para incluir automáticamente los widgets,  debemos colocar estas líneas de código en las secciones del template que nosotros queramos.
En este caso llamamos el sidebar del `header`, que hemos definido en `functions.php`
```php
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header')): endif; ?>
```

Para más detalles, ver los archivos:
- [functions.php](functions.php)
- [header.php](header.php)
- [sidebar.php](sidebar.php)
- [sidebar.php](sidebar.php)
- [footer.php](footer.php)


## Page y error 404

Las páginas son secciones de wordpress similares a la vista de artículos. Sin embargo, tiene como fín mostrar un contenido que nunca cambiará y que es relevante para el sitio. Por ejemplo acerca de, o contacto.

El diseño es similar al del index.php, entonces podemos copiar y pegar el código y, a partir de él modificar el contenido.

## Algunas herramientas útiles

- **Mailchimp** es una herramienta que nos permite crear bases de datos, en las cuales guardamos los correos electrónicos para más adelante enviar campañas e información. 

Es importante para mantener la fidelización de los usuarios, siempre y cuando no excederse en el abuso de ellos.