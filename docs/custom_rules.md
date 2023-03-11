# Custom Rules

**Zealous Stan** ships custom rules that need additional configuration:
* [`RequireCopyrightInformationInFirstCommentRule`](#RequireCopyrightInformationInFirstCommentRule)
* [`RequireLicenseInformationInFirstCommentRule`](#RequireLicenseInformationInFirstCommentRule)

### [`RequireCopyrightInformationInFirstCommentRule`](../src/Rules/RequireCopyrightInformationInFirstCommentRule.php)
This rule checks whether there is a PHPDoc comment block present that contains copyright information
identified by a needle string in the PHPStan configuration.

#### Sample configuration:
```neon
# phpstan.neon

shrug:
  copyrightIdentifier: 'Copyright (C) 2023'
```

### [`RequireLicenseInformationInFirstCommentRule`](../src/Rules/RequireLicenseInformationInFirstCommentRule.php)
This rule checks whether there is a PHPDoc comment block present that contains license information. You
can use pre-defined license checks values or define a custom string that is being looked for.

#### Sample configuration:
```neon
# phpstan.neon

shrug:
    # Pre-configured checks when applying 'GPL-2.0' or 'GPL-3.0' as value.
    # Alternatively, use a custom string to look for in the file.
    requiredLicenseIdentifier: 'GPL-3.0'
```
