# misp-podman
This repository contains a templated containerized deployment for MISP that can be deployed with Ansible


## Installation

Run `sudo ./install.sh` which can be found in the application-definition.
Then start the services with: 

`systemctl daemon-reload`
`systemctl start misp-db`
`systemctl start misp-core`
