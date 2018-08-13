# etcd-php-sample

## install dependencies:

```composer install```

## run with telepresence against a kubernetes cluster

* have a demo etcd cluster named "example-etcd-cluster"
	(see etcd-operator: https://github.com/coreos/etcd-operator)

* install telepresence: https://www.telepresence.io

* have your kubectl configured to the desired cluster

### cli client

```telepresence --run ./vendor/linkorb/etcd-php/bin/etcd-php  etcd:set /foo/bar "Hello world" example-etcd-cluster:2379```
```telepresence --run ./vendor/linkorb/etcd-php/bin/etcd-php  etcd:get /foo/bar example-etcd-cluster:2379```

more commands: https://github.com/linkorb/etcd-php

### php client

* run ```telepresence --run php main.php```


## run locally

### build and run local etcd:
```git clone https://github.com/coreos/etcd.git
cd etcd
./build
./bin/etcd```
