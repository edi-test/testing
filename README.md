**Instructions**:
```
(I am using Ubuntu Linux)
```
**1. Access your local machine (Linux environment)**

**2. Install Docker from https://docs.docker.com/install/linux/docker-ce/ubuntu/:** 
```
$ sudo apt-get remove docker docker-engine docker.io containerd runc
$ sudo apt-get update
$ sudo apt-get install \
    apt-transport-https \
    ca-certificates \
    curl \
    gnupg-agent \
    software-properties-common
$ curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
$ sudo apt-key fingerprint 0EBFCD88
    
pub   rsa4096 2017-02-22 [SCEA]
      9DC8 5822 9FC7 DD38 854A  E2D8 8D81 803C 0EBF CD88
uid           [ unknown] Docker Release (CE deb) <docker@docker.com>
sub   rsa4096 2017-02-22 [S]
$ sudo add-apt-repository \
   "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
   $(lsb_release -cs) \
   stable"
$ sudo apt-get update
$ sudo apt-get install docker-ce docker-ce-cli containerd.io
```
```
$ sudo usermod -aG docker $USER
```
**3. Change the current working directory to the location where you want the cloned directory to be made.**

**4. Type git clone, and then paste the URL:** 
```
$ git clone https://github.com/edi-test/testing.git
```
**5. Press Enter. Your local clone will be created.**

**6. Run PHP7.2 image with redis extension (everything is already set up in Dockerfile)**
```
$ docker build -t php-fpm7.2.mysqli-redis:1.0.0 .
```
**7. Run a Docker swarm:**
```
$ docker swarm init
```
**8. Run docker deploy:**
```
$ docker stack deploy -c edi-lemp-stack.yml edi-docker-stack --with-registry-auth
```
**9. Test scripts by using curl or opening them in your browser:**
```
$ curl localhost/phpinfo.php

$ curl localhost/redis_set.php

$ curl localhost/redis_get.php

$ curl localhost/mysql_set.php

$ curl localhost/mysql_get.php
```

http://someIP/phpinfo.php

http://someIP/redis_set.php

http://someIP/redis_get.php

http://someIP/mysql_set.php

http://someIP/mysql_get.php

**10. Access PHPmyAdmin by typing this into your browser:**
```
http://someIP:8080/index.php
```
