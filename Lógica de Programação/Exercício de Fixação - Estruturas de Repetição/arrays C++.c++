/* Desenvolver um algoritmo que efetue a soma de todos os números ímpares que são múltiplos de três e que se encontram no conjunto dos números de 1 até 500.*/
#include <iostream>
using namespace std;
#include <cmath>
#include <locale.h>

int main() {
    setlocale(LC_ALL,"PORTUGUESE");
    int numMult3[500], soma=0;
    for (int i= 0;i<500;i++) {
    	if(i%2!=0){
			if (i % 3 == 0){
    			soma+=numMult3[i];
    			cout << i<< endl;
			}	
    	}
    }
    cout << "A soma dos números multiplos de 3, no entervaldo de 1 à 500 é: " << soma;
    return 0;
}



/*
Desenvolver um algoritmo que leia a altura de 15 pessoas. Este programa deverá calcular e mostrar :
a. A menor altura do grupo;
b. A maior altura do grupo;
*/
#include <iostream>
using namespace std;
#include <cmath>
#include <locale.h>

int main() {
	setlocale(LC_ALL,"PORTUGUESE");
	float altura[4],auxMax,auxMin;
	for ( int i=0;i<4;i++) {
	 	cout << "Digite altura: ";
	 	cin >> altura [i];
	
	}
	for (int i=0;i<4;i++) {
		auxMax =max(altura[i],altura[i+1]);
		auxMin = min(altura[i],altura[i+1]);
		
	}
	cout << "A maior altura é: " <<auxMax<<".\n";
	cout << "A menor altura é: " <<auxMin<<".\n";
	
	 
  	return 0;
}


/*
Desenvolver um algoritmo que leia um número não determinado de valores e calcule e escreva a média aritmética dos valores lidos, a quantidade de valores positivos,
a quantidade de valores negativos e o percentual de valores negativos e positivos.
*/
#include <iostream>
using namespace std;
#include <cmath>
#include <locale.h>

int main() { 
	setlocale(LC_ALL,"PORTUGUESE");
	float num, soma, numnega=0, numposi=0, media;
	while (true) {
		cout << "Escreva um número: ";
		cin >> num; 
		soma+=num;
		if (num == 0) {
			break;
		}
		else if (num < 0) {
			numnega++;
		}
		else {
			numposi++;
		}
	}
	media = soma/(numnega + numposi);
	cout << "Média aritmetica é: "<< media << ".\n";
	cout << "Quantidade de Números negativos: " << numnega << ".\n";	
	cout << "Quantidade de Números positivos: " << numposi << ".\n";	
	cout << "Porcentagem de números negativos: " << numnega*100/(numnega + numposi) << "%.\n";
	cout << "Porcentagem de números positivos: " << numposi*100/(numnega + numposi) << "%.";
	
	return 0;
}



/*Escrever um algoritmo que leia uma quantidade desconhecida de números e conte quantos deles estão nos seguintes intervalos: [0-25], [26-50], [51-75] e [76-100].
A entrada de dados deve terminar quando for lido um número negativo.
*/
#include <iostream>
using namespace std;
#include <cmath>
#include <locale.h>

int main() { 
	setlocale(LC_ALL,"PORTUGUESE");
	float num, num25,num50,num75,num100;
	while (true) {
		cout << "Digite um número: ";
		cin >> num;
		if (num <= 0) {
			break;
		}
		else if (num < 25) {
		num25++;
		}
		else if (num > 25 and num < 50) {
			num50++;
		}
		else if (num > 50 and num < 75) {
			num75++;
		}
		else {
			num100++;
		}
	}
	cout << "Números entre 1 à 25 encontrados: " << num25 << ".\n";
	cout << "Números entre 26 à 50 encontrados: " << num50 << ".\n";
	cout << "Números entre 51 à 75 encontrados: " << num75 << ".\n";
	cout << "Números entre 76 à 100 encontrados: " << num100 << ".\n";
	return 0;
}

/*Faça um algoritmo estruturado que leia uma quantidade não determinada de números positivos.Calcule a quantidade de números pares e ímpares, a média de valores pares e a média geral dos números lidos.
O número que encerrará a leitura será zero.
*/

#include <locale.h>
#include <iostream>
using namespace std;
int main() { 
    setlocale(LC_ALL,"PORTUGUESE");
	int numimpar=0, num, soma, contPar=0, contImpar=0, contNum=0, s0ma;
	float mediaGeral=0;
	while (true) {
		cout << "Digite um número: ";
		cin >> num;
		s0ma+=num;
		if (num <= 0) {
			break;
		}
        else if (num % 2 == 0) {
            contPar++;
            soma+=num;
    	}
	    else {
            contImpar++;
            
	    } 
	}
	mediaGeral = (s0ma/((contPar+contImpar)));
	cout << "Números ímpares encontrados: " << contImpar << ".\n";
	cout << "Números pares encontrados: " << contPar << ".\n";
	cout << "Média dos valores de números pares é: " << soma/contPar << ".\n";
    cout << "Média geral dos valores é: " << mediaGeral << ".";
    cout << contNum << endl << contPar;
    cout << soma << endl;
    cout << num;
    cout<<contNum;
    
	return 0;
}
