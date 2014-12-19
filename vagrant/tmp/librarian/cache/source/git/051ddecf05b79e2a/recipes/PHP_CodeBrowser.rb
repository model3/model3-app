#
# Cookbook Name:: chef-php-extra
# Recipe:: PHP_CodeBrowser
#
# Copyright 2012, Alistair Stead
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#     http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.
#

include_recipe "chef-php-extra::pear"

channels = [
    "pear.horde.org",
    "pear.symfony-project.com",
    "components.ez.no"
]

channels.each do |chan|
  chef_php_extra_pear_channel chan do
    action :discover
  end
end

pu = chef_php_extra_pear_channel "pear.phpunit.de" do
  action :discover
end

chef_php_extra_pear "PHP_CodeBrowser" do
  version "1.0.2"
  channel pu.channel_name
  action :install
end
