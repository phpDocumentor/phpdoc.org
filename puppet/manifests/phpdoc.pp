group { "puppet":
  ensure => "present",
}

File { owner => 0, group => 0, mode => 0644 }

node default {
  class { 'mysql': }
  class { 'apache': }
  class { 'php':
    augeas => true
  }

  package {'git': }

  php::module { "mysql" : }
  php::module { "gd" : }

  apache::module{ ['rewrite']: }

  apache::vhost { 'default':
    docroot     => '/var/www',
    server_name => false,
    priority    => '',
    enable      => false
  }

  file {'/var/www/phpdoc.org':
    ensure => link,
    target => "/vagrant/web"
  }

  apache::vhost { 'website':
    docroot  => '/var/www/phpdoc.org',
    server_name => 'dev.www.phpdoc.org',
    priority => 10,
    require => File['/var/www/phpdoc.org']
  }
}
