## YOU NEED VLC FOR THIS TO WORK AND IT MUST BE IN PATH
## MAKE SURE VLC IS SET UP FOR THE CORRECT OUTPUT (RADIO)
import os
cmd = "vlc "
file_list = os.listdir("../server/data/audiofiles")
for file in file_list:
    cmd = cmd + "../server/data/audiofiles/" + file + " "
os.system(cmd)