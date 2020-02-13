#!/bin/bash

# how to run all images in the images/ folder automatically


gsettings set org.gnome.eog.fullscreen seconds 15
eog --slide-show images/
