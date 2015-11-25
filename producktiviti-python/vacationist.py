<<<<<<< HEAD
<<<<<<< HEAD
def hotel_cost(nights):
    return 140 * nights
def plane_ride_cost(city):
    if city == "Charlotte":
        return 183
    elif city == "Tampa":
        return 220
    elif city == "Pittsburgh" :
        return 222
    elif city == "Los Angeles":
        return 475
def rental_car_cost(days):
    cost = 40 * days
    if days >= 7:
        cost -= 50
    elif days >= 3:
        cost -= 20
    return cost
def trip_cost(city, days, spending_money):
  return  rental_car_cost(days) + hotel_cost(days) + plane_ride_cost(city)+spending_money
print(trip_cost(int(input("City")), int(input("Days")), int(input("Money"))
)
)
=======
def hotel_cost(nights):
    return 140 * nights
def plane_ride_cost(city):
    if city == "Charlotte":
        return 183
    elif city == "Tampa":
        return 220
    elif city == "Pittsburgh" :
        return 222
    elif city == "Los Angeles":
        return 475
def rental_car_cost(days):
    cost = 40 * days
    if days >= 7:
        cost -= 50
    elif days >= 3:
        cost -= 20
    return cost
def trip_cost(city, days, spending_money):
  return  rental_car_cost(days) + hotel_cost(days) + plane_ride_cost(city)+spending_money
print(trip_cost(int(input("City")), int(input("Days")), int(input("Money"))
)
)
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
def hotel_cost(nights):
    return 140 * nights
def plane_ride_cost(city):
    if city == "Charlotte":
        return 183
    elif city == "Tampa":
        return 220
    elif city == "Pittsburgh" :
        return 222
    elif city == "Los Angeles":
        return 475
def rental_car_cost(days):
    cost = 40 * days
    if days >= 7:
        cost -= 50
    elif days >= 3:
        cost -= 20
    return cost
def trip_cost(city, days, spending_money):
  return  rental_car_cost(days) + hotel_cost(days) + plane_ride_cost(city)+spending_money
print(trip_cost(int(input("City")), int(input("Days")), int(input("Money"))
)
)
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
