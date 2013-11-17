<?php 

// SESIONES Y COOKIES

// php es un lenguaje de programaci�n que utiliza el protocolo HTTP
// que nos lleva a una serie de limitaciones que PHP debe superar para
// poder crear aplicaciones din�micas e interactivas.

// Una de las caracter�sticas de HTTP es que es un protocolo "sin estado".

// Un protocolo sin estado es aquel que no almacena ninguna informaci�n sobre
// una petici�n o una respuesta. Es decir, se pierden los valores de las
// variables y los objetos que mantienen la conexi�n con las bases de datos.

// En cada petici�n todo debe comenzar desde cero.

// Para un aplicaci�n web que deba actualizar una base de datos, necesitar�
// mantener el estado de la sesi�n. Algo que permita vincular una petici�n
// con otra que se produzca en alg�n momento posterior.

// SESION

// Ya sabemos que HTTP no nos ayuda a mantener el estado de una sesi�n,
// pero que es una sesi�n ?

// Una sesi�n es una secuencia de peticiones a un servidor web realizadas
// por un mismo cliente desde su navegador dentro del �mbito de una
// aplicaci�n web.

// ESTADO DE UNA SESI�N

// El estado de una sesi�n es el conjunto de datos que permiten mantener un
// proceso relacionado de una secuencia de peticiones dentro de una aplicaci�n.
// Un ejemplo t�pico es una aplicaci�n que utilice una cesta de compra que se
// va cargando a lo largo de varias peticiones. Al llegar al momento de hacer
// efectiva la compra, el conjunto de datos que se almacenan en el estado
// de la sesi�n est� disponible para la p�gina que requiere la informaci�n
// para el pago y el comprador no tiene la necesidad de introducir los
// productos elegidos

// Al ser HTTP un protocolo sin estado, cada petici�n no sabe absolutamente nada
// de las otras peticiones anteriores. Para HTTP todas las peticiones son
// independientes.

// Veamos ahora como superar esa limitaci�n de HTTP

// M�todo 1... Direcci�n IP

// Los servidores web pueden acceder a la direcci�n IP del cliente que requiere
// una p�gina. PHP puede acceder a esta informaci�n mediante la superglobal
// $_SERVER. Desgraciadamente este sistema no es fiable, porque a veces los
// equipos de los clientes est�n enmascarados por un servidor proxy.

// M�todo 2...Ocultar datos dentro de los formularios

// Los elementos input de tipo HIDDEN (ocultos) dentro de los formularios se
// pueden utilizar para almacenar datos que siempre estar�n disponibles durante
// la navegaci�n del usuario dentro de la aplicaci�n. Los datos necesarios para
// mantener uan sesi�n (identificaci�n del usuario, los productos que incluye
// en la cesta de la compra) se pueden incluir en uno o m�s campos ocultos
// de los formularios, de esta manera cada vez que se procesa una respuesta en
// el servidor web se tiene acceso a toda esa informaci�n para lo que sea
// necesario.

// M�todo 3...Almacenar la informaci�n en el servidor

// Tiene la ventaja de que un usuario puede recuperar una sesi�n  en cualquier
// momento. Y la desventaja de que almacena recursos en el servidor, lo que lo
// convierte en una opci�n v�lida para pocos usuarios.

// M�todo 4...Almacenar la informaci�n en el cliente (cookies)

// Es similar a la anterior con la ventaja que no consume recursos en el
// servidor. Actualmente es la opci�n m�s empleada en las aplicaciones web
// La informaci�n almacenada en el equipo cliente se denomina cookie.

// Sin embargo, como la informaci�n est� almacenada fuera del control del
// servidor, nunca se puede estar seguro de si la cookie esta disponible
// cuando sea necesario. El usuario puede cambiar de equipo, borrar la cookie
// y perder los datos de esa sesi�n.

// C�mo usar las COOKIES en PHP

// Los archivos cookies representan la opci�n m�s empleada para mantener una
// sesi�n es el almacenamiento de la informaci�n en el equipo cliente en
// peque�os archivos de textos que se denominan COOKIES. Los archivos cookies
// son archivos de texto en formato ASCII en donde se registran los datos
// siguiendo el esquema clave = valor. El navagador y el sistema operativo del
// cliente son los que deciden donde se almacenan los archivos cookies e incluso
// se pueden configurar para rechazar la aceptaci�n de cookies.

// Al procesar una p�gina PHP y generar la salida HTML debemos enviar los datos
// del archivo cookie antes que los datos del cuerpo del mensaje.

// Por lo general se opta por el uso de cookie en el lado del cliente cuando
// no es posible o conveniente guardar esa informaci�n en el servidor.

// existen limitaciones de la cantidad de informaci�n de tipo de cookie que se
// puede almacenar por dominio (hasta 20) a partir de ah� se van eliminado los
// valores m�s antiguos.



?>