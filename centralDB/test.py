from firebase import firebase
import csv
firebase = firebase.FirebaseApplication('https://cloudage-mockpanel.firebaseio.com/', None)
# result = firebase.post('/python-sample-ed7f7/Students/',data)
# print result




with open('sms-log-AC1904056f7d4ca20b446c8f12c9fbe0d9_2018-11-26.csv') as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=',')
    line_count = 0
    for row in csv_reader:
        if line_count < 5:
        #     print(f'Column names are {", ".join(row)}')
        #     line_count += 1
        # else:
        #     print(f'\t{row[0]} works in the {row[1]} department, and was born in {row[2]}.')
        #     line_count += 1
    # print(f'Processed {line_count} lines.')
            print row
          # data =  { 'Name': 'Vivek','RollNo': 1,'Percentage': 76.02}
            data = {'From':row[0], 'To':row[1],'Body':row[2]}
            result = firebase.post('/python-sample-ed7f7/Students/',data)
            print "writing data to database"
            print type(row)
            line_count +=1


result = firebase.get('/python-sample-ed7f7/Students/', '')
print "reading data to database"
print(result)
print type(result)
