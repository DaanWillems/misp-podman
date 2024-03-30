rm -rf /etc/containers/systemd/misp/*
cp -r db /etc/containers/systemd/misp/
cp -r core /etc/containers/systemd/misp/
cp -r modules /etc/containers/systemd/misp/
cp -r redis /etc/containers/systemd/misp/
mkdir -p /media/misp/db
mkdir -p /media/misp/config
systemctl daemon-reload
