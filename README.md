# The EduCreate Theme

Built and maintained by Blue Apple Education
https://blueappleeducation.com/
Author: Blue Apple Education
Year: 2021

## Installing the Theme

Install this theme with the following plugin: WP Pusher

1. Download Here: https://wppusher.com/
2. Setup Fresh Wordpress Install & Install WP Pusher Plugin
3. Install Theme from Github Repo Link in WP Pusher Settings: https://github.com/Blue-Apple-Education/EduCreate.git
4. Activate the theme in Appearance > Themes
5. Click the button "Install All Required Plugins" (This will pop-up on screen)
6. Edit Theme Settings Page to configure Header/Footer
7. Add Content and Publish!

## What's here?

`static/` is where you can keep your static front-end scripts, styles, or images. In other words, your Sass files, JS files, fonts, and SVGs would live here.

`templates/` contains all of your Twig templates. These pretty much correspond 1 to 1 with the PHP files that respond to the WordPress template hierarchy. At the end of each PHP template, you'll notice a `Timber::render()` function whose first parameter is the Twig file where that data (or `$context`) will be used. Just an FYI.

`bin/` and `tests/` ... basically don't worry about (or remove) these unless you know what they are and want to.

## Other Resources

- [Twig for Timber Cheatsheet](http://notlaura.com/the-twig-for-timber-cheatsheet/)
