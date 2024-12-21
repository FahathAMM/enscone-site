<!-- <a class="elem"
    href="img/home/1.jpeg"
    title="image 1"
    data-lcl-txt="Description 1"
    data-lcl-author="Author 1"
    data-lcl-thumb="img/home/1.jpeg">
    <span style="background-image: url(img/home/1.jpeg);"></span>
</a>

<a class="elem"
    href="img/home/1.jpeg"
    title="image 2"
    data-lcl-txt="Description 2"
    data-lcl-author="Author 2"
    data-lcl-thumb="img/home/1.jpeg">
    <span style="background-image: url(img/home/1.jpeg);"></span>
</a>

<a class="elem"
    href="img/home/1.jpeg"
    title="image 3"
    data-lcl-txt="Description 3"
    data-lcl-author="Author 3"
    data-lcl-thumb="img/home/1.jpeg">
    <span style="background-image: url(img/home/1.jpeg);"></span>
</a> -->

<div id="lcl_elems_wrapper">
    <a href="img/home/1.jpeg" title="image 1 title" data-lcl-txt="image 1 description" data-lcl-author="image 1 author">
        <img src="img/home/1.jpeg">
    </a>
    <!-- <a href="img/home/1.jpeg" title="image 2 title" data-lcl-txt="image 2 description" data-lcl-author="image 2 author">
        <img src="img/home/1.jpeg">
    </a> -->
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f"
    crossorigin="anonymous">
</script>
<script src="lib/lc/js/lc_lightbox.lite.js"></script>
<link rel="stylesheet" href="lib/lc/css/lc_lightbox.css">
<!-- <link rel="stylesheet" href="skins/minimal.css"> -->
<link rel="stylesheet" href="lib/lc/skins/minimal.css">

<script src="lib/lc/lib/AlloyFinger/alloy_finger.min.js"></script>

<script>
    $('document').ready(function() {
        console.log('ready');

        var $obj = lc_lightbox('#lcl_elems_wrapper a');

        // lc_lightbox('.elem', {

        //     // whether to display a single element or compose a gallery
        //     gallery: true,

        //     // attribute grouping elements - use false to create a gallery with all fetched elements 
        //     gallery_hook: 'rel',

        //     // if a selector is found, set true to handle automatically DOM changes
        //     live_elements: true,

        //     // whether to preload all images on document ready
        //     preload_all: false,

        //     // force elements type
        //     global_type: 'image',

        //     // attribute containing element's source
        //     src_attr: 'href',

        //     // attribute containing the title - is possible to specify a selector with this syntax: "> .selector" or "> span" 
        //     title_attr: 'title',

        //     // attribute containing the description - is possible to specify a selector with this syntax: "> .selector" or "> span" 
        //     txt_attr: 'data-lcl-txt',

        //     // attribute containing the author - is possible to specify a selector with this syntax: "> .selector" or "> span" 
        //     author_attr: 'data-lcl-author',

        //     // whether to enable slideshow
        //     slideshow: true,

        //     // animation duration for lightbox opening and closing / 1000 = 1sec
        //     open_close_time: 500,

        //     // overlay's animation advance (on opening) and delay (on close) to window / 1000 = sec
        //     ol_time_diff: 100,

        //     // elements fading animation duration in millisecods / 1000 = 1sec
        //     fading_time: 150,

        //     // sizing animation duration in millisecods / 1000 = 1sec
        //     animation_time: 300,

        //     // slideshow interval duration in milliseconds / 1000 = 1sec
        //     slideshow_time: 6000,

        //     // autoplay slideshow - bool
        //     autoplay: false,

        //     // whether to display elements counter
        //     counter: false,

        //     // whether to display a progressbar when slideshow runs
        //     progressbar: true,

        //     // whether to create a non-stop pagination cycling elements
        //     carousel: true,

        //     // Lightbox maximum width. 
        //     // Use a responsive percent value or an integer for static pixel value
        //     max_width: '93%',

        //     // Lightbox maximum height. 
        //     // Use a responsive percent value or an integer for static pixel value
        //     max_height: '93%',

        //     // overlay opacity / value between 0 and 1
        //     ol_opacity: 0.7,

        //     // background color of the overlay
        //     ol_color: '#111',

        //     // overlay patterns - insert the pattern name or false
        //     ol_pattern: false,

        //     // width of the lightbox border in pixels 
        //     border_w: 3,

        //     // color of the lightbox border
        //     border_col: '#ddd',

        //     // width of the lightbox padding in pixels
        //     padding: 10,

        //     // lightbox border radius in pixels 
        //     radius: 4,

        //     // whether to apply a shadow around lightbox window
        //     shadow: true,

        //     // whether to hide page's vertical scroller
        //     remove_scrollbar: true,

        //     // custom classes added to wrapper - for custom styling/tracking
        //     wrap_class: '',

        //     // light / dark / Minimal
        //     skin: 'light',

        //     // over / under / lside / rside
        //     data_position: 'over',

        //     // inner / outer
        //     cmd_position: 'inner',

        //     // set closing button position for inner commands - normal/corner 
        //     ins_close_pos: 'normal',

        //     // set arrows and play/pause position - normal/middle
        //     nav_btn_pos: 'normal',

        //     // whether to hide texts on lightbox opening - bool or int (related to browser's smaller side)
        //     txt_hidden: 500,

        //     // bool / whether to display titles
        //     show_title: true,

        //     // bool / whether to display descriptions
        //     show_descr: true,

        //     // bool / whether to display authors
        //     show_author: true,

        //     // enables thumbnails navigation (requires elements poster or images)
        //     thumbs_nav: true,

        //     // print type icons on thumbs if types are mixed
        //     tn_icons: true,

        //     // whether to hide thumbs nav on lightbox opening - bool or int (related to browser's smaller side)
        //     tn_hidden: 500,

        //     // width of the thumbs for the standard lightbox
        //     thumbs_w: 110,

        //     // height of the thumbs for the standard lightbox
        //     thumbs_h: 110,

        //     // attribute containing thumb URL to use or false to use thumbs maker
        //     thumb_attr: false,

        //     // script baseurl to create thumbnails (use src=%URL% w=%W% h=%H%)
        //     thumbs_maker_url: false,

        //     // Allow the user to expand a resized image. true/false
        //     fullscreen: true,

        //     // resize mode of the fullscreen image - smart/fit/fill
        //     fs_img_behavior: 'fit',

        //     // when directly open in fullscreen mode - bool or int (related to browser's smaller side)
        //     fs_only: 500,

        //     // whether to trigger or nor browser fullscreen mode
        //     browser_fs_mode: true,

        //     // bool
        //     socials: true,

        //     // use a specific string representing URL parameters + placeholders (they will be replaced by the lightbox)
        //     // it requires a server-side script handling those parameters and filling the page with <a href="https://www.jqueryscript.net/tags.php?/Facebook/">Facebook</a> Metadata.
        //     // a usage example could be: app_id=YOUR-APP-ID&redirect_uri=THE-REDIRECT-URI&lcsism_img=%IMG%&lcsism_title=%TITLE%&lcsism_descr=%DESCR%
        //     // the lightbox will replace %IMG% %TITLE% and %DESCR%
        //     fb_share_params: false,

        //     // bool / allow text hiding
        //     txt_toggle_cmd: true,

        //     // bool / whether to add download button
        //     download: true,

        //     // bool / Allow touch interactions for mobile (requires AlloyFinger)
        //     touchswipe: true,

        //     // bool / Allow elements navigation with mousewheel
        //     mousewheel: true,

        //     // enable modal mode (no closing on overlay click)
        //     modal: false,

        //     // whether to avoid right click on lightbox
        //     rclick_prevent: false

        // });

    });
</script>