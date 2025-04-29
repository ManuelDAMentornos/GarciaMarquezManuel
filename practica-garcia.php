<?php
/**
 * Script para la tarea 5 de Despliegue de aplicaciones.
 * 
 * @author Manuel García Márquez
 * @version 1.0
 */

/**
 * Resuelve una ecuación cuadrática de la forma ax^2 + bx + c = 0
 * La fórmula utilizada es: (-b ± sqr(b^2 - 4ac)) / 2a.
 * 
 * Solo válida para soluciones reales, no resuelve las imaginarias.
 * 
 * @link https://es.wikipedia.org/wiki/Ecuaci%C3%B3n_de_segundo_grado Para más información sobre ecuaciones cuadráticas o segundo grado.
 * @param float $a Coeficiente cuadrático.
 * @param float $b Coeficiente lineal.
 * @param float $c Término independiente.
 * @return array|false Retorna un array con las dos soluciones en un array, en caso de solución imaginaria devuelve false
 */
function ecuacionCuadratica($a, $b, $c) {
    $raiz = calcularRaiz($a, $b, $c);

    if ($raiz >= 0) {
        $solucion1 = (-$b + sqrt($raiz)) / (2 * $a);
        $solucion2 = (-$b - sqrt($raiz)) / (2 * $a);
    }
    
    return [$solucion1, $solucion2] ?? false;
}

/**
 * Calcula el raiz de una ecuación cuadrática. 
 * 
 * @internal Esta función es solo para uso interno en cálculos de ecuaciones cuadráticas.
 * @see ecuacionCuadratica() Utiliza este método para mostrar sus soluciones.
 * @param float $a Coeficiente cuadrático.
 * @param float $b Coeficiente lineal.
 * @param float $c Término independiente.
 * @return float Valor del raiz.
 */
function calcularRaiz($a, $b, $c) {
    return ($b * $b) - (4 * $a * $c);
}

// Para usar las funciones.
$soluciones = ecuacionCuadratica(1, -3, 2); // Ejemplo para x^2 - 3x + 2 = 0
print_r($soluciones);
