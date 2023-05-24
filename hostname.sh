#!/bin/bash

export NAME=$(hostname)

printenv | grep -i "NAME"

docker-compose -f test-compose.yml config

docker-compose -f test-compose.yml up -d 