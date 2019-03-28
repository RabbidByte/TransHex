'''
TransHex_BIN_to_TXT.py
Created on June 19, 2013
@author: Essential Exploit Labs
'''
import sys, os, socket, binascii

BINFILE = sys.argv[1]
TXTFILE = sys.argv[2]

# Function to create the new text or binary file
def make_file (file_name):
	newfile = open(file_name, 'w')
	newfile.write('')
	newfile.close()
	
	return

# Function to convert a binary file to a text file with a hex string
def bin_to_txt ():
	print BINFILE
	with open(BINFILE,"rb") as file:
		content = file.read()

	if os.path.exists(TXTFILE):
		os.remove(TXTFILE)
	
	make_file(TXTFILE)
	outputfile = open(TXTFILE,'w')
	outputfile.write((binascii.hexlify(content)))
	outputfile.close()
	
	return

# Start the main program
bin_to_txt()
