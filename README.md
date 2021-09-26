<p align="center"><img src="public/img/logo.png" width="400"></p>

# HANGAR REBELDE

## La app ecommerce para la tienda de comics

# Vistas

![home](https://user-images.githubusercontent.com/82060703/134808302-c93d090b-8efc-4448-b9ef-723e2c12f836.png)
![show](https://user-images.githubusercontent.com/82060703/134808389-f85eb1a1-a9bd-4539-abef-78d29f4d17dc.png)
![admin](https://user-images.githubusercontent.com/82060703/134808394-585e301c-d9f8-4edf-acf1-aca70198cbb7.png)

# Contexto del proyecto
Aplicación creada para atender a la creciente demanda de vendas de un tienda ubicada en Oviedo - España, que vió sus vendas aumentarem significativamete durante la pandemia. 
Surgió de este modo la necesidad de crear una aplicación sólida y escalable, inicialmente para abarcar su funcionalidad de tiende online y en el futuro complemetar los demas  servicios online que Hangar Rebelde ofrece.

# Características generales

[Usuarios no registrados.](#usuariosnoregistrados)  
[Usuarios registrados.](#usuariosregistrados)  
[Administrador.](#adminstrador)

### Usuarios no registrados

-   En la aplicación los usuarios no registrados pueden ver los productos de Hangar Rebelde y sus informaciones detalladas.
-   Navegar por sus categorias.
-   Buscar productos por título, autor, editorial y ISBN.

### Usuarios registrados

-   Los usuarios registrados pueden añadir productos a su carrito.
-   Visualizar y editar su perfil con infomaciones personales.
-   Visualizar su carrito de compras con los productos añadidos.
-   Aumentar y disminuir del carrito de compras la cantidad de un mismo producto.
-   Borrar cada producto del carrito de compras.
-   Borrar todos los productos del carrito de compras.
-   Comprar productos

### Adminstrador

-   El administrador puede crear un nuevo producto con todas las informaciones necesaria y marcarlo como disponible o no disponible.
-   Editar las informaciones de un producto y borrar un producto.
-   Visualizar y editar el perfil de los usuarios, asignando un numero de socio y la posibilidad de hacer una reserva si corresponde.
-   Eliminar los perfiles de los usuarios.

# Requisitos técnicos

-   Laravel 8
-   PHP 7.4
-   composer 1.10.15

# Instalación

`composer install`

`npm install && npm run dev`

`php artisan migrate:fresh --seed`

`php artisan storage:link`

## Running app

`php artisan serve`

## Running Tests

`php artisan test`

## Metodología de trabajo

-   TDD
-   Agile
-   Scrum
-   Pair programming

### Heroku link

http:

### Proyecto creado en equipo durante el Bootcamp Factoria F5.

Integrantes:

-   Alexandra Galarza
-   Cris Mouta.
-   David Sánchez.
-   Gabriela Baquerizo.
-   Jose Miguel Quesada.
-   Snezhanna Stefanova.

## Herramientas y tecnologías utilizadas
- HTML5
- CSS
- Bootstrap
- Sass
- PHP8
- MySQL
- Visual Studio Code
- XAMPP
- Laravel
- Javascript
- Trello
- Miro
- Figma

## Aprendizajes

-   Implementar cambios incrementales.
-   Implementar GitHub Actions.
-   Implementar pasarela de pago.
-   Creación de vistas por componentes.

## Próximos pasos

- [x] Subir a producción (Heroku y/o otro hosting).
- [x] Conectar la pasarela de pago con nuestro proyecto.
- [ ] Posibilidad de reservar un producto.
- [x] Sistema de valoración y comentarios.
- [ ] Vista de productos más valorados.
- [ ] Utilizar Interfaces.
- [x] Utilizar Patrón Repositorio.
- [x] Inyección de servicios.


