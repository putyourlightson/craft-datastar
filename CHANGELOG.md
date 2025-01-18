# Release Notes for Datastar

## 1.0.0-beta.6 - 2025-01-18

### Added

- Added the `datastar.signals()` and `datastar.signalsFromClass()` and methods.

## 1.0.0-beta.5 - 2025-01-06

### Fixed

- Fixed a bug in which templates were not being correctly rendered ([#2](https://github.com/putyourlightson/craft-datastar-module/issues/2)).

## 1.0.0-beta.4 - 2025-01-05

### Added

- Added CSRF protection to all non-GET requests to the Datastar controller action.

### Fixed

- Fixed a bug that was resulting in an infinite loop when validating variables containing arrays ([#3](https://github.com/putyourlightson/craft-datastar/issues/3)).

## 1.0.0-beta.3 - 2025-01-02

### Added

- Added the `datastar.get()`, `datastar.post()`, `datastar.put()`, `datastar.patch()` and `datastar.delete()` methods, which replace `datastar.sse()`.

### Changed

- The `datastar.sse()` method has been removed.
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
