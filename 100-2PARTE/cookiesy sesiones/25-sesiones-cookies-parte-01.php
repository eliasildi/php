<?php 

// SESIONES Y COOKIES

// php es un lenguaje de programación que utiliza el protocolo HTTP
// que nos lleva a una serie de limitaciones que PHP debe superar para
// poder crear aplicaciones dinámicas e interactivas.

// Una de las características de HTTP es que es un protocolo "sin estado".

// Un protocolo sin estado es aquel que no almacena ninguna información sobre
// una petición o una respuesta. Es decir, se pierden los valores de las
// variables y los objetos que mantienen la conexión con las bases de datos.

// En cada petición todo debe comenzar desde cero.

// Para un aplicación web que deba actualizar una base de datos, necesitará
// mantener el estado de la sesión. Algo que permita vincular una petición
// con otra que se produzca en algún momento posterior.

// SESION

// Ya sabemos que HTTP no nos ayuda a mantener el estado de una sesión,
// pero que es una sesión ?

// Una sesión es una secuencia de peticiones a un servidor web realizadas
// por un mismo cliente desde su navegador dentro del ámbito de una
// aplicación web.

// ESTADO DE UNA SESIÓN

// El estado de una sesión es el conjunto de datos que permiten mantener un
// proceso relacionado de una secuencia de peticiones dentro de una aplicación.
// Un ejemplo típico es una aplicación que utilice una cesta de compra que se
// va cargando a lo largo de varias peticiones. Al llegar al momento de hacer
// efectiva la compra, el conjunto de datos que se almacenan en el estado
// de la sesión está disponible para la página que requiere la información
// para el pago y el comprador no tiene la necesidad de introducir los
// productos elegidos

// Al ser HTTP un protocolo sin estado, cada petición no sabe absolutamente nada
// de las otras peticiones anteriores. Para HTTP todas las peticiones son
// independientes.

// Veamos ahora como superar esa limitación de HTTP

// Método 1... Dirección IP

// Los servidores web pueden acceder a la dirección IP del cliente que requiere
// una página. PHP puede acceder a esta información mediante la superglobal
// $_SERVER. Desgraciadamente este sistema no es fiable, porque a veces los
// equipos de los clientes están enmascarados por un servidor proxy.

// Método 2...Ocultar datos dentro de los formularios

// Los elementos input de tipo HIDDEN (ocultos) dentro de los formularios se
// pueden utilizar para almacenar datos que siempre estarán disponibles durante
// la navegación del usuario dentro de la aplicación. Los datos necesarios para
// mantener uan sesión (identificación del usuario, los productos que incluye
// en la cesta de la compra) se pueden incluir en uno o más campos ocultos
// de los formularios, de esta manera cada vez que se procesa una respuesta en
// el servidor web se tiene acceso a toda esa información para lo que sea
// necesario.

// Método 3...Almacenar la información en el servidor

// Tiene la ventaja de que un usuario puede recuperar una sesión  en cualquier
// momento. Y la desventaja de que almacena recursos en el servidor, lo que lo
// convierte en una opción válida para pocos usuarios.

// Método 4...Almacenar la información en el cliente (cookies)

// Es similar a la anterior con la ventaja que no consume recursos en el
// servidor. Actualmente es la opción más empleada en las aplicaciones web
// La información almacenada en el equipo cliente se denomina cookie.

// Sin embargo, como la información está almacenada fuera del control del
// servidor, nunca se puede estar seguro de si la cookie esta disponible
// cuando sea necesario. El usuario puede cambiar de equipo, borrar la cookie
// y perder los datos de esa sesión.

// Cómo usar las COOKIES en PHP

// Los archivos cookies representan la opción más empleada para mantener una
// sesión es el almacenamiento de la información en el equipo cliente en
// pequeños archivos de textos que se denominan COOKIES. Los archivos cookies
// son archivos de texto en formato ASCII en donde se registran los datos
// siguiendo el esquema clave = valor. El navagador y el sistema operativo del
// cliente son los que deciden donde se almacenan los archivos cookies e incluso
// se pueden configurar para rechazar la aceptación de cookies.

// Al procesar una página PHP y generar la salida HTML debemos enviar los datos
// del archivo cookie antes que los datos del cuerpo del mensaje.

// Por lo general se opta por el uso de cookie en el lado del cliente cuando
// no es posible o conveniente guardar esa información en el servidor.

// existen limitaciones de la cantidad de información de tipo de cookie que se
// puede almacenar por dominio (hasta 20) a partir de ahí se van eliminado los
// valores más antiguos.



?>