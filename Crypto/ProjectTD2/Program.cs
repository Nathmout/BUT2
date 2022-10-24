static String binaire(int puissance)
{
    return Convert.ToString(puissance, 2);
}

static double ExponentiationModulaire(int fact, int puissance, int modulo)
{
    String pui = binaire(puissance);
	double result = 1;
	for (int i = 0; i < pui.Length; i++)
	{
		result = (result * result) % modulo;
		if (pui[i] == '1')
		{
			result = (result * fact) % modulo;
		}
	}
    return result;
}

double test = ExponentiationModulaire(4, 13, 497);
System.Console.WriteLine(test);
