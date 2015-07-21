import datetime
name = input("What is your name?")
age = input("What is your Age?")
yrs_to_100 = (100 - int(age))
answer = (datetime.datetime.today().year + yrs_to_100)
print(name + " You will be a 100 in:" + str(answer))