# Automatizar copias de seguridad

## CREAR LOS SCRIPT PARA CLIENTE Y SERVIDOR
Crea **ficheros de comandos**  **.sh** o **.php** (uno para **cliente** y otro para **servidor**) que te permitan crear los ficheros de backup [el script del **servidor** debe hacer copia de los **ficheros** y de la(s) **base(s) de datos**]. 

## AUTOMATIZAR
Usando **crontab** automatiza la ejecución de los script. 

Ten en cuenta que los datos del servidor se modifican (con la interacción de los usuarios de la aplicación web) con mayor frecuencia que las del cliente (que solo los modifica el equipo desarrollador), por tanto deberían hacerse más copias del servidor que del cliente.

## BORRADO AUTOMATIZADO DE BACKUPS
Al automatizar las copias de seguridad se crearán ficheros backup de forma periódica que ocuparán cada vez más espacio en disco. Teniendo en cuenta esto idea otro script para borrar los backups más antiguos de forma periódica y automatizalo con crontab.
