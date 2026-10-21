Práctica N.° 10 - Proveedores de Datos (DataProvider) en PHPUnit
📖 Descripción
Esta práctica tiene como finalidad implementar pruebas parametrizadas utilizando DataProvider en PHPUnit. Esta técnica permite ejecutar una misma prueba con diferentes conjuntos de datos, reduciendo la duplicación de código y mejorando la mantenibilidad de las pruebas unitarias.

🎯 Objetivos
Comprender el funcionamiento de DataProvider en PHPUnit.

Implementar pruebas unitarias parametrizadas.

Validar múltiples escenarios de entrada utilizando una sola función de prueba.

Mejorar la organización y reutilización del código de pruebas.

🛠️ Herramientas Utilizadas
PHP 8.x

PHPUnit

Composer

Visual Studio Code

Laravel Herd

📚 Fundamento Teórico
¿Qué es DataProvider?
DataProvider es una característica de PHPUnit que permite suministrar múltiples conjuntos de datos a un único método de prueba. Gracias a ello, una misma prueba puede ejecutarse varias veces con diferentes valores de entrada.

Ventajas
Reduce código repetitivo.

Facilita la incorporación de nuevos casos de prueba.

Mejora la legibilidad del código.

Permite documentar escenarios de prueba de manera organizada.

🚀 Desarrollo de la Práctica
Paso 1: Configuración del Proyecto
Crear o abrir el proyecto base y verificar que Composer y PHPUnit estén correctamente instalados.

Bash
composer install
Paso 2: Configurar composer.json
Agregar la configuración necesaria para el autoload y las dependencias de PHPUnit.

Bash
composer dump-autoload
Paso 3: Crear la Clase Calculadora
Implementar la clase Calculadora.php dentro de la carpeta src.

Funciones sugeridas:

Sumar

Restar

Multiplicar

Dividir

Paso 4: Crear la Clase Validador
Implementar la clase Validador.php para validar diferentes tipos de datos.

Ejemplos:

Validación de correos electrónicos.

Validación de campos vacíos.

Validación de formatos específicos.

Paso 5: Crear las Pruebas de la Calculadora
Crear el archivo:

Bash
tests/CalculadoraTest.php
Utilizar DataProvider para probar múltiples operaciones matemáticas mediante distintos conjuntos de datos.

Paso 6: Crear las Pruebas del Validador
Crear el archivo:

Bash
tests/ValidadorTest.php
Implementar DataProvider para validar distintos escenarios de entrada y salida esperada.

Paso 7: Ejecutar las Pruebas
Ejecutar todas las pruebas con:

Bash
vendor/bin/phpunit tests --testdox
✅ Resultados Esperados
Todas las pruebas deben ejecutarse correctamente.

Los casos válidos deben aprobarse.

Los casos inválidos deben ser detectados adecuadamente.

Se debe evidenciar el uso de DataProvider para múltiples escenarios.

📄 Evidencias
A continuación, se muestra el registro de la consola con la ejecución exitosa de PHPUnit para los distintos métodos evaluados usando conjuntos de datos (Data Sets).

Ejecución de pruebas para la clase Calculadora:

   



PS C:\Users\Hp\Documents\CURSOS 2026 V\prueba unitaria de software\Guia de práctica S10> vendor\bin\phpunit tests --testdox
PHPUnit 11.5.55 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.3.31
Configuration: C:\Users\Hp\Documents\CURSOS 2026 V\prueba unitaria de software\Guia de práctica S10\phpunit.xml

.......................                                     23 / 23 (100%)

Time: 00:00.022, Memory: 8.00 MB

Calculadora (Tests\Calculadora)
 ✔ Sumar with data set 0
 ✔ Sumar with data set 1
 ✔ Sumar with data set 2
 ✔ Sumar with data set 3
 ✔ Restar with data set 0
 ✔ Restar with data set 1
 ✔ Restar with data set 2
 ✔ Restar with data set 3
 ✔ Multiplicar with data set 0
 ✔ Multiplicar with data set 1
 ✔ Multiplicar with data set 2
 ✔ Multiplicar with data set 3
 ✔ Dividir with data set 0
 ✔ Dividir with data set 1
 ✔ Dividir with data set 2
 ✔ Dividir with data set 3
Ejecución de pruebas para la clase Validador y Resumen Final:



Validador (Tests\Validador)
 ✔ Es par with data set 0
 ✔ Es par with data set 1
 ✔ Es par with data set 2
 ✔ Es par with data set 3
 ✔ Es positivo with data set 0
 ✔ Es positivo with data set 1
 ✔ Es positivo with data set 2

OK (23 tests, 23 assertions)
PS C:\Users\Hp\Documents\CURSOS 2026 V\prueba unitaria de software\Guia de práctica S10> 
📌 Conclusiones
¿Qué ventajas tiene usar dataProvider frente a escribir pruebas individuales para cada caso?
Permite probar varios casos con un solo método, reduciendo código repetido y facilitando el mantenimiento.

¿Cómo se manejan las excepciones dentro de un dataProvider?
Se envían datos que generen errores y se verifica que PHPUnit detecte la excepción esperada.

¿Qué tipo de datos debe retornar el método proveedor?
Debe retornar un arreglo (array) con varios conjuntos de datos para las pruebas.

¿Qué dificultades tuviste al implementar las pruebas parametrizadas?
Al inicio tuve dificultades para entender la estructura del dataProvider y cómo relacionar los datos con los parámetros de la prueba.

Beneficios Generales:
DataProvider permite reutilizar una misma prueba para múltiples escenarios.

Reduce significativamente la cantidad de código necesario.

Facilita el mantenimiento y la escalabilidad de las pruebas unitarias.

Mejora la calidad del software al incrementar la cobertura de pruebas.


