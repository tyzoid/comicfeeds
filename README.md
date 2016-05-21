# Comic Feeds NG
This application creates feeds from comic feeds that include the images. It does this by crawling the linked pages for images.
Please see the [blog post](http://chrisbenard.net/2013/06/28/how-to-fix-the-dilbert.com-rss-feed/) by the upstream author for more information on background and usage.

The upstream version of this software ran on Google's App Engine, but I wanted a version that I could run on my own servers.

## Installing
1. Download and install [composer](https://getcomposer.org/doc/00-intro.md) (dependency manager for PHP).
2. Run `composer install` in the application directory to download dependencies into the vendor/ directory.
3. Run `vendor/phpunit/phpunit/phpunit` to execute all tests.
4. Make the `store/` directory writable to your php process.
5. Add the site to your server. The web root should be `webroot/`
    * If you are using apache, make sure to enable the the Rewrite module and AllowOverride to be true for Rewrite.
    * If you are using nginx, be sure to add the rules specified in `webroot/.htaccess` into your nginx configuration.
6. Install the cron jobs. See [cron.md](https://github.com/tyzoid/comicfeeds/cron.md) for more details.

## Contributing
Pull requests are welcome, especially to include more comic providers. Please see the [Dilbert Service](classes/DilbertService.php) (multiple sub-feeds) and [Penny-Arcade Service](classes/PennyArcadeService.php) (single feed) for examples.

## License
This software is licensed under the GPL. See [LICENSE.md](LICENSE.md) for more information.
