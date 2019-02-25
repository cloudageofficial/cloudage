from firebase import firebase
import csv
from flask import jsonify
import json

from flask import Flask

app = Flask(__name__)

firebase = firebase.FirebaseApplication('https://cloudage-mockpanel.firebaseio.com/', None)


@app.route("/read_fb")
def read_from_fb():
    result = firebase.get('/python-sample-ed7f7/', '')
    print "reading data to database"
    print(result)
    return jsonify(result)


@app.route("/write_fb")
def write_to_fb():
    print 'started writing to db'
    with open('sms-log-AC1904056f7d4ca20b446c8f12c9fbe0d9_2018-11-26.csv') as csv_file:
        print 'reading csv file'
        csv_reader = csv.reader(csv_file, delimiter=',')
        count = 1
        for row in csv_reader:
            print ' in for loop'
            if 2 <= count <= 6:
                print' count', count
                print row
                data = {'From': row[0], 'To': row[1], 'Body': row[2]}
                result = firebase.post('/leads/', data)
                print "writing data to database successfully"
                print type(row)
                count += 1
            elif count == 1:
                count += 1
            else:
                print'break.........'
                break
    print'before return...'
    return jsonify('saved')


if __name__ == "__main__":
    app.run()
