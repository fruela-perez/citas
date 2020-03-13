# citas

**Yet another fortune-like programilla** 

Imprime una cita *random* extraída de un archivo de texto al ejecutar el script; por ejemplo, en el .profile al abrir una terminal.

Funciona en Linux y OS X (a lo mejor incluso en Windows, pero no me consta xD).

## Requerimientos

`php`, `php-cli`

## Instalación

+ Instalar requerimientos, si es necesario:<br/><br/>
  Linux: `sudo apt-get update && sudo apt-get -y php php-cli`<br/>
  OS X: `brew install php`<br>
  
+ Clonar el repositorio:<br/><br/>
  `cd /ruta/`<br/>
  `git clone https://github.com/fruela-perez/citas.git` 

+ Añadir en tu `~/.profile` (Linux) o `~/.bash_profile` (OS X) la línea:<br/><br/>
  `php /ruta/citas/citas.php /ruta_al_archivo_de_citas/archivo_citas.txt` <br/><br/>
  Ya haré un instalador *comme il faut*.

+ El archivo de citas, debe tener una cita por línea y el formato:<br/><br/>
  `<autor>#<cita>`<br><br>
  Se incluye el archivo `citas.txt` como ejemplo.
