from subprocess import check_output
import sys,os
if len(sys.argv)<2:
    print("provide the required Parameter")
    exit(1)
printer_name = sys.argv[1]
command  = 'RUNDLL32 PRINTUI.DLL,PrintUIEntry /y /n "{}"'.format(printer_name)
print(printer_name)
#check_output('RUNDLL32 PRINTUI.DLL,PrintUIEntry /y /n "Microsoft Print To PDF"', shell=True)
check_output(command,shell=True)
