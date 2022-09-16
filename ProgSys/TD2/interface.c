#include <stdio.h>


int main(int argn, char *argv[],char *arge[])
{
	// print argv and arge and argn
	printf("argn = %d",argn);
	for (int i = 0; i < argn; i++)
	{
		printf("argv[%d] = %s\n",i,argv[i]);
	}
	for (int i = 0; i < argn; i++)
	{
		printf("arge[%d] = %s\n",i,arge[i]);
	}

	return 0;
}
