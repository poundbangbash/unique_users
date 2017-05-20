#!/bin/bash

# Remove user_sessions script
rm -f "${MUNKIPATH}preflight.d/unique_users.py"

# Remove network_shares.plist file
rm -f "${CACHEPATH}unique_users.plist"
