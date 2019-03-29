import time
from neopixel import *
import argparse

LED_COUNT       =10
LED_PIN         =18
#LED_PIN2       =21
#LED_PIN2       =21
LED_FREQ_HZ     =800000
LED_DMA         =10
LED_BRIGHTNESS  =255
LED_INVERT      =FALSE
LED_CHANNEL     =0

color = Color(255, 0, 0)
color = Color(0, 255, 0)
color = Color(0, 0, 255)
uit = Color(0, 0, 0)

def main():
        parser = argparse.ArgumentParser()
        #parser.add_argument()
        args = parser.parse_args()
        strip = Adafruit_NeoPixel(LED_COUNT, LED_PIN, LED_FREQ_HZ, LED_DMA, LED_INVERT, LED_BRIGHTNESS, LED_CHANNEL)
        #strip1 = Adafruit_NeoPixel(LED_COUNT, LED_PIN2, LED_FREQ_HZ, LED_DMA, LED_INVERT, LED_BRIGHTNESS, LED_CHANNEL)
        #strip2 = Adafruit_NeoPixel(LED_COUNT, LED_PIN3, LED_FREQ_HZ, LED_DMA, LED_INVERT, LED_BRIGHTNESS, LED_CHANNEL)

        strip.begin()
        #strip1.begin()
        #strip2.begin()

#eerste strip
                strip.setPixelColor(0, (color))
                strip.setPixelColor(1, (color))
                strip.show()
                time.sleep(100000/1000)
                strip.setPixelColor(0, (uit))
                strip.setPixelColor(1, (uit))
                strip.show()

                strip.setPixelColor(2, (color2))
                strip.setPixelColor(3, (color2))
                strip.setPixelColor(4, (color2))
                strip.setPixelColor(5, (color2))
                strip.show()
                time.sleep(100000/1000)
                strip.setPixelColor(2, (uit))
                strip.setPixelColor(3, (uit))
                strip.setPixelColor(4, (uit))
                strip.setPixelColor(5, (uit))
                strip.show()

                strip.setPixelColor(6, (color3))
                strip.setPixelColor(7, (color3))
                strip.setPixelColor(8, (color3))
                strip.setPixelColor(9, (color3))
                strip.show()
                time.sleep(100000/1000)
                strip.setPixelColor(6, (uit))
                strip.setPixelColor(7, (uit))
                strip.setPixelColor(8, (uit))
                strip.setPixelColor(9, (uit))
                strip.show()

#tweede strip
                strip1.setPixelColor(0, (color2))
                strip1.setPixelColor(1, (color2))
                strip1.show()
                time.sleep(100000/1000)
                strip1.setPixelColor(0, (uit))
                strip1.setPixelColor(1, (uit))
                strip1.show()

                strip1.setPixelColor(2, (color3))
                strip1.setPixelColor(3, (color3))
                strip1.setPixelColor(4, (color3))
                strip1.setPixelColor(5, (color3))
                strip1.show()
                time.sleep(100000/1000)
                strip1.setPixelColor(2, (uit))
                strip1.setPixelColor(3, (uit))
                strip1.setPixelColor(4, (uit))
                strip1.setPixelColor(5, (uit))
                strip1.show()

                strip1.setPixelColor(6, (color))
                strip1.setPixelColor(7, (color))
                strip1.setPixelColor(8, (color))
                strip1.setPixelColor(9, (color))
                strip1.show()
                time.sleep(100000/1000)
                strip1.setPixelColor(6, (uit))
                strip1.setPixelColor(7, (uit))
                strip1.setPixelColor(8, (uit))
                strip1.setPixelColor(9, (uit))
                strip1.show()
