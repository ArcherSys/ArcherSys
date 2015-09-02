<<<<<<< HEAD
import image
def double(oldimage):
    oldw = oldimage.getWidth()
    oldh = oldimage.getHeight()

    newim = image.EmptyImage(oldw * 2, oldh * 2)
    for row in range(oldh):
        for col in range(oldw):
            oldpixel = oldimage.getPixel(col, row)

            newim.setPixel(2*col, 2*row, oldpixel)
            newim.setPixel(2*col+1, 2*row, oldpixel)
            newim.setPixel(2*col, 2*row+1, oldpixel)
            newim.setPixel(2*col+1, 2*row+1, oldpixel)

    return newim
def converGrayScale(oldimage):
    for row in range(oldimg.getHeight()):
         for col in range(oldimg.getWidth()):
            p = oldimg.getPixel(col, row)

            newred = 255 - p.getRed()
            newgreen = 255 - p.getGreen()
            newblue = 255 - p.getBlue()

            newpixel = image.Pixel(newred, newgreen, newblue)

            oldimg.setPixel(col, row, newpixel)
    return oldimage
def pixelMapper(oldimage, rgbFunction):
    width = oldimage.getWidth()
    height = oldimage.getHeight()
    newim = image.EmptyImage(width, height)

    for row in range(height):
        for col in range(width):
            originalpixel = oldimage.getPixel(col, row)
            newpixel = rgbFunction(originalpixel)
            newim.setPixel(col, row, newpixel)

    return newim
def graypixel(oldpixel):
    intensitysum = oldpixel.getRed() + oldpixel.getGreen() + oldpixel.getBlue()
    aveRGB = intensitysum // 3
    newPixel = image.Pixel(aveRGB, aveRGB, aveRGB)
    return newPixel
	
def convertSepia(input_image):
    sepia_image = image.EmptyImage(input_image.getWidth(), input_image.getHeight())

    for col in range(input_image.getWidth()):
        for row in range(input_image.getHeight()):
            p = input_image.getPixel(col, row)

            red = ((p.getRed() * 0.393) + (p.getGreen() * 0.769) + (p.getBlue() * 0.189))

            green  = ((p.getRed() * 0.349) + (p.getGreen() * 0.686) + (p.getBlue() * 0.168))

            blue   = ((p.getRed() * 0.272) + (p.getGreen() * 0.534) + (p.getBlue() * 0.131))



            newpixel = image.Pixel(red, green, blue)
            sepia_image.setPixel(col, row, newpixel)
=======
import image
def double(oldimage):
    oldw = oldimage.getWidth()
    oldh = oldimage.getHeight()

    newim = image.EmptyImage(oldw * 2, oldh * 2)
    for row in range(oldh):
        for col in range(oldw):
            oldpixel = oldimage.getPixel(col, row)

            newim.setPixel(2*col, 2*row, oldpixel)
            newim.setPixel(2*col+1, 2*row, oldpixel)
            newim.setPixel(2*col, 2*row+1, oldpixel)
            newim.setPixel(2*col+1, 2*row+1, oldpixel)

    return newim
def converGrayScale(oldimage):
    for row in range(oldimg.getHeight()):
         for col in range(oldimg.getWidth()):
            p = oldimg.getPixel(col, row)

            newred = 255 - p.getRed()
            newgreen = 255 - p.getGreen()
            newblue = 255 - p.getBlue()

            newpixel = image.Pixel(newred, newgreen, newblue)

            oldimg.setPixel(col, row, newpixel)
    return oldimage
def pixelMapper(oldimage, rgbFunction):
    width = oldimage.getWidth()
    height = oldimage.getHeight()
    newim = image.EmptyImage(width, height)

    for row in range(height):
        for col in range(width):
            originalpixel = oldimage.getPixel(col, row)
            newpixel = rgbFunction(originalpixel)
            newim.setPixel(col, row, newpixel)

    return newim
def graypixel(oldpixel):
    intensitysum = oldpixel.getRed() + oldpixel.getGreen() + oldpixel.getBlue()
    aveRGB = intensitysum // 3
    newPixel = image.Pixel(aveRGB, aveRGB, aveRGB)
    return newPixel
	
def convertSepia(input_image):
    sepia_image = image.EmptyImage(input_image.getWidth(), input_image.getHeight())

    for col in range(input_image.getWidth()):
        for row in range(input_image.getHeight()):
            p = input_image.getPixel(col, row)

            red = ((p.getRed() * 0.393) + (p.getGreen() * 0.769) + (p.getBlue() * 0.189))

            green  = ((p.getRed() * 0.349) + (p.getGreen() * 0.686) + (p.getBlue() * 0.168))

            blue   = ((p.getRed() * 0.272) + (p.getGreen() * 0.534) + (p.getBlue() * 0.131))



            newpixel = image.Pixel(red, green, blue)
            sepia_image.setPixel(col, row, newpixel)
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
    return sepia_image