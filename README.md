# DUTBS.co.uk Website Snippet

This is a trimmed-down version of the DUTBS website with just two pages; all
confidential information has been removed.  The original website can be found
at <http://www.dutbs.co.uk/>, while this trimmed-down version can be seen
[here][1].
  
 [1]: <http://dutbs-website-demo.herokuapp.com/>

#Deliverables

* Drive increase in membership
* Code as easy to maintain as possible. Content changes should require little
  to no technical expertise.
* Compliance with the Durham University [branding guidelines][duBranding]
* Welcoming and professional look & feel, with particular attention to
  attracting female members
* Search engine optimisation


 [duBranding]: http://www.dur.ac.uk/communications.office/marketing/branding/

# Files

    index.php
    about/index.php (symbolic link)
	    Site landing page

    photos/index.php
	    Photos; automatically fed from the DUTBS Facebook page using an
	    ifttt.com script

    training/index.php
	    Training calendar; fed from the DUTBS iCalendar on Google

    stylesheets/
	    Cascading style-sheets

    stylesheets/markdown-related.css
	    Markdown CSS shim

    common-head.php
    css-tricks.js
    facebook-like-button.php
    header-footer.php
	    Shared code

    lib/
	    Third-party libraries

    lib/markdown-rdancer.php
	    Shim for the PHP-Markdown library

    robots.txt
	    Web crawlers exclusion rules

    Readme.md
	    This file
