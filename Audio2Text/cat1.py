import speech_recognition as sr
#harvard = sr.AudioFile('./harvard.wav')
audioFile = sr.AudioFile('./C1.mp3')
r = sr.Recognizer()
with audioFile as source:
	audio = r.record(source)

#type(audio)
strResult=r.recognize_google(audio)
print(strResult)
