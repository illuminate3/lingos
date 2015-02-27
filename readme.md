Lingos
=======

# Depreciated
Use my new package called Kotoba for Laravel 5.
I will no longer support this.


# About
Baseline language files for Laravel4.


## Version
0.8.0
* Basic Files based on stevemo's Cpanel
* Add in some of brunogaspar's lang files


## Available Languages
* English


## Installation


1.)
Add to composer.json in the require statement:

```
"require": {
    "illuminate3/lingos": "dev-master",
    ...
},
```

2.)
Add to the app.php providers list

```
'Illuminate3\Lingos\LingosServiceProvider',
```


## Usage

```
{{ Lang::get('lingos::auth.register') }}
```

real world examples:

```
{{ Lang::get('lingos::filename.word') }}
{{ trans('lingos::filename.word') }}
```

lingos:: // The package name
auth.    // The language file name
register // The phrase or word that you want to call

Result: Register

## Files

1. auth       :: relates to authorization and security
2. button     :: relates to various words appearing on buttons
3. general    :: relates to various often used words and phrases
4. emails     :: relates to email template phrases and words
5. table      :: relates to various words appearing in tables
6. sentry     :: relates to various words that sentry 2 uses

Note: Sometimes you have words or phrases that can fall into both the button and general categories.
I separated these since you might want to have them slightly different, like capitalizations or similar.


## Projects used to create Lingos
[Stevemo's Cpanel](https://github.com/stevemo/cpanel "Stevemo's Cpanel")

[brunogaspar's laravel4-starter-kit](https://github.com/brunogaspar/laravel4-starter-kit "Brunogaspar's laravel4-starter-kit")

[illuminate3's Vedette](https://github.com/illuminate3/vedettte "illuminate3's Vedette")
