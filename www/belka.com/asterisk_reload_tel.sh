#!/bin/bash
asterisk -x 'sip show peers' | grep 192.168.2 | awk {'print $1'} | cut -c-3 >> ./sip_number
con_asterisk="asterisk -x "
sip_notify="sip notify linksys-cold-restart"

sip_number="./sip_number"

while read SIP; do
        $con_asterisk ''"$sip_notify $SIP"''
        sleep 1
done < $sip_number