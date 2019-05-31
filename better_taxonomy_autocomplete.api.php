<?php

/**
 * Add, remove or modify router paths that you want to use the
 * better_taxonomy_autocomplete callback.
 *
 * @param $paths
 */
function hook_better_taxonomy_autocomplete_page_callbacks_alter(&$paths) {
  $paths[] = 'another/modules/taxonomy/autocomplete/page/callback/path';
}