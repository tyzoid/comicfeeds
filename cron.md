# Cron
The following endpoints should be added to a cron job to be fetched about every two hours.
The timing doesn't matter too much, however more frequently just wastes resources and less frequently takes longer to update the feed.
Feel free to set these however you want.

A preformatted crontab with the default 2 hours is provided below. Simply replace the domain name with a location accessable from the machine running the cron jobs.

## Endpoints
* /fetch/dilbert
* /fetch/pennyarcade
* /fetch/wtduck
* /fetch/doonesbury
* /fetch/pvp
* /fetch/tabletitans

# Preformatted Crontab
    0 */2 * * * wget "http://www.example.com/fetch/dilbert" >/dev/null 2>&1
    0 */2 * * * wget "http://www.example.com/fetch/pennyarcade" >/dev/null 2>&1
    0 */2 * * * wget "http://www.example.com/fetch/wtduck" >/dev/null 2>&1
    0 */2 * * * wget "http://www.example.com/fetch/doonesbury" >/dev/null 2>&1
    0 */2 * * * wget "http://www.example.com/fetch/pvp" >/dev/null 2>&1
    0 */2 * * * wget "http://www.example.com/fetch/tabletitans" >/dev/null 2>&1
