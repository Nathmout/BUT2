// programme principal : pour les tests
using Crypto2022;

// variables réutilisables
String saisie;
int n;
List<int> nbpremiers = new List<int>();

// test 1
Console.WriteLine("***** test du crible d'Eratosthène *****");
Console.WriteLine("saisissez un entier");
saisie = Console.ReadLine();
n = Convert.ToInt32(saisie);
nbpremiers = Premier.Crible(n);
Console.WriteLine("les nombres premiers jusque "+n+" sont :");
foreach (int p in nbpremiers)
{
    Console.Write(p);
    Console.Write(" ");
 }

// test 2
Console.WriteLine("\n\n***** test de l'algorithme d'Euclide *****");
Console.WriteLine("saisissez un entier a");
saisie = Console.ReadLine();
int a = Convert.ToInt32(saisie);
Console.WriteLine("saisissez un entier b");
saisie = Console.ReadLine();
int b = Convert.ToInt32(saisie);
n = Premier.PGCD(a, b);
Console.WriteLine("le PGCD vaut " + n);
bool etr = Premier.Etrangers(a, b);
Console.WriteLine("étrangers ? " + etr);

// test 3
Console.WriteLine("\n***** test de la décomposition en facteurs premiers *****");
Console.WriteLine("saisissez un entier");
saisie = Console.ReadLine();
n = Convert.ToInt32(saisie);
nbpremiers = Premier.DFP(n);
Console.WriteLine("les facteurs premiers de " + n + " sont :");
int produit = 1;
foreach (int p in nbpremiers)
{
    Console.Write(p);
    Console.Write(" ");
    produit *= p;
}
Console.WriteLine("\nVérification : le produit vaut " + produit);

// test 4
Console.WriteLine("\n***** test de l'indicatrice d'Euler *****");
saisie = Console.ReadLine();
n = Convert.ToInt32(saisie);
int phi = Premier.Phi(n);
Console.WriteLine("l'indicateur phi(" + n + ") vaut " + phi);
