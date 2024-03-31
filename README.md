# misp-podman
This repository contains a templated containerized deployment for MISP that can be deployed with Ansible


## Installation

Change the BASE\_URL in `application-definition/core/misp-core.yml`

Run `sudo ./install.sh` which can be found in the application-definition.

Then start the MISP application with: 

`systemctl start misp`

To expose the MISP server start the reverse proxy:

`systemctl start misp-nginx`

## TODO
- [x] Split MISP Docker compose file into quadlets
- [x] Add NGINX reverse proxy docker container to deployment
- [x] Tie services together in systemd app
- [ ] Add example NGINX SSL termination single host
- [ ] Setup deployment with ansible instead of install script
- [ ] Template all variables in the deployment with ansible to deploy multiple instances  
- [ ] Add example NGINX SSL termination multiple hosts
