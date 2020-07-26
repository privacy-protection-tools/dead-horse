#!/bin/bash

source /etc/profile

cd $(cd "$(dirname "$0")";pwd)

curl --connect-timeout 60 -s -o white_domain_list.php https://raw.githubusercontent.com/privacy-protection-tools/anti-AD/master/scripts/lib/white_domain_list.php

php make-white-list.php
