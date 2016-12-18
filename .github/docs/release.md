# Prerequisites
The release require the following tools installed on your development system:

- Installation
  - Linux
    Follow this guide https://github.com/nvie/gitflow/wiki/Linux

  - OSX

    ```  brew install git-flow  ```

- Initialize git-flow for the project

  ``` git checkout master && git-flow init -d ```

# Understanding Branches Structure

  - master => production ready code
  - develop => pre-production code can be deployed on staging instances and well tested by devs before merging their respective Branches
  - feature/author/feature-name => these branches will be used by devs who are working on independent modules
  - release/v* => branches taken out of develop at some point for releasing a set of feature.
  - hotfix/* => branches forked for releasing immediate fixes


# To get started with a new release
Create a branch, update version, and add release notes by running `make-branch`

```
./github/scripts/release/make-branch
```

As part of this script you'll be asked to:
1. Write release notes in CHANGELOG.txt

  Almost every feature enhancement should be mentioned, with the most visible/exciting ones first. Use descriptive sentences and give context where appropriate.

  Bug fixes are worth mentioning if it's likely that they've affected lots of people, or if they were regressions in the previous version.

  Improvements to the code are not worth mentioning.

# To release a version
```
./github/scripts/releases/push-release
```

# Versioning
  - we use semantic Versioning
