{
    "options": {
        "sectionMappings": {
            "CoverFrontOutside": "Front Cover",
            "CoverBackOutside": "Back Cover",
            "TitlePage": "Title Page",
            "TableOfContents": "Table of Contents",
            "PartOfWork": "Part of Work"
        },
        "rightPanelEnabled": false
    },
    "modules": {
        "genericDialogue": {
            "content": {
                "emptyValue": "please enter a value",
                "pageNotFound": "This item does not contain a page with the number you entered. Try switching the numbering mode to 'image'",
                "ok": "OK",
                "refresh": "Refresh",
                "invalidNumber": "Please enter a valid number"
            }
        },
        "helpDialogue": {
            "content": {
                "title": "Help",
                "text": ""
            }
        },
        "embedDialogue": {
            "options": {
                "embedTemplate": "<div class=\"wellcomePlayer\" data-uri=\"{0}\" data-sequenceindex=\"{1}\" data-assetindex=\"{2}\" data-zoom=\"{3}\" data-config=\"{4}\" style=\"width:{5}px; height:{6}px; background-color: #000\"></div>\n<script type=\"text/javascript\" id=\"embedWellcomePlayer\" src=\"{7}\"></script><script type=\"text/javascript\">/* wordpress fix */</script>"
            },
            "content": {
                "title": "Embed",
                "instructions": "To embed this item in your own website, copy and paste the code below:"
            }
        },
        "pagingHeaderPanel": {
            "content": {
                "help": "Help",
                "image": "Image",
                "page": "Page",
                "first": "First",
                "previous": "Previous",
                "next": "Next",
                "last": "Last",
                "go": "Go",
                "of": "of {0}",
                "emptyValue": "Please enter a value",
                "close": "Close"
            }
        },
        "treeViewLeftPanel": {
            "options": {
                "thumbsLoadRange": 15,
                "thumbsImageFadeInDuration": 300,
                "panelCollapsedWidth": 30,
                "panelExpandedWidth": 255,
                "panelOpen": true,
                "panelAnimationDuration": 250,
				"treeEnabled" : false,
				"thumbsEnabled" : true
            },
            "content": {
                "index": "Index",
                "thumbnails": "Thumbnails"
            }
        },
        "seadragonCenterPanel": {
            "content": {
                "previous": "Previous",
                "next": "Next",
                "zoomIn": "Zoom In",
                "zoomOut": "Zoom Out"
            }
        },
        "moreInfoRightPanel": {
            "options": {
                "panelCollapsedWidth": 30,
                "panelExpandedWidth": 255,
                "panelAnimationDuration": 250,
                "rightPanelEnabled" : false
            },
            "content": {
                "holdingText": "Your module goes here!"
            }
        },
        "footerPanel": {
            "content": {
                "fullScreen": "Full Screen",
                "exitFullScreen": "Exit Full Screen",
                "embed": "Embed"
            }
        }
    }
}
