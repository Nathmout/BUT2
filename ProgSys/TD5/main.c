#include <stdio.h>
#include "temps.h"

int main (int argc, char *argv[])
{
	struct temps t1;
	t1.h = 2;
	t1.min = 30;
	struct temps t2;
	t2.h = 3;
	t2.min = 45;
	struct temps t3;
	t3.h = 1;
	t3.min = 15;

	printf("t1 = %d:%d et t2 = %d:%d et t3 = %d:%d",t1.h,t1.min,t2.h,t2.min,t3.h,t3.min);
	return 0;
}
