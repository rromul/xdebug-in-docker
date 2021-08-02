# Debug php scripts running in Docker

Open port 9003/tcp in firewall:

`sudo ufw allow 9003/tcp`

Run the app:

`docker-compose up -d`

## Debugging in VS Code
To debug app place breakpoint in index.php and run debug config "Listen for Xdebug".