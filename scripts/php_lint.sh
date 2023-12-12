#!/bin/bash

project_path="$1"

echo "Current Path: $(pwd)"
echo "Project Path: $project_path"

handle_error() {
    echo "An error has occurred. Please check the script or project path."
    exit 1
}

trap 'handle_error' ERR

find "$project_path" -type f -name "*.php" -not -path '*/vendor/*' -print0 | xargs -0 -I {} -P 20 bash -c 'php -l "{}"' && echo "OK"
