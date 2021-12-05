#!/bin/bash

echo '10.200.200.199 vmgate.linuxmastery.kr vmgate' >> /etc/hosts
echo '10.200.200.254 master.linuxmastery.kr master' >> /etc/hosts

wget https://apt.puppet.com/puppet6-release-focal.deb
dpkg -i puppet6-release-focal.deb
apt update
apt install puppet-agent

echo '[main]' >> /etc/puppetlabs/puppet/puppet.conf
echo 'server=vmgate.linuxmastery.kr' >> /etc/puppetlabs/puppet/puppet.conf
echo 'runinterval=1h' >> /etc/puppetlabs/puppet/puppet.conf
