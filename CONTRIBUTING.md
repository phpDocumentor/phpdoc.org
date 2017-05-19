phpDocumentor website contributing guide
========================================

Setting Up Your Development Environment
---------------------------------------

In order to set up a development environment, you have to have docker and docker-compose.

See <https://docs.docker.com/compose/install/> for installation instructions.

Make sure you add the following to your /etc/hosts file

    127.0.0.1 dev.phpdoc.org

Then, from the project root run 
    
    docker-compose up -d

The website will be available at 
<http://dev.phpdoc.org:8000>
