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

?>
<h1>FAQ</h1>
<p class="lead">How often do you check a cert?</p>
<p>The check will run at least once every 2 days, but most of the time daily.</p>

<hr>

<p class="lead">When will you email me?</p>
<p>We will email you on the following events:<br>
<ul>
  <li>When you sign up, to confirm the domain(s).</li>
  <li>If a certificate expires in:</li>
  <ul>
    <li>90 days (3 months)</li>
    <li>60 days (2 months)</li>
    <li>30 days (1 month)</li>
    <li>14 days (2 weeks)</li>
    <li>7 days (1 week)</li>
    <li>5 days</li>
    <li>3 days</li>
    <li>2 days</li>
    <li>1 day</li>
  </ul>
  <li>The day your certificate expires.</li>
  <li>2 days after your certificated expired, and has not been replaced yet.</li>
  <li>7 days after your certificated expired, and has not been replaced yet.</li>
  <li>If we cannot connect to your site.</li>
  <li>If we cannot connect to your site for 7 days in a row, we'll delete the check.</li>
</ul>
<p>If you replace your certificate before it expires, we'll stop emailing you until the new certificate expires again.</p>

<hr>

<p class="lead">Do you check all certificates in the chain?</p>
<p>Yes. All certificates in the chain are checked, a maximum of 10. You will receive notification if any of the chain certificates expire as well.</p>

<hr>

<p class="lead">Do you provide any guarantees on uptime?</p>
<p>We provide this service on a best effort base. The project is fully open source, you can set up your own instance if you demand 100% uptime.</p>

<hr>

<p class="lead">What license is the project under?</p>
<p>GNU Affero GPL v3 or later.</p>