# TAREA 4: Virtual Hosts

> Documenta SÓLO las evidencias de los pasos que des en el apartado "ACCIONES A REALIZAR POR TU CUENTA".

### ACCIONES PREVIAS (GUIADO):

Repite un par de veces los pasos que has seguido para llevar a cabo la **TAREA 3** y **apunta** a tu servidor con desde dos subdominios:
- *cliente-tunombre.dominios.fpz1920.com*  --> a tu IP Elástica
- *servidor-tunombre.dominios.fpz1920.com* --> a tu IP Elástica

En tu **instancia EC2**, crea dos carpetas en `/var/www`: una que se llame `cliente` y otra que se llame `servidor`; y crea dentro de cada una de ellas un fichero `index.html` con este código para cada uno:

Para **`/var/www/cliente/index.html`**:

	<h1>Hola! soy el CLIENTE :D</h1>
	<p>¡Todo lo que pido me lo dan!</p>

Para **`/var/www/servidor/index.html`**:

	<h1>Hola! soy el SERVIDOR :'(</h1>
	<p>¡Siempre trabajando para que otros se lleven el mérito!</p>

### ACCIONES A REALIZAR POR TU CUENTA

**Documenta** y toma evidencias de los pasos necesarios para realizar lo siguiente:

- **Crea** los **Virtual Hosts** necesarios para que al escribir cada subdominio/URL en el navegador éste muestre el contenido que corresponda. 

- Al crear los **archivos de configuración** de los *site*  define adecuadamente las **directivas** que deben contener.

- **Activa** ambos site.

- Y comprueba que al acceder a través de un navegador cada URL muestra el contenido acorde a su nombre. *(obtén una captura de pantalla donde aparezcan los dos site cada uno con su contenido)*
