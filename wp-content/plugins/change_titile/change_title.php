<?php
/*
Plugin Name: Change Page Title
Plugin URI: http://страница_с_описанием_плагина_и_его_обновлений
Description: Расширение призванное заменять содержимое тега 'title' на указанное.
Version: 1.0
Author: Лашин Артем
Author URI: http://github.com/lan82art
*/

/*  Copyright 2017  ЛАШИН АРТЕМ(LASHIN ARTEM)  (email: lanart@ex.ua)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
// create custom plugin settings menu
add_action('admin_menu', 'LanartPageTitleMenu');

add_filter( 'pre_get_document_title', function(){

    return get_option('page_title');
} );


function LanartPageTitleMenu() {

    //create new top-level menu
    add_menu_page('PageTitleSettings', 'PageTitleSettings', 'administrator', __FILE__, 'LanartPageTitlePage');

    //call register settings function
    add_action( 'admin_init', 'register_mysettings' );
}

function register_mysettings() {
    //register our settings
    register_setting( 'lanart-settings', 'page_title' );
}

function LanartPageTitlePage() {
    ?>
    <div class="wrap">
        <h2>LanArtPageTitle</h2>

        <form method="post" action="options.php">
            <?php settings_fields( 'lanart-settings' ); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">New PageTitle</th>
                    <td><input type="text" name="page_title" value="<?php echo get_option('page_title'); ?>" /></td>
                </tr>
            </table>

            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>
        </form>
    </div>
<?php } ?>