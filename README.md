# Prueba técnica — Lleego Academy 2025

Repositorio con la resolución de las pruebas técnicas realizadas en el contexto de **Lleego Academy 2025**.

El proyecto reúne ejercicios de programación con PHP y JavaScript, además de una práctica de automatización de pruebas End-to-End (E2E) utilizando Cypress.

El objetivo es demostrar conocimientos de programación, resolución de problemas, manipulación de datos, programación orientada a objetos y automatización de pruebas funcionales.

## Tecnologías

- **PHP 8.1+**
- **JavaScript**
- **Cypress**
- **Node.js** (para el entorno de ejecución de Cypress)

## Contenido del repositorio

El repositorio está organizado en dos bloques principales.

# 1. Backend — PHP

Ejercicios prácticos orientados a trabajar los fundamentos de PHP y la programación backend.

### Ejercicio 1. Inversión de letras por palabra

Función que recibe una frase y devuelve otra con las letras de cada palabra invertidas, manteniendo el orden original de las palabras.

**Conceptos:** manipulación de cadenas, funciones y tratamiento de texto.

### Ejercicio 2. Búsqueda del número mayor

Función que recibe un array numérico y devuelve el valor más grande. Contempla también el caso de un array vacío.

**Conceptos:** arrays, recorridos, comparaciones y tratamiento de casos límite.

### Ejercicio 3. Programación orientada a objetos

Implementación de una clase `Person` con los atributos `name`, `age` y `email`.

Incluye:
- Constructor para inicializar los atributos.
- Método `showInformation()` para mostrar la información.
- Método `isAdult()` para determinar si la persona tiene 18 años o más.

**Conceptos:** clases, objetos, atributos, métodos y constructores.

### Ejercicio 4. Determinación de la parte del día

Función que utiliza la clase `DateTime` para obtener la hora actual y determinar si corresponde a mañana, tarde o noche.

| Franja | Horario |
|---|---|
| Mañana | 06:00–12:00 |
| Tarde | 12:00–18:00 |
| Noche | 18:00–06:00 |

**Conceptos:** gestión de fechas y horas, `DateTime` y estructuras condicionales.

# 2. QA Automation — JavaScript & Cypress

Bloque orientado a fundamentos de JavaScript y automatización de pruebas funcionales sobre aplicaciones web.

## Ejercicios de JavaScript

### Ejercicio 1. Filtrado de números pares

Función que recibe un array numérico y devuelve uno nuevo con únicamente los números pares.

### Ejercicio 2. Inversión de una cadena

Función que recibe una cadena de texto y devuelve sus caracteres en orden inverso.

### Ejercicio 3. Recorrido de arrays con `do...while`

Programa que recorre un array con los meses del año utilizando un bucle `do...while` y detiene la ejecución antes de imprimir julio.

### Ejercicio 4. Conteo de vocales

Función que recibe una cadena y calcula el número de vocales que contiene.

**Conceptos trabajados en JavaScript:**
- Manipulación de arrays y cadenas.
- Funciones y reutilización de código.
- Estructuras condicionales.
- Bucles y control del flujo de ejecución.

## Automatización E2E con Cypress

Desarrollo de una prueba automatizada con Cypress para validar el funcionamiento del buscador de trenes de la web de Renfe.

### Escenario de prueba

La automatización reproduce el siguiente flujo:

1. Acceder a la página web de Renfe.
2. Introducir Madrid como ciudad de origen.
3. Seleccionar Málaga como destino.
4. Establecer el 28/04 como fecha de ida.
5. Establecer el 30/04 como fecha de vuelta.
6. Seleccionar dos pasajeros adultos.
7. Iniciar la búsqueda.
8. Verificar que la página de resultados se carga correctamente.

**Objetivo:** comprobar mediante una prueba End-to-End que el flujo principal de búsqueda se ejecuta correctamente.

**Conceptos trabajados:**
- Configuración de Cypress.
- Automatización de interacciones web.
- Pruebas funcionales End-to-End.
- Validación de formularios y flujos de usuario.
- Comprobación de resultados mediante aserciones.

## Competencias técnicas

| Área | Competencias |
|---|---|
| Backend | PHP, funciones, arrays y programación orientada a objetos |
| JavaScript | Manipulación de datos, cadenas y estructuras de control |
| QA Automation | Cypress y pruebas E2E |
| Testing funcional | Validación de flujos y resultados |
| Resolución de problemas | Análisis y desarrollo de soluciones mediante ejercicios prácticos |

## Requisitos

- PHP 8.1 o superior para los ejercicios PHP.
- Node.js y npm para el entorno de Cypress.
- Navegador compatible con Cypress.

## Contexto

Pruebas técnicas correspondientes a **Lleego Academy 2025**. Este repositorio reúne los ejercicios de PHP, JavaScript y Cypress realizados como parte del proceso formativo y de evaluación técnica.

