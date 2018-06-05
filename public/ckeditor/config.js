/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */
CKEDITOR.config.entities = false;
CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	CKEDITOR.config.entities = false;
	config.skin='office2013',
	config.basicEntities = false,
    config.entities = false,
    config.allowedContent = true,
    config.fillEmptyBlocks = false,
    config.fullPage = false,
    config.enterMode = CKEDITOR.ENTER_BR,
	config.filebrowserBrowseUrl = 'http://visadinhcumy.com/public/ckfinder/ckfinder.html',
	config.filebrowserImageBrowseUrl = 'http://visadinhcumy.com/public/ckfinder/ckfinder.html?type=Images',
	config.filebrowserFlashBrowseUrl = 'http://visadinhcumy.com/public/ckfinder/ckfinder.html?type=Flash',
	config.filebrowserUploadUrl = 'http://visadinhcumy.com/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
	config.filebrowserImageUploadUrl = 'http://visadinhcumy.com/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
	config.filebrowserFlashUploadUrl = 'http://visadinhcumy.com/public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
	
};
