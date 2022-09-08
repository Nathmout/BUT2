#include <stdio.h>
#include <stdlib.h>

void Incremente(int *p)
{
	*p = *p + 1;
}

int main(int argc, char *argv[])
{
	int x = 148;

	Incremente(&x);

	printf("x vaut %d \n", x);

	return 0;
}
