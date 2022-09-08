#include <stdio.h>
#include <stdlib.h>

int main(int argc, char *argv[])
{
	float prix;
	int nb;
	printf("Saisir le prix d'une baguette \n");
	scanf("%f", &prix);
	printf("Saisir le nombre de baguettes \n");
	scanf("%d", &nb);
	float total = prix * nb;
	printf("%d baguettes à %f euros coutent %f euros \n", nb, prix, total);
	return 0;
}
