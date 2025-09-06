<?php
/*
Template Name: Error Log Viewer
*/

// Get the error log file path
$error_log = ini_get('error_log');

// If no error log is set, try to use a default location
if (empty($error_log)) {
    $error_log = 'php_error.log';
}

// Display the error log content
echo '<h1>Error Log Viewer</h1>';

if (file_exists($error_log)) {
    echo '<pre>';
    echo file_get_contents($error_log);
    echo '</pre>';
} else {
    echo '<p>Error log file not found at: ' . $error_log . '</p>';
    
    // Try to find error logs in common locations
    $possible_logs = [
        'error_log',
        'error.log',
        '../error_log',
        '../../error_log',
        'php_error.log',
        'php.log'
    ];
    
    foreach ($possible_logs as $log) {
        if (file_exists($log)) {
            echo '<p>Found log at: ' . $log . '</p>';
            echo '<pre>';
            echo file_get_contents($log);
            echo '</pre>';
            break;
        }
    }
}
?>