#!/usr/bin/env python
# -*- coding: utf-8 -*- #
from __future__ import unicode_literals

AUTHOR = 'Stefano Carlesso'
SITENAME = 'Robe libere'
#SITESUBTITLE = 'wow'
SITEURL = 'http://localhost:8000'

PATH = 'content'

TIMEZONE = "Europe/Rome"

DEFAULT_LANG = 'it'

# Feed generation is usually not desired when developing
FEED_ALL_ATOM = None
CATEGORY_FEED_ATOM = None
TRANSLATION_FEED_ATOM = None
AUTHOR_FEED_ATOM = None
AUTHOR_FEED_RSS = None

GITHUB_URL = 'https://github.com/argoste'



DEFAULT_PAGINATION = False

# Uncomment following line if you want document-relative URLs when developing
#RELATIVE_URLS = True

LOAD_CONTENT_CACHE = False
DELETE_OUTPUT_DIRECTORY = True
OUTPUT_PATH = 'output/'
STATIC_PATHS = ['images', 'pdf']
