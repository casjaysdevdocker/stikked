## 👋 Welcome to pastebin 🚀  

 bash pastebin client  
  
  
## Install my system scripts  

```shell
 sudo bash -c "$(curl -q -LSsf "https://github.com/systemmgr/installer/raw/main/install.sh")"
 sudo systemmgr --config && sudo systemmgr install scripts  
```
  
## Automatic install/update  
  
```shell
dockermgr update pastebin
```
  
## Install and run container
  
```shell
mkdir -p "$HOME/.local/share/srv/docker/pastebin/rootfs"
git clone "https://github.com/dockermgr/pastebin" "$HOME/.local/share/CasjaysDev/dockermgr/pastebin"
cp -Rfva "$HOME/.local/share/CasjaysDev/dockermgr/pastebin/rootfs/." "$HOME/.local/share/srv/docker/pastebin/rootfs/"
docker run -d \
--restart always \
--privileged \
--name casjaysdevdocker-pastebin \
--hostname pastebin \
-e TZ=${TIMEZONE:-America/New_York} \
-v "$HOME/.local/share/srv/docker/casjaysdevdocker-pastebin/rootfs/data:/data:z" \
-v "$HOME/.local/share/srv/docker/casjaysdevdocker-pastebin/rootfs/config:/config:z" \
-p 80:80 \
casjaysdevdocker/pastebin:latest
```
  
## via docker-compose  
  
```yaml
version: "2"
services:
  ProjectName:
    image: casjaysdevdocker/pastebin
    container_name: casjaysdevdocker-pastebin
    environment:
      - TZ=America/New_York
      - HOSTNAME=pastebin
    volumes:
      - "$HOME/.local/share/srv/docker/casjaysdevdocker-pastebin/rootfs/data:/data:z"
      - "$HOME/.local/share/srv/docker/casjaysdevdocker-pastebin/rootfs/config:/config:z"
    ports:
      - 80:80
    restart: always
```
  
## Get source files  
  
```shell
dockermgr download src casjaysdevdocker/pastebin
```
  
OR
  
```shell
git clone "https://github.com/casjaysdevdocker/pastebin" "$HOME/Projects/github/casjaysdevdocker/pastebin"
```
  
## Build container  
  
```shell
cd "$HOME/Projects/github/casjaysdevdocker/pastebin"
buildx 
```
  
## Authors  
  
🤖 casjay: [Github](https://github.com/casjay) 🤖  
⛵ casjaysdevdocker: [Github](https://github.com/casjaysdevdocker) [Docker](https://hub.docker.com/u/casjaysdevdocker) ⛵  
