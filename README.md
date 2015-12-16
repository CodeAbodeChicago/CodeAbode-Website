CodeAbode Website
=================

The newest version of the website uses a set of modern tools for web development:

-	[Bootstrap](http://getbootstrap.com/) - responsive HTML/CSS/JS framework
-	[Bower](http://bower.io/) - a package manager for client-side libraries
-	[SASS](http://sass-lang.com/) - "CSS with superpowers", a more powerful way to write CSS
-	[Gulp](http://gulpjs.com/) - an automation tool written in [nodejs](https://nodejs.org/en/)
-	LiveReload browser [extension](https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei) - a chrome extension that allows the page to automatically refresh when changes to the website are made.

Directory Structure
-------------------

```
.
├── public/          # The built website - this is what gets posted online
	├── js/
	├── css/
	├── fonts/
	├── images/
	└── index.html
├── source/          # The pre-built website - SASS files mainly at the moment.
	└── scss/
├── bower.json       # The information on how client-side packages are needed
├── package.json     # The information on how node packages are needed
└── README.md
```

Installation
------------

1.	Download and install [node](https://nodejs.org/en/) - I recommend the long-term support version (currently 4.2.3).
2.	Open terminal, install gulp using: `npm install -g gulp`. (On macs: `sudo npm install -g gulp`).
3.	In terminal again, install bower using: `npm install -g bower`. (On macs: `sudo npm install -g bower`).
4.	Download/clone this repository.
5.	Open terminal and navigate to the repository folder.
6.	Let bower install bootstrap, fontawesome and other client-side libraries: `bower install`. (On macs: `sudo bower install`).
7.	Let the node package manager install required dependencies for the gulp automation process: `npm install`. (On macs: `sudo npm install`).
8.	Start the build by running: `gulp`. You can open your browser to "http://localhost:8080/" to see the site running.
9.	(Optional: install the [LiveReload](https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei) chrome extension. When the site is open, press the LiveReload icon to start LiveReload running.)

Gulp Automation
---------------

1.	`gulp` - runs the default build command which creates the public/ files, watches them for changes and sets up LiveReload.
2.	`gulp deploy` - takes the current files in the public/ folder and pushes them to the gh-pages branch. (TODO: this task should build the site before deploying.) **NOTE: this needs to be run from a terminal that is set up for git!**

Previous Versions
=================

Version 1 \[[download zip](https://github.com/CodeAbodeChicago/CodeAbode-Website/archive/original-site-v1.zip)] \[[link](https://github.com/CodeAbodeChicago/CodeAbode-Website/tree/original-site-v1)\]

-	Authors: Rex Twedt, Lauren Kalinowski
-	Tools: HTML5 Boilerplate

Version 2 \[[download zip](https://github.com/CodeAbodeChicago/CodeAbode-Website/archive/ruchi-v2)] \[[link](https://github.com/CodeAbodeChicago/CodeAbode-Website/tree/ruchi-v2)\]

-	Authors: Ruchi Chhabra
-	Tools: Bootstrap [Agency](http://startbootstrap.com/template-overviews/agency/) Theme

Version 3 \[[download zip](https://github.com/CodeAbodeChicago/CodeAbode-Website/archive/landon-v3)] \[[link](https://github.com/CodeAbodeChicago/CodeAbode-Website/tree/landon-v3)\]

-	Authors: Landon Blackburn, Aileen Rangel
-	Tools: Bootstrap ["WpF Degree"](http://www.wpfreeware.com/wpf-degree-free-wordpress-education-theme-bootstrap-education-website-template/) Template
-	Specific Commits:
	-	First backup version, Landon & Aileen \[[download zip](https://github.com/CodeAbodeChicago/CodeAbode-Website/archive/40d25be6fb46f85063533ff2fb349d83b5ed2938.zip)\] \[[link](https://github.com/CodeAbodeChicago/CodeAbode-Website/tree/40d25be6fb46f85063533ff2fb349d83b5ed2938)\]
	-	Landon taking site back over after vacation \[[download zip](https://github.com/CodeAbodeChicago/CodeAbode-Website/archive/c8e3e452e3ec3bff28a6eccd9e8da11d9d2f0c16.zip)\] \[[link](https://github.com/CodeAbodeChicago/CodeAbode-Website/tree/c8e3e452e3ec3bff28a6eccd9e8da11d9d2f0c16)\]
	-	Lauren's minor updates to Landon's version \[[download zip](https://github.com/CodeAbodeChicago/CodeAbode-Website/archive/2f791e1c6d395d7fa90bcd62f898d68ef32f1e03.zip)\] \[[link](https://github.com/CodeAbodeChicago/CodeAbode-Website/tree/2f791e1c6d395d7fa90bcd62f898d68ef32f1e03)\]
