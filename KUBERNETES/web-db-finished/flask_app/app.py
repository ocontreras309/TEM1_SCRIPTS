from flask import Flask, render_template
from flask_mysqldb import MySQL

import MySQLdb.cursors
import json

app = Flask(__name__)

app.config['MYSQL_HOST'] = 'web-db-service'
app.config['MYSQL_USER'] = 'example_user'
app.config['MYSQL_PASSWORD'] = 'mysql'
app.config['MYSQL_DB'] = 'example'
app.config['MYSQL_PORT'] = 8306

mysql = MySQL(app)

@app.route('/', methods=['GET'])
def student_list_json():
    cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
    cursor.execute('SELECT * FROM student')
    data = cursor.fetchall()
    return json.dumps(data)

@app.route('/studentlist', methods=['GET'])
def student_list():
    cursor = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
    cursor.execute('SELECT * FROM student')
    data = cursor.fetchall()
    return render_template('list.html', students=data)

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=81, debug=True)
