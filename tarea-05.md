# TAREA 5: Servidor FTP

Instala y configura servidor de FTP en tu **instancia EC2** por el **puerto 21** para poder subir archivos al servidor mediante un cliente FTP como WinSCP o FileZilla.

Crea tres usuarios: *cliente*, *servidor* y *administrador*.
- El usuario **cliente** deberá poder ver y escribir sólo los archivos y subdirectorios que se encuentran en **`/var/www/cliente/`**
- El usuario **servidor** deberá poder ver y escribir sólo los archivos y subdirectorios que se encuentran en **`/var/www/servidor/`**
- El usuario **administrador** deberá ser capaz de ver y escribir archivos y subdirectorios que se encuentran en **`/var/www/`**

De esta manera el servidor estará listo para subir archivos vía FTP.

Para finalizar comprueba que puedas subir archivos al servidor desde tu cliente FTP (WinSCP, FileZilla... o el que más te guste).

**Infórmate** para saber cómo realizar esta tarea. **Documenta** todos **los pasos** que hayas dado para hacer funcionar el servidor FTP tal como se pide en esta tarea.  
