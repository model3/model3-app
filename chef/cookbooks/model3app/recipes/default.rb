#
# Cookbook Name:: model3app
# Recipe:: default
#
# Copyright 2014 Hector Benitez
#
# All rights reserved - Do Not Redistribute
#

include_recipe "apache2"
include_recipe "composer"

web_app "model3app" do
  server_name "dev.model3app.com"
  docroot "/model3app/public/"
  allow_override "all"
end

execute("/usr/sbin/php5enmod mcrypt") do
  action [:run]
end

service "apache2" do
  action :restart
end

composer_project "/model3app/" do
    dev true
    quiet true
    prefer_dist false
    action :install
end