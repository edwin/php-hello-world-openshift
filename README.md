# Deplying a Simple PHP app on top of Openshift 4

Create a very simple hello world PHP app, and deploy it into Openshift 4.

## Deploy to Openshift 4
```
$ oc new-app https://github.com/edwin/php-hello-world-openshift.git

```

## Create Route
```
$ oc create route edge --service=php-hello-world-openshift
```