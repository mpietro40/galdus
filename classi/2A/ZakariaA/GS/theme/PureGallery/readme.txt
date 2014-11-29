ReadMe for Timbow's Pure Gallery GetSimple Theme
================================================

This file contains:
1	Some special instructions for use of the theme
2	Some sample code for inserting images into the 'photo-box' blocks
3	Obligatory Copyright Notice for code which originated from pure or YUI


1	Some special instructions for use of the theme
==================================================
Three templates. Select them in Page Options: gallery.php has six images and content below, intended as a homepage. template.php the default has the first image and the title block followed by the standard GS Page and sidebar. nosidebar.php has no sidebar.

Some simple conditional php in the templates allows you to easily insert your own content through the GetSimple Admin pages for all the image boxes plus the footer as well as the normal page, sidebar and tagline. 

When the Theme is activated your pages will display the default sample images and image captions. To replace the images: Make a component and name it image-box-1. Write in the component html image tags for the image of your choice. See below if you are unsure what this means. An empty component will give you an empty box. photo-box-1 is used on every page. If you are using the gallery template you will want to create photo-box-2 and photo-box-3 etc up to 6. See the GS wiki for different components on different pages.

To change the footer: Make a component called footer. Put in it what text and html you like. It will appear on every page. An empty component will give you an empty footer. 

To use Custom Titles: Install and activate the plugin. You don't need to change the template. You will be able to write custom titles in Page Options.


2	Some sample code for inserting images into the 'photo-box' blocks
=====================================================================
If for instance you have uploaded to the uploads folder an image named head.jpg you would write the following in your component.

<img src="<?php get_site_url(); ?>data/uploads/head.jpg"  alt="text here">
or with the full url: <img src="http://www.example.com/data/uploads/head.jpg"  alt="text here">

The image can be a link to a page or site or to itself elsewhere. There is css for photo captions. The full optional syntax for image-box components is:

<a href="http://www.example.com"> <img src="http://www.example.com/images/sample.jpg" alt="Alt Text" title="hover text"> </a>
<aside class="photo-box-caption"> Main Caption Text
<span> and <a href="http://www.flickr.com/photos/95572727@N00/4070581709/">Secondary Text</a> </span>
</aside>


3	Obligatory Copyright Notice for code which originated from pure or YUI
==========================================================================
Software License Agreement (BSD License)
Copyright © 2013 Yahoo! Inc. All rights reserved.
Redistribution and use of this software in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

Neither the name of Yahoo! Inc. nor the names of YUI's contributors may be used to endorse or promote products derived from this software without specific prior written permission of Yahoo! Inc.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.