# misp-podman
This repository contains a templated containerized deployment for MISP that can be deployed with Ansible


## Installation

Run `sudo ./install.sh` which can be found in the application-definition.

Then create the directories

`mkdir -p /media/misp/config` </br>
`mkdir -p /media/misp/certs` </br>
`mkdir -p /media/misp/db` </br>
`mkdir -p /media/misp/files` </br>
`mkdir -p /media/misp/logs` </br>
`mkdir -p /media/misp/gnupg` </br>

Then start the services with: 

`systemctl start misp-db` </br>
`systemctl start misp-redis`</br>
`systemctl start misp-modules`</br>
`systemctl start misp-core`
