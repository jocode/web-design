# Sass

[Sass - Syntactically Awesome Style Sheets](https://sass-lang.com/) es un preprocesador de CSS que nos permite entre otras muchas cosas escribir código CSS más rápido.


## Instalar Sass
Para instalar Sass, debemos ir a la página oficial y dar clic en la opción instalar. Hay dos formas de instalar:
- Usando Aplicaciones de Escritorio
	- Koala
	- Scout-App
	- ...
- Por la línea de comandos *(Recomendada)*

Para instalarla por la línea de comandos la instalamos usando el **npm** Node Package Manager. Sólo debemos seguir las indicaciones que nos ofrecen en la página web: [Install Sass](https://sass-lang.com/install)

> Si no tenemos instalado Node.JS debemos descargar el entorno de ejecución para Javascript

En el caso de tener Node.JS podemos ejecutar el siguiente comando:

`npm install -g sass`

Para ver la versión de Sass, debemos escribir el comando

`sass --version`

## Soporte de Sass en Sublime Text
Por defecto Sublime Text no trate soporte para los archivos de tipos Sass, entonces debemos instalr el paquete usando el comando `Install Package` de Package Control. Sólo basta con escribir **Sass** e instalar el paquete.

Cuando instales el paquete debe aparecer algo como esto:

*Thank you for installing this Sass syntax highlighting package.*

## Tipos de Sintaxis en Sass
Hay dos formas de escribir código css con Sass, cada una difiere en la extensión del archivo.
Ambos son archivo son de Sass, pero la diferencia en la sintaxis con la que se escriben los archivos

- **Sintaxis Sass:** `.sass` esta sintaxis es un poco diferente de la sintaxis de CSS estándar. No difiere mucho. Por ejemplo, te evita colocar puntos y coma al final de los valores de propiedades. Además, las llaves no se usan y en su lugar se realizan indentados.

```sass
$primary-color: #3bbfce;
$margin: 16px;

.content-navigation {
  border-color: $primary-color;
  color: darken($primary-color, 10%);
}

.border {
  padding: $margin / 2;
  margin: $margin / 2;
  border-color: $primary-color;
}
```

- **Sintaxis SCSS:** `.scss` Es una sintaxis bastante similar a la sintaxis del propio CSS. De hecho, el código CSS es código SCSS válido. Podríamos decir que SCSS es código CSS con algunas cosas extra.

```scss
$primary-color: #3bbfce
$margin: 16px

.content-navigation
  border-color: $primary-color
  color: darken($primary-color, 10%)

.border
  padding: $margin/2
  margin:  $margin/2
  border-color: $primary-color
```

## Compilar el código de Sass
El navegador siempre buscará un archivo con la extensión `.css`, es decir siempre leerá los archivos de hoja de estilos en cascada.

Para compilar un archivo debemos usamos el comando:
`sass estilos.sass estilos.css`

Primero nos ubicamos dentro del directorio, y luego usando la palabra reservada sass indicamos el archivo sass y luego el archivo al cuál queremos compilar.

## Compilar Sass de manera automática con un "watcher"
Al usar Sass, siempre debemos compilar los archivos a css, y es tedioso ir a la consola cada vez que queremos compilar el archivo. Esto lo solucionamos con la palabra watch en la consola con Sass.

El  "watcher" que se encargue de compilar automáticamente el fichero cada vez que guardes el archivo original.

`sass --watch origen.scss destino.css`

Tambien podemos vigilar los archivos de una carpeta usando **:**. Pero recuerda estar siempre en la ruta adecuada

`sass --watch sass:css`

> Cada vez que vayas a trabajar con los estilos, debes ejecutar el comando nuevamente. O puedes utilizar el programa "Koala" para que no tengas repetir el proceso

## Variables
Podemos guardar valores de forma temporal.
Las variables se agregan usando el signo de dolar **$**
`$colorPrimario: #000`

> En Atom para mostrar una línea en más renglones debemos ir a View > Toggle Soft Wrap y listo, no tenemos el larguero horizontal 
