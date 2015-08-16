# Awesome AppSec [![Awesome](https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/sindresorhus/awesome)

A curated list of resources for learning about application security. Contains books,
websites, blog posts, and self-assessment quizzes.

Maintained by [Paragon Initiative Enterprises](https://paragonie.com) with
contributions from the application security and developer communities. We also
have [other community projects](https://paragonie.com/projects) which might be
useful for tomorrow's application security experts.

If you are an absolute beginner to the topic of software security, you may benefit
from reading [A Gentle Introduction to Application Security](https://paragonie.com/blog/2015/08/gentle-introduction-application-security).

# Contributing

[Please refer to the contributing guide for details](CONTRIBUTING.md).

# Application Security Learning Resources


  * [General](#general)
    * [Articles](#articles)
      * [How to Safely Generate a Random Number](#how-to-safely-generate-a-random-number-2014) (2014)
      * [Salted Password Hashing - Doing it Right](#salted-password-hashing-doing-it-right-2014) (2014)
      * [A good idea with bad usage: /dev/urandom](#a-good-idea-with-bad-usage-devurandom-2014) (2014)
      * [Why Invest in Application Security?](#why-invest-in-application-security-2015) (2015)
    * [Books](#books)
      * [Web Application Hacker's Handbook](#-web-application-hackers-handbook-2011) (2011) ![nonfree](img/nonfree.png)
      * [Cryptography Engineering](#-cryptography-engineering-2010) (2010) ![nonfree](img/nonfree.png)
      * [Gray Hat Python: Programming for Hackers and Reverse Engineers](#-gray-hat-python-programming-for-hackers-and-reverse-engineers-2009) (2009) ![nonfree](img/nonfree.png)
      * [The Art of Software Security Assessment: Identifying and Preventing Software Vulnerabilities](#-the-art-of-software-security-assessment-identifying-and-preventing-software-vulnerabilities-2006) (2006) ![nonfree](img/nonfree.png)
      * [C Interfaces and Implementations: Techniques for Creating Reusable Software](#-c-interfaces-and-implementations-techniques-for-creating-reusable-software-1996) (1996) ![nonfree](img/nonfree.png)
      * [Reversing: Secrets of Reverse Engineering](#-reversing-secrets-of-reverse-engineering-2005) (2005) ![nonfree](img/nonfree.png)
      * [JavaScript: The Good parts](#-javascript-the-good-parts-2008) (2008) ![nonfree](img/nonfree.png)
      * [Windows Internals: Including Windows Server 2008 and Windows Vista, Fifth Edition ](#-windows-internals-including-windows-server-2008-and-windows-vista-fifth-edition-2007) (2007) ![nonfree](img/nonfree.png)
      * [The Mac Hacker's Handbook](#-the-mac-hackers-handbook-2009) (2009) ![nonfree](img/nonfree.png)
      * [The IDA Pro Book: The Unofficial Guide to the World's Most Popular Disassembler](#-the-ida-pro-book-the-unofficial-guide-to-the-worlds-most-popular-disassembler-2008) (2008) ![nonfree](img/nonfree.png)
      * [Internetworking with TCP/IP Vol. II: ANSI C Version: Design, Implementation, and Internals (3rd Edition)](#-internetworking-with-tcpip-vol-ii-ansi-c-version-design-implementation-and-internals-3rd-edition-1998) (1998) ![nonfree](img/nonfree.png)
      * [Network Algorithmics,: An Interdisciplinary Approach to Designing Fast Networked Devices](#-network-algorithmics-an-interdisciplinary-approach-to-designing-fast-networked-devices-2004) (2004) ![nonfree](img/nonfree.png)
      * [Computation Structures (MIT Electrical Engineering and Computer Science)](#-computation-structures-mit-electrical-engineering-and-computer-science-1989) (1989) ![nonfree](img/nonfree.png)
      * [Surreptitious Software: Obfuscation, Watermarking, and Tamperproofing for Software Protection](#-surreptitious-software-obfuscation-watermarking-and-tamperproofing-for-software-protection-2009) (2009) ![nonfree](img/nonfree.png)
      * [Secure Programming HOWTO](#secure-programming-howto-2015) (2015)
    * [Classes](#classes)
      * [Offensive Computer Security (CIS 4930) FSU](#offensive-computer-security-cis-4930-fsu)
      * [Hack Night](#hack-night)
    * [Websites](#websites)
      * [Hack This Site!](#hack-this-site)
      * [Web App Sec Quiz](#web-app-sec-quiz)
      * [SecurePasswords.info](#securepasswords-info)
      * [Security News Feeds Cheat-Sheet](#security-news-feeds-cheat-sheet)
      * [Open Security Training](#open-security-training)
      * [MicroCorruption](#microcorruption)
      * [The Matasano Crypto Challenges](#the-matasano-crypto-challenges)
      * [PentesterLab](#pentesterlab)
      * [Juice Shop](#juice-shop)
      * [Blogs](#blogs)
        * [Crypto Fails](#crypto-fails)
        * [Chargen: The Matasano Blog](#chargen-the-matasano-blog)
      * [Wiki pages](#wiki-pages)
        * [OWASP Top Ten Project](#owasp-top-ten-project)
  * [Android](#android)
    * [Books and ebooks](#books-and-ebooks)
      * [SEI CERT Android Secure Coding Standard](#sei-cert-android-secure-coding-standard-2015) (2015)
  * [C](#c)
    * [Books and ebooks](#books-and-ebooks-1)
      * [SEI CERT C Coding Standard](#sei-cert-c-coding-standard-2006) (2006)
      * [Defensive Coding: A Guide to Improving Software Security by the Fedora Security Team](#defensive-coding-a-guide-to-improving-software-security-by-the-fedora-security-team-2015) (2015)
  * [C++](#c-1)
    * [Books and ebooks](#books-and-ebooks-2)
      * [SEI CERT C++ Coding Standard](#sei-cert-c-coding-standard-2006-1) (2006)
  * [C Sharp](#c-sharp)
    * [Books and ebooks](#books-and-ebooks-3)
      * [Security Driven .NET](#-security-driven-net-2015) (2015) ![nonfree](img/nonfree.png)
  * [Java](#java)
    * [Books and ebooks](#books-and-ebooks-4)
      * [SEI CERT Java Coding Standard](#sei-cert-java-coding-standard-2007) (2007)
      * [Secure Coding Guidelines for Java SE ](#secure-coding-guidelines-for-java-se-2014) (2014)
  * [Node.js](#node-js)
    * [Training](#training)
      * [Security Training by ^Lift Security](#-security-training-by-lift-security) ![nonfree](img/nonfree.png)
  * [PHP](#php)
    * [Articles](#articles-1)
      * [It's All About Time](#its-all-about-time-2014) (2014)
      * [Secure Authentication in PHP with Long-Term Persistence](#secure-authentication-in-php-with-long-term-persistence-2015) (2015)
      * [20 Point List For Preventing Cross-Site Scripting In PHP](#20-point-list-for-preventing-cross-site-scripting-in-php-2013) (2013)
      * [25 PHP Security Best Practices For Sys Admins](#25-php-security-best-practices-for-sys-admins-2011) (2011)
      * [PHP data encryption primer](#php-data-encryption-primer-2014) (2014)
      * [Preventing SQL Injection in PHP Applications - the Easy and Definitive Guide](#preventing-sql-injection-in-php-applications-the-easy-and-definitive-guide-2014) (2014)
      * [You Wouldn't Base64 a Password - Cryptography Decoded](#you-wouldnt-base64-a-password-cryptography-decoded-2015) (2015)
      * [A Guide to Secure Data Encryption in PHP Applications](#a-guide-to-secure-data-encryption-in-php-applications-2015) (2015)
    * [Books and ebooks](#books-and-ebooks-5)
      * [Securing PHP: Core Concepts](#-securing-php-core-concepts) ![nonfree](img/nonfree.png)
    * [Useful libraries](#useful-libraries)
      * [defuse/php-encryption](#defusephp-encryption)
      * [ircmaxell/password_compat](#ircmaxellpassword-compat)
      * [ircmaxell/RandomLib](#ircmaxellrandomlib)
      * [thephpleague/oauth2-server](#thephpleagueoauth2-server)
      * [paragonie/random_compat](#paragonierandom-compat)
      * [psecio/gatekeeper](#pseciogatekeeper)
    * [Websites](#websites-1)
      * [websec.io](#websec-io)
      * [Blogs](#blogs-1)
        * [Paragon Initiative Enterprises Blog](#paragon-initiative-enterprises-blog)
        * [ircmaxell's blog](#ircmaxells-blog)
        * [Pádraic Brady's Blog](#p%C3%A1draic-bradys-blog)
      * [Mailing lists](#mailing-lists)
        * [Securing PHP Weekly](#securing-php-weekly)
  * [Perl](#perl)
    * [Books and ebooks](#books-and-ebooks-6)
      * [SEI CERT Perl Coding Standard](#sei-cert-perl-coding-standard-2011) (2011)
  * [Python](#python)
    * [Books and ebooks](#books-and-ebooks-7)
      * [Python chapter of Fedora Defensive Coding Guide](#python-chapter-of-fedora-defensive-coding-guide)
    * [Websites](#websites-2)
      * [OWASP Python Security Wiki](#owasp-python-security-wiki-2014) (2014)
  * [Ruby](#ruby)
    * [Books and ebooks](#books-and-ebooks-8)
      * [Secure Ruby Development Guide](#secure-ruby-development-guide-2014) (2014)


# General

## Articles

### [How to Safely Generate a Random Number](http://sockpuppet.org/blog/2014/02/25/safely-generate-random-numbers/) (2014)

**Released**: February 25, 2014

Advice on cryptographically secure pseudo-random number generators.

### [Salted Password Hashing - Doing it Right](https://crackstation.net/hashing-security.htm) (2014)

**Released**: August 6, 2014

A post on [Crackstation](https://crackstation.net), a project by [Defuse Security](https://defuse.ca)

### [A good idea with bad usage: /dev/urandom](http://insanecoding.blogspot.co.uk/2014/05/a-good-idea-with-bad-usage-devurandom.html) (2014)

**Released**: May 3, 2014

Mentions many ways to make `/dev/urandom` fail on Linux/BSD.

### [Why Invest in Application Security?](https://paragonie.com/white-paper/2015-why-invest-application-security) (2015)

**Released**: June 21, 2015

Running a business requires being cost-conscious and minimizing unnecessary spending. The benefits of ensuring in the security of your application are invisible to most companies, so often times they neglect to invest in secure software development as a cost-saving measure. What these companies don't realize is the potential cost (both financial and to brand reputation) a preventable data compromise can incur.

**The average data breach costs millions of dollars in damage.**

Investing more time and personnel to develop secure software is, for most companies, worth it to minimize this unnecessary risk to their bottom line.

## Books

### ![nonfree](img/nonfree.png) [Web Application Hacker's Handbook](http://mdsec.net/wahh) (2011)

**Released**: September 27, 2011

Great introduction to Web Application Security; though slightly dated.

### ![nonfree](img/nonfree.png) [Cryptography Engineering](http://www.amazon.com/Cryptography-Engineering-Principles-Practical-Applications/dp/0470474246) (2010)

**Released**: March 15, 2010

Develops a sense of professional paranoia while presenting crypto design techniques.

### ![nonfree](img/nonfree.png) [Gray Hat Python: Programming for Hackers and Reverse Engineers](http://www.amazon.com/Gray-Hat-Python-Programming-Engineers/dp/1593271921) (2009)

**Released**: May 3, 2009



### ![nonfree](img/nonfree.png) [The Art of Software Security Assessment: Identifying and Preventing Software Vulnerabilities](http://www.amazon.com/The-Software-Security-Assessment-Vulnerabilities/dp/0321444426/) (2006)

**Released**: November 30, 2006



### ![nonfree](img/nonfree.png) [C Interfaces and Implementations: Techniques for Creating Reusable Software](http://www.amazon.com/Interfaces-Implementations-Techniques-Creating-Reusable/dp/0201498413/) (1996)

**Released**: August 30, 1996



### ![nonfree](img/nonfree.png) [Reversing: Secrets of Reverse Engineering](http://www.amazon.com/Reversing-Secrets-Engineering-Eldad-Eilam/dp/0764574817) (2005)

**Released**: April 15, 2005



### ![nonfree](img/nonfree.png) [JavaScript: The Good parts](http://www.amazon.com/JavaScript-Good-Parts-Douglas-Crockford/dp/0596517742) (2008)

**Released**: May 1, 2008



### ![nonfree](img/nonfree.png) [Windows Internals: Including Windows Server 2008 and Windows Vista, Fifth Edition ](http://www.amazon.com/Windows%C2%AE-Internals-Including-Developer-Reference/dp/0735625301) (2007)

**Released**: June 17, 2007



### ![nonfree](img/nonfree.png) [The Mac Hacker's Handbook](http://www.amazon.com/The-Hackers-Handbook-Charlie-Miller/dp/0470395362) (2009)

**Released**: March 3, 2009



### ![nonfree](img/nonfree.png) [The IDA Pro Book: The Unofficial Guide to the World's Most Popular Disassembler](http://www.amazon.com/The-IDA-Pro-Book-Disassembler/dp/1593271786) (2008)

**Released**: August 22, 2008



### ![nonfree](img/nonfree.png) [Internetworking with TCP/IP Vol. II: ANSI C Version: Design, Implementation, and Internals (3rd Edition)](http://www.amazon.com/Internetworking-TCP-Vol-Implementation-Internals/dp/0139738436) (1998)

**Released**: June 25, 1998



### ![nonfree](img/nonfree.png) [Network Algorithmics,: An Interdisciplinary Approach to Designing Fast Networked Devices](http://www.amazon.com/Network-Algorithmics-Interdisciplinary-Designing-Networking/dp/0120884771) (2004)

**Released**: December 29, 2004



### ![nonfree](img/nonfree.png) [Computation Structures (MIT Electrical Engineering and Computer Science)](http://www.amazon.com/Computation-Structures-Electrical-Engineering-Computer/dp/0262231395) (1989)

**Released**: December 13, 1989



### ![nonfree](img/nonfree.png) [Surreptitious Software: Obfuscation, Watermarking, and Tamperproofing for Software Protection](http://www.amazon.com/Surreptitious-Software-Obfuscation-Watermarking-Tamperproofing/dp/0321549252) (2009)

**Released**: August 3, 2009



### [Secure Programming HOWTO](http://www.dwheeler.com/secure-programs/) (2015)

**Released**: March 1, 2015



## Classes

### [Offensive Computer Security (CIS 4930) FSU](https://www.cs.fsu.edu/~redwood/OffensiveComputerSecurity/)

A vulnerability research and exploit development class by Owen Redwood of Florida State University. 

**Be sure to check out the [lectures](https://www.cs.fsu.edu/~redwood/OffensiveComputerSecurity/lectures.html)!**

### [Hack Night](https://github.com/isislab/Hack-Night)

Developed from the materials of NYU Poly's old Penetration Testing and Vulnerability Analysis course, Hack Night is a sobering introduction to offensive security. A lot of complex technical content is covered very quickly as students are introduced to a wide variety of complex and immersive topics over thirteen weeks.

## Websites

### [Hack This Site!](http://www.hackthissite.org)

Learn about application security by attempting to hack this website.

### [Web App Sec Quiz](https://timoh6.github.io/WebAppSecQuiz/)

Self-assessment quiz for web application security

### [SecurePasswords.info](https://securepasswords.info)

Secure passwords in several languages/frameworks.

### [Security News Feeds Cheat-Sheet](http://lzone.de/cheat-sheet/Security-News-Feeds)

A list of security news sources.

### [Open Security Training](http://opensecuritytraining.info/)

Video courses on low-level x86 programming, hacking, and forensics.

### [MicroCorruption](https://microcorruption.com/login)

Capture The Flag - Learn Assembly and Embedded Device Security

### [The Matasano Crypto Challenges](http://cryptopals.com)

A series of programming exercises for teaching oneself cryptography by [Matasano Security](http://matasano.com). [The introduction](https://blog.pinboard.in/2013/04/the_matasano_crypto_challenges) by Maciej Ceglowski explains it well.

### [PentesterLab](https://pentesterlab.com)

PentesterLab provides [free Hands-On exercises](https://pentesterlab.com/exercises/) and a [bootcamp](https://pentesterlab.com/bootcamp/) to get started.

### [Juice Shop](https://bkimminich.github.io/juice-shop)

An intentionally insecure Javascript Web Application.

### Blogs

#### [Crypto Fails](http://cryptofails.com)

Showcasing bad cryptography

#### [Chargen: The Matasano Blog](https://www.nccgroup.trust/us/about-us/newsroom-and-events/blog/)

The blog of NCC Group.

### Wiki pages

#### [OWASP Top Ten Project](https://www.owasp.org/index.php/Category:OWASP_Top_Ten_Project)

The top ten most common and critical security vulnerabilities found in web applications.

# Android

## Books and ebooks

### [SEI CERT Android Secure Coding Standard](https://www.securecoding.cert.org/confluence/display/android/Android+Secure+Coding+Standard) (2015)

**Released**: February 24, 2015

A community-maintained Wiki detailing secure coding standards for Android development.

# C

## Books and ebooks

### [SEI CERT C Coding Standard](https://www.securecoding.cert.org/confluence/display/c/SEI+CERT+C+Coding+Standard) (2006)

**Released**: May 24, 2006

A community-maintained Wiki detailing secure coding standards for C programming.

### [Defensive Coding: A Guide to Improving Software Security by the Fedora Security Team](https://docs.fedoraproject.org/en-US/Fedora_Security_Team/1/html/Defensive_Coding/index.html) (2015)

**Released**: August 16, 2015

Provides guidelines for improving software security through secure coding. Covers common programming languages and libraries, and focuses on concrete recommendations.

# C++

## Books and ebooks

### [SEI CERT C++ Coding Standard](https://www.securecoding.cert.org/confluence/pages/viewpage.action?pageId=637) (2006)

**Released**: July 18, 2006

A community-maintained Wiki detailing secure coding standards for C++ programming.

# C Sharp

## Books and ebooks

### ![nonfree](img/nonfree.png) [Security Driven .NET](http://securitydriven.net/) (2015)

**Released**: July 14, 2015

An introduction to developing secure applications targeting version 4.5 of the .NET Framework, specifically covering cryptography and security engineering topics.

# Java

## Books and ebooks

### [SEI CERT Java Coding Standard](https://www.securecoding.cert.org/confluence/display/java/SEI+CERT+Oracle+Coding+Standard+for+Java) (2007)

**Released**: January 12, 2007

A community-maintained Wiki detailing secure coding standards for Java programming.

### [Secure Coding Guidelines for Java SE ](http://www.oracle.com/technetwork/java/seccodeguide-139067.html) (2014)

**Released**: April 2, 2014

Secure Java programming guidelines straight from Oracle.

# Node.js

## Training

### ![nonfree](img/nonfree.png) [Security Training by ^Lift Security](https://liftsecurity.io/training)

Learn from the team that spearheaded the [Node Security Project](https://nodesecurity.io)

# PHP

## Articles

### [It's All About Time](http://blog.ircmaxell.com/2014/11/its-all-about-time.html) (2014)

**Released**: November 28, 2014

A gentle introduction to timing attacks in PHP applications

### [Secure Authentication in PHP with Long-Term Persistence](https://paragonie.com/blog/2015/04/secure-authentication-php-with-long-term-persistence) (2015)

**Released**: April 21, 2015

Discusses password policies, password storage, "remember me" cookies, and account recovery.

### [20 Point List For Preventing Cross-Site Scripting In PHP](http://blog.astrumfutura.com/2013/04/20-point-list-for-preventing-cross-site-scripting-in-php) (2013)

**Released**: April 22, 2013

Padriac Brady's advice on building software that isn't vulnerable to XSS

### [25 PHP Security Best Practices For Sys Admins](http://www.cyberciti.biz/tips/php-security-best-practices-tutorial.html) (2011)

**Released**: November 23, 2011

Though this article is a few years old, much of its advice is still relevant as we veer around the corner towards PHP 7.

### [PHP data encryption primer](https://timoh6.github.io/2014/06/16/PHP-data-encryption-cheatsheet.html) (2014)

**Released**: June 16, 2014

@timoh6 explains implementing data encryption in PHP

### [Preventing SQL Injection in PHP Applications - the Easy and Definitive Guide](https://paragonie.com/blog/2015/05/preventing-sql-injection-in-php-applications-easy-and-definitive-guide) (2014)

**Released**: May 26, 2014

**TL;DR** - don't escape, use prepared statements instead!

### [You Wouldn't Base64 a Password - Cryptography Decoded](https://paragonie.com/blog/2015/08/you-wouldnt-base64-a-password-cryptography-decoded) (2015)

**Released**: August 7, 2015

A human-readable overview of commonly misused cryptography terms and fundamental concepts, with example code in PHP.

If you're confused about cryptography terms, start here.

### [A Guide to Secure Data Encryption in PHP Applications](https://paragonie.com/white-paper/2015-secure-php-data-encryption) (2015)

**Released**: August 2, 2015

Discusses the importance of end-to-end network-layer encryption (HTTPS) as well as secure encryption for data at rest, then introduces the specific cryptography tools that developers should use for specific use cases, whether they use [libsodium](https://pecl.php.net/package/libsodium), [Defuse Security's secure PHP encryption library](https://github.com/defuse/php-encryption), or OpenSSL.

## Books and ebooks

### ![nonfree](img/nonfree.png) [Securing PHP: Core Concepts](https://leanpub.com/securingphp-coreconcepts)

*Securing PHP: Core Concepts* acts as a guide to some of the most common security terms and provides some examples of them in every day PHP.

## Useful libraries

### [defuse/php-encryption](https://github.com/defuse/php-encryption)

Symmetric-key encryption library for PHP applications. (**Recommended** over rolling your own!)

### [ircmaxell/password_compat](https://github.com/ircmaxell/password_compat)

If you're using PHP 5.3.7+ or 5.4, use this to hash passwords

### [ircmaxell/RandomLib](https://github.com/ircmaxell/RandomLib)

Useful for generating random strings or numbers

### [thephpleague/oauth2-server](https://github.com/thephpleague/oauth2-server)

A secure OAuth2 server implementation

### [paragonie/random_compat](https://github.com/paragonie/random_compat)

PHP 7 offers a new set of CSPRNG functions: `random_bytes()` and `random_int()`. This is a community effort to expose the same API in PHP 5 projects (forward compatibility layer). Permissively MIT licensed.

### [psecio/gatekeeper](https://github.com/psecio/gatekeeper)

A secure authentication and authorization library that implements Role-Based Access Controls and Paragon Initiative Enterprises' recommendaitons for [secure "remember me" checkboxes](https://paragonie.com/blog/2015/04/secure-authentication-php-with-long-term-persistence#title.2).

## Websites

### [websec.io](http://websec.io)

**websec.io** is dedicated to educating developers about security with topics relating to general security fundamentals, emerging technologies and PHP-specific information

### Blogs

#### [Paragon Initiative Enterprises Blog](https://paragonie.com/blog/)

The blog of our technology and security consulting firm based in Orlando, FL

#### [ircmaxell's blog](http://blog.ircmaxell.com)

A blog about PHP, Security, Performance and general web application development.

#### [Pádraic Brady's Blog](http://blog.astrumfutura.com)

Pádraic Brady is a Zend Framework security expert

### Mailing lists

#### [Securing PHP Weekly](http://securingphp.com)

A weekly newsletter about PHP, security, and the community.

# Perl

## Books and ebooks

### [SEI CERT Perl Coding Standard](https://www.securecoding.cert.org/confluence/display/perl/SEI+CERT+Perl+Coding+Standard) (2011)

**Released**: January 10, 2011

A community-maintained Wiki detailing secure coding standards for Perl programming.

# Python

## Books and ebooks

### [Python chapter of Fedora Defensive Coding Guide](https://docs.fedoraproject.org/en-US/Fedora_Security_Team/1/html/Defensive_Coding/chap-Defensive_Coding-Python.html)

Lists standard library features that should be avoided, and references sections of other chapters that are Python-specific.

## Websites

### [OWASP Python Security Wiki](https://github.com/ebranca/owasp-pysec/wiki) (2014)

**Released**: June 21, 2014

A wiki maintained by the OWASP Python Security project.

# Ruby

## Books and ebooks

### [Secure Ruby Development Guide](https://docs.fedoraproject.org/en-US/Fedora_Security_Team/1/html/Secure_Ruby_Development_Guide/index.html) (2014)

**Released**: March 10, 2014

A guide to secure Ruby development by the Fedora Security Team. Also available on [Github](https://github.com/jrusnack/secure-ruby-development-guide).
