# magmon

A php daemon for Ubuntu to log the status of Magnificent Server

#Setup Instructions

- Clone the repo
- Change line 12 in magmon.conf to point mag_mon.php from cloned repo
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
