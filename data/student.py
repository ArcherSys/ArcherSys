<<<<<<< HEAD
<<<<<<< HEAD
lloyd = {
    "name": "Lloyd",
    "homework": [90.0, 97.0, 75.0, 92.0],
    "quizzes": [88.0, 40.0, 94.0],
    "tests": [75.0, 90.0]
}
alice = {
    "name": "Alice",
    "homework": [100.0, 92.0, 98.0, 100.0],
    "quizzes": [82.0, 83.0, 91.0],
    "tests": [89.0, 97.0]
}
tyler = {
    "name": "Tyler",
    "homework": [0.0, 87.0, 75.0, 22.0],
    "quizzes": [0.0, 75.0, 78.0],
    "tests": [100.0, 100.0]
}

# Add your function below!
def average(numbers):
    total = sum(numbers)
    total = float(total)
    return total/len(numbers)
    
def get_average(student):
     homework = average(student["homework"])
     quizzes = average(student["quizzes"])
     tests = average(student["tests"])
     homework_weight = 0.1 * homework
     quizzes_weight = 0.3 * quizzes
     tests_average = 0.6 * tests
     return homework_weight + quizzes_weight + tests_average
     
def get_letter_grade(score):
 if score >= 90:
    return "A"
 elif score >= 80:
    return "B"
 elif score >= 70:
     return "C"
 elif score >= 60:
     return "D"
 else:
     return "F"
def get_class_average(students):
    results = []
    for student in students:
     results.append(get_average(student))
    return average(results)
    
students = [lloyd, alice, tyler]
print(get_average(alice))
print(get_letter_grade(69))
print(get_class_average(students))
print(get_letter_grade(get_class_average(students)))
=======
lloyd = {
    "name": "Lloyd",
    "homework": [90.0, 97.0, 75.0, 92.0],
    "quizzes": [88.0, 40.0, 94.0],
    "tests": [75.0, 90.0]
}
alice = {
    "name": "Alice",
    "homework": [100.0, 92.0, 98.0, 100.0],
    "quizzes": [82.0, 83.0, 91.0],
    "tests": [89.0, 97.0]
}
tyler = {
    "name": "Tyler",
    "homework": [0.0, 87.0, 75.0, 22.0],
    "quizzes": [0.0, 75.0, 78.0],
    "tests": [100.0, 100.0]
}

# Add your function below!
def average(numbers):
    total = sum(numbers)
    total = float(total)
    return total/len(numbers)
    
def get_average(student):
     homework = average(student["homework"])
     quizzes = average(student["quizzes"])
     tests = average(student["tests"])
     homework_weight = 0.1 * homework
     quizzes_weight = 0.3 * quizzes
     tests_average = 0.6 * tests
     return homework_weight + quizzes_weight + tests_average
     
def get_letter_grade(score):
 if score >= 90:
    return "A"
 elif score >= 80:
    return "B"
 elif score >= 70:
     return "C"
 elif score >= 60:
     return "D"
 else:
     return "F"
def get_class_average(students):
    results = []
    for student in students:
     results.append(get_average(student))
    return average(results)
    
students = [lloyd, alice, tyler]
print(get_average(alice))
print(get_letter_grade(69))
print(get_class_average(students))
print(get_letter_grade(get_class_average(students)))
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
lloyd = {
    "name": "Lloyd",
    "homework": [90.0, 97.0, 75.0, 92.0],
    "quizzes": [88.0, 40.0, 94.0],
    "tests": [75.0, 90.0]
}
alice = {
    "name": "Alice",
    "homework": [100.0, 92.0, 98.0, 100.0],
    "quizzes": [82.0, 83.0, 91.0],
    "tests": [89.0, 97.0]
}
tyler = {
    "name": "Tyler",
    "homework": [0.0, 87.0, 75.0, 22.0],
    "quizzes": [0.0, 75.0, 78.0],
    "tests": [100.0, 100.0]
}

# Add your function below!
def average(numbers):
    total = sum(numbers)
    total = float(total)
    return total/len(numbers)
    
def get_average(student):
     homework = average(student["homework"])
     quizzes = average(student["quizzes"])
     tests = average(student["tests"])
     homework_weight = 0.1 * homework
     quizzes_weight = 0.3 * quizzes
     tests_average = 0.6 * tests
     return homework_weight + quizzes_weight + tests_average
     
def get_letter_grade(score):
 if score >= 90:
    return "A"
 elif score >= 80:
    return "B"
 elif score >= 70:
     return "C"
 elif score >= 60:
     return "D"
 else:
     return "F"
def get_class_average(students):
    results = []
    for student in students:
     results.append(get_average(student))
    return average(results)
    
students = [lloyd, alice, tyler]
print(get_average(alice))
print(get_letter_grade(69))
print(get_class_average(students))
print(get_letter_grade(get_class_average(students)))
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
 