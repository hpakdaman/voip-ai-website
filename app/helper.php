<?php

use Illuminate\Support\Facades\Auth;
use Intervention\Image\Laravel\Facades\Image;

if (!function_exists('format_date')) {
    /**
     * Format a date to a specific format.
     *
     * @param string $date
     * @param string $format
     * @return string
     */
    function format_date($date, $format = 'Y-m-d H:i:s')
    {
        return \Carbon\Carbon::parse($date)->format($format);
    }
}

if (!function_exists('ucfirst')) {
    /**
     * Format a date to a specific format.
     *
     * @param string $date
     * @param string $format
     * @return string
     */
    function ucfirst($string)
    {
        return \Illuminate\Support\Str::ucfirst($string);
    }
}

 

if (!function_exists('link_to')) {
    function link_to(string $url, string $title = null, array $attributes = [], bool $secure = null): string
    {
        $url = url($url);

        if (is_null($title)) {
            $title = $url;
        }

        $attributes = array_merge(['href' => $url], $attributes);

        $attributeString = collect($attributes)
            ->map(fn($value, $key) => "{$key}=\"{$value}\"")
            ->implode(' ');

        return "<a {$attributeString}>{$title}</a>";
    }
}



/**
 * Get the authenticated user.
 * @return App\Models\User
 */
function authUser()
{
    /**
     * @var App\Models\User $user
     */
    return Auth::user();
}

/**
 * Get the authenticated user.
 * @return integer
 */
function authId()
{
    /**
     * @var App\Models\User $user
     */
    $user= authUser();
    return  $user ? $user->id : null;
}

/**
 * Is the authenticated user an admin?
 */
function isAdmin()
{
    /**
     * @var App\Models\User $user
     */
    $user = Auth::user();
    return  $user && $user->isAdmin();
}
