=== TWB Woocommerce Reviews ===
Contributors: absikandar
Tags: woocommerce review, reviews, testimonials, e-commerce, product review
Donate link: https://wppatch.com/plugins/
Requires at least: 4.6
Tested up to: 6.6.2
Stable tag: 1.7.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Display Woocommerce reviews anywhere using shortcode. Specify reviews using product ID. Now supports Masonry layout.

== Description ==

This plugin let's you add Woocommerce product reviews on a page/post using shortcode. You can specify reviews per product basis, exclude specific reviews, limit the number of reviews displayed and more. There are three layouts. Slider and List and Masonry. The plugin is responsive and easily customizable.

**Use the following shortcode to display reviews from all products:**

`[twb_wc_reviews]`

Allowed Attributes:

*   product_id = Single product ID or comma separated list of IDs to display reviews from.
*   number = To limit the number of reviews displayed.
*   exclude = Exclude specific review/s by review ID.
*   exclude_product = Exclude all reviews from a specific product or a number of products (comma separated list of product IDs).

`[twb_wc_reviews product_id="" number="" exclude="" exclude_product=""]`

**The following shortcode will display upto 5 reviews from products with IDs 57,61,78**

`[twb_wc_reviews product_id="57,61,78" number="5"]`

**Similary the following shortcode will exclude reviews with IDs 2,6,10 and exclude all reviews from the products with IDs 45,55,12**

`[twb_wc_reviews exclude="2,6,10" exclude_product="45,55,12"]`


**To add in a theme template. Use the code below**

`<?php echo do_shortcode('[twb_wc_reviews]'); ?>`

AND with attributes

`<?php echo do_shortcode('[twb_wc_reviews product_id="" number="" exclude="" exclude_product=""]'); ?>`

**There are three layouts. Silder and List and Masonry**

Slider Layout Includes:

* Slide Effect
* Fade Effect

List layout includes:

* One Column / Full Width Layout
* Two Columns Layout
* Three Columns Layout

Masonry layout includes:

* Two Columns Layout
* Three Columns Layout

**In the plugin settings, you can also add Custom CSS to change the layout of the reviews displayed.**

**Please rate if you like it :) **

== Installation ==
Install the plugin and activate. Go to TWB Woocommerce Reviews options page under Settings menu and customize. 
Display the reviews in a page/post using the following shortcode.

`[twb_wc_reviews]`

Allowed Attributes:

*   product_id = Single product ID or comma separated list of IDs to display reviews from.
*   number = To limit the number of reviews displayed.
*   exclude = Exclude specific review/s by review ID.
*   exclude_product = Exclude all reviews from a product or a number of products (comma separated list of product IDs).

`[twb_wc_reviews product_id="" number="" exclude="" exclude_product=""]`

**The following shortcode will display upto 5 reviews from products with IDs 57,61,78**

`[twb_wc_reviews product_id="57,61,78" number="5"]`

**Similary the following shortcode will exclude reviews with IDs 2,6,10 and exclude all reviews from products with IDs 45,55,12**

`[twb_wc_reviews exclude="2,6,10" exclude_product="45,55,12"]`


**To add in a theme template. Use the code below**

`<?php echo do_shortcode('[twb_wc_reviews]'); ?>`

AND with attributes

`<?php echo do_shortcode('[twb_wc_reviews product_id="" number="" exclude="" exclude_product=""]'); ?>`


== Screenshots ==
1. Screenshot
2. Screenshot
3. Screenshot
4. Screenshot
5. Masonry Layout
6. Admin 1
7. Admin 2
8. Comments Order by Random

== Changelog ==

= 1.7.7 =

* Plugin is now Translation Ready
* Compatibility check with WordPress 6.6.2

= 1.7.6 =

* Vulnerability Fix - Cross Site Scripting (XSS)
* Revision of all code and escaping and sanitizing of all input fields. 
* Removal of Custom CSS support. Use WP Default Customizer > Custom CSS from now on.
* Optimization of js code. 

= 1.7.5 =

* Addition - Added functionality to order comments by random.

= 1.7.4 =

* Removed - the_content() filter from review content that caused issues in Elementor's edit mode. 
* Addition - Conditional check so that shortcode only render on frontend. 

= 1.7.3 =

* Fixed - Multisite compatibility.

= 1.7.2 =

* Fixed - Bug Fixed.
* NEW - Added option to reset plugin settings.


= 1.7.1 =

* Fixed - Extra space below review text fixed.

= 1.7 =

* NEW - PHP 7+ Compatibility 
* NEW - WP 5.5.2 Compatibility
* Fixed - Gutter width issue fixed for Masonry layouts.
* Fixed - Some CSS Issues.

= 1.6 =

* NEW - Option added to limit the number of words for review text.
* Fixed - Responsive issues


= 1.5 =

* NEW - Masonry Layout Added.
* NEW - Added support for product name
* NEW - Added support for product image
* NEW - Added support for removing product link from name and image
* NEW - Added support for removing link from the review text
* Compatibility check with WordPress version 4.6.1 
* Bugs fixings and general improvements (CSS, PHP, JS)


= 1.4 =

* Added support to limit the number of reviews displayed.
* Added support to exclude specific product reviews.
* Added support to exclude specific reviews.
* Compatibility check with WordPress version 4.5 
* Bugs fixings and general improvements


= 1.3 =

* Rearranged all the elements on reviews.
* Added Product Name Field
* Optimized overall plugin code
* CSS Improvements
* Bugs fixings and general improvements


= 1.2 =

* Added three new column layouts
* Added Slider Fade Effect
* Optimized overall plugin code
* Bugs fixings and general improvements

= 1.1 =
* Added support to control slider speed if slider layout is selected

= 1.0 =
* Just released
