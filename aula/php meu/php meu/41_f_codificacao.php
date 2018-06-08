<?php

echo htmlentities("<strong>texto</strong>");
echo'<hr>';
echo html_entity_decode('&lt;strong&gt;Texto&lt;/strong&gt;');
echo'<hr>';
echo ('&lt;strong&gt;Texto&lt;/strong&gt;');
echo'<hr>';
echo htmlentities('&lt;strong&gt;Texto&lt;/strong&gt;');