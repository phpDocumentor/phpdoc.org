# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant::Config.run do |config|
  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"
  config.vm.host_name = "dev.www.phpdoc.org"

  config.vm.forward_port 80, 8080
  config.vm.network :hostonly, "10.0.0.2"
  config.vm.provision :shell, :path => "puppet/upgrade-puppet.sh"

  config.vm.provision :puppet do |puppet|
     puppet.module_path    = "puppet/modules"
     puppet.manifests_path = "puppet/manifests"
     puppet.manifest_file  = "phpdoc.pp"
  end
end
