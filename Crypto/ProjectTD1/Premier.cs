// J.-B. Masson le vendredi 30 septembre 2022

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Crypto2022
{
    public static class Premier
    {
        public static List<int> Crible(int n)
        {   // crible d'Eratosthène : renvoie la liste des nb premiers <= n

            // outil : tableau de booléens marquant les éliminations
            bool[] Elimines = new bool[n + 1]; // cases de 0 à n

            // init : on élimine 0 et 1, aucun autre pour le moment
            Elimines[0] = true;
            Elimines[1] = true;
            for (int i = 2; i <= n; i++)
                Elimines[i] = false;

            // boucle : pour k de 2 à ... on élimine les multiples de k
            int k = 2;
            int carre = 4;
            while (carre <= n)
            {
                if (!Elimines[k])
                {
                    // si on arrive ici k est premier
                    // on doit éliminer ses multiples à partir de k*k=carre
                    // ils sont séparés de k unités à chaque fois, jusqu'à dépasser n
                    // (remarque : c'est ce qui justifie le test d'arrêt sur carre ci-dessus)
                    int multiple = carre;
                    while (multiple <= n)
                    {
                        Elimines[multiple] = true;
                        multiple += k;
                    }
                }
                // sinon k a déjà été éliminé et ses multiples aussi : rien d'autre à faire
                k++;
                carre = k * k;
            }

            // fabrication de la liste des nb premiers à renvoyer
            List<int> resultat = new List<int>();
            for (int i = 2; i <= n; i++)
                if (!Elimines[i])
                    resultat.Add(i);

            // retour
            return (resultat);
        }

        public static int PGCD(int a, int b)
        {
            // calcul du PGCD de a et b par l'algorithme d'Euclide
            int r = a % b; // reste de a modulo b
            while (r != 0)
            {
                a = b;
                b = r;
                r = a % b; // prochain reste
            }
            // à la fin r=0 donc b divise a : le PGCD vaut b
            return (b);
        }

        public static bool Etrangers(int a, int b)
        {
            // teste si a et b sont "premiers entre eux" alias "étrangers"
			int d = PGCD(a, b);
            return (d == 1);
        }

        public static List<int> DFP(int n)
        {
            // extrait la décomposition en produit de facteurs premiers de n
			// sous forme de liste croissante avec répétitions
			int borne = (int)(Math.Sqrt(n));
            // remarque : cela arrondit à l'entier inférieur...
            // justifié par la propriété suivante : n possède au plus un diviseur premier > sqrt(n)  [*]
            // (démo : s'il y a deux tels p1 et p2 alors p1*p2 est >n et c'est un diviseur de n : absurde)
            List<int> nbpremiers = new List<int>();
            nbpremiers = Crible(borne);
            List<int> facteurs = new List<int>();
            foreach(int p in nbpremiers)
            {
                // on extrait autant de facteurs p que possible, éventuellement 0
                while (n % p == 0)
                {
                    facteurs.Add(p);
                    n = n / p;
                }
                // si n=1 on peut sortir tout de suite du foreach
                if (n == 1) break;
            }
            // à la fin soit n=1 et on a fini,
            // soit n contient le plus grand facteur premier du n initial
            // et celui-ci était >sqrt(n) donc pas dans la liste nbpremiers
            // (d'après la propriété [*] ci-dessus)
            if (n > 1)
                facteurs.Add(n);

            // retour
            return (facteurs);
        }

        public static int Phi(int n)
        {
            // calcul de l'indicatrice d'Euler à l'aide de la liste des facteurs premiers
            List<int> facteurs = new List<int>();
            facteurs = DFP(n);
            int Pcourant = facteurs[0]; // pour traiter "en bloc" les copies d'un même facteur premier
            int resultat = 1;
            foreach(int p in facteurs)
            {
                // on doit calculer des blocs du type p^exposant*[...]
                resultat *= p;
                if (p != Pcourant)
                {
                    // ici on sait que p vient de démarrer un nouveau "bloc"
                    // on finit le bloc précédent en effectuant le [...] ci-dessus
                    resultat = resultat / Pcourant * (Pcourant - 1);
                    // remarque : la division compense une des multiplications déjà faites, cela pourrait être amélioré
                    Pcourant = p; // on est passé au "bloc" suivant
                }
            }
            // attention, le [...] du dernier bloc n'a pas été effectué
            resultat = resultat / Pcourant * (Pcourant - 1);
            // retour
            return (resultat);
        }

        // NB : on pourrait aussi refaire DFP et Phi en manipulant une liste de couples (premier,exposant)
    }

}
