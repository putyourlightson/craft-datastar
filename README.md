[![Stable Version](https://img.shields.io/packagist/v/putyourlightson/craft-datastar?label=stable)]((https://packagist.org/packages/putyourlightson/craft-datastar))
[![Total Downloads](https://img.shields.io/packagist/dt/putyourlightson/craft-datastar)](https://packagist.org/packages/putyourlightson/craft-datastar)

<p align="center"><img width="150" src="https://putyourlightson.com/assets/logos/datastar.svg"></p>

# Datastar Plugin for Craft CMS

### A real-time, template-driven hypermedia framework for Craft CMS.

**This plugin is in alpha and its API may change.**

Datastar is a free plugin for [Craft CMS](https://craftcms.com/) that allows you to create real-time front-ends driven by Twig templates. It aims to replace the need for front-end frameworks such as React, Vue.js and Alpine.js + htmx, and instead lets you manage state and run logic all within your Twig templates.

With Datastar, you have the ability to define state and manipulate the DOM in real-time on the front-end, and modify parts of the DOM with templates rendered on the back-end. Use-cases for Datastar are:

- Live searching elements
- Loading more elements / Infinite scroll
- Paginating, ordering and filtering lists of elements
- Submitting forms and running actions
- Pretty much anything to do with reactive front-ends

Datastar is lightweight, performant and strongly opinionated about embracing hypermedia and removing front-end complexity. It can be used for anything from simple to complex use-cases.

Read [The Case for Datastar](https://github.com/putyourlightson/craft-datastar/discussions/2) and join in the discussion.

## Documentation

Learn more and read the documentation at [putyourlightson.com/plugins/datastar »](https://putyourlightson.com/plugins/datastar)

## License

This plugin is licensed for free under the MIT License.

## Requirements

This plugin requires [Craft CMS](https://craftcms.com/) 5.0.0 or later.

## Installation

To install the plugin, search for “Datastar” in the Craft Plugin Store, or install manually using composer.

```shell
composer require putyourlightson/craft-datastar:^1.0.0-alpha.1
```

---

Created by [PutYourLightsOn](https://putyourlightson.com/).
