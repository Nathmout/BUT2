from bigO import BigO
import csv
import numpy as np

"""
Renomme la librairie bigO en lib
"""
lib = BigO()

"""
Nom : Tri a bulle
Entrée : array = Un tableau
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
Entrée : array = Un tableau
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
Entrée : array = Un tableau
Sortie : Le tableau trié
"""
def quick_sort(array):
    if len(array) <= 1:
        return array
    else:
        pivot = array.pop()
    greater = []
    lower = []
    for i in array:
        if i > pivot:
            greater.append(i)
        else:
            lower.append(i)
    return quick_sort(lower) + [pivot] + quick_sort(greater)

"""
Nom : Creation d'un tableau
Description : Creation d'un tableau de taille size avec comme valeur de 1 a Size
Entrée : Size = Un entier
Sortie : array = Un tableau
"""
def create_array(size):
    array = []
    for i in range(size):
        array.append(size-i)
    return array

"""
Nom : Recuper Temps d'execution
Description : Recuper le temps d'execution d'un algorithme
Entrée : Un tableau et un algorithme de tri
Sortie : Le temps d'execution
"""
def get_runtime(sorting_algorithm, array):
    timeTook, result = lib.runtime(sorting_algorithm, array)
    return timeTook

"""
ouverture du fichier csv en mode écriture
"""
with open('input.csv', 'w') as f:
    time_bubble = []
    time_bubble_upgrad = []
    time_fast = []
    input_size = []
    for i in range(1,100):

        temp_array = create_array(i)

        """
        Recuperation des temps d'execution de chaque algo de tri puis ajout dans son tableau dédié
        """
        time_bubble_upgrad.append(get_runtime(bubble_sort_upgrad, temp_array))
        time_fast.append(get_runtime(quick_sort, temp_array))
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
