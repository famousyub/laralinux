import requests








import requests

url = "http://localhost:8082/famousme/api/auth"

payload={'server_key': '5119e950c9496e9ee5e80bbf2a411160',
'username': 'admin',
'password': '123456784'}
files=[

]
headers = {}

response = requests.request("POST", url, headers=headers, data=payload, files=files)

print(response.text)


con ="""
url = "http://localhost:8012/wowonder/api/group_chat?access_token=699f6fa46ae7fa689ca3361b1d87bf82abf75c846e4e77a2cc19ce693ae991a7738d09f240619800e0be0edcb00cc770525f1400c1666b0f"

payload={'server_key': 'eee8aee71536427efb69a36f74239138',
'type': 'create',
'group_name': 'group_API_2',
'parts': '2,3,4'}
files=[
  ('avatar',('file',open('/path/to/file','rb'),'application/octet-stream'))
]
headers = {}

response = requests.request("POST", url, headers=headers, data=payload, files=files)

print(response.text)
"""