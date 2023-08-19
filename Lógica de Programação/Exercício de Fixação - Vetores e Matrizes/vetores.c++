/*1) Exercício 01 - Faça um programa que leia um vetor de 10 posições e crie um segundo vetor substituindo os valores negativos por 0.*/
#include <iostream>
using namespace std;
#include <cmath>
#include <locale.h>

int main() {
	setlocale(LC_ALL,"PORTUGUESE");
	int ver[10], ver2[10];
	for (int i=0;i<10;i++) {
		cout << "Digite um valor: ";
		cin >> ver[i];
		if (ver[i] <= 0) {
			ver[i] = 0;
		}
	}

	for (int i=0;i<10;i++) {
		cout << ver[i] << " ";
	}
	return 0;
}

 
/* 2) Exercício 02 - Faça um programa que leia uma matriz mat 3 x 4 de inteiros, substitua seus elementos negativos por 0 e imprima a matriz mat original e a modificada.*/
#include <iostream>
using namespace std;
#include <cmath>
#include <locale.h>

int main() {
	setlocale(LC_ALL,"PORTUGUESE");
	int ver[3][4], ver2[3][4];
	for (int i=0;i<3;i++) {
		for (int j=0;j<4;j++) {
			cout << "Digite um valor: ";
			cin >> ver[i][j];
		}
	}
	for (int i=0;i<3;i++) {
		for (int j=0;j<4;j++) {
			cout << ver[i][j] << " ";
			if (ver[i][j] <= 0) {
				ver[i][j] = 0;
			}	
		}
	}
	cout << "\n";
	
	for (int i=0;i<3;i++) {
		for (int j=0;j<4;j++) {
			cout << ver[i][j] << " ";
		}
	}
	return 0;
}

/*3) Exercício 03-A prefeitura de uma cidade deseja fazer uma pesquisa entre seus habitantes. Faça um algoritmo para coletar dados sobre o salário e número de filhos de cada habitante e após as leituras, escrever:
Média de salário da população
Média do número de filhos
Maior salário dos habitantes
Percentual de pessoas com salário menor que R$ 150,00


Obs.: O final da leitura dos dados se dará com a entrada de um “salário negativo”.*/
#include <iostream>
using namespace std;
#include <cmath>
#include <locale.h>

int main() {
	setlocale(LC_ALL,"PORTUGUESE");
	float salario[10000], mediaSa, somaSa, somaSaNao, mediaFi, maxSa, valores150, media150;
	int filhos[10000], contSa, contSaNao, contFi, contFiNao, somaFi, somaFiNao;
	for (int i=0;i<1;i++) {
	    do {
    		contSa++;
    		cout << "Digite o salário: ";
    		cin >> salario[i];
    		somaSa+=salario[i];
    	    if (salario[i] <= 0) {
    		    contSaNao++;
    		    somaSaNao+=salario[i];
    		    if (salario[i] <= 150) {
    	        	valores150++;
    	    	    media150 = ((valores150 * 100) / (contSa-contSaNao));
    	        }
    		}
    	    
	    }
	    while (salario[i] > 0);
	    do {
    		cout << "Digite a quantidade de filhos: ";
    		cin >> filhos[i];
    		somaFi+=filhos[i];
    		contFi++;
    		if (filhos[i] <= 0) {
    		    contFiNao++;
    		    somaFiNao+=filhos[i];
    		}
    	}
    	while (filhos[i] > -1);
    	maxSa = max(salario[i],salario[i+1]);
	}
	mediaSa = ((somaSa-somaSaNao)/(contSa-contSaNao));
	mediaFi = ((somaFi-somaFiNao)/(contFi-contFiNao));
	cout << "Média de salário da população é R$" << mediaSa << "." << endl;
	cout << "Média do número de filhos é " << mediaFi << "." << endl;
	cout << "Maior salário dos habitantes é R$" << maxSa << "." << endl;
	cout << "Percentual de pessoas com salário menor que R$ 150,00 é " << media150 << "%.";
	return 0;
}

/*4)Exercício 04-Escreva um algoritmo que permita a leitura dos nomes de 10 pessoas e armazene os nomes lidos em um vetor. Após isto, o algoritmo deve permitir a leitura
de mais 1 nome qualquer de pessoa e depois escrever a mensagem ACHEI, se o nome estiver entre os 10 nomes lidos anteriormente (guardados no vetor), ou NÃO ACHEI caso contrário.
*/

#include <iostream>
using namespace std;
#include <cmath>
#include <locale.h>
#include <string>


int main() {
	setlocale(LC_ALL,"PORTUGUESE");
    int num = 0;
	string nomes[10] = {"Pedro", "Rafael", "Miguel", "Izac", "Emanoel", "Murilo", "Saulo", "Niaggo", "Igor", "Alexandre"}, nome;
	cout << "Digite um nome: ";
    cin >> nome;
  for (int i=0;i<10;i++) {
    if (nome == nomes[i]) {
        num++;
    }
  }

  if (num == 1) {
        cout << "Achei " << nome << "." << endl;
    } else {
        cout << "Não achei.";
    }
	return 0;
}

/*5) Sabe-se que em uma empresa, os funcionários recebem reajustes de 4,5% por convenção coletiva, neste ano. Baseado nisto, receba em uma matriz o salário de um número de 50 
empregados. Após realize o cálculo do e armazene em uma matriz resultante o valor do salário reajustado. Exiba a matriz original e a resultante.*/

#include <iostream>
using namespace std;
#include <cmath>
#include <locale.h>

int main() {
	setlocale(LC_ALL,"PORTUGUESE");
	float salario[50], salarioReaju[50], reajuste;
	for (int i=0;i<3;i++) {
		cout << "Digite o salário do funcionario: ";
		cin >> salario[i];	
		salarioReaju[i] = ((4.5 * salario[i])/ 100);
	}
	for (int i=0;i<3;i++) {
		cout << salario[i] << " ";
	}
	cout << "\n";
	for (int i=0;i<3;i++) {
		cout << salarioReaju[i];
	}
	return 0;
}
