# Git y Github

## Qué es Git
Git es un software de control de versiones distribuito, gratis y de código abierto que permite manejar proyectos pequeñosy grandes con rapidez y eficiencia.

Fué creado por Linus Torvals y es una de las herramientas indispensables para todo programador.

*Ver* [Introducción a Git](Introducción a Git.pdf)

La página oficial es https://git-scm.com/

## Qué es Github

Github es una plataforma para los desarrolladores, que permite almacenar y administrar proyectos. Allí podemos compartir proyectos con demás personas y poder trabajarlos desde allí.

*La página oficial es* https://github.com/


## Primeros Pasos

Primero debemos descargar git. Si estás en windows, es necesario descargar el programa, en Mac OS y Linux viene por defecto (Comprobar de todas maneras).

La descarga se efectúa desde la página https://git-scm.com/download/

Se descarga el archivo `.exe`, y completamos la típica instalación de siguiente, siguiente, siguiente...

Para trabajar con git,  vamos a trabajar mediante la consola. Es decir, debemos escribir comandos que no son difíciles y sólo es cuestion de acostrumbrarse.

Luego para actualizar `git`, podemos hacerlo mediante la consola.
En windows, sería lo siguiente:
```
git update-git-for-windows
```

De esta manera podemos actualizar git mediante la consola. 

También podemos descargar el instalador desde la página oficial, para actualizar la versión de ``git`.

*Para mayor información sobre git, ver la documentación en:* https://git-scm.com/book/es/v2 


## Configurando git

Para configurar git, debemos abrir la consola, y allí digitar el siguiente comando
```
git config --global
```

Con **`--global`** configuramos git de forma global, es decir, todos los proyectos tendrán esa configuración

- Configuramos el **nombre de usuario**
```js
git config --global user.name "Johan Mosquera"
```

- Configuramos el **correo**: Este nos permite saber quién es el que ha confirmado los cambios en el código
```js
git config --global user.email "correo@correo.com"
```

- Configuramos los colores en la consola `git bash`, de esta manera nos mostrará con colores los comandos.
```js
git config --global color.ui true
```

## Entendiendo git y los repositorios

Git nos permite controlar las versiones de nuestro proyecto, con él podemos obtener versiones anteriores de nuestros proyectos.

- **Repositorio** Es el lugar donde almacena todos los archivos del proyecto.

Para crear un repositorio, usamos el comando:
```js
git init 
```
Con este comando, se crea una carpeta oculta llamada `.git`

Crea una carpeta con el nombre que le especifiquemos
```js
git init "nombre-del-proyecto"
```

Observamos el estado de nuestro repositorio
```js
git status
```

- **staging index (area)** Es el area de preparación de los archivos, es donde se preparan los archivos para confirmarlos en una nueva inserción.

Con este comando agregamos el archivo al área de preparación 
```js
git add file-name
```

Con *git commit* agregamos los archivos a una nueva versión.
```js
git commit -m "message" -m "description message"
```

Con **git add .** agregamos todos los archivos al staging area

Saca el archivo del staging area
```js
git rm --cached filename
```


## Arhivo `.gitignore`

Con este archivo, git verifica que archivos no se deben incluir en las confirmaciones (commits). Para que funcione, debemos crearlo y colocarle las extensiones de los archivos o el nombre del archivo. Por ejemplo 

```js
*.psd
contacto.html
```
Esta es una forma de excluir archivos


## Revisando el historial de Commits

- **git log** Muestra todos los commits que hemos realizado
Para salir de esa navegación presionamos la tecla <kbd>q</kbd>

- **git log --stat** Muestra las estadísticas del commit, cuántos archivos fueron insertados, y cuántas líneas de código han sido modificadas

- **git log --oneline** Muestra todo el historial de los commits en una sola línea

- **git log --graph** Muestra los commits con una gráfica. Es muy útil cuándo trabajamos con ramas

- **git log --oneline --graph --all** Muestra el listado de commits en una sóla línea con la gráfica de ramificaciones

- **git diff** Muestra la diferencia entre los archivos actuales y el último commit

- **git diff HEAD** Compara con el HEAD (El último commit)

- **git diff <commit-SHA1>** Compara los archivos actuales con el commit que especifiquemos. Se debe colocar el SHA1, que es el identificador del commit

- **git diff <commit-SHA1> <file>** Compara el archivo con el commit que especifiquemos. Se debe colocar el SHA1, que es el identificador del commit

- **git checkout <commit-SHA1>** Muestra la versión de tu proyecto en ese commit. En otras palabras regresamos en el tiempo.


## Ramas (Branchs)

Una rama es una copia idéntica de un proyecto, sin afectar la versión original (*Rama master*). Es muy útil para dividir el trabajo cuándo se está trabajando con varias personas. Por ejemplo, uno trabaja en el header, otro en el sidebar y otro en el footer. Y al final, se puede juntar todo esto en una sola rama.

- **git branch** Muestra todas las ramas del proyecto

- **git checkout master** Cambia a la rama `master`

- **git checkout -b <branch-name>** Crea una nueva rama y cambia a esa nueva rama

> **Recuerde que** Cuando creamos una nueva rama, tenemos una copia de todos los archivos que tengamos hasta el momento.

- **git merge <branch-name>** Mezcla el contenido de la rama en la cuál estamos posicionados, con la rama que especifiquemos.

Por ejemplo: Si tenemos una rama llamada `experimento` y queremos mezclarla con la rama `master`, debemos ubicarnos en la rama experimento y hacer el merge con master. `git merge master`

- **git branch -d <branch-name>** Elimina la rama que le especifiquemos


# Configurando Cuenta de Github

La clave SSH es la que nos va permitir conectar nuestra computadora con la página de Github
Para verificar claves SSH debemos ejecutar el siguiente comando
```js
ls -al ~/.ssh
```

Ver la referencia https://help.github.com/articles/checking-for-existing-ssh-keys/

Para generar una clave SSH, seguimos el siguiente enlace https://help.github.com/articles/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent/

Para copiar la llave SSH al portapapeles, podemos usar el comando
```js
clip < ~/.ssh/id_rsa.pub
```

- **echo "# Algún título" >> README.md** Crea un archivo `README.md` y le agrega texto

- **git init** Crea un repositorio

- **git add README.md** Agrega el archivo al staging area

- **git commit -m "first commit"** Agrega una nueva confirmación

- **git remote add origin <url>** Agrega un repositorio remoto, a la cual queremos enviar los archivos. *origin* será el con el cuál identificaremos la url.

- **git push -u origin master** Subimos los archivos al repositorio origin, desde nuestra rama master. *-u* Guarda los parámetros.

- **git pull origin master** Trae todos los cambios desde el repositorio remoto.