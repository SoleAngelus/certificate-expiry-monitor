<?php
// Copyright (C) 2020 Daniel Morris

// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.

// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.

// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.


error_reporting(E_ALL & ~E_NOTICE);
ob_start();
$write_cache = 0;

foreach (glob("functions/*.php") as $filename) {
  require($filename);
}

require('inc/header.php');
require('inc/nav.php');
?>

<!-- Begin page content -->
<main role="main" class="flex-shrink-0">
  <div class="container-fluid">
    
    <!--
    <h1>Heading</h1>
    <p class="lead">Lead text</p>
    <p>Body text</p>
    -->
    
    <div class="content-container">
      <div class='content'>
      <?php
      require('inc/intro.php');
      ?>
      </div>
    </div>
  </div>
</main>

<?php
require('inc/footer.php');
?>