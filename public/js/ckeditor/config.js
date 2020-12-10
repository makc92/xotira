/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    /*config.removeButtons = 'Save,Print,Preview,Templates,NewPage,DocProps,document,PasteFromWord,Undo,Redo';*/
    config.toolbar_Forum =
        [
            { name: 'riga1', items : ['Bold','Italic','Underline','-','TextColor','BGColor','-',
                    'NumberedList','BulletedList','-',
                    'HorizontalRule','SpecialChar','-','Link','Unlink','-',
                    'Undo','Redo', '-',
                    'JustifyLeft', 'JustifyCenter','JustifyRight','JustifyBlock' ,'-',
                    'Image'] },
            '/',
            { name: 'riga2',      items : ['Outdent','Indent','-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Maximize'] }
        ];

    config.toolbar = 'Forum';
};
