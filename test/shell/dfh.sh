#!/bin/bash
df | grep 'osxfs' | awk '{ print $5 }' | sed 's/%//'