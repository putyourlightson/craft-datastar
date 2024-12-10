[![Stable Version](https://img.shields.io/packagist/v/putyourlightson/craft-datastar?label=stable)]((https://packagist.org/packages/putyourlightson/craft-datastar))
[![Total Downloads](https://img.shields.io/packagist/dt/putyourlightson/craft-datastar)](https://packagist.org/packages/putyourlightson/craft-datastar)

<p align="center"><img width="150" src="https://putyourlightson.com/assets/logos/datastar.svg"></p>

# Datastar Plugin for Craft CMS

### A reactive template-driven hypermedia framework for Craft CMS.

**This plugin is in beta and its API may change.**

This plugin integrates [Datastar](https://data-star.dev/) with [Craft CMS](https://craftcms.com/), allowing you to create reactive frontends driven by Twig templates. It aims to replace the need for front-end frameworks such as React, Vue.js and Alpine.js + htmx, and instead lets you manage state and run logic within your Twig templates.

With Datastar, you have the ability to define state and manipulate the DOM in real-time on the front-end, while modify the DOM with templates rendered on the back-end. Use-cases:

- Live searching elements
- Loading more elements / Infinite scroll
- Paginating, ordering and filtering lists of elements
- Submitting forms and running actions
- Pretty much anything to do with reactive front-ends

Datastar is lightweight, performant and strongly opinionated about embracing hypermedia and removing front-end complexity.

## Documentation

Learn more and read the documentation at [putyourlightson.com/plugins/datastar »](https://putyourlightson.com/plugins/datastar)

## License

This plugin is licensed for free under the MIT License.

## Requirements

This plugin requires [Craft CMS](https://craftcms.com/) 5.0.0 or later.

## Installation

To install the plugin, search for “Datastar” in the Craft Plugin Store, or install manually using composer.

```shell
composer require putyourlightson/craft-datastar:^1.0.0-beta.1
```

---

Created by [PutYourLightsOn](https://putyourlightson.com/).
