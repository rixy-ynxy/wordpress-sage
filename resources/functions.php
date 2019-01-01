<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);

function manual_add_dashboard_widgets() {
    wp_add_dashboard_widget (
        'manual_dashboard_widget',
        'RemoCa機能管理',
        'manual_dashboard_widget_function'
    );
}
function manual_dashboard_widget_function() {
    echo '
    <section class="useTool">
    <h2>利用ツール</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">ツール名</th>
                <th scope="col">招待コード</th>
                <th scope="col">ツールURL</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">プロジェクト</th>
                <td><a href="https://trello.com/invite/b/tmCiVHG4/17e871528fb58ce5507b73d44a9aebc9/%E8%82%B2%E5%85%90%C3%97%E3%82%AF%E3%83%AA%E3%82%A8%E3%82%A4%E3%82%BF%E3%83%BC">Trelloプロジェクト</a></td>
                <td><a href="https://trello.com/b/tmCiVHG4/remoca">https://trello.com/b/tmCiVHG4/remoca</a></td>
            </tr>
            <tr>
                <th scope="row">質問カード</th>
                <td><a href="https://trello.com/invite/b/kVbOuxOC/722b587219cfaeffe348485442cdfb20/remoca-%E8%B3%AA%E5%95%8F%E3%82%84%E7%9B%B8%E8%AB%87%E3%81%97%E3%81%9F%E3%81%84%E3%81%93%E3%81%A8free">Trello質問</a></td>
                <td><a href="https://trello.com/b/kVbOuxOC">https://trello.com/b/kVbOuxOC</a></td>
            </tr>            
            <tr>
                <th scope="row">Slack</th>
                <td><a href="https://ikuji-creator.herokuapp.com/">登録</a></td>
                <td>ikuji-creator.slack.com</td>
            </tr>
        </tbody>
    </table>
    </section>
    <section class="manual">
        <h2>ルール</h2>
        <ul>
            <li><a href="https://community.remoca.net/manual/">トリセツ</a></li>
            <li>プライバシーポリシー</li>
            <li>業務委託契約</li>
            <li>秘密保持契約</li>
        </ul>
    </section>
    ';
}
add_action('wp_dashboard_setup', 'manual_add_dashboard_widgets');
