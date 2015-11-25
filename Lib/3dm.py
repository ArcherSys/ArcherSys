class Point3D(object):
    def __init__(self, x, y, z):
        self.x = x
        self.y = y
        self.z = z
    def __repr__(self):
        return "(%d, %d, %d)" % (self.x,self.y,self.z)
        
my_point = Point3D(x=1,y=2,z=3)
print my_point
        
