# AnsiPress

[![Join AnsiPress Slack Channel](https://ansipress.herokuapp.com/badge.svg)](https://ansipress.herokuapp.com/)

## Quick Start

#### Ansible - [Install Ansible] (https://miteshshah.github.io/devops/ansible/ansible-installation/)

#### Clone AnsiPress

```
$ git clone git@github.com:AnsiPress/AnsiPress.git
$ cd AnsiPress
```

#### Run the AnsiPress Playbook

```
$ ansible-playbook -i hosts setup.yml --extra-vars="username=html website_name=html.com website_type=html"
$ ansible-playbook -i hosts setup.yml --extra-vars="username=php website_name=php.com website_type=php"
$ ansible-playbook -i hosts setup.yml --extra-vars="username=mysql website_name=mysql.com website_type=mysql"
$ ansible-playbook -i hosts setup.yml --extra-vars="username=wp website_name=wp.com website_type=wp"
$ ansible-playbook -i hosts setup.yml --extra-vars="username=wp website_name=w3tc.com website_type=w3tc"
$ ansible-playbook -i hosts setup.yml --extra-vars="username=wp website_name=wpfc.com website_type=wpfc"
```

[![PayPal Donate](https://cloud.githubusercontent.com/assets/1223371/20793214/ec6ffca2-b7eb-11e6-9614-d893ff77a565.png)]  (https://paypal.me/AnsiPress)

Yes you can! Just click on the image above ;)

AnsiPress is made available for free. Any donations toward maintaining it and adding new features are greatly appreciated.
