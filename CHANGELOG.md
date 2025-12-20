# Release Notes for Datastar

## 1.0.0-RC.10 - 2025-12-20

- Added the `shouldCloseSession` config setting that determines whether the session should be closed when the event stream begins.
- The event stream now runs callable functions before flushing any content ([#24](https://github.com/putyourlightson/craft-datastar-module/issues/24)).
- The package now includes Datastar [1.0.0-RC.7](https://github.com/starfederation/datastar/releases/tag/v1.0.0-RC.7).

## 1.0.0-RC.9 - 2025-10-26

> [!NOTE]
> The Datastar syntax has changed in this release. Please see the [release notes](https://github.com/starfederation/datastar/releases/tag/v1.0.0-RC.6) and modify your code accordingly.

- The package now includes Datastar [1.0.0-RC.6](https://github.com/starfederation/datastar/releases/tag/v1.0.0-RC.6).

## 1.0.0-RC.8 - 2025-09-20

- Fixed a bug in which headers were being accessed for console requests.

## 1.0.0-RC.7 - 2025-08-19

- The package now includes Datastar [1.0.0-RC.5](https://github.com/starfederation/datastar/releases/tag/v1.0.0-RC.5).
- Improved error handling.
- Fixed a bug in which options were being double JSON encoded.

## 1.0.0-RC.6 - 2025-08-10

- It’s now possible to pass options in as string, for cases when JSON encoding is not desirable.
- Renamed the `Sse` service to `SseService`.
- Renamed the `SseTrait` trait to `Sse`.

## 1.0.0-RC.5 - 2025-08-09

- Added the `Sse::shouldCloseSession()` method that determines whether the session should be closed when the event stream begins.
- Removed the `StreamedResponse` class. The `craft\web\Response` class is now used instead.

## 1.0.0-RC.4 - 2025-08-06

- The plugin now includes Datastar [1.0.0-RC.4](https://github.com/starfederation/datastar/releases/tag/v1.0.0-RC.4).
- The session is now closed by default when the `getEventStream()` method is called, to prevent session locking.
- Added fluent method chaining to the `Sse` service.
- Replaced the `DatastarEventStream` trait with the `SseTrait` trait.

## 1.0.0-RC.3 - 2025-07-31

- The plugin now includes Datastar [1.0.0-RC.3](https://github.com/starfederation/datastar/releases/tag/v1.0.0-RC.3).
- Added the ability to pass controller actions to backend requests by passing an action path that starts with the action trigger to `datastar.get()` (and equivalent Twig functions).
- Server sent events are now only sent when generated inside a callable passed to `getEventStream()`.
- Renamed the `getStreamedResponse()` method to `getEventStream()`.

## 1.0.0-RC.2 - 2025-07-16

- The plugin now includes Datastar [1.0.0-RC.2](https://github.com/starfederation/datastar/releases/tag/v1.0.0-RC.2).

## 1.0.0-RC.1 - 2025-07-15

- The plugin now requires Datastar [1.0.0-RC.1](https://github.com/starfederation/datastar/releases/tag/v1.0.0-RC.1) or later, and Craft CMS 5.4.0 or later.
- Added the `patchsignals` Twig tag.
- Added the `removeelements` Twig tag.
- Renamed the `fragments` Twig tag to `patchelements`.
- Renamed the `defaultFragmentOptions` config setting to `defaultElementOptions`.
- Removed the `datastar.signals()` and `datastar.signalsFromClass()` methods. Use the `|json_encode` filter instead.
- Removed the `SignalsModel` class. The `signals` variable passed into Datastar templates is now a regular array. Use the `patchsignals` Twig tag to update and remove signals.

## 1.0.0-beta.9 - 2025-03-29

### Changed

- Control panel requests now use the `data-star-*` aliased bundle.

### Removed

- Removed the `settleDuration` fragment option.

## 1.0.0-beta.8 - 2025-02-25

### Removed

- Removed the ability to expose the Datastar object, since the framework no longer exposes it.

## 1.0.0-beta.7 - 2025-02-01

### Added

- Added the `location` Twig tag.
- Added the `sleep` Twig tag.

## 1.0.0-beta.6 - 2025-01-18

### Added

- Added the `datastar.signals()` and `datastar.signalsFromClass()` methods.

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
