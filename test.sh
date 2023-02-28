#!/bin/bash
set -e
set -o pipefail

files=(sitesync.php class/*.php compatibility/*.php template/*.php);
for file in "${files[@]}"
do
  php -l "$file";
done
