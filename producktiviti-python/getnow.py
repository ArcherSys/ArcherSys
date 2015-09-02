<<<<<<< HEAD
from datetime import datetime
now = datetime.now()
print("Today's Date is")
print('%s/%s/%s' % (now.month, now.day, now.year))
print("The Time is now:")
print ('%s:%s:%s' % (now.hour, now.minute, now.second))
print("SYSTEM:")
=======
from datetime import datetime
now = datetime.now()
print("Today's Date is")
print('%s/%s/%s' % (now.month, now.day, now.year))
print("The Time is now:")
print ('%s:%s:%s' % (now.hour, now.minute, now.second))
print("SYSTEM:")
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
print ('%s/%s/%s %s:%s:%s' % (now.month, now.day, now.year, now.hour, now.minute, now.second))