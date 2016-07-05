## Item Types

Omeka provides a selection of [Item Types](/admin/item-types) by default, only some of which are supported by the <mark>silver theme</mark>:

* Text
* Moving Image
* Sound
* Still Image

Additional elements are added using the MOASElements plugin:

* Embedded Video
* Digital Project
* Project
* People

The remaining item types can be removed by editing them directly on the [Item Types](/admin/item-types) page. There is no harm in leaving unsupported item types in place, but it adds invalid options to the [Item](/admin/items) pages when adding/editing.

## Required Plugins

### MOAS Plugins

These plugins have been produced by the University to add functionality not provided by Omeka or any existing third party plugins.

* **MOASElements:** Adds an additional set of metadata separare from the built in Dublin Core and Item Type sets.
* **MOASItemTypes:** Adds additional item types and associated Item Type Metadata fields.
* **MOASDerivatives:** When uploading images to Omeka derivative images are created (fullsize, thumbnail, square thumbnail). While the sizes of these images can be defined in Omeka's settings, this plugin adds an extra size ('header', 1500px).
* **MOASDocs:** Adds documentation to the admin area of an Omeka installation. If you're reading this the plugin is insalled and active on this installation.


### Third party plugins

* **SimplePages:** Included as part of Omeka's installation, SimplePages allows you to create freeform pages that are separate from the Collection/Item hierarchy. These pages can be added to the site navigation, s
* **CSVImport:** Adds functionality for adding Items in bulk. Details on this process are below.
* **Dropbox:** Adds a list of files that can be added to an Item when adding/editing an item removing the need to upload the file to the server.
* **Hide Elements:** Adds the ability to hide metadata fields from the admin and front end. This is intended to remove needless fields when adding/editing Items and Collections.
* **SimpleVocab:** Adds functionality to change metadata fields to select boxes with a predefined set of options.
* **SolrSearch:** Adds Solr as the search provider, also offering faceted searching.

### Modified plugins

These plugins have been forked from the original version produced by a third party and modified by the Universty.

* **HTML5Media:** Changes the embed code for uploaded video and audio (i.e. not embedded from a site like YouTube) to use HTML elements rather.


## Settings

### General [→](/admin/settings/edit-settings)

* **Administrator Email:** Must be set to `moas-admin@lists.nottingham.ac.uk`.
* **Site Title:** This will appear in the header of the site, so it's important to keep it short: One or two words.
* **Site Description:** This will appear over the featured item on the home page. Again, it's important to keep this text short – maybe 2 short sentances.
* **Site Copyright Information:** This will appear in the footer of the site.
* **Site Author Information:** This does not currently appear anywhere on the site.
* **Tag Delimiter:** Defaults to `,`. Do not change.
* **ImageMagick Directory Path:** ImageMagick is the process that makes derivative images when files are uploaded. This must equal `/usr/bin`. Do not chage.

### Security [→](/admin/settings/edit-security)

These settings can be used to place limits on file types that can be uploaded, exclude particular HTML tags from being used in WYSIWYG editors and set up Captcha. **There is no need to change any settings from the Omeka defaults.**

### Solr Search [→](/admin/settings/edit-search)

The SolrSearch plugin used by MOAS replaces all of Omeka's core search functionality. **None of these settings will have any affect.**

### Element Sets [→](/admin/element-sets)

After installing the MOASElements plugin there are two element sets available - Dublin Core and MOAS Elements. The fields available for each ste can be edited here. **There is no need to change any settings here - The MOASElements plugin adds required fields, and any fields that are not needed should instead be hidden using the HideElements plugin.**

### Item Type Elements [→](/admin/settings/edit-item-type-elements)

Metadata elements specific to Item Types can be edited here. **There is no need to change any settings here - The MOASItemTypes plugin adds required elements for custom Item Types.**

### API [→](/admin/settings/edit-api)

We are not using this feature of Omeka.

## Appearance

### Themes [→](/admin/themes)

Available themes for Omeka can be activated and configured here. Currently, 'Antislavery Then and Now' is the only valid theme for MOAS - **any other themes available on this page will not work correctly.**

#### Configure Theme

There are a series of options that adjust the theme's appearance and functionality. Most options change the appearance of the site in some way, so ensure that you understand what will happen before making changes.

### Navigation [→](/admin/appearance/edit-navigation)

Change the menu options on the main menu. This will be quite specific depending on the archive, and will follow consultation from the UX team.

### Settings [→](/admin/appearance/edit-settings)

Set image derivative sizes and display settings. **There is no need to change any settings from the Omeka defaults.**
