'''
TransHex_Client.py
Created on June 19, 2013
@author: Essential Exploit Labs
'''
import sys, os, socket, binascii

BINFILE = sys.argv[2]
TXTFILE = sys.argv[1]

# Function to create the new text or binary file
def make_file (file_name):
	newfile = open(file_name, 'w')
	newfile.write('')
	newfile.close()
	return

# Function to convert a text file with a hex string to a binary file
def txt_to_bin (filename):
	with open(TXTFILE,"r") as inputfile:
		content = inputfile.read()
	
	if os.path.exists(filename):
		os.remove(filename)

	make_file(filename)
	outputfile = open(filename,'wb')
	outputfile.write((binascii.unhexlify(content)))
	outputfile.close()
	
	print 'Binary file has been created'

	return

# Start the main program
if os.path.exists(BINFILE):
	os.remove(BINFILE)
txt_to_bin(BINFILE)
