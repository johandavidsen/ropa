#!/bin/bash

if [ -f .version ]
then
    export $(cat .version | sed 's/#.*//g' | xargs);
else
    export CURRENT="1.0.0";
fi

while getopts v: flag
do
    case "${flag}" in
        v) NEXT=${OPTARG};;
    esac
done

if [ -z "$NEXT" ];
then
  echo "Please specify next version with -v"
  exit
fi

echo "Making new version ${NEXT}, replacing ${CURRENT}"

export ESCAPED_CURRENT=$(printf '%s\n' "$CURRENT" | sed -e 's/[]\/$*.^[]/\\&/g');
export ESCAPED_NEXT=$(printf '%s\n' "$NEXT" | sed -e 's/[]\/$*.^[]/\\&/g');

echo "Bumping version numbers in functions.php, style.css and package.json";

sed -i '' -e "s/define( 'ROPA_VERSION', '$ESCAPED_CURRENT' );/define( 'ROPA_VERSION', '$ESCAPED_NEXT' );/g" ./functions.php;
sed -i '' -e "s/\Version\: $ESCAPED_CURRENT/Version\: $ESCAPED_NEXT/g" ./style.css;
sed -i '' -e "s/\"version\"\: \"$ESCAPED_CURRENT\"/\"version\"\: \"$ESCAPED_NEXT\"/g" ./package.json;

echo "Building Assets for production...";
yarn build:production &> /dev/null;

if [ -f .version ]
then
    rm .version
fi

echo "CURRENT=$NEXT" > .version
echo "Done."
