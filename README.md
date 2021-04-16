# XSS-Lab

Laboratori creati da @H4t4way.  

Youtube : https://bit.ly/3s9C2Eu  
Blog : https://bit.ly/3mOebbD  
## Deploy Debian Based (Kali, Ubuntu, etc..) su Virtual Private Server(VPS)

### requisiti

- Aggiornare pacchetti  
```sudo apt update```
- Installazione PHP con Apache Web Server  
```sudo apt install php libapache2-mod-php```

### deploy
- Download repository  
```git clone https://github.com/H4t4way/XSS-Lab.git```
- Copiare il contenuto del repository in /var/www/html  
```cd XSS-Lab```  
```sudo cp * /var/www/html/```
- Riavviare Apache  
```systemctl restart apache2.service```  
oppure  
```systemctl stop apache2.service```    
```systemctl start apache2.service```  
- Ora il laboratorio è completamente configurato sull'indirizzo IP del VPS  
```hostname -I```  
