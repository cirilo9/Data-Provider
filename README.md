# Práctica N.° 10 - Proveedores de Datos (DataProvider) en PHPUnit

##  Descripción

Esta práctica tiene como finalidad implementar pruebas parametrizadas utilizando **DataProvider** en PHPUnit. Esta técnica permite ejecutar una misma prueba con diferentes conjuntos de datos, reduciendo la duplicación de código y mejorando la mantenibilidad de las pruebas unitarias.

##  Objetivos

* Comprender el funcionamiento de DataProvider en PHPUnit.
* Implementar pruebas unitarias parametrizadas.
* Validar múltiples escenarios de entrada utilizando una sola función de prueba.
* Mejorar la organización y reutilización del código de pruebas.

##  Herramientas Utilizadas

* PHP 8.x
* PHPUnit
* Composer
* Visual Studio Code
* Laravel Herd

##  Fundamento Teórico

### ¿Qué es DataProvider?

DataProvider es una característica de PHPUnit que permite suministrar múltiples conjuntos de datos a un único método de prueba. Gracias a ello, una misma prueba puede ejecutarse varias veces con diferentes valores de entrada.

### Ventajas

* Reduce código repetitivo.
* Facilita la incorporación de nuevos casos de prueba.
* Mejora la legibilidad del código.
* Permite documentar escenarios de prueba de manera organizada.

##  Desarrollo de la Práctica

### Paso 1: Configuración del Proyecto

Crear o abrir el proyecto base y verificar que Composer y PHPUnit estén correctamente instalados.

```bash
composer install
```

### Paso 2: Configurar composer.json

Agregar la configuración necesaria para el autoload y las dependencias de PHPUnit.

```bash
composer dump-autoload
```

### Paso 3: Crear la Clase Calculadora

Implementar la clase `Calculadora.php` dentro de la carpeta `src`.

Funciones sugeridas:

* Sumar
* Restar
* Multiplicar
* Dividir

### Paso 4: Crear la Clase Validador

Implementar la clase `Validador.php` para validar diferentes tipos de datos.

Ejemplos:

* Validación de correos electrónicos.
* Validación de campos vacíos.
* Validación de formatos específicos.

### Paso 5: Crear las Pruebas de la Calculadora

Crear el archivo:

```bash
tests/CalculadoraTest.php
```

Utilizar DataProvider para probar múltiples operaciones matemáticas mediante distintos conjuntos de datos.

### Paso 6: Crear las Pruebas del Validador

Crear el archivo:

```bash
tests/ValidadorTest.php
```

Implementar DataProvider para validar distintos escenarios de entrada y salida esperada.

### Paso 7: Ejecutar las Pruebas

Ejecutar todas las pruebas con:

```bash
vendor/bin/phpunit
```

o

```bash
php vendor/bin/phpunit
```

##  Resultados Esperados

* Todas las pruebas deben ejecutarse correctamente.
* Los casos válidos deben aprobarse.
* Los casos inválidos deben ser detectados adecuadamente.
* Se debe evidenciar el uso de DataProvider para múltiples escenarios.

##  Evidencias

Agregar capturas de pantalla de:

1. Estructura del proyecto.
2. Código de las clases.
3. Métodos DataProvider.
4. Ejecución exitosa de PHPUnit.
5. Resultados obtenidos.

##  Conclusiones

* DataProvider permite reutilizar una misma prueba para múltiples escenarios.
* Reduce significativamente la cantidad de código necesario.
* Facilita el mantenimiento y la escalabilidad de las pruebas unitarias.
* Mejora la calidad del software al incrementar la cobertura de pruebas.


