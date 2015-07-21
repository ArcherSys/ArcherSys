def get_time_of_alarm():
    hours_now = int(input("This Hour:"))
    hours_in_wait = int(input("Time till alarm:"))
    hours2 = hours_now + hours_in_wait
    print str(hours2 % 24)
get_time_of_alarm()