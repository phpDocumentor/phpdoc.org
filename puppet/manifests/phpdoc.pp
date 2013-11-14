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
  package {["python-setuptools", "make", "texlive-latex-recommended", "texlive-fonts-recommended", "openjdk-6-jre"] : }

  exec { "sudo easy_install -U sphinx":
    command => "/usr/bin/sudo /usr/bin/easy_install -U sphinx",
    require => [ Package["python-setuptools"] ],
    timeout => 0
  }

  php::module { "mysql" : }
  php::module { "gd" : }

  apache::module{ ['rewrite']: }

  apache::vhost { 'default':
    docroot     => '/var/www',
    server_name => false,
    priority    => '',
    enable      => false
  }

    package { "compass":
        provider => "gem",
        ensure => installed,
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

  mysql::grant { 'phpdoc':
    mysql_privileges => 'ALL',
    mysql_password   => 'phpdoc',
    mysql_db         => 'phpdoc',
    mysql_user       => 'phpdoc',
    mysql_host       => 'localhost'
  }
}
