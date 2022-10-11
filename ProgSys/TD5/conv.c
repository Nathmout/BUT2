#include "temps.h"

int tempsConvertIntoMinute(temps t) {
	return t.h * 60 + t.min;
}
