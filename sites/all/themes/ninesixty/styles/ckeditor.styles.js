﻿/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

/*
 * This file is used/requested by the 'Styles' button.
 * 'Styles' button is not enabled by default in DrupalFull and DrupalFiltered toolbars.
 */

CKEDITOR.addStylesSet( 'drupal',
[
	/* Block Styles */

	// These styles are already available in the "Format" combo, so they are
	// not needed here by default. You may enable them to avoid placing the
	// "Format" combo in the toolbar, maintaining the same features.
	/*
	{ name : 'Paragraph'		, element : 'p' },
	{ name : 'Heading 1'		, element : 'h1' },
	{ name : 'Heading 2'		, element : 'h2' },
	{ name : 'Heading 3'		, element : 'h3' },
	{ name : 'Heading 4'		, element : 'h4' },
	{ name : 'Heading 5'		, element : 'h5' },
	{ name : 'Heading 6'		, element : 'h6' },
	{ name : 'Preformatted Text', element : 'pre' },
	{ name : 'Address'			, element : 'address' },
	*/


	/* Inline Styles */

	// These are core styles available as toolbar buttons. You may opt enabling
	// some of them in the Styles combo, removing them from the toolbar.
	/*
	{ name : 'Strong'			, element : 'strong', overrides : 'b' },
	{ name : 'Emphasis'			, element : 'em'	, overrides : 'i' },
	{ name : 'Underline'		, element : 'u' },
	{ name : 'Strikethrough'	, element : 'strike' },
	{ name : 'Subscript'		, element : 'sub' },
	{ name : 'Superscript'		, element : 'sup' },
	*/

	{ name : 'Link: Lydfil' , element : 'span', styles : { 'background-image' : 'url(/sites/all/themes/ninesixty/images/enterung_ikon_lyd.png)' , 'padding-top' : '2px' ,'padding-left' : '25px' ,  'background-repeat' : 'no-repeat' } },
  { name : 'Link: Dokument' , element : 'span', styles : { 'background-image' : 'url(/sites/all/themes/ninesixty/images/enterung_ikon_doc.png)' , 'padding-top' : '2px' ,'padding-left' : '25px' ,  'background-repeat' : 'no-repeat' } },
  { name : 'Link: Fotoalbum' , element : 'span', styles : { 'background-image' : 'url(/sites/all/themes/ninesixty/images/enterung_ikon_foto.png)' , 'padding-top' : '2px' ,'padding-left' : '25px' ,  'background-repeat' : 'no-repeat' } },


]);
