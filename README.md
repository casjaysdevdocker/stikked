## 👋 Welcome to stikked 🚀  

stikked README  
  
  
## Install my system scripts  

```shell
 sudo bash -c "$(curl -q -LSsf "https://github.com/systemmgr/installer/raw/main/install.sh")"
 sudo systemmgr --config && sudo systemmgr install scripts  
```
  
## Automatic install/update  
  
```shell
dockermgr update stikked
```
  
## Install and run container
  
```shell
dockerHome="/var/lib/srv/$USER/docker/casjaysdevdocker/stikked/stikked/latest/rootfs"
mkdir -p "/var/lib/srv/$USER/docker/stikked/rootfs"
git clone "https://github.com/dockermgr/stikked" "$HOME/.local/share/CasjaysDev/dockermgr/stikked"
cp -Rfva "$HOME/.local/share/CasjaysDev/dockermgr/stikked/rootfs/." "$dockerHome/"
docker run -d \
--restart always \
--privileged \
--name casjaysdevdocker-stikked-latest \
--hostname stikked \
-e TZ=${TIMEZONE:-America/New_York} \
-v "$dockerHome/data:/data:z" \
-v "$dockerHome/config:/config:z" \
-p 80:80 \
casjaysdevdocker/stikked:latest
```
  
## via docker-compose  
  
```yaml
version: "2"
services:
  ProjectName:
    image: casjaysdevdocker/stikked
    container_name: casjaysdevdocker-stikked
    environment:
      - TZ=America/New_York
      - HOSTNAME=stikked
    volumes:
      - "/var/lib/srv/$USER/docker/casjaysdevdocker/stikked/stikked/latest/rootfs/data:/data:z"
      - "/var/lib/srv/$USER/docker/casjaysdevdocker/stikked/stikked/latest/rootfs/config:/config:z"
    ports:
      - 80:80
    restart: always
```
  
## Get source files  
  
```shell
dockermgr download src casjaysdevdocker/stikked
```
  
OR
  
```shell
git clone "https://github.com/casjaysdevdocker/stikked" "$HOME/Projects/github/casjaysdevdocker/stikked"
```
  
## Build container  
  
```shell
cd "$HOME/Projects/github/casjaysdevdocker/stikked"
buildx 
```
  
## Authors  
  
🤖 casjay: [Github](https://github.com/casjay) 🤖  
⛵ casjaysdevdocker: [Github](https://github.com/casjaysdevdocker) [Docker](https://hub.docker.com/u/casjaysdevdocker) ⛵  
