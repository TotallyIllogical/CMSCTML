CMSCTML
=======

Simple CMS that connects to a databas for my personal site

## Work in progress

Rails version of the site, with SQLite instead of MySQL.

### Setup

You need Ruby 3.3 (see `.ruby-version`).

```sh
bin/setup
```

That installs the gems, creates the database and starts the dev server on http://localhost:3000.
Use `bin/dev` to start it again later, it also rebuilds the scss when you change it.

### Tests and linting

```sh
bin/rails test
bin/rubocop
bin/brakeman
```

### Production

Copy `.env.example` and fill in the values in your hosting (never commit them). Then:

```sh
bundle install --without development test
bin/rails assets:precompile
bin/rails db:prepare
bin/rails server
```
