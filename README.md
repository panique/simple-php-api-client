# simple-php-api-client

An extremely simple API client (with authentication) example, 
written in PHP on top of [Guzzle](https://github.com/guzzle/guzzle) 
(a HTTP client for PHP). This repo shows the "client", meaning the part 
that get data from an API, there's another repo 
(https://github.com/panique/simple-php-api) showing a "server", meaning 
the part that DELIVERS the data.

## What's inside ?

It's just a simple PHP file that makes an example API call,
authenticates and then echos out the JSON response. This file uses
the excellent Guzzle HTTP client (that makes it easy to perform HTTP(S)
requests in PHP with a single line of code) which will be installed
via Composer (I think you probably know how Composer works as writing 
APIs is not really a beginner task :)).

## How to install

For manual install, simply put composer.json and index.php somewhere on 
your server, install the Composer dependencies and run index.php!

For automatic installation (which will install a Ubuntu 14.04 LTS box 
including Apache, PHP etc. and perform Composer install via Vagrant)
simply do a "vagrant up" in the folder where *Vagrantfile* is.
Your application is then reachable under 192.168.33.45.

Please note that the application by default tries to get data from
192.168.33.**44** which is part of the API server repo under
(https://github.com/panique/simple-php-api).
