<?php
function add_next_options_page(){
    add_theme_page('NexT WP 主题选项', 'NexT WP', 'administrator', 'next', 'next_options_page');
}

add_action('admin_menu', 'add_next_options_page');

function next_options_page(){ ?>
    <div class="wrap">
        <h1>NexT WP 主题设置选项</h1>
        <?php if($_GET['settings-updated'] == 'true'){ ?>
            <div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible">
                <p><strong>设置已保存。</strong></p>
                <button type="button" class="notice-dismiss">
                    <span class="screen-reader-text">忽略此通知。</span>
                </button>
            </div>
        <?php } ?>
        <form method="post" name="next_options" id="next_options" action="options.php">
            <table class="form-table">
                <tbody>
                    <tr>
                        <th><label for="next_site_year">建站年份</label></th>
                        <td>
                            <input name="next_site_year" type="text" class="regular-text" value="<?php echo get_option('next_site_year'); ?>">
                            <p class="description">用于显示在页面底部版权信息</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="next_author">作者</label></th>
                        <td>
                            <input name="next_author" type="text" class="regular-text" value="<?php echo get_option('next_author','admin'); ?>">
                            <p class="description">博客作者的用户名，默认为 admin</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="next_scheme">布局样式</label></th>
                        <td>
                            <fieldset>
                                <legend class="screen-reader-text"><span>布局样式</span></legend>
                                <label title=""><input name="next_scheme" type="radio" value="muse" <?php if ( get_option('next_scheme', 'muse') == 'muse' ) { echo "checked=\"checked\"";} ?>>Muse</label><br>
                                <label title=""><input name="next_scheme" type="radio" value="mist" <?php if ( get_option('next_scheme', 'muse') == 'mist' ) { echo "checked=\"checked\"";} ?>>Mist</label><br>
                                <label title=""><input name="next_scheme" type="radio" value="pisces" <?php if ( get_option('next_scheme', 'muse') == 'pisces' ) { echo "checked=\"checked\"";} ?>>Pisces</label>
                            </fieldset>
                            <p class="description">页面布局样式，默认为 Muse</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="next_rss">RSS 订阅</label></th>
                        <td><input name="next_rss" type="checkbox" value="display" <?php if ( get_option('next_rss', 'display') == 'display' ) { echo "checked=\"checked\"";} ?>> 显示 RSS 订阅链接</td>
                    </tr>
                    <tr>
                        <th><label for="next_analyze_code">统计代码</label></th>
                        <td>
                            <textarea name="next_analyze_code" rows="3" cols="40"><?php echo get_option('next_analyze_code'); ?></textarea>
                            <p class="description">所有内容均不会显示在页面内，比如 CNZZ 的“站长统计”字样</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php wp_nonce_field('update-options'); ?>
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="page_options" value="next_site_year,next_author,next_analyze_code,next_scheme,next_rss">
            <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="保存设置"></p>
        </form>
    </div>
<?php } ?>