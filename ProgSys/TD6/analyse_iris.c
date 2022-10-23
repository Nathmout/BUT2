

#include <fcntl.h>
#include <stdio.h>
#include <stdlib.h>
#include <sys/stat.h>
#include <sys/types.h>
#include <unistd.h>

// Fonction ouverture lecture du fichier
float *LectureFichier(char *FILE) {
  int desc;
  float *T = (float *)malloc(150 * sizeof(float));

  if ((desc = open(FILE, O_RDONLY) == -1)) {
    perror("TD6:open");
    return NULL;
  }

  read(desc, T, 150 * sizeof(float));

  close(desc);
  return T;
}

void Calcul(float *T, int debut, int fin, float *moy, float *min, float *max) {
  float somme = T[debut];
  *min = T[debut];
  *max = T[debut];

  for (int i = debut + 1; i < fin; i++) {
    somme += T[i];
    if (T[i] < *min) {
      *min = T[i];
    }
    if (T[i] > *max) {
      *max = T[i];
    }
  }
  *moy = somme / (fin - debut);
}

void Affichage(char *espece, float moy, float min, float max) {
  printf("Espece : %s\n", espece);
  printf("Moyenne : %f\n", moy);
  printf("Minimum : %f\n", min);
  printf("Maximum : %f\n", max);
}

int main(int argn, char *argv[]) {
  float *mesures;
  float moy, min, max;

  if (argn != 2) {
    fprintf(stderr, "TD6:UN argument requis");
	exit(1);
  }

  mesures = LectureFichier(argv[1]);

  if (mesures == NULL) {
	fprintf(stderr, "TD6:Erreur lecture fichier");
	exit(2);
  }

  Calcul(mesures, 0, 49, &moy, &min, &max);
  Affichage("Setosa", moy, min, max);

  Calcul(mesures, 50, 99, &moy, &min, &max);
  Affichage("Versicolor", moy, min, max);

  Calcul(mesures, 100, 149, &moy, &min, &max);
  Affichage("Virginica", moy, min, max);

  exit(0);
}
