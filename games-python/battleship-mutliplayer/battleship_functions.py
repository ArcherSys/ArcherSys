def askX(z =0, x = 0):
    while z < 100:
        while True:
            try:
                x = int(raw_input('1-10 Horizontal'))
                if x > 10:
                    print 'Your response was out of range!'
                    break
                else:
                    if x <= 0:
                        break
                        print 'Your response was out of range!'
                    else:
                        return x
            except ValueError:
                print 'You failed to enter a number'
            except KeyError:
                print 'You failed to enter a number'
        z += 1
 
def askY(z = 0, y = 0):
    while z < 100:
        while True:
            try:
                y = int(raw_input('1-10 vertical'))
                if y > 10:
                    print 'Your response was out of range!'
                    break
                else:
                    if y < 0:
                        break
                        print 'Your response was out of range!'
                    else:
                        return y
            except ValueError:
                print 'You failed to enter a number'
            except KeyError:
                print 'You failed to enter a number'
        z += 1
