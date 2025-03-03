# WAP

![WAP screenshot](docs/wap.png)

An experimental PHP website of WAP technology from the 2000s

## Debian based WAP gateway installation

`sudo apt update && sudo apt install kannel`

./htaccess :

```
# MIME Types for WAP
AddType text/vnd.wap.wml .wml
AddType image/vnd.wap.wbmp .wbmp
AddType application/vnd.wap.wmlc .wmlc
AddType text/vnd.wap.wmlscript .wmls
AddType application/vnd.wap.wmlscriptc .wmlsc
AddType application/xhtml+xml .xhtml
```
