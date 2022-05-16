# Voluntariado

Alerta Sargazo, Tomar conciencia de los problemas que causa la contaminación ambiental "El Sargazo en las costas mexicanas"

Problematica: Limpieza del sargazo en las playas mexicanas

Solución: Este año la marina prevé 35 mil toneladas de sargazo en nuestras playas mexicanas.

Buscamos que nuestra página generé voluntariados para dar apoyo a nuestras playas en la limpieza del sargazo en coordinación pública a nivel municipal como estatal.
Involucrar a los cuídanos en brigadas de limpieza que tienen la voluntad de brindar sus servicios de manera gratuita y de mucho corazón.

La página genera un ticket después del registro voluntario, indicando que playa necesita su apoyo con un horario, grupo asignado y lugar de arranque. El ticket será escaneado por las
brigadas organizadoras a través de qr para validar la asistencia de dicha persona voluntaria, la página es escalable pues se busca que llegue hacer una app a nivel municipal como estatal, pretende coordinarse con cuerpos de la marina ya que estos son los que tienen mayor atención en dicha problemática como mayor experiencia en organización de personal y gestión de esta.

Tecnologías:

* FrontEnd: HTML y CSS
* BackEnd: PHP y MYSQL

Areas:
Diseño web, UX/UI, programación web.

Integrantes 5/5

* Carlos Eduardo garcía launchx05983@innovaccion.mx
* José Julio Rodríguez launchx00284@innovaccion.mx
* Jorge David Juárez launchx07043@innovaccion.mx
* Ericka Vite launchx07047@innovaccion.mx
* Osvaldo Hernández launchx05721@innovaccion.mx

Procedimiento:

Se utilizo VSCode para desarrollar el código de la página
Uso de los comandos Git y GitHub para versionar

Crear una carpeta
mk voluntariado

Crear el archivo necesario
npm init -y
ctl + c para salir

inicializando repositorio git
git init
git status
ls -la	//lista los archivos ocultos
git add .
git commit -m "Paso 1: Inicializando proyecto voluntariado, se creo el archivo package.json"
git status

se crean las carpetas
mk imagenes
mk css

se crean los siguientes archivos
index.html
css/estilo
estilos.css
imagenes/*jpg

git status
git add .
git commit -m "Paso 2: Se crean las carpetas y los archivos index.html, formulario.html, /css/estilos.css y /imagnes/*.jpg"

se crean los siguientes archivos con el comando touch
touch readme.md
touch .gitignore

para realizan la vinculacion con el repositicio remoto
si tienes cuenta PRO
git remote add origin git@github.com:davidjuarezr/voluntariado.github.io.git
o si es la gratis
git remote add origin https://github.com/davidjuarezr/voluntariado.github.io.git
git remote -v

Se agrega la dependencia para test (jest) con el comando >
    npm install --save-dev jest

Para escoger la version de jest para el git action
	npm install jest@26.0.0 -–save-dev

Se crea la carpeta node_modules, NO SE TIENE QUE VERSIONAR

git status
git add .
git commit -m "Paso 4: Se realizan la vinculacion con el repositicio remoto, se creo la carpeta node_modules y oackageg.json"
git push origin master

Se realizaron modificaciones el archivo estilos.css
git status
git add .
git commit -m "Paso 5: Se realizaron modificaciones el archivo estilos.css"
git push origin master

se actualiza el repositorio local con la informacion del repositorio remoto

git pull origin master

Paso 6: Se realizaron nuevamente modificacion al archivo estilos.css
Paso 7: Se realizaron nuevamente modificacion al archivo estilos.css

git status
git show HEAD
git log --oneline --graph


REGISTRO BASE DE DATO

Merge pull request #1 from OHKanchi/master

listo y funcionando

correccion
correccion

Se actualiza el archivo readme.md

git status
git add .
git commit -m "Paso 14: Se actualizo el archivo readme.md"
git push origin master
