/******************************************************************************

sistema de operaciones basicas en C++
Manuel Marin Sanchez
lenguaje de programacion 1 

*******************************************************************************/
#include <iostream>
#include <iomanip> // Para controlar el formato de decimales
using namespace std;

int main() {
    double num1, num2;

    // Paso 1: Pedir los dos números
    cout << "Introduce el valor del primer numero: ";
    cin >> num1;
    cout << "Introduce el valor del segundo numero: ";
    cin >> num2;

    // Paso 2: Realizar operaciones
    double suma = num1 + num2;
    double resta = num1 - num2;
    double multiplicacion = num1 * num2;
    double division = num1 / num2;

    // Paso 3: Mostrar resultados con 6 decimales
    cout << fixed << setprecision(6);
    cout << "La suma es: " << suma << endl;
    cout << "La resta es: " << resta << endl;
    cout << "La multiplicacion es: " << multiplicacion << endl;
    cout << "La division es: " << division << endl;

    return 0;
}
