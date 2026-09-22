# Elige_tu_Satck

## 1. Cliente vs. Servidor

El cliente es lo que se ejecuta en el navegador del usuario, como HTML, CSS y JavaScript. En cambio, el servidor recibe las peticiones, ejecuta PHP, consulta la base de datos si es necesario y devuelve el resultado al navegador.

La regla de "nunca confiar en los datos del cliente" se debe a que el usuario puede modificar los datos que envía. Por eso, aunque hagamos validaciones con JavaScript, las comprobaciones importantes también deben hacerse en el servidor.



## 2. Web Estática vs. Dinámica

Una web estática muestra prácticamente el mismo contenido a todos los usuarios, mientras que una web dinámica puede generar contenido diferente dependiendo del usuario o de los datos almacenados.

Para una tienda online necesitamos una web dinámica, ya que tenemos que gestionar productos, usuarios, carritos de compra, pedidos y datos que pueden cambiar constantemente.



## 3. La Infraestructura

Un servidor web como Apache o Nginx se encarga de recibir las peticiones de los usuarios y devolver los recursos necesarios. Si la petición necesita ejecutar PHP, puede enviarla a PHP-FPM.

PHP-FPM es mejor que el antiguo CGI porque CGI creaba un proceso nuevo para cada petición. PHP-FPM utiliza un pool de procesos que ya están preparados, consiguiendo un mejor rendimiento y un menor consumo de recursos.

Por otro lado, Laravel se encarga de organizar gran parte de la aplicación, como las peticiones, la lógica, el acceso a los datos o la seguridad.



## 4. PHP y Laravel 12

Usaremos PHP porque es un lenguaje pensado para el desarrollo web del lado del servidor y nos permite crear páginas dinámicas y trabajar con bases de datos.

También utilizaremos Laravel 12, ya que nos facilita bastante el desarrollo. Utiliza el patrón MVC, que permite tener el código mejor organizado, incluye medidas de seguridad frente a ataques comunes y tiene una estructura de directorios sencilla.

Esto hace que el proyecto sea más fácil de desarrollar y mantener.
