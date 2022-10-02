// pourquoi créer une classe static
// car on ne veut pas instancier cette classe
//
// mot clé pour créer une classe static
// static
//
// n est un entier car il va jusqu'a 2^32 bits
//
// Le cribe d'Erathostene est il adapté au chiffrage RSA
// oui car il permet de trouver les nombres premiers
public class TD1
{
	public static class Premier
	{
		public static int[] cribe(int n)
		{
			int[] tab = new int[n];
			for (int i = 0; i < n; i++)
			{
				tab[i] = i;
			}
			for (int i = 2; i < n; i++)
			{
				if (tab[i] != 0)
				{
					for (int j = i + 1; j < n; j++)
					{
						if (tab[j] % tab[i] == 0)
						{
							tab[j] = 0;
						}
					}
				}
			}
			for (int i = 2; i < n; i++)
			{
				if (tab[i] != 0)
				{
					System.Console.WriteLine(tab[i]);
				}
			}
			return tab;
		}

		public static void Euclide (int a, int b)
		{
			int r = a % b;
			while (r != 0)
			{
				a = b;
				b = r;
				r = a % b;
			}
			System.Console.WriteLine(b);
		}
	}

	public static int[] decompositionEnNombrePremier(int a)
	{
		int[] tab = Premier.cribe(a);
		int[] tab2 = new int[a];
		int i = 0;
		int j = 0;
		while (a != 1)
		{
			if (tab[i] != 0)
			{
				if (a % tab[i] == 0)
				{
					tab2[j] = tab[i];
					j++;
					a = a / tab[i];
				}
				else
				{
					i++;
				}
			}
			else
			{
				i++;
			}
		}
		return tab2;
	}

	public static int euler (int n)
	{
		int[] tab = decompositionEnNombrePremier(n);
		int[] tab2 = new int[n];
		int i = 0;
		int j = 0;
		while (tab[i] != 0)
		{
			if (tab[i] != tab[i + 1])
			{
				tab2[j] = tab[i];
				j++;
			}
			i++;
		}
		int res = 1;
		for (int k = 0; k < j; k++)
		{
			res = res * (tab2[k] - 1);
		}
		return res;
	}


	static void Main()
	{
		// use euler
		System.Console.WriteLine(euler(10));
	}
}
