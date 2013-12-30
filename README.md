seoxray
=======

Seoxray is a detection script which...well...detect anything:  visitors, scrapers and bots like google bot, bing bot, etc.


usage
=====

The script is quite easy to read and it's commented. 

Every visit, will send you an email detailing :

* Referring url (if populated)
* user agent
* remote IP address
* Country of the visitor
* query string used for the visit (if available)


It's intended as a learning tool: monitoring spiders and users alike, it's important for Technical SEOs and developers.

I've used it as index.php for a newly registered domain and then i've tried to send every possible crawler like:

* google+ (just add a link to your site)
* facebook debugger
* pingomatic.com

Try it too!


Warnings 
========

* Don't use it on popular pages, otherwise you may be flooded by emails
* Depending on the configuration of your server, some mail systems (eg: Gmail) my mark the email as spam. 
