<?php

/**
 * Plugin Name:         Google Analytics for WordPress by La Baleine Basque
 * Plugin URI:          https://labaleinebasque.fr
 * Description:         L'extension officielle Google Analytics de la Baleine Basque
 * Author:              La Baleine Basque
 * Author URI:          https://labaleinebasque.fr
 *
 * Version:             0.0.1
 * Requires at least:   3.8.0
 * Tested up to:        5.0
 *
 * License:             GPL v3
 *
 * Text Domain:         la-baleine-basque-google-analytics
 * Domain Path:         /languages
 *
 * La Baleine Basque Toolbox
 * Copyright (C) 2019, La Baleine Basque, contact@labaleinebasque.fr
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category            Plugin
 * @copyright           Copyright © 2019 Matthieu Girard
 * @author              Matthieu Girard
 * @package             LaBaleineBasqueToolbox
*/

// Exit if accessed directly.

if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// Include Tracking Code from test file

require_once '/include/variable.php';

// Simple function to push the HTMl script tag to the WP Head

function lbb_google_analytics() { ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id="<?php $tracking ?>></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
  
      gtag('config', $tracking );
    </script>
    <?php
    }
    
  add_action( 'wp_head', 'lbb_google_analytics', 10 );

  ?>