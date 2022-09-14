public class TD1
{

	public static class Premier
	{
		public static void cribe(int n)
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

	static void Main()
	{
		Premier.Euclide(79,3337);
	}
}
