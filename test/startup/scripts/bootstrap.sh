#!/usr/bin/env bash

## Configure Apache
## Only thing you probably really care about is right here
	DOMAINS=("ankita.com")
	##DOMAINS=("www.dev.chinmayamission.com" "www.sandeepany.chinmayamission.com" )
	##DOMAINS=("www.westuck.com" "www.chinmayamission.com" "www.drupal8.com")

	## Loop through all sites
        for ((i=0; i < ${#DOMAINS[@]}; i++)); do

            ## Current Domain
            DOMAIN=${DOMAINS[$i]}

            echo "Creating directory for $DOMAIN..."
            mkdir -p /var/www/$DOMAIN/public

            echo "Creating vhost config for $DOMAIN..."
            sudo cp /etc/apache2/sites-available/scotchbox.local.conf /etc/apache2/sites-available/$DOMAIN.conf

            echo "Updating vhost config for $DOMAIN..."
            sudo sed -i s,scotchbox.local,$DOMAIN,g /etc/apache2/sites-available/$DOMAIN.conf
            sudo sed -i s,/var/www/public,/var/www/$DOMAIN/public,g /etc/apache2/sites-available/$DOMAIN.conf

            echo "Enabling $DOMAIN. Will probably tell you to restart Apache..."
            sudo a2ensite $DOMAIN.conf

            echo "So let's restart apache..."
            sudo service apache2 restart

        done
		
## End Configure Aapche