# Cron
The following endpoints should be added to a cron job to be fetched about every two hours.
The timing doesn't matter too much, however more frequently just wastes resources and less frequently takes longer to update the feed.
Feel free to set these however you want.

A preformatted crontab with the default 2 hours is provided below.

## Endpoints
* /fetch/dilbert
* /fetch/pennyarcade
* /fetch/wtduck
* /fetch/doonesbury
* /fetch/pvp
* /fetch/tabletitans

# Preformatted Crontab
    0 */2 * * * bash /path/to/fetch_comics.sh
