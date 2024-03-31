rm -rf /etc/containers/systemd/misp/*

cp -r db /etc/containers/systemd/misp/
cp -r core /etc/containers/systemd/misp/
cp -r modules /etc/containers/systemd/misp/
cp -r redis /etc/containers/systemd/misp/
cp -r nginx /etc/containers/systemd/misp/
cp -f ./nginx/*.conf /media/misp/nginx-config/

mkdir -p /media/misp/db
mkdir -p /media/misp/config
mkdir -p /media/misp/files
mkdir -p /media/misp/certs
mkdir -p /media/misp/logs
mkdir -p /media/misp/gnupg
mkdir -p /media/misp/nginx-config

systemctl daemon-reload
