<?php
$config = array (
  'debug' => 0,
  'MISP' => 
  array (
    'baseurl' => 'http://misp-c.daan.nl',
    'footermidleft' => '',
    'footermidright' => '',
    'org' => 'ORGNAME',
    'showorg' => true,
    'threatlevel_in_email_subject' => true,
    'email_subject_TLP_string' => 'tlp:amber',
    'email_subject_tag' => 'tlp',
    'email_subject_include_tag_name' => true,
    'background_jobs' => true,
    'osuser' => 'www-data',
    'email' => 'admin@admin.test',
    'contact' => 'admin@admin.test',
    'cveurl' => 'https://cve.circl.lu/cve/',
    'cweurl' => 'https://cve.circl.lu/cwe/',
    'disablerestalert' => false,
    'default_event_distribution' => '1',
    'default_attribute_distribution' => 'event',
    'tagging' => true,
    'full_tags_on_event_index' => true,
    'attribute_tagging' => true,
    'full_tags_on_attribute_index' => true,
    'footer_logo' => '',
    'take_ownership_xml_import' => false,
    'unpublishedprivate' => false,
    'disable_emailing' => false,
    'manage_workers' => true,
    'python_bin' => '/usr/bin/python3',
    'external_baseurl' => 'http://misp-b.daan.nl',
    'forceHTTPSforPreLoginRequestedURL' => false,
    'showCorrelationsOnIndex' => true,
    'default_event_tag_collection' => 0,
    'language' => 'eng',
    'proposals_block_attributes' => false,
    'redis_host' => 'redis',
    'redis_port' => 6379,
    'redis_database' => 13,
    'redis_password' => '',
    'ssdeep_correlation_threshold' => 40,
    'extended_alert_subject' => false,
    'default_event_threat_level' => '4',
    'newUserText' => 'appelbanaan',
    'passwordResetText' => 'Dear MISP user,\\n\\nA password reset has been triggered for your account. Use the below provided temporary password to log into MISP at $misp, here you will be prompted to manually change your password to something of your own choice.\\n\\nUsername: $username\\nYour temporary password: $password\\n\\nIf you have any questions, don\'t hesitate to contact us at: $contact.\\n\\nBest regards,\\n Your $org MISP support team',
    'enableEventBlocklisting' => true,
    'enableOrgBlocklisting' => true,
    'log_client_ip' => true,
    'log_auth' => false,
    'store_api_access_time' => false,
    'disableUserSelfManagement' => false,
    'disable_user_login_change' => false,
    'disable_user_password_change' => false,
    'disable_user_add' => false,
    'block_event_alert' => false,
    'block_event_alert_tag' => 'no-alerts="true"',
    'block_old_event_alert' => false,
    'block_old_event_alert_age' => 0,
    'block_old_event_alert_by_date' => 0,
    'incoming_tags_disabled_by_default' => false,
    'maintenance_message' => 'Great things are happening! MISP is undergoing maintenance, but will return shortly. You can contact the administration at $email.',
    'welcome_text_top' => '',
    'welcome_text_bottom' => '',
    'attachments_dir' => NULL,
    'download_attachments_on_load' => true,
    'title_text' => 'MISP',
    'terms_download' => false,
    'showorgalternate' => false,
    'event_view_filter_fields' => 'id, uuid, value, comment, type, category, Tag.name',
    'live' => true,
    'uuid' => '',
    'delegation' => true,
    'max_correlations_per_event' => 5000,
    'disable_auto_logout' => false,
    'log_paranoid_skip_db' => false,
    'log_paranoid' => false,
    'log_user_ips' => true,
    'event_alert_republish_ban' => true,
    'event_alert_republish_ban_threshold' => 120,
    'event_alert_republish_ban_refresh_on_retry' => true,
    'user_email_notification_ban' => true,
    'user_email_notification_ban_time_threshold' => 120,
    'user_email_notification_ban_amount_threshold' => 10,
    'user_email_notification_ban_refresh_on_retry' => true,
    'warning_for_all' => false,
    'enable_synchronisation_filtering_on_type' => false,
    'ca_path' => '/etc/ssl/certs/ca-certificates.crt',
    'host_org_id' => 1,
    'self_update' => false,
    'log_user_ips_authkeys' => true,
  ),
  'GnuPG' => 
  array (
    'onlyencrypted' => false,
    'email' => 'admin@admin.test',
    'homedir' => '/var/www/MISP/.gnupg',
    'password' => 'passphrase',
    'bodyonlyencrypted' => false,
    'sign' => true,
    'obscure_subject' => false,
    'binary' => '/usr/bin/gpg',
  ),
  'SMIME' => 
  array (
    'enabled' => false,
    'email' => '',
    'cert_public_sign' => '',
    'key_sign' => '',
    'password' => '',
  ),
  'Proxy' => 
  array (
    'host' => '',
    'port' => '',
    'method' => '',
    'user' => '',
    'password' => '',
  ),
  'SecureAuth' => 
  array (
    'amount' => 5,
    'expire' => 300,
  ),
  'Security' => 
  array (
    'level' => 'medium',
    'salt' => 'A3u$Bu-hyn5ma&cBozfcDr7Id6X3N9uB',
    'cipherSeed' => '',
    'require_password_confirmation' => true,
    'auth_enforced' => false,
    'rest_client_baseurl' => 'http://misp-b.daan.nl',
    'advanced_authkeys' => true,
    'password_policy_length' => 12,
    'password_policy_complexity' => '/^((?=.*\\d)|(?=.*\\W+))(?![\\n])(?=.*[A-Z])(?=.*[a-z]).*$|.{16,}/',
    'self_registration_message' => 'If you would like to send us a registration request, please fill out the form below. Make sure you fill out as much information as possible in order to ease the task of the administrators.',
    'allow_self_registration' => false,
    'rest_client_enable_arbitrary_urls' => false,
    'user_monitoring_enabled' => false,
    'authkey_keep_session' => false,
    'disable_local_feed_access' => false,
    'enable_svg_logos' => false,
    'csp_enforce' => true,
    'auth' => '',
  ),
  'Plugin' => 
  array (
    'ZeroMQ_redis_host' => 'redis',
    'ZeroMQ_enable' => false,
    'Enrichment_services_enable' => true,
    'Enrichment_services_url' => 'http://misp-modules',
    'Import_services_enable' => true,
    'Import_services_url' => 'http://misp-modules',
    'Export_services_enable' => true,
    'Export_services_url' => 'http://misp-modules',
    'Cortex_services_enable' => false,
    'Action_services_enable' => false,
    'Enrichment_hover_enable' => false,
    'Enrichment_hover_popover_only' => false,
    'Enrichment_timeout' => 30,
    'Enrichment_hover_timeout' => 5,
  ),
  'SimpleBackgroundJobs' => 
  array (
    'enabled' => true,
    'redis_host' => 'redis',
    'redis_port' => 6379,
    'redis_password' => '',
    'redis_database' => 1,
    'redis_namespace' => 'background_jobs',
    'max_job_history_ttl' => 86400,
    'supervisor_host' => '127.0.0.1',
    'supervisor_port' => 9001,
    'supervisor_user' => 'supervisor',
    'supervisor_password' => 'supervisor',
  ),
);
