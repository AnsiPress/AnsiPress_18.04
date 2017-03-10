# AnsiPress

 <a href="https://www.paypal.me/AnsiPress"><img src="https://cloud.githubusercontent.com/assets/1223371/23652872/75a751aa-0350-11e7-8a1f-20460e1e82fa.png" width="80" height="20"></a> [![saythanks](https://img.shields.io/badge/say-thanks-ff69b4.svg)](https://saythanks.io/to/MiteshShah) [![Join AnsiPress Slack Channel](https://ansipress.herokuapp.com/badge.svg)](https://ansipress.herokuapp.com/)


[![AnsiPress](https://cloud.githubusercontent.com/assets/1223371/23602874/937c6338-0278-11e7-8a91-6d62d677c46b.png)](https://www.youtube.com/watch?v=s7ShsNrQ4-0)

## Quick Start

✓ = Under Testing
⚠ = Under Progress

### Features

✓ True Shared Hosting

✓ NGINX + PageSpeed

✓ PHP 7.1 With Different Master Process for Each User

✓ MariaDB

✓ WordPress (W3TC & FastCGI Cache)

⚠ Lets Encrypt (ETA in 2 Weeks)

⚠ Google PageSpeed Configuration (ETA in 3 Weeks)

⚠ NGINX Redis Module (ETA in 5 weeks)

⚠ Laravel Support (ETA in 10 weeks)

⚠ Drupal Support (ETA in 15 weeks)

**Operating System:**

- ✓ Ubuntu 16.04
- ⚠	Debian 8 & 9
- ⚠ CentOS 7


**Port Requirements:**

| Name  | Port Number | Inbound | Outbound  |
|:-----:|:-----------:|:-------:|:---------:|
|SSH    |22           | ✓       |✓          |
|HTTP    |80           | ✓       |✓          |
|HTTPS/SSL    |443           | ✓       |✓          |
|GPG Key Server    |11371           |        |✓          |



### Ansible - [Install Ansible] (https://miteshshah.github.io/devops/ansible/ansible-installation/)

#### Clone AnsiPress

```
$ git clone git@github.com:AnsiPress/AnsiPress.git
$ cd AnsiPress && git checkout develop
```

#### Setup SSH Server Login Details

* AnsiPress required you can login to remote server via `ssh AnsiPress.local`
* Change the [AnsiPerss.local] (https://github.com/AnsiPress/AnsiPress/blob/develop/hosts#L2) server name
* Make sure you are able to connect server via `ssh example.com`
* Refer - [SSH Configuration] (https://miteshshah.github.io/linux/ssh/ssh-tips-and-tricks/#ssh-config)

#### Run the AnsiPress Playbook

```
$ ansible-playbook -i hosts setup.yml --extra-vars="username=html website_name=html.com website_type=html"

$ ansible-playbook -i hosts setup.yml --extra-vars="username=php website_name=php.com website_type=php"

$ ansible-playbook -i hosts setup.yml --extra-vars="username=mysql website_name=mysql.com website_type=mysql"

$ ansible-playbook -i hosts setup.yml --extra-vars="username=wp website_name=wp.com website_type=wp"

$ ansible-playbook -i hosts setup.yml --extra-vars="username=wp website_name=w3tc.com website_type=w3tc"

$ ansible-playbook -i hosts setup.yml --extra-vars="username=wp website_name=wpfc.com website_type=wpfc"
```

### Track Development

[Milestone] (https://github.com/AnsiPress/AnsiPress/milestones)

### Donation
[![PayPal Donate](https://cloud.githubusercontent.com/assets/1223371/20793214/ec6ffca2-b7eb-11e6-9614-d893ff77a565.png)]  (https://paypal.me/AnsiPress)

Yes you can! Just click on the image above ;)

AnsiPress is made available for free. Any donations toward maintaining it and adding new features are greatly appreciated.
