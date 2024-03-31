echo "[+] Removing old systemd services"
rm -rf /etc/containers/systemd/misp/*
rm -rf /etc/systemd/system/misp.service*

echo "[+] Installing systemd services"
cp -r application-definition/misp.service /etc/systemd/system/misp.service
cp -r application-definition/network /etc/containers/systemd/misp/
cp -r application-definition/db /etc/containers/systemd/misp/
cp -r application-definition/core /etc/containers/systemd/misp/
cp -r application-definition/modules /etc/containers/systemd/misp/
cp -r application-definition/redis /etc/containers/systemd/misp/
cp -r application-definition/nginx /etc/containers/systemd/misp/
cp -f application-definition/./nginx/*.conf /media/misp/nginx-config/

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
