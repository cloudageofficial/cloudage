import firebase_admin
from firebase_admin import credentials
from firebase_admin import firestore
from flask import Flask

app = Flask(__name__)

cred = credentials.Certificate("talktous_key.json")
firebase_admin.initialize_app(cred)

db = firestore.client()

@app.route('/')


def user_data():
    # getting the docs

    users_ref = db.collection('CloudAge')
    docs = users_ref.get()
    for doc in docs:
        print('{} => {}'.format(doc.id, doc.to_dict()))
    return "Recorded Printed"


if __name__ == '__main__':
    app.run()


