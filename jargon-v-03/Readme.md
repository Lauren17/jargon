# <img src="./assets/images/wordpress-water-mark.png" width="100" align="center"> WordPress Working With Images

## Make A Plan

As with all ui/ux development you must plan out the layout of your WP application. One of your key decisions will be how to deal with images. Having a solid plan that is inclusive of all viewports as much as possible will help you with possible art direction problems during the WP build process.

## WordPress Media Library

WordPress has a built in media library for use with images video and audio. It also comes with some build in tools for sizing and croping images. These tools are adequate but sometime they are not enough when dealing with art direction. For a full explination on how the [WP Media Library works visis this link](https://wordpress.org/support/article/media-library-screen/)

## Adding Images To WordPress

There are several ways you can add images to WordPress and they each depend on your use case. A uses case is the problem your trying to solve.

You can add images is the following ways:

### From The Media Library

You can simply upload and image and copy the provided URL into your image tag. In the example below the image element uses an SVG. In order to use SVG you will have to add plugin support. To do this go to the plugins section of the dashboard click the add new buton on the top left hand side of the plugin panel. Use the Search plugins text field to look for plugins that allow for SVG support in WordPress. Evaluate different plugins find one that works for you. Remember to take a look at the number of downloads and the user comments section of the plugin.

**Note:** Images uploaded using the Media Library are found in the wp-content folder in the uploads directory.

```html
<img
  src="http://student.dmitstudent.ca/dmit2032/jargon/wp-content/uploads/2019/10/bars.svg"
  alt="mobile menu icon"
/>
```

### Custom Pathed Images

You can also create a custom path to a folder that contains images that your site requires. This is helpful when you don't want your site users to delete the image from the media library. To use this technique you must create a uri path to your image. For example using the WordPress get_template_directory_uri() function you will get the web path to the current theme directory. Then append the path to the image you are trying to insert in this case the company logo.svg is being inserted.

```php
<img class="jargon-logo" src=<?php echo get_template_directory_uri().'/assets/icons/logo.svg'; ?> alt="jargon company logo">
```

### Post and Page Images

To use images that are incertied into Post and Pages you will have various techniques to choose from. A good place to start is looking at the [Featured Images and Post Thumbnails](https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/) section of the WordPress developers handbook.

```php
 // first add theme support for post thumbnails
    add_theme_support( 'post-thumbnails' );
```

### Cloudinary

When prepping your image content for a responsive WP site you can spend countless hours getting images sized, optimized, cropped. Though WordPress has tools build in for responsive image content you may want to take a look at using Cloudinary for all your site and application image needs.Cloudinary is a SaaS which means it's software as a service. It provides you with image management and manipulation on the cloud.

To start you have to create an account at [Cloudinary](https://res.cloudinary.com) once you have done that you will have to confirm by email to activate your account. The free account is all you need for now. However, I would highly recommend taking a look at this type of service for all your image needs.

Cloudinary will help you write [srcset and sizes attributes ](https://cloudinary.com/blog/responsive_images_with_srcset_sizes_and_cloudinary) using the image element. It also contains features that will auto create [picture element tags](https://cloudinary.com/blog/automatically_art_directed_responsive_images) for you that you can directly embed within your HTML or using various supported programming languages.

There is also [great documentation](https://cloudinary.com/documentation/responsive_images) on a host of relevant topics for developers on hosting and service image and video assets.

To get Cloudinary functionality working with WordPress you have to install the Cloudinary Plugin and configure it so you can access your account.
