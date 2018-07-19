# Bootstrap

Bootstrap es una herramienta muy polular, que nos permite construir aplicaciones web rápidamente. Boostrap tiene componentes pre-fabricados para facilitarnos la vida.

Con Bootstrap no sólo podemos quedarnos con los estilos que nos provee, si no que nosotros podemos personalizarlos a nuestro gusto.
Un ejemplo es [Bootstrap Expo](http://expo.getbootstrap.com/).

Bootstrap por defecto agrega *normalize.css*

## Instalar Bootstrap en nuestros proyectos

Para usar este framework de CSS podemos ir a la página oficial de [Bootstrap](https://getbootstrap.com/) y descargar los archivos para incluirlos en nuestros proyectos. Los archivos son de `css` y `javascript`. O la otra forma es usar la CDN para evitar descargar los archivos.
> Importante:
> Bootstrap utiliza jquery para algunas funcionalidades, es necesario descargarlo.

## Conociendo la Grid de Bootstrap

Son un conjunto de columnas, un sistema de rejillas que nos permite maquetar sitios web.
Bootstrap incluye un sistema de 12 columnas para la pantalla.
Ver [Grid System](https://getbootstrap.com/docs/4.1/layout/grid/)

Las columnas son cajas a las que les podemos dar diferentes tamaños.
Las grillas funcionan como `row>columns`. Las filas son un conjunto de columnas, de modo que debemos tener las columnas `column` dentro de una fila `row`.

Como la filosofía de bootstrap es mobile first, maneja unos puntos de partida para diferentes tamaños de pantalla. Los cuales son:

item | Extra small `<576px` | Small `≥576px` | Medium `≥768px` | Large `≥992px` | Extra large `≥1200px`
-----|----------------------|----------------|-----------------|----------------|-------------
Max container width | None (auto) | 540px | 720px | 960px | 1140px
Class prefix | .col- | .col-sm- | .col-md- | .col-lg- | .col-xl-

## Creando un layout con la grid de Bootstrap

Para crear una plantilla usando las grillas de bootstrap debemos seguir unas reglas.

1. Crear el contenedor `container`
2. Crear la fila `row`
3. Crear las columnas con sus tamaños `col-`
4. Agregar el contenido

## Offset, columnas anidadas y clearfix

- `offset` Esta clase de offset nos permite agregar espacios en blanco para la maquetación de nuestro sitio. Básicamente le decimos que se corra determinadas columnas y a partir de ellas empiece a crearsen las demás

```html
<div class="container">
    <div class="row">
        <div class="caja col-md-2 offset-md-2">
            <h2>Caja</h2>
        </div>
    </div>
</div>
```

- **Columnas anidadas** Para agregar columnas anidadas, debemos usar la clase `row` y dentro de ella agregar las nuevas columnas.

Las columas nuevas tomarán el tamaño del contenedor (`row`)

```html
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="numero col-xs-6 col-md-3">
                <!-- Contenido -->
            </div>
        </div>
    </div>
</div>
```

- **clearfix** Algunas veces se presentan errores en el renderzado de la página cuando usamos las columnas. Hay una forma de poder corregir ese error de CSS y es agregando una clase de bootstrap llamada `clearfix`. Esta caja con la clase debe colocarse en el lugar que queramos corregir el problema.

```html
<div class="clearfix visible-xs visible-sm">
</div>
```

Con las clases visible, le indicamos que sólo puedan ser visibles en esos tamaños de pantalla, lo cuál hará efecto en esos tamaños.

## Textos y bloques para código

Bootstrap al venir con código prediseñado nos agiliza el desarrollo de aplicaciones.
Para usar estilos en los textos, podemos usar el prefijo `text-` y luego por ejemplo para colocar un texto centrado usaríamos `text-center`. O por ejemplo para colocar texto en minúsculas podemos usar la clase `text-lowercase`.

Para codigo en línea podemos usar la etiqueta `<code></code>` o podemos usar la etiqueta `<kbd></kbd>` para destacar texto.

## Tablas

Para aplicar estilos a las tablas con Bootstrap, sólo debemos usar la clase `table` y automáticamente se aplican estilos base a la tabla. Las demás clases son opcionales para hacer que se vean mejor el diseño de nuestra página.

```html
<table class="table table-bordered table-striped table-hover table-condensed">
</table>
```

## Formularios

En bootstrap tenemos básicamente 3 tipos de formularios:

- **Básico** `div.form-group`
- **Inline** `form.form-inline` Sólo debemos colocar esta clase en la etiqueta formulario
- **Horizontal** `div.form-group row`  En este es necesario encerrar el input en div con una clase `col`, al igual que el label.`

Ejemplo de formulario básico

```html
<div class="row">
    <div class="col-md-12">
        <form action="">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input class="form-control" type="text" id="nombre" placeholder="Nombre">
            </div>
        </form>
    </div>
</div>
```

Hay dos clases interesantes que podemos usar en los inputs para las validaciones:

- **is-valid** Nos colorea el input de verde indicando que ha sido aceptado
- **is-invalid** Colorea el input de rojo para indicar un error
- **div.valid-feedback | div.invalid-feedback** Es un div que colocamos con cualquiera de los dos casos para indicar al usuario lo que ha pasado

```html
<div class="form-group">
    <input type="text" class="form-control is-valid" placeholder="Input">
    <div class="valid-feedback">
        Looks good!
    </div>
</div
```