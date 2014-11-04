IRRE foreign_selector demo
==========================

This extension demonstrates how to use the "foreign_selector" functionality of IRRE. The main problem is that
IRRE stores the uid of the parent record in a field in the child record. This is why by default it isn't possible
to assign multiple parents to a child.

To enable this, a TCA enabled and adjusted mm table is used. With this setup, multiple objects of type "City"
can be attached to an "Address" using IRRE - already existing cities can be selected on creating new addresses.

The extension comes with a plugin ("Address list") that demonstrates the output.

Of course the TCA can be adjusted to only allow one child item so it can also be used for a single selection.

The samples of this extension are taken from the TYPO3 Core (FAL Images for tt_content), the extension news
(usage of FileReference model in News records) and the extension html5videoplayer that uses the same TCA
configuration, but doesn't use the Extbase persistence to fetch the objects.