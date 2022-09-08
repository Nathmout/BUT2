from bigO import BigO
import csv
import numpy as np

"""
Renommage de la librairie bigO en lib
"""
lib = BigO()

"""
Nom : Tri a bulle
Description : Tri par comparaison
Entrée : Un tableau
Sortie : Le tableau trié
"""
def bubble_sort(array):
    size_array = len(array)
    for i in range(size_array-1):
        for j in range(size_array-i-1):
            if array[j] > array[j+1]:
                array[j], array[j+1] = array[j+1], array[j]

"""
Nom : Tri à bulle améliorer
Description : Tri par comparaison
Entrée : Un tableau
Sortie : Le tableau trié
"""
def bubble_sort_upgrad(array):
    size_array = len(array)
    for i in range(size_array):
        swapped = False
        for j in range(size_array-i-1):
            if array[j] > array[j+1]:
                array[j], array[j+1] = array[j+1], array[j]
                swapped = True
        if not swapped:
            break

"""
Nom : Tri rapide
Description : Tri par comparaison
Entrée : Un tableau
Sortie : Le tableau trié
"""
def sort_fast(array):
    size_array = len(array)
    for i in range(size_array):
        swapped = False
        for j in range(size_array-i-1):
            if array[j] > array[j+1]:
                array[j], array[j+1] = array[j+1], array[j]
                swapped = True
        if not swapped:
            break
        swapped = False
        for j in range(size_array-i-1, i, -1):
            if array[j] < array[j-1]:
                array[j], array[j-1] = array[j-1], array[j]
                swapped = True
        if not swapped:
            break

"""
Nom : Creation d'un tableau
Description : Creation d'un tableau de taille size
Entrée : Size = Un entier
Sortie : array = Un tableau de la taille de l'entier
"""
def create_array(size):
    array = []
    for i in range(size):
        array.append(size-i)
    return array

"""
Variable global
"""
time_bubble = []
time_bubble_upgrad = []
time_fast = []
input_size = []

"""
ouverture du fichier csv en mode écriture
"""


"""
Nom : Recuper Temps d'execution
Description : Recuper le temps d'execution d'un algorithme
Entrée : Un tableau et un algorithme de tri
Sortie : Le temps d'execution
"""
def get_runtime(sorting_algorithm, array):
    timeTook, result = lib.runtime(sorting_algorithm, array)
    return timeTook


with open('input.csv', 'w') as f:

    for i in range(1,1000):

        temp_array = create_array(i)

        """
        Recuperation des temps d'execution de chaque algo de tri puis ajout dans son tableau dédié
        """
        time_bubble_upgrad.append(get_runtime(bubble_sort_upgrad, temp_array))
        time_fast.append(get_runtime(sort_fast, temp_array))
        time_bubble.append(get_runtime(bubble_sort, temp_array))

        input_size.append(i)

    """
    Ecriture dans le fichier csv
    """
    writer = csv.writer(f, delimiter='\t')
    header = ['input_size', 'bubble_sort', 'bubble_sort_upgrad', 'sort_fast']
    writer.writerow(header)
    for i in range(len(time_bubble)):
        writer.writerow([input_size[i], time_bubble[i], time_bubble_upgrad[i], time_fast[i]])
