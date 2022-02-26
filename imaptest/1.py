import easyimap as e

emailid = 'automailclient0@gmail.com'

password = 'automailproject015'

server = e.connect("imap.gmail.com",emailid,password)

listids = server.listids()

email = server.mail(listids[3])

print(email.body)