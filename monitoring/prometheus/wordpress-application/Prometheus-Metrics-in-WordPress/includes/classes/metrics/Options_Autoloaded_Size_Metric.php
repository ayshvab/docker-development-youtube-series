<?php

namespace WP_Prometheus_Metrics\metrics;

class Options_Autoloaded_Size_Metric extends Abstract_Gauge_Metric
{

    public function __construct()
    {
        parent::__construct('options_autoload_size');
    }

    function get_metric_value()
    {
        global $wpdb;
        $result = $wpdb->get_var("SELECT ROUND(SUM(LENGTH(option_value))/ 1024) FROM $wpdb->options WHERE `autoload` = 'yes'"); // phpcs:ignore WordPress.DB
        return $result ?? 0;
    }

    function get_help_text(): string
    {
        return _x('Options in autoload', 'Metric Help Text', 'prometheus-metrics-for-wp');
    }
}
