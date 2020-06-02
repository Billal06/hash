# Author: Billal Fauzan
# Simple insert data

import mysql.connector
import threading

server = "localhost"
user = "root"
pw = ""
dbname = "hashid"

def insertTo(db, content):
	i = 0
	f = 0
	jml = len(content)
	for a in content:
		i += 1
		try:
			cur = db.cursor()
			cur.execute("INSERT INTO wordlist (id, value) VALUES (NULL, '%s')" % (a))
			db.commit()
		except Exception as e:
			f += 1
			print ("\n"+str(e))
			pass
		print ("\rLoading: %s/%s, Failed: %s" % (i, len(content), f), end="", flush=True)

file = input("Filename: ")
try:
	o = open(file, "r").read()
	db = mysql.connector.connect(host=server, user=user, passwd=pw, database=dbname)
	if db.is_connected():
		print ("Connect -> True")
		th = threading.Thread(target=insertTo, args=(db, o.splitlines()))
		th.start()
	else:
		print ("Connect -> False")
		exit()
except IOError:
	print ("File error not found -> exit")
	exit()

