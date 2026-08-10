<?php
/**
 * Shared CSIC primary nav links (Services / Tech Stack / Blog / Get Audit).
 *
 * Included by front-page.php, header.php, and page-csic-master.php so the
 * link targets can't drift between templates the way they previously did
 * (page-csic-master.php was missing the Blog link, and "Get Audit" pointed
 * at different destinations in different files).
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<li><a href="https://csicservices.com/#services">Services</a></li>
<li><a href="https://csicservices.com/#tech">Tech Stack</a></li>
<li><a href="https://csicservices.com/blog/">Blog</a></li>
<li><a href="https://csicservices.com/get-audit/">Get Audit</a></li>
