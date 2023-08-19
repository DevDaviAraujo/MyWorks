/* Faça um Programa que converta metros para centímetros. */
#include <iostream>
using namespace std;

int main() {
  float centimetros,metros;
  cout << "Digite o valor em metros: ";
  cin >> metros;
  centimetros = metros*100;
  cout << "O valor em centímetros é: " << centimetros;
  return 0;
}

/*Faça um Programa que peça o raio de um círculo, calcule e mostre sua área.*/
#include <iostream>
using namespace std;
#include <cmath>

int main() {
  float raio,resultado;
  cout << "Digite o valor do raio: ";
  cin >> raio;
  resultado = 3.14*sqrt(raio);
  cout << "O valor do comprimento da área é: " << resultado;
  return 0;
}

/*3) Faça um Programa que peça 2 números inteiros e um número real. Calcule e mostre:
o produto do dobro do primeiro com metade do segundo.
a soma do triplo do primeiro com o terceiro.
o terceiro elevado ao cubo.*/

#include <iostream>
using namespace std;
#include <cmath>

int main() {
	int numero1, numero2;
  	float numero3, multiplicacao, soma, elevado;
  	cout << "Digite um número inteiro: ";
  	cin >> numero1;
  	cout << "Digite um número inteiro: ";
  	cin >> numero2;
  	cout << "Digite um número real: ";
  	cin >> numero3;
  	multiplicacao = (numero1*2) * (numero2/2);
  	soma = (numero1*3) + numero3;
  	elevado =  cbrt(numero3);
  	cout << multiplicacao << " \n" << soma << " \n" << elevado;
  	return 0;
}


/*4) João Papo-de-Pescador, homem de bem, comprou um microcomputador para controlar o rendimento diário de seu trabalho. Toda vez que ele traz um peso de peixes maior que o estabelecido pelo regulamento de pesca do estado de São Paulo (50 quilos) deve pagar uma multa de R$ 4,00 por quilo excedente.  João precisa que você faça um programa que leia a variável peso (peso de peixes) e calcule o excesso. Gravar na variável excesso a quantidade de quilos além do limite na variável multa o valor da multa que João deverá pagar.
Imprima os dados do programa com as mensagens adequadas.*/
#include <iostream>
using namespace std;
#include <cmath>

int main() {
	float pesopeixe, multa;
	cout << "Digite a quantidade de peixe por kilo: ";
	cin >> pesopeixe;
	if (pesopeixe > 50) {
		multa = (pesopeixe - 50) * 4;
		cout << "Preço de multa à se pagar é: " << "R$ "<< multa << ".";
	}
	else {
		cout << "Não há multa à se pagar.";
	}
  	return 0;
}

/*5)Faça um Programa que peça dois números e imprima o maior deles.*/

#include <iostream>
using namespace std;
#include <cmath>
#include <locale.h>

int main() {
	float numero1, numero2;
	cout << "Digite um número: ";
	cin >> numero1;
	cout << "Digite outro número: ";
	cin >> numero2;
	if (numero1 == numero2) {
		cout << "Números iguais.";
	}
	else { 
		cout << "Número maior é: "<< max(numero1,numero2) << ".";
	}
	
  	return 0;
}
