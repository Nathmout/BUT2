static String binaire(int puissance)
{
    return Convert.ToString(puissance, 2);
}

static double ExponentiationModulaire(int fact, int puissance, int modulo)
{
    String pui = binaire(puissance);
    double fact_x = 0;
    double x = 0;
    double res = 1;
    int n = 0;

    for (int i = pui.Length - 1; i >= 0; i--)
    {

		Console.Write("pui[i] : " + pui[i] + "");
        fact_x = pui[i] * Math.Pow(2, n);
        Console.WriteLine("fact_x : " + fact_x);
        x = Math.Pow(4, fact_x) % modulo;
        Console.WriteLine("x : " + x);
        res = res * x;
        Console.WriteLine("res : " + res);
        n++;
    }
    res = res % modulo;

    return res;
}

double test = ExponentiationModulaire(4, 13, 497);
/* System.Console.WriteLine(test); */
