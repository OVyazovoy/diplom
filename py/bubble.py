import time
# import json
# from pprint import pprint


def bubble_sort(a):
    for i in reversed(range(len(a))):
        for j in range(1, i + 1):
            print(a[j]);
            if a[j-1] > a[j]:
                a[j], a[j-1] = a[j-1], a[j]

# with open('json.arrays/array_10.json') as data_file:
#     data = json.load(data_file)

t1 = time.time()
bubble_sort([22878,29326,5964,4819,29413,27374,18827,27449,22669,14503]);
print(time.time() - t1)
