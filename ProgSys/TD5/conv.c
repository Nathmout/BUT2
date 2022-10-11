#include "temps.h"

int tempsConvertIntoMinute(temps t) {
	int result;
	result = t.h * 60 + t.min;
	return result;
}
