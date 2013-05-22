<?php
header('Content-Type: text/plain; charset=UTF-8');
set_include_path(implode(PATH_SEPARATOR, array('/apps/lib/zf/library', get_include_path())));
include('Zend/Loader/Autoloader.php');
Zend_Loader_Autoloader::getInstance();
$l = new Zend_Log(new Zend_Log_Writer_Stream(dirname(__FILE__).'/temarios.log'));
$l->info(date('Y-m-d H:i:s') . ' | ' . $_SERVER['REMOTE_ADDR']);
?>
/******************************************************************************/
/**                               ZEND FRAMEWORK                             **/
/******************************************************************************/


OBJETIVO:

El presente curso le permitirá al participante conocer en extensión y profundidad
Zend Framework, podrá ser capaz de desarrollar una aplicación web cumpliento con
las medidas de seguridad, performance, mantenibilidad necesarias para las
exigencias de una aplicación real en producción.

Zend Framework es uno de los principales frameworks del lenguaje de scripting más
usado en el mundo, PHP. En el curso se mostrará como resolver los problemas más
comunes propios del desarrollo de aplicaciones web, usando las múltuples ventajas
que ofrece este framework.

REQUISITOS:

- Es indispensable que el participante conozca al menos a nivel básico:
    - PHP
    - Programación Orientada a Objetos
    - HTML

- Es recomendable que el participante conozca al menos a nivel básico:
    - SQL
    - CSS
    - JavaScript

ENTREGABLES:

    - Diapositivas del curso
    - Acceso al repositorio privado de GitHub.com (usado en el curso)
    - Certificado con valor curricular
    - Soporte Gratuito por 30 días, vía email a toda consulta del participante.
    - Coffee Break

TEMARIO:

    - Introducción
        - Que es Zend Framework
        - Conceptos básicos
        - Bootstrap
        - application.ini
        - Separación de ambientes
        - Layout
        - Módulos
        - Bonus: Versionamiento con GIT

    - Persistencia de Datos
        - Clases involucradas
            - Zend_Db
            - Zend_Db_Table
            - Zend_Db_Table_Row
            - Zend_Db_Table_Rowset
            - Zend_Db_Table_Select
            - Zend_Db_Adapter_*
            - Zend_Db_Statement_*
            - Zend_Db_Expr
            - Zend_Db_Profiler
            - Zend_Db_Select
            - 
        - Casos
            - Uso básico
            - Select
            - Hidratación (fetch*)
            - Transacciones
            - Múltiples conexiones
            - Ejecución de Stored Procedures
            - Parámetros en Queries
            - SQL Injection
            - Profiler

    - Formularios
        - Clases involucradas
            - Zend_Form
            - Zend_Form_Element_*
        - Casos
            - Uso básico
            - Protección contra CSRF
            - File Upload
            - Decoraciones
            - Cambios en tiempo de Ejecución

    - Enrutamiento
        - Clases Involucradas
            - Zend_Controller_Router_Route
            - Zend_Controller_Router_Route_Static
            - Zend_Controller_Router_Route_Regex
        - Casos
            - Enrutamiento Estático
            - Enrutamiento Dinámico (parámetros)
            - Enritamiento Regex
            - Enrutamiento Traducido (depende de Zend_Translate)

    - Validaciones
        - Clases Involucradas
            - Zend_Validate_*
        - Casos
            - Uso básico
            - Validaciones Personalizadas
            - Validaciones en Formularios

    - Filtros
        - Clases Involucradas
            - Zend_Filter_*
        - Casos
            - Uso básico
            - Filtros Personalizados
            - Filtros en Formularios

    - Logs
        - Clases Involucradas
            - Zend_Log
            - Zend_Log_Writer_*
            - Zend_Log_Formatter_*
            - Zend_Log_Filter_*
        - Casos
            - Log en archivos Regular
            - Log en Firebug (debugging)
            - Log en Db
            - Formato
            - Filtros
            - Rotación del log

    - Configs
        - Clases Involucradas
            - Zend_Config
            - Zend_Config_{ini|json|yaml|xml}
        - Casos
            - Lectura de config
            - Diferentes formatos
            - Merge
            - Configuración no versionada

    - Autenticación
        - Clases Involucradas
            - Zend_Auth
            - Zend_Auth_Adapter_*
            - Zend_Auth_Result
            - Zend_Auth_Storage
        - Casos
            - Autenticación en DB
            - Autenticación usando Salt
            - Autenticación como validador

    - Autorización
        - Clases Involucradas
            - Zend_Acl
        - Casos
            - Asignación de permisos
            - Acl Helper (App_Acl::puedo)

    - Sesión
        - Clases Involucradas
            - Zend_Session_Namespace
            - Zend_Session_SaveHandler_DbTable
        - Casos
            - Uso básico
            - Expiraciones (hops, secs)
            - Session en Db (load balancer)

    - Sindicación de Contenido
        - Clases Involucradas
            - Zend_Feed
        - Casos
            - Leer un feed
            - Escribir un feed
            - Encontrar feeds

    - Internacionalización
        - Clases Involucradas
            - Zend_Locale
            - Zend_Locale_Format
            - Zend_Currency
            - Zend_Date
            - Zend_Measure_*
            - Zend_Translate
        - Casos
            - Detección de Locale
            - Configurando Locale
            - De Territorio a Locale
            - Formateando números con Locale
            - Nombres de divisas
            - Aritmética de divisas
            - Intercambio de divisas
            - Formatos de Fechas (get)
            - Estableciendo Fechas (set)
            - Incremento/Decremento con Fechas
            - Otras operaciones con Fechas
            - Unidades de medida
            - Traducciones

    - Lucene
        - Clases Involucradas
            - Zend_Search_Lucene
            - Zend_Search_Lucene_Document
            - Zend_Search_Lucene_Document_{Html|Docx|Pptx|Xlsx}
            - Zend_Search_Lucene_Field
        - Casos
            - Busquedas básicas
            - Busquedas en Docs

    - Cache
        - Clases Involucradas
            - Zend_Cache
        - Casos
            - Uso básico
            - Cache Id Variable
            - Wrapper
            - Parametrización de expiracion (depende Zend_Config)

    - Mailing
        - Clases Involucradas
            - Zend_Mail
            - Zend_Mail_Transport_Smtp
            - Zend_Mime_Part
        - Casos
            - Uso básico
            - to/cc/bcc
            - Html
            - Attachments
            - Inline Attachments
            - Charset

    - Paginado
        - Clases Involucradas
            - Zend_Paginator
        - Casos
            - Uso básico

    - Web Services
        - Clases Involucradas
            - Zend_Json_Server
            - Zend_Http_Client
            - Zend_Soap_Server
            - Zend_Soap_Client
        - Casos
            - Exponer servicio Usando Zend_Json_Server
            - Consumir servicio Usando Zend_Http_Client
            - Exponer servicio Usando Zend_Soap_Server
            - Consumir servicio Usando Zend_Soap_Client

    - Gdata
        - Clases Involucradas
            - Zend_Gdata_Books
            - Zend_Gdata_Calendar
            - Zend_Gdata_Docs
            - Zend_Gdata_ClientLogin
        - Casos
            - Búsquedas en Google Books
            - Operaciones con Google Calendar
            - Operaciones con Google Docs

    - Generación de PDFs
        - Clases Involucradas
            - Zend_Pdf
            - Librería DomPdf
        - Casos
            - Uso Básico
            - Uso de templates
            - Html -> Pdf

    - Helpers en la Vista
        - Clases Involucradas
            - Zend_View_Helper_*
        - Casos
            - Uso básico
            - Registro del View Helper Path
            - View Helper Personalizados

    - Helpers en el Controlador
        - Clases Involucradas
            - Zend_Controller_Action_Helper_FlashMessenger
        - Casos
            - Uso básico
            - Action Helpers personalizados, llamado explícito
            - Action Helpers personalizados, eventos
    - Plugins
        - Clases Involucradas
            - Zend_Controller_Plugin_Abstract
        - Casos
            - Registro de plugins en bootstrap
            - Ejecución




/******************************************************************************/
/**                                  SYMFONY                                 **/
/******************************************************************************/


OBJETIVO:

El presente curso le permitirá al participante conocer en extensión y profundidad
Symfony Framework, podrá ser capaz de desarrollar una aplicación web cumpliento
con las medidas de seguridad, performance, mantenibilidad necesarias para las
exigencias de una aplicación real en producción.

Symfony Framework es uno de los principales frameworks del lenguaje de scripting
más usado en el mundo, PHP. En el curso se mostrará como resolver los problemas
más comunes propios del desarrollo de aplicaciones web, usando las múltuples
ventajas que ofrece este framework.

REQUISITOS:

- Es indispensable que el participante conozca al menos a nivel básico:
    - PHP
    - Programación Orientada a Objetos
    - HTML

- Es recomendable que el participante conozca al menos a nivel básico:
    - SQL
    - CSS
    - JavaScript

ENTREGABLES:

    - Diapositivas del curso
    - Acceso al repositorio privado de GitHub.com (usado en el curso)
    - Certificado con valor curricular
    - Soporte Gratuito por 30 días, vía email a toda consulta del participante.
    - Coffee Break


TEMARIO:

    - Introducción
        - Que es Symfony Framework
        - Conceptos básicos
        - Separación de ambientes
        - Bonus: Versionamiento con GIT

    - Persistencia de Datos
            - Uso básico
            - Doctrine
            - Select
            - Hidratación 
            - Transacciones
            - Múltiples conexiones
            - Ejecución de Stored Procedures
            - Parámetros en Queries
            - SQL Injection
            - Profiler

    - Formularios
            - Uso básico
            - Protección contra CSRF
            - File Upload
            - Decoraciones
            - Cambios en tiempo de Ejecución

    - Enrutamiento
            - Enrutamiento Estático
            - Enrutamiento Dinámico (parámetros)
            - Enritamiento Regex

    - Validaciones
            - Uso básico
            - Validaciones Personalizadas
            - Validaciones en Formularios

    - Filtros
            - Uso básico
            - Filtros Personalizados
            - Filtros en Formularios

    - Logs
            - Log en archivos Regular
            - Log en Db
            - Formato
            - Rotación del log

    - Configs
            - Lectura de config
            - Diferentes formatos
            - Merge
            - Configuración no versionada

    - Sesión, Autenticación y Autorización
            - Autenticación en DB
            - Autenticación usando Salt
            - Asignación de permisos
            - Uso de sesiones

    - Sindicación de Contenido
            - Leer un feed
            - Escribir un feed

    - Internacionalización
            - Formatos de Fechas (get)
            - Estableciendo Fechas (set)
            - Incremento/Decremento con Fechas
            - Otras operaciones con Fechas
            - Traducciones

    - Cache
            - Uso básico
            - Cache Id Variable

    - Mailing
            - Uso básico
            - to/cc/bcc
            - Html
            - Attachments

    - Web Services
            - Exponer servicio RESTful
            - Consumir servicio RESTful


/******************************************************************************/
/**                          TEMARIO Ruby On Rails                           **/
/******************************************************************************/

OBJETIVO:

El presente curso le permitirá al participante conocer en extensión y profundidad
Symfony Framework, podrá ser capaz de desarrollar una aplicación web cumpliento
con las medidas de seguridad, performance, mantenibilidad necesarias para las
exigencias de una aplicación real en producción.

Ruby on Rails, también conocido como RoR o Rails, es un framework de aplicaciones
web de código abierto escrito en el lenguaje de programación Ruby, siguiendo el
paradigma de la arquitectura Modelo Vista Controlador (MVC). Trata de combinar la
simplicidad con la posibilidad de desarrollar aplicaciones del mundo real escribiendo
menos código que con otros frameworks y con un mínimo de configuración. El lenguaje
de programación Ruby permite la metaprogramación, de la cual Rails hace uso, lo
que resulta en una sintaxis que muchos de sus usuarios encuentran muy legible.
Rails se distribuye a través de RubyGems, que es el formato oficial de paquete y
canal de distribución de bibliotecas y aplicaciones Ruby.


REQUISITOS:

- Es indispensable que el participante conozca al menos a nivel básico:
    - PHP
    - Programación Orientada a Objetos
    - HTML

- Es recomendable que el participante conozca al menos a nivel básico:
    - SQL
    - CSS
    - JavaScript

ENTREGABLES:

    - Diapositivas del curso
    - Acceso al repositorio privado de GitHub.com (usado en el curso)
    - Certificado con valor curricular
    - Soporte Gratuito por 30 días, vía email a toda consulta del participante.
    - Coffee Break

TEMARIO

    - Introducción
        - Que es Ruby
        - Que es Ruby on Rails
        - Conceptos básicos
        - Separación de ambientes
        - Bonus: Versionamiento con GIT

    - Persistencia de Datos
            - Uso básico
            - ORM
            - Transacciones
            - Parámetros en Queries
            - SQL Injection
            - Profiler

    - Formularios
            - Uso básico
            - File Upload
            - Decoraciones

    - Enrutamiento
            - Enrutamiento Estático
            - Enrutamiento Dinámico (parámetros)
            - Enritamiento Regex

    - Validaciones
            - Uso básico
            - Validaciones Personalizadas
            - Validaciones en Formularios

    - Filtros
            - Uso básico
            - Filtros Personalizados
            - Filtros en Formularios

    - Logs
            - Log en archivos Regular
            - Log en Db
            - Rotación del log

    - Configs
            - Lectura de config
            - Diferentes formatos
            - Merge
            - Configuración no versionada

    - Sesión, Autenticación y Autorización
            - Autenticación en DB
            - Asignación de permisos
            - Uso de sesiones

    - Sindicación de Contenido
            - Leer un feed
            - Escribir un feed

    - Internacionalización
            - Formatos de Fechas (get)
            - Estableciendo Fechas (set)
            - Incremento/Decremento con Fechas
            - Otras operaciones con Fechas
            - Traducciones

    - Cache
            - Uso básico
            - Cache Id Variable

    - Mailing
            - Uso básico
            - to/cc/bcc
            - Html
            - Attachments

    - Web Services
            - Exponer servicio RESTful
            - Consumir servicio RESTful

/******************************************************************************/
/**          Arquitectura de Aplicaciones Web Seguras y Escalables           **/
/******************************************************************************/


OBJETIVO:

Muchas veces cuando creamos una aplicación web no resulta trivial conocer cuales
serán los problemas que podrían venir después de poner la aplicación en producción
y someterla al tráfico y volúmen de data real. En estos casos es donde comienzan
a surgir problemas que no tuvimos en cuenta en la etapa de diseño, y finalmente
puede resultar más costoso corregirlos.

El presente curso le permitirá al participante conocer en profundidad diversas
técnicas para solucionar problemas asociados a las aplicaciones web cuando son
sometidas a alta concurrencia y/o a un escenario de alta disponibilidad.

El participante podrá ser capaz de diseñar la arquitectura de una aplicación web
cumpliendo con las medidas de seguridad, performance, mantenibilidad necesarias
para las exigencias de una aplicación real en producción.


REQUISITOS:

- Es indispensable que el participante conozca:
    - Algún lenguaje de desarrollo web como PHP, Ruby, Python, Java, C#, etc.
    - Programación Orientada a Objetos
    - SQL
    - HTML

- Es recomendable que el participante conozca:
    - Algún framework del lenguaje de desarrollo web que domina.
    - GIT

ENTREGABLES:

    - Diapositivas del curso
    - Acceso al repositorio privado de GitHub.com (usado en el curso)
    - Certificado con valor curricular
    - Soporte Gratuito por 30 días, vía email a toda consulta del participante.
    - Coffee Break

TEMARIO

    - Introducción
        - Estudio de casos, problemas.
        - Alcance del curso: Performance, Escalabilidad, Seguridad, Mantenibilidad.
        - Metodología del curso: Repo, VPS, App Online, Demos.

    - Performance
        - Definición
        - Problemas comúnes
        - Herramientas de diagnóstico
        - Base de datos: Índices, Desnormalización
        - Explicación y demo de las Técnicas de Steve Souders
            - Hacer menos Request HTTP
            - Usar un CDN
            - Agregar cabeceras de expiración
            - Gzip scripts y estilos
            - Poner estilos al inicio
            - Poner scripts al final
            - Evitar expresiones CSS
            - Poner CSS y JS en archivos externos
            - Reducir DNS Lookups
            - Minify JS
            - Evitar Redirects
            - Quitar scripts duplicados
            - Configurar ETags
            - Hacer Ajax Cacheable
        - Caché en el lado del servidor
        - Backeds de Cache

    - Escalabilidad
        - Definición
        - Problemas comunes
        - Balanceo de Carga
        - Escalabilidad
        - Principio ACID (base de datos)
            - Atomicity
            - Consistency
            - Isolation
            - Durability
        - Replicación de data
        - Session Backend

    - Seguridad
        - Definición
        - Problemas comunes
        - Niveles (OS, Network, Server, App)
        - Top OWASP
            - A1 Injection
            - A2 Cross Site Scripting
            - A3 Broken Authentication and Session Management
            - A4 Insecure Direct Object References
            - A5 Cross-Site Request Forgery (CSRF)
            - A6 Security Misconfiguration
            - A7 Insecure Cryptographic Storage
            - A8 Failure to Restrict URL Access
            - A9 Insufficient Transport Layer Protection
            - A10 Un-validated Redirects and Forwards
        
    - Mantenibilidad
        - Definición
        - Problemas comunes
        - Separación de ambientes
        - Definición: Automatización de pruebas
            - Unitarias
            - Funcionales
        - Definición: Integración Contínua
        - Herramientas de QA para PHP (Sebastian Bergman)



/******************************************************************************/
/* Aseguramiento de la Calidad del Software con Pruebas Automatizadas en PHP  */
/******************************************************************************/


OBJETIVO:

El presente curso le permitirá al participante conocer diferentes técnicas para 
el aseguramiento de la calidad del software. Está dirigidos a analistas de calidad,
analistas funcionales, ingenieros de software, desarroladores de software en general
que estén interesados en: mejorar la calidad de los productos de software de los
que son responsables, mejorar los procesos de desarrollo y aseguramiento de la calidad
del seoftware de sus organizaciones.


REQUISITOS:

- Es indispensable que el participante conozca:
    - PHP Básico
    - Programación Orientada a Objetos
    - SQL
    - HTML

- Es recomendable que el participante conozca:
    - GIT
    - CSS

ENTREGABLES:

    - Diapositivas del curso
    - Acceso al repositorio privado de GitHub.com (usado en el curso)
    - Certificado con valor curricular
    - Soporte Gratuito por 30 días, vía email a toda consulta del participante.
    - Coffee Break

TEMARIO

    - Introducción
        - Definiciones
        - Estudio de casos, problemas.
        - Alcance del curso
        - Metodología del curso
    - Pruebas funcionales no automatizadas
        - Definición
        - Casos
    - Pruebas funcionales automatizadas
        - Herramientas
            - Selenium (Extension)
            - Selenium IDE
        - Construcción de casos de prueba con Selenium
    - Pruebas Unitarias
        - Herramientas
            - PHPUnit
            - Zend Framework
        - Construcción de casos de prueba con PHPUnit
        - Construcción de casos de prueba con PHPUnit y ZF




