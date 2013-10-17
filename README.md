# Symfony Blog
## Summary
This is a blog created with Symfony in EMA's course

## Run the project
### MAMP user
```
# sudo rm /usr/bin/php
# sudo rm /usr/bin/pear
# sudo ln -s /Applications/MAMP/bin/php/**phpVERSION**/bin/php /usr/bin/php
# sudo ln -s /Applications/MAMP/bin/php/**phpVERSION**/bin/pear /usr/bin/pear
```

### Install the blog
```
# git glone https://github.com/EMA-INFRES4/SYMFONY-BLOG.git
# cd SYMFONY-BLOG
# php composer.phar install
# php app/console doctrine:schema:update --force 
```
### Creating users
#### Simple user
```
# php app/console fos:user:create xavier xavier@talandier.fr monpasswd
```
#### Admin user
```
# php app/console fos:user:create god got@talandier.fr monpasswd
# php app/console fos:user:promote god ROLE_ADMIN
```
