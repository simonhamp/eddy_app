# eddy - Your Web App Sidekick
[Eddy](http://github.com/flipstorm/eddy) is a PHP5.3+ framework for rapid web app development.
Eddy App (this repo) is a default starting point for your next app. Simply clone or fork Eddy App
as your new app and get started straight away!

## Why is it split like this? Why is Eddy a submodule?
Submodules in Git are awesome. They let you connect repositories together to make super-repos that
contain all of their pre-requisites. You could just download the latest version of all your pre-requisites,
but if you can use Git to keep them up to date too, why not do that?

This means you can keep the Eddy core up to date with a simple `git pull` on the submodule. It's good practice.

## So how do I make this work?
Simply clone this repo. As soon as you have, remove the `github/flipstorm/eddy_app` remote so that you're
not tempted to `git pull` this repo later and potentially break your app.

## Now uses Bootstrap!
That's right, the awesome [Bootstrap](http://twitter.github.com/bootstrap/) is now built right into this repo,
meaning you're off to a flying start with your new app's styles. Everything that Bootstrap brings to the table
is ready for you to use.

This is just through a CDN for now, so none of the Bootstrap original files are available to edit locally -
you'll have to do that yourself. But hopefully this gives you a great starting point. Check out the
[BootstrapCDN](http://www.bootstrapcdn.com/) for quick ways to change the theme used by your app.
