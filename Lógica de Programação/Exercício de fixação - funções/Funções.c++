/* 1. Faça uma função que recebe por parâmetro o raio de uma esfera e calcula o seu volume (v = 4/3.P .R3).*/

#include <iostream>
using namespace std;
#include <cmath>
#include <locale.h>

int main() {
	setlocale(LC_ALL,"PORTUGUESE");
	float volume, raio;
	cout << "Digite o valor do raio: ";
	cin >> raio;
	volume = ((4/3)*3.14)*(pow(raio,3));
	cout << "Parâmetro do volume da esfera é: " << volume;
	return 0;
}


/*2. Escreva um procedimento que recebe as 3 notas de um aluno por parâmetro e uma letra. Se a letra for A o procedimento calcula a média aritmética das notas do aluno,
se for P, a sua média ponderada (pesos: 5, 3 e 2) e calculada também deve retornar por parâmetro.
*/

#include <iostream>
using namespace std;
#include <cmath>
#include <locale.h>
#include <string>

int main() {
	setlocale(LC_ALL,"PORTUGUESE");
	float nota[3], mediaAri, mediaPon; 
	string processo, resultadoA = "A", resultadoP = "P";
	for (int i=0;i<3;i++) {
		cout << "Digite a nota do aluno: ";
		cin >> nota[i];
	}
	mediaAri = ((nota[0] + nota[1] + nota[2]) / 3);
	mediaPon = (((nota[0] * 5) + (nota[1] * 3) + (nota[2] * 2))/ (5 + 3 + 2));
	do {
		cout << "Digite o tipo de processo de média entre, Aritmetica (A) ou Ponderada (P): ";
		cin >> processo;
		if (processo != resultadoA and processo != resultadoP) {
			cout << "Não compreendido." << endl;
		}
	}
	while (processo != resultadoA and processo != resultadoP);
	if (processo == resultadoA) {
		cout << "Média Aritmetica é: " << mediaAri << endl;
	}
	else if (processo == resultadoP) {
		cout << "Média Ponderada é: " << mediaPon << endl;
	}
	return 0;
}


/*3.  Faça um procedimento que recebe por parâmetro os valores necessário para o cálculo da fórmula de báskara e retorna, também por parâmetro, as suas raízes, caso seja possível calcular.*/

#include <iostream>
using namespace std;
#include <cmath>
#include <locale.h>
#include <string>

int main() {
	setlocale(LC_ALL,"PORTUGUESE");
	float abc[3], delta, baskara1, baskara2;
	for (int i=0;i<3;i++) {
	    cout << "Digite um valor: ";
	    cin >> abc[i];
	}
	delta = ((((pow(abc[1],2))  -4) * abc[0]) * abc[3]);
	baskara1 = (((-abc[1] - sqrt(delta)) / 2) * abc[0]);
	baskara2 = (((-abc[1] + sqrt(delta)) / 2) * abc[0]);
	cout << "Valor de x' é: " << baskara1 << endl;
	cout << "Valor de x'' é: " << baskara2;
	return 0;
}


/*4.  Faça uma função que recebe por parâmetro o tempo de duração de uma fábrica expressa em segundos e retorna também por parâmetro esse tempo em horas, minutos e segundos.*/

#include <cmath>
#include <locale.h>
#include <string>

int main() {
	setlocale(LC_ALL,"PORTUGUESE");
	int segundos, minutos, horas, minutosCorretos, horasCorretas, segundosCorretos;
	cout << "Digite a quantidade de segundos: ";
	cin >> segundos;
	minutos = segundos/60;
	horas = segundos/3600;
	if (segundos >= 60) {
	    segundosCorretos = segundos - 60 * minutos;
	    minutosCorretos = minutos++;
	    if (minutos >= 60) {
	        minutosCorretos = minutos - 60 * horas;
	        horasCorretas = horas++;
	    }
	}
	cout << "Duração  em " << horasCorretas << " hora(s), " << minutosCorretos - 1 << " minutos e " << segundosCorretos <<  " segundos.";
	return 0;
}



/*5. Faça uma função que recebe a idade de uma pessoa em anos, meses e dias e retorna essa idade expressa em dias.*/

#include <iostream>
using namespace std;
#include <cmath>
#include <locale.h>
#include <string>

int main() {
	setlocale(LC_ALL,"PORTUGUESE");
	int dia, mes, ano, diaDia, anoDia, mesDia, diaAtual, mesAtual, anoAtual, total;
    cout << "Escreva a data do seu aniversário: ";
    cin >> dia;
    cout << "/";
    cin >> mes;
    cout << "/";
    cin >> ano;
    cout << " " << endl;
    cout << "Escreva a data atual: ";
    cin >> diaAtual;
    cout << "/";
    cin >> mesAtual;
    cout << "/";
    cin >> anoAtual;
    diaDia = diaAtual - dia;
    mesDia = (mesAtual - mes) * 30;
    anoDia = (anoAtual - ano) * 360;
    total = diaDia + mesDia + anoDia;
    cout << "O total de dias vivídos são: " << total << ".";
    return 0;
}


/*6. Faça uma função que recebe a média final de um aluno por parâmetro e retorna o seu conceito, conforme a tabela abaixo:

Nota                       Conceito
de 0,0 a 4,9                  D
de 5,0 a 6,9                  C
de 7,0 a 8,9                  B
de 9,0 a 10,0                A
*/

#include <iostream>
using namespace std;
#include <cmath>
#include <locale.h>
#include <string>

int main() {
	setlocale(LC_ALL,"PORTUGUESE");
    float nota[4], media;
    for (int i=0;i<4;i++) {
        cout << "Digite a nota do aluno: ";
        cin >> nota[i];
        if (nota[i] < 0) {
            cout << "Valor inválido." << endl;
            do {
                cout << "Digite a nota do aluno: ";
                cin >> nota[i];
                if (nota[i] >= 0) {
                    break;   
                }
            }
            while (nota[i] > -1);
        }
    }
    media = ((nota[0] + nota[1] + nota[2] + nota[3]) / 4);
    if (media >= 0 and media <= 4.9) {
        cout << "Aluno de conceito D.";
    }
    else if (media >= 5.0 and media <= 6.9) {
        cout << "Aluno de conceito C.";
    }
    else if (media >= 7.0 and media <= 8.9) {
        cout << "Aluno de conceito B.";
    }
    else if (media >= 9 and media <= 10) {
        cout << "Aluno de conceito A.";
    }
    else {
        cout << "Valores inválidos.";
    }
    return 0;
}

/*7. Faça um procedimento que recebe a idade de um nadador por parâmetro e retorna , também por parâmetro, a categoria desse nadador de acordo com a tabela abaixo:  

5 a 7 anos                     Infantil A
8 a 10 anos                   Infantil B
11-13 anos                    Juvenil A
14-17 anos                   Juvenil B
de 18 a maior de 18    Adulto*/

#include <iostream>
using namespace std;
#include <cmath>
#include <locale.h>
#include <string>

int main() {
	setlocale(LC_ALL,"PORTUGUESE");
    int idade;
    cout << "Digite a idade do nadador: ";
    cin >> idade;
    if (idade >= 5 and idade <= 7) {
        cout << "infantil A.";
    }
    else if (idade > 7 and idade <= 10) {
        cout << "infantil B.";
    }
    else if (idade > 10 and idade <=13) {
        cout << "juvenil A.";
    }
    else if (idade > 13 and idade <= 17) {
        cout << "Juvenil B.";
    }
    else if (idade >= 18 ) {
        cout << "Adulto.";
    }
    else {
        cout << "Valor inválido.";
    }
    return 0;
}
