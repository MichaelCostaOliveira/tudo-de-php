<?php

echo htmlentities('a tag <strong>texto</strong>');
echo '<hr>';
echo html_entity_decode('&lt;strong&gt;texto&lt;/strong&gt;');
echo '<hr>';
echo ('&lt;strong&gt;texto&lt;/strong&gt;');
echo '<hr>';
echo htmlentities('&lt;strong&gt;texto&lt;/strong&gt;');