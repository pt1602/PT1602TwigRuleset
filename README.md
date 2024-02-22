[![Php](https://img.shields.io/badge/--blue?logo=php&logoColor=fff)](https://sass-lang.com/)
[![Maintenance](https://img.shields.io/badge/Maintained%3F-yes-blue.svg)](https://github.com/pt1602/PT1602TwigRuleset/graphs/commit-activity)
[![github forks](https://badgen.net/github/forks/pt1602/PT1602TwigRuleset/)](https://github.com/pt1602/PT1602TwigRuleset/network/)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-blue.svg)](http://makeapullrequest.com)
[![github stars](https://img.shields.io/github/stars/pt1602/PT1602TwigRuleset.svg?style=social&label=Star&maxAge=2592000)](https://github.com/pt1602/PT1602TwigRuleset/stargazers/)

---

# PT1602TwigRuleset

This is a custom ruleset for [TwigCs](https://github.com/friendsoftwig/twigcs) which contains
the [LowerCamelCaseVariable](https://github.com/Rareloop/twigcs-ruleset/blob/master/src/Rule/LowerCamelCaseVariable.php)
from [Rareloop TwigCS Ruleset](https://github.com/Rareloop/twigcs-ruleset) and the following default checks:

* ForbiddenFunctions
* RegEngineRule
* TrailingSpace

---

## Installation

```shell
composer require pt1602/pt1602twig-ruleset
```

## Usage

```shell
twigcs path/to/views --ruleset \\PT1602\\PT1602TwigRuleset\\PT1602TwigRuleset
```

---

[![MIT license](https://img.shields.io/badge/License-MIT-blue.svg)](https://lbesson.mit-license.org/)
![Open Source? Yes!](https://badgen.net/badge/Open%20Source%20%3F/Yes%21/blue?icon=github)