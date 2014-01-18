# Ecommerce Sandbox


## Install

```
git clone git@github.com:ecommerce/ecommerce-sandbox.git sandbox
cd sandbox
composer install
```

## Setup database

```
sf doctrine:database:create
sf doctrine:phpcr:init:dbal
sf doctrine:phpcr:workspace:create default
sf doctrine:phpcr:repository:init
sf doctrine:schema:update --force
```