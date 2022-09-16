#include <stdio.h>
#include <math.h>

// Exo1.1
/* cos(double_t) */
// Exo1.2
/* # define M_PI		3.14159265358979323846	/1* pi *1/ */
/* # define M_PIl		3.141592653589793238462643383279502884L /1* pi *1/ */
/* # define M_PIf16	__f16 (3.141592653589793238462643383279502884) /1* pi *1/ */
/* # define M_PIf32	__f32 (3.141592653589793238462643383279502884) /1* pi *1/ */
/* # define M_PIf64	__f64 (3.141592653589793238462643383279502884) /1* pi *1/ */
/* # define M_PIf128	__f128 (3.141592653589793238462643383279502884) /1* pi *1/ */
/* # define M_PIf32x	__f32x (3.141592653589793238462643383279502884) /1* pi *1/ */
/* # define M_PIf64x	__f64x (3.141592653589793238462643383279502884) /1* pi *1/ */
// Exo 1.4
// gcc table.c -o table_cosinus -lm

int main(int argc, char *argv[])
{
	for (double i = 0; i <= M_PI; i = i + (M_PI / 10))
	{
		printf("cos(%f) = %f\n",i,cos(i));
	}

	return 0;
}
