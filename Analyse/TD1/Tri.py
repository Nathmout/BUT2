import random
import big_o

def bubble_sort(a):
    n = len(a)
    for i in range(n-1):
        for j in range(n-i-1):
            if a[j] > a[j+1]:
                a[j], a[j+1] = a[j+1], a[j]

def bubble_sort_upgrad(a):
    n = len(a)
    for i in range(n):
        swapped = False
        for j in range(n-i-1):
            if a[j] > a[j+1]:
                a[j], a[j+1] = a[j+1], a[j]
                swapped = True
        if not swapped:
            break

def bubble_sort_fast(a):
    n = len(a)
    for i in range(n):
        swapped = False
        for j in range(n-i-1):
            if a[j] > a[j+1]:
                a[j], a[j+1] = a[j+1], a[j]
                swapped = True
        if not swapped:
            break
        swapped = False
        for j in range(n-i-1, i, -1):
            if a[j] < a[j-1]:
                a[j], a[j-1] = a[j-1], a[j]
                swapped = True
        if not swapped:
            break

def main():
    a = [3, 5, 1, 2, 4]
    bubble_sort(a)
    print(a)
    a = [3, 5, 1, 2, 4]
    bubble_sort_upgrad(a)
    print(a)
    a = [3, 5, 1, 2, 4]
    bubble_sort_fast(a)
    print(a)

main()
