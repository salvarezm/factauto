from flask import Flask, jsonify, request
import logging
import pyodbc
app = Flask(__name__) 

logging.basicConfig(
	level=logging.DEBUG, 
	filename='api.log',
	format='%(asctime)s.%(msecs)03d %(levelname)s %(module)s - %(funcName)s: %(message)s',
    datefmt='%Y-%m-%d %H:%M:%S',)


@app.route("/login", methods=['POST']) 
def login(): 
	body = request.get_json()

	if('username' not in body or 'password' not in body):
		return jsonify({}),400

	username = body['username']
	password = body['password']

	cursor = getCursor();
	query = '''select role from usuarios
				where username = ? and password = ?'''
	cursor.execute(query,username,password)

	result = cursor.fetchone()

	resp ={
		"status": "error",
		"role": "none"
	}

	if result == None:
		#error
		resp['status'] = "error"
	else:
		#exito
		resp['status'] = "success"
		resp['role'] = result[0]
		


	logging.info('login exitoso')
	response = jsonify(resp)	
	return response, 200

@app.route("/respuestas", methods=['GET']) 
def respuestas(): 



	cursor = getCursor();
	query = '''SELECT username, fecha_respuesta, resp1, resp2, resp3 FROM respuesta'''
	cursor.execute(query)

	respuestas = cursor.fetchall()

	resp = {
		"respuestas" : []
	}
	for row in respuestas:
		resp["respuestas"].append({
			"username": row[0],
			"fecha_respuesta": row[1],
			"resp1": row[2],
			"resp2": row[3],
			"resp3": row[4]
			})
	
	return jsonify(resp),200


@app.route("/responder", methods=['POST']) 
def responder(): 
    return "ha respondido" 

def getCursor():
    cnxn = pyodbc.connect('DRIVER={ODBC Driver 17 for SQL Server};SERVER=localhost;DATABASE=factauto;UID=sa;PWD=Newit12345678')
    cursor = cnxn.cursor()
    return cursor

app.run(host='0.0.0.0') 