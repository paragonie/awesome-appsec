# Awesome AppSec

A curated list of resources for learning about application security.

Maintained by [Paragon Initiative Enterprises](https://paragonie.com) with
contributions from the application security and developer communities.

# Contributing

This README file is dynamically generated from the `data/` directory. 
See `src/compiler.php` for more information.

# The Awesome Application Security Readling List

  * [General](#general)
    * [Articles](#articles)
      * [How to Safely Generate a Random Number](#how-to-safely-generate-a-random-number-2014) (2014)
      * [Salted Password Hashing - Doing it Right](#salted-password-hashingdoing-it-right-2014) (2014)
      * [A good idea with bad usage: /dev/urandom](#a-good-idea-with-bad-usagedev-urandom-2014) (2014)
    * [Books](#books)
      * [Web Application Hacker's Handbook](#web-application-hackers-handbook-2011) (2011)
      * [Cryptography Engineering](#cryptography-engineering-2010) (2010)
    * [Websites](#websites)
      * [Hack This Site!](#hack-this-site)
      * [Enigma Group](#enigma-group)
      * [Web App Sec Quiz](#web-app-sec-quiz)
      * [SecurePasswords.info](#securepasswords-info)
      * [Security News Feeds Cheat-Sheet](#security-news-feeds-cheat-sheet)
      * [Open Security Training](#open-security-training)
      * [Blogs](#blogs)
        * [Crypto Fails](#crypto-fails)
      * [Wiki pages](#wiki-pages)
        * [OWASP Top Ten Project](#owasp-top-ten-project)
  * [PHP](#php)
    * [Articles](#articles)
      * [It's All About Time](#its-all-about-time-2014) (2014)
      * [Secure Authentication in PHP with Long-Term Persistence](#secure-authentication-in-php-with-long-term-persistence-2015) (2015)
      * [20 Point List For Preventing Cross-Site Scripting In PHP](#20-point-list-for-preventing-cross-site-scripting-in-php-2013) (2013)
      * [25 PHP Security Best Practices For Sys Admins](#25-php-security-best-practices-for-sys-admins-2011) (2011)
      * [PHP data encryption primer](#php-data-encryption-primer-2014) (2014)
    * [Useful libraries](#useful-libraries)
      * [defuse/php-encryption](#defuse-php-encryption)
      * [ircmaxell/password_compat](#ircmaxell-password-compat)
      * [ircmaxell/RandomLib](#ircmaxell-randomlib)
    * [Websites](#websites)
      * [Blogs](#blogs)
        * [Paragon Initiative Enterprises Blog](#paragon-initiative-enterprises-blog)
        * [ircmaxell's blog](#ircmaxells-blog)
      * [Mailing lists](#mailing-lists)
        * [Securing PHP Weekly](#securing-php-weekly)


# General

## Articles

### [How to Safely Generate a Random Number](http://sockpuppet.org/blog/2014/02/25/safely-generate-random-numbers/) (2014)

Released: February 25, 2014

Advice on cryptographically secure pseudo-random number generators.

### [Salted Password Hashing - Doing it Right](https://crackstation.net/hashing-security.htm) (2014)

Released: August 6, 2014

A post on [Crackstation](https://crackstation.net), a projecy by [Defuse Security](https://defuse.ca)

### [A good idea with bad usage: /dev/urandom](http://insanecoding.blogspot.co.uk/2014/05/a-good-idea-with-bad-usage-devurandom.html) (2014)

Released: May 3, 2014

Mentions many ways to make `/dev/urandom` fail on Linux/BSD.

## Books

### [Web Application Hacker's Handbook](http://mdsec.net/wahh) (2011)

Released: September 27, 2011

Great introduction to Web Application Security; though slightly dated.

### [Cryptography Engineering](http://www.amazon.com/Cryptography-Engineering-Principles-Practical-Applications/dp/0470474246) (2010)

Released: March 15, 2010

Develops a sense of professional paranoia while presenting crypto design techniques.

## Websites

### [Hack This Site!](http://www.hackthissite.org)

Learn about application security by attempting to hack this website.

### [Enigma Group](http://www.enigmagroup.org)

Where hackers and security experts come to train.

### [Web App Sec Quiz](https://timoh6.github.io/WebAppSecQuiz/)

Self-assessment quiz for web application security

### [SecurePasswords.info](https://securepasswords.info)

Secure passwords in several languages/frameworks.

### [Security News Feeds Cheat-Sheet](http://lzone.de/cheat-sheet/Security-News-Feeds)

A list of security news sources.

### [Open Security Training](http://opensecuritytraining.info/)

Video courses on low-level x86 programming, hacking, and forensics.

### Blogs

#### [Crypto Fails](http://cryptofails.com)

Showcasing bad cryptography

### Wiki pages

#### [OWASP Top Ten Project](https://www.owasp.org/index.php/Category:OWASP_Top_Ten_Project)

The top ten most common and critical security vulnerabilities found in web applications.

# PHP

## Articles

### [It's All About Time](http://blog.ircmaxell.com/2014/11/its-all-about-time.html) (2014)

Released: November 28, 2014

A gentle introduction to timing attacks in PHP applications

### [Secure Authentication in PHP with Long-Term Persistence](https://paragonie.com/blog/2015/04/secure-authentication-php-with-long-term-persistence) (2015)

Released: April 21, 2015

Discusses password policies, password storage, "remember me" cookies, and account recovery.

### [20 Point List For Preventing Cross-Site Scripting In PHP](http://blog.astrumfutura.com/2013/04/20-point-list-for-preventing-cross-site-scripting-in-php) (2013)

Released: April 22, 2013

Padriac Brady's advice on building software that isn't vulnerable to XSS

### [25 PHP Security Best Practices For Sys Admins](http://www.cyberciti.biz/tips/php-security-best-practices-tutorial.html) (2011)

Released: November 23, 2011

Though this article is a few years old, much of its advice is still relevant as we veer around the corner towards PHP 7.

### [PHP data encryption primer](https://timoh6.github.io/2014/06/16/PHP-data-encryption-cheatsheet.html) (2014)

Released: June 16, 2014

@timoh6 explains implementing data encryption in PHP

## Useful libraries

### [defuse/php-encryption](https://github.com/defuse/php-encryption)

Symmetric-key encryption library for PHP applications. (**Recommended** over rolling your own!)

### [ircmaxell/password_compat](https://github.com/ircmaxell/password_compat)

If you're using PHP 5.3.7+ or 5.4, use this to hash passwords

### [ircmaxell/RandomLib](https://github.com/ircmaxell/RandomLib)

Useful for generating random strings or numbers

## Websites

### Blogs

#### [Paragon Initiative Enterprises Blog](https://paragonie.com/blog/)

The blog of our technology and security consulting firm based in Orlando, FL

#### [ircmaxell's blog](http://blog.ircmaxell.com)

A blog about PHP, Security, Performance and general web application development.

### Mailing lists

#### [Securing PHP Weekly](http://securingphp.com)

A weekly newsletter about PHP, security, and the community.
