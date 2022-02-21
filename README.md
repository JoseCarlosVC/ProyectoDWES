# ProyectoDWES

################# FRASE QUE DEFINE NUESTRA APLICACION WEB #####################

### --- Un gestor de inventario inmarcesible. ---

Nuestro MINI proyecto, va a tratar sobre un gestor de inventario, la cual va a tener:

    - Una interfaz intuitiva para la usabilidad del usuario.
    - Garantiza la trazabilidad de cada producto.(unidades en stock garantizadas).
    - Alertas de stock.
    - Informacion almacenada en un servidor seguro.
    - Los administradores tienen su parte reservada.


# Ventajas y desventajas de aplicaciones parecidas.

## ------HOLDED-----

#### Ventajas:

1- Sincronizados con las cuentas bancarias.
2- Interfaz grafica muy agradable para los usuarios.

#### Desvantajas:

1- Login mal hecho(no utilizan expresiones regulares, el telefono permite '000000000').
2- Precios no asequibles, 10€ mensauales 120€ anuales, la opcion basica
3- Fallos en la aplicacion, detectados por los usuarios(app congelada, carga de datos y saltan errores, etc...)


## ----ODOO INVENTORY----

#### Ventajas

1- Precios bajos y su version basica es gratuita
2- Es muy personalizable
3- Codigo abierto
4- Su seguridad es buena

#### Desvantajas

1- No compatibles con versiones anteriores
2- Hasta hace poco no resolvian errores de su sitio web
3- La aplicacion no esta bien documentada


# ---Diagrama de Gantt---

https://drive.google.com/file/d/1IZ4127TiplD7GSOuynLcmhTtWNBGetB2/view?usp=sharing

# ---Ciclo de software---

Vamos a utilizar la filosofía Kanban, con la que repartiremos las tareas mediante la aplicación Notion, ya que de esta manera tendremos la ventaja de no trabajar de manera innecesaria, y reducimos los tiempos de produccion. Y utilizaremos Scrum, para tener reuniones cada 2 días, de forma que asi dimensionaremos el proyecto de mejor forma, de esta manera, el equipo de esta manera, aprenderá mucho mas rapido, ya que interactuamos entre los miembros del mismo.


# ---Arquitectura---

Vamos a utilizar la arquitectura modelo-vista-controlador, ya que no vamos a utilizar motores de plantillas y nos permite dividir la apliación de una forma mas logica, ya que facilita el mantenimiento en caso de errores, ofrece maneras mas sencillas de probar el funcionamiento y sobre todo permite la escalabilidad del proyecto.

