from flask import Flask, render_template, flash, redirect, url_for, session, request, logging
from flask_mysqldb import MySQL
from wtforms import Form, StringField, TextAreaField, PasswordField, validators

app = Flask(__name__)

app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = 'Wwyan107'
app.config['MYSQL_DB'] = 'contact'
app.config['MYSQL_CURSORCLASS'] = 'DictCursor'
mysql = MySQL(app)


@app.route('/contact', methods=['GET', 'POST'])
def contact():
    if request.method == 'POST':
        firstname = request.form["firstname"]
        lastname = request.form["lastname"]
        email = request.form["email"]
        message = request.form["message"]
        cur = mysql.connection.cursor()

        result = cur.execute("INSERT INTO info (firstname, lastname, email, message) VALUES (%s, %s, %s, %s)", (firstname, lastname, email, message))
        mysql.connection.commit()

        cur.close()
    return render_template('contact.html')


if __name__ == '__main__':
    app.run(debug=True)
