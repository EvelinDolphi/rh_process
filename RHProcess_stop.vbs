
set objshell = createobject("wscript.shell")
objshell.run "\xampp\xampp_stop.exe",vbhide

objshell.run "http://localhost/rh_process/public"
