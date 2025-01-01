# Release Notes for Datastar

## 1.0.0-beta.3 - Unreleased

### Added

- Added `datastar.get()`, `datastar.post()`, `datastar.put()`, `datastar.patch()` and `datastar.delete()` methods.

### Changed

- The `datastar.sse()` argument signature is now `(template, variables, options)`.
- Query and body params are no longer removed when the request content type is not JSON.
- The plugin now requires Datastar [v1.0.0-beta.1](https://github.com/starfederation/datastar/releases/tag/v1.0.0-beta.1).

## 1.0.0-beta.2 - 2024-12-17

### Added

- Added the ability to expose the Datastar object by attaching it to the `window` element.

### Changed

- The plugin now requires Datastar 0.21.3.

## 1.0.0-beta.1 - 2024-12-11

- Require Datastar 0.21.2.

## 1.0.0-alpha.3 - 2024-11-26

- Require Datastar 0.20.1.

## 1.0.0-alpha.2 - 2024-11-24

- Initial functional release.

## 1.0.0-alpha.1 - 2024-11-22

- Initial alpha release.
