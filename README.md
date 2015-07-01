# magmon

A php daemon for Ubuntu to log the status of Magnificent Server

#What is it for?

I have written magmon to monitor the health of Magnificent Server on an Ubuntu machine. I used Ubuntu's internal event-based tool Upstart (http://upstart.ubuntu.com/getting-started.html GPL license) to run a PHP script as a service as descriped below in the Run the service section.

When run, the service will output the status of the server (Server is UP if 200 OK || Server is Down if 500) in a log file you can specify, slong with the timestamp.

#Setup Instructions

- Clone the repo
- Change line 12 in magmon.conf to point to mag_mon.php from cloned repo
- Change line 11 in magmon.php to output log info to your specified log location
- Place magmon.conf in /etc/init
- Restart server
- Start Magnificent server (python server.py)

#Run the service

*Start 

sudo service magmon start

*Stop

sudo service magmon stop

*Status

sudo service magmon status
