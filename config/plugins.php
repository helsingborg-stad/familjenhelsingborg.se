<?php

/**
 * Turn of admin panel for ACF.
 * @var bool
 */
 define('ACF_LITE', true);

/**
 * Force search statistics to only list local searches.
 * @var bool
 */
 define('LOCAL_SITE_STATS', true);

/**
 * Municipio webfont
 * Load webfonts for municipio theme.
 */

define('WEB_FONT', 'Roboto');

/**
 * Enable ssl proxy mode in ssl plugin
 * @var bool
 */
 define('SSL_PROXY', true);

/**
 * Set a priority to load algolia search at
 * @var bool
 */
define('ALGOLIA_INIT_PRIORITY', 5);

/**
 * Email send from name used in modularity-form-builder
 * @var string
 */
define('MOD_FORMS_MAIL_FROM_NAME', 'Familjenhelsingborg');
