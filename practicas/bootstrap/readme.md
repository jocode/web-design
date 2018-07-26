# Práctica con Bootstrap

En esta práctica estaremos diseñando un sitio web, usando bootstrap.

## Creación del menú

Para la creación del menú es importante usar la clase `mr-auto` en lista desordenada `ul`, con esya clase separamos el formulario de búsqueda ubicándolo en el extremo derecho.

```html
<ul class="navbar-nav mr-auto">
    <!--Contenido del menú-->
</ul>
<form class="form-inline"></form>
```

La clase del formulario debe ser de tipo línea para que pueda ubicarse en una sóla línea en la barra de navegación.

La clase **`navbar-expand-md`** indica el breakpoint o punto de ruptura en el que la barra de navegación se adaptará a los distintos tamaños. En este ejemplo, le indicamos que esté completa a partir de la medida **md** en adelante.

Recordemos que bootstrap trabaja las siguientes medidas:

- `col - Extra Small` <576px
- `col-sm - Small` ≥576px
- `col-md - Medium` ≥768px
- `col-lg - Large` ≥992px
- `col-xl - Extra Large` ≥1200px

En esta versión de Bootstrap vienen muchas clases nuevas. Por ejemplo, la clase `mb-3` Indica un margin bottom, y esta clase la usamos en los cards.