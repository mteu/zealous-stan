<div align="center">

[![PHP Version Require](http://poser.pugx.org/shrug/zealous-stan/require/php)](https://packagist.org/packages/shrug/zealous-stan)
[![CGL](https://github.com/mteu/zealous-stan/actions/workflows/cgl.yaml/badge.svg)](https://github.com/mteu/zealous-stan/actions/workflows/cgl.yaml)
[![Latest Stable Version](http://poser.pugx.org/shrug/zealous-stan/v)](https://packagist.org/packages/shrug/zealous-stan)
[![License](http://poser.pugx.org/shrug/zealous-stan/license)](https://packagist.org/packages/shrug/zealous-stan)

# Zealous Stan
</div>

**Zealous Stan** is a simple and modest, and obviously highly subjective collection of commonly used [PHPStan](https://github.com/phpstan/phpstan) rules.

## 🚨 Disclaimer
Since **Zealous Stan** is my personal configuration for private projects it might not be generic enough to meet the needs of a larger audience. Chances are it never will. So, if you really wish to use it as is be prepared for unannouned breaking changes and/or semver violations. This packages likely needs additional configuration that I may or may not have documented here. Use at your own risk, please.

## ⚡ Usage

Require this package and make sure to configure PHPStan according to your needs by putting a configuration file in your project
(e.g. as `phpstan.neon` file in your package root.)

```bash
composer require shrug/zealous-stan --dev
```

If you're using the [`phpstan/extension-installer`](https://github.com/phpstan/extension-installer) you're good to go.

## 🚀 Featured Extensions

* [ergebnis/phpstan-rules](https://github.com/ergebnis/phpstan-rules)
* [phpstan/phpstan-deprecation-rules](https://github.com/phpstan/phpstan-deprecation-rules)
* [phpstan/phpstan-strict-rules](https://github.com/phpstan/phpstan-strict-rules)
* [spaze/phpstan-disallowed-calls](https://github.com/spaze/phpstan-disallowed-calls)
* [symplify/phpstan-rule](https://github.com/symplify/phpstan-rules)

## 🔎 Custom Rules
Additionally, **Zealous Stan** offers custom PHPStan rules for various common use cases.
* [`RequireCopyrightInformationInFirstCommentRule`](docs/custom_rules.md)
* [`RequireLicenseInformationInFirstCommentRule`](docs/custom_rules.md)

> Please keep in mind that the list of featured extensions is highly subjective and only reflects my current workflow. 🤷

## 💛 Acknowledgement
I'm very grateful for the good people that created, maintain and sponsor [PHPStan](https://github.com/phpstan/phpstan). Děkuji, [Ondřej](https://github.com/ondrejmirtes)
and everyone who has contributed!

## ⭐ License
This project is licensed under [GNU General Public License 3.0 (or later)](LICENSE).
