# Git Hooks

Encourage development teams to use better coding style:

- PHP Linter will help to avoid commit with invalid script
- Encourage team to have same coding standard

## Features

This package will install pre-commit hooks to the repository to encourage team using same coding standard.

## Installation

1. `composer require arif-rh/git-hooks`
2. in the main `composer.json` add these scripts:

````
 "scripts": {
        "post-install-cmd": [
            "Arifrh\\GitHooks\\PreCommit::PSR2" // or CI4
        ],
		"post-update-cmd": [
            "Arifrh\\GitHooks\\PreCommit::PSR2" // or CI4
        ]
    }
````
Note: 
- use `PSR2` if you want to use PSR2 Standard, and use `CI4` if you want to use CodeIgniter4 standard 