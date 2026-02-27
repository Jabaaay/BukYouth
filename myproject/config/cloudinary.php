<?php

/*
 * This file is part of the Laravel Cloudinary package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Cloudinary Configuration
    |--------------------------------------------------------------------------
    |
    | Configure your Cloudinary account details here. Make sure to add these
    | values in your .env file:
    | CLOUDINARY_CLOUD_NAME, CLOUDINARY_API_KEY, CLOUDINARY_API_SECRET
    |
    */

    'cloud' => [
        'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
        'api_key'    => env('CLOUDINARY_API_KEY'),
        'api_secret' => env('CLOUDINARY_API_SECRET'),
    ],

    /*
    |--------------------------------------------------------------------------
    | URL Configuration
    |--------------------------------------------------------------------------
    |
    | Use 'secure' => true to generate HTTPS URLs for your images by default.
    |
    */
    'url' => [
        'secure' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Upload Preset
    |--------------------------------------------------------------------------
    |
    | Optional: Specify an unsigned upload preset from your Cloudinary dashboard.
    | Useful if you want to upload without authentication from the client side.
    |
    */
    'upload_preset' => env('CLOUDINARY_UPLOAD_PRESET', null),

    /*
    |--------------------------------------------------------------------------
    | Notification URL
    |--------------------------------------------------------------------------
    |
    | Optional: URL to notify your application when an upload, delete or other
    | API process is completed. Usually used with webhooks.
    |
    */
    'notification_url' => env('CLOUDINARY_NOTIFICATION_URL', null),

];