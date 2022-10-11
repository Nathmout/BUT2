#include "temps.h"

temps tempsSum(temps t1, temps t2) {
	temps t3;
	t3.h = t1.h + t2.h;
	t3.min = t1.min + t2.min;

	if (t3.min >=59) {
		t3.min -= 60;
		t3.h += 1;
	}

	return t3;
}



