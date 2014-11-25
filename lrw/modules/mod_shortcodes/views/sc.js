tinymce.PluginManager.add('lrw_shortcode', function(editor, url) {
    // Add a button that opens a window
    editor.addButton('lrw_shortcode', {
        text: 'Layouts',
        icon: false,
        onclick: function() {
            // Open window
            editor.windowManager.open({
                title: 'Select a component',
                body: [
                    //{type: 'textbox', name: 'title', label: 'Title'},
                    {type: 'listbox', 
                        name: 'col_lg', 
                        label: 'Cols lg', 
                        value: 1, 
                        values: [
                            {text:'col-lg-1',value:'1'},
                            {text:'col-lg-2',value:'2'},
                            {text:'col-lg-3',value:'3'},
                            {text:'col-lg-4',value:'4'},
                            {text:'col-lg-5',value:'5'},
                            {text:'col-lg-6',value:'6'},
                            {text:'col-lg-7',value:'7'},
                            {text:'col-lg-8',value:'8'},
                            {text:'col-lg-9',value:'9'},
                            {text:'col-lg-10',value:'10'},
                            {text:'col-lg-11',value:'11'},
                            {text:'col-lg-12',value:'12'}
                        ]
                    },
                    {type: 'listbox', 
                        name: 'col_md', 
                        label: 'Cols md', 
                        value: 0, 
                        values: [
                            {text:'none',value:'0'},
                            {text:'col-md-1',value:'1'},
                            {text:'col-md-2',value:'2'},
                            {text:'col-md-3',value:'3'},
                            {text:'col-md-4',value:'4'},
                            {text:'col-md-5',value:'5'},
                            {text:'col-md-6',value:'6'},
                            {text:'col-md-7',value:'7'},
                            {text:'col-md-8',value:'8'},
                            {text:'col-md-9',value:'9'},
                            {text:'col-md-10',value:'10'},
                            {text:'col-md-11',value:'11'},
                            {text:'col-md-12',value:'12'}
                        ]
                    },
                    {type: 'listbox', 
                        name: 'col_sm', 
                        label: 'Cols sm', 
                        value: 0, 
                        values: [
                            {text:'none',value:'0'},
                            {text:'col-sm-1',value:'1'},
                            {text:'col-sm-2',value:'2'},
                            {text:'col-sm-3',value:'3'},
                            {text:'col-sm-4',value:'4'},
                            {text:'col-sm-5',value:'5'},
                            {text:'col-sm-6',value:'6'},
                            {text:'col-sm-7',value:'7'},
                            {text:'col-sm-8',value:'8'},
                            {text:'col-sm-9',value:'9'},
                            {text:'col-sm-10',value:'10'},
                            {text:'col-sm-11',value:'11'},
                            {text:'col-sm-12',value:'12'}
                        ]
                    },
                    {type: 'listbox', 
                        name: 'col_xs', 
                        label: 'Cols xs', 
                        value: 0, 
                        values: [
                            {text:'none',value:'0'},
                            {text:'col-xs-1',value:'1'},
                            {text:'col-xs-2',value:'2'},
                            {text:'col-xs-3',value:'3'},
                            {text:'col-xs-4',value:'4'},
                            {text:'col-xs-5',value:'5'},
                            {text:'col-xs-6',value:'6'},
                            {text:'col-xs-7',value:'7'},
                            {text:'col-xs-8',value:'8'},
                            {text:'col-xs-9',value:'9'},
                            {text:'col-xs-10',value:'10'},
                            {text:'col-xs-11',value:'11'},
                            {text:'col-xs-12',value:'12'}
                        ]
                    }
                ],
                onsubmit: function(e) {
                    var colsHtml = '[cols ';
                    var cols_lg = e.data.col_lg;
                    var cols_md = e.data.col_md;
                    var cols_sm = e.data.col_sm;
                    var cols_xs = e.data.col_xs;
                    
                    colsHtml += 'lg="'+cols_lg+'" ';
                    if (cols_md !== 0)
                        colsHtml += 'md="'+cols_md+'" ';
                    if (cols_sm !== 0)
                        colsHtml += 'sm="'+cols_sm+'" ';
                    if (cols_xs !== 0)
                        colsHtml += 'xs="'+cols_xs+'" ';
                    
                    colsHtml += '][/cols]';
                    editor.insertContent(colsHtml);
                }
            });
        }
    });
});