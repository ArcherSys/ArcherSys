from datetime import datetime
now = datetime.now()
print("Today's Date is")
print('%s/%s/%s' % (now.month, now.day, now.year))
print("The Time is now:")
print ('%s:%s:%s' % (now.hour, now.minute, now.second))
print("SYSTEM:")
print ('%s/%s/%s %s:%s:%s' % (now.month, now.day, now.year, now.hour, now.minute, now.second))