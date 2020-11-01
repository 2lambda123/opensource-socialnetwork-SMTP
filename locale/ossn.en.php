<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$en = array(
	'smtp' => 'SMTP',
	'smtp:settings' => 'SMTP Settings',
	'smtp:connection:connected' => 'SMTP Connection successfully established',
	'smtp:connectio:failed' => 'SMTP Connection Failed',
	'smtp:host' => "Mail Server (mail.yourdomain.com)",
	'smtp:port' => 'Port',
	'smtp:username' => 'Username (name@yourdomain.com)',
	'smtp:password' => 'Password',
	'smtp:oauth:warning' => 'Please note that this component will not work with gmail, yahoo, outlook SMTP because those are personal emails and require OAUTH authentication. Please use standard SMTP from your domain hosting provider. You may use AWS SMTP.'
);
ossn_register_languages('en', $en); 
