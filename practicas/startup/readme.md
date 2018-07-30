# Sitio web para una Startup

Es un sitio web con un diseño que tiene como objetivo una Startup o empresa que ofresca servicios. Para el desarrollo de este sitio se usó HTML, Bootstrap en donde usamos las grillas para la maquetación y para darle nuestros estilos personalizados usamos Sass, con lo cuál podemos escribir código CSS más rápido y fácilmente.

Recordar que para compilar archivos usando sass debemos estar en la carpeta que deseemos compilar.

```
sass --watch origen.sass destino.css
```

Con la propiedad **`--watch`** le indicamos al compilador que esté pendiente de los nuevos cambios que de generen.

Para generar archivo CSS minificado, usamos la propiedad **`--style`** y el valor `compressed`

```
sass --watch origen.sass destino.css --style compressed
```

El valor de salida por defecto es `expanded` y sólo existen esas dos opciones:

- `expanded` (Default)
- `compressed`

Si no se especifica ningún tipo de output, por defecto el código CSS generado será con el estilo `expanded`

## Recursos utilizados

- Para íconos podemos usar la página [Flaticon](https://www.flaticon.com/), allí podemos descargar íconos gratuitamente.