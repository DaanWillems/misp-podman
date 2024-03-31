echo "[+] Removing old systemd services"
rm -rf /etc/containers/systemd/misp/*
rm -rf /etc/systemd/system/misp.service*

echo "[+] Installing systemd services"
cp -r misp.service /etc/systemd/system/misp.service
cp -r network /etc/containers/systemd/misp/
cp -r db /etc/containers/systemd/misp/
cp -r core /etc/containers/systemd/misp/
cp -r modules /etc/containers/systemd/misp/
cp -r redis /etc/containers/systemd/misp/
cp -r nginx /etc/containers/systemd/misp/
cp -f ./nginx/*.conf /media/misp/nginx-config/

echo "[+] Creating directories"
mkdir -p /media/misp/db
mkdir -p /media/misp/config
mkdir -p /media/misp/files
mkdir -p /media/misp/certs
mkdir -p /media/misp/logs
mkdir -p /media/misp/gnupg
mkdir -p /media/misp/nginx-config

echo "[+] Reloading systemd services"
systemctl daemon-reload


echo "[+] Installation succesful!"
