
set objshell = createobject("wscript.shell")
objshell.run "\xampp\xampp_start.exe",vbhide

objshell.run "http://localhost/rh_process/public"
