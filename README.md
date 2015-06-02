Litwicki ChargifyBundle
===

A bundle intending to seamlessly integrate to [Chargify](http://chargify.com) via their Api.

Modern architecture along with support for both API v1 and API v2, this bundle aims to satisfy the needs of managing all the facets of your billing system in a RESTful manner.

Most importantly, the abstraction of Models and Handlers for each Api component give you significant flexibility in managing your business rules separately from the API layer.

## Setup

Installation and configuration requires three simple steps.

### 1. Download the bundle

    $ composer require "litwicki/chargify-bundle"

### 2. Enable the bundle

    // app/AppKernel.php
    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                // ...
                new Litwicki\Bundle\ChargifyBundle\ChargifyBundle(),
            );

            // ...
        }
    }

### 3. Configure the bundle

    # app/config/config.yml
    chargify:
        test_mode: false
        data_format: json
        route_prefix: /chargify
        domain: ~
        api_key: ~
        shared_key: ~

Optionally, you can include integration for [Chargify Direct](https://docs.chargify.com/api-call) (API V2)
        
        # app/config/config.yml
        chargify:
            direct:
                api_id: ~
                api_secret: ~
                api_password: ~

