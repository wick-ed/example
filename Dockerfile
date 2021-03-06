################################################################################
# Dockerfile for appserver.io example application
################################################################################

# base image
FROM wagner83104/dist:1.1.1-alpha10

################################################################################

# author
MAINTAINER Tim Wagner <tw@appserver.io>

################################################################################

# add the sources to a temporary folder
ADD . /tmp/example

################################################################################

# install composer dependencies
RUN cd /tmp/example \
    && composer install --prefer-dist --no-dev --no-interaction --optimize-autoloader \
    && mkdir /opt/appserver/webapps \
    && mv /tmp/example/src /opt/appserver/webapps/example

################################################################################

# define default command
ENTRYPOINT ["/usr/bin/supervisord"]