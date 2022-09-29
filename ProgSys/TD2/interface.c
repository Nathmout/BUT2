#include <stdio.h>

int main(int argn, char *argv[],char *arge[])
{
	printf("argn = %d\n",argn-1);
	for (int i = 0; i < argn; i++)
	{
		printf("argv[%d] = %s\n",i,argv[i]);
	}
	int i = 0;
	while (arge[i]!=NULL){
		printf("arge[%d] = %s\n",i,arge[i]);
		i++;
	}
	return 0;
}
