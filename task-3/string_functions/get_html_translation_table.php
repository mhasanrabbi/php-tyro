<?php

// Print the translation table used by the htmlspecialchars function

var_dump(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES | ENT_HTML5));