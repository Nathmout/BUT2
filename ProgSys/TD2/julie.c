int isBissextile(int ano) {
	if (ano % 4 == 0 && ano % 100 != 0) {
		return 1;
	} else if (ano % 400 == 0) {
		return 1;
	} else {
		return 0;
	}
}
