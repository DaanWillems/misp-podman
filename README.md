# misp-podman
This repository contains a templated containerized deployment for MISP that can be deployed with Ansible


## Installation

Change the hostname in `application-definition/core/misp-core.yml`

Run `sudo ./install.sh` which can be found in the application-definition.

Then create the directories

`mkdir -p /media/misp/config` </br>
`mkdir -p /media/misp/certs` </br>
`mkdir -p /media/misp/db` </br>
`mkdir -p /media/misp/files` </br>
`mkdir -p /media/misp/logs` </br>
`mkdir -p /media/misp/gnupg` </br>
`mkdir -p /media/misp/nginx-config` </br>

Then start the services with: 

`systemctl start misp-db` </br>
`systemctl start misp-redis`</br>
`systemctl start misp-modules`</br>
`systemctl start misp-core`</br>
`systemctl start misp-nginx`

## TODO
- [x] Split MISP Docker compose file into quadlets
- [x] Add NGINX reverse proxy docker container to deployment
- [ ] Add example NGINX SSL termination single host
- [ ] Tie services together in systemd app
- [ ] Setup deployment with ansible instead of install script
- [ ] Template all variables in the deployment with ansible to deploy multiple instances  
- [ ] Add example NGINX SSL termination multiple hosts
