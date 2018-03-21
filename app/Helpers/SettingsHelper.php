<?php
/**
 * System wide settings helper.
 *
 * The SettingsHelper provides system wide settings, including the caching of those values to prevent unneeded database queries.
 *
 * @since 0.1
 * @author Pim Oude Veldhuis <p.oudeveldhuis@nsosi.com>
 * @copyright 2018 North Sea Open Source Initiative (www.nsosi.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */

namespace App\Helpers;

use Illuminate\Support\Facades\Cache;

use App\Models\Setting;

/**
 * Class SettingsHelper
 */
class SettingsHelper
{
    /**
     * Get a setting from cache or if not cached yet retrieve it from the database and cache it
     *
     * @param string $key
     * @return string
     */
    public static function get($key)
    {
        return Cache::remember('settings.' . $key, 60, function () use ($key) {
            return Setting::where('key', $key)->value('value');
        });
    }
    
    /**
     * Create (or update) a setting. Calling this function will also clear the cache for this setting
     *
     * @param string $key
     * @param string $value
     * @return void
     */
    public static function set($key, $value)
    {
        if(($setting = Setting::find($key)) !== null) {
            $setting->fill(['value' => $value])->save();
        } else {
            Setting::create([
                'key' => $key,
                'value' => $value
            ]);
        }
        
        Cache::forget('settings.' . $key);
    }
}
