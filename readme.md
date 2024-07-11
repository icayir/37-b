##### BersekHTML ⓒ (themeforest layout) ##### 
*Version 1.0 06/09/2017*

# Credentials #

### Demo URL: ###

BersekHTML: http://dev.nikadevs.com/berserk-wordpress/


# General Usage Notes #


* jQuery: #3.1.1,
* normalize-scss: ^3.0.3,
* fancybox-scss: ^2.2.0,
* bootstrap: v4.0.0-beta,
* font-awesome: ^4.7.0,
* animate.css: animate-css#^3.5.2,
* ui-to-top: jquery.ui-to-top#*,
* jquery.countdown: ^2.2.0,
* wow: wowjs#^1.1.2,
* underscore: ^1.8.3,
* waypoints: jquery-waypoints#^4.0.1,
* jquery-countTo: countto#^1.2.0,
* fancybox: ^3.1.20,
* odometer: ^0.4.8,
* parallax.js: ^1.4.2

# Building and Dependencies #

To build and get simple static template (HTML/CSS/JS) you need to:

1. Install Node.js (tested with 6.9.2)

1. Install NodePackageManager (tested with 3.10.9)

1. Open CMD/Terminal go to {root}/sources directory and run commands


```
npm install
bower install
gulp build
```

*All build files stores in the {root} and sources in the "sources" directory.*

# Code description #

## CSS files: ##

```
file                                |  description
--------------------------------------------------------------------------------------
{root}/build/css/app.css            |  contain bootstrap modules + custom css
--------------------------------------------------------------------------------------
```


## JS files: ##

```
file                                |  description
--------------------------------------------------------------------------------------
{root}/js/main.js                   |  (minified) contain custom js and calls 
--------------------------------------------------------------------------------------
{root}/js/minified.js               |  (minified) bunch of lib's in one file 
--------------------------------------------------------------------------------------
```


## CSS classes used in the custom part of main.js: ##

```
.class                              |  description
--------------------------------------------------------------------------------------
                                    |  (minified)
--------------------------------------------------------------------------------------
```



## JS Custom Methods & Vars: ##


```
method/object                       |  description
--------------------------------------------------------------------------------------
app                                 |  Main object.
--------------------------------------------------------------------------------------
```