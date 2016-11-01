## Item Types

Omeka provides a selection of [Item Types](/admin/item-types) by default, only some of which are supported by the Antislavery Then and Now theme (currently the only valid theme):

* Text
* Moving Image
* Sound
* Still Image

Additional elements are added using the MOASElements plugin:

* Embedded Video
* Digital Project
* Project
* People

The remaining item types can be removed by editing them directly on the [Item Types](/admin/item-types) page. Leaving them in place risks the use of an unsupported or incorrect Item Type will cause the item page to appear broken.

In some cases (Fishbone), only a subset of these Item Types are required. As such, the MOASElements plugin was not installed and only Moving Image and Still Image were retained.

## Plugins

In most cases all of these plugins should be installed.

### MOAS Plugins

These plugins have been produced by the University to add functionality not provided by Omeka or any existing third party plugins.

* **MOASAssetRequest:** Provide a mechanism to download all the files (Still Image item type only) as a zip file. Also stores information about the downloader that is viewable in the admin area. No config.
* **MOASDerivatives:** When uploading images to Omeka derivative images are created (fullsize, thumbnail, square thumbnail). While the sizes of these images can be defined in Omeka's settings, this plugin adds an extra size ('header', 1500px). No config.
* **MOASElements:** Adds an additional set of metadata separate from the built in Dublin Core and Item Type sets. No config.
* **MOASItemTypes:** Adds additional item types and associated Item Type Metadata fields. No config.
* **MOASNiceUrls:** Creates 'slug' for Items, to provide a shortened URL. No config.
* **MOASTechnicalElements:** Adds an additional set of metadata specific to technical information for photogreaphs (Fishbone only). No config.
* **MOASDocs:** Adds documentation to the admin area of an Omeka installation. If you're reading this, it's installed. 🎉



### Third party plugins

* **Bulk Metedata Editor:** Updated metadata across multiple records. No config.
* **CSVImport+:** Adds functionality for adding Items in bulk. Details on this process are below. No config.
* **Dropbox:** Adds a list of files that can be added to an Item when adding/editing an item removing the need to upload the file to the server. No config.
* **Hide Elements:** Adds the ability to hide metadata fields from the admin and front end. This is intended to remove needless fields when adding/editing Items and Collections. [Config](/admin/plugins/config?name=HideElements).
* **SimplePages:** Included as part of Omeka's installation, SimplePages allows you to create freeform pages that are separate from the Collection/Item hierarchy. These pages can be added to the site navigation. No config.
* **SimpleVocab:** Adds functionality to change metadata fields to select boxes with a predefined set of options. [Config](/admin/simple-vocab).

### Modified plugins

These plugins have been forked from the original version produced by a third party and modified by the University.

* **HTML5Media:** Changes the embed code for uploaded video and audio (i.e. not embedded from a site like YouTube) to use HTML elements rather than `object`. [Conig](/admin/plugins/config?name=Html5Media).
* **SolrSearch:** Adds Solr as the search provider, also offering faceted searching. We added additional search views (grid, list and map). [Config](/admin/solr-search/server).


## Settings

### General [→](/admin/settings/edit-settings)

* **Administrator Email:** Must be set to `moas-admin@lists.nottingham.ac.uk`.
* **Site Title:** This will appear in the header of the site, so it's important to keep it short: One or two words.
* **Site Description:** This will appear over the featured item on the home page. Again, it's important to keep this text short – maybe 2 short sentences to a paragraph.
* **Site Copyright Information:** This will appear in the footer of the site.
* **Site Author Information:** This does not currently appear anywhere on the site.
* **Tag Delimiter:** Defaults to `,`. Do not change.
* **ImageMagick Directory Path:** ImageMagick is the process that makes derivative images when files are uploaded. This must equal `/usr/bin`.

### Security [→](/admin/settings/edit-security)

These settings can be used to place limits on file types that can be uploaded, exclude particular HTML tags from being used in WYSIWYG editors and set up Captcha. **There is no need to change any settings from the Omeka defaults.**

### Solr Search [→](/admin/settings/edit-search)

The SolrSearch plugin used by MOAS replaces most of Omeka's core search functionality.

* **Fields:** Set the fields that you want to make available to search and the fields that should be faceted upon on the search results page.
* **Facets:** Define the order facets should appear on the search results page. If there are unwanted fields shown you can remove them in 'Fields', as above.
* **Results:** Set 'Facet Count' to a high value (e.g. '500'). The default is 25, which would interfere with the expanded facet view in the theme.


### Element Sets [→](/admin/element-sets)

Dublin Core is the primary element set in Omeka. We have two plugins (MOAS Elements and MOAS Technical Elements) that add new element sets and fields, if required. **There is no need to change any settings here - fields included that are not required should be hidden using the [Hide Elements](/admin/plugins/config?name=HideElements) plugin.**

### Item Type Elements [→](/admin/settings/edit-item-type-elements)

Metadata elements specific to Item Types can be edited here. **There is no need to change any settings here - The MOASItemTypes plugin adds required elements for custom Item Types. Fields that are not required should be hidden using the [Hide Elements](/admin/plugins/config?name=HideElements) plugin.**

### API [→](/admin/settings/edit-api)

We are not using this feature of Omeka. **There is no need to change any settings here.**

## Appearance

### Themes [→](/admin/themes)

Available themes for Omeka can be activated and configured here. Currently, 'Antislavery Then and Now' is the only valid theme for MOAS - **any other themes available on this page will not display content correctly.**

#### Configure Theme

There are a series of options that adjust the theme's appearance and functionality. Most options change the appearance of the site in some way, so ensure that you understand what will happen before making changes.

Even if all the default values displayed match what you want, click 'Save Changes'. This will ensure the values exist in the database (as default values are not necessarily stored yet).

### Navigation [→](/admin/appearance/edit-navigation)

Set the menu options for the main menu. This will be quite specific depending on the archive, and will follow consultation from the UX team.

### Settings [→](/admin/appearance/edit-settings)

* **Display Settings, Results Per Page:** Set this in multiples of 12, so the grid view on the search results page neatly fills each row. Probably don't go higher than 36.

**There is no need to change any other settings from the Omeka defaults.**
