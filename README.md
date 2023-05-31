# thememanager

## Installation

```
composer require webinertia/webinertia-thememanager
```

### Post install setup

After installing the module for the first time your application will not render until you run the build command. This command restructers
the directories to the proper structure (as detailed below).

```php
php ./vendor/bin/laminas thememanager:build-theme
```

```src/
    view/
        default/ <- theme directory - this is really the only change
            application/ <- as you can see this is back to the default structure module directory
                index/ <- controller directory
                    index.phtml <- action view files
```

With this module installed and the above changes made Laminas will then support multiple themes allowing you to prototype faster
since you can then have

```src/
    view/
        default/
        dark/
        light/
        blue/
```

#### Important note about public assets

As you may be wondering about what changes are made in regards to asset loading in /public for style sheets, images and script files.
I make zero assumptions as to what directory structure the developer would like to use for that. Its impossible to know really. There are so many different front-end asset package managers that its not really feasable to try and support all of them. I leave it to you to modify those directories as best fits your project and your theme. Just include a layout and you can have whatever is required. The default theme is not modified from the default Laminas MVC structure and the paths are not adjusted.

Now, a few things to mention here. Yes, every theme can and will load its own layout file if present, if a layout file is not present then
it will load the view files from the active theme (see the modules theme.config.php file) and will load the default themes layout.

In regards to view files. If a theme does not need to modify a particular view files page sctructure then the theme need not include that
particular view file. It will load the view file from the default theme.

In the next version you will be able to name which theme should be the fallback and it will load the view file from that theme, if present, if not then it will load it from the default which will allow all themes to fallback to the default with a named intermediary fallback based on the named fallback theme.
