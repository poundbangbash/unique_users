#!/bin/bash

# user_sessions controller
CTL="${BASEURL}index.php?/module/unique_users/"

# Get the scripts in the proper directories
"${CURL[@]}" "${CTL}get_script/unique_users.py" -o "${MUNKIPATH}preflight.d/unique_users.py"

# Check exit status of curl
if [ $? = 0 ]; then
	# Make executable
	chmod a+x "${MUNKIPATH}preflight.d/unique_users.py"

	# Set preference to include this file in the preflight check
	setreportpref "unique_users" "${CACHEPATH}unique_users.plist"

else
	echo "Failed to download all required components!"
	rm -f "${MUNKIPATH}preflight.d/unique_users.py"

	# Signal that we had an error
	ERR=1
fi


