###README

This project helps you create a Drupal site with Xdebug configured for VSCode out of the box.

## Steps to perform:
- Install Xdebug helper chrome plugin
  - Install it Chrome Web Store
  - Pin the plugin in Chrome
  - Right click plugin icon -> Options.
    Under IDE, select `Other` and enter `vscode` in the box.
  - Save
- Run the following commands:
  - `git clone git@github.com:vivekpan27/drupal-debugging-tools.git`
  - `cd drupal-debugging-tools`
  - `lando start`
  - `lando drush sql:cli < drupal-debugging-demo.sql`

##For debugging:
  - Add breakpoints in code
  - Click on Xdebug Helper icon in Chrome.
  - In VSCode, click Run > Start Debuggging.
  - Reload the page
  - The debugger should stop at the breakpoints
  -
